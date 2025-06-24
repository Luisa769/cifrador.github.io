<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="enviarCorreo.php">
  <p>
    <label for="nombre">Nombre:</label>
    <input name="nombre" type="text" id="nombre" size="35" maxlength="50" />
  </p>
  <p>
    <label for="correo">Correo:</label>
    <input name="correo" type="text" id="correo" size="35" maxlength="50" />
  </p>
  <p>
    <label for="telefono">Telèfono:</label>
    <input name="telefono" type="text" id="telefono" size="35" maxlength="60" />
  </p>
  <p>
    <label for="comentario">Comentario:</label>
    <textarea name="comentario" id="comentario" cols="45" rows="5"></textarea>
  </p>
  <p>
    <input type="submit" name="enviar" id="enviar" value="Enviar" />
  </p>
</form>
</body>
</html>
