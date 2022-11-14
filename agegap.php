<html>
    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


// <!-- if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// } -->

// Create database
$sql = "CREATE DATABASE myDB";
if (mysqli_query($conn, $sql)) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);
?>

<body>

    <form action="welcome.php" method="post">
        Current Date: <input type="date" name="cdate"><br>
        Date of Birth: <input type="date" name="dob"><br>
        <input type="submit">
    </form>

     <?php 
        if(isset($_POST['submit'])){
            $sum=0;
            $one=$_POST['cdate'];
            $two=$_POST['dob'];
              //echo $one;
            $sum=$one+$two;
            echo $sum;
            exit;
            }
      
             ?>

</body>

</html>