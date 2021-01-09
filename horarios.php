<?php include("basedatos.php") ?>
<?php include("includes/header.php") ?>
<div class="container-fluid" style="background: rgb(233, 150, 122);" >
    <div class="row">
      <div class="col-md-4" id="titu">
    <?php
     if (isset($_POST['horarios'])) ?>
         <div class="card card-body" id="horarios">
          <form class="" action="guardar.php" method="POST">
            <div class="form-group">
              <input type="text" name="descripcion" class="form-control" value=""
              placeholder="Ingrese el Turno" autofocus>
              <input type="int" name="horas" class="form-control" value=""
              placeholder="Ingrese las Horas" autofocus>
         </div>
         </div>     
             <div class="form-group"> 
             <input style="background: rgb(205, 92, 92);color: #FFFFFF;border:rgb(205, 92, 92)" type="submit" value="Guardar Horario" name="guardarHorario"  class="btn btn-success btn-block">
        </form>             
</div>      
</div>
</div>
<div class="container-fluid">
    <div class="row">
       <form class="" action="guardar.php" method="POST">
          <table class="table table-bordered">
          <thead>
            <tr>
            <th>IDENTIFICADOR</th>
            <th>DESCRIPCION</th>
            <th>HORAS</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $consulta="SELECT*FROM horario";
              $resultado=mysqli_query($conn,$consulta);
              while ($row=mysqli_fetch_array($resultado)) {?>
                <tr>
                  <td><?php echo $row['idH']?></td>
                  <td><?php echo $row['descripcion']?></td>
                  <td><?php echo $row['horas']?></td>
                </tr>
              <?php } ?>
          </tbody>
        </table>
        <input style="background: rgb(205, 92, 92);color: #FFFFFF;border:rgb(205, 92, 92)" type="submit" value="Volver al Menu Principal" name="Volver"  class="btn btn-success btn-block"  >
      </div>
    </form>
  </div>
</div>
<?php include("includes/footer.php") ?>