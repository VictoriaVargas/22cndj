<?php
/**
 * This is just an example of how a file could be processed from the
 * upload script. It should be tailored to your own requirements.
 */

// Only accept files with these extensions
$whitelist = array('jpg', 'jpeg', 'png', 'gif');
$name      = null;
$error     = 'No se pudo subir.';
$aleatorio = mt_rand();
if (isset($_FILES)) {
	if (isset($_FILES['comprobante'])) {
		$tmp_name = $_FILES['comprobante']['tmp_name'];
		$name     = basename($_FILES['comprobante']['name']);
		$error    = $_FILES['comprobante']['error'];
		
		if ($error === UPLOAD_ERR_OK) {
			$extension = pathinfo($name, PATHINFO_EXTENSION);

			if (!in_array($extension, $whitelist)) {
				$error = 'El formato no es soportado.';
			} else {
				move_uploaded_file($tmp_name, $_SERVER["DOCUMENT_ROOT"]."assets/comprobantes/".$aleatorio.".".$extension);
			}
		}
	}
}

echo json_encode(array(
	'name'  => $aleatorio.".".$extension,
	'error' => $error,
));
die();
