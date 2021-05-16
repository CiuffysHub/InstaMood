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

    var classes = {
  		Happy: 'saturated',
  		Sad: 'grayscale'
	};

	var sentences = {
		Happy: 'Happy: Il sorriso è il sale della vita - Tonino Guerra',
		Sad: 'Sad: Dio è morto - Friedrich Wilhelm Nietzsche'
	}

    for (var c in classes){
    	preview.classList.remove(classes[c]);
    }
    preview.classList.add(classes[sentence])
    sentence = sentences[sentence];

    dynamic.innerHTML = sentence;
    });