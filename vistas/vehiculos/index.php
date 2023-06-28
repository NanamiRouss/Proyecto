<div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1>Lista de vehiculos</h1>
            <ul class="breadcrumb side">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>Tablas</li>
              <li class="active"><a href="#">Lista de vehiculos</a></li>
            </ul>
          </div>
          <div><a class="btn btn-primary btn-flat" href="?c=vehiculo&a=FormCrear"><i class="fa fa-lg fa-plus"></i></a>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Placa</th>
                      <th>Tipo</th>
                      <th>Marca</th>
                      <th>Color</th>
                      <th>Fecha de entrada</th>
                      <th>Fecha de salida</th>
                      <th>Estado</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                <?php foreach($this->modelo->Listar() as $r):?>
                    <tr>
                      <td><?=$r->ve_id?></td>
                      <td><?=$r->ve_placa?></td>
                      <td><?=$r->ve_tipo?></td>
                      <td><?=$r->ve_marca?></td>
                      <td><?=$r->ve_color?></td>
                      <td><?=$r->ve_entrada?></td>
                      <td><?=$r->ve_salida?></td>
                      <td><?=$r->ve_estado?></td>
                      <td>
                        <a class="btn btn-info btn-flat" href="?c=vehiculo&a=FormCrear&id=<?=$r->ve_id?>"><i class="fa fa-lg fa-refresh"></i></a>
                        <a class="btn btn-warning btn-flat" href="#"><i class="fa fa-lg fa-trash"></i></a>
                        -Salida
                      </td>
                <?php endforeach;?>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>