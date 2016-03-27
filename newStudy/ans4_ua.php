<?php
session_start ();

$chosen= $_GET['chosen'];

	if(isset($_POST['next'])) {
		$_SESSION['TotTime4']=$_POST['TotTime'];
		$_SESSION['answer4'] = $_POST['answer'];
		if (($key = array_search($chosen, $_SESSION['unambi'])) !== false)
		{
			array_splice($_SESSION['unambi'], $key, 1);
		}
$x = rand(0, 3);
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
$_SESSION['Task5']=$name;
		header("location:scale4_ua.php");
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
				r[0].nextSibling.data='The perfect cocktail– The mix of order and fun.';
				r[1].nextSibling.data='The perfect strategy – The importance of structure in life.';
				r[2].nextSibling.data='The perfect game – The significance of peers in one’s social structure.';
			}
			else if (chosen==2)
			{
				r[0].nextSibling.data='A Reflective stride – The interplay of the water’s reflection and the man’s own contemplative state.';
				r[1].nextSibling.data='A spring moment – Enjoying the sun and being alone.';
				r[2].nextSibling.data='A walk in the sun – Enjoying the great spring weather.';
			}
			else if (chosen==3)
			{
				r[0].nextSibling.data='Having ‘Duende’: Soulful freedom.';
				r[1].nextSibling.data='Lady in Red: The Gypsy lifestyle.';
				r[2].nextSibling.data='Summertime: Fun and Frolic in summer.';
			}
			else
			{
				r[0].nextSibling.data='A shot of sunshine- Brief summer moments.';
				r[1].nextSibling.data='Coffee and conversation– A typical Polish summer.';
				r[2].nextSibling.data='Coffee and sunshine – The rarity seen in Polish summer.';
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