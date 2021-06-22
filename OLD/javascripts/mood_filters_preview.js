var mood;

var classes = {
        Happy: 'saturated',
        Sad: 'grayscale',
        Disgust: 'hue-rotate-green',
        Angry: 'red-filter',
        Fear: 'invert'
    };

    var moods = {
        Happy: 'Happy',
        Sad: 'Sad',
        Disgust: 'Disgust',
        Angry: 'Angry',
        Fear: 'Fear'
    }

    var sentences = {
        Happy: 'Im Happy',
        Sad: 'Im so saaad',
        Disgust: 'Bleah',
        Angry: 'Im angryyyy',
        Fear: 'Help me!'
    }


CY.loader()
    .licenseKey("f83f9d80001b097b852fb32d5fce39b5a80239b57050")
    .addModule(CY.modules().FACE_DETECTOR.name)
    .addModule(CY.modules().FACE_EMOTION.name)
    .load()
    .then(({ start, stop }) => start());
    var mood = 'Neutral';
    window.addEventListener(CY.modules().FACE_EMOTION.eventName, (evt) => {
    var dynamic = document.getElementById("dynamic");
    mood = evt.detail.output.dominantEmotion;
    console.log(mood);
    var preview = document.getElementById("videoElement");

    for (var c in classes){
    	preview.classList.remove(classes[c]);
    }
    preview.classList.add(classes[mood])
    sentence = sentences[mood];

    dynamic.innerHTML = sentence;
    });