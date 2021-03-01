@extends('layouts.app')

@section('title', 'Sales')

@section('content')

  @include('layouts.header')
  @include('layouts.nav')
 
  @include('pages.main.sales')

    @include('layouts.clock')
    @include('layouts.cal')
  @include('layouts.footer')  

@endsection