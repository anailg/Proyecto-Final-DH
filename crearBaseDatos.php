<?php 
	
	function crearBaseDeDatos() {


		$dsn = "mysql:host=localhost;charset=utf8;port=3306";
		$username = 'root';
        $password = ''; 
        $dbname='cooking_company';   

                
        try {	$conn = new PDO($dsn, $username, $password);
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
				echo "Connected succesfully</br>";
		} catch (PDOException $e) {
				echo "Connection failed</br>".$e;
				exit;	
		}
		
		$sql = 'CREATE DATABASE IF NOT EXISTS '.$dbname;
		
		try {		
			$conn->exec($sql);
			echo "Database created successfully <br/>";
			$dsn = "mysql:host=localhost;dbname=".$dbname.";charset=utf8;port=3306";
			$db = new PDO($dsn, $username, $password);
			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		catch (PDOException $e){
			echo 'Error<br/>'.$e;
			exit;
		}        

		
		$sqlTablaDireccion = 
			"CREATE TABLE IF NOT EXISTS direcciones (
				id int NOT NULL AUTO_INCREMENT UNIQUE KEY PRIMARY KEY,
				user_id int NOT NULL,
				principal boolean NOT NULL DEFAULT true,
				calle varchar(200) NOT NULL,
				codigo_postal varchar(8),
				localidad varchar (100) NOT NULL,
				provincia varchar(50) NOT NULL,
				CONSTRAINT FK_userDir FOREIGN KEY (user_id) REFERENCES users (id)
				) ";

		$sqlTablaTelefono = 
			"CREATE TABLE IF NOT EXISTS telefonos(
				id int NOT NULL AUTO_INCREMENT UNIQUE KEY PRIMARY KEY,
				user_id int NOT NULL,
				tipo_tel varchar(10) NOT NULL,
				codigo_pais smallint NOT NULL,
				codigo_area smallint NOT NULL, 
				numero smallint NOT NULL,				
				CONSTRAINT FK_userTel FOREIGN KEY (user_id) REFERENCES users (id),
				CONSTRAINT FK_tipoTel FOREIGN KEY (tipo_tel) REFERENCES tipo_tel (id)
			)";

		
		$sqlTablaProducto = 
			"CREATE TABLE IF NOT EXISTS productos (
				id int NOT NULL AUTO_INCREMENT UNIQUE KEY PRIMARY KEY,
				nombre varchar(20) NOT NULL UNIQUE,
				descripcion varchar(500),
				especificaciones varchar(500),
				imagen varchar(100),
				activo boolean default	true,
				precio float NOT NULL DEFAULT 0	
			)";

		$sqlTablaCategoria = 
			"CREATE TABLE IF NOT EXISTS categorias (
				id int NOT NULL AUTO_INCREMENT UNIQUE KEY PRIMARY KEY,
				nombre varchar(20) NOT NULL UNIQUE
			)";

		$sqlTablaProdCateg = 
			"CREATE TABLE IF NOT EXISTS producto_categoria (
    			id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
				producto_id int NOT NULL,
				categoria_id int NOT NULL,
				CONSTRAINT UK_prodCateg UNIQUE KEY (producto_id, categoria_id),
				CONSTRAINT FK_producto FOREIGN KEY (producto_id) REFERENCES productos (id),
				CONSTRAINT FK_categoria FOREIGN KEY (categoria_id) REFERENCES categorias (id)
			)";	

		$sqlTablaPomociones = 
			"CREATE TABLE IF NOT EXISTS promociones (
				id int NOT NULL AUTO_INCREMENT UNIQUE KEY PRIMARY KEY,
				vigente_desde datetime NOT NULL,
				nombre varchar(12),
				titulo varchar(20) NOT NULL UNIQUE,
				descripcion varchar(500),				
				imagen varchar(100),
				created_at timestamp
			)";


		try {		
			$db->exec($sqlTablaCliente);
			$db->exec($sqlTablaDireccion);
			$db->exec($sqlTablaTipoTel);
			$db->exec($sqlTablaTelefono);			
			$db->exec($sqlTablaProducto);
			$db->exec($sqlTablaCategoria);
			$db->exec($sqlTablaProdCateg);
			echo "Tables created successfully <br/>";
		}
			catch (PDOException $e){
			echo '<br/>Could not create table<br/><br/>'.$e;
			exit;
		}   
   }	     

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Migración de JSON a MySQL - Cooking Company</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/migrar.css">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Poppins">	
</head>

<body>

	<div class=container>

	<div class=container-2>
		<h3>Se creará la base de datos de MySQL 'cooking_company'. Espere por favor ...</h3>
		<?php  
			crearBaseDeDatos();		
		?>

		<div class="btn_continuar">
			<a href="menuMigrar.php">Volver</a> <br>
		</div> 

	</div>	
	</div>



</body>
</html>
