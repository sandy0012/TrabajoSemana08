<?php
    include("basedatos.php");
    if (isset($_POST['guardarCurso'])) {
       $Ncurso = $_POST['nombreCurso'];
 
     $consulta="INSERT INTO curso (nombreCurso) VALUES
     ('$Ncurso')";
     $resultado = mysqli_query($conn,$consulta);
     if (!$resultado) {

       die("Consulta fallada");
     }
     $_SESSION['message']='Curso Registrado';
     $_SESSION['message_type']='success';
     header("Location:cursos.php");

  }?>

<?php
      if (isset($_POST['guardarDocente'])) {
       $Ndocente = $_POST['nombreDocente'];
       $Adocente = $_POST['apellidoDocente'];
 
     $consulta="INSERT INTO docente (nombreDocente,apellidoDocente) VALUES
     ('$Ndocente','$Adocente')";
     $resultado = mysqli_query($conn,$consulta);
     if (!$resultado) {

       die("Consulta fallada");
     }
     $_SESSION['message']='Curso Registrado';
     $_SESSION['message_type']='success';
     header("Location:docentes.php");

  }?>
  
  <?php
      if (isset($_POST['guardarEstudiante'])) {
       $Nestudiante = $_POST['nombre'];
       $Aestudiante = $_POST['apellido'];
       $dni = $_POST['dni'];
     $consulta="INSERT INTO estudiante (nombre,apellido,dni) VALUES
     ('$Nestudiante','$Aestudiante','$dni')";
     $resultado = mysqli_query($conn,$consulta);
     if (!$resultado) {

       die("Consulta fallada");
     }
     $_SESSION['message']='Curso Registrado';
     $_SESSION['message_type']='success';
     header("Location:estudiantes.php");

  }?>
  
  <?php
      if (isset($_POST['guardarHorario'])) {
       $descripcion = $_POST['descripcion'];
       $horas = $_POST['horas'];
     $consulta="INSERT INTO horario (descripcion,horas) VALUES
     ('$descripcion','$horas')";
     $resultado = mysqli_query($conn,$consulta);
     if (!$resultado) {

       die("Consulta fallada");
     }
     $_SESSION['message']='Curso Registrado';
     $_SESSION['message_type']='success';
     header("Location:horarios.php");

  }?>
  <?php
      if (isset($_POST['guardarNotas'])) {
        $idE = $_POST['idE'];
        $idC = $_POST['idC'];
        $idD = $_POST['idD'];
        $idH = $_POST['idH'];
       $nota1 = $_POST['nota1'];
       $nota2 = $_POST['nota2'];
       $nota3 = $_POST['nota3'];
       $nota4 = $_POST['nota4'];
       $promedio=($nota1+$nota2+$nota3+$nota4)/4;
      $consulta="INSERT INTO general (idE,idC,idD,idH,nota1,nota2,nota3,nota4,promedio) VALUES
     ('$idE','$idC','$idD','$idH','$nota1','$nota2','$nota3','$nota4','$promedio')";
     $resultado = mysqli_query($conn,$consulta);
     if (!$resultado) {

       die("Consulta fallada");
     }
     $_SESSION['message']='Curso Registrado';
     $_SESSION['message_type']='success';
     header("Location:notas.php");

  }?>

<?php
      if (isset($_POST['Volver'])) {
        
     header("Location:index.php");

  }?>
  