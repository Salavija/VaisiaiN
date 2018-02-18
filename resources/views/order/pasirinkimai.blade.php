@extends('layouts.default')
@section('content')

    <div class="container">
      <div class="card-deck mb-3 text-center">
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Small</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">20 Eur <small class="text-muted">/ unit</small></h1>
            <img src="{{URL::asset('public/image/mazas.jpg')}}" alt="Vaisiai Pic" height="200" width="200">
            <ul class="list-unstyled mt-3 mb-4">
              <li>5 kg. fruits</li>
              <li>10 different fruits variations</li>
              <li>Including exotic fruits</li>
            </ul>
          </div>
        </div>
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Medium</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">30 Eur <small class="text-muted">/ unit</small></h1>
            <img src="{{URL::asset('public/image/vidutinis.jpg')}}" alt="Vaisiai Pic" height="200" width="200">
            <ul class="list-unstyled mt-3 mb-4">
              <li>10 kg. fruits</li>
              <li>15 different fruits variations</li>
              <li>Including exotic fruits</li>
            </ul>
          </div>
        </div>
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Big</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">39 Eur <small class="text-muted">/ vnt</small></h1>
            <img src="{{URL::asset('public/image/didelis.jpg')}}" alt="Vaisiai Pic" height="200" width="200">
            <ul class="list-unstyled mt-3 mb-4">
              <li>15 kg. fruits</li>
              <li>18 different fruits variations</li>
              <li>Including rare exotic fruits</li>
            </ul>
          </div>
        </div>
      </div>

@stop