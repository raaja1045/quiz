<!DOCTYPE html>
<!--code by webdevtrick (webdevtrick.com) -->
<html>

<head>
	<meta charset=UTF-8 />
	
	<title>PHP Quiz</title>
	
	<link rel="stylesheet" type="text/css" href="style.css" />
    <style>
body
{
   background-color: black;
   color: white;
}
/*table
{
    margin-top: 04%;
    color: white;
}*/

table, th {
  border: 1px solid white;
  width: 50%;
  color: white;
  font-size: 30px;
}
    </style>
</head>

<body>

	<div id="page-wrap">

		<center><h1>Result </h1>
		
        <?php
            
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
        
            $totalCorrect = 0;
            
            if ($answer1 == "C") { $totalCorrect++; }
            if ($answer2 == "A") { $totalCorrect++; }
            if ($answer3 == "A") { $totalCorrect++; }
            if ($answer4 == "B") { $totalCorrect++; }
            if ($answer5 == "B") { $totalCorrect++; }
            
            // echo "$totalCorrect / 5 ";

            $wrong=5-$totalCorrect ;
            // echo "Wrong ans : ",$wrong; 

    echo "<table border=1>";
   echo "<tr>";
   echo "<th>"; echo "TOTAL QUESTIONS"; echo "</th>";
   echo "<th>"; echo "5"; echo "</th>";
   echo "</tr>";
echo "<tr>";
   echo "<th>"; echo "CORRECT ANSWER"; echo "</th>";
   echo "<th>"; echo $totalCorrect ; echo "</th>";
echo "</tr>";

echo "<tr>";
   echo "<th>"; echo "WRONG ANSWER"; echo "</th>";
   echo "<th>"; echo $wrong; echo "</th>";
echo "</tr>";
   echo "</table>"; 

            
        ?>
	
	</div>

</body>

</html>