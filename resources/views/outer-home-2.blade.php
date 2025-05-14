<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="<?= config('CURRENT_LOCALE_DIRECTION') ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Primary Meta Tags -->
    <title>{{ getStoreSettings('name') }}</title>
    <meta name="title" content="{{ getStoreSettings('name') }}">
    <meta name="description" content="{{ getStoreSettings('name') }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:title" content="{{ getStoreSettings('name') }}">
    <meta property="og:description" content="{{ getStoreSettings('name') }}">
    <meta property="og:image" content="{{ getStoreSettings('logo_image_url') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url('/') }}">
    <meta property="twitter:title" content="{{ getStoreSettings('name') }}">
    <meta property="twitter:description" content="{{ getStoreSettings('name') }}">
    <meta property="twitter:image" content="{{ getStoreSettings('logo_image_url') }}">

    <?= __yesset(['dist/css/bootstrap-assets-app*.css', 'dist/css/public-assets-app*.css', 'dist/fa/css/all.min.css', 'dist/css/app-theme*.css'], true) ?>

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Katibeh&family=Protest+Riot&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">
    <!-- Google fonts -->

    <link rel="shortcut icon" href="<?= getStoreSettings('favicon_image_url') ?>" type="image/x-icon">
    <link rel="icon" href="<?= getStoreSettings('favicon_image_url') ?>" type="image/x-icon">

    <style>
    .masthead {
        background: linear-gradient(0deg, rgba(198, 29, 97, 0.1), rgba(198, 29, 97, 0.1)), url(<?= __yesset('imgs/home/random2/*.jpg', false, [
 'random'=> true,
            ]) ?>);
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
        box-shadow: inset 0px 0px 280px 300px rgba(0, 0, 0, 0.8);
    }
    </style>
</head>
<div id="preloader" class="preloader">
    <img src="<?= getStoreSettings('logo_image_url') ?>" alt="Loading..." />
</div>

<body id="page-top">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container-fluid">
            <a class="navbar-brand js-scroll-trigger" href="{{ url('') }}#page-top">
                <img class="lw-logo-img" src="<?= getStoreSettings('logo_image_url') ?>"
                    alt="<?= getStoreSettings('name') ?>">
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <?php $translationLanguages = getActiveTranslationLanguages(); ?>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto text-center">
                    <!-- About Us -->
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="{{ url('#about-us') }}"><?= __tr('About Us') ?></a>
                    </li>
                    <!-- /About Us -->

                    <!-- Features -->
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="{{ url('#features') }}"><?= __tr('Features') ?></a>
                    </li>
                    <!-- /Features -->

                    <!-- Contact -->
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger"
                            href="<?= route('user.read.contact') ?>"><?= __tr('Contact') ?></a>
                    </li>
                    <!-- /Contact -->

                    <!-- Language Menu -->
                    @if (!__isEmpty($translationLanguages) and count($translationLanguages) > 1)
                    <?php $translationLanguages['en_US'] = configItem('default_translation_language'); ?>
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span
                                class="d-none d-md-inline-block"><?= isset($translationLanguages[config('CURRENT_LOCALE')]) ? $translationLanguages[config('CURRENT_LOCALE')]['name'] : '' ?></span>
                            &nbsp; <i class="fas fa-language"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                            aria-labelledby="userDropdown">
                            <h6 class="dropdown-header">
                                <?= __tr('Choose your language') ?>
                            </h6>
                            <div class="dropdown-divider"></div>
                            <?php foreach ($translationLanguages as $languageId => $language) {
            if ($languageId == config('CURRENT_LOCALE') or (isset($language['status']) and $language['status'] == false)) continue;
          ?>
                            <a class="dropdown-item"
                                href="<?= route('locale.change', ['localeID' => $languageId]) . '?redirectTo=' . base64_encode(Request::fullUrl()) ?>">
                                <?= $language['name'] ?>
                            </a>
                            <?php } ?>
                        </div>
                    </li>
                    @endif
                    <!-- Language Menu -->

                    <!-- login -->
                    <li class="nav-item">
                        <a class="nav-link lw-login-btn btn px-4"
                            href="<?= route('user.login') ?>"><?= __tr('Login') ?></a>
                    </li>
                    <!-- /login -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navigation -->

    <!-- Header -->
    <header class="masthead">
        <div class="container d-flex h-100 align-items-center pt-5 lw-featured-text-block">
            <div class="mx-auto lw-main-text-block">
                <h1 class="mx-auto my-0">{!! Arr::random([
                    __tr('The journey to love starts here.'),
                    __tr('The Real Place For Real Dating.'),
                    __tr("Find love that's meant to be."),
                    __tr('Love is waiting for you.'),
                    __tr('Find love the easy way.'),
                    __tr('The perfect match is just a click away.'),
                    __tr('Find love on your own terms.'),
                    __tr('The best relationships are built on shared interests.'),
                    __tr('Dating should be fun.'),
                    __tr('Your soulmate is waiting for you.'),
                    __tr('Find love, not just a date.'),
                    ]) !!}</h1>
                <h2 class="mx-auto mt-4 mb-4 lw-text-shadow"><?= __tr("Tired of being single? __siteName__ is the answer to your prayers. We have a wide variety of members to choose from, so you're sure to find someone who is perfect for you. Join and start your love life today!", [
                    '__siteName__' => getStoreSettings('name'),
                ]) ?></strong></h2>
                <a href="#search" class="js-scroll-trigger lw-special-btn btn"><?= __tr('Get Started') ?></a>
            </div>
        </div>
    </header>
    <!-- / Header -->

    <!-- section block -->
    <section class="bg-dark lw-section-block items" id="about-us" data-aos="fade-up">
        <div class="container text-center">
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <img class="img-fluid" src="imgs/home/bg-image.png" alt="">
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <h3 class="lw-sub-title-katibeh text-white py-4">
                        <?= __tr("Find Your Perfect Match – Love Begins Here!") ?>
                    </h3>
                </div>
            </div>
        </div>
    </section>
    <!-- /section block -->

    <!-- about us -->
    <section class="lw-about-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <h4 class="text-primary h2 mb-0"><?= __tr('About us') ?></h4>
                    <h3 class="lw-sub-title-katibeh text-dark"><?= __tr('Love Made Simple, Connections Made Real.') ?>
                    </h3>
                    <p class="mt-3">
                        <?= __tr("Finding love should be simple, secure, and exciting. Our platform is designed to connect like-minded individuals, fostering genuine relationships that last. With advanced search, user-friendly features, and a commitment to privacy, we make your dating journey effortless. Whether you're looking for friendship, romance, or a lifelong partner, we’re here to help you every step of the way. Start exploring and let meaningful connections unfold!") ?>
                    </p>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 ">
                    <img class="couple-image" src="imgs/home/couple-image.png" alt="about-us">
                </div>
            </div>
        </div>

    </section>
    <!-- /about us -->

    <!-- find match block -->
    <section class="lw-find-match-block" id="search">
        <div class="container">
            <div class="d-flex justify-content-center align-items-center">
                <div class="text-center text-white">

                    <!-- site logo -->
                    <img class="lw-logo-img" src="<?= getStoreSettings('logo_image_url') ?>"
                        alt="<?= getStoreSettings('name') ?>">
                    <!-- site logo -->

                    <!-- headings -->
                    <h3 class="lw-sub-title-katibeh text-white my-3"><?= __tr('Find Match Now!') ?></h3>
                    <p class="my-2">
                        <?= __tr('Where Connections Blossom! Your perfect match is just a click away.') ?>
                    </p>
                    <!-- /headings -->

                    <!-- search img -->
                    <img class="lw-search-heart my-4" src="imgs/home/heart.png" alt="search heart image">
                    <!-- /search img -->
                </div>
            </div>
            <!-- search container block -->
            <form method="post" action="<?= route('search_matches') ?>">
                <input type="hidden" name="_token" id="csrf-token" value="<?= csrf_token() ?>" />
                <div class="lw-search-container">
                    <div class="row justify-content-center ">

                        <!-- looking for -->
                        <div class="col-sm-12 col-md-12 col-lg-3">
                            <div class="form-group">
                                <label for="exampleInputEmail1"><?= __tr('Looking for') ?></label>
                                <select name="looking_for" class="custom-select form-control">
                                    <option value="all" selected><?= __tr('All') ?></option>
                                    @foreach (configItem('user_settings.gender') as $genderKey => $gender)
                                    <option value="<?= $genderKey ?>"><?= $gender ?></option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <!-- looking for -->

                        <!-- age -->
                        <div class="col-sm-12 col-md-12 col-lg-5 mb-3">
                            <label for="exampleInputEmail1"><?= __tr('Age') ?></label>
                            <div class="row">
                                <!-- Age from -->
                                <div class="col-6">
                                    <select name="min_age" class="custom-select form-control">
                                        <option disabled><?= __tr('Age from') ?></option>
                                        @foreach (configItem('user_settings.age_range') as $age)
                                        <option value="<?= $age ?>"
                                            <?= $age == configItem('user_settings.default_min_age') ? 'selected' : '' ?>><?= __tr('__translatedAge__', [
'__translatedAge__' => $age,
]) ?></option>
                                        @endforeach
                                    </select>
                                </div>
                                <!-- /Age from -->

                                <!-- Age till -->
                                <div class="col-6">
                                    <select name="max_age" class="custom-select form-control">
                                        <option disabled><?= __tr('Age till') ?></option>
                                        @foreach (configItem('user_settings.age_range') as $age)
                                        <option value="<?= $age ?>"
                                            <?= $age == configItem('user_settings.default_max_age') ? 'selected' : '' ?>><?= __tr('__translatedAge__', [
'__translatedAge__' => $age,
]) ?></option>
                                        @endforeach
                                    </select>
                                </div>
                                <!-- /Age till -->
                            </div>
                        </div>
                        <!-- age -->

                        <!-- search button -->
                        <div class="col-sm-12 col-md-12 col-lg-3">
                            <div class="">
                                <button class="btn btn-primary btn-block lw-search-btn"
                                    type="submit"><?= __tr('Search') ?></button>
                            </div>
                        </div>
                        <!-- /search button -->
                    </div>
                </div>

            </form>
            <!-- / search container block -->
    </section>
    <!-- /find match block -->

    <!-- How It Works -->
    <section class=" py-5 lw-hows-it-works-container">
        <div class="container">

            <!-- headings -->
            <div class="text-center mb-5">
                <h4 class="text-primary h2"><?= __tr('How It Works') ?></h4>
                <h3 class="lw-sub-title-katibeh text-dark">
                    <?= __tr('Discover, Connect, Grow : A Guide to Creating Meaningful Bonds') ?></h3>
            </div>
            <!-- /headings -->

            <div class="row align-items-center">
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <!-- Register -->
                    <div class="card">
                        <span class="my-3"><i class="fas fa-user-plus"></i></span>
                        <h5 class="text-dark font-wight-bold"><?= __tr('Register') ?></h5>
                        <p><?= __tr(' Sign up in just a few simple steps and become part of a vibrant community looking for meaningful connections.') ?>
                        </p>
                    </div>
                    <!-- / Register -->

                    <!-- Create a Profile -->
                    <div class="card">
                        <span class="my-3 bg-green"><i class="fas fa-user"></i></span>
                        <h5 class="text-dark font-wight-bold "><?= __tr('Create a Profile') ?></h5>
                        <p><?= __tr(' Showcase your personality by adding photos and sharing your interests to help others get to know you better.') ?>
                        </p>
                    </div>
                    <!-- /Create a Profile -->


                </div>
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <!-- image -->
                    <img class="lw-image" src="imgs/home/bg-2.png" alt="search heart image">
                    <!-- /image -->
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <!-- Find The Match -->
                    <div class="card">
                        <span class="my-3 bg-blue"><i class="fab fa-searchengin"></i></span>
                        <h5 class="text-dark font-wight-bold"><?= __tr('Find The Match') ?></h5>
                        <p><?= __tr('Explore potential matches based on compatibility, shared interests, and preferences.') ?>
                        </p>
                    </div>
                    <!-- /Find The Match -->

                    <!-- Initiate Conversation -->
                    <div class="card">
                        <span class="my-3 bg-violet"><i class="fab fa-rocketchat"></i></span>
                        <h5 class="text-dark font-wight-bold"><?= __tr('Initiate Conversation') ?></h5>
                        <p><?= __tr('Take the first step by sending a message and start building a connection that could turn into something special!') ?>
                        </p>
                    </div>
                    <!-- /Initiate Conversation -->
                </div>
            </div>
        </div>
    </section>
    <!-- How It Works -->

    <!-- features section -->
    <section class="py-5 lw-features-block-section" id="features">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-12 col-lg-4">

                    <!-- headings -->
                    <div class=" mb-5 lw-headings">
                        <h4 class="text-primary h2"><?= __tr('Our Services') ?></h4>
                        <h3 class="lw-sub-title-katibeh text-dark">
                            <?= __tr('Enjoy Our Special Features') ?></h3>
                        <a href="<?= route('user.login') ?>" class="lw-feature-btn btn"><?= __tr('Learn more') ?></a>
                    </div>
                    <!-- /headings -->

                </div>
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <!-- Credit System -->
                    <div class="card">
                        <div class="card-icon">
                            <i class="fas fa-credit-card"></i>
                        </div>
                        <h3 class="card-title"> <?= __tr('Credit System') ?></h3>
                        <div class="underline"></div>
                        <p class="card-description mt-3">
                            <?= __tr('Use credits to send  gifts and stickers, making your conversations more fun and engaging! Purchase credits easily and express yourself in a unique way.') ?>
                        </p>
                    </div>
                    <!-- /Credit System -->

                    <!-- Payment Getaways -->
                    <div class="card">
                        <div class="card-icon">
                        <i class="fas fa-money-check-alt"></i>
                        </div>
                        <h3 class="card-title"> <?= __tr('Payment Getaways') ?></h3>
                        <div class="underline"></div>
                        <p class="card-description mt-3">
                            <?= __tr('Secure and hassle-free transactions at your fingertips! Users can purchase credits easily using Stripe, PayPal, Razorpay, Coingate and Paystack, ensuring a smooth and flexible payment experience.') ?>
                        </p>
                    </div>
                    <!-- /Payment Getaways -->

                    <!-- Social Login -->
                    <div class="card">
                        <div class="card-icon">
                        <i class="fas fa-sign-in-alt"></i>
                        </div>
                        <h3 class="card-title"> <?= __tr('Social Login') ?></h3>
                        <div class="underline"></div>
                        <p class="card-description mt-3">
                            <?= __tr('Social Login is single sign-on for end users. Using existing login information from a social network provider like Facebook or Google.') ?>
                        </p>
                    </div>
                    <!-- /Social Login -->
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4 ">
                    <!-- Profile Booster -->
                    <div class="card">
                        <div class="card-icon">
                        <i class="fas fa-search"></i>
                        </div>
                        <h3 class="card-title"> <?= __tr('Advanced Search') ?></h3>
                        <div class="underline"></div>
                        <p class="card-description mt-3">
                            <?= __tr('Refine your search with multiple filters like age, location, profession, and interests. Easily find profiles that match your preferences for a more personalized dating experience.') ?>
                        </p>
                    </div>
                    <!-- /Profile Booster -->

                    <!-- Detailed User Profile -->
                    <div class="card">
                        <div class="card-icon">
                        <i class="fas fa-moon"></i>
                        </div>
                        <h3 class="card-title"> <?= __tr('Modern, Dark & Beautiful') ?></h3>
                        <div class="underline"></div>
                        <p class="card-description mt-3">
                            <?= __tr('Experience the elegance of our Dark & Beautiful theme—where sleek design meets seamless functionality.') ?>
                        </p>
                    </div>
                    <!-- /Detailed User Profile -->
                </div>
            </div>
        </div>
    </section>
    <!-- features section -->

    <!-- key features -->
    <section class="lw-main-features-block py-5 bg-light-primary">
        <div class="container">

            <!-- headings -->
            <div class="text-center mb-5">
                <h3 class="lw-sub-title-katibeh text-primary">
                    <?= __tr('Key Features') ?></h3>
                <h5><?= __tr('Explore the Features That Set Us Apart!') ?></h5>
            </div>
            <!-- /headings -->

            <!-- Beyond Basics: Detailed Profiles -->
            <div class="row align-items-center">
            <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="d-flex justify-content-center">
                        <img class="my-3" src="imgs/home/bg-3.png" alt="Stay Connected, Anywhere">
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <h1 class="text-primary"><?= __tr('Beyond Basics: Detailed Profiles') ?></h1>
                    <p><?= __tr('The User Profile Detail component shows details about a user including contact information, profile photo, Chatter statistics, and topics the user is knowledgeable about. On other users’ profiles.') ?>
                    </p>
                </div>
            </div>
            <!-- Beyond Basics: Detailed Profiles -->

            <!-- Encounters -->
            <div class="row align-items-center lw-div-reverse">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <h1 class="text-primary"><?= __tr('Encounters that Spark Connections') ?></h1>
                    <p><?= __tr('Get encounter with the person, you may interested in.') ?></p>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="d-flex justify-content-center">
                        <img class="my-4" src="imgs/home/encounters.png" alt="Encounters">
                    </div>
                </div>
            </div>
            <!-- Encounters -->

            <!-- Stay Connected, Anywhere -->
            <div class="row align-items-center py-5">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="d-flex justify-content-center pb-5">

                        <video autoplay muted loop="loop" preload="none" width="80%" height="80%"
                            class="lw-messenger-video">
                            <source src="imgs/home/message-video.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <h1 class="text-primary"><?= __tr('Stay Connected, Anywhere') ?></h1>
                    <p><?= __tr('The messenger offers seamless communication with high-quality audio/video calls, an intuitive interface, and built-in emoji support, catering to diverse preferences and keeping users connected effortlessly.') ?>
                    </p>
                </div>

            </div>
            <!-- Stay Connected, Anywhere -->
        </div>
    </section>

    <!-- Meaningful Matches, Every Time -->
    <section class="lw-feature-container py-5">
        <div class="container text-center">
            <!-- image -->
            <img class="my-4 lw-feature-icon-img" src="imgs/home/icons.png" alt="Meaningful Matches, Every Time">
            <!-- /image -->

            <!-- heading -->
            <h3 class="lw-sub-title-katibeh text-dark py-3">
                <?= __tr('Your Favorite Person’s Secret Weapon!') ?></h3>
            <p class="lw-description">
                <?= __tr('Make every conversation count! Break the ice with ease—chat with your matches, express yourself with GIFs and emojis, or surprise them with a thoughtful gift.') ?>
            </p>
            <!-- /heading -->
        </div>
    </section>
    <!-- /Meaningful Matches, Every Time -->

    <!-- / key features -->

    <!-- testimonial block -->
    <section class="py-5" id="success-stories">
        <div class="text-center pb-3">
            <!-- heading -->
            <h3 class="lw-sub-title-katibeh text-primary py-3 ">
                <?= __tr('A Match Made Perfectly!') ?></h3>
            <p class="lw-description">
                <?= __tr('Experience meaningful connections with like-minded individuals in a safe space.') ?>
            </p>
            <!-- /heading -->
        </div>
        <div class="lw-testimonial-bg-image">
            <div class="testimonial-slider container">
                <div class="slider-container">
                    <!-- Slide 1 -->
                    <div class="slide">
                        <div class="testimonial-image">
                            <img src="imgs/home/outdoors-7213961_1280 (1).jpg" alt="Success Stories 1">
                        </div>
                        <div class="testimonial-content">
                            <blockquote>
                                <div class="my-3 text-white">
                                    <i class="fas fa-quote-left my-3"></i>
                                </div>
                                <?= __tr('"The features are so easy to use, and I was able to meet amazing people within days. Highly recommend for anyone looking for a real connection!"') ?>
                            </blockquote>
                            <p class="author-name text-white">—
                                <?= __tr('Sophia Consultant from Bangalore') ?></p>
                        </div>
                    </div>
                    <!-- /Slide 1 -->

                    <!-- Slide 2 -->
                    <div class="slide">
                        <div class="testimonial-image">
                            <img src="imgs/home/smile-7402270_1280.jpg" alt="Success Stories 2">
                        </div>
                        <div class="testimonial-content text-white">
                            <blockquote>
                                <div class="my-3 text-white">
                                    <i class="fas fa-quote-left"></i>
                                </div>
                                <?= __tr('"I never thought I find a connection so genuine. This platform made it easy to meet someone special. Truly a great experience!"') ?>
                            </blockquote>
                            <p class="author-name">—<?= __tr('Bobby From Dubai') ?></p>
                        </div>
                    </div>
                    <!-- Slide 2 -->

                    <!-- Slide 3 -->
                    <div class="slide">
                        <div class="testimonial-image">
                            <img src="imgs/home/portrait-2865605_1280.jpg" alt="Success Stories 3">
                        </div>
                        <div class="testimonial-content text-white">
                            <blockquote>
                                <div class="my-3 text-white">
                                    <i class="fas fa-quote-left"></i>
                                </div>
                                <?= __tr(' "I was skeptical at first, but the perfect match really works! I found someone who shares my interests and values. So happy I joined!"') ?>
                            </blockquote>
                            <p class="author-name">—<?= __tr('Isabella from USA') ?></p>
                        </div>
                    </div>
                    <!-- Slide 3 -->

                    <!-- Slide 4 -->
                    <div class="slide">
                        <div class="testimonial-image">
                            <img src="imgs/home/model-2359322_1280.jpg" alt="Success Stories 4">
                        </div>
                        <div class="testimonial-content text-white">
                            <blockquote>
                                <div class="my-3 text-white">
                                    <i class="fas fa-quote-left"></i>
                                </div>
                                <?= __tr('"The platform helped me connect with like-minded individuals. Its user-friendly, and I love how quickly I was able to start conversations!"') ?>
                            </blockquote>
                            <p class="author-name">—<?= __tr('Frankie from America') ?></p>
                        </div>
                    </div>
                    <!-- Slide 4 -->
                </div>
                <button class="prev border-0 lw-testimonial-button">
                    <img src="imgs/home/prev.png" alt="prev arrow">
                </button>
                <button class="next border-0 lw-testimonial-button">
                    <img src="imgs/home/next.png" alt="next arrow">
                </button>
            </div>
        </div>
    </section>
    <!-- /testimonial block-->

    <!-- call to action -->
    <section class="py-5">
        <div class="container text-center">

            <!-- site logo -->
            <h3 class="my-4 text-muted">-----------<img class="lw-logo-img"
                    src="<?= getStoreSettings('logo_image_url') ?>" alt="<?= getStoreSettings('name') ?>">-----------
            </h3>
            <!-- site logo -->

            <!-- heading -->
            <h3 class="lw-sub-title-katibeh text-primary mb-3">
                <?= __tr('Start Your Love Story Today') ?></h3>
            <p class="lw-description">
                <?= __tr('Sign Up and Meet Your Match!') ?>
            </p>
            <!-- /heading -->

            <div class="row align-items-center justify-content-center py-5">
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <!-- image -->
                    <img class="my-4 lw-couple-img" src="imgs/home/call-to-action.png" alt="Meaningful Matches">
                    <!-- /image -->
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="lw-block-content bg-white rounded mx-4">
                        <!-- image -->
                        <img class="my-4" src="imgs/home/heart-list.png" alt="heart">
                        <!-- /image -->
                        <h4 class="lw-sub-title-katibeh text-primary">
                            <?= __tr('A Perfect Match On Your Terms') ?></h4>
                        <a href="<?= route('user.sign_up') ?>"
                            class="lw-feature-btn btn my-3"><?= __tr('Sign Up') ?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / call to action -->

    <!-- faq section -->
    <section class="bg-light-primary py-3" id="faq">
        <div class="container faq-section">
            <div class="text-center pt-3 pb-4">
                <!-- heading -->
                <h3 class="lw-sub-title-katibeh text-primary mb-3">
                    <?= __tr('Frequently Asked Questions') ?></h3>
                <p class="lw-description">
                    <?= __tr('Explore helpful information to get started or resolve your queries with ease.') ?>
                </p>
                <!-- /heading -->
            </div>

            <div class="faq-items mb-4">
                <div class="faq-question"><?= __tr('How does this dating platform work?') ?><span class="float-right"><i
                            class="fas fa-caret-down"></i></span></div>

                <div class="faq-answer">
                    <p><?= __tr('We match you based on your interests, preferences, and personality traits. Just sign up, create your profile, and start connecting with like-minded singles!') ?>
                    </p>
                </div>
            </div>
            <div class="faq-item mb-4">
                <div class="faq-question"><?= __tr('Is my personal information safe?') ?><span class="float-right"><i
                            class="fas fa-caret-down"></i></span></div>
                <div class="faq-answer">
                    <p><?= __tr('Absolutely! We prioritize your privacy with top-notch security and encryption, ensuring your data stays confidential.') ?>
                    </p>
                </div>
            </div>
            <div class="faq-item mb-4">
                <div class="faq-question">
                    <?= __tr('What makes this platform different from other dating apps?') ?><span
                        class="float-right"><i class="fas fa-caret-down"></i></span></div>
                <div class="faq-answer">
                    <p><?= __tr('We focus on meaningful connections, real-time compatibility insights, and a unique matchmaking algorithm!') ?>
                    </p>
                </div>
            </div>
            <div class="faq-item mb-4">
                <div class="faq-question"><?= __tr('What happens if I find my perfect match?') ?><span
                        class="float-right"><i class="fas fa-caret-down"></i></span></div>
                <div class="faq-answer">
                    <p><?= __tr('Congratulations! You can continue your journey on or off the platform—our goal is to help you find love.') ?>
                    </p>
                </div>
            </div>
            <div class="faq-item mb-4">
                <div class="faq-question"><?= __tr('Can I filter matches based on my preferences?') ?><span
                        class="float-right"><i class="fas fa-caret-down"></i></span></div>
                <div class="faq-answer">
                    <p><?= __tr('Yes! Use advanced filters like age, location, interests, and lifestyle preferences to find your ideal match.') ?>
                    </p>
                </div>
            </div>
            <div class="faq-item mb-4">
                <div class="faq-question"><?= __tr('Can I use the platform on both mobile and desktop?') ?><span
                        class="float-right"><i class="fas fa-caret-down"></i></span></div>
                <div class="faq-answer">
                    <p><?= __tr('Yes! Our platform is fully responsive, allowing you to connect anytime, anywhere, on any device.') ?>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- /faq section -->

    <!-- mobile app call to action -->
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-12 col-lg-6 lw-align-center">
                    <!-- headings -->
                    <div class="">
                        <h3 class="lw-sub-title-katibeh text-dark">
                            <?= __tr('Start your profitable Dating app!') ?></h3>
                        <p class="lw-description py-3 px-0 m-0">
                            <?= __tr('Your next adventure is just a tap away - download now and start exploring!') ?>
                        </p>
                        <h4 class="text-primary h3"><?= __tr('Available On') ?></h4>
                        <!-- google play -->
                        <a href="https://play.google.com/store/apps/details?id=net.livelyworks.loveria_demo&pcampaignid=web_share"
                            target="_blank"><img class="my-4 w-25" src="imgs/home/play-store.png"
                                alt="Google Play Store"></a>
                        <!-- /google play -->
                    </div>
                    <!-- /headings -->
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <!-- image -->
                    <img class="my-4 lw-couple-img" src="imgs/home/dating-app.png" alt="dating App">
                    <!-- /image -->
                </div>
            </div>

        </div>
    </section>
    <!-- /mobile app call to action -->

    <!-- footer -->
    <footer class="py-5 ">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-3 m-auto">
                    <!-- site logo -->
                    <img class="lw-logo-img" src="<?= getStoreSettings('logo_image_url') ?>"
                        alt="<?= getStoreSettings('name') ?>">
                    </h3>
                    <!-- site logo -->
                </div>
                <div class="col-sm-12 col-md-12 col-lg-3 lw-center-block my-4">
                    <div>
                        <h5 class="h5 text-white"> <?= __tr('Treat Me Beautiful') ?></h5>
                        <div class="underline lw-underline"></div>
                        <p>
                            <?= __tr('Discover meaningful connections with personalized matches, a safe platform, and a global community, your journey to love starts here.') ?>
                        </p>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="d-flex justify-content-center my-4 lw-side-block-list">
                        <div class="text-left">
                            <h5 class="h5 text-white"> <?= __tr('Quick Links') ?></h5>
                            <div class="underline"></div>
                            <li><a href="#features"><?= __tr('Features') ?></a></li>
                            <li><a href="#faq"><?= __tr('FAQ') ?></a></li>
                            <li><a href="<?= route('user.read.contact') ?>"><?= __tr('Contact us') ?></a></li>
                            <li><a href="<?= route('user.login') ?>"><?= __tr('Login') ?></a></li>
                            <li><a href="<?= route('user.sign_up') ?>"><?= __tr('Register') ?></a></li>
                        </div>
                    </div>
                </div>
                <!-- /Quick Links -->

                <!-- Social Links -->
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="d-flex justify-content-center my-4 lw-side-block-list">
                        <div class="text-left">
                            <h5 class="h5 text-white"> <?= __tr('Social Links') ?></h5>
                            <div class="underline"></div>
                            <div class="mx-auto">
                                <li><a href="#!"><span><i
                                                class="fab fa-facebook mr-2"></i></span><?= __tr('Facebook') ?></a>
                                </li>
                                <li><a href="#!"><span><i
                                                class="fab fa-instagram mr-2"></i></span><?= __tr('Instagram') ?></a>
                                </li>
                                <li><a href="#!"><span><i
                                                class="fab fa-linkedin-in mr-2"></i></span><?= __tr('Linkedin') ?></a>
                                </li>
                                <li><a href="#!"><span><i
                                                class="fab fa-twitter mr-2"></i></span><?= __tr('Twitter') ?></a>
                                </li>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Social Links -->
            </div>
            <hr class="bg-secondary">
            <div class="small text-center text-white-50">
                <?= __tr('Copyright © __siteName__ __year__', [
                    '__year__' => date('Y'),
                    '__siteName__' => getStoreSettings('name'),
                ]) ?>
            </div>
        </div>
    </footer>
    <!-- /footer -->

    <?= __yesset(['dist/js/vendorlibs-public.js'], true) ?>

    <script>
    (function($) {
        "use strict"; // Start of use strict

        // Smooth scrolling using jQuery easing
        $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location
                .hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html, body').animate({
                        scrollTop: (target.offset().top - 70)
                    }, 1000, "easeInOutExpo");
                    return false;
                }
            }
        });

        // Closes responsive menu when a scroll trigger link is clicked
        $('.js-scroll-trigger').click(function() {
            $('.navbar-collapse').collapse('hide');
        });

        // Activate scrollspy to add active class to navbar items on scroll
        $('body').scrollspy({
            target: '#mainNav',
            offset: 100
        });

        // Collapse Navbar
        var navbarCollapse = function() {
            if ($("#mainNav").offset().top > 100) {
                $("#mainNav").addClass("navbar-shrink");
            } else {
                $("#mainNav").removeClass("navbar-shrink");
            }
        };
        // Collapse now if page is not at top
        navbarCollapse();
        // Collapse the navbar when page is scrolled
        $(window).scroll(navbarCollapse);

    })(jQuery);
    // End of use strict

    // fAQ
    $(function() {
        $('.faq-question').click(function() {
            const answer = $(this).next('.faq-answer');
            answer.css('max-height', answer.css('max-height') === '0px' ? answer.prop('scrollHeight') +
                'px' : '0');
            $(this).toggleClass('active');
        });
    });
    // fAQ

    // preloader
    document.addEventListener("DOMContentLoaded", () => {
        setTimeout(() => {
            document.getElementById("preloader").style.display = "none";
            document.getElementById("content").style.display = "block";
        }, 1400);
    });
    // preloader

    // testimonial slider
    $(function() {
        const $slider = $('.slider-container'),
            $slides = $('.slide');
        let i = 0;
        const update = () =>
            $slider.css('transform', `translateX(-${i * $slides.first().outerWidth()}px)`);
        $('.prev').click(() => (i = (i > 0 ? i - 1 : $slides.length - 1), update()));
        $('.next').click(() => (i = (i < $slides.length - 1 ? i + 1 : 0), update()));
        $(window).resize(update);
        update();
    });
    // /testimonial slider
    </script>
</body>

</html>