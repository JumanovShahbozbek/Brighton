@extends('layouts.main')
@section('main', 'active')
@section('content')

    <!-- slider section -->
      @include('section.slide')
    <!-- end slider section -->
    </div>
  
    <!-- offer section -->  
      @include('section.offer')
    <!-- end offer section -->
  
    <!-- about section -->
      @include('section.about')
    <!-- end about section -->
  
    <!-- client section -->
      @include('section.client')
    <!-- end client section -->
  
    <!-- contact section -->
      @include('section.contact') 
    <!-- end contact section -->
  
@endsection
