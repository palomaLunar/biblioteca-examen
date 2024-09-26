<link rel="stylesheet" href="../style.css">
<form>
    <H1>Formulario nuevo miembro</H1>
  <fieldset>
    <legend><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">REGISTRO DE NUEVO MIEMBRO</font></font></legend>



    <div>
      <label for="idMiembro" class="form-label mt-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;" >ID de usuario</font></font></label>
      <input type="number" name="idMiembro" class="form-control" id="idMiembro" rows="1"></input>
    </div>

    <div>
      <label for="nombreM" class="form-label mt-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;" > Nombre del Usuario</font></font></label>
      <input type="text"  name="nombreM" class="form-control" id="nombreM" rows="1"></input>
    </div>

    <div>
      <label for="apellido" class="form-label mt-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;" >Apellidos de Usuario</font></font></label>
      <input type="text" name="apellido" class="form-control" id="apellido" rows="1"></input>
    </div>

    <div>
      <label for="direccion" class="form-label mt-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;" >Direcciion del Usuario</font></font></label>
      <input type="text" name="direccion" class="form-control" id="direccion" rows="1"></input>
    </div>

    <div>
      <label for="telefono" class="form-label mt-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;" >Telefono del usuario</font></font></label>
      <input type="tel" name="telefono" class="form-control" id="telefono" rows="1"></input>
    </div>

    <div>
      <label for="fechaInscripcion" class="form-label mt-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;" >Fecha de inscripcion</font></font></label>
      <input type="datetime" name="fechaInscripcion" class="form-control" id="fechaInscripcion" rows="1"></input>
    </div>
    
     </fieldset>
    <div>
      <label for="correo" class="form-label mt-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Dirección de correo electrónico</font></font></label>
      <input type="email" class="form-control" id="correo" aria-describedby="emailHelp" placeholder="Introducir correo electrónico">
      <small id="emailHelp" class="form-text text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nunca compartiremos su correo electrónico con nadie más.</font></font></small>
    </div>
    <button type="submit" class="btn btn-primary"><font style="vertical-align: inherit;"  ><font style="vertical-align: inherit;" >Entregar</font></font></button>
  </fieldset>
</form>