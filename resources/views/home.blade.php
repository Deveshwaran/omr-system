@extends('layouts.user')

@section('content')

<div class="pagetitle">
  <h1>Dashboard</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="">Home</a></li>
      <li class="breadcrumb-item active">Dashboard</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section dashboard">
  <div class="row">

  </div>
</section>

@endsection

@push('scripts')
  <script>document.getElementById("dashboard").classList.remove("collapsed");</script>
@endpush