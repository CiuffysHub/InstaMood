var video = document.querySelector("#videoElement");
var canvas = document.getElementById("canvasCamera");

	function download() {
   	var dt = canvas.toDataURL('image/jpeg');
   	this.href = dt;
	};

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
        ctx.drawImage(video, 0, 0, canvas.width, canvas.height);

        var downloadFile = document.getElementById('download');
		downloadFile.addEventListener('click', download, false);


        if(video.classList.contains("grayscale")){
             canvas.classList.add('grayscale');
             canvas.classList.remove('saturated');
        }
        if(video.classList.contains("saturated")){
             canvas.classList.add('saturated');
             canvas.classList.remove('grayscale');
         }         

    };

});