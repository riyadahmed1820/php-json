 <form method ="POST">
 <h1 style="text-align: center;">Welcome-form</h1>
 <input  type="submit" name="back" value="Back">
 </form>
 <?php
 if(isset($_POST["back"]))
{
    echo "<script>location.href='Login.php'</script>";
}
?>