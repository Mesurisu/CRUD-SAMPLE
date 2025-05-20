<!DOCTYPE html>
<head>
    <title>CRUD</title>
    <link rel="stylesheet" href="createaccount.css">
</head>

<div>

<form action="create.php" method="post">



<div class = "b1">
<p>Create New User</p>
<hr>
<div class = "b2">

<input type = "text" name = "firstname" placeholder="firstname" required autocomplete="off"required autocomplete="off"/>
<br>
<input type = "text" name = "lastname" placeholder="lastname" required autocomplete="off"required autocomplete="off"/>
<br>
<input type = "text" name = "phone" placeholder="phonenumber" required autocomplete="off"/>
<br>
<select name="branch" id="branch" required>
                <option value="" disabled selected>BRANCH</option>
                <option value="Alabang">Alabang</option>
                <option value="BGC">BGC</option>
                <option value="Makati">Makati</option>
                <option value="QC">QC</option>
                <option value="PODIUM">PODIUM</option>
                </select>

                <br>
                <button class="button" name="create">Create Account</button>
                <button  onclick= "location.href='read.php'"class="button" name="Back">Information</button>
                </form>
</div>
            
</div>
    </body>
</html>