<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Interior Video Showcase</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', sans-serif;
      background: #f4f7fa;
      padding: 30px;
      color: #2c3e50;
    }

    h1 {
      text-align: center;
      margin-bottom: 30px;
      font-size: 2rem;
      color: #333;
    }

    .video-container {
      max-width: 90%;
      margin: 0 auto;
      position: relative;
      padding-bottom: 56.25%; /* 16:9 aspect ratio */
      height: 0;
      overflow: hidden;
      border-radius: 12px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
      background-color: #000;
      animation: fadeIn 2s ease-in-out;
    }

    .video-container video {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      border-radius: 12px;
    }

    /* 🎬 Fade-in animation */
    @keyframes fadeIn {
      0% {
        opacity: 0;
        transform: scale(0.95);
      }
      100% {
        opacity: 1;
        transform: scale(1);
      }
    }
  </style>
</head>
<body>

  <h1>🏠 Interior Design Showcase</h1>

  <div class="video-container">
    <video autoplay muted loop playsinline controls controlsList="nodownload">
      <source src="intvideo.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>
  </div>

</body>
</html>
