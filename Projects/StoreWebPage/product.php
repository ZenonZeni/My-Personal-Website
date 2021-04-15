<?php
//by:Christopher Nguyen | 216213332
//php for storing memory and storage choices for different models
$model = $_POST["laptop"];

if ($model == "Select"){
  echo json_encode(array('model' => $model));
}
else if ($model == "MacBookAir"){
  $memory[] = "8GB";
  $memory[] = "16GB";
  $memory[] = "32GB";

  $storage[] = "128GB";
  $storage[] = "256GB";
  $storage[] = "500GB";
  echo json_encode(array('model' => $model, 'memory' => $memory, 'storage' => $storage));
}
else if ($model == "MacBookPro"){
  $memory[] = "16GB";
  $memory[] = "32GB";
  $memory[] = "64GB";

  $storage[] = "256GB";
  $storage[] = "500GB";
  $storage[] = "1TB";
  $storage[] = "2TB";
  echo json_encode(array('model' => $model, 'memory' => $memory, 'storage' => $storage));
}
else{
  $memory[] = "0GB";
  $memory[] = "16GB";
  $memory[] = "32GB";
  $memory[] = "64GB";

  $storage[] = "256GB";
  $storage[] = "500GB";
  $storage[] = "1TB";
  echo json_encode(array('model' => $model, 'memory' => $memory, 'storage' => $storage));
}
?>
