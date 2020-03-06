<html>
  <head>
    <title>Mi primera pagina web</title>
  </head>
<body background="img/WhatsApp Image 2020-03-04 at 8.01.22 PM.jpeg">
<table width="100">
	<tr>
		<td width="100%"><img src="img/cbtis.png"></td>
	</tr>
</table>
   

        <section id="contacto">
            <?php
                if(@$_GET['i']=='ok') { // QUIERE DECIR QUE EL FORMULARIO SE ENVIO CORRECTAMENTE ?>

                <h3>La consulta se envio correctamente. Nos contactaremos a la brevedad.</h3>

                <?php
      } else{
      ?>


                    <div class="contenedor">

                        <h3>Contacto</h3>
                        <form action="envio-formulario.php" method="POST" enctype="multipart/form-data">

                            <input type="text" placeholder="Nombre" name="nombre" required>
                            <input type="email" placeholder="Correo" name="email" required>
                            <textarea placeholder="Mensaje" name="mensaje" required></textarea>
                            <input type="submit" value="ENVIAR MENSAJE">


                            </form>
          <?php } ?>
</body>
</html>