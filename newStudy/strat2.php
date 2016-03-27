<?php
session_start ();
if(@$_POST['q']) {
	foreach($_POST['q'] as $i => $a) {
		$_SESSION['survey_10']['strategy'.$i] = $a;
		}
		header("location:post_instr.php");
		exit;
}
$questions = array();
$questions[] = array(
		'h' => 'Performing this task was challenging and motivating for me',
		'a'	=> array('Strongly disagree', 'Disagree', 'Neither agree nor disagree', 'Agree', 'Strongly agree')
);
$questions[] = array(
		'h' => 'I felt disappointed with my overall performance in this task',
		'a'	=> array('Strongly disagree', 'Disagree', 'Neither agree nor disagree', 'Agree', 'Strongly agree')
);
$questions[] = array(
		'h' => 'I was unsure about the outcome of my performance in this task',
		'a'	=> array('Strongly disagree', 'Disagree', 'Neither agree nor disagree', 'Agree', 'Strongly agree')
);
$questions[] = array(
		'h' => 'Performing this task was threatening and unenjoyable for me',
		'a'	=> array('Strongly disagree', 'Disagree', 'Neither agree nor disagree', 'Agree', 'Strongly agree')
);
$questions[] = array(
		'h' => ' I felt uncertain about  the decisions I made in this task',
		'a'	=> array('Strongly disagree', 'Disagree', 'Neither agree nor disagree', 'Agree', 'Strongly agree')
);
$questions[] = array(
		'h' => 'It was extremely important for me to do well on this task',
		'a'	=> array('Strongly disagree', 'Disagree', 'Neither agree nor disagree', 'Agree', 'Strongly agree')
);
$questions[] = array(
		'h' => 'I was determined to perform this task successfully',
		'a'	=> array('Strongly disagree', 'Disagree', 'Neither agree nor disagree', 'Agree', 'Strongly agree')
);
$questions[] = array(
		'h' => 'I was confused while performing this task',
		'a'	=> array('Strongly disagree', 'Disagree', 'Neither agree nor disagree', 'Agree', 'Strongly agree')
);
$questions[] = array(
		'h' => 'I was extremely careful while performing this task',
		'a'	=> array('Strongly disagree', 'Disagree', 'Neither agree nor disagree', 'Agree', 'Strongly agree')
);
$questions[] = array(
		'h' => 'In this task I was afraid of  performing poorly',
		'a'	=> array('Strongly disagree', 'Disagree', 'Neither agree nor disagree', 'Agree', 'Strongly agree')
);
$questions[] = array(
		'h' => 'I felt distressed if I was not able to make the correct decision about the photgraph',
		'a'	=> array('Strongly disagree', 'Disagree', 'Neither agree nor disagree', 'Agree', 'Strongly agree')
);
?>
<!DOCTYPE html>
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
		
				function check() {
				 	var r = document.getElementsByTagName("input");
					var e = document.getElementById("error");
				     for (var i=0; i < r.length; i++) {
				    	 if (r[i].id == "input") {
							temp=r[i].name;
							res=temp.split("_");
							gName=res[0].concat("]");
				        	 if(getCheckedValue2(gName) == 4 && r[i].value == '') {
				        		 e.innerHTML="Please fill all answers";
				            	 return false;
							}
				         }
				         if ((r[i].type == "radio") && (r[i].checked != "checked")) {
				        	 	if(!getCheckedValue(r[i].name)) {
						        	 e.innerHTML="Please fill all answers";
						             return false;
				        	 	}
				         }
				     }
					 e.innerHTML="";
				    return true;
				}
function getCheckedValue( groupName ) {
    var radios = document.getElementsByName( groupName );
    for( var i = 0; i < radios.length; i++ ) {
        if( radios[i].checked ) {
            return true;
        }
    }
    return false;
}
function getCheckedValue2( groupName ) {
    var radios = document.getElementsByName( groupName );
    for( var i = 0; i < radios.length; i++ ) {
        if( radios[i].checked ) {
            return radios[i].value;
        }
    }
    return false;
}
</script>
	</head>
<body>
			<form method="post" action="">
				<?php foreach($questions as $i => $q):?>
					<div>
						<?php
								echo ($i+13) . '. ' . $q['h'];
						?>
					<?php
						$answers=$q['a'];
					foreach($answers as $j => $a):?>
						<br>
						<input type="radio" name="q[<?php echo $i+13?>]" value="<?php echo ($j+1);?>" <?php 
							if(isset($q['input']) && $q['input'] == $j+1) echo ' id="input_check" ';
						?>/><span class=""><?php echo $a;?></span>
						<?php if(isset($q['input']) && $q['input'] == $j+1):?>
						<input type="text" name="q[<?php echo $i+13;?>_text]" id="input"/>
						<?php endif;?>
					<?php endforeach;?>
					<br>
					</div>
				<?php endforeach;?>
			<p id="error"></p>
			<button name="strat2" onclick="return check();"> Next </button>
			</form>
</body>
</html>
