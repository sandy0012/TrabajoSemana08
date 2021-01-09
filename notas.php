

<?php include("includes/header.php") ?>
<div class="container-fluid" style="background: rgb(233, 150, 122);" >
    <div class="row" >
      <div class="col-md-4"id="titu" >
    <?php
     if (isset($_POST['notas'])) ?>
         <div class="card card-body" id="notas">
          <form class="" action="guardar.php" method="POST">
            <div class="form-group">
              <input type="text" name="idE" class="form-control" value=""
              placeholder="Ingresa Identificador de Estudiante" autofocus>
              <input type="text" name="idC" class="form-control" value=""
              placeholder="Ingresa Identificador de Curso" autofocus>
              <input type="text" name="idD" class="form-control" value=""
              placeholder="Ingresa Identificador de Docente" autofocus>
              <input type="text" name="idH" class="form-control" value=""
              placeholder="Ingresa Identificador de Horario" autofocus>
              <input type="text" name="nota1" class="form-control" value=""
              placeholder="Ingresa nota1" autofocus>
              <input type="text" name="nota2" class="form-control" value=""
              placeholder="Ingresa nota2" autofocus>
              <input type="text" name="nota3" class="form-control" value=""
              placeholder="Ingresa nota3" autofocus>
              <input type="text" name="nota4" class="form-control" value=""
              placeholder="Ingresa nota4" autofocus>
         </div>
         </div>     
             <div class="form-group"> 
             <input style="background: rgb(205, 92, 92);color: #FFFFFF;border:rgb(205, 92, 92)" type="submit" value="Guardar Notas" name="guardarNotas"  class="btn btn-success btn-block"  >
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
            <th>id Estudiante</th>
            <th>id Curso</th>
            <th>id Docente</th>
            <th>id Horario</th>
            <th>Nota 1</th>
            <th>Nota 2</th>
            <th>Nota 3</th>
            <th>Nota 4</th>
            <th>Promedio Final</th>
            </tr>
          </thead>
          <tbody>
          <?php include("basedatos.php") ?>
            <?php
              $consulta="SELECT*FROM general";
              $resultado=mysqli_query($conn,$consulta);
              while ($row=mysqli_fetch_array($resultado)) {?>
                <tr>
                  <td><?php echo $row['idE']?></td>
                  <td><?php echo $row['idC']?></td>
                  <td><?php echo $row['idD']?></td>
                  <td><?php echo $row['idH']?></td>
                  <td><?php echo $row['nota1']?></td>
                  <td><?php echo $row['nota2']?></td>
                  <td><?php echo $row['nota3']?></td>
                  <td><?php echo $row['nota4']?></td>
                  <td><?php echo $row['promedio']?></td> 
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
