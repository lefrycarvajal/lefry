<?php
include('spotify_conexion.php');

if (isset($_POST['enviar'])) {

	if (
		strlen($_POST['nombre']) >= 1 &&

		strlen($_POST['correo']) >= 1 &&

		strlen($_POST['telefono']) >= 1 &&

		strlen($_POST['asunto']) >= 1 &&

		strlen($_POST['mensaje']) >= 1
	) {


		$nombre = trim($_POST['nombre']);
		$correo = trim($_POST['correo']);
		$telefono = trim($_POST['telefono']);
		$asunto = trim($_POST['asunto']);
		$mensaje = trim($_POST['mensaje']);
		$consulta = "INSERT INTO contacto (nombre, correo, telefono, asunto, mensaje) VALUES ('$nombre','$correo','$telefono','$asunto','$mensaje')";
		$resultado = mysqli_query($conex, $consulta);
		if ($resultado) {


?>
			<div class="container">
				<div class="alert alert-succes alert-dismissible fade show" role="alert">
					<strong> Oh Yeah!</strong> your message has been received.
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			</div>
		<?php
		} else {
		?>
			<div class="container">
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<strong>Oops!</strong> An error has occurred please try again.
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			</div>

		<?php
		}
	} else {

		?>
		<div class="container">
			<div class="alert alert-warning alert-dismissible fade show" role="alert">
				<strong>Hey!</strong> please fill in the fields.
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
		</div>
<?php

	}
}




?>

