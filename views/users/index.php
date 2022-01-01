

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
  <title>Users</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>

<?php require 'views/header.php'?>
<div class="main">
  <h1>Bienvenido a users</h1>
  <table class="table mx-4">
    <thead>
      <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Rol</th>
        <th>Create time</th>
      </tr>
    </thead>
    <tbody id="table">
      <?php 
        $idActual = 0;
      foreach($this->usuarios as $row){
          $idActual++;
          $user = new User();
          $user = $row;
        ?>
      <tr >
        
        <td><?php echo $idActual; ?></td>
        <td><?php echo $row->username?></td>
        <td style="<?php if ($row->rol == "users"){
          echo "color: #0097e6";
        }elseif ($row->rol == "admin"){
          echo "color: #8c7ae6";
        }
        ?>"><?php echo $row->rol?></td>
        <td><?php echo $row->create_time?></td>
      </tr>
      <?php }?>
    </tbody>
  </table>
</div>
<?php require 'views/footer.php'?>

</body>
</html>