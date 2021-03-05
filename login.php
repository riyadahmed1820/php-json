<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
</head>
<body>
<?php
    $uname = $password = $unameErr = $passwordErr = $msg = "";
    $flag = 0;
    /*$filepath = "info.txt";
    $f = fopen($filepath,'r');*/
    $f = fopen("info.txt", "r");
    $read = fread($f, filesize("info.txt"));

    $json_decoded_text = json_decode($read, true);

		echo $json_decoded_text['uname'];
		echo "<br>";
		echo $json_decoded_text['password'];
		echo "<br>";
		echo $json_decoded_text['firstName'];



 
    if ($_SERVER["REQUEST_METHOD"] =="POST" )
    {
        if(empty($_POST['uname'])) 

            {
                $unameErr = "Please Fill Up the UserName";
            }
            else
            {
                $uname = $_POST['uname'];
            }

        if(empty($_POST['password'])) 

            {
                $passwordErr = "Please Fill Up the Password";
            }
            else
            {
                $password = $_POST['password'];
            }
            while($arr1 = fgets($f)) {

                array('firstName'=>"$firstName", 'lastName'=>"$lastName",'email'=>"$email", 'gender'=>"$gender",'userName'=>"$userName",'password'=> "$password",'recoveryEmail' => "$recoveryEmail");

                if($userName == $uname && $password == $password){
                    $flag++;
                    echo "<script>location.href='Welcompage.php'</script>";
                    break;
                }
        
              
        
            }

            if(isset($_POST["signup"]))
        {   
             
            echo "<script>location.href='reg.php'</script>";
        }
        

            else
            {
                $msg = "Try Again";
                echo "Unsuccessful! " .$msg;
            }


    }

    session_unset();
    session_destroy();
    fclose($f);


?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
    <h1 style="text-align: center;">Login-form</h1>
    <fieldset>
         <legend>Login Info</legend>
         <table>
        <tr>
         <td>
             UserName
         </td>
        <td>
             <input type="text" name="uname" value="">
          </td>
        </tr>

        <tr>
         <td>
            Password
        </td>
        <td>
             <input type="password" name="password" value="" >
         </td>
    </tr>

     

    
            </table>                   
    </fieldset>
    <br> <br> <input type="submit" name="login" value="Login">
    <br> <br> <input type="submit" name="signup" value="Signup">
</form>
    
</body>
</html>