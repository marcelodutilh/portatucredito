
<?php
    //Step1 connection

    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['someAction']))
    {
        func();
    }
    function func(){

        $email = $_REQUEST['email'];
        $celular = $_REQUEST['celular'];

        $db = mysqli_connect('localhost','root','','portabilidad') or die('Error connecting to MySQL server.');

        $sql = "INSERT INTO porta_credito VALUES ('$email', $celular)";

        if (mysqli_query($db, $sql)) {
            echo '<script language="javascript">alert("¡Recibimos tus datos! Completa los campos siguientes y te conseguiremos la mejor oferta");</script>';
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($db);
        }
        mysqli_close($db);
        }
    

?>