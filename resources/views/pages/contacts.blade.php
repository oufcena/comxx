@extends('layouts.app')

@section('title', 'Contacts')

@section('content')

  @include('layouts.header')
  @include('layouts.nav')
 
  @include('pages.main.contacts')

    @include('layouts.clock')
    @include('layouts.cal')
  @include('layouts.footer')  

@endsection