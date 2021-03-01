@extends('layouts.app')

@section('title', 'Home')

@section('content')
  
  @include('layouts.header')
  @include('layouts.nav', [
    'active' => 0,
  ])
  @include('layouts.aside', [
    'main' => 'pages.main.home',
  ])

  @include('layouts.cart')
  @include('layouts.clock')
  @include('layouts.cal')
  @include('layouts.news')
  @include('layouts.footer')  

@endsection