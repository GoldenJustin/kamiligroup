<div class="video-container">
    <video autoplay loop muted playsinline>
      <source src="{{ asset('assets/images/uploads/2020/04/video.mp4')}}" type="video/mp4">
      Your browser does not support the video tag.
    </video>
    <div class="text-overlay">
      <h1>KAMILI GROUP LIMITED</h1>
      <h2>DESIGN AND BUILD</h2>
    </div>
  </div>

  <style>
    .video-container {
      position: relative;
      width: 100vw;
      height: 100vh;
      overflow: hidden;
      left: -27%
    }

    video {
      position: absolute;

      --swiper-theme-color: #007aff;
      color: #fff;
      font-weight: 400;
      height: 100%;
      object-fit: cover;
      width: 100%;
    }

    .text-overlay h1 {
      position: absolute;
      top: 30%;
      left: 30%;
      transform: translate(-50%, -50%);
      text-align: center;
      color: white;
      font-size: 5rem;
      font-weight: bold;
    }

    .text-overlay h2 {
      position: absolute;
      top: 42%;
      left: 20.5%;
      transform: translate(-50%, -50%);
      text-align: center;
      color: rgb(104, 232, 206);
      font-size: 4rem;
      font-weight: bold;
    }
  </style>




  <div class="vc_row-full-width vc_clearfix"></div>