<?php

    require("conexion.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/main.css">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <div class="form-group">
            <label for="Company">Company</label>
            <select id="Company" name="Company" class="custom-select">
                <?php
                //contruccion de las opciones
                $option = "SELECT title FROM FTMetrics2.dbo.RptReport where ParentId is null ";
                $optionready = sqlsrv_prepare($conn,$option);
                sqlsrv_execute($optionready);
                $i = 0;
                while ($row = sqlsrv_fetch_object($optionready)){
                    echo "<option value='".$row->title."'>".$row->title."</option>";	
                } 
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="fechaInicial">Fecha Inicial</label>
            <input id="fechaInicial" class="form-control" type="datetime-local">
        </div>
        <div class="form-group">
            <label for="fechaFinal">Fecha Final</label>
            <input id="fechaFinal" class="form-control" type="datetime-local">
        </div>
        <input class="btn btn-info" type="submit" value="buscar">
    </form>
    
</body>
</html>