<?php 

include('register.php');
$con=mysql_connect($host,$user,$pw) or die ("Problemas al conectar server");
mysql_select_db($db,$con) or die("Problemas al conectar database");

$result = mysql_query("SELECT * FROM productos" ) ; 
if ($row = mysql_fetch_array($result)){ 
echo "<table border = '100%' width='100%'> "; 
echo "<tr><td><strong>id_producto</strong></td><td><strong>producto</strong></td><td><strong>descripcion</strong></td><td><strong>precio_compra</strong></td><td><strong>precio_venta</strong></td></tr> "; 
do { 
echo "<tr><td>".$row['id_producto']."</td><td>".$row['producto']."</td><td>".$row['descripcion']."</td><td>".$row['precio_compra']."</td><td>".$row['precio_venta']."</td></tr> "; 
} while ($row = mysql_fetch_array($result)); 
echo "</table> "; 
} else { 
echo "Texto si no se encuentran resultados"; 
} 
?> 
