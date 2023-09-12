@extends('layouts.mainabout')


@section('container')
<div class="card mb-3 mx-auto border-0" style="max-width: 720px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{ asset('/img/violet15.jpeg') }}" class="img-fluid rounded-3" alt="violet" style="height:100%; width:100%">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Violet</h5>
        <p class="card-text">Violet Evergarden adalah sebuah seri novel ringan Jepang yang ditulis oleh Kana Akatsuki dan diilustrasikan oleh Akiko Takase</p>
      </div>
    </div>
  </div>
</div>
<div class="row row-cols-1 row-cols-md-3 g-4 mt-4">
  <div class="col">
    <div class="card h-100 border-0">
      <img src="{{ asset('/img/violetcard1.jpg') }}" class="card-img-top rounded-3" alt="...">
      <div class="card-body">
        <h5 class="card-title text-center">Happy</h5>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100 border-0">
      <img src="{{ asset('/img/violetcard3.jpg') }}" class="card-img-top rounded-3" alt="...">
      <div class="card-body">
        <h5 class="card-title text-center">Hap!</h5>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100 border-0">
      <img src="{{ asset('/img/violetcard2.jpeg') }}" class="card-img-top rounded-3" alt="...">
      <div class="card-body">
        <h5 class="card-title text-center">Sleepy</h5>
      </div>
    </div>
  </div>
</div>
@endsection
