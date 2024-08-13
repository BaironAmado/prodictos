<?php
$Precio1= $_POST ['Precio1'];
$Precio2= $_POST ['Precio2'];
$Precio3= $_POST ['Precio3'];
$suma= $Precio1+$Precio2+$Precio3;
$descuento= $suma*0.16;
$total= $suma-$descuento;
echo "el precio del producto uno es: ". $Precio1;
echo "el precio del producto dos es: ". $Precio2;
echo "el precio del producto tres es: ". $Precio3;
echo "la suma de los tres productos es: ".$suma;
echo "el total a pagar con un descuento del 0.16 es: ".$total;
?>
