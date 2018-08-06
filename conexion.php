<?php
	//conexion a la base de datos MsSQL

	//Datos de la conexion
	$serverName = "W2K12XPOC";
	$Database = "FTMetrics2" ;
	$UID = "FTMUser" ;
	$PWD = "FTMUser" ;

	//Realizando conexion con la Base de Datos
	$connectionInfo = array( "Database"=>$Database, "UID"=>$UID, "PWD"=>$PWD);
	if (sqlsrv_connect( $serverName, $connectionInfo)){
		$conn = sqlsrv_connect( $serverName, $connectionInfo);
	}

// function to create dynamic treeview menus
function createTreeView($parent, $menu, $n = 0) {  
    $html = "";
   if (isset($menu['parents'][$parent])) {
      $html .= "
      <ol class='tree'>";
       foreach ($menu['parents'][$parent] as $itemId) {
          if(!isset($menu['parents'][$itemId])) {
             $html .= "<li><label class='peque' for='".$menu['items'][$itemId]['id']."'>".$menu['items'][$itemId]['label']."</label><input type='radio' id='".$menu['items'][$itemId]['id']."' name='seleccion' value='".$menu['items'][$itemId]['rptid']."-".$menu['items'][$itemId]['rptrpt']."'/></li>";
          }
          if(isset($menu['parents'][$itemId])) {
             $html .= "<li><label for='subfolder3'>".$menu['items'][$itemId]['label']."</label> <input type='checkbox' name='subfolder3'/>";
             $html .= createTreeView($itemId, $menu);
             $html .= "</li>";
          }
       }
       $html .= "</ol>";
   }
   return $html;
}
?>