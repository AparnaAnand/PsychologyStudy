<?php
session_start ();
require_once '../DIR.php';
require_once BASE_PATH . '/classes/lib/CImport.php';

$data = 'Pseudonym: '.$_SESSION['name']."\n";
$data .= 'Gender: '.$_SESSION['gender']."\n";
$data .= 'Age: '.$_SESSION['age']."\n"."\n";
if($_SESSION['timelimit']==0)
{
$yn="No";
}
else
{
$yn="Yes";
}
$data .= 'Time limit: '.$yn."\n"."\n";

foreach($_SESSION['sm'] as $key => $value) {
	$data .= $key . ',' . $value . "\n";
}

foreach($_SESSION['survey_10'] as $i => $value)
	$data .= $i.','.$value."\n";


$data .= "\n"."\n";
$data .= 'UNAMBIGUOUS TRIALS:';
$data .= "\n"."\n";
$data .= '**Trial 1**'."\n";
$data .= 'Photo Number:'.$_SESSION['Task1']."\n";
$data .= 'Total Boxes Opened: '.$_SESSION['TotBox']."\n";
$data .= 'Categories Chosen-> ';
foreach($_SESSION['Cat'] as $key => $value) {
	$data .= $key . ':' . $value . " , ";
}
$data .= "\n";
$data .= 'Total Elapsed time: '.$_SESSION['TotalElapsed']." seconds.\n";
$data .= 'Total Times reopened: '.$_SESSION['TotRepeated']."\n";
$data .= 'Sequence:'."\n".$_SESSION['Sequence']."\n";
$data .= 'Time On Each Box-> '.$_SESSION['TimeOnEach']."\n";
$data .= '#Times reopened per Box-> '.$_SESSION['Repeated']."\n";
$data .= 'Total time per Category: '.$_SESSION['TotTimeCat']."\n";
$data .= 'Average time per Category: '.$_SESSION['AverageTime']."\n";
$data .= '#Times reopened per Category-> '.$_SESSION['TotRepCat']."\n";
$data .= 'Average reopened per Category-> '.$_SESSION['AvgRepeated']."\n";
$data .= 'Useful Clicked:'.$_SESSION['Useful']."\n";
$data .= 'Useless Clicked:'.$_SESSION['Useless']."\n";
$data .= 'Total time spent on Useful-> '.$_SESSION['TotFulTime']."\n";
$data .= 'Time spent on Useful-> '.$_SESSION['UsefulTime']."\n";
$data .= 'Average time spent on Useful-> '.$_SESSION['AvgFulTime']."\n";
$data .= 'Total time spent on Useless-> '.$_SESSION['TotLessTime']."\n";
$data .= 'Time spent on Useless-> '.$_SESSION['UselessTime']."\n";
$data .= 'Average time spent on Useless-> '.$_SESSION['AvgLessTime']."\n";
$data .= 'Total Useful reopened: '.$_SESSION['UsefulRep']."\n";
$data .= 'Average Useful reopened: '.$_SESSION['AvgUsefulRep']."\n";
$data .= 'Total Useless reopened: '.$_SESSION['UselessRep']."\n";
$data .= 'Average Useless reopened: '.$_SESSION['AvgUselessRep']."\n";
$data .= 'Total Reaction time: '.$_SESSION['TotTime']."\n";
$data .= 'ANSWER CHOSEN: '.$_SESSION['answer'];
if((($_SESSION['Task1']=='UA1' || $_SESSION['Task1']=='UA2' || $_SESSION['Task1']=='UA3') && $_SESSION['answer']==1) || ($_SESSION['Task1']=='UA4' && $_SESSION['answer']==2))
{
	$data .=" (correct)\n";
}
else
{
	$data .=" (incorrect)\n";
}
$data .= 'Certainty: '.$_SESSION['scale1']."\n";
$data .= "\n"."\n";


$data .= '**Trial 2**'."\n";
$data .= 'Photo Number:'.$_SESSION['Task2']."\n";
$data .= 'Total Boxes Opened: '.$_SESSION['TotBox2']."\n";
$data .= 'Categories Chosen-> ';
foreach($_SESSION['Cat2'] as $key => $value) {
	$data .= $key . ':' . $value . " , ";
}
$data .= "\n";
$data .= 'Total Elapsed time: '.$_SESSION['TotalElapsed2']." seconds.\n";
$data .= 'Total Times reopened: '.$_SESSION['TotRepeated2']."\n";
$data .= 'Sequence:'."\n".$_SESSION['Sequence2']."\n";
$data .= 'Time On Each Box-> '.$_SESSION['TimeOnEach2']."\n";
$data .= '#Times reopened per Box-> '.$_SESSION['Repeated2']."\n";
$data .= 'Total time per Category: '.$_SESSION['TotTimeCat2']."\n";
$data .= 'Average time per Category: '.$_SESSION['AverageTime2']."\n";
$data .= '#Times reopened per Category-> '.$_SESSION['TotRepCat2']."\n";
$data .= 'Average reopened per Category-> '.$_SESSION['AvgRepeated2']."\n";
$data .= 'Useful Clicked:'.$_SESSION['Useful2']."\n";
$data .= 'Useless Clicked:'.$_SESSION['Useless2']."\n";
$data .= 'Total time spent on Useful-> '.$_SESSION['TotFulTime2']."\n";
$data .= 'Time spent on Useful-> '.$_SESSION['UsefulTime2']."\n";
$data .= 'Average time spent on Useful-> '.$_SESSION['AvgFulTime2']."\n";
$data .= 'Total time spent on Useless-> '.$_SESSION['TotLessTime2']."\n";
$data .= 'Time spent on Useless-> '.$_SESSION['UselessTime2']."\n";
$data .= 'Average time spent on Useless-> '.$_SESSION['AvgLessTime2']."\n";
$data .= 'Total Useful reopened: '.$_SESSION['UsefulRep2']."\n";
$data .= 'Average Useful reopened: '.$_SESSION['AvgUsefulRep2']."\n";
$data .= 'Total Useless reopened: '.$_SESSION['UselessRep2']."\n";
$data .= 'Average Useless reopened: '.$_SESSION['AvgUselessRep2']."\n";
$data .= 'Total Reaction time: '.$_SESSION['TotTime2']."\n";
$data .= 'ANSWER CHOSEN: '.$_SESSION['answer2'];
if((($_SESSION['Task2']=='UA1' || $_SESSION['Task2']=='UA2' || $_SESSION['Task2']=='UA3') && $_SESSION['answer2']==1) || ($_SESSION['Task2']=='UA4' && $_SESSION['answer2']==2))
{
	$data .=" (correct)\n";
}
else
{
	$data .=" (incorrect)\n";
}
$data .= 'Certainty: '.$_SESSION['scale2']."\n";
$data .= "\n"."\n";


$data .= '**Trial 3**'."\n";
$data .= 'Photo Number:'.$_SESSION['Task3']."\n";
$data .= 'Total Boxes Opened: '.$_SESSION['TotBox3']."\n";
$data .= 'Categories Chosen-> ';
foreach($_SESSION['Cat3'] as $key => $value) {
	$data .= $key . ':' . $value . " , ";
}
$data .= "\n";
$data .= 'Total Elapsed time: '.$_SESSION['TotalElapsed3']." seconds.\n";
$data .= 'Total Times reopened: '.$_SESSION['TotRepeated3']."\n";
$data .= 'Sequence:'."\n".$_SESSION['Sequence3']."\n";
$data .= 'Time On Each Box-> '.$_SESSION['TimeOnEach3']."\n";
$data .= '#Times reopened per Box-> '.$_SESSION['Repeated3']."\n";
$data .= 'Total time per Category: '.$_SESSION['TotTimeCat3']."\n";
$data .= 'Average time per Category: '.$_SESSION['AverageTime3']."\n";
$data .= '#Times reopened per Category-> '.$_SESSION['TotRepCat3']."\n";
$data .= 'Average reopened per Category-> '.$_SESSION['AvgRepeated3']."\n";
$data .= 'Useful Clicked:'.$_SESSION['Useful3']."\n";
$data .= 'Useless Clicked:'.$_SESSION['Useless3']."\n";
$data .= 'Total time spent on Useful-> '.$_SESSION['TotFulTime3']."\n";
$data .= 'Time spent on Useful-> '.$_SESSION['UsefulTime3']."\n";
$data .= 'Average time spent on Useful-> '.$_SESSION['AvgFulTime3']."\n";
$data .= 'Total time spent on Useless-> '.$_SESSION['TotLessTime3']."\n";
$data .= 'Time spent on Useless-> '.$_SESSION['UselessTime3']."\n";
$data .= 'Average time spent on Useless-> '.$_SESSION['AvgLessTime3']."\n";
$data .= 'Total Useful reopened: '.$_SESSION['UsefulRep3']."\n";
$data .= 'Average Useful reopened: '.$_SESSION['AvgUsefulRep3']."\n";
$data .= 'Total Useless reopened: '.$_SESSION['UselessRep3']."\n";
$data .= 'Average Useless reopened: '.$_SESSION['AvgUselessRep3']."\n";
$data .= 'Total Reaction time: '.$_SESSION['TotTime3']."\n";
$data .= 'ANSWER CHOSEN: '.$_SESSION['answer3'];
if((($_SESSION['Task3']=='UA1' || $_SESSION['Task3']=='UA2' || $_SESSION['Task3']=='UA3') && $_SESSION['answer3']==1) || ($_SESSION['Task3']=='UA4' && $_SESSION['answer3']==2))
{
	$data .=" (correct)\n";
}
else
{
	$data .=" (incorrect)\n";
}
$data .= 'Certainty: '.$_SESSION['scale3']."\n";
$data .= "\n"."\n";


$data .= '**Trial 4**'."\n";
$data .= 'Photo Number:'.$_SESSION['Task4']."\n";
$data .= 'Total Boxes Opened: '.$_SESSION['TotBox4']."\n";
$data .= 'Categories Chosen-> ';
foreach($_SESSION['Cat4'] as $key => $value) {
	$data .= $key . ':' . $value . " , ";
}
$data .= "\n";
$data .= 'Total Elapsed time: '.$_SESSION['TotalElapsed4']." seconds.\n";
$data .= 'Total Times reopened: '.$_SESSION['TotRepeated4']."\n";
$data .= 'Sequence:'."\n".$_SESSION['Sequence4']."\n";
$data .= 'Time On Each Box-> '.$_SESSION['TimeOnEach4']."\n";
$data .= '#Times reopened per Box-> '.$_SESSION['Repeated4']."\n";
$data .= 'Total time per Category: '.$_SESSION['TotTimeCat4']."\n";
$data .= 'Average time per Category: '.$_SESSION['AverageTime4']."\n";
$data .= '#Times reopened per Category-> '.$_SESSION['TotRepCat4']."\n";
$data .= 'Average reopened per Category-> '.$_SESSION['AvgRepeated4']."\n";
$data .= 'Useful Clicked:'.$_SESSION['Useful4']."\n";
$data .= 'Useless Clicked:'.$_SESSION['Useless4']."\n";
$data .= 'Total time spent on Useful-> '.$_SESSION['TotFulTime4']."\n";
$data .= 'Time spent on Useful-> '.$_SESSION['UsefulTime4']."\n";
$data .= 'Average time spent on Useful-> '.$_SESSION['AvgFulTime4']."\n";
$data .= 'Total time spent on Useless-> '.$_SESSION['TotLessTime4']."\n";
$data .= 'Time spent on Useless-> '.$_SESSION['UselessTime4']."\n";
$data .= 'Average time spent on Useless-> '.$_SESSION['AvgLessTime4']."\n";
$data .= 'Total Useful reopened: '.$_SESSION['UsefulRep4']."\n";
$data .= 'Average Useful reopened: '.$_SESSION['AvgUsefulRep4']."\n";
$data .= 'Total Useless reopened: '.$_SESSION['UselessRep4']."\n";
$data .= 'Average Useless reopened: '.$_SESSION['AvgUselessRep4']."\n";
$data .= 'Total Reaction time: '.$_SESSION['TotTime4']."\n";
$data .= 'ANSWER CHOSEN: '.$_SESSION['answer4'];
if((($_SESSION['Task4']=='UA1' || $_SESSION['Task4']=='UA2' || $_SESSION['Task4']=='UA3') && $_SESSION['answer4']==1) || ($_SESSION['Task4']=='UA4' && $_SESSION['answer4']==2))
{
	$data .=" (correct)\n";
}
else
{
	$data .=" (incorrect)\n";
}
$data .= 'Certainty: '.$_SESSION['scale4']."\n";
$data .= "\n"."\n";


$data .= 'AMBIGUOUS TRIALS:';
$data .= "\n"."\n";
$data .= '**Trial 1**'."\n";
$data .= 'Photo Number:'.$_SESSION['Task5']."\n";
$data .= 'Total Boxes Opened: '.$_SESSION['TotBox5']."\n";
$data .= 'Categories Chosen-> ';
foreach($_SESSION['Cat5'] as $key => $value) {
	$data .= $key . ':' . $value . " , ";
}
$data .= "\n";
$data .= 'Total Elapsed time: '.$_SESSION['TotalElapsed5']." seconds.\n";
$data .= 'Total Times reopened: '.$_SESSION['TotRepeated5']."\n";
$data .= 'Sequence:'."\n".$_SESSION['Sequence5']."\n";
$data .= 'Time On Each Box-> '.$_SESSION['TimeOnEach5']."\n";
$data .= '#Times reopened per Box-> '.$_SESSION['Repeated5']."\n";
$data .= 'Total time per Category: '.$_SESSION['TotTimeCat5']."\n";
$data .= 'Average time per Category: '.$_SESSION['AverageTime5']."\n";
$data .= '#Times reopened per Category-> '.$_SESSION['TotRepCat5']."\n";
$data .= 'Average reopened per Category-> '.$_SESSION['AvgRepeated5']."\n";
$data .= 'Useful Clicked:'.$_SESSION['Useful5']."\n";
$data .= 'Useless Clicked:'.$_SESSION['Useless5']."\n";
$data .= 'Total time spent on Useful-> '.$_SESSION['TotFulTime5']."\n";
$data .= 'Time spent on Useful-> '.$_SESSION['UsefulTime5']."\n";
$data .= 'Average time spent on Useful-> '.$_SESSION['AvgFulTime5']."\n";
$data .= 'Total time spent on Useless-> '.$_SESSION['TotLessTime5']."\n";
$data .= 'Time spent on Useless-> '.$_SESSION['UselessTime5']."\n";
$data .= 'Average time spent on Useless-> '.$_SESSION['AvgLessTime5']."\n";
$data .= 'Total Useful reopened: '.$_SESSION['UsefulRep5']."\n";
$data .= 'Average Useful reopened: '.$_SESSION['AvgUsefulRep5']."\n";
$data .= 'Total Useless reopened: '.$_SESSION['UselessRep5']."\n";
$data .= 'Average Useless reopened: '.$_SESSION['AvgUselessRep5']."\n";
$data .= 'Total Reaction time: '.$_SESSION['TotTime5']."\n";
$data .= 'ANSWER CHOSEN: '.$_SESSION['answer5'];
if($_SESSION['answer5']==1)
{
	$data .=" (correct)\n";
}
else
{
	$data .=" (incorrect)\n";
}
$data .= 'Certainty: '.$_SESSION['scale5']."\n";
$data .= "\n"."\n";


$data .= '**Trial 2**'."\n";
$data .= 'Photo Number:'.$_SESSION['Task6']."\n";
$data .= 'Total Boxes Opened: '.$_SESSION['TotBox6']."\n";
$data .= 'Categories Chosen-> ';
foreach($_SESSION['Cat6'] as $key => $value) {
	$data .= $key . ':' . $value . " , ";
}
$data .= "\n";
$data .= 'Total Elapsed time: '.$_SESSION['TotalElapsed6']." seconds.\n";
$data .= 'Total Times reopened: '.$_SESSION['TotRepeated6']."\n";
$data .= 'Sequence:'."\n".$_SESSION['Sequence6']."\n";
$data .= 'Time On Each Box-> '.$_SESSION['TimeOnEach6']."\n";
$data .= '#Times reopened per Box-> '.$_SESSION['Repeated6']."\n";
$data .= 'Total time per Category: '.$_SESSION['TotTimeCat6']."\n";
$data .= 'Average time per Category: '.$_SESSION['AverageTime6']."\n";
$data .= '#Times reopened per Category-> '.$_SESSION['TotRepCat6']."\n";
$data .= 'Average reopened per Category-> '.$_SESSION['AvgRepeated6']."\n";
$data .= 'Useful Clicked:'.$_SESSION['Useful6']."\n";
$data .= 'Useless Clicked:'.$_SESSION['Useless6']."\n";
$data .= 'Total time spent on Useful-> '.$_SESSION['TotFulTime6']."\n";
$data .= 'Time spent on Useful-> '.$_SESSION['UsefulTime6']."\n";
$data .= 'Average time spent on Useful-> '.$_SESSION['AvgFulTime6']."\n";
$data .= 'Total time spent on Useless-> '.$_SESSION['TotLessTime6']."\n";
$data .= 'Time spent on Useless-> '.$_SESSION['UselessTime6']."\n";
$data .= 'Average time spent on Useless-> '.$_SESSION['AvgLessTime6']."\n";
$data .= 'Total Useful reopened: '.$_SESSION['UsefulRep6']."\n";
$data .= 'Average Useful reopened: '.$_SESSION['AvgUsefulRep6']."\n";
$data .= 'Total Useless reopened: '.$_SESSION['UselessRep6']."\n";
$data .= 'Average Useless reopened: '.$_SESSION['AvgUselessRep6']."\n";
$data .= 'Total Reaction time: '.$_SESSION['TotTime6']."\n";
$data .= 'ANSWER CHOSEN: '.$_SESSION['answer6'];
if($_SESSION['answer6']==1)
{
	$data .=" (correct)\n";
}
else
{
	$data .=" (incorrect)\n";
}
$data .= 'Certainty: '.$_SESSION['scale6']."\n";
$data .= "\n"."\n";


$data .= '**Trial 3**'."\n";
$data .= 'Photo Number:'.$_SESSION['Task7']."\n";
$data .= 'Total Boxes Opened: '.$_SESSION['TotBox7']."\n";
$data .= 'Categories Chosen-> ';
foreach($_SESSION['Cat7'] as $key => $value) {
	$data .= $key . ':' . $value . " , ";
}
$data .= "\n";
$data .= 'Total Elapsed time: '.$_SESSION['TotalElapsed7']." seconds.\n";
$data .= 'Total Times reopened: '.$_SESSION['TotRepeated7']."\n";
$data .= 'Sequence:'."\n".$_SESSION['Sequence7']."\n";
$data .= 'Time On Each Box-> '.$_SESSION['TimeOnEach7']."\n";
$data .= '#Times reopened per Box-> '.$_SESSION['Repeated7']."\n";
$data .= 'Total time per Category: '.$_SESSION['TotTimeCat7']."\n";
$data .= 'Average time per Category: '.$_SESSION['AverageTime7']."\n";
$data .= '#Times reopened per Category-> '.$_SESSION['TotRepCat7']."\n";
$data .= 'Average reopened per Category-> '.$_SESSION['AvgRepeated7']."\n";
$data .= 'Useful Clicked:'.$_SESSION['Useful7']."\n";
$data .= 'Useless Clicked:'.$_SESSION['Useless7']."\n";
$data .= 'Total time spent on Useful-> '.$_SESSION['TotFulTime7']."\n";
$data .= 'Time spent on Useful-> '.$_SESSION['UsefulTime7']."\n";
$data .= 'Average time spent on Useful-> '.$_SESSION['AvgFulTime7']."\n";
$data .= 'Total time spent on Useless-> '.$_SESSION['TotLessTime7']."\n";
$data .= 'Time spent on Useless-> '.$_SESSION['UselessTime7']."\n";
$data .= 'Average time spent on Useless-> '.$_SESSION['AvgLessTime7']."\n";
$data .= 'Total Useful reopened: '.$_SESSION['UsefulRep7']."\n";
$data .= 'Average Useful reopened: '.$_SESSION['AvgUsefulRep7']."\n";
$data .= 'Total Useless reopened: '.$_SESSION['UselessRep7']."\n";
$data .= 'Average Useless reopened: '.$_SESSION['AvgUselessRep7']."\n";
$data .= 'Total Reaction time: '.$_SESSION['TotTime7']."\n";
$data .= 'ANSWER CHOSEN: '.$_SESSION['answer7'];
if($_SESSION['answer7']==1)
{
	$data .=" (correct)\n";
}
else
{
	$data .=" (incorrect)\n";
}
$data .= 'Certainty: '.$_SESSION['scale7']."\n";
$data .= "\n"."\n";


$data .= '**Trial 4**'."\n";
$data .= 'Photo Number:'.$_SESSION['Task8']."\n";
$data .= 'Total Boxes Opened: '.$_SESSION['TotBox8']."\n";
$data .= 'Categories Chosen-> ';
foreach($_SESSION['Cat8'] as $key => $value) {
	$data .= $key . ':' . $value . " , ";
}
$data .= "\n";
$data .= 'Total Elapsed time: '.$_SESSION['TotalElapsed8']." seconds.\n";
$data .= 'Total Times reopened: '.$_SESSION['TotRepeated8']."\n";
$data .= 'Sequence:'."\n".$_SESSION['Sequence8']."\n";
$data .= 'Time On Each Box-> '.$_SESSION['TimeOnEach8']."\n";
$data .= '#Times reopened per Box-> '.$_SESSION['Repeated8']."\n";
$data .= 'Total time per Category: '.$_SESSION['TotTimeCat8']."\n";
$data .= 'Average time per Category: '.$_SESSION['AverageTime8']."\n";
$data .= '#Times reopened per Category-> '.$_SESSION['TotRepCat8']."\n";
$data .= 'Average reopened per Category-> '.$_SESSION['AvgRepeated8']."\n";
$data .= 'Useful Clicked:'.$_SESSION['Useful8']."\n";
$data .= 'Useless Clicked:'.$_SESSION['Useless8']."\n";
$data .= 'Total time spent on Useful-> '.$_SESSION['TotFulTime8']."\n";
$data .= 'Time spent on Useful-> '.$_SESSION['UsefulTime8']."\n";
$data .= 'Average time spent on Useful-> '.$_SESSION['AvgFulTime8']."\n";
$data .= 'Total time spent on Useless-> '.$_SESSION['TotLessTime8']."\n";
$data .= 'Time spent on Useless-> '.$_SESSION['UselessTime8']."\n";
$data .= 'Average time spent on Useless-> '.$_SESSION['AvgLessTime8']."\n";
$data .= 'Total Useful reopened: '.$_SESSION['UsefulRep8']."\n";
$data .= 'Average Useful reopened: '.$_SESSION['AvgUsefulRep8']."\n";
$data .= 'Total Useless reopened: '.$_SESSION['UselessRep8']."\n";
$data .= 'Average Useless reopened: '.$_SESSION['AvgUselessRep8']."\n";
$data .= 'Total Reaction time: '.$_SESSION['TotTime8']."\n";
$data .= 'ANSWER CHOSEN: '.$_SESSION['answer8'];
if($_SESSION['answer8']==1)
{
	$data .=" (correct)\n";
}
else
{
	$data .=" (incorrect)\n";
}
$data .= 'Certainty: '.$_SESSION['scale8']."\n";
$data .= "\n"."\n";

$file = new CImport(BASE_PATH . '/Data_NewStudy/' . $_SESSION['name'] .'.txt');
$file->putContent($data);
session_destroy();
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
	</head>
	<body>
		<form method="post" action="code.php">
			<div>				
				<p>Thank you for participating in this study. We were interested in how people make decisions in an ambiguous task with regard to the way people are more rigid or flexible in the way they process information.</p>
				<p>The next page will have the code; please remember to make a note of the code.</p>
			</div>
			<br>
			<button type="submit"> Next </button>
		</form>
	</body>
</html>