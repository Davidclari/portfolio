<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if($_POST){
    $usuario = $_REQUEST["txtUsuario"];
    $clave = $_REQUEST["txtClave"];

    If($usuario !="" && $clave!= ""){
        header("location: acceso-confirmado.php");
    }else {
         $msg="Válido para usuarios registrados";

}
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="../css/bootstrap/css/bootstrap.min.css">
    <script src="../css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <title>Logín</title>

</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center py-5">
                <h1>Formulario de Ingreso</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                
                <?php if(isset($msg)): ?>
                <div class="alert alert-danger" role="alert">
                <?php  echo $msg;?>
            </div>
            <?php endif;?>
                <form action="" method="post">
                    <div class="pb-3">
                        <label for="">Usuario</label>
                        <input type="text" name="txtUsuario" id="txtUsuario" class="form-control">
                    </div>
                    <div class="pb-3">
                        <label for="">Clave</label>
                        <input type="password" name="txtClave" id="txtClave"class="form-control">
                    </div>
                    <div class="pb-3">
                        <button type="submit" name="btnIngrsar"class="btn btn-primary">Enviar</button>
                        
                    </div>
                </form>

            </div>

        </div>

    </main>
    
</body>
</html>