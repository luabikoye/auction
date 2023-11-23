<?php

    include ('connection/connect.php');


      if(isset($_POST["upload"]))
  {

        
    $file = $_FILES['file']['tmp_name'];
    $handle = fopen($file, "r");
    $c = 0;
    while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
              {

    $firstname = $filesop[1];
    $lastname = $filesop[2];
    $email = $filesop[3];
    $phone = $filesop[4];
    $exam_code = $filesop[5];
    $expire_date = $filesop[6];
    $query = "insert into participant (firstname, lastname, email, phone, exam_code, expire_date) 
    values ('$firstname', '$lastname','$email', '$phone', '$exam_code', '$expire_date')";

    $stmt = mysqli_prepare($db,$query);
    mysqli_stmt_execute($stmt);

    $c = $c + 1;
      }

    if($query){
        $success = "File has been successfully imported";
        include ('bulk-upload-participant.php');
        exit;
      } 
		 else
		 {
      $error = "File couldn't be imported";
      include ('bulk-upload-participant.php');
      exit;
    }

}

?>