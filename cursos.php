<?php include("basedatos.php") ?>
<?php include("includes/header.php") ?>
<div class="container-fluid" style="background: rgb(233, 150, 122);" >
    <div class="row">
      <div class="col-md-4" id="titu">
    <?php
     if (isset($_POST['cursos'])) ?>
         <div class="card card-body" id="cursos">
          <form class="" action="guardar.php" method="POST">
            <div class="form-group">
              <input type="text" name="nombreCurso" class="form-control" value=""
              placeholder="Ingresa Nombre de Curso" autofocus>  
              <div class="form-group"> 
              <input style="background: rgb(205, 92, 92);color: #FFFFFF;border:rgb(205, 92, 92)" type="submit" value="Guardar Curso" name="guardarCurso"  class="btn btn-success btn-block">
              </div>
            </form>             
</div>     
</div>
</div>
</div>

<div class="container-fluid">
    <div class="row">
       <form class="" action="guardar.php" method="POST">
          <table class="table table-bordered">
          <thead>
            <tr>
            <th>CURSO</th>
              <th>CODIGO</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $consulta="SELECT*FROM curso";
              $resultado=mysqli_query($conn,$consulta);
              while ($row=mysqli_fetch_array($resultado)) {?>
                <tr>
                  <td><?php echo $row['nombreCurso']?></td>
                  <td><?php echo $row['idC']?></td>
                </tr>
              <?php } ?>
          </tbody>
        </table>
        <input style="background: rgb(205, 92, 92);color: #FFFFFF;border:rgb(205, 92, 92)" type="submit" value="Volver al Menu Principal" name="Volver"  class="btn btn-success btn-block"  >
      </form>
 </div>
</div>
<?php include("includes/footer.php") ?>