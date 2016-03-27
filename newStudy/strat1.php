<?php
session_start ();
if(@$_POST['q']) {
	foreach($_POST['q'] as $i => $a) {
		$_SESSION['survey_10']['strategy'.$i] = $a;
		}
		header("location:strat2.php");
		exit;
}
$questions = array();
$questions[] = array(
		'h' => 'How important was it for you to make a correct decision?',
		'a'	=> array('Definitely not important', 'Not important', 'Not sure', 'Important', 'Definitely important')
);
$questions[] = array(
		'h' => 'How uncertain were you while performing the task?',
		'a'	=> array('Not at all uncertain', 'A little uncertain', 'Moderately uncertain', 'Very uncertain', 'Completely uncertain')
);
$questions[] = array(
		'h' => 'I found the task to be difficult.',
		'a'	=> array('Strongly disagree', 'Disagree', 'Neither agree nor disagree', 'Agree', 'Strongly agree')
);
$questions[] = array(
		'h' => 'I feel that I should have done better in this task.',
		'a'	=> array('Strongly disagree', 'Disagree', 'Neither agree nor disagree', 'Agree', 'Strongly agree')
);
$questions[] = array(
		'h' => 'Were you comfortable reading clues of one category and changing to another and so on?',
		'a'	=> array('Very uncomfortable', 'Uncomfortable', 'Somewhat comfortable', 'Comfortable', 'Very comfortable')
);
$questions[] = array(
		'h' => 'How satisfied were you with your overall task accomplishment?',
		'a'	=> array('Not at all satisfied', 'Slightly satisfied', 'Moderately satisfied', 'Satisfied', 'Extremely satisfied')
);
$questions[] = array(
		'h' => 'How successful were you at following the strategy you implemented?',
		'a'	=> array('Not at all successful', 'Partially successful', 'Successful', 'Very successful', 'Completely successful')
);
$questions[] = array(
		'h' => 'On a scale of 1-5 please indicate to what extent your performance in this task reflected an aspect of the situation (1) or reflected an aspect of yourself (5).',
		'a'	=> array('1', '2', '3', '4', '5')
);
$questions[] = array(
		'h' => 'Can you estimate how many correct decisions you made in total?',
		'a'	=> array(),
		'input' => 1
);
$questions[] = array(
		'h' => 'How certain are you about the decision you made?',
		'a'	=> array('Very Uncertain','Uncertain','Rather Uncertain','Hard to say','Rather Certain','Certain','Very Certain')
);
$questions[] = array(
		'h' => 'Could you please indicate on the scale which type of clues were more important for you, 1 indicates useful clues were extremely important and 10 indicates all clues were extremely important.',
		'a'	=> array(),
		'type' => 'number'
);
$questions[] = array(
		'h' => 'Could you please indicate on the scale to what extent you focused on the clues, 1 indicates I completely focused on useful clues and 10 indicates I focused on all clues equally.',
		'a'	=> array(),
		'type' => 'number'
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
				        	 if(r[i].value == '') {
				        		 e.innerHTML="Please fill all answers";
				            	 return false;
							}
				         }
						 if(r[i].id=="num" && r[i].value=='')
						 {
							e.innerHTML="Please fill all answers";
						    return false;
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
								echo ($i+1) . '. ' . $q['h'];
						?>
					<?php
						$answers=$q['a'];
					foreach($answers as $j => $a):?>
						<br>
						<input type="radio" name="q[<?php echo $i+1?>]" value="<?php echo ($j+1);?>" <?php 
							if(isset($q['input'])) echo ' id="input_check" ';
						?>/><span class=""><?php echo $a;?></span>
					<?php endforeach;?>
					<br>
					<?php if(isset($q['input'])):?>
						<input type="text" name="q[<?php echo $i+1;?>_text]" id="input"/>
					<?php endif;?>
					<?php if(isset($q['type'])):?>
							<?php if($q['type'] == 'number'):?>
							<input type="number" name="st[<?php echo $i+1?>]" id="num" min="1" max="10"/>
							<?php endif;?>
						<?php endif;?>
					<br>
					</div>
				<?php endforeach;?>
			<p id="error"></p>
			<button name="strat1" onclick="return check();"> Next </button>
			</form>
</body>
</html>
