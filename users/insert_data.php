<?php
// Step 3: Connect to MySQL database
include "../connection.php";

// Step 4: Retrieve form data using $_POST
$customer_name = $_POST['customer_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$pax = $_POST['pax'];
$package_inr = $_POST['package_inr'];
$account_id = $_POST['account_id'];

// Step 5: Sanitize and validate form data
// Here you should use proper validation and sanitization techniques

// Step 6: Construct and execute SQL INSERT query
$sql = "INSERT INTO thailand_customers (customer_name, email,phone,pax,package_inr,account_id) VALUES ('$customer_name', '$email','$phone','$pax','$package_inr','$account_id')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Step 7: Close database connection
mysqli_close($conn);
?>
