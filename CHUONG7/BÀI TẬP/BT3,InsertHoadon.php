<?php
$servername = "localhost";
$database = "quanlybanhang1";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Không kết nối: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $mahd = $_POST["txtMaHoadon"];
    $makh = $_POST["txtMaKH"];
    $mahang = $_POST["txtMaHang"];
    $soluong = $_POST["txtSoLuong"];
    $thanhtien = $_POST["txtThanhTien"];

    $sql = "INSERT INTO hoadon
            (mahd, makh, mahang, soluong, thanh tien)
            VALUES  ('$mahd', '$makh', '$mahang', '$soluong', '$thanhtien')";

    if (mysqli_query($conn, $sql)) {
        echo "Thêm dữ liệu thành công!";
    } else {
        echo "Thêm dữ liệu thất bại: " . mysqli_error($conn);
    }
}

// SELECT hiển thị dữ liệu
$sql_select = "SELECT * FROM hoadon";

$result = mysqli_query($conn, $sql_select);

echo "<h2>DANH SÁCH HÓA ĐƠN</h2>";

if (mysqli_num_rows($result) > 0) {

    echo "<table border='1' cellpadding='10' cellspacing='0'>";

    echo "<tr>
            <th>Mã hóa đơn</th>
            <th>Mã khách hàng</th>
            <th>Mã hàng</th>
            <th>Số lượng</th>
            <th>Thành tiền</th>
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
