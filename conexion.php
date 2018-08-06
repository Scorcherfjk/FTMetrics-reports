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
function createTreeView($parent, $menu) {
   $html = "";
   if (isset($menu['parents'][$parent])) {
      $html .= "
      <ol class='tree'>";
       foreach ($menu['parents'][$parent] as $itemId) {
          if(!isset($menu['parents'][$itemId])) {
             $html .= "<li><label class='peque' for='subfolder2'><a href='".$menu['items'][$itemId]['link']."'>".$menu['items'][$itemId]['label']."</a></label><input type='checkbox' name='subfolder2'/></li>";
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