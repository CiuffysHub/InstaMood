var video = document.querySelector("#videoElement");
var canvas = document.getElementById("canvasCamera");

    if (navigator.mediaDevices.getUserMedia) {
      navigator.mediaDevices.getUserMedia({ video: true })
        .then(function (stream) {
          video.srcObject = stream;
        })
        .catch(function (err0r) {
          console.log("Something went wrong!");
        });
    }

    document.addEventListener('DOMContentLoaded', function() {
    var button = document.getElementById("snap");
    var video = document.getElementById("videoElement");
    button.onclick = function(event) {
        var ctx = canvas.getContext('2d');
        ctx.filter = 'grayscale(1)';
        ctx.drawImage(video, 0, 0, canvas.width, canvas.height);

        var download = document.getElementById('link');
		download.addEventListener('click', function(ev) {
  		download.href = canvas.toDataURL();
  		download.download = 'img.png';
		}, false);   

    };

});