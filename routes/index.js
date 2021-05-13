var express = require('express');
var router = express.Router();

/* GET home page. */
router.get('/', function(req, res, next) {
  res.render('index', { title: 'Express' });
});

router.get('/recognition', function(req, res, next) {
  /*
  res.sendFile(path.resolve('./public/recognition.html'));*/
  res.render('recognition', { title: 'Express' });
});


router.get('/story', function(req, res, next) {
	var path = require('path');
    require(path.resolve('./public/javascripts/image-feed.js'));
  	res.render('story', { title: 'Express' });
});

module.exports = router;
