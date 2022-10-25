@extends('home.index')

@section('content')
  <div class="main-blogDetail">
    <div class="section section-blogDetail">
      <div class="container">
        <div class="wrap blog-detail">
          <div class="blog-detail__left">
            <div class="blog-detail__header">
              <h1>Dược Hậu Giang (DHG) báo lãi quý 3 cao kỷ lục 262 tỷ đồng, tăng trưởng 30% so với
                cùng kỳ</h1>
              <div class="blog-detail__control">
                <div class="blog-detail__info">
                  <span class="time-post">
                    <i class="fa-solid fa-calendar"></i>
                    14/10/22 - 08:45 AM
                  </span>
                  <span class="user-post">
                    <i class="fa-solid fa-user"></i>
                    Admin
                  </span>
                </div>

                <div class="blog-detail__social">
                  <a href="#" class="btn-fb">
                    <span class="icon"><i class="fab fa-facebook"></i></span>
                    <span class="text">Facebook</span>
                    <span class="number">76</span>
                  </a>
                  <a href="#" class="btn-like">
                    <span class="icon"><i class="fas fa-thumbs-up"></i></span>
                    <span class="text">Like</span>
                    <span class="number">76</span>
                  </a>
                </div>
              </div>
            </div>

            <div class="blog-detail__article">
              <p><strong>He standard Lorem Ipsum passage, used since the 1500s</strong></p>
              <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                mollit anim id est laborum."</p>
              <p><strong>He standard Lorem Ipsum passage, used since the 1500s</strong></p>
              <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                mollit anim id est laborum."</p>
              <p><strong>He standard Lorem Ipsum passage, used since the 1500s</strong></p>
              <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                mollit anim id est laborum."</p>
            </div>
          </div>

          <div class="blog-detail__related">
            <h5>Bài viết liên quan</h5>
            <div class="blog-related">
              <div class="card">
                <a href="{{ route('blog-detail') }}">
                  <img src="{{ asset('image/client-1.jpg') }}" class="card-img-top" alt="">
                  <div class="card-body">
                    <p class="card-title">Công ty TNHH Nút áo Tôn Văn</p>
                    <div class="info-post">
                      <span class="time-post">
                        <i class="fa-solid fa-calendar"></i>
                        14/10/22 - 08:45 AM
                      </span>
                      <span class="user-post">
                        <i class="fa-solid fa-user"></i>
                        Admin
                      </span>
                    </div>
                  </div>
                </a>
              </div>

              <div class="card">
                <a href="{{ route('blog-detail') }}">
                  <img src="{{ asset('image/client-1.jpg') }}" class="card-img-top" alt="">
                  <div class="card-body">
                    <p class="card-title">Công ty TNHH Nút áo Tôn Văn</p>
                    <div class="info-post">
                      <span class="time-post">
                        <i class="fa-solid fa-calendar"></i>
                        14/10/22 - 08:45 AM
                      </span>
                      <span class="user-post">
                        <i class="fa-solid fa-user"></i>
                        Admin
                      </span>
                    </div>
                  </div>
                </a>
              </div>

              <div class="card">
                <a href="{{ route('blog-detail') }}">
                  <img src="{{ asset('image/client-1.jpg') }}" class="card-img-top" alt="">
                  <div class="card-body">
                    <p class="card-title">Công ty TNHH Nút áo Tôn Văn</p>
                    <div class="info-post">
                      <span class="time-post">
                        <i class="fa-solid fa-calendar"></i>
                        14/10/22 - 08:45 AM
                      </span>
                      <span class="user-post">
                        <i class="fa-solid fa-user"></i>
                        Admin
                      </span>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
