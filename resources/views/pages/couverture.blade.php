@extends('index')

@section('content')
    <!-- Start Slider Area -->
    <div id="home" class="slider-area">
        <div class="bend niceties preview-2">
            <div id="ensign-nivoslider" class="slides">
                @foreach ($couvertures as $couverture)
                    <img src="{{ asset('storage').'/'.$couverture->image }}" alt="" title="#slider-direction-{{$couverture->id}}" />
                @endforeach
            </div>
            @foreach ($couvertures as $couverture)
                <!-- direction 1 -->
                <div id="slider-direction-{{$couverture->id}}" class="slider-direction slider-one">
                    <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="slider-content">
                            <!-- layer 1 -->
                            <div class="layer-1-1 hidden-xs wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
                            <h2 class="title1">{{$couverture->petit_titre}} </h2>
                            </div>
                            <!-- layer 2 -->
                            <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                            <h1 class="title2">{{$couverture->gros_titre}}</h1>
                            </div>
                            <!-- layer 3 -->
                            <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                            <a class="ready-btn page-scroll" href="{{$couverture->url_boutton}}">visiter</a>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            @endforeach
            <!-- direction 1 -->
            {{--<div id="slider-direction-1" class="slider-direction slider-one">
                <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="slider-content">
                        <!-- layer 1 -->
                        <div class="layer-1-1 hidden-xs wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
                        <h2 class="title1">The Best Business Information </h2>
                        </div>
                        <!-- layer 2 -->
                        <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                        <h1 class="title2">We're In The Business Of Helping You Start Your Business</h1>
                        </div>
                        <!-- layer 3 -->
                        <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                        <a class="ready-btn right-btn page-scroll" href="#services">See Services</a>
                        <a class="ready-btn page-scroll" href="#about">Learn More</a>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>

            <!-- direction 2 -->
            <div id="slider-direction-2" class="slider-direction slider-two">
                <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="slider-content text-center">
                        <!-- layer 1 -->
                        <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                        <h2 class="title1">The Best Business Information </h2>
                        </div>
                        <!-- layer 2 -->
                        <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                        <h1 class="title2">We're In The Business Of Get Quality Business Service</h1>
                        </div>
                        <!-- layer 3 -->
                        <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                        <a class="ready-btn right-btn page-scroll" href="#services">See Services</a>
                        <a class="ready-btn page-scroll" href="#about">Learn More</a>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>

            <!-- direction 3 -->
            <div id="slider-direction-3" class="slider-direction slider-two">
                <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="slider-content">
                        <!-- layer 1 -->
                        <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                        <h2 class="title1">The Best business Information </h2>
                        </div>
                        <!-- layer 2 -->
                        <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                        <h1 class="title2">Helping Business Security  & Peace of Mind for Your Family</h1>
                        </div>
                        <!-- layer 3 -->
                        <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                        <a class="ready-btn right-btn page-scroll" href="#services">See Services</a>
                        <a class="ready-btn page-scroll" href="#about">Learn More</a>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>--}}
        </div>
    </div>
    <!-- End Slider Area -->
@endsection