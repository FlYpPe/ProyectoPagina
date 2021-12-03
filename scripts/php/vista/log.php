<!doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Login</title>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' rel='stylesheet'>
    <link href='' rel='stylesheet'>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <style>
        body {
            background-color: #f9f9fa
            font-size: 1.9rem;
        }
        
        .flex {
            -webkit-box-flex: 1;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto
        }

        @media (max-width:991.98px) {
            .padding {
                padding: 1.5rem
            }
        }

        @media (max-width:767.98px) {
            .padding {
                padding: 1rem
            }
        }

        .padding {
            padding: 5rem
        }

        .card {
            background: #fff;
            border-width: 0;
            border-radius: .25rem;
            box-shadow: 0 1px 3px rgba(0, 0, 0, .05);
            margin-bottom: 1.5rem
        }

        .card-header {
            background-color: transparent;
            border-color: rgba(160, 175, 185, .15);
            background-clip: padding-box
        }

        .card-body p:last-child {
            margin-bottom: 0
        }

        .card-hide-body .card-body {
            display: none
        }

        .form-check-input.is-invalid~.form-check-label,
        .was-validated .form-check-input:invalid~.form-check-label {
            color: #f54394
        }
    </style>

<script src="logValidar.js"></script>
</head>

<body   style="font-size: 1.9rem">

<?php
        require_once('header.php');
    ?>  

    <div  class="flex">
        <div class="">
            <div class="page-content page-container" id="page-content">
                <div class="padding">
                    <div class="row" style="margin-left: 250px">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header"><strong>Login</strong></div>
                                <div class="card-body">
                                    <form action="../controlador/validar_usuario.php" method="POST">
                                        <div class="form-group"><label class="text-muted" for="exampleInputEmail1">Email
                                                address</label><input  class="form-control"
                                                id="Id" aria-describedby="emailHelp"
                                                placeholder="Enter email" name="caja_usuario"> <small id="emailHelp"
                                                class="form-text text-muted">We don't share email with anyone</small>
                                        </div>
                                        <div class="form-group"><label class="text-muted"
                                                for="exampleInputPassword1">Password</label><input type="password"
                                                class="form-control" id="Nombre" placeholder="Password" name="caja_contraseña">
                                            <small id="Nombre" class="form-text text-muted">your password is saved
                                                in encrypted form</small></div>
                                        <div class="form-group">
                                            <div class="form-check"><input type="checkbox"
                                                    class="form-check-input"><label class="form-check-label"> Check me
                                                    out</label></div>
                                        </div> <button type="submit" class="btn btn-primary" onclick="return validacion()">Submit</button>
                                    </form>

                                <br><label class="form-check-label"> Si no esta registrado</label>  
                                <label class="form-check-label"><a href="registro.php">Registrarse</a> </label>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type='text/javascript'
        src='https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js'></script>

</body>

</html>