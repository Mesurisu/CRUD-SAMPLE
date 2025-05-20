<?php
include 'dbcon.php';


if (isset($_POST['create'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phone = $_POST['phone'];
    $branch = $_POST['branch'];

    $sql = "INSERT INTO info_wf (firstname, lastname, phone, branch) VALUES ('$firstname','$lastname', '$phone', '$branch')";
  /*  $conn->query($sql);
    header("Location: read.php");
    exit;*/
}
$result = mysqli_query($conn,$sql);
if($result){
    echo "<script>alert('Submitted!'); window.location='read.php'</script>";

    
  }else{
    die(mysqli_error($conn));
  }
?>