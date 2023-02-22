<?php
    if ($ajax){
        require_once "../models/loginmodel.php";
        require_once "../view/core/conexion.php";
    } else {
        require_once "./models/loginmodel.php";
        require_once "./view/core/conexion.php";
    }

    class logincontrolador extends LoginModel{

        public function iniciar_sesion_controlador(){
            $usuario = $_POST['usuario'];
            $password = $_POST['password'];

            // $clave=mainModel::encryption($clave);

            $datosLogin=[
                "usuario"=>$usuario,
                "password"=>$password
            ];

            $datosCuenta = LoginModel::iniciar_sesion($datosLogin);

            $rowCount = $datosCuenta->rowCount();

            $row = $datosCuenta->fetchAll(PDO::FETCH_OBJ);

            if(empty($usuario) || empty($password)){
                $alerta=[
                    "Alerta"=>"simple",
                    "Titulo"=>"Campos vacíos",
                    "Texto"=>"Debe ingresar sus datos",
                    "Tipo"=>"error"
                ];
                // return mainModel::sweet_alert($alerta);
            }else{
                if($rowCount==1){
                    session_start();
                    $_SESSION['usuario']=$row['usuario'];

                    $url = "admin";

                    return $urlLocation = '<script> window.location="'.$url.'"</script>';
                }else{
                    $alerta=[
                        "Alerta"=>"simple",
                        "Titulo"=>"Ocurrió un error inesperado",
                        "Texto"=>"Datos incorrectos",
                        "Tipo"=>"error"
                    ];
                    // return mainModel::sweet_alert($alerta);
                }
            }
        }

        public function forzar_cierre_sesion(){
            session_destroy();
            return header("Location: cuenta");
        }
    }