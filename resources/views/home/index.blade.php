@extends('layouts.home')

@section('page-title'){{ __('آی بیو - IBio') }}@endsection

@section('content')
    <section id="header" class="container px-5 py-12 mx-auto w-full md:w-10/12 lg:w-10/12 xl:w-8/12 text-right">
        <div class="flex flex-col md:flex-row items-center justify-between">
            <div class="w-full">
                <h1 class="text-5xl font-bold mb-10 leading-normal">
                    با
                    <span class="text-purple-600">لینک</span>
                    شخصیت پول هم دریافت کُن!
                </h1>
                <h2 class="text-2xl text-gray-700 mb-3">
                    <span>یه لینک همه کاره</span>
                    <span class="font-extrabold">رایگان</span>
                </h2>
                <h2 class="text-2xl text-gray-700 mb-7">که میتونی باهاش خیلی راحت پول دریافت کنی</h2>
                <p class="text-2xl text-gray-700 mb-12">
                    همین الان لینکتو ثبت کُن 🎉
                </p>
                <form action="{{ route('register') }}" class="flex justify-end mb-10 ltr">
                    <div class="relative flex items-center mr-2">
                        <span class="text-xl absolute ml-2 md:ml-4 text-gray-400 ">ibio.link/</span>
                        <input type="text" required name="username" placeholder="yourname" class="bg-gray-100 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-black focus:bg-white placeholder-gray-800 rounded-lg py-4 pr-2 md:mr-4 block w-full text-xl" style="padding-left: 5.9rem" autocomplete="off">
                    </div>
                    <button type="submit" class="bg-purple-600 hover:bg-purple-400 transition-colors focus:outline-none text-md xl:text-xl text-white py-3 px-3 xl:px-6 rounded-lg" style="min-width: 130px;">ایجاد لینک</button>
                </form>
            </div>
            <div class="mx-auto mr-0 md:mr-5 flex items-center justify-center w-full md:w-auto">
                <img src="{{ asset('static/images/sample-mobile.png') }}" alt="ibio.link" class="rounded-3xl border-8 border-gray-900 w-full shadow-2xl" style="max-width: 340px">
            </div>
        </div>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 150"> <path fill="#f4edfa" fill-opacity="1" d="M0,96L48,106.7C96,117,192,139,288,128C384,117,480,75,576,69.3C672,64,768,96,864,96C960,96,1056,64,1152,48C1248,32,1344,32,1392,32L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path> </svg>
    <section class="relative bg-purple-100 px-5 mx-auto w-full text-right py-10 md:py-0">
        <div class="container mx-auto">
            <div class="w-full md:w-10/12 lg:w-10/12 xl:w-8/12 mx-auto flex flex-col md:flex-row items-center">
                <div class="w-full sm:w-1/2 mb-5 md:mb-0">
                    <h2 class="text-4xl mb-8 leading-loose">{{ __('همه لینکاتو یه جا داشته باش') }}</h2>
                    <p class="mb-3 text-lg leading-loose">همه لینکاتو جمع کن یجا و توی شبکه های اجتماعی مثل اینستاگرام و توییتر بذارش توی پروفایلت.</p>
                    <p class="text-lg leading-loose">میتونی توی صفحه شخصیت همه لینک های شبکه های اجتماعیت و راه های ارتباطیت رو بذاری</p>
                </div>
                <div class="w-full sm:w-1/2">
                    <img src="{{ asset('static/images/social.png') }}" alt="Dashboard" class="w-full">
                </div>
            </div>
        </div>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 150"> <path fill="#f4edfa" fill-opacity="1" d="M0,96L48,106.7C96,117,192,139,288,128C384,117,480,75,576,69.3C672,64,768,96,864,96C960,96,1056,64,1152,48C1248,32,1344,32,1392,32L1440,32L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path> </svg>
    <section class="relative px-5 mx-auto w-full py-10 leading-loose">
        <div class="container mx-auto">
            <div class="w-full md:w-10/12 lg:w-10/12 xl:w-8/12 mx-auto flex flex-col lg:flex-row items-center">
                <div class="w-full md:w-1/2 flex justify-center mb-10 lg:mb-0">
                    <img src="{{ asset('static/images/donation-sample.png') }}" alt="ibio.link donation" class="rounded-3xl border-8 border-gray-900 w-full shadow-2xl ml-5" style="max-width: 200px">
                    <img src="{{ asset('static/images/donation-sample-2.png') }}" alt="ibio.link donation" class="rounded-3xl border-8 border-gray-900 w-full shadow-2xl" style="max-width: 200px">
                </div>
                <div class="w-full md:w-1/2 text-center lg:text-right">
                    <h2 class="text-4xl mb-8 leading-loose">حمایت مالی دریافت کن</h2>
                    <p class="mb-3 text-lg leading-loose">از لینک شخصیت میتونی حمایت های مالی رو بصورت مستقیم توی کیف پول شبکه پرداخت پِی دریافت کنی</p>
                </div>
            </div>
        </div>
    </section>
    <section class="relative px-5 mx-auto w-full py-20">
        <h2 class="text-2xl mb-10 text-center">همین الان لینکتو دریافت کُن</h2>
        <form action="{{ route('register') }}" class="flex justify-center items-center ltr">
            <div class="relative flex items-center mr-2">
                <span class="text-xl absolute ml-2 md:ml-4 text-gray-400 ">ibio.link/</span>
                <input type="text" required name="username" placeholder="yourname" class="bg-gray-100 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-black focus:bg-white placeholder-gray-800 rounded-lg py-4 pr-2 md:mr-4 block w-full text-xl" style="padding-left: 5.9rem" autocomplete="off">
            </div>
            <button type="submit" class="bg-purple-600 hover:bg-purple-400 transition-colors focus:outline-none text-md xl:text-xl text-white py-3 px-3 xl:px-6 rounded-lg" style="min-width: 130px;">ایجاد لینک</button>
        </form>
    </section>
@endsection
