<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" type="image/x-icon" href="welcomeASSETS/img/favicon.ico">
    <title>{{ config('app.name', 'Bale Hub Africa') }}</title>


       <!-- Google Web Fonts -->
       <link rel="preconnect" href="https://fonts.googleapis.com">
       <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
       <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">
   
       <!-- Icon Font Stylesheet -->
       <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
       <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
   
       <!-- Libraries Stylesheet -->
       <link href="{{asset('welcomeASSETS/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
       <link href="{{asset('welcomeASSETS/lib/animate/animate.min.css')}}" rel="stylesheet">
   
       <!-- Customized Bootstrap Stylesheet -->
       <link href="{{asset('welcomeASSETS/css/bootstrap.min.css')}}" rel="stylesheet">
   
       <!-- Template Stylesheet -->
       <link href="{{asset('welcomeASSETS/css/style.css')}}" rel="stylesheet">
  
@yield('style')
</head>
 @include('components.messages')