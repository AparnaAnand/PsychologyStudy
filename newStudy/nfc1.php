<!DOCTYPE html>
<?php
session_start ();

	if(isset($_POST['nfc'])) {
		$_SESSION['sm'] = $_POST['sm'];
		header("location:nfc2.php");
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
			for (var i=0; i < r.length; i+=6)
			{
				var flag=0;
				for(j=0;j<6;j++)
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
				<p>Please read each of the following statements and decide how much you agree with each according to your beliefs and experiences.</p>
				<table border="0" id="small" rules="rows">
					<thead>
						<tr>
							<th></th>
							<th>Strongly Disagree</th>
							<th>Moderately Disagree</th>
							<th>Slightly Disagree</th>
							<th>Slightly Agree</th>
							<th>Moderately Agree</th>
							<th>Strongly Agree</th>
						</tr>
					</thead>
					<tbody>
						<tr></tr>
						<tr></tr>
						<tr>
							<td>1. I think that having clear rules and order at work is essential for success.</td>
							<td><input class="center" type="radio" name="sm[nfc1]" value="1"/></td>
							<td><input class="center" type="radio" name="sm[nfc1]" value="2"/></td>
							<td><input class="center" type="radio" name="sm[nfc1]" value="3"/></td>
							<td><input class="center" type="radio" name="sm[nfc1]" value="4"/></td>
							<td><input class="center" type="radio" name="sm[nfc1]" value="5"/></td>
							<td><input class="center" type="radio" name="sm[nfc1]" value="6"/></td>
						</tr>
						<tr></tr>
						<tr></tr>
						<tr>
							<td>2. Even after I've made up my mind about something, I am always eager to consider a different opinion.</td>
							<td><input class="center" type="radio" name="sm[nfc2]" value="1"/></td>
							<td><input class="center" type="radio" name="sm[nfc2]" value="2"/></td>
							<td><input class="center" type="radio" name="sm[nfc2]" value="3"/></td>
							<td><input class="center" type="radio" name="sm[nfc2]" value="4"/></td>
							<td><input class="center" type="radio" name="sm[nfc2]" value="5"/></td>
							<td><input class="center" type="radio" name="sm[nfc2]" value="6"/></td>
						</tr>
						<tr></tr>
						<tr></tr>
						<tr>
							<td>3. I don't like situations that are uncertain.</td>
							<td><input class="center" type="radio" name="sm[nfc3]" value="1"/></td>
							<td><input class="center" type="radio" name="sm[nfc3]" value="2"/></td>
							<td><input class="center" type="radio" name="sm[nfc3]" value="3"/></td>
							<td><input class="center" type="radio" name="sm[nfc3]" value="4"/></td>
							<td><input class="center" type="radio" name="sm[nfc3]" value="5"/></td>
							<td><input class="center" type="radio" name="sm[nfc3]" value="6"/></td>
						</tr>
						<tr></tr>
						<tr></tr>
						<tr>
							<td>4. I dislike questions which could be answered in many different ways.</td>
							<td><input class="center" type="radio" name="sm[nfc4]" value="1"/></td>
							<td><input class="center" type="radio" name="sm[nfc4]" value="2"/></td>
							<td><input class="center" type="radio" name="sm[nfc4]" value="3"/></td>
							<td><input class="center" type="radio" name="sm[nfc4]" value="4"/></td>
							<td><input class="center" type="radio" name="sm[nfc4]" value="5"/></td>
							<td><input class="center" type="radio" name="sm[nfc4]" value="6"/></td>
						</tr>
						<tr></tr>
						<tr></tr>
						<tr>
							<td>5. I like to have friends who are unpredictable.</td>
							<td><input class="center" type="radio" name="sm[nfc5]" value="1"/></td>
							<td><input class="center" type="radio" name="sm[nfc5]" value="2"/></td>
							<td><input class="center" type="radio" name="sm[nfc5]" value="3"/></td>
							<td><input class="center" type="radio" name="sm[nfc5]" value="4"/></td>
							<td><input class="center" type="radio" name="sm[nfc5]" value="5"/></td>
							<td><input class="center" type="radio" name="sm[nfc5]" value="6"/></td>
						</tr>
						<tr></tr>
						<tr></tr>
						<tr>
							<td>6. I find that a well ordered life with regular hours suits my temperament.</td>
							<td><input class="center" type="radio" name="sm[nfc6]" value="1"/></td>
							<td><input class="center" type="radio" name="sm[nfc6]" value="2"/></td>
							<td><input class="center" type="radio" name="sm[nfc6]" value="3"/></td>
							<td><input class="center" type="radio" name="sm[nfc6]" value="4"/></td>
							<td><input class="center" type="radio" name="sm[nfc6]" value="5"/></td>
							<td><input class="center" type="radio" name="sm[nfc6]" value="6"/></td>
						</tr>
						<tr></tr>
						<tr></tr>
						<tr>
							<td>7. When dining out, I like to go to places where I have been before so that I know what to expect.</td>
							<td><input class="center" type="radio" name="sm[nfc7]" value="1"/></td>
							<td><input class="center" type="radio" name="sm[nfc7]" value="2"/></td>
							<td><input class="center" type="radio" name="sm[nfc7]" value="3"/></td>
							<td><input class="center" type="radio" name="sm[nfc7]" value="4"/></td>
							<td><input class="center" type="radio" name="sm[nfc7]" value="5"/></td>
							<td><input class="center" type="radio" name="sm[nfc7]" value="6"/></td>
						</tr>
						<tr></tr>
						<tr></tr>
						<tr>
							<td>8. I feel uncomfortable when I don't understand the reason why an event occurred in my life.</td>
							<td><input class="center" type="radio" name="sm[nfc8]" value="1"/></td>
							<td><input class="center" type="radio" name="sm[nfc8]" value="2"/></td>
							<td><input class="center" type="radio" name="sm[nfc8]" value="3"/></td>
							<td><input class="center" type="radio" name="sm[nfc8]" value="4"/></td>
							<td><input class="center" type="radio" name="sm[nfc8]" value="5"/></td>
							<td><input class="center" type="radio" name="sm[nfc8]" value="6"/></td>
						</tr>
						<tr></tr>
						<tr></tr>
						<tr>
							<td>9. I feel irritated when one person disagrees with what everyone else in a group believes.</td>
							<td><input class="center" type="radio" name="sm[nfc9]" value="1"/></td>
							<td><input class="center" type="radio" name="sm[nfc9]" value="2"/></td>
							<td><input class="center" type="radio" name="sm[nfc9]" value="3"/></td>
							<td><input class="center" type="radio" name="sm[nfc9]" value="4"/></td>
							<td><input class="center" type="radio" name="sm[nfc9]" value="5"/></td>
							<td><input class="center" type="radio" name="sm[nfc9]" value="6"/></td>
						</tr>
						<tr></tr>
						<tr></tr>
						<tr>
							<td>10. I hate to change my plans at the last minute.</td>
							<td><input class="center" type="radio" name="sm[nfc10]" value="1"/></td>
							<td><input class="center" type="radio" name="sm[nfc10]" value="2"/></td>
							<td><input class="center" type="radio" name="sm[nfc10]" value="3"/></td>
							<td><input class="center" type="radio" name="sm[nfc10]" value="4"/></td>
							<td><input class="center" type="radio" name="sm[nfc10]" value="5"/></td>
							<td><input class="center" type="radio" name="sm[nfc10]" value="6"/></td>
						</tr>
						<tr></tr>
						<tr></tr>
						<tr>
							<td>11. I don't like to go into a situation without knowing what I can expect from it.</td>
							<td><input class="center" type="radio" name="sm[nfc11]" value="1"/></td>
							<td><input class="center" type="radio" name="sm[nfc11]" value="2"/></td>
							<td><input class="center" type="radio" name="sm[nfc11]" value="3"/></td>
							<td><input class="center" type="radio" name="sm[nfc11]" value="4"/></td>
							<td><input class="center" type="radio" name="sm[nfc11]" value="5"/></td>
							<td><input class="center" type="radio" name="sm[nfc11]" value="6"/></td>
						</tr>
						<tr></tr>
						<tr></tr>
						<tr>
							<td>12. When I have made a decision, I feel relieved.</td>
							<td><input class="center" type="radio" name="sm[nfc12]" value="1"/></td>
							<td><input class="center" type="radio" name="sm[nfc12]" value="2"/></td>
							<td><input class="center" type="radio" name="sm[nfc12]" value="3"/></td>
							<td><input class="center" type="radio" name="sm[nfc12]" value="4"/></td>
							<td><input class="center" type="radio" name="sm[nfc12]" value="5"/></td>
							<td><input class="center" type="radio" name="sm[nfc12]" value="6"/></td>
						</tr>
						<tr></tr>
						<tr></tr>
						<tr>
							<td>13. When I am confronted with a problem, I’m dying to reach a solution very quickly.</td>
							<td><input class="center" type="radio" name="sm[nfc13]" value="1"/></td>
							<td><input class="center" type="radio" name="sm[nfc13]" value="2"/></td>
							<td><input class="center" type="radio" name="sm[nfc13]" value="3"/></td>
							<td><input class="center" type="radio" name="sm[nfc13]" value="4"/></td>
							<td><input class="center" type="radio" name="sm[nfc13]" value="5"/></td>
							<td><input class="center" type="radio" name="sm[nfc13]" value="6"/></td>
						</tr>
						<tr></tr>
						<tr></tr>
						<tr>
							<td>14. When I am confused about an important issue, I feel very upset.</td>
							<td><input class="center" type="radio" name="sm[nfc14]" value="1"/></td>
							<td><input class="center" type="radio" name="sm[nfc14]" value="2"/></td>
							<td><input class="center" type="radio" name="sm[nfc14]" value="3"/></td>
							<td><input class="center" type="radio" name="sm[nfc14]" value="4"/></td>
							<td><input class="center" type="radio" name="sm[nfc14]" value="5"/></td>
							<td><input class="center" type="radio" name="sm[nfc14]" value="6"/></td>
						</tr>
						<tr></tr>
						<tr></tr>
						<tr>
							<td>15. I would quickly become impatient and irritated if I would not find a solution to a problem immediately.</td>
							<td><input class="center" type="radio" name="sm[nfc15]" value="1"/></td>
							<td><input class="center" type="radio" name="sm[nfc15]" value="2"/></td>
							<td><input class="center" type="radio" name="sm[nfc15]" value="3"/></td>
							<td><input class="center" type="radio" name="sm[nfc15]" value="4"/></td>
							<td><input class="center" type="radio" name="sm[nfc15]" value="5"/></td>
							<td><input class="center" type="radio" name="sm[nfc15]" value="6"/></td>
						</tr>
						<tr></tr>
						<tr></tr>
						<tr>
							<td>16. I would rather make a decision quickly than sleep over it.</td>
							<td><input class="center" type="radio" name="sm[nfc16]" value="1"/></td>
							<td><input class="center" type="radio" name="sm[nfc16]" value="2"/></td>
							<td><input class="center" type="radio" name="sm[nfc16]" value="3"/></td>
							<td><input class="center" type="radio" name="sm[nfc16]" value="4"/></td>
							<td><input class="center" type="radio" name="sm[nfc16]" value="5"/></td>
							<td><input class="center" type="radio" name="sm[nfc16]" value="6"/></td>
						</tr>
						<tr></tr>
						<tr></tr>
						<tr>
							<td>17. Even if I get a lot of time to make a decision, I still feel compelled to decide quickly.</td>
							<td><input class="center" type="radio" name="sm[nfc17]" value="1"/></td>
							<td><input class="center" type="radio" name="sm[nfc17]" value="2"/></td>
							<td><input class="center" type="radio" name="sm[nfc17]" value="3"/></td>
							<td><input class="center" type="radio" name="sm[nfc17]" value="4"/></td>
							<td><input class="center" type="radio" name="sm[nfc17]" value="5"/></td>
							<td><input class="center" type="radio" name="sm[nfc17]" value="6"/></td>
						</tr>
						<tr></tr>
						<tr></tr>
						<tr>
							<td>18. I think it is fun to change my plans at the last moment.</td>
							<td><input class="center" type="radio" name="sm[nfc18]" value="1"/></td>
							<td><input class="center" type="radio" name="sm[nfc18]" value="2"/></td>
							<td><input class="center" type="radio" name="sm[nfc18]" value="3"/></td>
							<td><input class="center" type="radio" name="sm[nfc18]" value="4"/></td>
							<td><input class="center" type="radio" name="sm[nfc18]" value="5"/></td>
							<td><input class="center" type="radio" name="sm[nfc18]" value="6"/></td>
						</tr>
						<tr></tr>
						<tr></tr>
						<tr>
							<td>19. I enjoy the uncertainty of going into a new situation without knowing what might happen.</td>
							<td><input class="center" type="radio" name="sm[nfc19]" value="1"/></td>
							<td><input class="center" type="radio" name="sm[nfc19]" value="2"/></td>
							<td><input class="center" type="radio" name="sm[nfc19]" value="3"/></td>
							<td><input class="center" type="radio" name="sm[nfc19]" value="4"/></td>
							<td><input class="center" type="radio" name="sm[nfc19]" value="5"/></td>
							<td><input class="center" type="radio" name="sm[nfc19]" value="6"/></td>
						</tr>
						<tr></tr>
						<tr></tr>
						<tr>
							<td>20. My personal space is usually messy and disorganized.</td>
							<td><input class="center" type="radio" name="sm[nfc20]" value="1"/></td>
							<td><input class="center" type="radio" name="sm[nfc20]" value="2"/></td>
							<td><input class="center" type="radio" name="sm[nfc20]" value="3"/></td>
							<td><input class="center" type="radio" name="sm[nfc20]" value="4"/></td>
							<td><input class="center" type="radio" name="sm[nfc20]" value="5"/></td>
							<td><input class="center" type="radio" name="sm[nfc20]" value="6"/></td>
						</tr>
					</tbody>
				</table>
			</div>
			<button name="nfc" onclick="return check();"> Next </button>
			<p id="error"></p>
		</form>
	</body>
</html>