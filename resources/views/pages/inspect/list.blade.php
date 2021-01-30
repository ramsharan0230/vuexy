@extends('layouts.master')
@section('title','Inspections')
@push('styles')
<link rel="stylesheet" type="text/css" href="../../../{{ asset('app-assets/css/pages/app-chat-list.min.css') }}">
@endpush
@section('main-content')
    
<div class="content-wrapper">
    <div class="content-header row">
      <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
          <div class="col-12">
            <h2 class="content-header-title float-left mb-0">Advance Card</h2>
            <div class="breadcrumb-wrapper">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index-2.html">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Card</a>
                </li>
                <li class="breadcrumb-item active">Advance Card
                </li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
        <div class="form-group breadcrumb-right">
          <div class="dropdown">
            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="grid"></i></button>
            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="app-todo.html"><i class="mr-1" data-feather="check-square"></i><span class="align-middle">Todo</span></a><a class="dropdown-item" href="app-chat.html"><i class="mr-1" data-feather="message-square"></i><span class="align-middle">Chat</span></a><a class="dropdown-item" href="app-email.html"><i class="mr-1" data-feather="mail"></i><span class="align-middle">Email</span></a><a class="dropdown-item" href="app-calendar.html"><i class="mr-1" data-feather="calendar"></i><span class="align-middle">Calendar</span></a></div>
          </div>
        </div>
      </div>
    </div>

    <section id="carousel-options">

        <div class="row match-height">
          <!-- Interval Option starts -->
          @foreach($carousels as $key=>$caros)
          <?php ///dd($caros) ?>
          <div class="col-lg-3 col-md-6 col-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">{{ $caros->location }}</h4>
                <div class="dropdown chart-dropdown">
                    <i data-feather="more-vertical" class="font-medium-3 cursor-pointer" data-toggle="dropdown"></i>
                    <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="javascript:void(0);"><i data-feather='edit-2'></i> Modify</a>
                    <a class="dropdown-item" href="javascript:void(0);"><i data-feather='x'></i> Delete</a>
                    <a class="dropdown-item" href="javascript:void(0);"><i data-feather='check'></i> Approve</a>
                    </div>
                </div>
              </div>
              <div class="card-body">
                <p class="card-text">
                    <strong>Findings: </strong>{{ $caros->findings }}
                </p>
                <div id="carousel-interval-{{ $key }}" class="carousel slide" data-ride="carousel" data-interval="5000">
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-interval-{{ $key }}" data-slide-to="{{ $key }}" class="active"></li>
                    <li data-target="#carousel-interval-{{ $key }}" data-slide-to="{{ $key }}"></li>
                    <li data-target="#carousel-interval-{{ $key }}" data-slide-to="{{ $key }}"></li>
                  </ol>
                  <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                      <img class="img-fluid" src="../../../app-assets/images/slider/01.jpg" alt="First slide" />
                    </div>
                    <div class="carousel-item">
                      <img class="img-fluid" src="../../../app-assets/images/slider/03.jpg" alt="Second slide" />
                    </div>
                    <div class="carousel-item">
                      <img class="img-fluid" src="../../../app-assets/images/slider/02.jpg" alt="Third slide" />
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carousel-interval-{{ $key }}" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carousel-interval-{{ $key }}" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
                <p class="mt-1"><strong>Accountibility: {{ $caros->accountibility }}</strong></p>
                <p class="card-text">
                    <strong>Proposed corrective action: </strong style="color:green">{{ $caros->pca }}
                </p>
                <div class="row">
                    <div class="col-sm-4">
                        <button class="btn {{ $key==1?"btn-primary":"btn-success" }} btn-sm">{{ $key==1?"Close":"Open" }}</button>
                    </div>
                    <div class="col-sm-8">
                        <strong>Created By: {{ $key==1?"Usman Hussain":"Md. Khawaja" }}</strong>
                    </div>
                </div>
              </div>
              <div class="card-footer">
                  <div class="row">
                    <div class="col-sm-5">
                        <span class="pull-left"><strong>Date: {{ $caros->start_date }}</strong></span>
                    </div>
                    <div class="col-sm-7">
                        <span class="pull-right"><strong> Closing Date: {{ $caros->closing_date }}</strong></span>
                    </div>
                  </div>    
              </div>
            </div>
          </div>
          @endforeach
          <!-- Interval Option ends -->
        </div>
    </section>
</div>

  @endsection
  @push('script')
  <script src="{{ asset('app-assets/js/scripts/cards/card-advance.min.js') }}"></script>
  @endpush