@extends('front.layouts.master')
@section('title', 'تفاصيل المقال')
@section('content')
@include('front.layouts.common.navbar')


<!-- hero -->
<section class="contact-hero">

    <div class="container">
        <div class="row">
            <h2> اتصل بنا</h2>
            <p>نحن هنا لمساعدتك</p>
        </div>
    </div>
</section>
<!-- Main Content -->
<div class="container">


    <div class="row">
        <div class="col-md-4 contact-box">
            <i class="fa fa-phone contact-icon"></i>
            <h4>مكالمة</h4>
            <p><a href="tel:966622541245454">966622541245454</a></p>
            <a href="#" class="btn btn-primary btn-block">اتصل الان </a>
        </div>

        <div class="col-md-4 contact-box">
            <i class="fa fa-comment contact-icon"></i>
            <h4>شات فورى</h4>
            <p>متاحين على مدار الساعه </p>
            <a href="#" class="btn btn-primary btn-block">دردش الان</a>
        </div>
        <div class="col-md-4 contact-box">
            <i class="fa fa-envelope contact-icon"></i>
            <h4>اسال سؤال</h4>
            <p>اذا كان لديك سؤال او استفسار اسالنا ونجاوب فورا.</p>
            <a href="#" class="btn btn-primary btn-block">اسال الان</a>
        </div>
    </div>

    <!-- Contact Form -->
    <div class="row">
        <div class="col-md-8 col-md-offset-2 con-form">
            <h3>اترك لنا رسالة</h3>
            <form>
                <div class="form-group">
                    <label for="name">الاسم</label>
                    <input type="text" class="form-control" id="name" placeholder="الاسم " required>
                </div>
                <div class="form-group">
                    <label for="email">البريد الالكتروني</label>
                    <input type="email" class="form-control" id="email" placeholder=" البريد الالكتروني" required>
                </div>
                <div class="form-group">
                    <label for="subject">الموضوع</label>
                    <input type="text" class="form-control" id="subject" placeholder="الموضوع" required>
                </div>
                <div class="form-group">
                    <label for="message">رسالتك</label>
                    <textarea class="form-control" id="message" rows="5" placeholder=" رسالتك" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-block">ارسال</button>
            </form>
        </div>
    </div>


</div>

@endsection