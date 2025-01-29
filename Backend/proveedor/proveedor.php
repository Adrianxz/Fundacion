
<?php

$SelectGrupo = "SELECT * FROM `proveedor` ";

$QueryGrupo = mysqli_query($Conexion,$SelectGrupo);


$SelectMedida = "SELECT * FROM `unidadmedia` ";

$QueryMedida = mysqli_query($Conexion,$SelectMedida);

$QueryGrupo2 = mysqli_query($Conexion,$SelectGrupo);
$QueryMedida2 = mysqli_query($Conexion,$SelectMedida);

?>

<div class="main-panel">          
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="row">
           

                            <div class="col-md-4 grid-margin stretch-card">
                                <div class="card">
                                  <div class="card-body">
                                    <h4 class="card-title">PROVEEDOR</h4>
                                      <p class="card-description">
                                        Formulario para gestionar los proveedor.
                                      </p>
                                        <form class="forms-sample" method="post" id="Proveedor" >
                                          <div class="form-group">
                                            <label for="exampleInputUsername1">Id</label>
                                            <input type="text" class="form-control" id="exampleInputUsername1" placeholder="ID" value="ID" name="ID" readonly> 
                                          </div>

                                          <div class="form-group">
                                            <label for="exampleInputEmail1">Nombre</label>
                                            <input type="text" class="form-control" id="Descripcion" name="Descripcion" placeholder="Ingrese una descripcion" required>
                                          </div>

                                          <div class="form-group">
                                            <label for="exampleInputEmail1">Nit</label>
                                            <input type="text" class="form-control" id="Nit" maxlength="9" minlength="9" name="Nit" onkeypress="return event.charCode >= 48 && event.charCode <= 57" placeholder="Ingrese un Nit" required>
                                          </div>

                                          <div class="form-group">
                                            <label for="exampleInputEmail1">Dirección</label>
                                            <input type="text" class="form-control" id="Descripcion" name="direccion" placeholder="Ingrese una direccion" required>
                                          </div>

                                          <div class="form-group">
                                            <label for="exampleInputEmail1">Telefono</label>
                                            <input type="text" class="form-control" id="Descripcion" name="Telefono" maxlength="10" minlength="10" onkeypress="return event.charCode >= 48 && event.charCode <= 57" placeholder="Ingrese el telefono" required>
                                          </div>
                                          
                                          <div class="form-group">
                                            <label for="exampleInputEmail1">Correo</label>
                                            <input type="email" class="form-control" id="Descripcion" name="Correo" placeholder="Ingrese un correo" required>
                                          </div>
                                          
                                          <button type="button" id="AgregarProveedor" class="btn btn-primary mr-2">AGREGAR REGISTRO</button>
                                        </form>
                                    
                                  </div>
                                </div>
                              </div>

                              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h1 class="modal-title fs-5" style="font-size: 35px; font-family: sans-serif" id="exampleModalLabel">Actualizar</h1>
                                    </div>
                                    <div class="modal-body">
                                     <form id="update-form">
                                      <div class="mb-3">
                                        <label for="nombre" class="col-form-label">Nombre:</label>
                                        <input type="text" class="form-control" id="nombre" name="Nombre" required>

                                        <label for="nit" class="col-form-label">Nit:</label>
                                        <input type="text" class="form-control" id="nit" name="NitAc" maxlength="9" pattern="\d{9}" required
                                        title="Debe contener exactamente 9 números" oninput="this.value = this.value.replace(/\D/g, '')">

                                        <label for="direccion" class="col-form-label">Dirección:</label>
                                        <input type="text" class="form-control" id="direccion" name="Direcc" required>

                                        <label for="telefono" class="col-form-label">Teléfono:</label>
                                        <input type="text" class="form-control" id="telefono" name="Tel" maxlength="9" pattern="\d{9}" required
                                        title="Debe contener exactamente 9 números" oninput="this.value = this.value.replace(/\D/g, '')">

                                        <label for="correo" class="col-form-label">Correo:</label>
                                        <input type="email" class="form-control" id="correo" name="email" required>

                                        <!-- Campo oculto para almacenar el ID -->
                                        <input type="hidden" id="proveedor-id" name="Prov_Id">
                                      </div>
                                    </form>

                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                      <button type="button" class="btn btn-primary" id="Actualizar">Actualizar</button>
                                    </div>
                                  </div>
                                </div>
                              </div>


                            <div class="col-lg-8 grid-margin stretch-card">
                              <div class="card">
                                <div class="card-body">
                                  <h4 class="card-title">TABLA DE DATOS</h4>
                                    <p class="card-description">
                                      En esta tabla podrás ver los datos que están almacenados en el sistema.
                                    </p>
                                      <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                              <tr>
                                                <th>ID</th>
                                                <th>DESCRIPCION</th>
                                                <th>NIT</th>
                                                <th>DIRECCION</th>
                                                <th>TELEFONO</th>
                                                <th>CORREO</th>
                                                <th>ACCIÓN</th>
                                              </tr>
                                            </thead>
                                          <tbody id="CuertoTabla">
                        
                       
                                          </tbody>
                                        </table>
                                      </div>
                                  </div>
                                </div>
                              </div>
                            </div>


                            </div>


                       
             </div>           
        </div>
    </div>    


    
    <script src="jquery/Proveedor/ProveedorVista.js"></script>
    <script src="jquery/Proveedor/AgregarProveedor.js"></script>
    <script src="jquery/Proveedor/EliminarProveedor.js"></script>
    <script src="jquery/Proveedor/EditarProveedor.js"></script>