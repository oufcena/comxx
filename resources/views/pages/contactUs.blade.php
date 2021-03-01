@extends('layouts.app')

@section('title', 'Contact us')

@section('content')

  @include('layouts.header')
  @include('layouts.nav', [
    'active' => 3
  ])
  
  @include('pages.main.contactUs')

    @include('layouts.cart')
    @include('layouts.clock')
    @include('layouts.cal')
    @include('layouts.news')
  @include('layouts.footer')  

@endsection