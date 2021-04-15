<?php
//by:Christopher Nguyen | 216213332
//php for item search.
$a[] = "MacBookAir";
$a[] = "MacBookPro";
$a[] = "iphone SE";
$a[] = "iphone 8";
$a[] = "iphone 9";
$a[] = "iphone 10";

$input = $_POST["myInput"];

$hint = "";

// lookup all hints from array if $input is different from ""
if ($input !== "") {
  $input = strtolower($input);
  $len=strlen($input);
  foreach($a as $name) {
    if (stristr($input, substr($name, 0, $len))) { //Case-insensitive strstr (Find the first occurrence of a string)
      if ($hint === "") {
        $hint = $name;
      } else {
        $hint .= ", $name"; //Concatenation assignment
      }
    }
  }
}

echo json_encode(array('hint' => $hint));

?>
