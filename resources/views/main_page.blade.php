@extends('layout.layout')


@section('title', 'home')

@section('navigate')

    <li class="nav_item">
        <a class="nav-link active" aria-current="page" href="/">home</a>
    </li>
    <li class="nav_item">
        <div class="logo_header"><img src="/image/logo1.png"></img></div>
    </li>
    <li class="nav_item">
        <a class="nav-link" href="#">account</a>
    </li>


@endsection


@section('main')



<ul class="nav nav_secondary">
  <li class="nav-item">
    <a class="nav-link"  href="#">catalog</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">favorites</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">cart of orders</a>
  </li>
</ul>

<div class="banner">
    <img class="banner_image" src="/image/banner/1.jpg">



</div>



@endsection