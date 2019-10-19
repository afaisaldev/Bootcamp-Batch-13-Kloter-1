<?php

  $datakey = ["dumb", "ways", "the", "best"];
  $arrayLength = count($datakey);
  $word = "dumbways";

  for ($x = 0; $x < $arrayLength; $x++) {
    
    if(strpos($word, $datakey[$x]) !== false){

      echo"$datakey[$x] => true <br>";

    }else{

      echo"$datakey[$x] => false <br>";

    }

  } 

  // Result
  // dumb => true
  // ways => true
  // the => false
  // best => false 

// The strpos() function finds the position of the first occurrence of a string inside another string.
// Note: The strpos() function is case-sensitive.
?>
