@extends('layouts.master')
@section('title','Booked Seat Report')
@push('styles')
@endpush
@section('main-content')
<section id="dashboard-ecommerce">
    @include('includes.static-cards')

    @include('includes.order-cards')

    <div class="row match-height">
        <!-- Company Table Card -->
        <div class="col-lg-8 col-12">
        @include('includes.company-table')
        </div>
        <!--/ Company Table Card -->

        <!-- Developer Meetup Card -->
        <div class="col-lg-4 col-md-6 col-12">
        @include('includes.developers')
        </div>
        <!--/ Developer Meetup Card -->

        <!-- Browser States Card -->
        @include('includes.browsers')
        <!--/ Browser States Card -->

        <!-- Goal Overview Card -->
        @include('includes.goal-overview')
        <!--/ Goal Overview Card -->

        <!-- Transaction Card -->
        @include('includes.transaction')
        <!--/ Transaction Card -->
    </div>
</section>
@endsection
@push('script')
@endpush
