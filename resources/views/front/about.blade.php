@extends('front.layouts.master')
@section('title', 'تفاصيل المقال')
@section('content')
@include('front.layouts.common.navbar')

<!-- Main Content -->
<!-- القسم الرئيسي -->
<div class="jumbotron">
    <div class="container text-center">
        <h1>بناء العلاقات الأسرية بثقة</h1>
        <p>نساعدك في إيجاد شريك الحياة المناسب مع ضمان الخصوصية والأمان</p>
        <a href="#" class="btn btn-primary btn-lg">انضم إلينا الآن</a>
    </div>
</div>

<!-- نبذة عن الموقع -->
<div class="container section">
    <div class="row">
        <div class="col-md-6">
            <h2>عن موقعنا</h2>
            <p>موقع زواج متخصص في مساعدة الأفراد على العثور على شريك الحياة المناسب من خلال:</p>
            <ul>
                <li>نظام مطابقة ذكي</li>
                <li>تحقق صارم من الهويات</li>
                <li>دعم فني متواصل 24/7</li>
            </ul>
            <p>مع أكثر من 10 سنوات من الخبرة في مجال العلاقات الأسرية</p>
        </div>
        <div class="col-md-6">
            <img src="{{  asset('front/images/pexels-lood-goosen-521064-1491282.jpg') }}" class="img-responsive" alt="صورة توضيحية">
        </div>
    </div>
</div>

<!-- الخدمات -->
<div class="container-fluid bg-light">
    <div class="container">
        <h2 class="text-center">خدماتنا</h2>
        <div class="row">
            <div class="col-md-3 text-center">
                <span class="glyphicon glyphicon-heart service-icon"></span>
                <h4>البحث المتقدم</h4>
                <p>ابحث عن شريكك المثالي باستخدام معايير دقيقة</p>
            </div>
            <div class="col-md-3 text-center">
                <span class="glyphicon glyphicon-lock service-icon"></span>
                <h4>حماية الخصوصية</h4>
                <p>نظام أمان متقدم لحماية بياناتك الشخصية</p>
            </div>
            <div class="col-md-3 text-center">
                <span class="glyphicon glyphicon-envelope service-icon"></span>
                <h4>المراسلة الآمنة</h4>
                <p>تواصل مع الآخرين بأمان تام</p>
            </div>
            <div class="col-md-3 text-center">
                <span class="glyphicon glyphicon-ok service-icon"></span>
                <h4>دعم الزواج الناجح</h4>
                <p>نصائح واستشارات زوجية من خبراء</p>
            </div>
        </div>
    </div>
</div>

<!-- حث على التسجيل -->
<div class="well text-center">
    <h3>جرب تجربة التعارف الآمنة معنا</h3>
    <a href="#" class="btn btn-success btn-lg">أنشئ حسابك المجاني</a>
</div>

@endsection