<?php
session_start ();

$chosen= $_GET['chosen'];

	if(isset($_POST['next'])) {
		$_SESSION['TotTime5']=$_POST['TotTime'];
		$_SESSION['answer5'] = $_POST['answer'];
		if (($key = array_search($chosen, $_SESSION['ambi'])) !== false)
		{
			array_splice($_SESSION['ambi'], $key, 1);
		}
$x = rand(0, 2);
$chosen=$_SESSION['ambi'][$x];
if($chosen==1)
{
	$name="A1";
}
else if ($chosen==2)
{
	$name="A2";
}
else if ($chosen==3)
{
	$name="A3";
}
else
{
	$name="A4";
}

$_SESSION['picked']=$chosen;
$_SESSION['Task6']=$name;
		header("location:scale1_a.php");
		exit;
	}

?>
<!DOCTYPE html>
<html>
	<head>
		<style>
		#error
		{
			color: red;
			font-size: 15px;
			margin-left: auto;
			margin-right: auto;
			width: 20%;
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
			margin-left:20% ;
			letter-spacing: 1.5px;
			font-size: 18px;
		}
		button
		{
			background-color: orange;
			font-family: "Verdana", Sans-serif;
			font-size: 15px;
			margin-left: 45%;
			height: 50px;
			width: 10%;
			border-style: none;
			border-radius:4px;
		}
		</style>
		<script>
		var startTime;
		var endTime;
		function create()
		{
			startTime = new Date();
			var chosen= "<?php echo $chosen; ?>";	
			var r = document.getElementsByName("answer");
			if(chosen==1)
			{
				r[0].nextSibling.data='Candy-Cigarette – Children maturing too fast.';
				r[1].nextSibling.data='All alone – Children being left alone.';
				r[2].nextSibling.data='Sweet-Cigarette – Children being selfish.';
			}
			else if (chosen==2)
			{
				r[0].nextSibling.data='Dust storm – Anticipation before monsoon.';
				r[1].nextSibling.data='Dusk storm – Lives of Indian women.';
				r[2].nextSibling.data='A stormy evening - Fighting the draught.';
			}
			else if (chosen==3)
			{
				r[0].nextSibling.data='Behind the Gare- The coincidental moment.';
				r[1].nextSibling.data='Solidarity – The prominence of the moon in the sky.';
				r[2].nextSibling.data='Moon at night – The layers in photograph depict the same in the human psyche.';
			}
			else
			{
				r[0].nextSibling.data='An oblique glance- Female objectification.';
				r[1].nextSibling.data='The feminine essence – The beauty of a female body.';
				r[2].nextSibling.data='What he sees – The biases shown amongst men.';
			}
		}
		function setvar()
		{
			endTime = new Date();
			timeDiff = endTime - startTime;
			timeDiff /= 1000;
			sec = Math.round(timeDiff % 60);
			var elem=document.getElementById('TotTime');
			elem.value=sec;
		}
		function check()
		{
			var r = document.getElementsByTagName("input");
		    for (var i=0; i < r.length; i++)
			{
				if(r[i].checked==true)
				{
					setvar();
					return true;
				}
			}
			var e=document.getElementById("error");
			e.innerHTML="Please choose an answer before you can proceed.";
			return false;
		}
		</script>
	</head>
	<body onload="create();">
		<form method="post" action="">
			<input type="hidden" id="TotTime" name="TotTime">
			<div>				
				<p>Please try and select the title and interpretation that best describes the photo from the following options.</p>
				<p>OPTIONS:</p>
				<ul style="list-style-type:none">
					<li style="background-color:#66CCFF;"><input type="radio" name="answer" value="1">Option 1</input></li>
					<br>
					<li style="background-color:#66CCFF;"><input type="radio" name="answer" value="2">Option 2</input></li>
					<br>
					<li style="background-color:#66CCFF;"><input type="radio" name="answer" value="3">Option 3</input></li>
				</ul>
			</div>
			<br>
			<p id="error"></p>
			<button class="next" type="submit" name="next" onclick="return check();"> <b>NEXT</b> </button>
		</form>
	</body>
</html>