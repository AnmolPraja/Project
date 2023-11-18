<<<<<<< HEAD
<?php
session_start();

$hostname = "localhost";
$username = "root";
$password = "";
$database = "hi_trading";
$connection = mysqli_connect($hostname, $username, $password, $database);

$query = "SELECT * FROM users where username='".$_POST['username']."' and password='".$_POST['password']."'";

$result = mysqli_query($connection, $query);

if(mysqli_num_rows($result) > 0){
    $data = mysqli_fetch_assoc($result);
    $_SESSION['logged'] = true;
    $_SESSION['id'] = $data['id'];
    header("Location: home.html");
}else{
    echo "Not valid login credential. <a href='login_page.html'><button>Try again</button></a>";
=======
<?php
session_start();

$hostname = "localhost";
$username = "root";
$password = "";
$database = "hi_trading";
$connection = mysqli_connect($hostname, $username, $password, $database);

$query = "SELECT * FROM users where username='".$_POST['username']."' and password='".$_POST['password']."'";

$result = mysqli_query($connection, $query);

if(mysqli_num_rows($result) > 0){
    $data = mysqli_fetch_assoc($result);
    $_SESSION['logged'] = true;
    $_SESSION['id'] = $data['id'];
    header("Location: home.html");
}else{
    echo "Not valid login credential. <a href='login_page.html'><button>Try again</button></a>";
>>>>>>> 05a5b9f40df00a0f20510cfbbcdd2407563d0323
}