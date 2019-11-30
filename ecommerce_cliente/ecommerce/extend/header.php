<?php include '../conexion/conexion.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ecommerce</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <style>
    body{
        padding-bottom:10px;
    }
    </style>
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
    <a href="#" class="navbar-brand">Fisitex Gestion</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="menu">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item mr-auto">
                <a href="../admin/inventario.php" class="nav-link">Inventario</a>
            </li>

            <li class="nav-item dropdown" >
                    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categorias</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a href="../admin/categorias.php?opc=GENERAL" class="dropdown-item">GENERAL</a>
                        <a href="../admin/categorias.php?opc=MUJERES" class="dropdown-item">MUJERES</a>
                        <a href="../admin/categorias.php?opc=VARONES" class="dropdown-item">VARONES</a>
                        <a href="../admin/categorias.php?opc=TELAS" class="dropdown-item">TELAS VARIADAS</a>
                    </div>
                </li>
        </ul>

        <button class="btn btn-dark" id="logout"> Cerrar Sesion</button>

    </div>
    </nav>



    
