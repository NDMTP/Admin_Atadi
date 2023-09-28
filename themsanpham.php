<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qlbanmicay";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$maloai = $_POST["loai"];
$tensp = $_POST["tensp"];

$sql = "select max(MASP) as maxid from sanpham where MALOAI = '{$maloai}'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$id = $row['maxid'];
echo $id;
preg_match("/([A-Za-z]+)([0-9]+)/", $id, $matches);
$kytu = $matches[1];
$so = strval($matches[2])+1;

$nextid = $kytu.$so;

function addPrice($conn,$id,$mg,$g){
  $sql = "insert into sizecuasanpham values ('$id','$mg',$g)";
  $conn->query($sql);
}

if ($_POST["M"]!=""){
  $sizeM = "M";
  $giaM = $_POST["M"];
  if ($giaM !=0){
    addPrice($conn,$nextid, $sizeM ,$giaM);
  }
}
if ($_POST["L"]!=""){
  $sizeL = "L";
  $giaL = $_POST["L"];
  if ($giaL !=0){
    addPrice($conn,$nextid, $sizeL ,$giaL);
  }
}
if ($_POST["XL"]!=""){
  $sizeXL = "XL";
  $giaXL = $_POST["XL"];
  if ($giaXL !=0){
    addPrice($conn,$nextid, $sizeXL ,$giaXL);
  }
}
if ($_POST["Vừa"]!=""){
  $sizeVua = "Vừa";
  $giaVua = $_POST["Vừa"];
  if ($giaVua !=0){
    addPrice($conn,$nextid, $sizeVua ,$giaVua);
  }
}
if ($_POST["Lớn"]!=""){
  $sizeLon = "Lớn";
  $giaLon = $_POST["Lớn"];
  if ($giaLon !=0){
    addPrice($conn,$nextid, $sizeLon ,$giaLon);
  }
}
if ($_POST["Combo"]!=""){
  $sizeCombo = "Combo";
  $giaCombo = $_POST["Combo"];
  if ($giaCombo !=0){
    addPrice($conn,$nextid, $sizeCombo ,$giaCombo);
  }
}

$motasp = $_POST["mota"];


// $email = $_POST["email"];
// $sql = "SELECT * FROM nguoidung WHERE email = '$email'";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//     // Nếu email đã tồn tại, thông báo lỗi và reload lại trang
//     echo '<script language="javascript">
//     alert("Email đã tồn tại!");
//     history.back();
//      </script>';  
//     exit();
// }
    $sql = "INSERT INTO sanpham (MASP,MALOAI,TENSP,MOTA,LINKANH)
    VALUES ('$nextid', '$maloai', '$tensp', '$motasp', null); ";

 $result = $conn->query($sql);

if ( $result) {
  echo '<script language="javascript">
  alert("Thêm thành công!");
    </script>';
} else {
    echo "Thêm sản phẩm thất bại: " . $conn->error;
}


// Đóng kết nối
$conn->close();
?>