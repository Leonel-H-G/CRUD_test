<div class="pagetitle">
    <h1>Administración de usuarios</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Incio</a></li>
            <li class="breadcrumb-item active">Administración de usuarios</li>
        </ol>
    </nav>
</div>
<section class="section dashboard">
    <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
            <div class="row">
                <div class="col-8">
                    <div class="card top-selling overflow-auto">

                        <div class="card-body pb-0">
                            <h5 class="card-title">Usuarios <span>| Lista de usuarios </span></h5>

                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Apellido</th>
                                        <th scope="col">Dirección</th>
                                        <th scope="col">Mail</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Editar</th>
                                        <th scope="col">Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="#" class="text-primary fw-bold">Panchito</a></td>
                                        <td><a href="#" class="text-primary fw-bold">Perez</a></td>
                                        <td>Av. Siempre viva</td>
                                        <td>panchito@mail.com</td>
                                        <td>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected disabled> Seleccionar una opción</option>
                                                <?php foreach ($statusTypes as $status) : ?>
                                                    <option value="<?= $status->id_users_status ?>"><?= $status->status_description ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </td>
                                        <td><button type="button" class="btn btn-success editUser" data-id-user=""><i class="bi bi-pencil-square"></i></button></td>
                                            <td><button type="button" class="btn btn-danger deleteUser" data-id-user=""><i class="bi bi-trash-fill"></i></button></td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>

                    </div>
                </div>
                <div class="col-4">
                    <div class="card-body">
                        <h5 class="card-title">Registrar nuevo usuario</h5>


                        <div class="col-md-12">
                            <label for="name" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="name">
                        </div>
                        <div class="col-md-12">
                            <label for="lastname" class="form-label">Apellidos</label>
                            <input type="text" class="form-control" id="lastname">
                        </div>
                        <div class="col-12">
                            <label for="address" class="form-label">Dirección</label>
                            <input type="text" class="form-control" id="address">
                        </div>
                        <div class="col-md-12">
                            <label for="mail" class="form-label">Mail</label>
                            <input type="email" class="form-control" id="mail">
                        </div>
                        <div class="text-center">
                            <button class="btn btn-primary btnSaveUser" id="btnActionUser">Guardar</button>
                            <button class="btn btn-secondary clearForm">Limpiar</button>
                        </div>


                    </div>
                </div>
            </div>
        </div>

    </div>
</section>