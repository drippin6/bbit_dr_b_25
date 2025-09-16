<?php
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // proceed with sending email
} else {
    echo "Invalid email format";
}

$to = $email;
$subject = "Welcome to ICS 2.2! Account Verification";
$message = "
<html>
<head>
<title>Account Verification</title>
</head>
<body>
<p>Hello $username,</p>
<p>You requested an account on ICS 2.2.</p>
<p>In order to use this account you need to <a href='http://yourdomain.com/verify.php?email=$email'>Click Here</a> to complete the registration process.</p>
<p>Regards,<br>Systems Admin<br>ICS 2.2</p>
</body>
</html>
";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: ICS 2.2 <noreply@yourdomain.com>" . "\r\n";

mail($to, $subject, $message, $headers);


// db connection
$conn = new mysqli("localhost", "root", "", "taskapp");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// fetch users in ascending order
$sql = "SELECT username FROM users ORDER BY username ASC";
$result = $conn->query($sql);

// display numbered list
if ($result->num_rows > 0) {
    $count = 1;
    echo "<ol>";
    while($row = $result->fetch_assoc()) {
        echo "<li>" . htmlspecialchars($row["username"]) . "</li>";
        $count++;
    }
    echo "</ol>";
} else {
    echo "No users found.";
}
$conn->close();
?>

