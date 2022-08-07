<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: *");
header("Access-Control-Allow-Headers: access");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$dsn='mysql:host=localhost;dbname=project9';

try {
    $connect= new PDO($dsn,'root','');

} catch (PDOException $error) {
    echo 'Connection Error, Error message:'.$error->getMessage();
}
$data=[];

$prod_rows = $connect->query('select count(id) from products')->fetchColumn(); 
$users_rows = $connect->query('select count(user_id) from users')->fetchColumn(); 
$comments_rows = $connect->query('select count(id) from comments')->fetchColumn(); 
array_push($data,$prod_rows,$users_rows,$comments_rows);
print_r(json_encode($data));
?>
