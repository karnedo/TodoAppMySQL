<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'connection.php';

$email =$_POST['email'];

$result= array();
$result['kraTASKS'] =array();
$query ="SELECT * FROM kraTASKS WHERE email = ?";
//Preparamos la consulta
$stmt = mysqli_prepare($connection, $query);
mysqli_stmt_bind_param($stmt, 's', $email);
mysqli_stmt_execute($stmt);

$response = mysqli_stmt_get_result($stmt);

while($row = mysqli_fetch_array($response))
{
    $index['idTask'] =$row['0'];
    $index['email'] =$row['1'];
    $index['name'] =$row['2'];
    $index['date'] =$row['3'];
    $index['priority'] =$row['4'];
    $index['isChecked'] =$row['5'];


    array_push($result['kraTASKS'], $index);

}
mysqli_stmt_close($stmt);
$result["success"]="1";
echo json_encode($result);

mysqli_close($connection);

?>
