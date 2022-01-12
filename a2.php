<?php
    include_once 'a1.php' ;

        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $content = $_POST['content'];
        $contact_no = $_POST['phone'];
        $address = $_POST['address'];
        $attachment = $_FILES['image']['name'];
        $target = "upload/".$attachment;
       
        
    
        $sql = "INSERT INTO contribute (NAME,EMAIL,SUBJECT,CONTENT,ATTACHMENT,CONTACT_NO,ADDRESS) VALUES('$name','$email','$subject','$content','$attachment','$contact_no','$address');";
        
        mysqli_query($conn,$sql);
       
        move_uploaded_file($_FILES['image']['tmp_name'],$target);
    
    header("Location: ../DBMS_Project/index.php?entry=success");

?>

