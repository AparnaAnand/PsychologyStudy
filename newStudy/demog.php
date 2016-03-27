<?php
session_start ();

if(isset($_POST['dem'])) {
$_SESSION['name'] = $_POST['initials'];
$_SESSION['gender'] = $_POST['gender'];
$unamb=array(1,2,3,4);
$amb=array(1,2,3,4);
$_SESSION['unambi']=$unamb;
$_SESSION['ambi']=$amb;
$_SESSION['age'] = $_POST['age'];
		header("location:nfc1.php");
		exit;
	}

?>
<!DOCTYPE html>
<html>
	<head>
		<style>
		#center
		{
			margin-left: auto;
			margin-right: auto;
			width: 20%;
		}
		#error
		{
			color: red;
			font-size: 15px;
			margin-left: auto;
			margin-right: auto;
			width: 9%;
		}
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
			margin-left:20%;
		}
		button
		{
			background-color: #E8E8E8;
			font-family: "Verdana", Sans-serif;
			font-size: 15px;
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
		<script>
		function check()
		{
			var i = document.getElementById("ini");
			var g = document.getElementById("gen");
			var a = document.getElementById("age");
			if(i.value=="" || g.value=="" || a.value=="")
			{
				var e=document.getElementById("error");
				e.innerHTML="Cannot proceed";
				return false;
			}
			return true;
		}
		</script>
	</head>
	<body>
		<form method="post" action="">
			<div>
				<table border="0" id="center">
					<tbody>
						<tr>
							<td><label>ID</label></td>
							<td><input id="ini" type="text" name="initials" size="30"></input></td>
						</tr>
						<tr>
							<td><label>Gender</label>
							</td>
							<td>
								<select name="gender" id="gen">
									<option value="">-Select-</option>			
									<option value="Male">Male</option>
									<option value="Female">Female</option>
								</select>
							</td>
						</tr>
						<tr>
							<td><label>Age</label>
							</td>
							<td><input type="number" name="age" id="age" size="30"></td>
						</tr>
					</tbody>
				</table>
			</div>
			<br>
			<p id="error"></p>
			<button name="dem" onclick="return check();"> Next </button>
		</form>
	</body>
</html>