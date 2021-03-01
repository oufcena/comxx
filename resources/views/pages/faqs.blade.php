@extends('layouts.app')

@section('title', 'FAQS')

@section('content')

  @include('layouts.header')
  @include('layouts.nav', [
    'active' => 4
  ])
  
  @include('pages.main.faqs')

    @include('layouts.cart')
    @include('layouts.clock')
    @include('layouts.cal')
    @include('layouts.news')
  @include('layouts.footer')  

@endsection