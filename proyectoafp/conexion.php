<?php
function dbConnect (){
    
    $link=mysql_connect("localhost", "root","");
    mysql_select_db("capitalizados",$link) OR DIE ("Error: No es posible establecer la conexión");
    return $link;
 }
 ?>