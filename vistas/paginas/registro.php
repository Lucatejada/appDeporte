<div class="container1" style="background-color:#ffffff">

    <?php
    if ($_SESSION['cuilRepetido'] == true) {
    ?>
        <div class="alert alert-danger text-center" role="alert">
            DNI repetido <br>
            por favor inicie sesion.
        </div>
    <?php
        unset($_SESSION["cuilRepetido"]);
    }
    ?>

    <form action="vistas/inicio.php?c=controladorRegistro&a=registrarUsuario" method="post" autocomplete="off" class="border px-4 pt-3 pb-3">

        <div class="row ">
            <p class="fs-4">Registro de usuarios</p>
        </div>

        <div class="row mb-3">
            <label for="" class="form-label">Nombre</label>
            <input type="text" placeholder="Ingrese su nombre" name="nombre" required="" autofocus class="form-control">
        </div>

        <div class="row mb-3">
            <label for="" class="form-label">Apellido</label>
            <input type="text" placeholder="Ingrese su apellido" name="apellido" required="" autofocus class="form-control">
        </div>

        <div class="row mb-3">
            <label for="" class="form-label">DNI</label>
            <input type="number" placeholder="Ingrese su DNI sin guiones ni puntos" name="cuil" required="" autofocus class="form-control">
        </div>

        <div class="row mb-3">
            <label for="" class="form-label">Telefono</label>
            <input type="number" placeholder="Ingrese su telefono" name="telefono" required="" autofocus class="form-control">
        </div>


        <div class="row mb-3">
            <label for="" class="form-label">Actividades</label>
            <select aria-label="Default select example" name="actividades" required="" class="form-control">
                <option selected>Seleccione la actividad</option>
                <?php
                foreach ($listaActividades as $actividades) {
                ?>
                    <option value="<?= $actividades['actividad_id'] ?>"> <?= $actividades['nombre'] ?></option>
                <?php
                }
                ?>
            </select>
        </div>

        <!-- distritos  -->
        
        <div class="row mb-3">
            <label for="" class="form-label">Distrito</label>
            <select aria-label="Default select example" name="distritos" required="" class="form-control">
                <option selected>Seleccione su distrito</option>
                <?php
                foreach ($listaDistritos as $distritos) {
                ?>
                    <option value="<?= $distritos['id'] ?>"> <?= $distritos['nombre'] ?></option>
                <?php
                }
                ?>
            </select>
        </div>

        <!-- Roles -->

        <div class="row mb-3">
            <label for="" class="form-label">Rol</label>
            <select aria-label="Default select example" name="roles" required="" class="form-control">
                <option selected>Seleccione el rol</option>
                <?php
                foreach ($listaRoles as $roles) {
                ?>
                    <option value="<?= $roles['id'] ?>"> <?= $roles['nombre'] ?></option>
                <?php
                }
                ?>
            </select>
        </div>

        <div class="text-right">
            <button type="submit" class="btn btn-primary">Iniciar sesión</button>
        </div>
    </form>

</div>