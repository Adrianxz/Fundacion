
<div class="main-panel">          
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="row">
           

                            <div class="col-md-6 grid-margin stretch-card">
                                <div class="card">
                                  <div class="card-body">
                                    <h4 class="card-title">GRUPOS DE ALIMENTOS</h4>
                                      <p class="card-description">
                                        Formulario para gestionar los grupos de alimentos.
                                      </p>
                                        <form class="forms-sample" method="post" action="Backend/gruposalimentarios/agregar.php">
                                          <div class="form-group">
                                            <label for="exampleInputUsername1">Id</label>
                                            <input type="text" class="form-control" id="exampleInputUsername1" placeholder="ID" readonly> 
                                          </div>
                                          <div class="form-group">
                                            <label for="exampleInputEmail1">Descripcion</label>
                                            <input type="text" class="form-control" id="Descripcion" name="Descripcion" placeholder="Ingrese una descripcion" required>
                                          </div>
                                          <button type="button" class="btn btn-primary mr-2" id="AgregarAlimento">AGREGAR REGISTRO</button>
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



                            <div class="col-lg-6 grid-margin stretch-card">
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
    
    <script src="jquery/alimentario/ali.js"></script>
    <script src="jquery/alimentario/AgregarAlimento.js"></script>
    <script src="jquery/alimentario/EliminarAlimento.js"></script>
    <script src="jquery/alimentario/EditarAlimento.js"></script>