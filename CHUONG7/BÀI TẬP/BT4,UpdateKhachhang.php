<?php
$servername = "localhost"
$username = "root"
$password = "";
$database = "quanlybanhang1";
$conn= mysqli_connect($servername, $username, $password, $database)
if(!$conn){
    die("Không thể kết nối: ". mysqli_connect_error($conn))
}
if($_SERVER["REQUEST_METHOD"]== "POST"){
    $makh=_$POST["txtMaKH"];
    $tenkh=$_POST["txtTenKH"];
    $namsinh=$_POST["txtNamSinh"];
    $dienthoai=$_POST["txtDienThoai"];
$sql= "UPDATE INTO khachhang(makh, tenkh, namsinh, dienthoai, dia chi)
        VALUES('makh', 'tenkh', 'namsinh', 'dienthoai', 'diachi')";

if(mysqli_query($conn, $sql)){
    echo "Thêm dữ liệu thành công!";
}
else{
    echo"Thêm dữ liệu thất bại!". mysqli_connect_error($conn);
    }
}
//dòng lệnh update
$sql_update = "UPDATE * FROM khachhang";
$result = mysqli_query($conn, $sql_update);
echo"<h2>DANH SÁCH KHÁCH HÀNG</h2>";
if (mysqli_num_rows($result) > 0) {

    echo "<table border='1' cellpadding='10' cellspacing='0'>";

    echo "<tr>
            <th>Mã khách hàng</th>
            <th>Tên khách hàng</th>
            <th>Năm sinh</th>
            <th>Điện thoại</th>
            <th>Địa chỉ</th>
          </tr>";
          while ($row = mysqli_fetch_assoc($result)) {

            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['mahd']) . "</td>";
            echo "<td>" . htmlspecialchars($row['makh']) . "</td>";
            echo "<td>" . htmlspecialchars($row['mahang']) . "</td>";
            echo "<td>" . htmlspecialchars($row['soluong']) . "</td>";
            echo "<td>" . htmlspecialchars($row['thanhtien']) . "</td>";
            echo "</tr>";
    
        }
    
        echo "</table>";
    
    } else {
        echo "Chưa có dữ liệu hóa đơn!";
    }
    
    mysqli_close($conn);

?>