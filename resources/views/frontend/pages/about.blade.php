@extends('frontend.layout.app')

@section('content')
  <!-- Larger Header Section -->
  <header class="bg-dark py-12" style="background-image: url('{{ asset('https://www.linearity.io/blog/content/images/2023/06/how-to-create-a-car-NewBlogCover.png') }}'); background-size: cover; background-position: center;">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-1 fw-bolder">Discover Our Car Packages</h1>
            <p class="lead fw-normal text-green-50 mb-6">Unleash the Joy of Driving with Our Premium Car Rental Services</p>
            <a href="{{ route('home') }}" class="btn btn-success">Explore Now</a>
        </div>
    </div><br><br><br><br>
@include('frontend.components.about.about')

@endsection
