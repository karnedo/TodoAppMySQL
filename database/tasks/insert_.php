<?php
include 'connection.php';
$email =$_POST['email'];
$taskName =$_POST['name'];
$taskDate =date('Y-m-d', strtotime($_POST['date']));
$priority =$_POST['priority'];
$isChecked = $_POST['isChecked'];
echo "Proceeding with query...";
$query ="INSERT INTO kraTASKS(idTask,email,name,date,priority,isChecked) values(NULL, '$email','$taskName','$taskDate','$priority','$isChecked') ";

$result =mysqli_query($connection,$query);

if($result){
    echo "success";
}else{
    echo "fail";
}
mysqli_close($connection);

?>
