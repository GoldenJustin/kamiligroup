@extends('layouts.main')
@section('content')


<div class="container">
    <div class="row">
        <!-- Create a grid of thumbnail images -->
        <div class="col-md-4 col-sm-6">
            <a href="#" class="thumbnail-link" data-toggle="modal" data-target="#imageModal">
                <img src="{{ asset('assets/Photos/BlueCoast-Offices/bluecoast-image-1.jpeg')}}" alt="Image 1"
                    class="img-fluid">
            </a>
        </div>
        <div class="col-md-4 col-sm-6">
            <a href="#" class="thumbnail-link" data-toggle="modal" data-target="#imageModal">
                <img src="{{ asset('assets/Photos/BlueCoast-Offices/bluecoast-image-2.jpeg')}}" alt="Image 2"
                    class="img-fluid">
            </a>
        </div>
        <div class="col-md-4 col-sm-6">
            <a href="#" class="thumbnail-link" data-toggle="modal" data-target="#imageModal">
                <img src="{{ asset('assets/Photos/BlueCoast-Offices/bluecoast-image-3.jpeg')}}" alt="Image 1"
                    class="img-fluid">
            </a>
        </div>
        <div class="col-md-4 col-sm-6">
            <a href="#" class="thumbnail-link" data-toggle="modal" data-target="#imageModal">
                <img src="{{ asset('assets/Photos/BlueCoast-Offices/bluecoast-image-4.jpeg')}}" alt="Image 2"
                    class="img-fluid">
            </a>
        </div>
        <div class="col-md-4 col-sm-6">
            <a href="#" class="thumbnail-link" data-toggle="modal" data-target="#imageModal">
                <img src="{{ asset('assets/Photos/BlueCoast-Offices/bluecoast-image-5.jpeg')}}" alt="Image 1"
                    class="img-fluid">
            </a>
        </div>
        <div class="col-md-4 col-sm-6">
            <a href="#" class="thumbnail-link" data-toggle="modal" data-target="#imageModal">
                <img src="{{ asset('assets/Photos/BlueCoast-Offices/bluecoast-image-6.jpeg')}}" alt="Image 2"
                    class="img-fluid">
            </a>
        </div>
        <div class="col-md-4 col-sm-6">
            <a href="#" class="thumbnail-link" data-toggle="modal" data-target="#imageModal">
                <img src="{{ asset('assets/Photos/BlueCoast-Offices/bluecoast-image-7.jpeg')}}" alt="Image 1"
                    class="img-fluid">
            </a>
        </div>
        {{-- <div class="col-md-4 col-sm-6">
            <a href="#" class="thumbnail-link" data-toggle="modal" data-target="#imageModal">
                <img src="{{ asset('assets/Photos/CFAO/cfao-image-1.jpeg')}}" alt="Image 1"
                    class="img-fluid">
            </a>
        </div>
        <div class="col-md-4 col-sm-6">
            <a href="#" class="thumbnail-link" data-toggle="modal" data-target="#imageModal">
                <img src="{{ asset('assets/Photos/CFAO/cfao-image-4.jpeg')}}" alt="Image 1"
                    class="img-fluid">
            </a>
        </div>
        <div class="col-md-4 col-sm-6">
            <a href="#" class="thumbnail-link" data-toggle="modal" data-target="#imageModal">
                <img src="{{ asset('assets/Photos/CFAO/cfao-image-3.jpeg')}}" alt="Image 1"
                    class="img-fluid">
            </a>
        </div>
        <div class="col-md-4 col-sm-6">
            <a href="#" class="thumbnail-link" data-toggle="modal" data-target="#imageModal">
                <img src="{{ asset('assets/Photos/CFAO/cfao-image-4.jpeg')}}" alt="Image 1"
                    class="img-fluid">
            </a>
        </div>
        <div class="col-md-4 col-sm-6">
            <a href="#" class="thumbnail-link" data-toggle="modal" data-target="#imageModal">
                <img src="{{ asset('assets/Photos/CFAO/cfao-image-1.JPG')}}" alt="Image 1"
                    class="img-fluid">
            </a>
        </div>
        <div class="col-md-4 col-sm-6">
            <a href="#" class="thumbnail-link" data-toggle="modal" data-target="#imageModal">
                <img src="{{ asset('assets/Photos/CFAO/cfao-image-2.JPG')}}" alt="Image 1"
                    class="img-fluid">
            </a>
        </div>
        <div class="col-md-4 col-sm-6">
            <a href="#" class="thumbnail-link" data-toggle="modal" data-target="#imageModal">
                <img src="{{ asset('assets/Photos/CFAO/cfao-image-3.JPG')}}" alt="Image 1"
                    class="img-fluid">
            </a>
        </div>
        <div class="col-md-4 col-sm-6">
            <a href="#" class="thumbnail-link" data-toggle="modal" data-target="#imageModal">
                <img src="{{ asset('assets/Photos/CFAO/cfao-image-4.JPG')}}" alt="Image 1"
                    class="img-fluid">
            </a>
        </div>
        <div class="col-md-4 col-sm-6">
            <a href="#" class="thumbnail-link" data-toggle="modal" data-target="#imageModal">
                <img src="{{ asset('assets/Photos/CFAO/cfao-image-5.JPG')}}" alt="Image 1"
                    class="img-fluid">
            </a>
        </div>
        <div class="col-md-4 col-sm-6">
            <a href="#" class="thumbnail-link" data-toggle="modal" data-target="#imageModal">
                <img src="{{ asset('assets/Photos/CFAO/cfao-image-6.JPG')}}" alt="Image 1"
                    class="img-fluid">
            </a>
        </div> --}}
        


        <!-- Add more thumbnail images here -->

        <!-- Modal for the image slideshow -->
        <div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-body">
                        <div id="imageCarousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('assets/Photos/BlueCoast-Offices/bluecoast-image-1.jpeg')}}"
                                        alt="Image 1" class="d-block w-100">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('assets/Photos/BlueCoast-Offices/bluecoast-image-2.jpeg')}}"
                                        alt="Image 2" class="d-block w-100">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('assets/Photos/BlueCoast-Offices/bluecoast-image-3.jpeg')}}"
                                        alt="Image 2" class="d-block w-100">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('assets/Photos/BlueCoast-Offices/bluecoast-image-4.jpeg')}}"
                                        alt="Image 2" class="d-block w-100">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('assets/Photos/BlueCoast-Offices/bluecoast-image-5.jpeg')}}"
                                        alt="Image 2" class="d-block w-100">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('assets/Photos/BlueCoast-Offices/bluecoast-image-6.jpeg')}}"
                                        alt="Image 2" class="d-block w-100">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('assets/Photos/BlueCoast-Offices/bluecoast-image-7.jpeg')}}"
                                        alt="Image 2" class="d-block w-100">
                                </div>


                                <!-- Add more carousel items for additional images -->
                            </div>
                            <a class="carousel-control-prev" href="#imageCarousel" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#imageCarousel" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="fl-page-padding bottom"></div>


<!-- Include Bootstrap JavaScript and jQuery from CDN -->
{{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> --}}

<!-- Custom JavaScript to handle the modal -->
<script>
    $(document).ready(function () {
        // Handle thumbnail click event
        $(".thumbnail-link").click(function () {
            // Get the clicked image source
            var imgSrc = $(this).find('img').attr('src');
  
            // Set the image source in the modal
            $("#imageModal .carousel-inner .carousel-item.active img").attr('src', imgSrc);
        });
  
        // Initialize the carousel
        $('#imageCarousel').carousel();
    });
</script>
@endsection