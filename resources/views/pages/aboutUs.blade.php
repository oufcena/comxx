@extends('layouts.app')

@section('title', 'About us')

@section('content')

  @include('layouts.header')
  @include('layouts.nav', [
    'active' => 2
  ])
  
  @include('pages.main.aboutUs')

    @include('layouts.cart')
    @include('layouts.clock')
    @include('layouts.cal')
    @include('layouts.news')
  @include('layouts.footer')  

@endsection