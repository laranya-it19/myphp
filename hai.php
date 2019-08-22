<?php
$servername = "121.200.55.60:3307";
$username = "2019UIT1028";
$password = "2019UIT1028";
$dbname = "2019UIT1028";

// create connection
$conn = new mysqli($servername,$username,$password,$dbname);
// check connection
//if ($conn->connect_error){
  //       die("connection failed: "$conn->connect_error);
//}
$sql = "SELECT s_no,enrollment_no,student_name,course_name FROM students";
$result = $conn->query($sql);
//if ($result->num_rows -> 0) {
   // output data of each row
   while($row =$result->fetch_assoc()) {
//echo "hi";
     echo "s_no:1" . $row["s_no"] . " -name: " . $row["enrollment_no"]." " . $row["student_name"]. "<br />";
}
//} else {
//echo "0 results";
//}
$conn->close();
?>
