<head>
  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> @if(isset($title))
    {{ $title }} -
    @endif
    @if(isset($setting->title))
    {{ $setting->title }}
    @endif
  </title>
  <link rel="stylesheet" href="{{ asset('front/assest/bootstrap/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ asset('front/assest/bootstrap/bootstrap-rtl.min.css')}}">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">

</head>