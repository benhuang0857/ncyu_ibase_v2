<!DOCTYPE html>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>智慧農業戰情中心</title>
    <link rel="stylesheet" href="index.css">
    <!--link-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href='{{asset('fat_nav/Source+Sans+Pro.css')}}' rel='stylesheet' type='text/css'>
    <link href='{{asset('fat_nav/humblegs.css')}}' rel='stylesheet' type='text/css'>
    <link href='{{asset('fat_nav/jquery.fatNav.min.css')}}' rel='stylesheet' type='text/css'>
    <link href='{{asset('fat_nav/main.css')}}' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{asset('fat_nav/reset.css')}}">
    <link rel="stylesheet" href="{{asset('fat_nav/index.css')}}">
    <style type="text/css">
		#apDiv1 {
			position: absolute;
			left: 1271px;
			top: 150px;
			width: 500px;
			height: 298px;
			z-index: 2;
		}
		#apDiv2 {
			position: absolute;
			width: 20px;
			height: 20px;
			z-index: 2;
			left: 1775px;
			top: 31px;
		}
		#apDiv5 {
			position: absolute;
			width: 48%;
			margin: 10px
			/*height: 100%;*/
			z-index: 2;
			left: 0px;
			top: 100px;
			color: rgba(255,255,255,0.9);
			font-family: "微軟正黑體";
			font-size: 60px;
			line-height: 90px;
		}
		#apDiv11 {
			position: absolute;
			width: 48%;
			margin: 10px;
			z-index: 999;
			left: 950px;
			top: 100px;
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
    <div class="cover" id="map" >
		<iframe width="100%" height="1000px" src="https://dashboard-ncyu01-ews.education.wise-paas.com/frame/%E6%BA%AB%E5%AE%A4%E7%94%9C%E6%A4%92%E5%93%81%E8%B3%AA%E7%AE%A1%E7%90%86%E7%9B%A3%E6%8E%A7%E7%B3%BB%E7%B5%B1?orgId=1&language=zh_tw&theme=gray&layout=ss">
			你的瀏覽器不支援 iframe
		</iframe>
        <section>
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
		<script type="text/javascript" src="{{ asset('js/farm.js') }}"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
		<script src="{{ asset('js/jquery.knob.min.js') }}"></script>
        <!-- JS, Popper.js, and jQuery -->
</body>

</html>
