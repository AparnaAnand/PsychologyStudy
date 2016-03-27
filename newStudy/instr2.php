<?php
session_start ();

$x = rand(0, 3);
$chosen=$_SESSION['unambi'][$x];
if($chosen==1)
{
	$name="UA1";
}
else if ($chosen==2)
{
	$name="UA2";
}
else if ($chosen==3)
{
	$name="UA3";
}
else
{
	$name="UA4";
}

$_SESSION['picked']=$chosen;
$_SESSION['Task1']=$name;
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
			letter-spacing: 0.5px;
			font-size: 17px;
		}
		button
		{
			background-color: #E8E8E8;
			font-family: "Verdana", Sans-serif;
			font-size: 18px;
			height: 50px;
			width: 10%;
			border-style: none;
			border-radius:4px;
		}
#container{
    text-align: center;
}
		button:hover
		{
			background-color: orange;
			transition-duration:0.3s;
		}
		</style>
	</head>
	<body>
		<form method="post" action="task1_ua.php">
			<div>				
				<p>You will now begin the main task.</p>
				</br>
				<p>
				*CAUTION:*
				</p>
				<ul>
				<li>DO NOT use the <i>refresh, next or back</i> buttons on the <ins>browser</ins> as it will take you back to the beginning of the task.</li>
				<li>Please use the buttons/controls ONLY embedded in the task and avoid the browser buttons.</li>
				<li>If you wish to read the instructions again please click the BACK button seen below.</li>
				</ul>
			</div>
			<br>
<div id="container">
			<button id="leftside" type="submit" formaction="open_instr.php"> Back </button><button id="rightside" type="submit"> Next </button>
			</div>
		</form>
	</body>
</html>