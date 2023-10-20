<?php
    $name = $_POST['Name'];
    $position = $_POST['position'];
    $mobile_code = $_POST['mobile_code'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $message = $_POST['message'];

    // connecting to database
    $connect = new mysqli('localhost','root','','message_portofolio');
    if($connect->connect_error){
        echo "$connect->connect_error";
        die("Connection Failed: ".$connect->connect_error);
    }else{
        $sql = $connect->prepare('insert into messages(name, position, mobile_code, email, gender, message) values(?, ?, ?, ?, ?, ?)');
        // kata awal pakai data type, string = 's', integer = 'i'
        $sql->bind_param('ssisss', $name, $position, $mobile_code, $email, $gender, $message);
        $execval = $sql->execute();
		echo $execval;
        echo "Thank you for messaging, i will contact you soon! :)";
        // Close connection
        $sql->close();
        $connect->close();
    }
?>

