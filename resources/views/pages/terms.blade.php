@extends('layouts.app')

@section('title', 'Terms')

@section('content')

  @include('layouts.header')
  @include('layouts.nav', [
    'active' => 5
  ])

  @include('pages.main.terms')

    @include('layouts.cart')
    @include('layouts.clock')
    @include('layouts.cal')
    @include('layouts.news')
  @include('layouts.footer')  

@endsection