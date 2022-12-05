//var manifestUri='https://live1-ott.izzigo.tv/out/u/dash/CANAL-2-HD/default.mpd';
//nuevos canales https://live2-ott.izzigo.tv/out/u/dash/DREAM-WORKS-HD/default.mpd y https://live4-ott.izzigo.tv/out/u/dash/SONY-MOVIES-HD/default.mpd


//var manifestUri='NULL';
var player='';
var manifestUri='';

function initApp(obj) {

    // Install built-in polyfills to patch browser incompatibilities.
    shaka.polyfill.installAll();

    // Check to see if the browser supports the basic APIs Shaka needs.
    if (shaka.Player.isBrowserSupported()) {
        // Everything looks good!
        initPlayer(obj);
    } else {
        // This browser does not have the minimum set of APIs we need.
        console.error('Browser not supported!');
    }
}

function initPlayer(obj) {
    // Create a Player instance.
    //alert(obj);
    if(!player){
    var video = document.getElementById('video');

    player = new shaka.Player(video);
}

//alert("URL CANAL:"+document.getElementById("canalElegido").value);
   player.configure({
        drm: {
            servers: {

				'com.widevine.alpha': 'https://issigo.herokuapp.com/izzigo.php',
                'com.microsoft.playready': 'https://issigo.herokuapp.com/izzigo.php'
            }
        }
    });

    // Attach player to the window to make it easy to access in the JS console.
    window.player = player;


    // Listen for error events.
    player.addEventListener('error', onErrorEvent);

    // Try to load a manifest.
    // This is an asynchronous process.
    player.load(obj).then(function () {
        // This runs if the asynchronous load is successful.
        console.log('The video has now been loaded!');
    }).catch(onError);  // onError is executed if the asynchronous load fails.
}

function onErrorEvent(event) {
    // Extract the shaka.util.Error object from the event.
    onError(event.detail);
}

function onError(error) {
    // Log the error.
    //console.error('Error code', error.code, 'object', error);
}

document.addEventListener('DOMContentLoaded', initApp);
