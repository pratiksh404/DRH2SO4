<?php
require 'inc_connect.php';

if(isset($_POST['submit']))
{
    $username = htmlentities($_POST['username']);
    $password = md5($_POST['password']);
    
    $stmt = "SELECT id FROM register WHERE username = '".$username."' AND password = '".$password."' limit 1";
    
    $qry = mysqli_query($con,$stmt);

    if($qry)
    {
          $query_rows = mysqli_num_rows($qry);
       
        if($query_rows == 1)
        {
            $query_fetch = mysqli_fetch_assoc($qry);
        while($query_fetch)
        {
          $user_id = $query_fetch['id'];  
        }
           echo $_SESSION['user_id'] = $user_id;
           $_SESSION['uname'] = $username;
            $_SESSION['pword'] = $password;
            
            header ("Location : 'index.php'");
        }
    }
    else{
        echo "something went wrong<br>";
        echo mysqli_error($qry);
    }
}



?>
<form action="<?php echo $filepath; ?>" method="post">
    USERNAME: <input type="text" name="username" required>
    <br>
    PASSWORD: <input type="password" name="password" required>
    <br><input type="submit" value="login" name="submit">
</form>
