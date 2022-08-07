<?php

include_once 'connection.php';

$sql="SELECT COUNT('id') FROM `products`;";
// $sql2="SELECT COUNT(*) FROM `users`;";
// $sql3="SELECT COUNT(*) FROM `comments`;";

$result=mysqli_query($con,$sql);

echo "[";
for($i=0;$i<mysqli_num_rows($result);$i++){
  echo($i>0?',':'').json_encode(mysqli_fetch_object($result));
}
echo "]";

 ?>