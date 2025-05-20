<?php
include 'dbcon.php';

$id = $_GET['update'];
$sql = "SELECT * FROM info_wf WHERE id = '$id' ";
$result = mysqli_query($conn,$sql);
$user = mysqli_fetch_assoc($result);

$id = $user['id'];
  $firstname = $user['firstname'];
  $lastname = $user['lastname'];
    $phone = $user['phone'];
    $branch = $user['branch'];



if (isset($_POST['update'])) {

  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
    $phone = $_POST['phone'];
    $branch = $_POST['branch'];

  $sql = "UPDATE info_wf SET firstname = '$firstname',lastname = '$lastname', phone = '$phone', branch = '$branch' WHERE id = '$id'";
  
    $result = mysqli_query($conn,$sql);
    if($result){
      echo "<script>alert('Submitted!'); window.location='read.php'</script>";

      
    }else{
      die(mysqli_error($conn));
    }
}
?>


<!DOCTYPE html>
<head>
    <title>UPDATE</title>
    <link rel="stylesheet" href="update.css">
</head>
<div>

<form method="post">
<div class = "b1">
<p>UPDATE</p>
<hr>
<div class = "b2">

<input type = "text" name = "firstname" placeholder="firstname" required autocomplete="off"value = <?php echo $firstname ?>>
<br>
<input type = "text" name = "lastname" placeholder="lastname" required autocomplete="off"value = <?php echo $lastname ?>>
<br>
<input type = "text" name = "phone" placeholder="phonenumber" required autocomplete="off"value = <?php echo $phone ?>>
<br>
<select name="branch" id="branch">
                 <option value =<?php echo $branch ?>><?php echo $branch ?></option>
                <option value="Alabang">Alabang</option>
                <option value="BGC">BGC</option>
                <option value="Makati">Makati</option>
                <option value="QC">QC</option>
                <option value="PODIUM">PODIUM</option>
                </select>

                <br>
                <button class="button" name="update">Update</button>
                
                <button><a href="read.php">Back</a></button>
                </form>
</div>    
</div>    
    </body>
</html>