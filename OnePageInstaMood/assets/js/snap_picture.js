 document.addEventListener('DOMContentLoaded', function() {

    var button = document.getElementById("snap");
    var video = document.getElementById("videoElement");
    var canvas = document.getElementById("canvasCamera");

    button.onclick = function(event) {
      console.log("clicked");
      var ctx = canvas.getContext('2d');

      for (var c in classes){
         canvas.classList.remove(classes[c]);
      }
      canvas.classList.add(classes[mood])
      mood = moods[mood];

      //ctx.filter = 'grayscale(1)';
      ctx.drawImage(video, 0, 0, canvas.width, canvas.height);
      drawing = new Image();
      //drawing.src = "images/sad.png";
      drawing .onload = function(){ctx.drawImage(drawing,0,0,drawing.width*8,drawing.height*8);};

      var download = document.getElementById('link');
		download.addEventListener('click', function(ev) {
  		download.href = canvas.toDataURL();
  		download.download = 'img.png';
		}, false);   

    };

});