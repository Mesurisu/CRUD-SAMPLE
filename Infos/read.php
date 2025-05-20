<?php
include 'dbcon.php';

$sql = "SELECT * FROM info_wf";
$result = $conn->query($sql);

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>CRUD Application</title>
    <link rel="stylesheet" href="read.css">
</head>
<body>
    <h1>Users</h1>
    <table id = "customers">
        <tr>
            <th>ID</th>
            <th>FirstName</th>
            <th>LastName</th>
            <th>Phone</th>
            <th>Branch</th>
            <th>Actions</th>
        </tr>
        <?php while ($user = $result->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $user['id']; ?></td>
            <td><?php echo $user['firstname']; ?></td>
            <td><?php echo $user['lastname']; ?></td>
            <td><?php echo $user['phone']; ?></td>
            <td><?php echo $user['branch']; ?></td>
            <td>

            
                <a href="update.php?update=<?php echo $user['id']; ?>">Update</a>
                <a href="delete.php?delete=<?php echo $user['id']; ?>">Delete</a>

            </td>
        </tr>
        <?php } ?>
    </table>
    <br>
    <button  onclick= "location.href='createaccount.php'"class="button" name="create new account">Create New Account</button>
    
</body>
</html>