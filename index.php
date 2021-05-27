<?php
session_start();

if ($_GET['password']==='ok')
  $_SESSION['username'] = 'marco';

if ($_GET['logout']==='si'){
  session_unset();
  session_destroy();
}

echo $_SESSION['username'];

?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8" name="mphtools-feature" content="compatibilityUI, cameraPrivacyPopup, compatibilityAutoCheck">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="stylesheets/style.css">
</head>
<body>
  <h1>Title</h1>
  <p id="dynamic">Make a face...</p>
  <div id="containerCamera">
    <video autoplay="true" id="videoElement"></video>
    <button type='submit' name='snap' id='snap' >
      <img src='images/snap.png' width='50px' height='50px'/>
    </button>
    <a id="link">
      <button id="download">
        <i id="fa fa-download">Download</i>
      </button>
    </a>
    <canvas id='canvasCamera' width='8000px' height='6000px'></canvas>
  </div>
  <script type="text/javascript" src="https://sdk.morphcast.com/mphtools/v1.0/mphtools.js"></script>
  <script type="text/javascript" src="https://ai-sdk.morphcast.com/v1.14/ai-sdk.js"></script>
  <script type="text/javascript" src="javascripts/mood_filters_preview.js"></script>
  <script type="text/javascript" src="javascripts/snap_picture.js"></script>
  <script type="text/javascript" src="javascripts/camera_stream.js"></script>
</body>
</html>