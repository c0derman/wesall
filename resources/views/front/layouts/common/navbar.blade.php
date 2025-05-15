<!-- الناف بار والهيدر-->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                <img src="{{ asset('front/images/logo.png') }}" alt="Logo" class="logo">
            </a>
        </div>
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ url('/') }}">الصفحة الرئيسية</a></li>
                <li><a href="#features">الميزات</a></li>
                <li><a href="#testimonials">قصص النجاح</a></li>
                <li><a href="#faq">الأسئلة الشائعة</a></li>
                 <li><a href="{{ url('/about-us') }}">من نحن  </a></li>
                 <li><a href="{{ url('/search') }}"> البحث  </a></li>
                 <li><a href="{{ url('/contact') }}"> تواصل معنا  </a></li>
            </ul>
            <ul class="nav navbar-nav navbar-left">
                <li><a href="{{ url('/signup') }}" class=" navbar-btn">سجل الآن</a></li>
                <li><a href="{{ url('/signin') }}" class=" navbar-btn">دخول الآن</a></li>
            </ul>
        </div>
    </div>
</nav>