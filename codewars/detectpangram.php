<?php

function detectpangram($string) { 
  #your code here
  $alphabet = str_split("the quick brown fox jumps over the lazy dog");
  $input = str_split(strtolower($string));
  $result = true;
  foreach($alphabet as $letter){
    if($letter == " "){
          continue;
    }
    elseif(!in_array($letter, $input)){
    echo "<br>$letter";
    $result = false;
    break;
    }
  }
  //var_dump($result);
  return $result;
}

function detect_pangram($string) { 
    return count(array_unique(str_split(preg_replace('/[^a-z]/', '', strtolower($string))))) === 26;
}


$result = detectpangram("Fickle jinx bog dwarves spy math quiz");

var_dump($result);

echo $result;


echo "<h1>hhhhhhhhhh";
