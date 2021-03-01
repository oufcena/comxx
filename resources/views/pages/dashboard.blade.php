@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

  @include('layouts.header')
  @include('layouts.nav', [
    'active' => 1
  ])

  @include('pages.main.dashboard')

    @include('layouts.clock')
    @include('layouts.cal')
  @include('layouts.footer')  

@endsection