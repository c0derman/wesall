@extends('front.layouts.master')
@section('title', 'تفاصيل المقال')
@section('content')
@include('front.layouts.common.navbar')



<section class="login-page">

    <div class="container-fluid">
        <div class="logo-container">
            <img src="{{ asset('front/images/logo.png')  }}" alt=" Logo" class="logo">
            <h1 class="brand-name">موقع الزواج</h1>
        </div>
        <div class="row">
            <!-- Left Side: Background Image -->

            <!-- Right Side: Login Form -->
            <div class="col-md-3 login-container">
                <div class="login-form">
                    <img src="{{ asset('front/images/logo.png')  }}" alt=" Logo" class="login-logo">
                    <h2>تسجيل الدخول لحسابك</h2>
                    <form>
                        <div class="form-group">
                            <label for="username">اسم المستخدم او البريد الالكتروني</label>
                            <input type="text" class="form-control" id="username" placeholder="اسم المستخدم او البريد الالكتروني">
                        </div>
                        <div class="form-group">
                            <label for="password">كلمة المرور</label>
                            <input type="password" class="form-control" id="password" placeholder="كلمة المرور">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> تذكرنى دائما
                            </label>
                        </div>
                        <div class="captcha-container">
                            <div class="g-recaptcha" data-sitekey="your_site_key"></div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">دخول</button>
                        <button type="button" class="btn btn-danger btn-block"><i class="fa fa-google"></i> دخول بواسطة جوجل</button>
                        <button type="button" class="btn btn-facebook btn-block"><i class="fa fa-facebook"></i> دخول بواسطة الفيسبوك </button>
                        <button type="button" class="btn btn-default btn-block">دخول بواسطة المطابقة الثنائية</button>
                        <a href="#" class="forgot-password"> هل نسيت كلمة المرور?</a>
                    </form>
                    <p class="create-account-text">لا تمتلك حساب? انشاء حساب مجانى الان!</p>
                    <button type="button" class="btn btn-success btn-block">انساء حساب!</button>
                </div>
            </div>
            <div class="cold-md-6">

            </div>
        </div>
    </div>

</section>

@endsection