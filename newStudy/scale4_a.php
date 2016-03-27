<?php
session_start ();

if(isset($_POST['scale'])) {
$_SESSION['scale8'] = $_POST['scale8'];
		header("location:post_task.php");
		exit;
	}

?>
<!DOCTYPE html>
<html>
	<head>
		<style>
		body
		{
			background-color: #E8E8E8;
			font-family: "Verdana", Sans-serif;
		}
		div
		{
			background-color: #E8E8E8;
			width: 60%;
			padding: 25px;
			margin-left:20% ;
			font-size: 18px;
		}
		button
		{
			background-color: #E8E8E8;
			font-family: "Verdana", Sans-serif;
			font-size: 18px;
		    margin-left: 45%;
			height: 50px;
			width: 10%;
			border-style: none;
			border-radius:4px;
		}
		button:hover
		{
			background-color: orange;
			transition-duration:0.3s;
		}
		</style>
	</head>
	<body>
		<form method="post" action="">
			<div>				
				<p>On a scale of 1 (extremely uncertain)  to 7 (extremely certain) (left to right) how certain are you of this decision you made?</p>
				<input type="range" name="scale8" min="1" max="7" style="width:60%; margin-left:20%" step="1" list="steplist">
				<datalist id="steplist">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					<option>6</option>
					<option>7</option>
				</datalist>
			</div>
			<br>
			<button name="scale"> Next </button>
		</form>
	</body>
</html>