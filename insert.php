
<?php
include("connection.php");
include_once('mail_config.php');
if (isset($_POST['submit'])) {

    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $phone = $_REQUEST['phone'];
    $message = $_REQUEST['message'];

	$query              = "INSERT INTO `contact_us` (`name`, `email`, `phone`, `massage`) VALUES ('$name','$email','$phone','$message')";
	$result             = mysqli_query($conn, $query);

	if($query){
      
        header('location: index.php');
    }
    else{
       //  echo'<script> alert("Data Not Saved"); </script>';
        echo "Failed to insert data ";
       
    }
//     if(empty($name) || empty($email) || empty($phone) || empty($message))
// {
//     echo "please fill all the fields";
// }else{
//     mail("khanmdmojahid6@gmail.com", "Enquiry Massage", $message , "from: $name <$email>");
//     echo "<script type='text/javascript> alert('your massage send successfully');
//     window.history.log(-1);
//     <script>";
   
// }
}
?>