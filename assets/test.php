
<?php
    //Step1 connection

    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['someAction']))
    {
        func();
    }
    function func(){

        $email = $_REQUEST['email'];
        $celular = $_REQUEST['celular'];
        $loan_kind = $_REQUEST['loan_kind'];
        $institution = $_REQUEST['institution'];
        $loan_term = $_REQUEST['loan_term'];

        echo $loan_kind;


        $db = mysqli_connect('localhost','root','','portabilidad') or die('Error connecting to MySQL server.');

        $sql = "INSERT INTO porta_credito VALUES ('$email', $celular, $loan_kind)";

        if (mysqli_query($db, $sql)) {
            echo '<script language="javascript">alert("¡Recibimos tu RUT! Te escribiremos cuando estemos listos, Nos vemos");</script>';
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($db);
        }
        mysqli_close($db);
        }
    

?>