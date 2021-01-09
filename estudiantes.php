<?php include("basedatos.php") ?>
<?php include("includes/header.php") ?>
<div class="container-fluid" style="background: rgb(233, 150, 122);" >
    <div class="row" >
      <div class="col-md-4"id="titu" >
    <?php
     if (isset($_POST['estudiantes'])) ?>
         <div class="card card-body" id="estudiantes">
          <form class="" action="guardar.php" method="POST">
            <div class="form-group">
              <input type="text" name="nombre" class="form-control" value=""
              placeholder="Ingresa Nombre de Estudiante" autofocus>
              <input type="text" name="apellido" class="form-control" value=""
              placeholder="Ingresa Apellido de Estudiante" autofocus>
              <input type="text" name="dni" class="form-control" value=""
              placeholder="Ingresa DNI de Estudiante" autofocus>
         </div>
         </div>     
             <div class="form-group"> 
             <input style="background: rgb(205, 92, 92);color: #FFFFFF;border:rgb(205, 92, 92)" type="submit" value="Guardar Estudiante" name="guardarEstudiante"  class="btn btn-success btn-block">
      </form>             
</div>      
</div>
</div>


<div class="container-fluid" style="background: rgb(233, 150, 122);">
    <div class="row">
       <form class="" action="guardar.php" method="POST" >
          <table class="table table-bordered" >
          <thead>
            <tr>
            <th>IDENTIFICADOR</th>
            <th>NOMBRE</th>
            <th>APELLIDO</th>
            <th>DNI</th>
            
            </tr>
          </thead>
          <tbody>
            <?php
              $consulta="SELECT*FROM estudiante";
              $resultado=mysqli_query($conn,$consulta);
              while ($row=mysqli_fetch_array($resultado)) {?>
                <tr>
                  <td><?php echo $row['idE']?></td>
                  <td><?php echo $row['nombre']?></td>
                  <td><?php echo $row['apellido']?></td>
                  <td><?php echo $row['dni']?></td>
                  
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