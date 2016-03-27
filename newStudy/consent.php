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
  		  margin-left:20% ;
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
			var flag=0;
			var r = document.getElementsByTagName("input");
		    for (var i=0; i < r.length; i++)
			{
				if(r[i].value=="0" && r[i].checked==true)
				{
					var e=document.getElementById("error");
					e.innerHTML="Cannot proceed";
					return false;
				}
				if(r[i].checked==true)
				{
					flag=1;
				}
			}
			if(flag==0)
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
		<form method="post" action="demog.php">
			<div>				
				<p>I agree to participate in this study by acknowledging that I understand and accept all the conditions mentioned previously.</p>
				<ul style="list-style-type:none">
					<li><input type="radio" name="agree" value="1"/><span>Yes</span></li>
					<li><input type="radio" name="agree" value="0"/><span>No</span></li>
				</ul>
			</div>
			<br>
			<p id="error"></p>
			<button onclick="return check();"> Next </button>
		</form>
	</body>
</html>