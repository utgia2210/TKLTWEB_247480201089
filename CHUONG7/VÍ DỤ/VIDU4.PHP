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
        //Thực hiện lệnh UPDATe
        $sql = "UPDATE  khachhang SET tenkh='Nguyễn Hoàng Hôn' WHERE makh ='K008 '";
        if($result = mysqli_query($conn, $sql)){
           
                echo ("Mẫu tin đã được thêm thành công.");
            }
        else{
            echo "Thêm dữ liệu thất bại".mysqli_error($conn);
        }

        mysqli_close($conn);
    ?>
</body>
</html>