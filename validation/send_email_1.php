<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Potenza - Job Application Form Wizard with Resume upload and Branch feature">
    <meta name="author" content="Ansonika">
    <title>Potenza | Job Application Form Wizard by Ansonika</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/menu.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<link href="css/vendors.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">
    
	<script type="text/javascript">
    function delayedRedirect(){
        window.location = "index.html"
    }
    </script>

</head>
<body style="background-color:#fff;" onLoad="setTimeout('delayedRedirect()', 5000)">
<?php
	$mail = $_POST['email'];

	$to = "email@yourdomain.com";/* YOUR EMAIL HERE */
	$subject = "Job application from Potenza";
	$headers = "From: Job application from Potenza <noreply@yourdomain.com>";

	$message  = "PRESENTATION\n";
	$message .= "\nFirst and Last Name: " . $_POST['name'];
	$message .= "\nEmail: " . $_POST['email'];
	$message .= "\nTelephone: " . $_POST['phone'];
	$message .= "\nGender: " . $_POST['gender'];				
	
	/* FILE UPLOAD */
	if(isset($_FILES['fileupload'])){
	$errors= array();
	$file_name = $_FILES['fileupload']['name'];
	$file_size =$_FILES['fileupload']['size'];
	$file_tmp =$_FILES['fileupload']['tmp_name'];
	$file_type=$_FILES['fileupload']['type'];
	$file_ext=strtolower(end(explode('.',$_FILES['fileupload']['name'])));

	$expensions= array("pdf","doc","docx");// Define with files are accepted
							  
	echo('LOL');
?>
<!-- END SEND MAIL SCRIPT -->   

<div id="success">
    <div class="icon icon--order-success svg">
         <svg xmlns="http://www.w3.org/2000/svg" width="72px" height="72px">
          <g fill="none" stroke="#8EC343" stroke-width="2">
             <circle cx="36" cy="36" r="35" style="stroke-dasharray:240px, 240px; stroke-dashoffset: 480px;"></circle>
             <path d="M17.417,37.778l9.93,9.909l25.444-25.393" style="stroke-dasharray:50px, 50px; stroke-dashoffset: 0px;"></path>
          </g>
         </svg>
     </div>
	<h4><span>Request successfully sent!</span></h4>
	<small>You will be redirect back in 5 seconds.</small>
</div>
</body>
</html>