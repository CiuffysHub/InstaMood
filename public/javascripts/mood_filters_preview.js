CY.loader()
    .licenseKey("f83f9d80001b097b852fb32d5fce39b5a80239b57050")
    .addModule(CY.modules().FACE_DETECTOR.name)
    .addModule(CY.modules().FACE_EMOTION.name)
    .load()
    .then(({ start, stop }) => start());
    var mood = 'Neutral';
    window.addEventListener(CY.modules().FACE_EMOTION.eventName, (evt) => {
    var dynamic = document.getElementById("dynamic");
    var sentence = evt.detail.output.dominantEmotion;
    var preview = document.getElementById("videoElement");
    switch(sentence){
      case "Happy":
        sentence = "Happy: Il sorriso è il sale della vita - Tonino Guerra";
        preview.classList.add('saturated');
        preview.classList.remove('grayscale');
        break;
      case "Sad":
        sentence = "Sad: Dio è morto - Friedrich Wilhelm Nietzsche";
        preview.classList.add('grayscale');
        preview.classList.remove('saturated');
        break;
    };
    dynamic.innerHTML = sentence;
    });