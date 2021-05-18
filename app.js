const http = require('http')
const fs = require('fs')
const url = require('url');
const path = require('path');

const story = require(path.resolve('./javascripts/image-feed-simulatelogin.js'))

http.createServer(function (req,res){

				var request = url.parse(req.url, true);
  				var action = request.pathname;

                if(req.url === '/index.html') {
                fs.readFile('index.html',function(err,data){
                res.writeHead(200,{'Content-Type': 'text/html'});
                res.write(data);
                res.end();
              	});
                }
                if(req.url === '/story') {
                story.post();
                }
                else if(req.url === '/stylesheets/style.css') {
                fs.readFile('stylesheets/style.css',function(err,data){
                res.writeHead(200,{"Content-Type": "text/css"});
                res.write(data);
                res.end();
                });
                }
                else if(action.substr(0,13) == '/javascripts/') {
                fs.readFile('./'+action,function(err,data){
                res.writeHead(200,{"Content-Type": "text/javascript"});
                res.write(data);
                res.end();
                });
                }
                if (action.substr(0,8) == '/images/') {
			    var img = fs.readFileSync('./'+action);
			    res.writeHead(200, {'Content-Type': 'image/jpeg' });
			    res.end(img, 'binary');
  				}	

            }).listen(3000);