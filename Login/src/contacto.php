<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Contacto</title>
  <link rel="stylesheet" href="src/resources/main.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body class="body" >
  <header>
  <?php include_once('nav.php') ?>
  </header>

  <main>
    <section class="contact">
      <h1>Contacto</h1>
      <form >
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre">

        <label for="correo">Correo electrónico</label>
        <input type="email" id="correo" name="correo">

        <label for="mensaje">Mensaje</label>
        <textarea id="mensaje" name="mensaje"  ></textarea>

        <button type="submit">Enviar</button>
      </form>
    </section>
  </main>

  <footer>
    <p class="text-center" >Derechos reservados &copy; 2023</p>
  </footer>

  <script src="script.js"></script>
</body>
</html>
