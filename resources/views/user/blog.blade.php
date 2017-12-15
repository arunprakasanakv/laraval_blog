@extends('user/app')

@section('bg-img',asset('user/img/home-bg.jpg'))

@section('title-class','site-heading')

@section('heading','My Blog')

@section('subheading','Blog sub Heading')

@section('main-content')

	
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-preview">
            <a href="{{ route('post') }}">
              <h2 class="post-title">
                Man must explore, and this is exploration at its greatest
              </h2>
              <h3 class="post-subtitle">
                Problems look mighty small from 150 miles up
              </h3>
            </a>
            <p class="post-meta">Posted by
              <a href="#">Start Bootstrap</a>
              on September 24, 2017</p>
          </div>
          <!-- Pager -->
          {{-- <div class="clearfix">
            <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
          </div> --}}
        </div>
      </div>
    </div>

    <hr>


@endsection