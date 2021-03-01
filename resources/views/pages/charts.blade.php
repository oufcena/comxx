@extends('layouts.app')

@section('title', 'Charts')

@section('content')

  @include('layouts.header')
  @include('layouts.nav')
 
  @include('pages.main.charts')

    @include('layouts.clock')
    @include('layouts.cal')
  @include('layouts.footer')  

@endsection