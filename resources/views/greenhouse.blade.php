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
			z-index: 2;
			color: rgba(255,255,255,0.9);
			font-family: "微軟正黑體";
			font-size: 60px;
			line-height: 90px;
		}
		#apDiv11 {
			/*position: absolute;*/
			width: 100%;
			margin: auto;
			z-index: 999;
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

<body style="background: black">
    
    <section class="bg">
    <div class="cover" id="map" >
        <section>
			<div id="apDiv11">
				<input class="fancyknob" type="range" id="voltage" min="0" max="100" value="{{$greenhouse->voltage}}">
				<input class="fancyknob" type="range" id="air_temperature" min="0" max="100" value="{{$greenhouse->air_temperature}}">
				<input class="fancyknob" type="range" id="air_humidity" min="0" max="100" value="{{$greenhouse->air_humidity}}">
				<input class="fancyknob" type="range" id="air_pressure" min="0" max="100" value="{{$greenhouse->air_pressure}}">
			</div>
			<div id="apDiv5">
				<input class="fancyknob" type="range" id="co2" min="0" max="100" value="{{$greenhouse->co2}}">
				<input class="fancyknob" type="range" id="sunshine" min="0" max="100" value="{{$greenhouse->sunshine}}">
				<input class="fancyknob" type="range" id="soil_temperature" min="0" max="100" value="{{$greenhouse->soil_temperature}}">
				<input class="fancyknob" type="range" id="soil_humidity" min="0" max="100" value="{{$greenhouse->soil_humidity}}">
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
</body>

</html>
