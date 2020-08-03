<?php
$email = $_POST['email'];
$celular = $_POST['celular'];
$loan_kind = $_POST['loan_kind'];
$loan_amount = $_POST['loan_amount'];
$institution = $_POST['institution'];
$loan_term = $_POST['loan_term'];
$source = $_POST['source'];
$medium = $_POST['medium'];
$campaign = $_POST['campaign'];
    
$host = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbname = "porta_tu_credito";
$dbconnect=mysqli_connect($host,$dbUsername,$dbPassword,$dbname);


$sql = "INSERT Into porta_tu_credito (email,celular,loan_kind,loan_amount,institution,loan,term) Values ('hola', '42', 'automot', 'chil','oi','eroie')";

$run = mysqli_query($dbconnect,$sql);

if($run == TRUE){
    echo "Inserted";
}else{
    echo '. mysqli_connect_errorno().';
}



?>
  
  
