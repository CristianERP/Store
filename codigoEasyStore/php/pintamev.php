<?php 
		require_once 'connection.php';

		$conn = new conectar();
		$conexion = $conn->conexion();
		$salida = "";

		$con= "SELECT * FROM articulo"; 
		$r= mysqli_query($conexion,$con);
		$c=0;
		while ($fil= mysqli_fetch_array($r)){
		
			$salida.="	
			<div class='col'>
			<div class='card'>
			
			<div class='card-body'><img class='my-2 imgproduc-cate' src='".$fil['foto1']."'>
			</div>

			<div class='card-footer'><h4 class='text-center'>".$fil['nombre']."</h4>
			</div>
			
			</div>
			</div>
";





				$f1[$c]= $fil["foto1"];
				$f2[$c]= $fil["foto2"];
				$f3[$c]= $fil["foto3"];
				$n[$c]=$fil["nombre"];
				$cant[$c]=$fil["cantidad"];
				$des[$c]=$fil["descripcion"];
				$pre[$c]=$fil["precio"];

				$c=$c+1;
		}

		// return [$f1,$f2,$f3,$n,$cant,$des,$pre];
		echo $salida;
		
	 ?>
	 