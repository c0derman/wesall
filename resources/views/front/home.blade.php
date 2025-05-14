@extends('front.layouts.master')
@section('title', 'تفاصيل المقال')
@section('content')
@include('front.layouts.common.navbar')


<!-- القسم الرئيسي (Hero Section) -->
<header id="home" class="hero-section">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center hero-content col-md-offset-3">
                <h1>ابدأ رحلتك نحو الحب</h1>
                <p class="lead">انضم إلى آلاف الأشخاص الذين وجدوا شريك حياتهم معنا.</p>
                <a href="#signup" class=" btn-lg">ابدأ الآن</a>
            </div>

        </div>
    </div>

</header>
<!--  اسفل الهيدر  -->
<div class="second-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p>اعثر على شريك حياتك المثالي الحب يبدأ هنا!
                </p>
            </div>
            <div class="col-md-6">
                <div class="im-love">
                    <img src="{{ asset('front/images/bg-image.png') }} " alt="اعثر على شريك حياتك المثالي الحب يبدأ هنا!
                         " />
                </div>
            </div>
        </div>
    </div>
</div>
<!--  من نحن -->
<section class="about-us">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-right">
                <img src="{{ asset('front/images/pexels-photography-maghradze-ph-1659410-7000004.jpg') }}" alt="imgaes" />
            </div>
            <div class="col-md-6 middele">
                <h2>من نحن</h2>
                <h3>الحب بسيط، والعلاقات حقيقية.</h3>
                <p>
                    يجب أن يكون العثور على الحب أمرًا بسيطًا وآمنًا ومثيرًا. صُممت منصتنا لربط الأشخاص ذوي الاهتمامات المتشابهة، وبناء علاقات حقيقية تدوم طويلًا. بفضل البحث المتقدم، والميزات سهلة الاستخدام، والالتزام بالخصوصية، نجعل رحلة المواعدة الخاصة بك سهلة للغاية. سواء كنت تبحث عن صداقة، أو رومانسية، أو شريك حياة، فنحن هنا لمساعدتك في كل خطوة. ابدأ الاستكشاف ودع علاقاتك القيّمة تتكشف!

                </p>
            </div>

        </div>
    </div>

</section>
<!--  البحث  -->
<div class="bg-image">
    <div class="overlay"></div>
    <div class="container search-container">
        <div class="logo">
            <img src=" {{ asset('front/images/logo.png') }} " alt=" Logo">
        </div>
        <div class="search-title">ابحث عن شخصك المفضل الان</div>
        <div class="search-subtitle">خطوات بسيطه تفضلك عن لقاءك لشخصك المفضلك والزواج منه ابحث الان !!!!.</div>
        <div class="icon-heart">
            <img src=" {{ asset('front/images/heart.png') }} " alt="Heart Icon">
        </div>
        <form id="search-form">
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="looking-for">تبحث عن</label>
                        <select class="form-control" id="looking-for">
                            <option value="all">الكل</option>
                            <option value="male">ذكر</option>
                            <option value="female">أنثى</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="min-age">العمر</label>
                        <input type="number" class="form-control" id="min-age" placeholder="Min Age" min="18" max="100" value="18">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="max-age">الي</label>
                        <input type="number" class="form-control" id="max-age" placeholder="Max Age" min="18" max="100" value="50">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="m">إبحث الان</label>
                        <input type="submit" class="form-control navbar-btn" id="m" value="أبحث الان">
                    </div>
                </div>
            </div>

        </form>
    </div>
</div>

<section class="howitworks">

    <!-- Header Section -->
    <div class="container text-center my-5">
        <h2 class="text-danger">كيف يعمل موقعنا</h2>
        <h2>اكتشف، تواصل، انمُ: دليل لبناء روابط ذات معنى
        </h2>
    </div>

    <!-- Main Content Section -->
    <div class="container">
        <div class="row justify-content-around align-items-center">

            <!-- Left Column -->
            <div class="col-md-4">
                <!-- Find The Match -->
                <div class="mb-5">
                    <div class="d-flex align-items-center mb-3">
                        <div class="circle-icon bg-primary rounded-circle text-white p-3">
                            <i class="fas fa-search"></i>
                        </div>
                    </div>
                    <h3>ابحث عن شخصك المفضل</h3>
                    <p>
                        استكشف المطابقات المحتملة بناءً على التوافق والاهتمامات المشتركة والتفضيلات.

                    </p>
                </div>

                <!-- Initiate Conversation -->
                <div>
                    <div class="d-flex align-items-center mb-3">
                        <div class="circle-icon bg-secondary rounded-circle text-white p-3">
                            <i class="fas fa-comment-dots"></i>
                        </div>
                    </div>
                    <h3>بدء المحادثة </h3>
                    <p>
                        اتخذ الخطوة الأولى عن طريق إرسال رسالة وابدأ في بناء اتصال يمكن أن يتحول إلى شيء خاص.
                    </p>
                </div>
            </div>

            <!-- Center Image -->
            <div class="col-md-4 d-flex justify-content-center cen-images">
                <img src="{{ asset('front/images/bg-2.png') }}" alt="Match Image" class="img-fluid rounded shadow">
            </div>

            <!-- Right Column -->
            <div class="col-md-4">
                <!-- تسجيل -->
                <div class="mb-5">
                    <div class="d-flex align-items-center mb-3">
                        <div class="circle-icon bg-danger rounded-circle text-white p-3">
                            <i class="fas fa-user-plus"></i>
                        </div>
                    </div>
                    <h3>تسجيل</h3>
                    <p>
                        قم بالتسجيل في بضع خطوات بسيطة وكن جزءًا من مجتمع نابض بالحياة يبحث عن اتصالات ذات مغزى.

                    </p>
                </div>

                <!-- Create a Profile -->
                <div>
                    <div class="d-flex align-items-center mb-3">
                        <div class="circle-icon bg-success rounded-circle text-white p-3">
                            <i class="fas fa-user"></i>
                        </div>
                    </div>
                    <h3>إنشاء ملف تعريف </h3>
                    <p>
                        استعرض شخصيتك من خلال إضافة الصور ومشاركة اهتماماتك لمساعدة الآخرين على التعرف عليك بشكل أفضل
                        .
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>
<section class="featboximg">



    <div class="container">
        <div class="row">
            <!-- Left Section -->
            <div class="col-md-4 headingbox">
                <h2 style="color: #e91e63;">خدماتنا</h2>
                <h1>
                    استمتع بميزاتنا الخاصة
                </h1>
                <a href="#" class="learn-more-btn">شاهد المزيد</a>
            </div>
            <!-- Right Section -->
            <div class="col-md-8">
                <div class="row">
                    <!-- Feature 1 -->
                    <div class="col-md-6">
                        <div class="feature-box">
                            <div class="feature-icon">
                                <i class="fa fa-gift" aria-hidden="true"></i>
                            </div>
                            <h3 class="feature-title">نظام النقاط</h3>
                            <p class="feature-description">
                                استخدم النقاط لإرسال الهدايا والملصقات، مما يجعل محادثاتك أكثر متعة وتفاعلية! اشترِ النقاط بسهولة وعبّر عن نفسك بأسلوب فريد.
                            </p>
                        </div>
                    </div>
                    <!-- Feature 2 -->
                    <div class="col-md-6">
                        <div class="feature-box">
                            <div class="feature-icon">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </div>
                            <h3 class="feature-title">بحث متقدم</h3>
                            <p class="feature-description">
                                حسّن بحثك باستخدام عوامل تصفية متعددة مثل العمر والموقع والمهنة والاهتمامات. اعثر بسهولة على الملفات الشخصية التي تناسب تفضيلاتك لتجربة مواعدة أكثر تخصيصًا. </p>
                        </div>
                    </div>
                    <!-- Feature 3 -->
                    <div class="col-md-6">
                        <div class="feature-box">
                            <div class="feature-icon">
                                <i class="fa fa-credit-card" aria-hidden="true"></i>
                            </div>
                            <h3 class="feature-title">بوابات الدفع</h3>
                            <p class="feature-description">
                                معاملات آمنة وسهلة في متناول يديك! يمكن للمستخدمين شراء الرصيد بسهولة باستخدام Stripe وPayPal وRazorpay وCoingate وPaystack، مما يضمن تجربة دفع سلسة ومرنة. </p>
                        </div>
                    </div>
                    <!-- Feature 4 -->
                    <div class="col-md-6">
                        <div class="feature-box">
                            <div class="feature-icon">
                                <i class="fa fa-moon-o" aria-hidden="true"></i>
                            </div>
                            <h3 class="feature-title">عصري، داكن وجميل</h3>
                            <p class="feature-description">
                                استمتع بأناقة سمة "داكن وجميل" - حيث يلتقي التصميم الأنيق بالوظائف السلسة. </p>
                        </div>
                    </div>
                    <!-- Feature 5 -->
                    <div class="col-md-6">
                        <div class="feature-box">
                            <div class="feature-icon">
                                <i class="fa fa-share-alt" aria-hidden="true"></i>
                            </div>
                            <h3 class="feature-title">تسجيل الدخول الاجتماعي</h3>
                            <p class="feature-description">
                                تسجيل الدخول الاجتماعي هو تسجيل دخول واحد للمستخدمين النهائيين، باستخدام معلومات تسجيل الدخول الحالية من مزود خدمة شبكات التواصل الاجتماعي مثل فيسبوك أو جوجل. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- الميزات الرئيسية -->
<section id="features" class="section-padding">
    <div class="container">
        <h2 class="text-center">ميزاتنا الرئيسية</h2>
        <div class="row">
            <div class="col-md-4 text-center feature-item">
                <i class="fa fa-search fa-3x text-primary"></i>
                <h4>البحث المتقدم</h4>
                <p>ابحث عن شريكك المثالي باستخدام الفلاتر الذكية.</p>
            </div>
            <div class="col-md-4 text-center feature-item">
                <i class="fa fa-heart fa-3x text-danger"></i>
                <h4>نظام المطابقة</h4>
                <p>نظام ذكي يقترح عليك الشركاء الأنسب بناءً على اهتماماتك.</p>
            </div>
            <div class="col-md-4 text-center feature-item">
                <i class="fa fa-user fa-3x text-info"></i>
                <h4>إنشاء ملف شخصي</h4>
                <p>شارك تفاصيلك الشخصية لزيادة فرصك في العثور على شريك الحياة.</p>
            </div>
        </div>
    </div>
</section>
<!-- معاينة الأعضاء -->
<section id="members-preview" class="section-padding bg-light">
    <div class="container">
        <h2 class="text-center">معاينة لأعضائنا</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="member-card text-center">
                    <img src="{{ asset('front/images/pexels-icaro-rogenys-49215447-7777906.jpg') }}" alt="عضو 1" class="img-circle member-avatar">
                    <h4>محمد</h4>
                    <p>مهندس برمجيات</p>
                    <a href="#" class="btn btn-default btn-sm">عرض الملف الشخصي</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="member-card text-center">
                    <img src="{{ asset('front/images/pexels-imagestudio-1488318.jpg') }}" alt="عضو 2" class="img-circle member-avatar">
                    <h4>سارة</h4>
                    <p>مصممة جرافيك</p>
                    <a href="#" class="btn btn-default btn-sm">عرض الملف الشخصي</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="member-card text-center">
                    <img src="{{ asset('front/images/pexels-lood-goosen-521064-1491282.jpg') }}" alt="عضو 3" class="img-circle member-avatar">
                    <h4>أحمد</h4>
                    <p>طبيب أسنان</p>
                    <a href="#" class="btn btn-default btn-sm">عرض الملف الشخصي</a>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- الإحصائيات -->
<section id="statistics" class="section-padding bg-light">
    <div class="container">
        <h2 class="text-center">إحصائياتنا</h2>
        <div class="row text-center">
            <div class="col-md-4">
                <h3>100K+</h3>
                <p>مستخدم نشط</p>
            </div>
            <div class="col-md-4">
                <h3>50K+</h3>
                <p>قصة نجاح</p>
            </div>
            <div class="col-md-4">
                <h3>90%</h3>
                <p>رضا العملاء</p>
            </div>
        </div>
    </div>
</section>

<!-- قصص النجاح -->
<section id="testimonials" class="section-padding">
    <div class="container">
        <h2 class="text-center">قصص النجاح</h2>
        <div class="row">
            <div class="col-md-4 text-center testimonial-item">
                <blockquote>
                    <p>"وجدت شريكة حياتي هنا. شكراً لكم!"</p>
                    <footer>- محمد</footer>
                </blockquote>
            </div>
            <div class="col-md-4 text-center testimonial-item">
                <blockquote>
                    <p>"تجربة رائعة ومميزة. أنصح الجميع بالانضمام!"</p>
                    <footer>- سارة</footer>
                </blockquote>
            </div>
            <div class="col-md-4 text-center testimonial-item">
                <blockquote>
                    <p>"خدمة ممتازة وفريق دعم رائع."</p>
                    <footer>- أحمد</footer>
                </blockquote>
            </div>
        </div>
    </div>
</section>

<!-- الأسئلة الشائعة -->
<section id="faq" class="section-padding bg-light">
    <div class="container">
        <h2 class="text-center">الأسئلة الشائعة</h2>
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            كيف يمكنني التسجيل؟
                        </a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">
                        يمكنك التسجيل عن طريق النقر على زر "سجل الآن" وإدخال بياناتك الشخصية.
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            هل الخدمة مجانية؟
                        </a>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="panel-body">
                        نحن نقدم خطة مجانية وخطة مدفوعة. يمكنك اختيار ما يناسبك.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection