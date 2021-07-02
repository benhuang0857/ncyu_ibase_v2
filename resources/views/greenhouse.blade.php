<!DOCTYPE html>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>智慧農業戰情中心</title>
    <!--link-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href='{{asset('fat_nav/Source+Sans+Pro.css')}}' rel='stylesheet' type='text/css'>
    <link href='{{asset('fat_nav/humblegs.css')}}' rel='stylesheet' type='text/css'>
    <link href='{{asset('fat_nav/jquery.fatNav.min.css')}}' rel='stylesheet' type='text/css'>
    <link href='{{asset('fat_nav/main.css')}}' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{asset('fat_nav/reset.css')}}">
    <link rel="stylesheet" href="{{asset('fat_nav/index.css')}}">
	<link rel="stylesheet" href="{{asset('fancyknob/fancyknob.css')}}">

    <style type="text/css">
		#apDiv5 {
			/*position: absolute;*/
			width: 100%;
			margin: auto;
			/*height: 100%;*/
			z-index: -999;
			color: rgba(255,255,255,0.9);
			font-family: "微軟正黑體";
			font-size: 60px;
			line-height: 90px;
		}
		#apDiv11 {
			/*position: absolute;*/
			width: 100%;
			margin: auto;
			z-index: -999;
			color: rgba(255,255,255,0.9);
			font-family: "微軟正黑體";
			font-size: 60px;
			line-height: 90px;
		}
		body::-webkit-scrollbar {
			display: none;
		}
    </style>
    <!--link-->
</head>

<body style="background-image:url('{{asset('images/newbg.jpg')}}')">
    
    <section class="bg">
    <div class="cover" id="map">
        <section style="display: block; margin:80px; width:90%">
			<div id="apDiv11">
				<canvas data-type="radial-gauge"
						data-major-ticks="0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10"
						data-type="radial-gauge"
						data-title="Voltage"
						data-units="V"
						data-value="4.5"
						data-value-int="0"
						data-value-dec="0"
						data-width="400"
						data-height="400"
						data-min-value="0"
						data-max-value="10"
						data-highlights="false"
						data-animate-on-init="true"
						data-color-stroke-ticks="#f00"
				></canvas>

				<canvas data-type="radial-gauge"
						data-width="400"
						data-height="400"
						data-units="Air Temperature"
						data-title="false"
						data-value="24.5"
						data-animate-on-init="true"
						data-animated-value="true"
						data-min-value="0"
						data-max-value="100"
						data-major-ticks="0,10,20,30,40,50,60,70,80,90,100"
						data-minor-ticks="2"
						data-stroke-ticks="false"
						data-highlights='[
							{ "from": 0, "to": 70, "color": "rgba(0,255,0,.15)" },
							{ "from": 70, "to": 100, "color": "rgba(200, 50, 50, .75)" }
						]'
						data-color-plate="transparent"
						data-color-major-ticks="#f5f5f5"
						data-color-minor-ticks="#ddd"
						data-color-title="#fff"
						data-color-units="#ccc"
						data-color-numbers="#eee"
						data-color-needle-start="rgba(240, 128, 128, 1)"
						data-color-needle-end="rgba(255, 160, 122, .9)"
						data-value-box="true"
						data-animation-rule="bounce"
						data-animation-duration="500"
						data-border-outer-width="3"
						data-border-middle-width="3"
						data-border-inner-width="3"
				></canvas>

				<canvas data-type="radial-gauge"
						data-width="400"
						data-height="400"
						data-units="Air Humidity"
						data-title="false"
						data-min-value="0"
						data-max-value="100"
						data-value="51.01"
						data-animate-on-init="true"
						data-major-ticks="0,10,20,30,40,50,60,70,80,90,100"
						data-minor-ticks="2"
						data-stroke-ticks="true"
						data-highlights='[{"from": 70, "to": 100, "color": "rgba(200, 50, 50, .75)"}]'
						data-color-plate="#222"
						data-color-major-ticks="#f5f5f5"
						data-color-minor-ticks="#ddd"
						data-color-title="#fff"
						data-color-units="#ccc"
						data-color-numbers="#eee"
						data-color-needle-start="rgba(240, 128, 128, 1)"
						data-color-needle-end="rgba(255, 160, 122, .9)"
						data-value-box="true"
						data-font-value="Repetition"
						data-font-numbers="Repetition"
						data-animated-value="true"
						data-borders="false"
						data-border-shadow-width="0"
						data-needle-type="arrow"
						data-needle-width="2"
						data-needle-circle-size="7"
						data-needle-circle-outer="true"
						data-needle-circle-inner="false"
						data-animation-duration="1500"
						data-animation-rule="linear"
						data-ticks-angle="250"
						data-start-angle="55"
						data-color-needle-shadow-down="#333"
						data-value-box-width="45"
				></canvas>

				<canvas data-type="radial-gauge"
						data-units="CO2"
						data-min-value="0"
						data-max-value="1000"
						data-value="420"
						data-width="400"
						data-height="400"
						data-bar-width="10"
						data-bar-shadow="5"
						data-animate-on-init="true"
						data-color-bar-progress="rgba(50,200,50,.75)"
				></canvas>

			</div>
			<div id="apDiv5">
				<canvas data-type="radial-gauge"
					data-width="400"
					data-height="400"
					data-value="4200"
					data-units="Sunshine"
					data-min-value="0"
					data-max-value="10000"
					data-major-ticks="[0,1000,2000,3000,4000,5000,6000,7000,8000,9000,10000]"
					data-minor-ticks="2"
					data-stroke-ticks="true"
					data-highlights='[
								{"from": 0, "to": 5000, "color": "rgba(0,0, 255, .3)"},
								{"from": 5000, "to": 10000, "color": "rgba(255, 0, 0, .3)"}
							]'
					data-ticks-angle="225"
					data-start-angle="67.5"
					data-color-major-ticks="#ddd"
					data-color-minor-ticks="#ddd"
					data-color-title="#eee"
					data-color-units="#ccc"
					data-color-numbers="#eee"
					data-color-plate="#222"
					data-border-shadow-width="0"
					data-borders="true"
					data-needle-type="arrow"
					data-needle-width="2"
					data-needle-circle-size="7"
					data-needle-circle-outer="true"
					data-needle-circle-inner="false"
					data-animation-duration="1500"
					data-animation-rule="linear"
					data-color-border-outer="#333"
					data-color-border-outer-end="#111"
					data-color-border-middle="#222"
					data-color-border-middle-end="#111"
					data-color-border-inner="#111"
					data-color-border-inner-end="#333"
					data-color-needle-shadow-down="#333"
					data-color-needle-circle-outer="#333"
					data-color-needle-circle-outer-end="#111"
					data-color-needle-circle-inner="#111"
					data-color-needle-circle-inner-end="#222"
					data-value-box-border-radius="0"
					data-color-value-box-rect="#222"
					data-color-value-box-rect-end="#333"
					data-font-value="Led"
					data-font-numbers="Led"
					data-font-title="Led"
					data-font-units="Led"
					data-animate-on-init="true"
				></canvas>

				<canvas data-type="radial-gauge"
						data-major-ticks="15, 35, 45, 55, 65, 75"
						data-type="radial-gauge"
						data-title="Soil Temperature"
						data-units="F"
						data-value="48.05"
						data-value-int="0"
						data-value-dec="0"
						data-width="400"
						data-height="400"
						data-min-value="10"
						data-max-value="80"
						data-highlights="false"
						data-animate-on-init="true"
						data-color-stroke-ticks="#f00"
				></canvas>

				<canvas data-type="radial-gauge"
						data-width="400"
						data-height="400"
						data-units="Soil Humidity"
						data-title="false"
						data-min-value="0"
						data-max-value="100"
						data-value="83.84"
						data-animate-on-init="true"
						data-major-ticks="0,10,20,30,40,50,60,70,80,90,100"
						data-minor-ticks="2"
						data-stroke-ticks="true"
						data-highlights='[{"from": 70, "to": 100, "color": "rgba(200, 50, 50, .75)"}]'
						data-color-plate="#222"
						data-color-major-ticks="#f5f5f5"
						data-color-minor-ticks="#ddd"
						data-color-title="#fff"
						data-color-units="#ccc"
						data-color-numbers="#eee"
						data-color-needle-start="rgba(240, 128, 128, 1)"
						data-color-needle-end="rgba(255, 160, 122, .9)"
						data-value-box="true"
						data-font-value="Repetition"
						data-font-numbers="Repetition"
						data-animated-value="true"
						data-borders="false"
						data-border-shadow-width="0"
						data-needle-type="arrow"
						data-needle-width="2"
						data-needle-circle-size="7"
						data-needle-circle-outer="true"
						data-needle-circle-inner="false"
						data-animation-duration="1500"
						data-animation-rule="linear"
						data-ticks-angle="250"
						data-start-angle="55"
						data-color-needle-shadow-down="#333"
						data-value-box-width="45"
				></canvas>

				<canvas data-type="radial-gauge"
						data-units="Air Pressure"
						data-min-value="0"
						data-max-value="2000"
						data-value="992.5"
						data-width="400"
						data-height="400"
						data-bar-width="10"
						data-bar-shadow="5"
						data-animate-on-init="true"
						data-color-bar-progress="rgba(63,191,191,.75)"
				></canvas>
			</div>

			<div id="apDiv2">
                <!--menu-->
                <table>
                    <tr>
                        <td>
                            <div class="fat-nav ">
                                <div class="fat-nav__wrapper ">
                                    <ul>
                                        <li><a href="/logo">首頁-LOGO</a></li>
                                        <li><a href="/map ">首頁-地圖</a></li>
                                        <li><a href="/farm ">首頁(即時資訊)-1</a></li>
                                        <li><a href="/greenhouse ">首頁(即時資訊)-2</a></li>
                                        <li><a href="/berry ">草莓</a></li>
                                        <li><a href="/tea">茶葉機</a></li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
			</div>
			<!--menu_over-->
      	</section>
		<!-- right_over-->
		<script src="{{asset('fat_nav/jquery1.11.2.min.js')}} "></script>
        <script type="text/javascript " src="{{asset('fat_nav/jquery.fatNav.min.js')}} "></script>
		<script type="text/javascript " src="{{asset('fat_nav/main.js')}} "></script>
		<!-- JS, Popper.js, and jQuery -->
		<script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
        <!-- JS, Popper.js, and jQuery -->
		<script src="{{ asset('fancyknob/fancyknob.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/greenhouse.js') }}"></script>

		<script src="{{ asset('canvas-gauges-master/gauge.min.js') }}"></script>


		<script>
			if (!Array.prototype.forEach) {
				Array.prototype.forEach = function(cb) {
					var i = 0, s = this.length;
					for (; i < s; i++) {
						cb && cb(this[i], i, this);
					}
				}
			}
			
			document.fonts && document.fonts.forEach(function(font) {
				font.loaded.then(function() {
					if (font.family.match(/Led/)) {
						document.gauges.forEach(function(gauge) {
							gauge.update();
							gauge.options.renderTo.style.visibility = 'visible';
						});
					}
				});
			});
		</script>

</body>

</html>
