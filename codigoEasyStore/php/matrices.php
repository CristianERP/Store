<?php 
$a= $_REQUEST["a"];
$b= $_REQUEST["b"];
$c= $_REQUEST["c"];
$d= $_REQUEST["d"];
$e=10;
$m1[]=array();
$m2[]=array();
$r[]=array();
#Dimension de matrices
if ($b==$c){
	# matriz 1
for ($i=0; $i < $a; $i++){
	for ($j=0; $j < $b; $j++){
	$m1[$i][$j]=rand(1,$e);
		
		}
}
 # matriz 2 
for ($i=0; $i < $d; $i++){
	for ($j=0; $j < $c; $j++){
	$m2[$i][$j]=rand(1,$e);
		
		}
}
 # matrizresultado en cero 
for ($i=0; $i < $a; $i++){
	for ($j=0; $j < $d; $j++){
	$r[$i][$j]=0;
		
		}
}

# matriz Resultado 
for ($i=0; $i < $a; $i++){
	for ($j=0; $j < $d; $j++){
		for($k=0; $k<$d;$k++){
	$r[$i][$j]=($m1[$i][$k]*$m2[$k][$j])+$r[$i][$j];
	}
	}

}

}else {
	echo 'las dimensiones no son correctas';
	 }
	 echo'
	 <body class="form-signin matrices">
     <div>
     <p> la matriz M_1 ['.$a.','.$b.']</p><br>
     <table style="border: 1px solid white; border-collapse: collapse;">' ;
     	for ($i=0; $i < $a; $i++){
    		echo '<tr style="border: 1px solid white; border-collapse: collapse;">';
		for ($j=0; $j < $b; $j++){
	 		echo'<th style="border: 1px solid white; border-collapse: collapse;">'.$m1[$i][$j].'</th>';
			}
			echo '</tr>';
		}
     		echo'</table>
     			</div>';

      echo'<div>
     <p> la matriz M_2 ['.$c.','.$d.']</p><br>
     <table style="border: 1px solid white; border-collapse: collapse;">' ;
     	for ($i=0; $i < $c; $i++){
    		echo '<tr style="border: 1px solid white; border-collapse: collapse;">';
		for ($j=0; $j < $d; $j++){
	 		echo'<th style="border: 1px solid white; border-collapse: collapse;">'.$m2[$i][$j].'</th>';
			}
			echo '</tr>';
		}
     		echo'</table>
     			</div>';

      echo'<div>
     <p> la matriz Resultado  ['.$a.','.$d.']</p>
     <table style="border: 1px solid white; border-collapse: collapse;">' ;
     	for ($i=0; $i < $a; $i++){
    		echo '<tr style="border: 1px solid white; border-collapse: collapse;">';
		for ($j=0; $j < $d; $j++){
	 		echo'<th style="border: 1px solid white; border-collapse: collapse;">'.$r[$i][$j].'</th>';
			}
			echo '</tr>';
		}
     		echo'</table>
				 </div>
				 </body>
     			';
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
	 <meta charset="UTF-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <title>Matrices</title>
	 <link rel="icon" href="../../datosEasyStore/img/logo.jpeg" sizes="32x32">
	 <link rel="stylesheet" href="../css/StyleRegistro.css">
 </head>
 <body>
	 
 </body>
 </html>
