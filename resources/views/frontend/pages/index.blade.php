@extends('frontend.layouts.master')
@section('title','Home | DS Innovative Solutions')
@section('content')

@include('frontend.components.home.slider')
@include('frontend.components.home.clients')
@include('frontend.components.home.about')
@include('frontend.components.home.working')
@include('frontend.components.home.services')
@include('frontend.components.home.marquee')
@include('frontend.components.home.testimonials')
@include('frontend.components.home.technologies')
@include('frontend.components.home.faq')
@include('frontend.components.home.blog')

@endsection