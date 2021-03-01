@extends('layouts.app')

@section('title', 'Users')

@section('content')

  @include('layouts.header')
  @include('layouts.nav')
 
  @include('pages.main.users')

    @include('layouts.clock')
    @include('layouts.cal')
  @include('layouts.footer')  

@endsection