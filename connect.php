<?php

$firstname = filter_input(INPUT_POST, 'firstname');
$lastname = filter_input(INPUT_POST, 'lastname');
$qusOne = filter_input(INPUT_POST, 'qusOne');
$qusTwo = filter_input(INPUT_POST, 'qusTwo');
$qusThree = filter_input(INPUT_POST, 'qusThree');

#var_dump($firstname, $lastname, $qusOne, $qusTwo, $qusThree);

$host = "localhost";
$dbname = "uts_webtek";
$dbusername = "root";
$dbpassword = "";

$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()) {
    die('Connection error('. mysqli_connect_errno().')'
    . mysqli_connect_error());
}

else{
    $sql = "INSERT INTO answer (firstname, lastname, qusOne, qusTwo, qusThree)
        VALUES ('$firstname', '$lastname', '$qusOne' ,'$qusTwo' ,'$qusThree')";
    if ($conn->query($sql)){
        echo "Record saved";
    }
    else{
        echo "Error: ". $sql ."<br>". $conn->error;
    }
    $conn->close();

}

/*$stmt = mysqli_stmt_init($conn);

if ( ! mysqli_stmt_prepare($stmt, $sql)){
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "sssss", $firstname, $lastname, $qusOne, $qusTwo, $qusThree);

mysqli_stmt_execute($stmt);*/


#echo "Connection successful"
?>