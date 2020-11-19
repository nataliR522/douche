<?php
include '../crm/application/helpers/upload_helper.php';

$servername = "localhost";
$username = "monisola_clients";
$password = "Burton290495";
$dbname = "monisola_crm";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];	

// Создать пользователя, получим ид
$sql_client = "INSERT INTO tblclients (company, country, leadid, phonenumber)
VALUES ('" . $name . "', 0, 0, '". $phone ."')";
$user_id = 1;
try {
handle_client_attachments_upload($user_id);
	} catch (Exception $e) {
	    echo 'Caught exception: ',  $e->getMessage(), "\n";
	}

/*
if (mysqli_query($conn, $sql_client)) {
  $user_id= $conn->insert_id;
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Создать контакт, по ид
$sql_contacts = "INSERT INTO tblcontacts (userid, is_primary, firstname, email, phonenumber)
VALUES ('" . $user_id . "', 1, '". $name . "', '" . $email . "', '" . $phone. "')";
if (mysqli_query($conn, $sql_contacts )) {
  echo "New record created successfully - " . $conn->insert_id;
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
*/
// Создать добавить вложения для пользователя по ид
/* FILE UPLOAD */

if(isset($_FILES['fileupload'])) {
	$errors= array();
	$file_name = $_FILES['fileupload']['name'];
	$file_size =$_FILES['fileupload']['size'];
	$file_tmp =$_FILES['fileupload']['tmp_name'];
	$file_type=$_FILES['fileupload']['type'];
	$file_ext=strtolower(end(explode('.',$_FILES['fileupload']['name'])));
	
	$expensions= array("pdf","doc","docx");// Define with files are accepted
							  
	$OriginalFilename = $FinalFilename = preg_replace('`[^a-z0-9-_.]`i','',$_FILES['fileupload']['name']); 
	$FileCounter = 1; 
	
	/*echo '../crm/uploads/clients/' . $user_id . '/'.$FinalFilename;
	while (file_exists( '../crm/uploads/clients/' . $user_id . '/'.$FinalFilename  ))  // The folder where the files will be stored; set the permission folder to  0755. 
		  $FinalFilename = $FileCounter++.'_'.$OriginalFilename; 
	
	echo $FinalFilename;
	if(in_array($file_ext,$expensions)=== false){
		$errors[]="Extension non valide, veuillez choisir un .pdf, .jpg, .png";
	}
	// Set the files size limit. Use this tool to convert the file size param https://www.thecalculator.co/others/File-Size-Converter-69.html
	if($file_size > 1536000){
		$errors[]='File size must be max 1500Kb';
	}
	try {
	    move_uploaded_file($file_tmp,'../crm/uploads/clients/' . $user_id . '/'.$FinalFilename);
	} catch (Exception $e) {
	    echo 'Caught exception: ',  $e->getMessage(), "\n";
	}
		
	$sql_file = "INSERT INTO tblfiles (rel_id, rel_type, file_name)
	VALUES ('" . $user_id . "', 'customer', '" . $FinalFilename . "')";
	if (mysqli_query($conn, $sql_file)) {
	  echo "New file created successfully - " . $last_id;
	} else {
	  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}*/
	
}
/* end FILE UPLOAD */

mysqli_close($conn);
?>