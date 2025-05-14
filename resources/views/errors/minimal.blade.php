<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    <?= __yesset([
        'dist/css/bootstrap-assets-app*.css',
        'dist/css/public-assets-app*.css',
        'dist/fa/css/all.min.css',
        'dist/css/home*.css',
        'dist/css/custom.css',
        ], true) ?>

    <style>
    * {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
    }

    body {
        position: relative;
        height: 100vh;
    }

    .antialiased {
        background-color: #121111;
        font-family: "Fuzzy Bubbles", cursive;
    }


    .lw-notfound .notfound {
        position: absolute;
        left: 50%;
        top: 50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }

    .notfound {
        max-width: 410px;
        width: 100%;
        text-align: center;
    }

    .notfound .notfound-404 {
        height: 280px;
        position: relative;
        z-index: -1;
    }

    .notfound .notfound-404 h1 {
        font-family: 'Montserrat', sans-serif;
        font-size: 250px;
        margin: 0px;
        font-weight: 900;
        position: absolute;
        left: 50%;
        -webkit-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
        transform: translateX(-50%);
         background: url('./../imgs/home/background-2642077_960_720.jpg') no-repeat;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-size: cover;
        background-position: center;
    }


    .notfound h2 {
        font-size: 30px;
        font-weight: 700;
        margin-top: 0;
    }

    .notfound p {
        font-size: 18px;
        font-weight: 500;
        margin-bottom: 20px;
        margin-top: 0px;
    }

    .notfound a {
        font-size: 14px;
        text-decoration: none;
        background: #C61D61;
        display: inline-block;
        padding: 15px 30px;
        border-radius: 40px;
        color: #fff;
        font-weight: 700;
    }


    @media only screen and (max-width: 767px) {
        .notfound .notfound-404 {
            height: 142px;
        }

        .notfound .notfound-404 h1 {
            font-size: 112px;
        }
    }
    </style>

</head>



<body class="antialiased ">

    <div class="lw-notfound">
        <div class="notfound">
            <img class="lw-logo-img " src="<?= getStoreSettings('logo_image_url') ?>"
                alt="<?= getStoreSettings('name') ?>">
            <div class="notfound-404">
                <h1>@yield('code')</h1>
            </div>
            <h2 class="text-white mt-2">@yield('message')</h2>
            <p class="text-secondary mb-4">
                <?= __tr("The page you're looking for isn't here. But love is just around the corner!") ?>
            </p>
            <a href="{{ url('') }}"><?= __tr('Go Home') ?></a>
        </div>
    </div>

</body>

</html>