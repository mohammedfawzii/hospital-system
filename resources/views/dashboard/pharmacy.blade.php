@extends('layouts.layout-dash')
@section('content')
<nav class="page-navs">
    <!-- .nav-scroller -->
    <div class="nav-scroller">
      <!-- .nav -->
      <div class="nav nav-center nav-tabs">
        <a class="{{ "dashboard/pharmacy/pharmaceutical"  == request()->path()  ? "nav-link active":"nav-link" }}" href="{{ route('pharmaceutical') }}">pharmaceutical</a>
         <a class="{{ "dashboard/pharmacy/invoice"  == request()->path()  ? "nav-link active":"nav-link" }}" href="{{ route('invoice') }}">Create an invoice </a>
         <a class="{{ "dashboard/pharmacy/total-sales"  == request()->path()  ? "nav-link active":"nav-link" }}" href="{{ route('total-sales') }}">Total sales</a>
         <a class="{{ "dashboard/pharmacy/shortfalls"  == request()->path()  ? "nav-link active":"nav-link" }}" href="{{ route('shortfalls') }}">Shortfalls</a>
         <a class="{{ "dashboard/pharmacy/expired"  == request()->path()  ? "nav-link active":"nav-link" }}" href="{{ route('expired') }}">Expired</a>
         <a class="{{ "dashboard/pharmacy/note"  == request()->path()  ? "nav-link active":"nav-link" }}" href="{{ route('note') }}">note</a>
      </div><!-- /.nav -->
    </div><!-- /.nav-scroller -->
  </nav>
  <div>
      @yield('pharmacy')

  </div>
@endsection
