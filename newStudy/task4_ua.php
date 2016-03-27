<?php
session_start ();

$chosen= $_SESSION['picked'];
$limit= $_SESSION['timelimit'];

	if(isset($_POST['next'])) {
		$_SESSION['TotBox4']=$_POST['TotBox'];
		$_SESSION['Cat4']=$_POST['cat'];
		$_SESSION['TimeOnEach4']=$_POST['TimeOnEach'];
		$_SESSION['TotalElapsed4']=$_POST['TotalElapsed'];
		$_SESSION['Repeated4']=$_POST['Repeated'];
		$_SESSION['Sequence4']=$_POST['Sequence'];
		$_SESSION['Useful4']=$_POST['Useful'];
		$_SESSION['Useless4']=$_POST['Useless'];
		$_SESSION['UsefulTime4']=$_POST['UsefulTime'];
		$_SESSION['UselessTime4']=$_POST['UselessTime'];
		$_SESSION['AverageTime4']=$_POST['AverageTime'];
		$_SESSION['AvgRepeated4']=$_POST['AvgRepeated'];
		$_SESSION['TotRepeated4']=$_POST['TotRepeated'];
		$_SESSION['TotRepCat4']=$_POST['TotRepCat'];
		$_SESSION['TotFulTime4']=$_POST['TotFulTime'];
		$_SESSION['TotLessTime4']=$_POST['TotLessTime'];
		$_SESSION['AvgFulTime4']=$_POST['AvgFulTime'];
		$_SESSION['AvgLessTime4']=$_POST['AvgLessTime'];
		$_SESSION['UsefulRep4']=$_POST['UsefulRep'];
		$_SESSION['UselessRep4']=$_POST['UselessRep'];
		$_SESSION['AvgUsefulRep4']=$_POST['AvgUsefulRep'];
		$_SESSION['AvgUselessRep4']=$_POST['AvgUselessRep'];
		$_SESSION['TotTimeCat4']=$_POST['TotTimeCat'];
		header("location:ans4_ua.php?chosen=".$chosen);
		exit;
	}

?>
<!DOCTYPE html>
<html>
	<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<script>
		function Redirect()
		{
			window.location="ans4_ua.php";
		}
		var Timer;
		var TotalSeconds;
		function CreateTimer(TimerID, Time)
		{
			Timer = document.getElementById(TimerID);
			TotalSeconds = Time;
			UpdateTimer();
			window.setTimeout("Tick()", 1000);
		}
		function Tick()
		{
			if (TotalSeconds <= 0)
			{
				Redirect();
			}
			TotalSeconds -= 1;
			UpdateTimer();
			window.setTimeout("Tick()", 1000);
		}
		function UpdateTimer()
		{
			var Seconds = TotalSeconds;
			var Days = Math.floor(Seconds / 86400);
			Seconds -= Days * 86400;
			var Hours = Math.floor(Seconds / 3600);
			Seconds -= Hours * (3600);
			var Minutes = Math.floor(Seconds / 60);
			Seconds -= Minutes * (60);
			var TimeStr = ((Days > 0) ? Days + " days " : "") + LeadingZero(Hours) + ":" + LeadingZero(Minutes) + ":" + LeadingZero(Seconds);
			Timer.innerHTML = TimeStr;
		}
		function LeadingZero(Time)
		{
			return (Time < 10) ? "0" + Time : + Time;
		}
		var order=[];
		var noOfClicks=[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];
		var startTime, endTime;
		var timeDiff, sec;
		var timeOnEach=[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];
		var timeInd;
		var sequence="";
		var previous=0;
		var switch2=0;
		var useful=0;
		var useless=0;
		var uselessTime="";
		var usefulTime="";
		var repArr=["1_1","1_2","1_3","1_4","2_1","2_2","2_3","2_4","3_1","3_2","3_3","3_4","4_1","4_2","4_3","4_4"];
		var Categories=["Category 1","Category 2","Category 3","Category 4"];
		var limit;
		var curr_time,new_time, diff; 
		function create()
		{
			limit= "<?php echo $limit; ?>";	
			if(limit!=0)
			{
				CreateTimer("timer", limit);
			}
			else
			{
				curr_time= new Date();
			}
			var chosen= "<?php echo $chosen; ?>";	
			if(chosen==1)
			{
				var path='cocktail.js';
				var pic='cocktail.jpg';
			}
			else if (chosen==2)
			{
				var path='reflective.js';
				var pic='reflective.jpg';
			}
			else if (chosen==3)
			{
				var path='duende.js';
				var pic='duende.jpg';
			}
			else
			{
				var path='coffee.js';
				var pic='coffee.jpg';
				var abovepicture=document.getElementById('abovepic');
				abovepicture.style.marginLeft="auto";
				abovepicture.style.marginRight="auto";
				abovepicture.style.width="30%";
				abovepicture.style.height="50%";
			}
			var imported = document.createElement('script');
			imported.src = path;
			document.head.appendChild(imported);
			var picture=document.getElementById('pic');
			picture.src=pic;
			var arr=["1_1","1_2","1_3","1_4","2_1","2_2","2_3","2_4","3_1","3_2","3_3","3_4","4_1","4_2","4_3","4_4"];
			for(i=0;i<16;i++)
			{
				var x = Math.floor((Math.random() * (16-i)));
				var val=arr[x];
				order.push(val);
				arr.splice(x, 1);
			}
			for(i=0;i<16;i++)
			{
				var name="box_"+(i+1);
				var elem=document.getElementById(name);
				var val=order[i];
				var cat;
				if(val=="1_1" ||val=="1_2" ||val=="1_3" ||val=="1_4")
				{
					cat=1;
					elem.style.backgroundColor= "#99CCFF";
					elem.innerHTML="<div style='margin-top:20px;margin-left:auto;margin-right:auto;width:80%'>Emotions</div>";
					var div = document.createElement("div");
					elem.appendChild(div);
				}
				else if(val=="2_1" ||val=="2_2" ||val=="2_3" ||val=="2_4")
				{
					cat=2
					elem.style.backgroundColor= "#99FF99";
					elem.innerHTML="<div style='margin-top:20px;margin-left:auto;margin-right:auto;width:80%'>Basic Facts</div>";
					var div = document.createElement("div");
					elem.appendChild(div);
				}
				else if(val=="3_1" ||val=="3_2" ||val=="3_3" ||val=="3_4")
				{
					cat=3
					elem.style.backgroundColor= "#FFCC33";
					elem.innerHTML="<div style='margin-top:20px;margin-left:auto;margin-right:auto;width:80%'>Story</div>";
					var div = document.createElement("div");
					elem.appendChild(div);
				}
				else
				{
					cat=4;
					elem.style.backgroundColor= "#FFCCCC";
					elem.innerHTML="<div style='margin-top:20px;margin-left:auto;margin-right:auto;width:80%'>Composition</div>";
					var div = document.createElement("div");
					elem.appendChild(div);
				}
				if(val=="1_1" ||val=="1_2" ||val=="2_1" ||val=="2_2" ||val=="3_1" ||val=="3_2" ||val=="4_1" ||val=="4_2")
				{
					
						div.style.backgroundImage="url('asterisk.png')";
						div.style.backgroundRepeat="no-repeat";
						div.style.backgroundSize = "20px 20px";
						div.style.float="right";
				}
			}
		}
		function openhint(x)
		{
			startTime = new Date();
			var spl=x.id.split("_");
			var num=spl[1];
			var hintnum=order[num-1];
			if(hintnum=="1_1")
			{
				if(previous==0)
				{
				}
				else if(previous==1)
				{
					sequence+="seconds, Non Switch";
				}
				else
				{
					sequence+="seconds, Switch";
				}
				if(switch2==0)
				{
				}
				else if(switch2==1)
				{
					sequence+=", Useful Non Switch\n";
				}
				else
				{
					sequence+=", Useful Switch\n";
				}
				switch2=1;
				sequence+="Category: 1, Useful, Time Spent: ";
				previous=1;
				noOfClicks[0]+=1;
				timeInd=0;
				Alert.render(hint1_1);
			}
			else if(hintnum=="1_2")
			{
				if(previous==0)
				{
				}
				else if(previous==1)
				{
					sequence+="seconds, Non Switch";
				}
				else
				{
					sequence+="seconds, Switch";
				}
				if(switch2==0)
				{
				}
				else if(switch2==1)
				{
					sequence+=", Useful Non Switch\n";
				}
				else
				{
					sequence+=", Useful Switch\n";
				}
				switch2=1;
				sequence+="Category: 1, Useful, Time Spent: ";
				previous=1;
				noOfClicks[1]+=1;
				timeInd=1;
				Alert.render(hint1_2);
			}
			else if(hintnum=="1_3")
			{
				if(previous==0)
				{
				}
				else if(previous==1)
				{
					sequence+="seconds, Non Switch";
				}
				else
				{
					sequence+="seconds, Switch";
				}
				if(switch2==0)
				{
				}
				else if(switch2==2)
				{
					sequence+=", Useless Non Switch\n";
				}
				else
				{
					sequence+=", Useless Switch\n";
				}
				switch2=2;
				sequence+="Category: 1, Useless, Time Spent: ";
				previous=1;
				noOfClicks[2]+=1;
				timeInd=2;
				Alert.render(hint1_3);
			}
			else if(hintnum=="1_4")
			{
				if(previous==0)
				{
				}
				else if(previous==1)
				{
					sequence+="seconds, Non Switch";
				}
				else
				{
					sequence+="seconds, Switch";
				}
				if(switch2==0)
				{
				}
				else if(switch2==2)
				{
					sequence+=", Useless Non Switch\n";
				}
				else
				{
					sequence+=", Useless Switch\n";
				}
				switch2=2;
				sequence+="Category: 1, Useless, Time Spent: ";
				previous=1;
				noOfClicks[3]+=1;
				timeInd=3;
				Alert.render(hint1_4);
			}
			else if(hintnum=="2_1")
			{
				if(previous==0)
				{
				}
				else if(previous==2)
				{
					sequence+="seconds, Non Switch";
				}
				else
				{
					sequence+="seconds, Switch";
				}
				if(switch2==0)
				{
				}
				else if(switch2==1)
				{
					sequence+=", Useful Non Switch\n";
				}
				else
				{
					sequence+=", Useful Switch\n";
				}
				switch2=1;
				sequence+="Category: 2, Useful, Time Spent: ";
				previous=2;
				noOfClicks[4]+=1;
				timeInd=4;
				Alert.render(hint2_1);
			}
			else if(hintnum=="2_2")
			{
				if(previous==0)
				{
				}
				else if(previous==2)
				{
					sequence+="seconds, Non Switch";
				}
				else
				{
					sequence+="seconds, Switch";
				}
				if(switch2==0)
				{
				}
				else if(switch2==1)
				{
					sequence+=", Useful Non Switch\n";
				}
				else
				{
					sequence+=", Useful Switch\n";
				}
				switch2=1;
				sequence+="Category: 2, Useful, Time Spent: ";
				previous=2;
				noOfClicks[5]+=1;
				timeInd=5;
				Alert.render(hint2_2);
			}
			else if(hintnum=="2_3")
			{
				if(previous==0)
				{
				}
				else if(previous==2)
				{
					sequence+="seconds, Non Switch";
				}
				else
				{
					sequence+="seconds, Switch";
				}
				if(switch2==0)
				{
				}
				else if(switch2==2)
				{
					sequence+=", Useless Non Switch\n";
				}
				else
				{
					sequence+=", Useless Switch\n";
				}
				switch2=2;
				sequence+="Category: 2, Useless, Time Spent: ";
				previous=2;
				noOfClicks[6]+=1;
				timeInd=6;
				Alert.render(hint2_3);
			}
			else if(hintnum=="2_4")
			{
				if(previous==0)
				{
				}
				else if(previous==2)
				{
					sequence+="seconds, Non Switch";
				}
				else
				{
					sequence+="seconds, Switch";
				}
				if(switch2==0)
				{
				}
				else if(switch2==2)
				{
					sequence+=", Useless Non Switch\n";
				}
				else
				{
					sequence+=", Useless Switch\n";
				}
				switch2=2;
				sequence+="Category: 2, Useless, Time Spent: ";
				previous=2;
				noOfClicks[7]+=1;
				timeInd=7;
				Alert.render(hint2_4);
			}
			else if(hintnum=="3_1")
			{
				if(previous==0)
				{
				}
				else if(previous==3)
				{
					sequence+="seconds, Non Switch";
				}
				else
				{
					sequence+="seconds, Switch";
				}
				if(switch2==0)
				{
				}
				else if(switch2==1)
				{
					sequence+=", Useful Non Switch\n";
				}
				else
				{
					sequence+=", Useful Switch\n";
				}
				switch2=1;
				sequence+="Category: 3, Useful, Time Spent: ";
				previous=3;
				noOfClicks[8]+=1;
				timeInd=8;
				Alert.render(hint3_1);
			}
			else if(hintnum=="3_2")
			{
				if(previous==0)
				{
				}
				else if(previous==3)
				{
					sequence+="seconds, Non Switch";
				}
				else
				{
					sequence+="seconds, Switch";
				}
				if(switch2==0)
				{
				}
				else if(switch2==1)
				{
					sequence+=", Useful Non Switch\n";
				}
				else
				{
					sequence+=", Useful Switch\n";
				}
				switch2=1;
				sequence+="Category: 3, Useful, Time Spent: ";
				previous=3;
				noOfClicks[9]+=1;
				timeInd=9;
				Alert.render(hint3_2);
			}
			else if(hintnum=="3_3")
			{
				if(previous==0)
				{
				}
				else if(previous==3)
				{
					sequence+="seconds, Non Switch";
				}
				else
				{
					sequence+="seconds, Switch";
				}
				if(switch2==0)
				{
				}
				else if(switch2==2)
				{
					sequence+=", Useless Non Switch\n";
				}
				else
				{
					sequence+=", Useless Switch\n";
				}
				switch2=2;
				sequence+="Category: 3, Useless, Time Spent: ";
				previous=3;
				noOfClicks[10]+=1;
				timeInd=10;
				Alert.render(hint3_3);
			}
			else if(hintnum=="3_4")
			{
				if(previous==0)
				{
				}
				else if(previous==3)
				{
					sequence+="seconds, Non Switch";
				}
				else
				{
					sequence+="seconds, Switch";
				}
				if(switch2==0)
				{
				}
				else if(switch2==2)
				{
					sequence+=", Useless Non Switch\n";
				}
				else
				{
					sequence+=", Useless Switch\n";
				}
				switch2=2;
				sequence+="Category: 3, Useless, Time Spent: ";
				previous=3;
				noOfClicks[11]+=1;
				timeInd=11;
				Alert.render(hint3_4);
			}
			else if(hintnum=="4_1")
			{
				if(previous==0)
				{
				}
				else if(previous==4)
				{
					sequence+="seconds, Non Switch";
				}
				else
				{
					sequence+="seconds, Switch";
				}
				if(switch2==0)
				{
				}
				else if(switch2==1)
				{
					sequence+=", Useful Non Switch\n";
				}
				else
				{
					sequence+=", Useful Switch\n";
				}
				switch2=1;
				sequence+="Category: 4, Useful, Time Spent: ";
				previous=4;
				noOfClicks[12]+=1;
				timeInd=12;
				Alert.render(hint4_1);
			}
			else if(hintnum=="4_2")
			{
				if(previous==0)
				{
				}
				else if(previous==4)
				{
					sequence+="seconds, Non Switch";
				}
				else
				{
					sequence+="seconds, Switch";
				}
				if(switch2==0)
				{
				}
				else if(switch2==1)
				{
					sequence+=", Useful Non Switch\n";
				}
				else
				{
					sequence+=", Useful Switch\n";
				}
				switch2=1;
				sequence+="Category: 4, Useful, Time Spent: ";
				previous=4;
				noOfClicks[13]+=1;
				timeInd=13;
				Alert.render(hint4_2);
			}
			else if(hintnum=="4_3")
			{
				if(previous==0)
				{
				}
				else if(previous==4)
				{
					sequence+="seconds, Non Switch";
				}
				else
				{
					sequence+="seconds, Switch";
				}
				if(switch2==0)
				{
				}
				else if(switch2==2)
				{
					sequence+=", Useless Non Switch\n";
				}
				else
				{
					sequence+=", Useless Switch\n";
				}
				switch2=2;
				sequence+="Category: 4, Useless, Time Spent: ";
				previous=4;
				noOfClicks[14]+=1;
				timeInd=14;
				Alert.render(hint4_3);
			}
			else
			{
				if(previous==0)
				{
				}
				else if(previous==4)
				{
					sequence+="seconds, Non Switch";
				}
				else
				{
					sequence+="seconds, Switch";
				}
				if(switch2==0)
				{
				}
				else if(switch2==2)
				{
					sequence+=", Useless Non Switch\n";
				}
				else
				{
					sequence+=", Useless Switch\n";
				}
				switch2=2;
				sequence+="Category: 4, Useless, Time Spent: ";
				previous=4;
				noOfClicks[15]+=1;
				timeInd=15;
				Alert.render(hint4_4);
			}
			x.style.backgroundImage="url('tick2.png')";
			x.style.backgroundRepeat="no-repeat";
			x.style.backgroundPosition="50px 5px";
			x.style.backgroundSize = "20px 20px";
		}
		function CustomAlert()
		{
			this.render = function(dialog)
				{
				var winW = window.innerWidth;
				var winH = window.innerHeight;
				var dialogoverlay = document.getElementById('dialogoverlay');
				var dialogbox = document.getElementById('dialogbox');
				dialogoverlay.style.display = "block";
				dialogoverlay.style.height = winH+"px";
				dialogbox.style.left = (winW/2) - (550 * .5)+"px";
				dialogbox.style.top = "100px";
				dialogbox.style.display = "block";
				document.getElementById('dialogboxbody').innerHTML = dialog;
				document.getElementById('dialogboxfoot').innerHTML = '<button onclick="Alert.ok()">OK</button>';
				}
			this.ok = function()
				{
				document.getElementById('dialogbox').style.display = "none";
				document.getElementById('dialogoverlay').style.display = "none";
				endTime = new Date();
				timeDiff = endTime - startTime;
				timeDiff /= 1000;
				sec = Math.round(timeDiff % 60);
				timeOnEach[timeInd]+=sec;
				sequence+=sec.toString();				
				}
		}
		var Alert = new CustomAlert();
		function setvar()
		{
			new_time= new Date();
			var totalBoxes=0;
			var catBoxes=[0,0,0,0];
			for(i=0;i<16;i++)
			{
				if(noOfClicks[i]!=0)
				{
					totalBoxes+=1;
					if(i<4)
					{
						catBoxes[0]+=1;
					}
					else if(i<8)
					{
						catBoxes[1]+=1;
					}
					else if(i<12)
					{
						catBoxes[2]+=1;
					}
					else
					{
						catBoxes[3]+=1;
					}
					if(i==0||i==1||i==4||i==5||i==8||i==9||i==12||i==13)
					{
						useful+=1;
					}
					else
					{
						useless+=1;
					}
				}
			}
			var tb=document.getElementById('TotBox');
			tb.value=totalBoxes;
			for(i=0;i<4;i++)
			{
				var name="cat"+(i+1);
				var elem=document.getElementById(name);
				elem.value=catBoxes[i];
			}
			var TimeString="";
			var AvgTime="";
			var TotTimeCat="";
			var TotFulTime=0;
			var TotLessTime=0;
			j=0;
			k=0;
			avg=0;
			for(i=0;i<16;i++)
			{
				num=timeOnEach[i];
				TimeString+=repArr[i];
				TimeString+=":";
				TimeString+=num.toString();
				TimeString+=" , ";
				if(i==0||i==1||i==4||i==5||i==8||i==9||i==12||i==13)
				{
					usefulTime+=repArr[i];
					usefulTime+=":";
					usefulTime+=num.toString();
					usefulTime+=", ";
					TotFulTime+=num;
				}
				else
				{
					uselessTime+=repArr[i];
					uselessTime+=":";
					uselessTime+=num.toString();
					uselessTime+=", ";
					TotLessTime+=num;
				}
				j++;
				avg+=num;
				if(j%4==0)
				{
					AvgTime+=Categories[k];
					TotTimeCat+=Categories[k];
					AvgTime+=":";
					TotTimeCat+=":";
					k++;
					TotTimeCat+=avg.toString();
					TotTimeCat+=", ";
					avg/=4;
					AvgTime+=avg.toString();
					AvgTime+=", ";
					avg=0;
				}
			}
			var elem=document.getElementById('TimeOnEach');
			elem.value=TimeString;
			var TotalElapsed;
			limit= "<?php echo $limit; ?>";	
			if(limit!=0)
			{
				TotalElapsed=300-TotalSeconds;
			}
			else
			{
				diff=new_time-curr_time;
				diff /= 1000;
				TotalElapsed = Math.round(diff % 60);
			}
			var elem=document.getElementById('TotalElapsed');
			elem.value=TotalElapsed;
			var elem=document.getElementById('AverageTime');
			elem.value=AvgTime;
			var elem=document.getElementById('TotTimeCat');
			elem.value=TotTimeCat;
			var rep="";
			var AvgReopened="";
			var TotReopened=0;
			var TotRepCat="";
			var UsefulRep=0;
			var UselessRep=0;
			j=0;
			k=0;
			avg=0;
			for(i=0;i<16;i++)
			{
				var num=((noOfClicks[i] > 0) ? noOfClicks[i]-1 : 0);
				rep+=repArr[i];
				rep+=":";
				rep+=num.toString();
				rep+=" , ";
				j++;
				TotReopened+=num;
				avg+=num;
				if(i==0||i==1||i==4||i==5||i==8||i==9||i==12||i==13)
				{
					UsefulRep+=num;
				}
				else
				{
					UselessRep+=num;
				}
				if(j%4==0)
				{
					AvgReopened+=Categories[k];
					TotRepCat+=Categories[k];
					AvgReopened+=":";
					TotRepCat+=":";
					k++;
					TotRepCat+=avg.toString();
					avg/=4;
					AvgReopened+=avg.toString();
					AvgReopened+=", ";
					TotRepCat+=", ";
					avg=0;
				}
			}
			var elem=document.getElementById('Repeated');
			elem.value=rep;
			var elem=document.getElementById('AvgRepeated');
			elem.value=AvgReopened;
			var elem=document.getElementById('TotRepeated');
			elem.value=TotReopened;
			var elem=document.getElementById('TotRepCat');
			elem.value=TotRepCat;
			var elem=document.getElementById('UsefulRep');
			elem.value=UsefulRep;
			var elem=document.getElementById('UselessRep');
			elem.value=UselessRep;
			var elem=document.getElementById('AvgUsefulRep');
			elem.value=UsefulRep/8;
			var elem=document.getElementById('AvgUselessRep');
			elem.value=UselessRep/8;
			sequence+="seconds.";
			var elem=document.getElementById('Sequence');
			elem.value=sequence;
			var elem=document.getElementById('Useful');
			elem.value=useful;
			var elem=document.getElementById('Useless');
			elem.value=useless;
			var elem=document.getElementById('UsefulTime');
			elem.value=usefulTime;
			var elem=document.getElementById('UselessTime');
			elem.value=uselessTime;
			var elem=document.getElementById('TotFulTime');
			elem.value=TotFulTime;
			var elem=document.getElementById('AvgFulTime');
			elem.value=TotFulTime/8;
			var elem=document.getElementById('TotLessTime');
			elem.value=TotLessTime;
			var elem=document.getElementById('AvgLessTime');
			elem.value=TotLessTime/8;
			return true;
		}
		</script>
		<style>
		#dialogoverlay
		{
			display: none;
			opacity: .8;
			position: fixed;
			top: 0px;
			left: 0px;
			background: #FFF;
			width: 100%;
			z-index: 10;
		}
		#dialogbox
		{
			display: none;
			position: fixed;
			background: #CCCCFF;
			border-radius:7px; 
			width:550px;
			z-index: 10;
		}
		#dialogbox > div
		{
			background:#CCCCFF; margin:8px;
		}
		#dialogbox > div > #dialogboxbody
		{
			background: #CCFFFF; padding:20px; color:#000;
		}
		#dialogbox > div > #dialogboxfoot
		{
			background: #CCFFFF; padding:10px; text-align:right;
		}
		body
		{
			background-color: #E8E8E8;
			font-family: "Verdana", Sans-serif;
		}
		.outer
		{
			background-color: #E8E8E8;
			width: 57.96%;
			padding: 25px;
			margin-left:auto ;
			margin-right:auto ;
		}
		.next
		{
			background-color: #E8E8E8;
			font-family: "Verdana", Sans-serif;
			font-size: 15px;
			margin-left: 40%;
			height: 50px;
			width: 20%;
			border-style: none;
			border-radius:4px;
		}
		.next:hover
		{
			background-color: orange;
			transition-duration:0.3s;
		}
		.timer
		{
			width: 170px;
			height: 45px;
			background: black;
			border-radius: 10px;
			margin-left:10% ;
			font-size: 35px;
			color: white;
		}
		.box
		{
			cursor: pointer;
			border-radius: 2px;
			text-align: center;
			vertical-align: middle;
		}
		button div
		{
			width:16px;
			height:16px;
			background-image: url('asterisk.png');      
		}
		button div.rightImage
		{
			background-size: 20px 20px;
		}
		</style>
	</head>
	<body onload="create()">
		<div id="dialogoverlay"></div>
		<div id="dialogbox">
			<div>
				<div id="dialogboxbody"></div>
				<div id="dialogboxfoot"></div>
			</div>
		</div>
		<?php if($limit!=0):?>
		<div class="timer" id="timer" style="float:left">
		<?php endif;?>
		</div>
		<div class="container-fluid">
		<div class="outer" style="padding:0">
			<div id="abovepic" style="margin-left:auto;margin-right:auto;width:60%;height:100%">
				<img id="pic" style="margin-left:auto;margin-right:auto;max-width:100%;max-height:20%">
			</div>
		</div>
		</div>
			<div style="margin-left:30%;margin-right:auto;width:40%;">
				<br>
				<button class="box" id="box_1" onclick="openhint(this)" style="width: 24%; background-color: rgb(255, 255, 255);"></button>
				<button class="box" id="box_2" onclick="openhint(this)" style="width: 24%; background-color: rgb(255, 255, 255);"></button>
				<button class="box" id="box_3" onclick="openhint(this)" style="width: 24%; background-color: rgb(255, 255, 255);"></button>
				<button class="box" id="box_4" onclick="openhint(this)" style="width: 24%; background-color: rgb(255, 255, 255);"></button>
				<br>
				<button class="box" id="box_5" onclick="openhint(this)" style="width: 24%; background-color: rgb(255, 255, 255);"></button>
				<button class="box" id="box_6" onclick="openhint(this)" style="width: 24%; background-color: rgb(255, 255, 255);"></button>
				<button class="box" id="box_7" onclick="openhint(this)" style="width: 24%; background-color: rgb(255, 255, 255);"></button>
				<button class="box" id="box_8" onclick="openhint(this)" style="width: 24%; background-color: rgb(255, 255, 255);"></button>
				<br>
				<button class="box" id="box_9" onclick="openhint(this)" style="width: 24%; background-color: rgb(255, 255, 255);"></button>
				<button class="box" id="box_10" onclick="openhint(this)" style="width: 24%; background-color: rgb(255, 255, 255);"></button>
				<button class="box" id="box_11" onclick="openhint(this)" style="width: 24%; background-color: rgb(255, 255, 255);"></button>
				<button class="box" id="box_12" onclick="openhint(this)" style="width: 24%; background-color: rgb(255, 255, 255);"></button>
				<br>
				<button class="box" id="box_13" onclick="openhint(this)" style="width: 24%; background-color: rgb(255, 255, 255);"></button>
				<button class="box" id="box_14" onclick="openhint(this)" style="width: 24%; background-color: rgb(255, 255, 255);"></button>
				<button class="box" id="box_15" onclick="openhint(this)" style="width: 24%; background-color: rgb(255, 255, 255);"></button>
				<button class="box" id="box_16" onclick="openhint(this)" style="width: 24%; background-color: rgb(255, 255, 255);"></button>
				<br>
			</div>
		<br>
		<form method="post" action="">
			<input type="hidden" id="TotBox" name="TotBox">
			<input type="hidden" id="cat1" name="cat[category1]">
			<input type="hidden" id="cat2" name="cat[category2]">
			<input type="hidden" id="cat3" name="cat[category3]">
			<input type="hidden" id="cat4" name="cat[category4]">
			<input type="hidden" id="TimeOnEach" name="TimeOnEach">
			<input type="hidden" id="TotalElapsed" name="TotalElapsed">
			<input type="hidden" id="Repeated" name="Repeated">
			<input type="hidden" id="Sequence" name="Sequence">
			<input type="hidden" id="Useful" name="Useful">
			<input type="hidden" id="Useless" name="Useless">
			<input type="hidden" id="UsefulTime" name="UsefulTime">
			<input type="hidden" id="UselessTime" name="UselessTime">
			<input type="hidden" id="AverageTime" name="AverageTime">
			<input type="hidden" id="AvgRepeated" name="AvgRepeated">
			<input type="hidden" id="TotRepeated" name="TotRepeated">
			<input type="hidden" id="TotRepCat" name="TotRepCat">
			<input type="hidden" id="TotFulTime" name="TotFulTime">
			<input type="hidden" id="TotLessTime" name="TotLessTime">
			<input type="hidden" id="AvgFulTime" name="AvgFulTime">
			<input type="hidden" id="AvgLessTime" name="AvgLessTime">
			<input type="hidden" id="UsefulRep" name="UsefulRep">
			<input type="hidden" id="UselessRep" name="UselessRep">
			<input type="hidden" id="AvgUsefulRep" name="AvgUsefulRep">
			<input type="hidden" id="AvgUselessRep" name="AvgUselessRep">
			<input type="hidden" id="TotTimeCat" name="TotTimeCat">
			<button class="next" type="submit" name="next" onclick="return setvar();"> I HAVE NOW MADE MY DECISION </button>
		</form>
	</body>
</html>