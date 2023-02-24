@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
      <div class="main col-lg-8">
        <div class="about">
          <h2>We want to tell you a little story about our company</h2>

            <div class="post-img"><img src="{{ asset('asset/img/life.png') }}" alt=""></div>
            <h3>Lorem ipsum dolor sit amet.</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla illo corrupti debitis recusandae hic, ipsa sit quas? Autem fuga nihil voluptate dolorum similique dignissimos quaerat quidem consectetur nobis aliquid quae voluptatibus ex assumenda, amet adipisci eveniet porro soluta accusamus voluptatem doloremque, nulla impedit, culpa hic. Natus ducimus cum eveniet aliquam architecto magnam? Ab atque necessitatibus esse, ipsum excepturi eligendi ipsam veritatis praesentium blanditiis molestias culpa natus hic ex sit iste voluptatem quas, asperiores ea rem molestiae delectus tempora fugit. Ad nihil vero, debitis fuga at nostrum modi! Expedita ab ex, dolores, fugit quis optio laborum sint, officiis molestiae temporibus ratione totam odio explicabo beatae voluptatem neque deleniti iusto eaque? </p>
            <h6>Lorem ipsum dolor sit, amet consectetur adipisicing:</h6>
            <ul class="list-in-text">
              <li>Lorem ipsum dolor sit amet consectetur.</li>
              <li>Lorem ipsum dolor sit amet consectetur.</li>
              <li>Lorem ipsum dolor sit amet consectetur.</li>
              <li>Lorem ipsum dolor sit amet consectetur.</li>
              <li>Lorem ipsum dolor sit amet consectetur.</li>
            </ul>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit laudantium, labore inventore fugiat doloremque ab soluta at. Ex, corporis? Necessitatibus distinctio quam sed unde soluta delectus facilis, corporis iusto. Nihil modi eveniet laudantium quisquam a expedita est inventore doloremque, ad officiis odit earum alias asperiores. Nihil accusamus rerum delectus cumque ducimus illum temporibus ratione dolores quibusdam sint facere provident aperiam quis dignissimos reiciendis sed iure quidem eos quasi, nesciunt, ipsum voluptatem at debitis odio. Doloribus explicabo dignissimos nemo rerum sunt amet aspernatur distinctio, deleniti blanditiis cumque soluta officiis suscipit. Minima nesciunt dicta magnam aliquid inventore voluptates laudantium quaerat aperiam in.</p>
            <figure class="quote text-start">
              <blockquote class="blockquote">
                <p>A well-known quote, contained in a blockquote element.</p>
              </blockquote>
              <figcaption class="blockquote-footer">
                Someone famous in <cite title="Source Title">Source Title</cite>
              </figcaption>
            </figure>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum ab est repudiandae quasi hic sapiente earum velit fuga odio neque numquam eligendi qui tenetur ipsam, animi atque expedita eaque nesciunt in. Quidem dignissimos totam aperiam inventore quae omnis commodi, modi obcaecati qui culpa dolor, rem dolorum maxime temporibus! Consequatur pariatur quibusdam aspernatur ea, assumenda non, illum, vitae sed temporibus consequuntur quam. Exercitationem ut ad beatae explicabo! Quod fuga culpa, consectetur ipsa assumenda, ut exercitationem fugiat commodi quibusdam quam natus iure impedit recusandae aliquam nihil vitae reprehenderit, facilis deleniti cum eveniet veritatis. Atque ut blanditiis quos excepturi perferendis a, quidem modi.</p>
            <div class="team text-center mt-5">
              <h2>Our Team</h2>
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
      </div>
      <div class="sidebar col-lg-4">
        <div class="input-group">
          <div class="form-outline">
            <input id="search-input" type="search" id="form1" class="form-control" placeholder="search" />
          </div>
          <button id="search-button" type="button" class="btn dark">
            <i class="fas fa-search"></i>
          </button>
        </div>
        <div class="recent-posts mt-5">
          <h4 class="mb-3">Recent Posts</h4>
          <div class="post-item">
            <a href="single-post.html" class="post-title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a>
            <div class="post-meta">
              <span><i class="far fa-user"></i> Posted by someone</span><span><i class="far fa-calendar"></i> 30 07 2021</span><span><i class="far fa-comment-alt"></i> 0 comments</span>
            </div>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt perspiciatis ex ipsam similique blanditiis. Culpa hic quia...</p>
          </div>
          <div class="post-item">

            <a href="single-post.html" class="post-title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a>
            <div class="post-meta">
              <span><i class="far fa-user"></i> Posted by someone</span><span><i class="far fa-calendar"></i> 30 07 2021</span><span><i class="far fa-comment-alt"></i> 0 comments</span>
            </div>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt perspiciatis ex ipsam similique blanditiis. Culpa hic quia...</p>
          </div>

          <div class="post-item">

            <a href="single-post.html" class="post-title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a>
            <div class="post-meta">
              <span><i class="far fa-user"></i> Posted by someone</span><span><i class="far fa-calendar"></i> 30 07 2021</span><span><i class="far fa-comment-alt"></i> 0 comments</span>
            </div>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt perspiciatis ex ipsam similique blanditiis. Culpa hic quia...</p>
          </div>
          <a class="btn-fill">View all posts</a>
          <div class="popular mt-5">
            <h4 class="mb-3">See Most Popular Posts</h4>
            <div class="card bg-dark text-white">
              <img src="{{ asset('asset/img/post-1.png') }}" class="card-img" alt="...">
              <div class="card-img-overlay p-3">
                <div class="text-overlay">
                <h4>Lorem, ipsum dolor sit amet consectetur </h4>

                <div class="card-text article-meta">
                  <span><i class="far fa-user"></i> Posted by someone </span><span><i class="far fa-calendar"></i> 30 07 2021</span><span><i class="far fa-comment-alt"></i> 300 comments</span>
                </div>
                <button class="btn-popular">Read article</button>
                </div>
              </div>
            </div>
            <div class="card bg-dark text-white">
              <img src="{{ asset('asset/img/post-2.png') }}" class="card-img" alt="...">
              <div class="card-img-overlay p-3">
                <div class="text-overlay">
                <h4 class="card-title">Lorem, ipsum dolor sit amet consectetur </h4>

                <div class="card-text article-meta">
                  <span><i class="far fa-user"></i> Posted by someone </span><span><i class="far fa-calendar"></i> 30 07 2021</span><span><i class="far fa-comment-alt"></i> 300 comments</span>
                </div>
                <button class="btn-popular">Read article</button>
                </div>
              </div>
            </div>
            <div class="card bg-dark text-white">
              <img src="{{ asset('asset/img/post-3.png') }}" class="card-img" alt="...">
              <div class="card-img-overlay p-3">
                <div class="text-overlay">
                <h4>Lorem, ipsum dolor sit amet consectetur </h4>

                <div class="card-text article-meta">
                  <span><i class="far fa-user"></i> Posted by someone </span><span><i class="far fa-calendar"></i> 30 07 2021</span><span><i class="far fa-comment-alt"></i> 300 comments</span>
                </div>
                <button class="btn-popular">Read article</button>
                </div>
              </div>
            </div>
          </div>
      </div>
      </div>
    </div>
  </div>
@endsection
