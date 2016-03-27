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
		<form method="post" action="instr2.php">
			<div>	
				<h3>Main Instructions</h3>
				<p>
				In this task you will be asked to make a decision about a photograph. We have selected a few photographs by some artists and you are required to determine the title/theme of this particular photo.
				</p>
				<ul>
				<li>You will be presented with several clues representing various categories that would help you determine the correct theme/title of the photo. </li>
				<br>
				<li>Some of these clues are useful while some of them are not so useful. The useful clues will be marked with an asterisk (*) on the right side of the box. Each category is represented by a distinct colour.</li>
				<br>
				<li>You are allowed to open any box and read the clue. You need to close the current clue box to read the next one. There is no particular order to open clue boxes and you can open them how many ever times you want. Please note that once you open a clue box, the box will be marked with a tick mark.</li>
				<br>
				<li>You will have a total time of 3 minutes to make an informed decision.</li>
				<br>
				<li>Once you know you have made your decision, please click on the button below which reads 'I HAVE NOW MADE MY DECISION’ which will take you to the next page.</li>
				<br>
				<li>If you fail to click the button within the time limit, the page will automatically be directed to the next page.</li>
				</ul>
			</div>
			<br>
			<button type="submit"> Next </button>
		</form>
	</body>
</html>