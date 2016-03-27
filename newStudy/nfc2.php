<!DOCTYPE html>
<?php
session_start ();

	if(isset($_POST['nfc'])) {
		$_SESSION['sm'] = array_merge($_SESSION['sm'], $_POST['sm']);
		header("location:rrs.php");
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
							<td>21. In most social conflicts, I can easily see which side is right and which is wrong.</td>
							<td><input class="center" type="radio" name="sm[nfc21]" value="1"/></td>
							<td><input class="center" type="radio" name="sm[nfc21]" value="2"/></td>
							<td><input class="center" type="radio" name="sm[nfc21]" value="3"/></td>
							<td><input class="center" type="radio" name="sm[nfc21]" value="4"/></td>
							<td><input class="center" type="radio" name="sm[nfc21]" value="5"/></td>
							<td><input class="center" type="radio" name="sm[nfc21]" value="6"/></td>
						</tr>
						<tr></tr>
						<tr></tr>
						<tr>
							<td>22. I almost always feel hurried to reach a decision, even when there is no reason to do so.</td>
							<td><input class="center" type="radio" name="sm[nfc22]" value="1"/></td>
							<td><input class="center" type="radio" name="sm[nfc22]" value="2"/></td>
							<td><input class="center" type="radio" name="sm[nfc22]" value="3"/></td>
							<td><input class="center" type="radio" name="sm[nfc22]" value="4"/></td>
							<td><input class="center" type="radio" name="sm[nfc22]" value="5"/></td>
							<td><input class="center" type="radio" name="sm[nfc22]" value="6"/></td>
						</tr>
						<tr></tr>
						<tr></tr>
						<tr>
							<td>23. I believe that orderliness and organization are among the most important characteristics of a good student.</td>
							<td><input class="center" type="radio" name="sm[nfc23]" value="1"/></td>
							<td><input class="center" type="radio" name="sm[nfc23]" value="2"/></td>
							<td><input class="center" type="radio" name="sm[nfc23]" value="3"/></td>
							<td><input class="center" type="radio" name="sm[nfc23]" value="4"/></td>
							<td><input class="center" type="radio" name="sm[nfc23]" value="5"/></td>
							<td><input class="center" type="radio" name="sm[nfc23]" value="6"/></td>
						</tr>
						<tr></tr>
						<tr></tr>
						<tr>
							<td>24. When considering most conflict situations, I can usually see how both sides could be right.</td>
							<td><input class="center" type="radio" name="sm[nfc24]" value="1"/></td>
							<td><input class="center" type="radio" name="sm[nfc24]" value="2"/></td>
							<td><input class="center" type="radio" name="sm[nfc24]" value="3"/></td>
							<td><input class="center" type="radio" name="sm[nfc24]" value="4"/></td>
							<td><input class="center" type="radio" name="sm[nfc24]" value="5"/></td>
							<td><input class="center" type="radio" name="sm[nfc24]" value="6"/></td>
						</tr>
						<tr></tr>
						<tr></tr>
						<tr>
							<td>25. I don't like to be with people who are capable of unexpected actions.</td>
							<td><input class="center" type="radio" name="sm[nfc25]" value="1"/></td>
							<td><input class="center" type="radio" name="sm[nfc25]" value="2"/></td>
							<td><input class="center" type="radio" name="sm[nfc25]" value="3"/></td>
							<td><input class="center" type="radio" name="sm[nfc25]" value="4"/></td>
							<td><input class="center" type="radio" name="sm[nfc25]" value="5"/></td>
							<td><input class="center" type="radio" name="sm[nfc25]" value="6"/></td>
						</tr>
						<tr></tr>
						<tr></tr>
						<tr>
							<td>26. I prefer to socialize with familiar friends because I know what to expect from them.</td>
							<td><input class="center" type="radio" name="sm[nfc26]" value="1"/></td>
							<td><input class="center" type="radio" name="sm[nfc26]" value="2"/></td>
							<td><input class="center" type="radio" name="sm[nfc26]" value="3"/></td>
							<td><input class="center" type="radio" name="sm[nfc26]" value="4"/></td>
							<td><input class="center" type="radio" name="sm[nfc26]" value="5"/></td>
							<td><input class="center" type="radio" name="sm[nfc26]" value="6"/></td>
						</tr>
						<tr></tr>
						<tr></tr>
						<tr>
							<td>27. I think that I would learn best in a class that lacks clearly stated objectives and requirements.</td>
							<td><input class="center" type="radio" name="sm[nfc27]" value="1"/></td>
							<td><input class="center" type="radio" name="sm[nfc27]" value="2"/></td>
							<td><input class="center" type="radio" name="sm[nfc27]" value="3"/></td>
							<td><input class="center" type="radio" name="sm[nfc27]" value="4"/></td>
							<td><input class="center" type="radio" name="sm[nfc27]" value="5"/></td>
							<td><input class="center" type="radio" name="sm[nfc27]" value="6"/></td>
						</tr>
						<tr></tr>
						<tr></tr>
						<tr>
							<td>28. When thinking about a problem, I consider as many different opinions on the issue as possible.</td>
							<td><input class="center" type="radio" name="sm[nfc28]" value="1"/></td>
							<td><input class="center" type="radio" name="sm[nfc28]" value="2"/></td>
							<td><input class="center" type="radio" name="sm[nfc28]" value="3"/></td>
							<td><input class="center" type="radio" name="sm[nfc28]" value="4"/></td>
							<td><input class="center" type="radio" name="sm[nfc28]" value="5"/></td>
							<td><input class="center" type="radio" name="sm[nfc28]" value="6"/></td>
						</tr>
						<tr></tr>
						<tr></tr>
						<tr>
							<td>29. I like to know what people are thinking all the time.</td>
							<td><input class="center" type="radio" name="sm[nfc29]" value="1"/></td>
							<td><input class="center" type="radio" name="sm[nfc29]" value="2"/></td>
							<td><input class="center" type="radio" name="sm[nfc29]" value="3"/></td>
							<td><input class="center" type="radio" name="sm[nfc29]" value="4"/></td>
							<td><input class="center" type="radio" name="sm[nfc29]" value="5"/></td>
							<td><input class="center" type="radio" name="sm[nfc29]" value="6"/></td>
						</tr>
						<tr></tr>
						<tr></tr>
						<tr>
							<td>30. I dislike it when a person's statement could mean many different things.</td>
							<td><input class="center" type="radio" name="sm[nfc30]" value="1"/></td>
							<td><input class="center" type="radio" name="sm[nfc30]" value="2"/></td>
							<td><input class="center" type="radio" name="sm[nfc30]" value="3"/></td>
							<td><input class="center" type="radio" name="sm[nfc30]" value="4"/></td>
							<td><input class="center" type="radio" name="sm[nfc30]" value="5"/></td>
							<td><input class="center" type="radio" name="sm[nfc30]" value="6"/></td>
						</tr>
						<tr></tr>
						<tr></tr>
						<tr>
							<td>31. It's annoying to listen to someone who cannot seem to make up his or her mind.</td>
							<td><input class="center" type="radio" name="sm[nfc31]" value="1"/></td>
							<td><input class="center" type="radio" name="sm[nfc31]" value="2"/></td>
							<td><input class="center" type="radio" name="sm[nfc31]" value="3"/></td>
							<td><input class="center" type="radio" name="sm[nfc31]" value="4"/></td>
							<td><input class="center" type="radio" name="sm[nfc31]" value="5"/></td>
							<td><input class="center" type="radio" name="sm[nfc31]" value="6"/></td>
						</tr>
						<tr></tr>
						<tr></tr>
						<tr>
							<td>32. I find that establishing a consistent routine enables me to enjoy life more.</td>
							<td><input class="center" type="radio" name="sm[nfc32]" value="1"/></td>
							<td><input class="center" type="radio" name="sm[nfc32]" value="2"/></td>
							<td><input class="center" type="radio" name="sm[nfc32]" value="3"/></td>
							<td><input class="center" type="radio" name="sm[nfc32]" value="4"/></td>
							<td><input class="center" type="radio" name="sm[nfc32]" value="5"/></td>
							<td><input class="center" type="radio" name="sm[nfc32]" value="6"/></td>
						</tr>
						<tr></tr>
						<tr></tr>
						<tr>
							<td>33. I enjoy having a clear and structured mode of life.</td>
							<td><input class="center" type="radio" name="sm[nfc33]" value="1"/></td>
							<td><input class="center" type="radio" name="sm[nfc33]" value="2"/></td>
							<td><input class="center" type="radio" name="sm[nfc33]" value="3"/></td>
							<td><input class="center" type="radio" name="sm[nfc33]" value="4"/></td>
							<td><input class="center" type="radio" name="sm[nfc33]" value="5"/></td>
							<td><input class="center" type="radio" name="sm[nfc33]" value="6"/></td>
						</tr>
						<tr></tr>
						<tr></tr>
						<tr>
							<td>34. I prefer interacting with people whose opinions are very different from my own.</td>
							<td><input class="center" type="radio" name="sm[nfc34]" value="1"/></td>
							<td><input class="center" type="radio" name="sm[nfc34]" value="2"/></td>
							<td><input class="center" type="radio" name="sm[nfc34]" value="3"/></td>
							<td><input class="center" type="radio" name="sm[nfc34]" value="4"/></td>
							<td><input class="center" type="radio" name="sm[nfc34]" value="5"/></td>
							<td><input class="center" type="radio" name="sm[nfc34]" value="6"/></td>
						</tr>
						<tr></tr>
						<tr></tr>
						<tr>
							<td>35. I like to have a place for everything and everything in its place.</td>
							<td><input class="center" type="radio" name="sm[nfc35]" value="1"/></td>
							<td><input class="center" type="radio" name="sm[nfc35]" value="2"/></td>
							<td><input class="center" type="radio" name="sm[nfc35]" value="3"/></td>
							<td><input class="center" type="radio" name="sm[nfc35]" value="4"/></td>
							<td><input class="center" type="radio" name="sm[nfc35]" value="5"/></td>
							<td><input class="center" type="radio" name="sm[nfc35]" value="6"/></td>
						</tr>
						<tr></tr>
						<tr></tr>
						<tr>
							<td>36. I feel uncomfortable when someone's meaning or intention is unclear to me.</td>
							<td><input class="center" type="radio" name="sm[nfc36]" value="1"/></td>
							<td><input class="center" type="radio" name="sm[nfc36]" value="2"/></td>
							<td><input class="center" type="radio" name="sm[nfc36]" value="3"/></td>
							<td><input class="center" type="radio" name="sm[nfc36]" value="4"/></td>
							<td><input class="center" type="radio" name="sm[nfc36]" value="5"/></td>
							<td><input class="center" type="radio" name="sm[nfc36]" value="6"/></td>
						</tr>
						<tr></tr>
						<tr></tr>
						<tr>
							<td>37. I always see many possible solutions to problems I face.</td>
							<td><input class="center" type="radio" name="sm[nfc37]" value="1"/></td>
							<td><input class="center" type="radio" name="sm[nfc37]" value="2"/></td>
							<td><input class="center" type="radio" name="sm[nfc37]" value="3"/></td>
							<td><input class="center" type="radio" name="sm[nfc37]" value="4"/></td>
							<td><input class="center" type="radio" name="sm[nfc37]" value="5"/></td>
							<td><input class="center" type="radio" name="sm[nfc37]" value="6"/></td>
						</tr>
						<tr></tr>
						<tr></tr>
						<tr>
							<td>38. I'd rather know bad news than stay in a state of uncertainty.</td>
							<td><input class="center" type="radio" name="sm[nfc38]" value="1"/></td>
							<td><input class="center" type="radio" name="sm[nfc38]" value="2"/></td>
							<td><input class="center" type="radio" name="sm[nfc38]" value="3"/></td>
							<td><input class="center" type="radio" name="sm[nfc38]" value="4"/></td>
							<td><input class="center" type="radio" name="sm[nfc38]" value="5"/></td>
							<td><input class="center" type="radio" name="sm[nfc38]" value="6"/></td>
						</tr>
						<tr></tr>
						<tr></tr>
						<tr>
							<td>39. I do not usually consult many different opinions before forming my own view.</td>
							<td><input class="center" type="radio" name="sm[nfc39]" value="1"/></td>
							<td><input class="center" type="radio" name="sm[nfc39]" value="2"/></td>
							<td><input class="center" type="radio" name="sm[nfc39]" value="3"/></td>
							<td><input class="center" type="radio" name="sm[nfc39]" value="4"/></td>
							<td><input class="center" type="radio" name="sm[nfc39]" value="5"/></td>
							<td><input class="center" type="radio" name="sm[nfc39]" value="6"/></td>
						</tr>
						<tr></tr>
						<tr></tr>
						<tr>
							<td>40. I dislike unpredictable situations.</td>
							<td><input class="center" type="radio" name="sm[nfc40]" value="1"/></td>
							<td><input class="center" type="radio" name="sm[nfc40]" value="2"/></td>
							<td><input class="center" type="radio" name="sm[nfc40]" value="3"/></td>
							<td><input class="center" type="radio" name="sm[nfc40]" value="4"/></td>
							<td><input class="center" type="radio" name="sm[nfc40]" value="5"/></td>
							<td><input class="center" type="radio" name="sm[nfc40]" value="6"/></td>
						</tr>
						<tr></tr>
						<tr></tr>
						<tr>
							<td>41. I dislike the routine aspects of my work (studies).</td>
							<td><input class="center" type="radio" name="sm[nfc41]" value="1"/></td>
							<td><input class="center" type="radio" name="sm[nfc41]" value="2"/></td>
							<td><input class="center" type="radio" name="sm[nfc41]" value="3"/></td>
							<td><input class="center" type="radio" name="sm[nfc41]" value="4"/></td>
							<td><input class="center" type="radio" name="sm[nfc41]" value="5"/></td>
							<td><input class="center" type="radio" name="sm[nfc41]" value="6"/></td>
						</tr>
					</tbody>
				</table>
			</div>
			<button name="nfc" onclick="return check();"> Next </button>
			<p id="error"></p>
		</form>
	</body>
</html>