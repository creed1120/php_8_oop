<?php
/********************************
 * Student Score Calculator
 * 
 ********************************/
 $score = 58;

 if ($score >= 90) {
     $letterGrade = "A";
  } elseif ($score >= 80) {
     $letterGrade = "B";
  } elseif ($score >= 70) {
     $letterGrade = "C";
  } elseif ($score >= 60) {
     $letterGrade = "D";
  } else {
     $letterGrade = "F";
  }
 
 $isPassing = $score >= 60;
 
 $outPut = $isPassing ? "true" : "false";
 echo "Score: $score" . ", Grade: $letterGrade" . ", Passing: " . $outPut;