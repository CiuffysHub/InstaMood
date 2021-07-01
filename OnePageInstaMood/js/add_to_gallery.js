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

        var gallery_element = document.createElement("div");
        gallery_element.innerHTML = '<div class="single-testimonial mt-30 mb-30 text-center" data-toggle="modal" data-target="#Modal'+tmpLastSlide+'"><div class="justify-content-center d-flex" style= "width: auto; height: 100%;"><img style= "width: auto; height: 100%; object-fit: cover" src="assets/php/'+tmpLastSlide+'" alt="Author" ></div></div> <!-- single column -->';  
        gallery_element.classList.add('col-lg-4');
        gallery_row.prepend(gallery_element);
        $("#gallery").slick('refresh');

        var modal_element = document.createElement("div");
        modal_element.innerHTML = '<div class="modal-dialog" role="document"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div><div class="modal-body"><img src="assets/images/new.jpg" alt="Author"><div class="modal-footer"><button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button></div></div></div></div>';
        modal_element.classList.add('modal');
        modal_element.classList.add('fade');
        modal_element.id = 'Modal'+tmpLastSlide;
        modal_element.setAttribute('tabindex','-1');
        modal_element.setAttribute('role','dialog');
        modal_element.setAttribute('aria-hidden','true');
        modals.prepend(modal_element);
       
    
      });
     
      
    





   };

});