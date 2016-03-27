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
		<form method="get" action="../newStudy/consent.php">
			<div>				
				<p>Hello and welcome to the experiment.</p>
				<p>Thank you for your interest in participating in this study. The experiment involves studying individual differences in thinking styles and its influence on decision making.</p>
				<ul style="list-style-type:circle">
					<li>This study comprises 3 parts. The first part consists of filling out a few questionnaires. The second part is the main decision making task and the last part is another questionnaire. The whole task in total should take about 30-40 minutes approximately.</li>
					<li>Please note that you are required to finish this part in one sitting, so try taking as few breaks as possible.</li>
					<li>All data will be stored and used anonymously only for scientific purposes. At the end of the study you will be presented with additional information and feedback about the purpose of the study.</li>
				</ul>
				<p>If you wish to know more about the experiment or have any questions please contact:</p>
				<p>Dr. Sindhuja Sankaran (sindhuja.sankaran@uj.edu.pl)</p>
				<p>Please click 'next' to begin the experiment.</p>
			</div>
			<br>
			<button onclick=""> Next </button>
		</form>
	</body>
</html>