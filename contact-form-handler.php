<?php 
$errors = '';
$myemail = 'boldmtry@gmail.com';//<-----Put Your email address here.
// if(empty($_POST['name'])  || 
//    empty($_POST['email']) || 
//    empty($_POST['message']))
// {
//     $errors .= "\n Error: all fields are required";
// }

$name = $_POST['name']; 
$email_address = $_POST['email']; 
$message = $_POST['message']; 

// if (!preg_match(
// "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
// $email_address))
// {
//     $errors .= "\n Error: Invalid email address";
// }

if( empty($errors))
{
    $to = $myemail; 
    $email_subject = "BOLD Prayer Request: $name";
    $email_body = "You have received a new message. ".
    " Here are the details:\n Name : $name \n Email : $email_address \n Message : $message"; 

    $headers = "From: $myemail\n"; 
    $headers .= "Reply-To: $email_address";

    mail($to,$email_subject,$email_body,$headers);
    //redirect to the 'thank you' page
    echo "We have received your prayer request.  Thank you.";
} 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head>
   

     <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-DM6BFSN3GB"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-DM6BFSN3GB');
        </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prayer Request Received</title>
        
        
        <meta property="og:type" content="website"/>
        
    <link rel="stylesheet" href="assets/vendors/animate.css/animate.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/vendors/jquery/jquery.min.js"></script>
    <script src="assets/js/loader.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon"  type="image/png"  href="assets/images/1/fav.ico">
</head>


<body>
   <div class="container" style="text-align:center; padding-top: 100px;">
    
<!-- This page is displayed only if there is some error -->
<?php
echo nl2br($errors);
?>

<br>
  <img src="assets/images/logo.jpg" style="width:400px">
  <br><br>

<a href="index.html">Back to the homepage </a>
</div>
</body>
</html>