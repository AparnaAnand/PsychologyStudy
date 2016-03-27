<!DOCTYPE html>
<?php
session_start ();

	if(isset($_POST['rrs'])) {
		$_SESSION['sm'] = array_merge($_SESSION['sm'], $_POST['sm']);
		if($_SESSION['timelimit']==0)
		{
			header("location:instr_ntl.php");
		}
		else
		{
			header("location:instr.php");
		}		
		exit;
	}

?>

<html>
	<head>
		<style>
		#small
		{
			font-size: 14px;
		}
		.center
		{
			margin-left: 47%;
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
			width: 96.8%;
			padding: 25px;
			margin-left: auto;
			margin-right: auto;
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
			var r = document.getElementsByTagName("input");	
			for (var i=0; i < r.length; i+=4)
			{
				var flag=0;
				for(j=0;j<4;j++)
				{
					if(r[i+j].checked==true)
					{
						flag=1;
						break;
					}
				}
				if(flag==0)
				{
					var e=document.getElementById("error");
					e.innerHTML="Please fill all answers";
					return false;
				}
			}
			return true;
		}
		</script>
	</head>
	<body>
		<form method="post" action="">
			<div>
				<p>People think and do many different things when they feel depressed or sad. Please read each of the 
					items below and indicate whether you almost never, sometimes, often, or almost always think or do 
					each one when you feel down, sad, or depressed. Please indicate what you generally do, not what 
					you think you should do.</p>
				<table border="0" id="small" style="width:100%" rules="rows">
					<thead>
						<tr>
							<th></th>
							<th>Almost Never</th>
							<th>Sometimes</th>
							<th>Often</th>
							<th>Almost Always</th>
						</tr>
					</thead>
					<tbody>
						<tr></tr>
						<tr></tr>
						<tr>
							<td>1. Think about how alone you feel.</td>
							<td><input class="center" type="radio" name="sm[rrs1]" value="1"/></td>
							<td><input class="center" type="radio" name="sm[rrs1]" value="2"/></td>
							<td><input class="center" type="radio" name="sm[rrs1]" value="3"/></td>
							<td><input class="center" type="radio" name="sm[rrs1]" value="4"/></td>
						</tr>
						<tr></tr>
						<tr></tr>
						<tr>
							<td>2. Think "I won't be able to do my job if I don't snap out of this".</td>
							<td><input class="center" type="radio" name="sm[rrs2]" value="1"/></td>
							<td><input class="center" type="radio" name="sm[rrs2]" value="2"/></td>
							<td><input class="center" type="radio" name="sm[rrs2]" value="3"/></td>
							<td><input class="center" type="radio" name="sm[rrs2]" value="4"/></td>
						</tr>
						<tr></tr>
						<tr></tr>
						<tr>
							<td>3. Think about your feelings of fatigue and achiness.</td>
							<td><input class="center" type="radio" name="sm[rrs3]" value="1"/></td>
							<td><input class="center" type="radio" name="sm[rrs3]" value="2"/></td>
							<td><input class="center" type="radio" name="sm[rrs3]" value="3"/></td>
							<td><input class="center" type="radio" name="sm[rrs3]" value="4"/></td>
						</tr>
						<tr></tr>
						<tr></tr>
						<tr>
							<td>4. Think about how hard it is to concentrate.</td>
							<td><input class="center" type="radio" name="sm[rrs4]" value="1"/></td>
							<td><input class="center" type="radio" name="sm[rrs4]" value="2"/></td>
							<td><input class="center" type="radio" name="sm[rrs4]" value="3"/></td>
							<td><input class="center" type="radio" name="sm[rrs4]" value="4"/></td>
						</tr>
						<tr></tr>
						<tr></tr>
						<tr>
							<td>5. Think "What am I doing to deserve this?".</td>
							<td><input class="center" type="radio" name="sm[rrs5]" value="1"/></td>
							<td><input class="center" type="radio" name="sm[rrs5]" value="2"/></td>
							<td><input class="center" type="radio" name="sm[rrs5]" value="3"/></td>
							<td><input class="center" type="radio" name="sm[rrs5]" value="4"/></td>
						</tr>
						<tr></tr>
						<tr></tr>
						<tr>
							<td>6. Think about how passive and unmotivated you feel.</td>
							<td><input class="center" type="radio" name="sm[rrs6]" value="1"/></td>
							<td><input class="center" type="radio" name="sm[rrs6]" value="2"/></td>
							<td><input class="center" type="radio" name="sm[rrs6]" value="3"/></td>
							<td><input class="center" type="radio" name="sm[rrs6]" value="4"/></td>
						</tr>
						<tr></tr>
						<tr></tr>
						<tr>
							<td>7. Analyze recent events to try to understand why you are depressed.</td>
							<td><input class="center" type="radio" name="sm[rrs7]" value="1"/></td>
							<td><input class="center" type="radio" name="sm[rrs7]" value="2"/></td>
							<td><input class="center" type="radio" name="sm[rrs7]" value="3"/></td>
							<td><input class="center" type="radio" name="sm[rrs7]" value="4"/></td>
						</tr>
						<tr></tr>
						<tr></tr>
						<tr>
							<td>8. Think about how you don't seem to feel anything anymore.</td>
							<td><input class="center" type="radio" name="sm[rrs8]" value="1"/></td>
							<td><input class="center" type="radio" name="sm[rrs8]" value="2"/></td>
							<td><input class="center" type="radio" name="sm[rrs8]" value="3"/></td>
							<td><input class="center" type="radio" name="sm[rrs8]" value="4"/></td>
						</tr>
						<tr></tr>
						<tr></tr>
						<tr>
							<td>9. Think "Why can't I get going?".</td>
							<td><input class="center" type="radio" name="sm[rrs9]" value="1"/></td>
							<td><input class="center" type="radio" name="sm[rrs9]" value="2"/></td>
							<td><input class="center" type="radio" name="sm[rrs9]" value="3"/></td>
							<td><input class="center" type="radio" name="sm[rrs9]" value="4"/></td>
						</tr>
						<tr></tr>
						<tr></tr>
						<tr>
							<td>10. Think "Why do I always react this way?".</td>
							<td><input class="center" type="radio" name="sm[rrs10]" value="1"/></td>
							<td><input class="center" type="radio" name="sm[rrs10]" value="2"/></td>
							<td><input class="center" type="radio" name="sm[rrs10]" value="3"/></td>
							<td><input class="center" type="radio" name="sm[rrs10]" value="4"/></td>
						</tr>
						<tr></tr>
						<tr></tr>
						<tr>
							<td>11. Go away by yourself and think about why you feel this way.</td>
							<td><input class="center" type="radio" name="sm[rrs11]" value="1"/></td>
							<td><input class="center" type="radio" name="sm[rrs11]" value="2"/></td>
							<td><input class="center" type="radio" name="sm[rrs11]" value="3"/></td>
							<td><input class="center" type="radio" name="sm[rrs11]" value="4"/></td>
						</tr>
						<tr></tr>
						<tr></tr>
						<tr>
							<td>12. Write down what you are thinking about and analyze it.</td>
							<td><input class="center" type="radio" name="sm[rrs12]" value="1"/></td>
							<td><input class="center" type="radio" name="sm[rrs12]" value="2"/></td>
							<td><input class="center" type="radio" name="sm[rrs12]" value="3"/></td>
							<td><input class="center" type="radio" name="sm[rrs12]" value="4"/></td>
						</tr>
						<tr></tr>
						<tr></tr>
						<tr>
							<td>13. Think about a recent situation, wishing it had gone better.</td>
							<td><input class="center" type="radio" name="sm[rrs13]" value="1"/></td>
							<td><input class="center" type="radio" name="sm[rrs13]" value="2"/></td>
							<td><input class="center" type="radio" name="sm[rrs13]" value="3"/></td>
							<td><input class="center" type="radio" name="sm[rrs13]" value="4"/></td>
						</tr>
						<tr></tr>
						<tr></tr>
						<tr>
							<td>14. Think "I won't be able to concentrate if I keep feeling this way".</td>
							<td><input class="center" type="radio" name="sm[rrs14]" value="1"/></td>
							<td><input class="center" type="radio" name="sm[rrs14]" value="2"/></td>
							<td><input class="center" type="radio" name="sm[rrs14]" value="3"/></td>
							<td><input class="center" type="radio" name="sm[rrs14]" value="4"/></td>
						</tr>
						<tr></tr>
						<tr></tr>
						<tr>
							<td>15. Think "Why do I have problems other people don't have?".</td>
							<td><input class="center" type="radio" name="sm[rrs15]" value="1"/></td>
							<td><input class="center" type="radio" name="sm[rrs15]" value="2"/></td>
							<td><input class="center" type="radio" name="sm[rrs15]" value="3"/></td>
							<td><input class="center" type="radio" name="sm[rrs15]" value="4"/></td>
						</tr>
						<tr></tr>
						<tr></tr>
						<tr>
							<td>16. Think "Why can't I handle things better?".</td>
							<td><input class="center" type="radio" name="sm[rrs16]" value="1"/></td>
							<td><input class="center" type="radio" name="sm[rrs16]" value="2"/></td>
							<td><input class="center" type="radio" name="sm[rrs16]" value="3"/></td>
							<td><input class="center" type="radio" name="sm[rrs16]" value="4"/></td>
						</tr>
						<tr></tr>
						<tr></tr>
						<tr>
							<td>17. Think about how sad you feel.</td>
							<td><input class="center" type="radio" name="sm[rrs17]" value="1"/></td>
							<td><input class="center" type="radio" name="sm[rrs17]" value="2"/></td>
							<td><input class="center" type="radio" name="sm[rrs17]" value="3"/></td>
							<td><input class="center" type="radio" name="sm[rrs17]" value="4"/></td>
						</tr>
						<tr></tr>
						<tr></tr>
						<tr>
							<td>18. Think about all your shortcomings, failings, faults, mistakes.</td>
							<td><input class="center" type="radio" name="sm[rrs18]" value="1"/></td>
							<td><input class="center" type="radio" name="sm[rrs18]" value="2"/></td>
							<td><input class="center" type="radio" name="sm[rrs18]" value="3"/></td>
							<td><input class="center" type="radio" name="sm[rrs18]" value="4"/></td>
						</tr>
						<tr></tr>
						<tr></tr>
						<tr>
							<td>19. Think about how you don't feel up to doing anything.</td>
							<td><input class="center" type="radio" name="sm[rrs19]" value="1"/></td>
							<td><input class="center" type="radio" name="sm[rrs19]" value="2"/></td>
							<td><input class="center" type="radio" name="sm[rrs19]" value="3"/></td>
							<td><input class="center" type="radio" name="sm[rrs19]" value="4"/></td>
						</tr>
						<tr></tr>
						<tr></tr>
						<tr>
							<td>20. Analyze your personality to try to understand why you are depressed.</td>
							<td><input class="center" type="radio" name="sm[rrs20]" value="1"/></td>
							<td><input class="center" type="radio" name="sm[rrs20]" value="2"/></td>
							<td><input class="center" type="radio" name="sm[rrs20]" value="3"/></td>
							<td><input class="center" type="radio" name="sm[rrs20]" value="4"/></td>
						</tr>
						<tr></tr>
						<tr></tr>
						<tr>
							<td>21. Go someplace alone to think about your feelings.</td>
							<td><input class="center" type="radio" name="sm[rrs21]" value="1"/></td>
							<td><input class="center" type="radio" name="sm[rrs21]" value="2"/></td>
							<td><input class="center" type="radio" name="sm[rrs21]" value="3"/></td>
							<td><input class="center" type="radio" name="sm[rrs21]" value="4"/></td>
						</tr>
						<tr></tr>
						<tr></tr>
						<tr>
							<td>22. Think about how angry you are with yourself.</td>
							<td><input class="center" type="radio" name="sm[rrs22]" value="1"/></td>
							<td><input class="center" type="radio" name="sm[rrs22]" value="2"/></td>
							<td><input class="center" type="radio" name="sm[rrs22]" value="3"/></td>
							<td><input class="center" type="radio" name="sm[rrs22]" value="4"/></td>
						</tr>
					</tbody>
				</table>
			</div>
			<button name="rrs" onclick="return check();"> Next </button>
			<p id="error"></p>
		</form>
	</body>
</html>