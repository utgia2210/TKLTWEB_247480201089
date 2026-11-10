<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $servername = "localhost";
        $database = "quanlybanhang1";
        $username ="root";
        $password = "";
        //create connection 
        $conn = mysqli_connect($servername, $username, $password, $database);
        //Thực hiện lệnh DELETE
       
        $sql = "DELETE FROM hoadon WHERE mahd = '004' ";
        if($result = mysqli_query($conn, $sql)){
           
                echo ("Xóa thành công.");
            }
        else{
            echo "Thêm dữ liệu thất bại".mysqli_error($conn);
        }

        mysqli_close($conn);
    ?>
</body>
</html>