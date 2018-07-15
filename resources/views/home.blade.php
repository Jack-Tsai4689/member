<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>美食地圖</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<style>
		html, body {
			font-family: "微軟正黑體";
		}
		header {
			height: 60px;
			font-size: 30px;
			padding-left: 25px;
			line-height: 60px;
			background-color: #68D5FF;
			color: white;
			font-weight: bold;
		}
		#all {
			margin: 0 auto;
			margin-top: 100px;
		}
		#top {
			/*margin-top: 100px;*/
			text-align: center;
		}
		#top select.form-control {
			width: auto;
			margin: 0 auto;
			margin-bottom: 10px;
			display: inline-block;
		}
		#keyword {
			float: left;
			position: relative;
			display: inline-block;
		}
		#top_search {
			margin: 0 auto;
			width: 80%;
			text-align: center;
			display: flex;
		}
		#top_search > .btn {
			float: left;
			position: relative;
		}
		#main {
			width: 80%;
			margin: 0 auto;
		}
		.shop_street {
			margin: 10px auto;
		}
		.shop_top {
			padding: 5px 0;
			font-size: 20px;
		}
		.shop_rows {
			margin: 0 auto;
			width: 100%;
		}
		.shop_each {
			width: 100%;
			display: inline-block;
			margin-bottom: 10px;
		}
		.shop_each:last-child {
			margin: 0;
		}
		.shop_pic {
			height: 200px;
			width: 100%;
			text-align: center;
			background-color: #454545;
		}
		.shop_pic > img {
			max-height: 100%;
			max-width: 100%;
		}
		@media screen and (min-width: 1024px) {
			#all {
				max-width: 1024px;
				margin: 0 auto;
				margin-top: 100px;
			}
			#top {
				margin: 0 auto;
				width: 100%;
				display: flex;
				margin-bottom: 60px;
			}
			#top select.form-control {
				width: auto;
				margin-right: 10px;
				margin-bottom: 0;
			}
			#top > .form-control {
				display: inline-block;
			}
			#keyword {
				width: 100%;
				margin:0;
			}
			#main {
				width: 100%;
				margin: 0 auto;
			}
			.shop_each {
				width: 300px;
				margin-right: 62px;
			}
		}
	</style>
</head>
<body>
<header>
	Food
</header>
<div id="all">
	<div id="top" class="form-group">
		<div>
			<select class="form-control" name="" id="">
				<option value="">縣市</option>
			</select>
			<select class="form-control" name="" id="">
				<option value="">類型</option>
			</select>
		</div>
		<div id="top_search">
			<input type="text" id="keyword" class="form-control" placeholder="吃什麼">
			<input type="button" class="btn btn-primary" value="找餐廳">
		</div>
	</div>
	<div id="main">
		<div class="shop_street">
			<div class="shop_top">北部 熱門點閱</div>
			<div class="shop_rows">
				<div class="shop_each">
					<div class="shop_pic"><img src="{{URL::asset('image/photo0.jpg')}}" alt=""></div>
					<div class="shop_name">餐廳名稱</div>
				</div><div class="shop_each">
					<div class="shop_pic"><img src="{{URL::asset('image/photo1.jpg')}}" alt=""></div>
					<div class="shop_name">餐廳名稱</div>
				</div><div class="shop_each">
					<div class="shop_pic"><img src="{{URL::asset('image/photo0.jpg')}}" alt=""></div>
					<div class="shop_name">餐廳名稱</div>
				</div>
			</div>
		</div>
		<div class="shop_street">
			<div class="shop_top">中部 熱門點閱</div>
			<div class="shop_rows">
				<div class="shop_each">
					<div class="shop_pic"><img src="{{URL::asset('image/photo0.jpg')}}" alt=""></div>
					<div class="shop_name">餐廳名稱</div>
				</div><div class="shop_each">
					<div class="shop_pic"><img src="{{URL::asset('image/photo0.jpg')}}" alt=""></div>
					<div class="shop_name">餐廳名稱</div>
				</div><div class="shop_each">
					<div class="shop_pic"><img src="{{URL::asset('image/photo0.jpg')}}" alt=""></div>
					<div class="shop_name">餐廳名稱</div>
				</div>
			</div>
		</div>
		<div class="shop_street">
			<div class="shop_top">南部 熱門點閱</div>
			<div class="shop_rows">
				<div class="shop_each">
					<div class="shop_pic"><img src="{{URL::asset('image/photo0.jpg')}}" alt=""></div>
					<div class="shop_name">餐廳名稱</div>
				</div><div class="shop_each">
					<div class="shop_pic"><img src="{{URL::asset('image/photo0.jpg')}}" alt=""></div>
					<div class="shop_name">餐廳名稱</div>
				</div><div class="shop_each">
					<div class="shop_pic"><img src="{{URL::asset('image/photo0.jpg')}}" alt=""></div>
					<div class="shop_name">餐廳名稱</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>