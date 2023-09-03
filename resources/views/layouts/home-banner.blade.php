@section('photo')
<!-- You can add this code within your Blade template where you want to display the image -->
<div class="homepage-banner">
</div>

@endsection

<style>
    /* Add this CSS to your stylesheet or in a <style> tag in your HTML file */

/* Default styling for the homepage banner */
.homepage-banner {
    background-image: url('{{ asset("assets/images/uploads/home-banner.jpg") }}');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
    width: 100%;
    height: 100vh; /* 100% of the viewport height */
    max-width: 100%; /* Ensure the container doesn't exceed the width of its parent */

}

/* Adjust the background size for smaller screens (e.g., screens less than 768px wide) */
@media (max-width: 768px) {
    .homepage-banner {
        background-size: auto; /* Auto sizing to maintain aspect ratio */
        height: auto;
    }
}

</style>