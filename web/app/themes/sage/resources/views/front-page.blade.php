@extends('layouts.app')
@section('content')
    <landing-section video="@asset('video/sea.mp4')" landing_fields='{!! json_encode($landing_fields) !!}'></landing-section>
    <div class="wrapper">
        <projects-section allProjects='{!! json_encode($projects) !!}'></projects-section>
        <testimonials-section allTestimonials='{!! json_encode($testimonials) !!}'></testimonials-section>
    </div>
    <about-section about_fields='{!! json_encode($about_fields) !!}'></about-section>
    <div class="wrapper">
        <packages-section></packages-section>
    </div>
@endsection
