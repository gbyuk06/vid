<!doctype html>
<html>
	<head>
		<title>CT2018 - 01</title>
		<link href="//vjs.zencdn.net/4.12/video-js.css" rel="stylesheet">
		<script src="//vjs.zencdn.net/4.12/video.js"></script>
		        <script>
            
            var menuDisplayed = false;
            var menuBox = null;
            
            window.addEventListener("contextmenu", function() {
                var left = arguments[0].clientX;
                var top = arguments[0].clientY;
                
                menuBox = window.document.querySelector(".menu");
                menuBox.style.left = left + "px";
                menuBox.style.top = top + "px";
                menuBox.style.display = "block";
                
                arguments[0].preventDefault();
                
                menuDisplayed = true;
            }, false);
            
            window.addEventListener("click", function() {
                if(menuDisplayed == true){
                    menuBox.style.display = "none"; 
                }
            }, true);
        </script>
		<style type="text/css">
			body{margin:0;background: #000000;}

            .menu
            {
            	background:#333;
                width: 150px;
                box-shadow: 3px 3px 5px #888888;
                border-style: solid;
                border-width: 1px;
                border-color: grey;
                border-radius: 2px;
                padding: 5px;
                position: fixed;
                display: none;
                color:white;
            }
            .menu hr{margin:0;}
            .menu-item
            {
                height: 20px;
            }
            
            .menu-item:hover
            {
                background-color: #0066ff;
                cursor: pointer;
            }

  .vjs-default-skin { color: #0082ff; }
  .vjs-default-skin .vjs-control-bar,
  .vjs-default-skin .vjs-big-play-button { background: rgba(3,3,3,0.7) }
  .vjs-default-skin .vjs-slider { background: rgba(3,3,3,0.2333333333333333) }
  .vjs-default-skin .vjs-control-bar { font-size: 86% }
		  
		  video#MY_VIDEO_1_html5_api,#MY_VIDEO_1,.video-js{ 
			position: fixed; right: 0; bottom: 0;
			min-width: 100%!important; min-height: 100%!important;
			width: 100!important height: 100%!important; z-index: -100;
			background: url(polina.jpg) no-repeat;
			background-size: cover; 
			}
        iframe.iframe-streaming{
            position: fixed; right: 0; top: 0;
            min-width: 100%!important; min-height: 93%!important;
            width: 100!important height: 93%!important; z-index: -100;
            background: url(polina.jpg) no-repeat;
            background-size: cover; 
            border:none;
        }
        .setting{width:100%;position:fixed;bottom:0;height:7%;line-height: 7%;background: #111;text-align: center;}
button.active_resolusi, button.btn_resolusi:hover ,div.setting a:hover{
    background-color: #0066ff;
    color: white;
}
/* Style the buttons */
.btn {
    border: none;
    outline: none;
    background-color: #333;
    cursor: pointer;
    margin:5px 0;
    padding: 0;
}
.btn a{color:white;text-decoration:none;padding:5px 10px;display: inline-block;}
/* Style the active class, and buttons on mouse-over */
.active, .btn:hover {
    background-color: #0066ff;
    color: white;
}
		</style>
<script src='//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js'></script>
	</head>
	<body>
        <div class="menu">
            <div class="menu-item">WAR</div>
            <hr>
            <div class="menu-item">Watch Anime Relaxing</div>
        </div>