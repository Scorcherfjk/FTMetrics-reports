<?php

    /********************ESTABLECER NOMBRE DEL SERVIDOR******************/
    $server = "w2k12xpoc";

    /***************************NO MODIFICAR*****************************/
    $seleccion =substr($_POST['seleccion'],0,3);
    $Dashboard =substr($_POST['seleccion'],4);
    $formateadaInicial = str_replace("T","%20",$_POST['fechaInicial']).":00";
    $formateadaFinal = str_replace("T","%20", $_POST['fechaFinal']).":00";

    /*************************URL FINAL DEL REPORTE***********************/

    $url = "http://".$server."/ReportServer/Pages/ReportViewer.aspx?/ReportExpert/".$Dashboard."&rs:ClearSession=true&rc:Parameters=false&rc:Toolbar=true&rc:LinkTarget=frameContent&RptParameterSetId=".$seleccion."&RptParameterSet=".$seleccion."%7C3%7C-1%7C0%7C101%7C1%7Ctrue%7C-2%7C1%7C104%7C1%7Ctrue%7C-3%7C2%7C8%7C0%7Ctrue%7C1%7C-1%7C0%7C34%7Cfalse%7C1%7C-1%7C1000032%7C1%7C-1%7C1%7Cfalse%7C".$formateadaInicial."%7C".$formateadaFinal."%7C%7C%7C%7C0%7C--%20All%20--%7Cfalse%7C1%7C-1%7C102%7C0%7C-1%7C0%7C0%7C1%7Ctn:Default%7C";
    
    $url = "http://".$server."/ReportServer/Pages/ReportViewer.aspx?/ReportExpert/".$Dashboard."&rs:ClearSession=true&rc:Parameters=false&rc:Toolbar=true&rc:LinkTarget=frameContent&RptParameterSetId=".$seleccion."&RptParameterSet=".$seleccion."%7C3%7C-4%7C0%7C101%7C1%7Ctrue%7C-5%7C1%7C104%7C1%7Ctrue%7C-6%7C2%7C8%7C0%7Ctrue%7C1%7C-2%7C0%7C111%7Ctrue%7C1%7C-2%7C1000032%7C1%7C-2%7C1%7Cfalse%7C".$formateadaInicial."%7C".$formateadaFinal."%7C%7C%7C%7C0%7C--%20All%20--%7Cfalse%7C5%7C-6%7C101%7C0%7C-1%7CParadas%7C-7%7C13%7C1%7C-1%7CApex%7C-8%7C13%7C1%7C-1%7CCostado%7C-9%7C13%7C1%7C-1%7CProtectores%7C-10%7C13%7C1%7C-1%7CRodado%7C0%7C1%7Ctn:Default%7C";


    /***************************REDIRECCION******************************/

    header("location:".$url);

?>