@extends('layouts.app')

@section('content')
<div class="container">
    <div class="intro pb-5">
      <div class="intro-text">
        <h1 class="intro-h1">Lorem Ipsum is not simply random text</h1>
        <p class="front-page">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
        <div class="buttons">
          <a href="" class="btn-fill">Read More</a>
        <a href="" class="btn-outline">Start Today</a>
        </div>
      </div>
      <div class="intro-img">
          <img src="{{ asset('asset/img/header-img.png') }}" alt="">
      </div>
      <div class="scroll">
        <a href="#variations"><img src="{{ asset('asset/img/icon/icon-scroll-down.svg') }}" alt=""><span class="text-muted">Scroll down</span></a>
      </div>
    </div>
    <!-- Clients -->
    <div class="clients text-center">
      <p class="text-muted text-uppercase pb-4">Some of our trusted clients</p>
      <div class="client-logo">
        <div><img src="{{ asset('asset/img/icon/go-sm-logo.svg') }}" alt=""></div>
        <div><img src="{{ asset('asset/img/icon/social-road-logo.svg') }}" alt=""></div>
        <div><img src="{{ asset('asset/img/icon/firmbee-logo.svg"') }}" alt=""></div>
        <div><img src="{{ asset('asset/img/icon/create-paper.svg"') }}" alt=""></div>
        <div><img src="{{ asset('asset/img/icon/point-design-logo.svg') }}" alt=""></div>
      </div>
    </div>

    <!-- Variations -->
    <div id="variations" class="variations">
      <div class="first-variation">
        <div class="img">
          <img src="{{ asset('asset/img/man.png') }}" alt="">
        </div>
        <div class="text">
          <h1 class="variations-h1">There are many variations of passages of Lorem Ipsum available</h1>
          <p class="front-page">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
          <div class="buttons">
            <a href="" class="btn-fill">Read More</a>
          <a href="" class="btn-outline">Start Today</a>
          </div>
        </div>
      </div>
      <div class="second-variation">
        <div class="text">
          <h1 class="variations-h1">There are many variations of passages of Lorem Ipsum available</h1>
          <p class="front-page">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
          <div class="buttons">
            <a href="" class="btn-fill">Read More</a>
            <a href="" class="btn-outline">Start Today</a>
          </div>
        </div>
        <div class="img">
          <img src="{{ asset('asset/img/woman.png') }}" alt="">
          <img class = "square" src="{{ asset('asset/img/icon/square.png') }}" alt="">
        </div>
      </div>
    </div>

    <!-- Service -->
    <div class="service">
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
    </div>
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
    <div class="team text-center">
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
    </div>

  </div>
@endsection
