<?php


$canal=$_POST["zapCanal"];



echo "<input hidden='text' value='".$canal."' id='IDCANAL'></input>"



?>

<!DOCTYPE html>
<html>

<head>
	<title>new app</title>
	<style type="text/css">
		body {
    
			max-width: 100%;
			height: 100%;
				overflow-x: hidden;
			background-color: #202020;
			overflow: hidden;
		}

		div {
			position: absolute;
			height: 100%;
			width: 100%;
			display: table;
		}

		h1 {
			display: table-cell;
			vertical-align: middle;
			text-align: center;
			color: #FFFFFF;
		}
video {
    position: fixed; right: 0; bottom: 0;
    min-width: 100%; min-height: 100%;
    width: 50%; height: 50%; z-index: -100;

}
	</style>
</head>
<body onload="load()">
<script src="webOSTVjs-1.2.4/webOSTV.js" charset="utf-8"></script>
<script src="webOSTVjs-1.2.4/webOSTV-dev.js" charset="utf-8"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/shaka-player/3.2.0/shaka-player.compiled.js"></script>
      <script src="https://issigo.herokuapp.com/shaka-issi.js"></script>
<script type="text/javascript">
	//sample code for calling LS2 API
	webOS.service.request("luna://com.palm.systemservice", {
		method: "clock/getTime",
		parameters: {},
		onSuccess: function (args) {
			console.log("UTC:", args.utc);
		},
		onFailure: function (args) {
			console.log("Failed to getTime");
		}
	});
</script>

<video id="video" controls autoplay preload="auto" crossorigin="anonymous"></video>

<script>
function load(){
var e = document.getElementById("IDCANAL");
var video = document.getElementsByTagName('video')[0];
var vid = document.getElementById("video");
//var sources = video.getElementsByTagName('source');
initApp(document.getElementById("IDCANAL").value);


}



</script>
	
<script type="text/javascript">
var sc_project=12677087; 
var sc_invisible=1; 
var sc_security="d575087a"; 
</script>
<script type="text/javascript"
src="https://www.statcounter.com/counter/counter.js"
async></script>
<noscript><div class="statcounter"><a title="Web Analytics
Made Easy - Statcounter" href="https://statcounter.com/"
target="_blank"><img class="statcounter"
src="https://c.statcounter.com/12677087/0/d575087a/1/"
alt="Web Analytics Made Easy - Statcounter"
referrerPolicy="no-referrer-when-downgrade"></a></div></noscript>	
</body>
</html>
