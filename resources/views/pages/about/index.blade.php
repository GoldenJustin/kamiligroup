@extends('layouts.main')
@section('content')
<div class="fl-page-heading " style=background-image:url(../wp-content/uploads/2019/06/page-heading-image.jpg);margin-bottom:25px;>
  <div class="container">
    <div class="row">
      <div class="fl--page-header-content col">
        <div class="header-entry-container">
          <h1 class="header-title fl-font-style-bolt">
            About <span class="fl-primary-color">Kamili Group</span></h1>
          <div class="breadcrumbs-heading">
            <!-- .breadcrumbs -->
            <div class="breadcrumbs"><span><a rel="v:url" property="v:title"
                  href="{{url ('home')}}">Home</a></span><span class="breadcrumbs-delimiter"><i
                  class="fa fa-long-arrow-right"></i></span><span class="current">About</span></div>
            <!-- .breadcrumbs -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@include('layouts.gallery')


@endsection