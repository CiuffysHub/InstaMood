<?php
session_start();
if(!isset($_SESSION['userlogin']))
  header("location: /php/login_page.php");
?>

<!doctype html>
<html lang="en">

<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Instamood</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!--====== Line Icons css ======-->
    <link rel="stylesheet" href="assets/css/LineIcons.css">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="assets/css/slick.css">

    <!--====== Animate css ======-->
    <link rel="stylesheet" href="assets/css/animate.css">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="assets/css/default.css">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="assets/css/style.css">

    <!--====== Instamood css ======-->
    <link rel="stylesheet" href="assets/css/instamood.css">
    <link rel="stylesheet" type="text/css" href="camstyle.css" />

    <!--====== Pacifico font 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet"> ======-->

</head>

<body>
    
    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER PART ENDS ======-->

    <!--====== NAVBAR PART START ======-->

    <section class="header-area">
        <div class="navbar-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="#">
                                <img src="assets/images/logo_small.png" alt="Logo">
                            </a>

                            <button class="navbar-toggler" style="position: relative;" type="button" data-toggle="collapse" data-target="#navbarEight" aria-controls="navbarEight" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarEight">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a class="page-scroll" href="#home">SCATTA</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#testimonial">GALLERIA</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#share">CONDIVIDI</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="assets/php/logout.php">LOGOUT</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="navbar-btn d-none mt-15 d-lg-inline-block">
                                <a class="menu-bar" href="#side-menu-right"><i class="lni-menu"></i></a>
                            </div>
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- navbar area -->
        
        <div id="home" class="slider-area">
            <div class="bd-example">
                <div class="container" style="margin-top: 4em; margin-bottom: 5%;">

                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="section-title text-center pb-20">
                                <h3 class="title">Come ti senti oggi?&#128516;</h3>
                            </div> <!-- section title -->
                        </div>
                    </div> <!-- row -->

                    <div class="row m-0" style="width:100%;" >
                    <div class="col-lg-4 d-sm-none d-md-block d-none d-sm-block">
                    <div class="single-about d-sm-flex mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1.2s">
                        <div class="about-icon">
                            <img src="assets/images/icon-1.png" alt="Icon">
                        </div>
                        <div class="about-content media-body">
                            <h4 class="about-title">Riconosce il Mood</h4>
                            <p class="text">Poorly designed presentations are a thing of the past. Create beautiful and high-quality content that is aligned.</p>
                        </div>
                    </div> <!-- single about -->
                    <div class="single-about d-sm-flex mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1.2s">
                        <div class="about-icon">
                            <img src="assets/images/icon-1.png" alt="Icon">
                        </div>
                        <div class="about-content media-body">
                            <h4 class="about-title">Condividi sul social</h4>
                            <p class="text">Poorly designed presentations are a thing of the past. Create beautiful and high-quality content that is aligned.</p>
                        </div>
                    </div> <!-- single about -->
                    </div>

                        <!--Video-->
                        <div class="col-xl-8 col-lg-8 col-sm-10 p-0 justify-content-center">                           
                              <div id="vid_container">
                                <div id="video_overlay"></div>
                                    <video id="video" autoplay playsinline></video>
                                  </div>
                                  <div id="gui_controls">
                                    <button
                                      id="switchCameraButton"
                                      name="switch Camera"
                                      type="button"
                                      aria-pressed="false"
                                    ></button>
                                    <button id="takePhotoButton" name="take Photo" type="button"></button>
                                    <button
                                      id="toggleFullScreenButton"
                                      name="toggle FullScreen"
                                      type="button"
                                      aria-pressed="false"
                                    ></button>
                                  
                                    </div>
                                </div>
                     
                    </div> <!-- row -->
                    
                  
                </div> <!-- container -->
            </div> <!-- bd-example -->
        </div>

    </section>

    <!--====== NAVBAR PART ENDS ======-->

    <!--====== SAIDEBAR PART START ======-->

    <div class="sidebar-right">
        <div class="sidebar-close">
            <a class="close" href="#close"><i class="lni-close"></i></a>
        </div>
        <div class="sidebar-content">
            <div class="sidebar-logo text-center">
                <a href="#"><img src="assets/images/logo_small_icon_only.png" alt="Logo"></a>
            </div> <!-- logo -->
            <div class="sidebar-menu">
                <ul>
                    <li><a href="#">ABOUT</a></li>
                    <li><a href="#">SERVICES</a></li>
                    <li><a href="#">RESOURCES</a></li>
                    <li><a href="#">CONTACT</a></li>
                    <li><a href="assets/php/logout.php">LOGOUT</a></li>


                </ul>
            </div> <!-- menu -->
            <div class="sidebar-social d-flex align-items-center justify-content-center">
                <span>FOLLOW US</span>
                <ul>
                    <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                    <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                </ul>
            </div> <!-- sidebar social -->
        </div> <!-- content -->
    </div>
    <div class="overlay-right"></div>

    <!--====== SAIDEBAR PART ENDS ======-->

    <!--====== TESTIMONIAL THREE PART START ======-->

    <section id="testimonial" class="testimonial-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center pb-20">
                        <h3 class="title">La tua Galleria</h3>
                        <p class="text">Visualizza i tuoi scatti preferiti e condividi i migliori con i tuoi amici!</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="row testimonial-active" id="gallery">
                        <?php 
                        foreach (glob("users/".$_SESSION['userlogin']."/*") as $file) {
                            echo '<div class="slider-item col-lg-4 col-xs-6">
                                <div class="single-testimonial mt-30 mb-30 text-center" data-toggle="modal" data-target="#Modal'.(basename($file)).'">
                                    <div class="justify-content-center d-flex" style= "width: auto; height: 200px;">
                                        <img id="'.(basename($file)).'" class="gallery-img" style="width: auto; height: 100%; object-fit: cover" src='.$file.' alt="Author">
                                    </div>
                                    <div id="'.(basename($file)).'_footer" style=font-weight:bold;margin-top:2em;""> Non pubblicata
                                        </div>
                                </div> <!-- single column -->
                            </div>';
                        }
                        ?>
                        <div class="slider-item col-lg-4 col-xs-6">
                            <div class="single-testimonial mt-30 mb-30 text-center" data-toggle="modal" data-target="#exampleModal1">
                                <div class="justify-content-center d-flex" style= "width: auto; height: 200px;">
                                    <img style="width: auto; height: 200px; object-fit: cover" src="assets/images/carousel.PNG" alt="Author">
                                </div>
                            </div> <!-- single column -->
                        </div>
                    </div> <!-- row -->
                    <div class="slider-nav"></div>
                </div>
            </div>
        </div> <!-- container -->
    </section>
    <!-- Modal markup: https://getbootstrap.com/docs/4.4/components/modal/ -->
    <div id="modals">
        <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body">
                    <img src="assets/images/carousel.PNG" alt="Author">
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
        </div>
        <?php 
        foreach (glob("users/".$_SESSION['userlogin']."/*") as $file) {
            echo '<div class="modal fade" id="Modal'.(basename($file)).'" tabindex="-1" role="dialog" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">×</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                            <img style="filter: grayscale(100%);" src="'.$file.'" alt="Author">
                                      <div class="modal-footer" style=" display: flex; justify-content: center;" id="'.(basename($file)).'_modalfooter">
                                        <button type="button" class="btn btn-secondary" onclick="share(\''.(basename($file)).'\')" data-dismiss="modal">Share</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                </div>';
        }
        ?>
    </div>

    <!--====== TESTIMONIAL THREE PART ENDS ======-->
    
    <section id='share' class="pt-50 pb-30">
        <div class="container mt-4 mb-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center pb-20">
                        <h3 class="title">Condividi!</h3>
                        <p class="text">Visualizza i tuoi scatti preferiti e condividi i migliori con i tuoi amici!</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="d-flex justify-content-center row">
                <div class="col-md-8">
                    <div id="feed" class="feed p-2">
                    </div>
                </div>
                <div class="col-md-4">
                    <input type="text" id="myInput" onkeyup="search()" placeholder="Search for names..">

                        <ul id="myUL">
                        </ul>
                </div>
            </div>
        </div>
    </section>

    <!--====== FOOTER FOUR PART START ======-->

    <footer id="footer" class="footer-area">
        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="footer-link">
                            <h6 class="footer-title">Company</h6>
                            <ul>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">Profile</a></li>
                            </ul>
                        </div> <!-- footer link -->
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="footer-link">
                            <h6 class="footer-title">Solutions</h6>
                            <ul>
                                <li><a href="#">Facilities Services</a></li>
                                <li><a href="#">Workplace Staffing</a></li>
                                <li><a href="#">Project Management</a></li>
                            </ul>
                        </div> <!-- footer link -->
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="footer-link">
                            <h6 class="footer-title">Product & Services</h6>
                            <ul>
                                <li><a href="#">Products</a></li>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Developer</a></li>
                            </ul>
                        </div> <!-- footer link -->
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="footer-link">
                            <h6 class="footer-title">Help & Suuport</h6>
                            <ul>
                                <li><a href="#">Support Center</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                            </ul>
                        </div> <!-- footer link -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer widget -->
        
        <div class="footer-copyright">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="copyright text-center text-lg-left mt-10">
                            <p class="text">Crafted by <a style="color: #38f9d7" rel="nofollow" href="https://uideck.con">UIdeck</a> and UI Elements from <a style="color: #38f9d7" rel="nofollow" href="https://ayroui.com">Ayro UI</a></p>
                        </div> <!--  copyright -->
                    </div>
                    <div class="col-lg-2">
                        <div class="footer-logo text-center mt-10">
                            <a href="index.html"><img src="assets/images/logo-2.svg" alt="Logo"></a>
                        </div> <!-- footer logo -->
                    </div>
                    <div class="col-lg-5">
                        <ul class="social text-center text-lg-right mt-10">
                            <li><a href="https://facebook.com/uideckHQ"><i class="lni-facebook-filled"></i></a></li>
                            <li><a href="https://twitter.com/uideckHQ"><i class="lni-twitter-original"></i></a></li>
                            <li><a href="https://instagram.com/uideckHQ"><i class="lni-instagram-original"></i></a></li>
                            <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
                        </ul> <!-- social -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer copyright -->
    </footer>

    <!--====== FOOTER FOUR PART ENDS ======-->
    
    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->  

    <!--====== PART START ======-->



    <!--====== PART ENDS ======-->










    <!--====== jquery js ======-->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/popper.min.js"></script>

    <!--====== Slick js ======-->
    <script src="assets/js/slick.min.js"></script>

    <!--====== Isotope js ======-->
    <script src="assets/js/isotope.pkgd.min.js"></script>

    <!--====== Images Loaded js ======-->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>

    <!--====== Magnific Popup js ======-->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>

    <!--====== Scrolling js ======-->
    <script src="assets/js/scrolling-nav.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>

    <!--====== wow js ======-->
    <script src="assets/js/wow.min.js"></script>

    <!--====== Main js ======-->
    <script src="assets/js/main.js"></script>

    <!--====== Instamood js ======-->
    <script type="text/javascript" src="https://sdk.morphcast.com/mphtools/v1.0/mphtools.js"></script>
    <script type="text/javascript" src="https://ai-sdk.morphcast.com/v1.14/ai-sdk.js"></script>
    <script src="assets/js/camera_stream.js"></script>
    <!-- <script src="assets/js/mood_filters_preview.js"></script> -->

    <script src="assets/js/adapter.min.js"></script>
    <script src="assets/js/screenfull.min.js"></script>
    <script src="assets/js/howler.core.min.js"></script>
    <script src="assets/js/main_template.js"></script>

    <script type="text/javascript">

    $('#gallery').slick({
      infinite: true,
      slidesToShow: 3,
      slidesToScroll: 3,
      prevArrow:'',
      nextArrow:'<div class="row d-flex justify-content-center flex-nowrap"><div><button type="button" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path></svg>Mostra Altre</button></div></div>',
        responsive: [
    {
      breakpoint: 768,
      settings: {
      slidesToShow: 1,
      centerMode: false, /* set centerMode to false to show complete slide instead of 3 */
      slidesToScroll: 1
      }
    }
   ]    });
                
        document.addEventListener('DOMContentLoaded', function() {

    var button = document.getElementById("takePhotoButton");
    var video = document.getElementById("video");
    var gallery_row = document.getElementById("gallery");
    var modals = document.getElementById("modals");
    
    var mood;

    var classes = {
            Neutral: 'undefined',
            Happy: 'saturated',
            Sad: 'grayscale',
            Disgust: 'hue-rotate-green',
            Angry: 'red-filter',
            Fear: 'invert'
        };

        var moods = {
            Neutral: 'undefined',
            Happy: 'Happy',
            Sad: 'Sad',
            Disgust: 'Disgust',
            Angry: 'Angry',
            Fear: 'Fear'
        }

        var sentences = {
            Neutral: 'undefined',
            Happy: 'Im Happy',
            Sad: 'Im so sgalleryimaged',
            Disgust: 'Bleah',
            Angry: 'Im angryyyy',
            Fear: 'Help me!'
        }


    CY.loader()
        .addModule(CY.modules().FACE_DETECTOR.name)
        .addModule(CY.modules().FACE_EMOTION.name)
        .load()
        .then(({ start, stop }) => start());
        var mood = 'Neutral';
        window.addEventListener(CY.modules().FACE_EMOTION.eventName, (evt) => {
        mood = evt.detail.output.dominantEmotion;
        console.log(mood);

        for (var c in classes){
            video.classList.remove(classes[c]);
        }
        video.classList.add(classes[mood])
        sentence = sentences[mood];
        });

        function idgen(){
            return (((1+Math.random())*0x10000)|0).toString(16).substring(1);
        }

    button.onclick = function(event) {

      var tmpLastSlide = idgen();

      $('html,body').animate({
      scrollTop: $("#testimonial").offset().top-70},
      'slow');

      var canvas = document.createElement("canvas");
      canvas.setAttribute("width",video.videoWidth+'');
      canvas.setAttribute("height",video.videoHeight+'');

      var context = canvas.getContext('2d');

      context.filter = "grayscale(1)";
      context.drawImage(video, 0, 0, canvas.width, canvas.height);

      var dataURL = canvas.toDataURL();

      $.ajax({
        type: "POST",
        url: "/php/upload_on_server.php",
        data: { 
           imgBase64: dataURL,
           id : tmpLastSlide
        }
      }).done(function(o) {
        console.log('saved'); 
        
       loadPicture(tmpLastSlide);
    
      });
     
   };

   function loadPicture(img) {
       var gallery_element = document.createElement("div");
        gallery_element.innerHTML = '<div class="single-testimonial mt-30 mb-30 text-center" data-toggle="modal" data-target="#Modal'+img+'"><div class="justify-content-center d-flex" style= "width: auto; height: 100%;"><img id="'+img+'" style= "width: auto; height: 100%; object-fit: cover" src="users/<?php echo $_SESSION['userlogin'];?>/'+img+'" alt="Author" ></div><div id="'+img+'_footer" style=font-weight:bold;margin-top:2em;""> Non pubblicata</div></div> <!-- single column -->';
        gallery_element.classList.add('col-lg-4');
        gallery_row.prepend(gallery_element);
        $("#gallery").slick('refresh');

        var modal_element = document.createElement("div");
        modal_element.innerHTML = '<div class="modal-dialog" role="document"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div><div class="modal-body"><img src="users/<?php echo $_SESSION['userlogin'];?>/'+img+'" alt="Author"><div class="modal-footer" style=" display: flex; justify-content: center;"><button type="button" onclick="share('+img+')" class="btn btn-secondary" data-dismiss="modal">Share</button><button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button></div></div></div></div>';
        modal_element.classList.add('modal');
        modal_element.classList.add('fade');
        modal_element.id = 'Modal'+img;
        modal_element.setAttribute('tabindex','-1');
        modal_element.setAttribute('role','dialog');
        modal_element.setAttribute('aria-hidden','true');
        modals.prepend(modal_element);
   }

});
    </script>

    <script>

    $.ajax({
            type: "POST",
            url: "/php/getgalleryinfo.php"
          }).done(function(result) {
            for (var picture of JSON.parse(result)){
                let galleryimage = document.getElementById(picture.pictureID+'_footer');
                var date = new Date(picture.timestamp.substring(0,18).replace(/-/g,"/"));
                //galleryimage.innerHTML="Pubblicata! "+date.toLocaleString('en-US')+"-"+picture.likes+' likes!';
                galleryimage.innerHTML="Pubblicata: "+picture.likes+' likes!';
                var gallimg = document.getElementById(picture.pictureID);
                gallimg.parentNode.parentNode.append(galleryimage);

                let gallerymodal = document.getElementById(picture.pictureID+'_modalfooter');
                gallerymodal.innerHTML = '<div>Pubblicata il '+date.toLocaleString('en-US')+'</div><div><button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button></div>';
                gallerymodal.style.display="flex";
                gallerymodal.style.justifyContent="center";
            }
          });

    feed = document.getElementById("feed");

    var names=[];
    var pictures = [];

    $.ajax({
        type: "POST",
        url: "/php/find.php",
      }).done(function(o) {
        names=JSON.parse(o);
      });

      $.ajax({
        type: "POST",
        url: "/php/feed.php",
      }).done(function(o) {
        pictures = JSON.parse(o);
          for (i = 0; i < pictures.length; i++) {
            $('<div class="bg-white border mt-2"><div><div class="d-flex flex-row justify-content-between align-items-center p-2 border-bottom"><div class="d-flex flex-row align-items-center feed-text px-2"><img class="rounded-circle" src="/assets/images/logo_small_icon_only.png" width="45" height="45"><div class="d-flex flex-column flex-wrap ml-2"><span id="'+pictures[i].pictureID+'_span" class="font-weight-bold">'+pictures[i].user+': '+pictures[i].likes+' likes!</span><span class="text-black-50 time">Many seconds ago</span></div></div><div class="feed-icon px-2"><i class="fa fa-ellipsis-v text-black-50"></i></div><div class="heartbox"><input type="checkbox" onclick="like(\''+pictures[i].pictureID+'\',\''+pictures[i].user+'\')" class="checkbox" id="checkbox_'+i+'" /><label for="checkbox_'+i+'"> <svg id="heart-svg" viewBox="467 392 58 57" xmlns="http://www.w3.org/2000/svg"><g id="Group" fill="none" fill-rule="evenodd" transform="translate(467 392)"><path d="M29.144 20.773c-.063-.13-4.227-8.67-11.44-2.59C7.63 28.795 28.94 43.256 29.143 43.394c.204-.138 21.513-14.6 11.44-25.213-7.214-6.08-11.377 2.46-11.44 2.59z" id="heart" fill="#AAB8C2" /> <circle id="main-circ" fill="#E2264D" opacity="0" cx="29.5" cy="29.5" r="1.5" /><g id="heartgroup7" opacity="0" transform="translate(7 6)"><circle id="heart1" fill="#9CD8C3" cx="2" cy="6" r="2" /><circle id="heart2" fill="#8CE8C3" cx="5" cy="2" r="2" /></g><g id="heartgroup6" opacity="0" transform="translate(0 28)"> <circle id="heart1" fill="#CC8EF5" cx="2" cy="7" r="2" /> <circle id="heart2" fill="#91D2FA" cx="3" cy="2" r="2" /></g><g id="heartgroup3" opacity="0" transform="translate(52 28)"> <circle id="heart2" fill="#9CD8C3" cx="2" cy="7" r="2" /> <circle id="heart1" fill="#8CE8C3" cx="4" cy="2" r="2" /></g><g id="heartgroup2" opacity="0" transform="translate(44 6)"><circle id="heart2" fill="#CC8EF5" cx="5" cy="6" r="2" /><circle id="heart1" fill="#CC8EF5" cx="2" cy="2" r="2" /></g><g id="heartgroup5" opacity="0" transform="translate(14 50)"> <circle id="heart1" fill="#91D2FA" cx="6" cy="5" r="2" /> <circle id="heart2" fill="#91D2FA" cx="2" cy="2" r="2" /></g><g id="heartgroup4" opacity="0" transform="translate(35 50)"> <circle id="heart1" fill="#F48EA7" cx="6" cy="5" r="2" /> <circle id="heart2" fill="#F48EA7" cx="2" cy="2" r="2" /></g><g id="heartgroup1" opacity="0" transform="translate(24)"> <circle id="heart1" fill="#9FC7FA" cx="2.5" cy="3" r="2" /><circle id="heart2" fill="#9FC7FA" cx="7.5" cy="2" r="2" /></g></g></svg></label></div></div></div><div class="feed-image p-2 px-3 d-flex justify-content-center"><img class="img-fluid img-responsive" src="users/'+pictures[i].user+'/'+pictures[i].pictureID+'" ></div></div></div>').appendTo(feed);
            console.log(pictures[i].liked);
            if (pictures[i].liked==1)
                document.getElementById('checkbox_'+i).checked =true;
          }
      });

    function search() {
      // Declare variables
      var input, filter, ul, li, a, i, txtValue;
      input = document.getElementById('myInput');
      filter = input.value.toUpperCase();
      ul = document.getElementById("myUL");
      li = ul.getElementsByTagName('li');

      $.ajax({
        type: "POST",
        url: "/php/find.php",
      }).done(function(o) {
        names=JSON.parse(o);
        $(ul).empty();
      // Loop through all list items, and hide those who don't match the search query
      for (i = 0; i < names.length; i++) {
        if (names[i].toUpperCase().indexOf(filter) > -1) {
          $('<li><div style="display: flex;"><p style="width: 80%;" href="#">'+names[i]+'</p><button onclick="follow(\''+names[i]+'\')">Follow</button></div></li>').appendTo(ul);

        }
      }
      });

      
    }


    function follow(name){
        $.ajax({
        type: "POST",
        url: "/php/follow.php",
        data: { 
           following : name
        }
      }).done(function(o) {
        console.log('followed'); 
        search();
    
      });
    }

    function like(picture,user){
        $.ajax({
        type: "POST",
        url: "/php/like.php",
        data: { 
           pictureID : picture,
        }
      }).done(function(likes) {
        console.log('done');
        var likespan = document.getElementById(picture+'_span');
        likespan.innerHTML = user+': '+likes+' likes!';
      });
    }

    function share(picture){
        $.ajax({
        type: "POST",
        url: "/php/share.php",
        data: { 
           pictureID : picture
        }
      }).done(function(o) {
        console.log('shared'); 
    
      });
    }

    </script>

</body>

</html>
