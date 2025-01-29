
<?php

$SelectGrupo = "SELECT * FROM `grupoalimentacion` ";

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
                                    <h4 class="card-title">PRODUCTOS</h4>
                                      <p class="card-description">
                                        Formulario para gestionar los productos.
                                      </p>
                                        <form class="forms-sample" method="post" id="Producto" >
                                          <div class="form-group">
                                            <label for="exampleInputUsername1">Id</label>
                                            <input type="text" class="form-control" id="exampleInputUsername1" placeholder="ID" value="ID" name="ID" readonly> 
                                          </div>
                                          <div class="form-group">
                                            <label for="exampleInputEmail1">Descripcion</label>
                                            <input type="text" class="form-control" id="Descripcion" name="Descripcion" placeholder="Ingrese una descripcion" required>
                                          </div>
                                          <div class="form-group">
                                            <label for="exampleSelectGender">Grupo de alimento</label>
                                            <select class="form-control" id="exampleSelectGender" name="Grupo">
                                              <option>Escoja una opción</option>
                                              <?php while($Grupo = mysqli_fetch_array($QueryGrupo)):?>
                                              <option value="<?php echo $Grupo['GruAli_Id']?>" ><?php echo $Grupo['GruAli_Descripcion']?></option>
                                              <?php endwhile;?>
                                              
                                            </select>
                                          </div>
                                          <div class="form-group">
                                            <label for="exampleSelectGender">Unidad de medida</label>
                                            <select class="form-control" id="exampleSelectGender" name="Medida">
                                              <option>Escoja una opción</option>
                                              <?php while($Medida = mysqli_fetch_array($QueryMedida)):?>
                                              <option value="<?php echo $Medida['Un_Id']?>" ><?php echo $Medida['Un_Alias']?></option>
                                              <?php endwhile;?>
                                            </select>
                                          </div>
                                          <button type="button" id="AgregarPro" class="btn btn-primary mr-2">AGREGAR REGISTRO</button>
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
                                          <label for="recipient-name" class="col-form-label">Descripcion:</label>
                                          <input type="text" value=""class="form-control" id="recipient-name" name="Descrip">
                                          <label for="recipient-name" class="col-form-label">Grupo:</label>
                                          
                                           <select class="form-control" id="exampleSelectGender" name="Grupo2">
                                              <option>Escoja una opción</option>
                                              <?php while($Grupo = mysqli_fetch_array($QueryGrupo2)):?>
                                              <option value="<?php echo $Grupo['GruAli_Id']?>" ><?php echo $Grupo['GruAli_Descripcion']?></option>
                                              <?php endwhile;?>
                                            </select>

                                            <label for="recipient-name" class="col-form-label">Medida:</label>
                                            <select class="form-control" id="exampleSelectGender" name="Medida2">
                                              <option>Escoja una opción</option>
                                              <?php while($Medida = mysqli_fetch_array($QueryMedida2)):?>
                                              <option value="<?php echo $Medida['Un_Id']?>" ><?php echo $Medida['Un_Alias']?></option>
                                              <?php endwhile;?>
                                            </select>

                                            
                                          <!-- Campo oculto para almacenar el ID -->
                                          <input type="hidden"   value="recipient-id">
                                          
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
                                                <th>GRUPO</th>
                                                <th>UNIDAD</th>
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
    
    <script src="jquery/Producto/ProductoVista.js"></script>
    <script src="jquery/Producto/AgregarProducto.js"></script>
    <script src="jquery/Producto/EliminarProducto.js"></script>
    <script src="jquery/Producto/EditarProducto.js"></script>