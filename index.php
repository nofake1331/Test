<?
  include "dbconf.php";
  include "UserModel.php";
  include "UserControl.php";
  $f = new UsersC;?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <title>Document</title>
</head>
<body>
<a href="AddUser.php?x=add" class='btn btn-primary'>Add user</a>
<table id="Table" class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>First Name</th>
      <th>Last  Name</th>
      <th>Email</th>
      <th>Date Created</th>
      <th>Update Date</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
  
<? $f-> showUsers()?>
  </tbody>
</table>

</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>

</html><script>
$(function() {
  $("#Table").DataTable();
  
});
</script>