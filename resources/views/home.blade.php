@extends('layouts.app')

@section('content')
  @include('layouts.nav')
  <div class="wrapper">
    <div class="container-fluid">
      <!-- Page-Title -->
      <div class="row">
        <div class="col-sm-12">
          <h4 class="page-title">Dashboard</h4>
        </div>
      </div>
      <!-- end page title end breadcrumb -->
    </div> <!-- end container -->

    @include('layouts.notification')
  </div>
  <!-- end wrapper -->

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          2016 - 2018 © Senon Insurance Adjusters &amp; Appraisers
        </div>
      </div>
    </div>
  </footer>
  <!-- End Footer -->
  <!-- jQuery  -->
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/popper.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/waves.js') }}"></script>
  <script src="{{ asset('js/jquery.slimscroll.js') }}"></script>

  <!-- App js -->
  <script src="{{ asset('js/jquery.core.js') }}"></script>
  <script src="{{ asset('js/jquery.app.js') }}"></script>
@endsection
