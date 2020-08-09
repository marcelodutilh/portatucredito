
<?php
    //Step1 connection

    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['someAction']))
    {
        func();
    }
    function func(){

        $email = $_REQUEST['email'];
        $bank = $_REQUEST['bank'];
        $ammount = $_REQUEST['ammount'];
        $pay = $_REQUEST['pay'];
        $term = $_REQUEST['term'];
        $payments = $_REQUEST['payments'];
        $latePayments = $_REQUEST['latePayments'];
        $rut = $_REQUEST['rut'];

        $db = mysqli_connect('localhost','root','','portabilidad') or die('Error connecting to MySQL server.');

        $sql = "INSERT INTO porta_credito VALUES ('$email', '$bank', '$ammount','$pay','$term','$payments','$latePayments','$rut')";

        if (mysqli_query($db, $sql)) {
            echo '<script language="javascript">alert("¡Recibimos tus datos! Completa los campos siguientes y te conseguiremos la mejor oferta");</script>';
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($db);
        }
        mysqli_close($db);
        }
    

?>
