<<<<<<< HEAD
<?php
$host='localhost';
$username="root";
$password="";
$database="hi_trading";
$conn = mysqli_connect('localhost', 'root', '', 'hi_trading');
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "INSERT INTO users (username,  password) VALUES ('$username', '$password')";
mysqli_query($conn, $sql);
header('Location: login_page.html');
=======
<?php
$host='localhost';
$username="root";
$password="";
$database="hi_trading";
$conn = mysqli_connect('localhost', 'root', '', 'hi_trading');
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "INSERT INTO users (username,  password) VALUES ('$username', '$password')";
mysqli_query($conn, $sql);
header('Location: login_page.html');
>>>>>>> 05a5b9f40df00a0f20510cfbbcdd2407563d0323
exit();