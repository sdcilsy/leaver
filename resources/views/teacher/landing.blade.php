@extends('../template/master-landing')
@section('title', 'Landing page')
@section('body')
  <main>
    <div class="position-relative">
      <!-- shape Hero -->
      <section class="section section-lg section-shaped pb-250">
        <div class="shape shape-style-1 shape-default">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </div>
        <div class="container py-lg-md d-flex">
          <div class="col px-0">
            <div class="row">
              <div class="col-lg-6">
                <h1 class="display-3  text-white">Welcome back<span>{{Auth::user()->username}}</span></h1>
                <p class="lead  text-white">Blablablablabla some quotes.</p>
              </div>
            </div>
          </div>
        </div>
        <!-- SVG separator -->
        <div class="separator separator-bottom separator-skew">
          <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
          </svg>
        </div>
      </section>
      <!-- 1st Hero Variation -->
    </div>
    <section class="section section-lg pt-lg-0 mt--200">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12">
            <div class="row row-grid">
              <div class="col-lg-4">
                <div class="card card-lift--hover shadow border-0">
                  <div class="card-body py-5">
                    <div class="icon icon-shape icon-shape-primary rounded-circle mb-4">
                      <i class="ni ni-check-bold"></i>
                    </div>
                    <h6 class="text-primary text-uppercase">My Class</h6>
                      {{-- <p class="description mt-3">Lihat kelas yang telah dibuat untuk memeriksa berbagai catatan murid yang terhubung dalam satu kelas.</p> --}}
                    {{-- <div>
                      <span class="badge badge-pill badge-primary">design</span>
                      <span class="badge badge-pill badge-primary">system</span>
                      <span class="badge badge-pill badge-primary">creative</span>
                    </div> --}}
                    <a href="#myclass" class="btn btn-primary mt-4">Click here!</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="card card-lift--hover shadow border-0">
                  <div class="card-body py-5">
                    <div class="icon icon-shape icon-shape-success rounded-circle mb-4">
                      <i class="ni ni-istanbul"></i>
                    </div>
                    <h6 class="text-success text-uppercase">Create new class</h6>
                    {{-- <p class="description mt-3">Buat kelas baru untuk menghubungkan dengan para murid.</p> --}}
                    {{-- <div>
                      <span class="badge badge-pill badge-success">business</span>
                      <span class="badge badge-pill badge-success">vision</span>
                      <span class="badge badge-pill badge-success">success</span>
                    </div> --}}
                    <a href="{{ url('/teacher/create') }}" class="btn btn-success mt-4">Click here!</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="card card-lift--hover shadow border-0">
                  <div class="card-body py-5">
                    <div class="icon icon-shape icon-shape-warning rounded-circle mb-4">
                      <i class="ni ni-planet"></i>
                    </div>
                    <h6 class="text-warning text-uppercase">Library</h6>
                    {{-- <p class="description mt-3">Argon is a great free UI package based on Bootstrap 4 that includes the most important components and features.</p> --}}
                    {{-- <div>
                      <span class="badge badge-pill badge-warning">marketing</span>
                      <span class="badge badge-pill badge-warning">product</span>
                      <span class="badge badge-pill badge-warning">launch</span>
                    </div> --}}
                    <a href="{{ url('/teacher/library') }}" class="btn btn-warning mt-4">Click here!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section bg-secondary" id="myclass">
      <div class="container">
        <div class="list-group">
          <a href="{{ url('/teacher/class/id') }}" class="list-group-item list-group-item-action">XII XXXXXX ABCD (CONTOH IF CLICKED)</a>
          <a href="{{ url('foreach') }}" class="list-group-item list-group-item-action">LOOP DATA CLASS NAME</a>
          <a href="{{ url('foreach') }}" class="list-group-item list-group-item-action">LOOP DATA CLASS NAME</a>
          <a href="{{ url('foreach') }}" class="list-group-item list-group-item-action">LOOP DATA CLASS NAME</a>
        </div>
        {{-- <div class="row row-grid align-items-center">
          <div class="col-md-6">
            <div class="card bg-default shadow border-0">
              <img src="{{ asset('/assets/img/theme/img-1-1200x1000.jpg') }}" class="card-img-top" alt="image">
              <blockquote class="card-blockquote">
                <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 583 95" class="svg-bg">
                  <polygon points="0,52 583,95 0,95" class="fill-default" />
                  <polygon points="0,42 583,95 683,0 0,95" opacity=".2" class="fill-default" />
                </svg>
                <h4 class="display-3 font-weight-bold text-white">Design System</h4>
                <p class="lead text-italic text-white">The Arctic Ocean freezes every winter and much of the sea-ice then thaws every summer, and that process will continue whatever happens.</p>
              </blockquote>
            </div>
          </div>
          <div class="col-md-6">
            <div class="pl-md-5">
              <div class="icon icon-lg icon-shape icon-shape-warning shadow rounded-circle mb-5">
                <i class="ni ni-settings"></i>
              </div>
              <h3>Our customers</h3>
              <p class="lead">Don't let your uses guess by attaching tooltips and popoves to any element. Just make sure you enable them first via JavaScript.</p>
              <p>The kit comes with three pre-built pages to help you get started faster. You can change the text and images and you're good to go.</p>
              <p>The kit comes with three pre-built pages to help you get started faster. You can change the text and images and you're good to go.</p>
              <a href="#" class="font-weight-bold text-warning mt-5">A beautiful UI Kit for impactful websites</a>
            </div>
          </div>
        </div> --}}
      </div>
    </section>
  </main>
  @endsection