<?php

if (!isset($_SESSION["id"])) {
  header("Location: ./login.php");
  exit();
}

?>

<div class="content-wrapper">
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <h3 class="card-title">Vehiculos en parqueadero</h3>
              <p><?php $v=$this->modelo->Estado()?>
              <?=$v->Estado?>
            </p>
            </div>
          </div>
        </div>
      </div>
    </div>