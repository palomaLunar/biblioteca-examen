<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bibliotk</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>

  <main class="container d-flex justify-content-center">
    <section class="card col-5 mt-5">
      <div class="card-header">BIBLIO-TK</div>
      <div class="card-body">
        <form action="?c=inicio&a=login" method="post">
          <div class="mb-3">
            <label for="admin" class="form-label">Administrador</label>
            <input type="text" name="admin" class="form-control" id="admin">
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" name="password" class="form-control" id="password">
          </div>
          <div class="text-center">
            <button type="submit" name="btnAcceder" class="btn btn-primary">Acceder</button>
          </div>
        </form>
      </div>
    </section>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</html>

</body>

</html>