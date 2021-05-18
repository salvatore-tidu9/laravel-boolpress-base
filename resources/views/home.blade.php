@extends('layouts.app')

@section('title', 'Homepage')

@section('content')
    <section id="section_2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <div class="homepage_banner text-center">
                        <img src="{{asset('img/home_wallpaper_2.jpg')}}" alt="BoolPress_home">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="section_3">
        <div class="midsection_title text-center">
            <h4>the weight of words</h4>
        </div>
    </section>
@endsection