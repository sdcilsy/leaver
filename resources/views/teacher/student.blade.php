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
                {{-- <p class="lead  text-white">Blablablablabla some quotes.</p> --}}
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
    <section class="section bg-secondary" id="myclass">
      <div class="container">
        <div class="list-group">
          <a href="{{ url('/teacher/class/id/std_id/book_id') }}" class="list-group-item list-group-item-action">halaman1 buku blabla materi xx (CONTOH IF CLICKED)</a>
          <a href="{{ url('foreach') }}" class="list-group-item list-group-item-action">LOOP DATA BOOK NAME</a>
          <a href="{{ url('foreach') }}" class="list-group-item list-group-item-action">LOOP DATA BOOK NAME</a>
          <a href="{{ url('foreach') }}" class="list-group-item list-group-item-action">LOOP DATA BOOK NAME</a>
        </div>
      </div>
    </section>
  </main>
  @endsection