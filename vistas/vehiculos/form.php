<div class="content-wrapper">
    <div class="page-title">
        <div>
            <h1><i class="fa fa-edit"></i> Vehículos</h1>
            <p><?=$titulo?> un vehículo</p>
        </div>
        <div>
            <ul class="breadcrumb">
                <li><i class="fa fa-home fa-lg"></i></li>
                <li>Vehículos</li>
                <li><a href="#"><?=$titulo?> Vehículo</a></li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="well bs-component">
                            <form class="form-horizontal" method="POST" action="?c=vehiculo&a=Guardar">
                                <fieldset>
                                    <legend><?=$titulo?> Vehículo</legend>
                                    <div class="form-group">
                                        <input class="form-control" name="ve_id" type="hidden" value="<?=$v->getVe_id()?>">

                                        <label class="col-lg-2 control-label" for="ve_placa">Placa</label>
                                        <div class="col-lg-10">
                                            <input required class="form-control" name="ve_placa" type="text" placeholder="Placa del vehiculo" pattern="[A-Za-z0-9]+" value="<?=$v->getVe_placa()?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label" for="ve_marca">Marca</label>
                                        <div class="col-lg-10">
                                            <input required class="form-control" name="ve_marca" type="text" placeholder="Marca del vehiculo" value="<?=$v->getVe_marca()?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label" for="ve_tipo">Tipo</label>
                                        <div class="col-lg-10">
                                            <input required class="form-control" name="ve_tipo" type="text" placeholder="Tipo de vehiculo" value="<?=$v->getVe_tipo()?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label" for="ve_color">Color</label>
                                        <div class="col-lg-10">
                                            <input required class="form-control" name="ve_color" type="text" placeholder="Color del vehiculo" value="<?=$v->getVe_color()?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label" for="ve_entrada">Fecha y hora de entrada</label>
                                        <div class="col-lg-10">
                                            <input required class="form-control" name="ve_entrada" type="datetime-local" placeholder="Tiempo" value="<?=$v->getVe_entrada()?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label" for="ve_estado">Estado</label>
                                        <div class="col-lg-10">
                                            <input required class="form-control" name="ve_estado" type="int" placeholder="1=ingresa 0=salida" value="<?=$v->getVe_estado()?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-lg-10 col-lg-offset-2">
                                            <button class="btn btn-default" type="reset">Cancelar</button>
                                            <button class="btn btn-primary" type="submit">Guardar</button>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>