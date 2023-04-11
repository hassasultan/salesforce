@extends('layouts.app')

@section('content')
<div class="container">
    @if ($setting != null)
      @if ($setting->slider_heading != null || $setting->slider_image != null || $setting->slider_description != null)
        <div class="intro pb-5">
          <div class="intro-text">
              <h1 class="intro-h1">{{ $setting->slider_heading }}</h1>
              <p class="front-page">{{ $setting->slider_description }}</p>
              <div class="buttons">
              <a href="" class="btn-fill">Read More</a>
              <a href="" class="btn-outline">Start Today</a>
              </div>
          </div>
          @if ($setting?->slider_image)
              <div class="intro-img">
                  <img src="{{ asset('storage/'.$setting?->slider_image) }}" alt="">
              </div>
          @endif
          <div class="scroll">
              <a href="#variations"><img src="{{ asset('asset/img/icon/icon-scroll-down.svg') }}" alt=""><span class="text-muted">Scroll down</span></a>
          </div>
        </div>
      @endif
    @endif
    <!-- Clients -->
    {{-- <div class="clients text-center">
      <p class="text-muted text-uppercase pb-4">Some of our trusted clients</p>
      <div class="client-logo">
        <div><img src="{{ asset('asset/img/icon/go-sm-logo.svg') }}" alt=""></div>
        <div><img src="{{ asset('asset/img/icon/social-road-logo.svg') }}" alt=""></div>
        <div><img src="{{ asset('asset/img/icon/firmbee-logo.svg') }}" alt=""></div>
        <div><img src="{{ asset('asset/img/icon/create-paper.svg') }}" alt=""></div>
        <div><img src="{{ asset('asset/img/icon/point-design-logo.svg') }}" alt=""></div>
      </div>
    </div> --}}

    <!-- Variations -->
    @if ($setting != null)
      @if ($setting->content_left_heading != null || $setting->content_left_image != null || $setting->content_left_description != null || $setting->content_right_heading != null || $setting->content_right_image != null || $setting->content_right_description != null)
        <div id="variations" class="variations">
            @if ($setting->content_left_heading != null || $setting->content_left_image != null || $setting->content_left_description != null)
                <div class="first-variation">
                    <div class="img">
                        <img src="{{ asset('storage/'.$setting?->content_left_image) }}" alt="">
                    </div>
                    <div class="text">
                        <h1 class="variations-h1">{{$setting->content_left_heading}}</h1>
                        <p class="front-page">{{$setting->content_left_description}}</p>
                        <div class="buttons">
                            <a href="{{ route('about') }}" class="btn-fill">Read More</a>
                            {{-- <a href="" class="btn-outline">Start Today</a> --}}
                        </div>
                    </div>
                </div>
            @endif
            @if($setting->content_right_heading != null || $setting->content_right_image != null || $setting->content_right_description != null)
                <div class="second-variation">
                    <div class="text">
                    <h1 class="variations-h1">{{ $setting->content_right_heading }}</h1>
                    <p class="front-page">{{ $setting->content_right_description }}</p>
                    <div class="buttons">
                        <a href="{{ route('about') }}" class="btn-fill">Read More</a>
                        {{-- <a href="" class="btn-outline">Start Today</a> --}}
                    </div>
                    </div>
                    <div class="img">
                    <img src="{{ asset('storage/'.$setting?->content_right_image) }}" alt="">
                    <img class = "square" src="{{ asset('asset/img/icon/square.png') }}" alt="">
                    </div>
                </div>
            @endif
        </div>
      @endif
    @endif

    <!-- Service -->
    {{-- <div class="service">
      <h1>Top Notch Service</h1>
      <p class="front-page">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
      <div class="service-items">
        <div class="item">
          <img src="{{ asset('asset/img/icon/code-icon.svg') }}" alt="">
          <span class="counter">7 453 664</span>
          <span>Kilometers <br>of code written</span>
        </div>
        <div class="item">
          <img src="{{ asset('asset/img/icon/cofee-icon.svg') }}" alt="">
          <span class="counter">43 657</span>
          <span>Coffees<br>drunk</span>
        </div>
        <div class="item">
          <img src="{{ asset('asset/img/icon/satisfied-client-icon.svg') }}" alt="">
          <span class="counter">1 764</span>
          <span>Satisfied<br>customers</span>
        </div>
        <div class="item">
          <img src="{{ asset('asset/img/icon/realized-projects-icon.svg') }}" alt="">
          <span class="counter">36 874</span>
          <span>Realized<br>projects</span>
        </div>
      </div>
    </div> --}}
    <!-- Newsletter -->

    <div class="update-news">
      <div class="row">
        <div class="col-md-5 news-text">
          <h2>Get your update news</h2>
          <p>If you going to use a passage of Lotem Ipsum, you need to be sure there  isn’t anything embarrassing.</p>
        </div>
        <div class="col-md-7 news-form">
          <input type="email" name="email" placeholder="Enter your email" id="">
          <button type="submit">Send</button>
        </div>
      </div>
    </div>

      <!-- Team -->
    {{-- <div class="team text-center">
      <h1>Our Team</h1>
      <p class="front-page">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
      <div class="team-person">
        <div class="person">
          <div class="photo"><img src="{{ asset('asset/img/team-1.png') }}" alt=""></div>
          <span class="name">John Fox</span>
          <span>Marketing Manager</span>
        </div>
        <div class="person">
          <div class="photo"><img src="{{ asset('asset/img/team-2.png') }}" alt=""></div>
          <span class="name">Kate Rose</span>
          <span>SEO</span>
        </div>
        <div class="person">
          <div class="photo"><img src="{{ asset('asset/img/team-3.png') }}" alt=""></div>
          <span class="name">Anna Brown</span>
          <span>UI Expert</span>
        </div>
        <div class="person">
          <div class="photo"><img src="{{ asset('asset/img/team-4.png') }}" alt=""></div>
          <span class="name">Mike Doe</span>
          <span>Web Developer</span>
        </div>
      </div>
    </div> --}}

  </div>
@endsection
