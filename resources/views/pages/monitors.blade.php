@extends('layouts.app')

@section('title', 'Tasks')

@section('content')

  @include('layouts.header')
  @include('layouts.nav')
 
  @include('pages.main.monitors')

    @include('layouts.clock')
    @include('layouts.cal')
  @include('layouts.footer')  

@endsection