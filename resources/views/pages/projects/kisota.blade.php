@extends('layouts.main')
@section('content')
@include('layouts.page-heading')



<!--Padding Top Start-->
<div class="fl-page-padding top"></div>
<!--Padding Top End-->
<!-- Content -->
<div class="container">
  <div class="fl-blog-post-div row">
    <!--Left sidebar -->
    <!--Left sidebar End-->

    <div class="col-md-9 right-sidebar">
      <div class="post-archive-wrapper ">
        <!--Post Start-->
        <article
          class="fl-post-item post-17131 post type-post status-publish format-gallery has-post-thumbnail hentry category-latest-models category-new-cars tag-audi tag-bmw tag-buy-sell-vehicles tag-cars tag-ford post_format-post-format-gallery pmpro-has-access"
          id="post-17131" data-post-id="17131">

          <div class="post-top-content">
            <!--Gallery Post Format -->
            <div class="post--holder gallery">
              <div class="post-gallery-slider">
               
                <div class="gallery-img">
                  <img width="945" height="558"
                    src="{{ asset('assets/Photos/kisota/kisota-1.png')}}"
                    class="attachment-revus_size_1170x658_crop size-revus_size_1170x658_crop" alt="" decoding="async"
                    loading="lazy" />
                </div>
                <div class="gallery-img">
                  <img width="945" height="558"
                    src="{{ asset('assets/Photos/kisota/kisota-2.png')}}"
                    class="attachment-revus_size_1170x658_crop size-revus_size_1170x658_crop" alt="" decoding="async"
                    loading="lazy" />
                </div>
               
              </div>
              <div class="fl-slider-arrows">
                <div class="slider-arrow-left"></div>
                <div class="slider-arrow-right"></div>
              </div>

            </div>
            <!--Gallery Post Format End-->
            <div class="post-date fl-font-style-lighter-than fl-primary-bg">
              __ <div class="month-date fl-font-style-regular-two">
                <i class="fa fa-check"></i>
              </div>
            </div>
          </div>

          <div class="post-bottom-content">
            <h5 class="post--title">
              <a class="title-link fl-secondary-color fl-primary-hv-color">
                Proposed Design and Partition of Warehouse for kisota Tanzania Mikocheni Industrial Areas</a>
            </h5>

            <div class="post-text--content fl-font-style-regular">
              <p>Project Year: 2019</p>
              <p>Project Status: Completed</p>
            </div>

            <div class="post-btn-read-more-info">

              <div class="post-info fl-font-style-lighter-than fl-secondary-color">


              </div>
            </div>
          </div>
        </article>
        <!--Post End-->

        <!--Post Start-->
        <article
          class="fl-post-item post-17131 post type-post status-publish format-gallery has-post-thumbnail hentry category-latest-models category-new-cars tag-audi tag-bmw tag-buy-sell-vehicles tag-cars tag-ford post_format-post-format-gallery pmpro-has-access"
          id="post-17131" data-post-id="17131">


        </article>
        <!--Post End-->
      </div>


    </div>
    <!--Right sidebar -->





    @include('layouts.right-side-bar')


    <!--Right sidebar End-->
  </div>
</div>

<!-- Content End-->
<!--Padding Bottom Start-->
<div class="fl-page-padding bottom"></div>
<!--Padding Bottom End-->
@endsection