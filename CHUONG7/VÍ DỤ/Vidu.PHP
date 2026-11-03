<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $servername = "localhost:8080";
        $database = "quanlybanhang1";
        $username ="root";
        $password = "";
        //create connection 
        $conn = mysqli_connect($servername, $username, $password, $database);
        //Thực hiện lệnh SELECT
        $sql = "*SELECT * FROM khachhang";
        if($result = mysqli_query($conn, $sql)){
            if(mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_array($result)){
                echo $row['makh'];
                echo $row['tenkh'];
                echo $row['namsinh'];
                echo $row['dienthoai'];
                echo $row['diachi'];
            }
        mysqli_free_result($result);
            }
            else{
                echo "No Records";
            }
        }
        else{
            echo "Truy vấn thất bại".mysqli_error($conn);
        }

        mysqli_close($conn);
    ?>
</body>
</html>