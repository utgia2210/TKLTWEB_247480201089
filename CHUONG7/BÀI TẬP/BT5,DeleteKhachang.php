<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "quanlybanhang";
$conn=mysqli($server, $username, $password, $database)
if(!$conn){
    die("Không thể kết nối !". mysqli_connect_error())
}
if($_SERVER["REQUEST_METHOD"]== "POST"){
    $makh =["txtMaKH"];
    $tenkh =["txtTenKH"];
    $namsinh =["txtNamSinh"];
    $dienthoai = ["txtDienThoai"];
    $diachi =["txtDiaChi"];

    $sql = "DELETE INTO khachhang(makh, tenkh, namsinh, dienthoai, diachi
            VALUES ('makh', 'tenkh', 'namsinh', 'dienthoai', 'diachi')";
    if(mysqli_query($conn, $sql)){
        echo "Thêm dữ liệu thành công"
    }
    else{
        echo"Thêm dữ liệu thất bại". mysqli_connect_error($conn);  
    }
}
//lệnh DELETE
$sql_delete = "DELETE * FROM khachhang";
$result=mysqli_query($conn, $sql_delete);
echo "<h2>DANH SÁCH KHÁCH HÀNG</h2>"
if (mysqli_num_rows($result) > 0) {

    echo "<table border='1' cellpadding='10' cellspacing='0'>";
    echo" <tr>
            <th>Mã khách hàng</th>
            <th>Tên khách hàng</th>
            <th>Năm sinh</th>
            <th>Điện thoại</th>
            <th>Địa chỉ</th>
                                 </tr>"
                while ($row = mysqli_fetch_assoc($result)) {

            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['makh']) . "</td>";
            echo "<td>" . htmlspecialchars($row['tenkh']) . "</td>";
            echo "<td>" . htmlspecialchars($row['namsinh']) . "</td>";
            echo "<td>" . htmlspecialchars($row['dienthoai']) . "</td>";
            echo "<td>" . htmlspecialchars($row['diachi']) . "</td>";
            echo "</tr>";
    
        }
    
        echo "</table>";
    
    } else {
        echo "Chưa có dữ liệu hóa đơn!";
    }
    
    mysqli_close($conn);
                    




?>