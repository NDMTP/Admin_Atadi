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

$maloai = $_GET["loai"];
$tensp = $_GET["tensp"];

$sql = "select max(MASP) as maxid from sanpham where MALOAI = '{$maloai}'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$id = $row['maxid'];
preg_match("/([A-Za-z]+)([0-9]+)/", $id, $matches);
$kytu = $matches[1];
$so = strval($matches[2])+1;

$nextid = $kytu.$so;

$motasp = $_GET["mota"];

    $sql = "INSERT INTO sanpham (MASP,MALOAI,TENSP,MOTA,LINKANH)
    VALUES ('$nextid', '$maloai', '$tensp', '$motasp', null); ";

 $result = $conn->query($sql);


if ($_GET["M"]!=""){
  $giaM = $_GET["M"];
  if ($giaM !=0){
    $sql = "insert into sizecuasanpham values ('$nextid','M',$giaM)";
    $conn->query($sql);
  }
}
if ($_GET["L"]!=""){
  $giaL = $_GET["L"];
  if ($giaL !=0){
    $sql = "insert into sizecuasanpham values ('$nextid','L',$giaL)";
    $conn->query($sql);
  }
}
if ($_GET["XL"]!=""){
  $giaXL = $_GET["XL"];
  if ($giaXL !=0){
    $sql = "insert into sizecuasanpham values ('$nextid','XL',$giaXl)";
    $conn->query($sql);
  }
}
if ($_GET["Vừa"]!=""){
  $giaVua = $_GET["Vừa"];
  if ($giaVua !=0){
    $sql = "insert into sizecuasanpham values ('$nextid','Vừa',$giaVua)";
    $conn->query($sql);
  }
}
if ($_GET["Lớn"]!=""){
  $giaLon = $_GET["Lớn"];
  if ($giaLon !=0){
    $sql = "insert into sizecuasanpham values ('$nextid','Lớn',$giaLon)";
    $conn->query($sql);
  }
}
if ($_GET["Combo"]!=""){
  $giaCombo = $_GET["Combo"];
  if ($giaCombo !=0){
    $sql = "insert into sizecuasanpham values ('$nextid','Combo',$giaCombo)";
    $conn->query($sql);
  }
}

if ( $result) {
  echo '<script language="javascript">
  alert("Thêm thành công!");
    </script>';
  header('Location: danhsachsanpham.php');
} else {
    echo "Thêm sản phẩm thất bại: " . $conn->error;
}


// Đóng kết nối
$conn->close();
?>