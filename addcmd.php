<?php include 'header.php';  ?>

<h1>Add CMD for device: <?php echo $_GET["id"]; ?></h1>
<form role="form" action="addcmdtodb.php" method="post">
 <div class="form-group" width="30">
    <label for="user">user:</label>
    <input type="user" class="form-control" id="user" name="user" value="websitePanel" disabled>
  </div>
  <div class="form-group" width="30">
    <label for="user">devie ID:</label>
    <input type="user" class="form-control" id="user" name="id" value="<?php echo $_GET["id"]; ?>">
  </div>
  <div class="form-group">
    <label for="pwd">Comamnd:</label>
    <input type="user" class="form-control" id="pwd" name="cmd">
  </div>
  <button type="submit" class="btn btn-default">LogIn</button>
</form>