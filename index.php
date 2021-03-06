<?php

	require('./conexion.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--estilos-->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <title>Custom Report Management</title>
</head>
 <body>
    <!--INICIO DE LA PLANTILLA-->
    <div class="container">
    	<div class="jumbotron">
            <h1 class='text-center display-1'>FTMetrics</h1>
            <h1 class="text-center display-4">Custom Report Management</h1>
            <img src="img/image.png" style="display:block; margin:auto;"><br>
    <!--FIN DE LA PLANTILLA-->
            
            <!--inicio del formulario-->
            <form action="recibir.php" method="post">
            <div class="row">
                <div class="col-4">
                            <?php
                            $option = "SELECT RptParameterSetId as rptid, 
                                            RptReport as rptrpt, 
                                            ParentId as parent, 
                                            RptReportId as id, 
                                            title as label 
                                        FROM FTMetrics2.dbo.RptReport 
                                        ORDER BY ParentId";
                            // $sql = "SELECT id, label, link, parent FROM menus ORDER BY parent, sort, label";
                        if( isset( $conn ) ) {
                            $optionready = sqlsrv_prepare($conn,$option);
                            sqlsrv_execute($optionready);
                            // Create an array to conatin a list of items and parents
                            $menus = array(
                                    'items' => array(),
                                    'parents' => array()
                            );
                            // Builds the array lists with data from the SQL result
                            while ($items = sqlsrv_fetch_array($optionready)){
                                    // Create current menus item id into array
                                    $menus['items'][$items['id']] = $items;
                                    // Creates list of all items with children
                                    $menus['parents'][$items['parent']][] = $items['id'];
                                }
                            // Print all tree view menus
                            echo "<label for='tree'>Select Option</label>";
                            echo createTreeView(312 , $menus);
                        }else{
                            //en caso de la conexion falle
                            echo "Conexión no se pudo establecer.<br />";
                            die( "<strong>el error ha sido : </strong>".print_r( sqlsrv_errors(), true));
                        }
                            ?>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label for="fechaInicial">Start Time</label>
                        <input required id="fechaInicial" name="fechaInicial" class="form-control" type="datetime-local">
                    </div>
                    <div class="form-group">
                        <label for="fechaFinal">End Time</label>
                        <input required id="fechaFinal" name="fechaFinal" class="form-control" type="datetime-local">
                    </div>
                    <input class="btn btn-primary" type="submit" value="search">
                </div>
            </div>
            </form>
            
            <!--final del formulario-->
		</div>
	</div>
    
<!-- SCRIPTS DE ANIMACIONES -->
<script src="./js/jquery-3.3.1.min.js"></script>
<script src="./js/bootstrap.min.js"></script>

</body>
</html>