<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<div class="main-slider" id="main-slider">
            <div>
                <div class="video-wrapper">
                    <iframe src="https://www.youtube.com/embed/lqj-QNYsZFk?controls=1">
                                </iframe>

                </div>
            </div>
            <div>
                <div class="video-wrapper">
                    <iframe src="https://www.youtube.com/embed/lqj-QNYsZFk?controls=1">
                                </iframe>

                </div>
            </div>          
</div>
</body>
</html>

<style>

.video-wrapper {
	position: relative;
	padding-bottom: 56.25%; /* 16:9 */
	padding-top: 25px;
	height: 0;
}
.video-wrapper iframe {
	position: absolute;
	top: 0;
	left: 0;
	width: 50%;
	height: 50%;
}


</style>

<script>
  $('#main-slider').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 3000,
      dots: true,
      infinite: true,
      adaptiveHeight: true,
      arrows: false
  });
  
  var video = $('#main-slider .slick-active').find('iframe').get(0).play();

  $('#main-slider').on('afterChange', function(event, slick, currentSlide, nextSlide){
    $('#main-slider .slick-slide').find('video').get(0).pause();
    var video = $('#main-slider .slick-active').find('video').get(0).play();
});
</script>