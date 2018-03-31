<!DOCTYPE html>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<html> 
<link href="style.css" rel="stylesheet"> 
<head>
</head><div class="content">
  <div class="title">
    <h1>
      The Moderation Project
    </h1>
    <script type="text/javascript">
 
    </script>
  </div>
  <div class="main-image">
  <img src="blank.jpg" name="canvas" width="300"/>
  </div>
  <h2>
    Pensez-vous que ce contenu devrait être retiré ?
  </h2>

  <div class="choice">

      <button id="oui" onClick="getRandomImage();" >Oui</button>
      <button id="non" onClick="getRandomImage();" >Non</button>

    <script src="javascript.js"></script>
  </div>
</div>

</html>

<script type="text/javascript">
var random_images_array = ["data:image/png;base64,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", "https://www.jqueryscript.net/images/Simplest-Responsive-jQuery-Image-Lightbox-Plugin-simple-lightbox.jpg", "https://i1.wp.com/netino.fr/wp-content/uploads/2017/08/exemple-moderation-3.png?resize=300%2C63", "https://i2.wp.com/netino.fr/wp-content/uploads/2017/08/exemple-moderation-2.png?resize=300%2C87"];

function getRandomImage() {
  var randomNumber = Math.floor(Math.random() * random_images_array.length);
  document.canvas.src = random_images_array[randomNumber];
}
window.onload = getRandomImage();

</script>