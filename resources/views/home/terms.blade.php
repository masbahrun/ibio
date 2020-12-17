@extends('layouts.home')

@section('page-title'){{ __('قوانین و شرایت استفاده') }}@endsection

@section('content')
    <section id="content" class="px-5 py-10 mx-auto w-full content">
        <div class="container mx-auto">
            <div class="w-full md:w-8/12 mx-auto">
                <div class="col-12">
                    <h1 class="mb-10 text-4xl">قوانین و شرایت استفاده</h1>
                    <article class="mb-10">
                        <h2 class="mb-3">پلتفرم</h2>
                        <p>منظور از پلتفرم، وب سایت
                            <a href="{{ url('/') }}">ibio.link</a> و تمامی خدمات قابل دسترس در این دامین می باشد.</p>
                    </article>
                    <article class="mb-10">
                        <h2 class="mb-3">لینک شخصی</h2>
                        <p>تمامی آدرس های ibio.link/username که در آن username نامهای دلخواه کاربران می باشد یک لینک شخصی تلقی میشود.</p>
                    </article>
                    <article class="mb-10">
                        <h2 class="mb-3">کاربر</h2>
                        <p>هرکسی که در پلتفرم ibio.link ثبت نام کرده و دارای لینک شخصی می باشد، کاربر تلقی می شود و دارای حساب کاربری می باشد.</p>
                    </article>
                    <article class="mb-10">
                        <h2 class="mb-3">محتوا</h2>
                        <p>منظور از محتوا تمامی داده های قابل ورود به پلفرم توسط کاربر مانند تصویر پروفایل، لینک ها، متن ها و ... می باشد</p>
                    </article>
                    <article class="mb-10">
                        <h2 class="mb-3">قوانین محتوا</h2>
                        <p>مسئولیت محتوای تولید شده به عهده استفاده کننده از خدمات می باشد و همچنین ibio.link مجاز است که در صورت مشاهده محتوای مغایر با قوانین جاری جمهوری اسلامی ایران، محتوای مورد نظر را حذف و یا حتی حساب کاربری متخلف را مسدود کرده و اجازه استفاده از خدمات را از کاربر متخلف سلب کند.</p>
                    </article>
                    <article class="mb-10">
                        <h2 class="mb-3">حقوقی</h2>
                        <p>در صورت انجام هرگونه پرداخت غیر مجاز از نظر قوانین جاری جمهوری اسلامی ایران، مسئولیت آن به عهده دارنده حساب کاربری می باشد و در صورت درخواست مراجع قضایی کشور برای دریافت اطلاعات تراکنش ها، ibio.link کاملا همکاری لازم را با مراجع قضایی انجام خواهد داد.</p>
                    </article>
                    <article class="mb-10">
                        <h2 class="mb-4">درگاه پرداخت</h2>
                        <p>تنها پلتفرم پرداخت مورد پشتیبانی
                            <a href="https://pay.ir" target="_blank">pay.ir</a>
                            می باشد. بنابراین کاربر برای استفاده از حمایت مالی می بایست اقدام به دریافت درگاه به آدرس http://ibio.link از شبکه پرداخت پِی کند.
                        </p>
                    </article>
                    <article class="mb-10">
                        <h2 class="mb-4">ثبت نام</h2>
                        <p>ثبت نام در پلتفرم به معنای قبول تمامی قوانین در داخل این صفحه می باشد.</p>
                    </article>
                    <article class="mb-10">
                        <h2 class="mb-4">حذف اطلاعات</h2>
                        <p>اطلاعات حذف شده توسط کاربر از قبیل لینک و یا حساب کاربری به هیچ عنوان قابل بازگردانی نمی باشند.</p>
                    </article>
                    <article class="mb-10">
                        <h2 class="mb-4">پشتیبانی</h2>
                        <p>پشتیبانی به صورت آفلاین بوده و پاسخگویی به مشکلات و سوالات نیاز به حداقل یک روز کاری می باشد.</p>
                    </article>
                    <article class="mb-10">
                        <h2 class="mb-4">بروزرسانی قوانین</h2>
                        <p>ibio.link مجاز است هر زمانی به صلاح دید خود قوانین موجود در پلتفرم را تغییر دهد.</p>
                    </article>
                </div>
            </div>
        </div>
    </section>
@endsection
