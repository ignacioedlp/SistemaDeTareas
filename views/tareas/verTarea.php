
<?php



  if(!isset($_SESSION['user'])){
    header('Location: http://localhost/CursoPHP/Propio/login');
  }

  $user = $_SESSION['user'];
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar tarea</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>


<?php require 'views/header.php'?>

<!-- <div class="container mt-1"><?php echo $this->mensaje;?></div> -->
<div class="container mt-3">
  <h1>Editar tarea</h1>
  <form action="<?php echo constant('URLBASE'); ?>tareas/editarTarea/?id=<?php echo $this->idTarea;?>" method="post">
    <div class="mb-3">
      <label for="" class="form-label">Titulo</label>
      <input type="text"
        class="form-control" value="<?php echo $this->tarea->titulo;?>"  name="titulo" id="" aria-describedby="helpId" placeholder="">
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Contenido</label>
      <textarea type="text"
        class="form-control" name="contenido" id=""  aria-describedby="helpId" placeholder=""><?php echo $this->tarea->contenido;?>
      </textarea>
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Prioridad</label>
      <div class="mb-3">
        <select class="form-control" value="<?php echo $this->tarea->prioridad;?>"name="prioridad" id="">
          <option>Alta</option>
          <option>Media</option>
          <option>Baja</option>
        </select>
      </div>
    </div>
    <button type="submit" class="btn btn-primary mt-3">Submit</button>
  </form>
</div>

<?php require 'views/footer.php'?>


</body>
</html>