<html>
<link href="css/styles.css" rel="stylesheet">
<body>
	<?php
		$page = "index";
		include('includes/header.php');
	?>
<video id="video"></video>
<button id="startbutton">Prendre une photo</button>
<canvas id="canvas"></canvas>
<img src="http://onlyfamouspeople.com/images/logo.png" id="photo" alt="photo">
<form action="#" method="post" enctype="multipart/form-data">
<div><input id="copy" type="hidden" name="copy"></div>
<button type="submit">Envoyer</button>
</form>
<?php
	list($type, $data) = explode(';', $_POST['copy']);
	list(, $data) = explode(',', $data);
	$data = base64_decode($data);
	file_put_contents('tmp1.png', $data);
	?>
</body>
<?php include('includes/footer.php'); ?>
</html>
<script>
(function() {

  var streaming = false,
      video        = document.querySelector('#video'),
      cover        = document.querySelector('#cover'),
      canvas       = document.querySelector('#canvas'),
      photo        = document.querySelector('#photo'),
      startbutton  = document.querySelector('#startbutton'),
			copy				 = document.querySelector('#copy'),
      width = 320,
      height = 0;

  navigator.getMedia = ( navigator.getUserMedia ||
                         navigator.webkitGetUserMedia ||
                         navigator.mozGetUserMedia ||
                         navigator.msGetUserMedia);

  navigator.getMedia(
    {
      video: true,
      audio: false
    },
    function(stream) {
      if (navigator.mozGetUserMedia) {
        video.mozSrcObject = stream;
      } else {
        var vendorURL = window.URL || window.webkitURL;
        video.src = vendorURL.createObjectURL(stream);
      }
      video.play();
    },
    function(err) {
      console.log("An error occured! " + err);
    }
  );

  video.addEventListener('canplay', function(ev){
    if (!streaming) {
      height = video.videoHeight / (video.videoWidth/width);
      video.setAttribute('width', width);
      video.setAttribute('height', height);
      canvas.setAttribute('width', width);
      canvas.setAttribute('height', height);
      streaming = true;
    }
  }, false);

  function takepicture() {
    canvas.width = width;
    canvas.height = height;
    canvas.getContext('2d').drawImage(video, 0, 0, width, height);
    var data = canvas.toDataURL('image/png');
    photo.setAttribute('src', data);
		copy.setAttribute('value', data);
		console.log(data);
  }

  startbutton.addEventListener('click', function(ev){
      takepicture();
    ev.preventDefault();
  }, false);

})();
</script>
