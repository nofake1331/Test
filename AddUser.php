<? 
   include "dbconf.php";
   include "UserModel.php";
   include "UserControl.php";
  
   $f = new UsersC;
   if (isset( $_POST["Add"])){
    $f->addUser();
  }  

  if($f->x == null){
    $x =0;
  }
  else $x = $f->x;
  if (isset( $_POST["Updr"])){
    $f->UpdUser($_POST["Updr"]);
    $f->redirect("/");
  }  
  if (isset( $_POST["Upd"])){
    $f->UpdUser($_POST["Upd"]);
    $f->redirect("/AddUser.php?x=$x");
  }; 



 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<form method="POST">

   
  <div class="row mb-3">
    <label  class="col-sm-2 col-form-label">First Name</label>
    <div class="col-sm-10">
    <input  name="first_name"class="form-control"  <?   echo "value=".$f->users[$x][first_name]?>  >
    </div>
  </div>
  <div class="row mb-3">
    <label  class="col-sm-2 col-form-label">Last Name</label>
    <div class="col-sm-10">
      <input  name="last_name" class="form-control" <?   echo "value=".$f->users[$x][last_name]?> >
    </div>
  </div>
  <div class="row mb-3">
    <label  class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
    <input type="email" name="email" class="form-control" <?   echo "value=".$f->users[$x][email]?>>
    </div>
  </div>

  <?


  if ($x === "add"){
  echo "<button type='submit' name='Add' class='btn btn-primary'>Add</button>";}
  else {
    echo "<button type='submit' name='Updr' class='btn btn-primary' value=".$f->users[$x][id].">Save</button>";
    echo "<button type='submit' name='Upd' class='btn btn-primary' value=".$f->users[$x][id].">Save and continue edit</button>";
  }
?>
  </form> 
<a class='btn btn-primary' href="/">Back</a>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</html>