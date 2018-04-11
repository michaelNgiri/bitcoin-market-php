<!DOCTYPE html>
<html>
<head>
	<title>Array Slider</title>
	<style type="text/css">
		
#wss{

	opacity: 0;
	-webkit-transition: opacity 1.0s linear 0s;
}

	</style>
	<script >
		var wss_i = 0;
		var wss_array = ["cute", "awesome", "interactive", "interesting", "useful", "pays", "works"]
		function wssNext(){
			wss_i++;
			wss_elem.style.opacity = 0;
			if (wss_i > (wss_array.lenght - 1)) {
				wss_i = 0;
			}
			setTimeout('wssSlide()' , 1000);


		}
		function wssSlide(){
			wss_elem.innerHTML = wss_array[wss_i];
			wss_elem.style.opacity = 1;
			setTimeout('wssNext()', 2000);


		}

	</script>
</head>

<body>
	my site is<span id="wss"></span>
	<script>wss_elem = document.getElementId('wss'); wssSlide </script>

</body>
</html>