<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Cache;
use PragmaRX\Google2FALaravel\Google2FA;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'username',
        'password',
        'avatar',
        'social',
        'page',
        'active',
        'two_factor_enabled',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'active' => 'boolean',
        'two_factor_enabled' => 'boolean',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function links()
    {
        return $this->hasMany('App\Models\Link');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function stats()
    {
        return $this->morphMany('App\Models\Stat', 'statable');
    }

    /**
     * Enable 2FA
     *
     * @param null $secretKey
     * @return string
     * @throws \PragmaRX\Google2FA\Exceptions\IncompatibleWithGoogleAuthenticatorException
     * @throws \PragmaRX\Google2FA\Exceptions\InvalidCharactersException
     * @throws \PragmaRX\Google2FA\Exceptions\SecretKeyTooShortException
     */
    public function enableTwoFactor($secretKey = null)
    {
        $twoFactor = new Google2FA(new Request());
        if (!$secretKey) {
            $secretKey = $twoFactor->generateSecretKey();
        }

        $qrImage = $twoFactor->getQRCodeInline(
            config('app.name'),
            $this->email,
            $secretKey
        );

        Cache::put('two_factor_' . $this->id, $secretKey, 500);

        return $qrImage;
    }

    /**
     * @param $secret
     * @param $code
     * @return mixed
     */
    public function verifyTwoFactor($secret, $code)
    {
        $twoFactor = new Google2FA(new Request());
        $verify = $twoFactor->verifyGoogle2FA($secret, $code);

        if ($verify) {
            $this->update([
                'two_factor_enabled' => 1,
                'two_factor_secret' => $secret,
            ]);
        }

        return $verify;
    }

    /**
     * Disable 2FA
     *
     * @return void
     */
    public function disableTwoFactor()
    {
        $this->update([
            'two_factor_enabled' => 0,
            'two_factor_secret' => null,
        ]);
    }
}