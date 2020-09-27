<?php 
		require_once 'connection.php';

		$conn = new conectar();
		$conexion = $conn->conexion();
	
		

		$con= "SELECT * FROM articulo"; 
		$r= mysqli_query($conexion,$con);
		$c=0;
		while ($fil= mysqli_fetch_array($r)){
		
				$f1[$c]= $fil["foto1"];
				$f2[$c]= $fil["foto2"];
				$f3[$c]= $fil["foto3"];
				$n[$c]=$fil["nombre"];
				$cant[$c]=$fil["cantidad"];
				$des[$c]=$fil["descripcion"];
				$pre[$c]=$fil["precio"];
				$c=$c+1;
		}

		 return [$f1,$f2,$f3,$n,$cant,$des,$pre];
		
		
	 ?>
	 