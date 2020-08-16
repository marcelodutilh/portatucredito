<?php
    //Step1 connection
    $email = $_REQUEST['email'];
    $server = 'localhost';
    $userName = 'cuentago_mdm1995';
    $pass = 'portabilidad2020';
    $table = 'cuentago_portabilidad';


    //$userName = 'root';
    //$pass = '';
    //$table = 'portabilidad';



    $db = mysqli_connect($server,$userName,$pass,$table) or die('Error connecting to MySQL server.');


    $sql = "INSERT INTO email(email) VALUES ('$email')";

    if (mysqli_query($db, $sql)) {
        //Agregar Modal
        //echo '<script language="javascript">alert("¡Recibimos tus datos! Te enviaremos el cálculo de tu nueva cuota lo antes posible!");</script>';
    } else {
        //Agregar Modal de Error
        echo "Error: " . $sql . "<br>" . mysqli_error($db);
    }
    mysqli_close($db);
    




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



        $server = 'localhost';
        $userName = 'cuentago_mdm1995';
        $pass = 'portabilidad2020';
        $table = 'cuentago_portabilidad';


        //$userName = 'root';
        //$pass = '';
        //$table = 'portabilidad';



        $db = mysqli_connect($server,$userName,$pass,$table) or die('Error connecting to MySQL server.');

    
        $sql = "INSERT INTO porta_credito (email, bank, ammount, pay, term, payments, latePayments, rut) VALUES ('$email', '$bank', '$ammount','$pay','$term','$payments','$latePayments','$rut')";

        if (mysqli_query($db, $sql)) {
            //Agregar Modal
            echo '<script language="javascript">alert("¡Recibimos tus datos! Te enviaremos el cálculo de tu nueva cuota lo antes posible!");</script>';
        } else {
            //Agregar Modal de Error
            echo "Error: " . $sql . "<br>" . mysqli_error($db);
        }
        mysqli_close($db);
        }
    

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Porta tu crédito</title>
</head>

<body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand" href="#">Porta tu crédito</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="../../index.html">Inicio</a>
                <a class="nav-item nav-link" href="comoFunciona.html">Cómo funciona</a>
                <a class="nav-item nav-link" href="#">Quiénes somos</a>
            </div>
        </div>
    </nav>
    <div class="main-section mt-2">
       
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6 mt-5">
                    <div class="form-background">
                        <h1 class="main-section_title pt-4 pb-3">Solo necesitamos estos datos para poder ayudarte</h1>
                        <form class="pt-2 pb-2  mr-2 ml-2" action="complete-form.php" method="POST">

                            <div class="form-group">
                                <input type="email" class="form-control main-input" id="email2" aria-describedby="emailHelp"
                                    placeholder="Ingresa tu email" name="email" required>
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control main-input" id="rut"
                                    placeholder="Ingresa tu rut" name="rut" required>
                            </div>
                            
                            <div class="form-group">
                                <input type="text" class="form-control main-input" id="bank"
                                    placeholder="Banco casa comercial" name="bank" required>

                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control main-input" id="ammount"
                                    placeholder="Monto solicitado" name="ammount" required>

                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control main-input" id="pay"
                                    placeholder="Monto de la cuota" name="pay" required>

                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control main-input" id="term"
                                    placeholder="Número de cuotas" name="term" required>

                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control main-input" id="payments"
                                    placeholder="Número de cuotas pagadas" name="payments" required>

                            </div>
                            <div class="form-group">
                                
                                <input type="number" class="form-control main-input" id="late-payments"
                                    placeholder="Número de cuotas atrasadas" name="latePayments" required>

                            </div>


                            <!-- Campo celular -->
                            
                                <!-- 
                                 <div class="form-group">
                                <label class=form-input-title for="celular">Celular</label>
                                <input type="text" class="form-control" id="celular" placeholder="Ingresa tu celular"
                                    name="celular">
                                </div>
                                -->
                           
                            
                           <!-- <div class="form-group">
                                <label class=form-input-title for="institution">Institución</label>
                                <input type="text" class="form-control" id="institution"
                                    placeholder="¿Con quién mantienes tu crédito?" name="institution">
                            </div>
                            <div class="form-group">
                                <label class=form-input-title for="loan-amount">Monto del crédito</label>
                                <input type="text" class="form-control" id="loan-amount"
                                    placeholder="Ingresa el monto aproximado de tu crédito" name="loan_kind">
                            </div>
                            <div class="form-group">
                                <label class=form-input-title for="institution">Institución</label>
                                <input type="text" class="form-control" id="institution"
                                    placeholder="¿Con quién mantienes tu crédito?" name="institution">
                            </div>

                            <div class="form-group">
                                <label class=form-input-title for="loan_term">¿Cuántos meses te quedan por
                                    pagar?</label>
                                <select class="form-control" id="loan_term" name="loan_term">
                                    <option>1-3</option>
                                    <option>4-6</option>
                                    <option>7-9</option>
                                    <option>10-12</option>
                                    <option>13+</option>
                                </select>
                            </div>
                            <input type="hidden" class="form-control" id="source" name="source">
                            <input type="hidden" class="form-control" id="medium" name="medium">
                            <input type="hidden" class="form-control" id="campaign" name="campaign">
                            -->


                            <button  type="submit" class="btn btn-secondary btn-form main-submit mb-5" name=someAction><strong>Quiero saber cuanto puedo bajar la cuota </strong></button>
                        </form>

                    </div>

                </div>
                <div class="col-md-6 mt-3">
                    <img class="img-fluid fix" src="../images/woman-happy.png" alt="">

                </div>
            </div>
        </div>

    </div>

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-12 mt-3">
                    <div class="container">
                        <div class="row d-flex justify-content-between">
                            <div col-md-6>
                                <p><strong>portatucredito.com ®</strong></p>
                            </div>
                            <div col-md-6> 
                                <p>“Porque queremos mejorar las condiciones”</p>
                            </div>
                        </div>

                    </div>
                    
                    
                </div>
            </div>
        </div>
    </div>

    <script src="../js/completeForm.js"></script>





    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>