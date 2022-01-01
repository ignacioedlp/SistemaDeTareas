<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  <title>Register</title>
</head>
<body>

<div class="container">

    

    <h1>Register</h1>
  
    <div class="mt-1">
      <?php echo $this->mensaje;?>
    </div>
    <form action="<?php echo constant('URLBASE'); ?>register/registerUser/" method="post" >


    <div class="mb-3">
      <label for="" class="form-label">Username</label>
      <input type="text"
        class="form-control" name="username" id="" aria-describedby="helpId" placeholder="">
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Password</label>
      <input type="password"
        class="form-control" name="password" id="" aria-describedby="helpId" placeholder="">
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Rol</label>
      <div class="mb-3">
        <label for="" class="form-label"></label>
        <select class="form-control" name="rol" id="">
          <option>user</option>
          <option>admin</option>
        </select>
      </div>
    </div>
    <button type="submit" class="btn btn-success">Registrarse</button>

  </form>
</div>
</body>
</html>
