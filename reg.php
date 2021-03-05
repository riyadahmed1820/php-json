<!DOCTYPE html>
<html lang="en">
<head> 
    <title>Registration</title>
</head>
<body >

    <?php
        $firstName = $lastName = $email = $gender = $userName = $password = $recoveryEmail = "";
        $count = 0;

        if ($_SERVER["REQUEST_METHOD"] =="POST" ) 
        {
            if($firstName = $_POST['fname']) 
            {
                $count++;
            }
            else
            {
                echo"Please Fill Up the First Name";
            }
            if($lastName = $_POST['lname']) 
            {
                $count++;
            }
            else
            {
                echo"Please Fill Up the First Name";
            }
            if($email = $_POST['email']) 
            {
                $count++;
            }
            else
            {
                echo"Please Fill Up the First Name";
            }
            if(isset($_POST['gender'])) 
            {
                $gender = $_POST['gender'];
                $count++;
                
                if ($gender == "Male")
                {
                    $gender = "Male";
                }
                else
                {
                    $gender = "Female";
                }  
            }
            else
            {
                echo"Please Fill Up the First Name";
            }
            if($userName = $_POST['uname']) 
            {
                $count++;
            }
            else
            {
                echo"Please Fill Up the First Name";
            }
            if($password = $_POST['password']) 
            {
                $count++;
            }
            else
            {
                echo"Please Fill Up the First Name";
            }
            if($recoveryEmail = $_POST['remail']) 
            {
                $count++;
            }
            else
            {
                echo"Please Fill Up the First Name";
            }

            if ($count >= 7)
            {
            /*$filepath = "info.txt";
            $f = fopen($filepath,'a');
            fwrite($f,"$userName,$password,$firstName,$lastName,$email,$gender,$recoveryEmail\n");*/
           $arr1 = array('firstName'=>"$firstName", 'lastName'=>"$lastName",'email'=>"$email", 'gender'=>"$gender",'userName'=>"$userName",'password'=> "$password",'recoveryEmail' => "$recoveryEmail");
           $json_encoded_text =  json_encode($arr1); 
            $file1 = fopen("info.txt", 'a');
		    fwrite($file1, $json_encoded_text);
            fclose($file1);
            }
        }
    ?>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
        <h1 style="text-align: center;">Registertion-form</h1>
        <fieldset>
            <legend>Basic Information:</legend>
             <table>
                <tr>
                    <td>
                        First Name
                    </td>
                    <td>
                        <input type="text" name="fname" value="">
                    </td>
                </tr>

                <tr>
                    <td>
                        Last Name
                    </td>
                    <td>
                        <input type="text" name="lname" value="" >
                    </td>
                </tr>

                <tr>
                    <td>
                        Gender
                    </td>
                    <td>
                        <input type="radio" name="gender" value="Male" >  Male 
                        <input type="radio" name="gender" value="Female" > Female
                    </td>
                </tr>
            </table>
        </fieldset>

        <fieldset>
            <legend>User Account Information:</legend>
            <table>
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
                        <input type="password" name="password" value="">
                    </td>
                    </tr>

                    <tr>
                    <td>
                         Email
                    </td>
                    <td>
                        <input type="email" name="email" id="" value="">
                    </td>
                    </tr>

                    <tr>
                    <td>
                        Recovery Email
                    </td>
                    <td>
                        <input type="email" name="remail" value="">
                    </td>
                     </tr>

            
            </table>
        </fieldset>
                <br>
                <tr >
                <td>
                    <input type="submit" name="set" value="Submit"> 
                    
                    <input  type="submit" name="done" value="Login">  
                </td>
            </tr>
    </form>  

<?php
if(isset($_POST["done"]))
{
    echo "<script>location.href='login.php'</script>";
    
}
?>
</body>
</html>