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
		<iframe width="100%" height="1000px" src="https://dashboard-ncyu01-ews.education.wise-paas.com/frame/%E6%BA%AB%E5%AE%A4%E7%94%9C%E6%A4%92%E5%93%81%E8%B3%AA%E7%AE%A1%E7%90%86%E7%9B%A3%E6%8E%A7%E7%B3%BB%E7%B5%B1?orgId=1&language=zh_tw&theme=gray&layout=ss">
			你的瀏覽器不支援 iframe
		</iframe>
        <section style="display: block; margin:80px; width:90%">
			

			<div id="apDiv2">
                <!--menu-->
                <table>
                    <tr>
                        <td>
                            <div class="fat-nav ">
                                <div class="fat-nav__wrapper ">
                                    <ul>
                                        @foreach ($Menu as $item)
                                        <li><a href="{{$item->url}}">{{$item->name}}</a></li>
                                        @endforeach
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
