@extends('frontend.layouts.fronted_master')
@section('title') 404 Not Found @endsection
@section('main')
    <div class="error-page-area">
        <!-- Error Content -->
        <div class="error-content text-center">
            <!-- Error Thumb -->
            <div class="error-thumb">
                <img style="height: 300px;" src="{{asset('backend')}}/img/bg-img/1.png" alt="">
            </div>
            <h2>Opps! This page Could Not Be Found!</h2>
            <p>Sorry bit the page you are looking for does not exist, have been removed or name changed</p>
            <a class="btn btn-rounded btn-primary mt-30" href="{{route('home')}}">Back To Home</a>
        </div>
    </div>
@endsection
