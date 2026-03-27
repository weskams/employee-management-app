<?php
// Get form data
$name = $_POST['name'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$address = $_POST['address'];
$date_of_birth = $_POST['date_of_birth'];
$phone = $_POST['phone'];
$department = $_POST['department'];
$position = $_POST['position'];

// Create an array
$contact = [
    "name" => $name,
    "gender" => $gender,
    "email" => $email,
    "address" => $address,
    "date_of_birth" => $date_of_birth,
    "phone" => $phone,
    "department" => $department,
    "position" => $position
];

// Convert to JSON
$json = json_encode($contact);

// Save to file
file_put_contents("contacts.txt", $json . PHP_EOL, FILE_APPEND);
echo "<script>alert('Information successfully uploaded')</script>";
exit();
?>