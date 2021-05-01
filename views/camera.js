var video = document.querySelector("#videoElement");

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
    var canvas = document.getElementById("canvasCamera");
    button.onclick = function(event) {
        var ctx = canvas.getContext('2d');
		ctx.drawImage(video, 0, 0, canvas.width, canvas.height);
    };
});