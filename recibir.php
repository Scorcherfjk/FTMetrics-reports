<?php

    /********************ESTABLECER NOMBRE DEL SERVIDOR******************/
    $server = "w2k12xpoc";

    /***************************NO MODIFICAR*****************************/
    $seleccion = $_POST['seleccion'];
    $formateadaInicial = str_replace("T","%20",$_POST['fechaInicial']).":00";
    $formateadaFinal = str_replace("T","%20", $_POST['fechaFinal']).":00";

    /*************************URL FINAL DEL REPORTE***********************/
    $url = "http://".$server."/ReportServer/Pages/ReportViewer.aspx?/ReportExpert/Dashboard&rs:ClearSession=true&rc:Parameters=false&rc:Toolbar=true&rc:LinkTarget=frameContent&RptParameterSetId=".$seleccion."&RptParameterSet=".$seleccion."%7C3%7C-1%7C0%7C101%7C1%7Ctrue%7C-2%7C1%7C100%7C1%7Ctrue%7C-3%7C2%7C8%7C0%7Ctrue%7C0%7C0%7C1%7C-1%7C1%7Cfalse%7C".$formateadaInicial."%7C".$formateadaFinal."%7C%7C%7C%7C0%7C--%20All%20--%7Cfalse%7C0%7C0%7C1%7Ctn:Default%7C";
    
    /***************************REDIRECCION******************************/
    header("location:".$url);

?>