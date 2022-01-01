

<?php

 

  if(!isset($_SESSION['user'])){
    header('Location: http://localhost/CursoPHP/Propio/login');
  }



?>






<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>

<?php require 'views/header.php'?>
<div class="main">
  <h1>Bienvenido a admin</h1>
  <div class="container  m-3 position-relative">
    <div class="card w-50 m-3">
      <div class="card-body">
        <h5 class="card-title">Tareas totales</h5>
        <p class="card-text"><?php echo $this->numDeTareasTotales?></p>
        
      </div>
    </div>
    <div class="card w-50 m-3">
      <div class="card-body">
        <h5 class="card-title">Tareas alta prioridad</h5>
        <p class="card-text"><?php echo $this->numDeTareasAltas?></p>
        
      </div>
    </div>
    <div class="card w-50 m-3">
      <div class="card-body">
        <h5 class="card-title">Tareas media prioridad</h5>
        <p class="card-text"><?php echo $this->numDeTareasMedias?></p>
        
      </div>
    </div>
    <div class="card w-50 m-3">
      <div class="card-body">
        <h5 class="card-title">Tareas baja prioridad</h5>
        <p class="card-text"><?php echo $this->numDeTareasBajas?></p>
        
      </div>
    </div>
    <div class="card w-50 m-3">
      <div class="card-body">
        <h5 class="card-title">Numero de Administradores</h5>
        <p class="card-text"><?php echo $this->numDeAdmins?></p>
        
      </div>
    </div>
    <div class="card w-50 m-3">
      <div class="card-body">
        <h5 class="card-title">Numero de Usuarios</h5>
        <p class="card-text"><?php echo $this->numDeUsers?></p>
        
      </div>
    </div>
  </div>
</div>
<?php require 'views/footer.php'?>

</body>
</html>