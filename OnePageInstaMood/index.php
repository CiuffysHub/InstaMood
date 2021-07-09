<?php
session_start();
if(!isset($_SESSION['userlogin']))
  header("location: /assets/php/login_page.php");

// carica immagini
// users/$_SESSION['userlogin']/*
// array = prendi le ultime 6
//...
//<img src<?php...array[0]>>>
//oppure creare in tempo reale con la funzione in fondo
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
                                        <a class="page-scroll" href="#">CONDIVIDI</a>
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
                                echo '<div class="col-lg-4 col-xs-6">
                                    <div class="single-testimonial mt-30 mb-30 text-center" data-toggle="modal" data-target="#exampleModal1">
                                        <div class="justify-content-center d-flex" style= "width: auto; height: 200px;">
                                            <img style="width: auto; height: 200px; object-fit: cover" src='.$file.' alt="Author">
                                        </div>
                                    </div> <!-- single column -->
                                </div>';
                            }

                        ?>
                        <div class="col-lg-4 col-xs-6">
                            <div class="single-testimonial mt-30 mb-30 text-center" data-toggle="modal" data-target="#exampleModal1">
                                <div class="justify-content-center d-flex" style= "width: auto; height: 200px;">
                                    <img style="width: auto; height: 200px; object-fit: cover" src="assets/images/carousel.PNG" alt="Author">
                                </div>
                            </div> <!-- single column -->
                        </div>
                    </div> <!-- row -->
                </div>
            </div> <!-- row -->
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
        <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body">
                    <img style="filter: grayscale(100%);" src="assets/images/carousel.PNG" alt="Author">
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
        </div>
    </div>

    <!--====== TESTIMONIAL THREE PART ENDS ======-->
    
    <div class="container mt-4 mb-5">
    <div class="d-flex justify-content-center row">
        <div class="col-md-8">
            <div class="feed p-2">
                <div class="bg-white border mt-2">
                    <div>
                        <div class="d-flex flex-row justify-content-between align-items-center p-2 border-bottom">
                            <div class="d-flex flex-row align-items-center feed-text px-2"><img class="rounded-circle" src="assets/images/carousel.PNG" width="45" height="45">
                                <div class="d-flex flex-column flex-wrap ml-2"><span class="font-weight-bold">Thomson ben</span><span class="text-black-50 time">40 minutes ago</span></div>
                            </div>
                            <div class="feed-icon px-2"><i class="fa fa-ellipsis-v text-black-50"></i></div>
                        </div>
                    </div>
                    <div class="p-2 px-3"><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></div>
                    <div class="d-flex justify-content-end socials p-2 py-3"><i class="fa fa-thumbs-up"></i><i class="fa fa-comments-o"></i><i class="fa fa-share"></i></div>
                </div>
                <div class="bg-white border mt-2">
                    <div>
                        <div class="d-flex flex-row justify-content-between align-items-center p-2 border-bottom">
                            <div class="d-flex flex-row align-items-center feed-text px-2"><img class="rounded-circle" src="assets/images/carousel.PNG" width="45" height="45">
                                <div class="d-flex flex-column flex-wrap ml-2"><span class="font-weight-bold">Thomson ben</span><span class="text-black-50 time">40 minutes ago</span></div>
                            </div>
                            <div class="feed-icon px-2"><i class="fa fa-ellipsis-v text-black-50"></i></div>
                        </div>
                    </div>
                    <div class="feed-image p-2 px-3 d-flex justify-content-center"><img class="img-fluid img-responsive" src="assets/images/carousel.PNG"></div>
                    <div class="d-flex justify-content-end socials p-2 py-3"><i class="fa fa-thumbs-up"></i><i class="fa fa-comments-o"></i><i class="fa fa-share"></i></div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <input type="text" id="myInput" onkeyup="search()" placeholder="Search for names..">

                <ul id="myUL">
                  <li><div>Adele
                    <button type="button" class="btn" style="background-color: #ffb6c0; border-color: #ffa7d1;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
                  <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"></path>
                  <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"></path>
                </svg>
                Follow
              </button></div></li>
                  <li><a href="#">Agnes</a></li>

                  <li><a href="#">Billy</a></li>
                  <li><a href="#">Bob</a></li>

                  <li><a href="#">Calvin</a></li>
                  <li><a href="#">Christina</a></li>
                  <li><a href="#">Cindy</a></li>
                </ul>
        </div>
    </div>
</div>

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
    <!-- <script type="text/javascript" src="https://sdk.morphcast.com/mphtools/v1.0/mphtools.js"></script>
    <script type="text/javascript" src="https://ai-sdk.morphcast.com/v1.14/ai-sdk.js"></script> -->
    <script src="assets/js/camera_stream.js"></script>
    <script src="assets/js/mood_filters_preview.js"></script>

    <script src="js/adapter.min.js"></script>
    <script src="js/screenfull.min.js"></script>
    <script src="js/howler.core.min.js"></script>
    <script src="js/main.js"></script>

    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {

    var button = document.getElementById("takePhotoButton");
    var video = document.getElementById("video");
    var gallery_row = document.getElementById("gallery");
    var modals = document.getElementById("modals");
    


    button.onclick = function(event) {

      var tmpLastSlide = (((1+Math.random())*0x10000)|0).toString(16).substring(1);

      $('html,body').animate({
      scrollTop: $("#testimonial").offset().top-70},
      'slow');

      var canvas = document.createElement("canvas");
      canvas.setAttribute("width",video.videoWidth+'');
      canvas.setAttribute("height",video.videoHeight+'');

      var context = canvas.getContext('2d');

      context.drawImage(video, 0, 0, canvas.width, canvas.height);

      var dataURL = canvas.toDataURL();

      $.ajax({
        type: "POST",
        url: "/assets/php/upload_on_server.php",
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
        gallery_element.innerHTML = '<div class="single-testimonial mt-30 mb-30 text-center" data-toggle="modal" data-target="#Modal'+img+'"><div class="justify-content-center d-flex" style= "width: auto; height: 100%;"><img style= "width: auto; height: 100%; object-fit: cover" src="users/<?php echo $_SESSION['userlogin'];?>/'+img+'" alt="Author" ></div></div> <!-- single column -->';  
        gallery_element.classList.add('col-lg-4');
        gallery_row.prepend(gallery_element);
        $("#gallery").slick('refresh');

        var modal_element = document.createElement("div");
        modal_element.innerHTML = '<div class="modal-dialog" role="document"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div><div class="modal-body"><img src="assets/images/new.jpg" alt="Author"><div class="modal-footer"><button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button></div></div></div></div>';
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
    function search() {
      // Declare variables
      var input, filter, ul, li, a, i, txtValue;
      input = document.getElementById('myInput');
      filter = input.value.toUpperCase();
      ul = document.getElementById("myUL");
      li = ul.getElementsByTagName('li');

      // Loop through all list items, and hide those who don't match the search query
      for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          li[i].style.display = "";
        } else {
          li[i].style.display = "none";
        }
      }
    }
    </script>

</body>

</html>
