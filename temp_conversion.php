<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300&display=swap" rel="stylesheet">
	<style type="">
		*{margin: 0;padding: 0;box-sizing: border-box;font-family: 'Mulish', sans-serif;}
		h1{text-align: center;line-height: 20vh;}
		.main-div{width: 100%;
			height: 80vh;
			display: flex;
			justify-content: space-around;
			align-items: center;
		}
		h1{
			color: #636cff;
		}
		.left-side img{
			max-width: 400px;
			height: auto;
		}
		.right-side{
			width: 400px;
			height: 300px;
			background-color: #dfe6e9;
			border-radius: 15px;
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
		}
		.input1{
			width: 250px;
			height: 40px;
			padding: 5px;
			outline: none;
			border-radius: 1px solid grey;
			border-radius: 5px;
		}
		.selection{
			width: 100%;
			margin: 20px 0;
			text-align: center;
		}
		.btn-div{
			display: flex;
			justify-content: center;
			align-items: center;
		}
		.btn{
			padding: 10px 16px;
			border-radius: 5px;
			outline: none;
			border: none;
			background-color: #6c63ff;
			color: white;
			font-size: 0.9rem;	}
		p{
			margin: 20px 0 0 0;
		}
	</style>
</head>
<body>

	<header>
		<h1>Temperature Conversion</h1>
		<div class="main-div">
			<div class="left-side">
				<img src="images/bg1.jpg">
			</div>
			<div class="right-side">
				<form method="POST">
					<input type="number" name="num" placeholder="Enter your number" class="input1">
					<div class="selection">
						<label>Celc</label>
						<input type="radio" name="units" value="cel" checked>
						<label>Fahren</label>
						<input type="radio" name="units" value="fah">
					</div>
					<div class="btn-div">
						<input type="submit" name="submit" value="Convert Now" class="btn">
					</div>
					
				</form>
				<div>
					<p>
						<?php 
							if(isset($_POST['submit'])){
								$num = $_POST['num'];
								$temp = $_POST['units'];
								if($temp == "cel"){
									$result = ($num*9/5) +32;
									echo "Fahrenheit of {$num}degree Celsius is {$result}";
								}
								else{
									$result = ($num-32)*5/9;
									echo "Celsius of {$num}degree Fahrenheit is {$result}";
								}
							}

						 ?>
					</p>
				</div>
			</div>
		</div>
	</header>

</body>
</html>