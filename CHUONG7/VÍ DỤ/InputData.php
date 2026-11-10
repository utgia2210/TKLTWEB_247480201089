<?php
     $username = "root";
     $password = "";
     $server = "localhost";
     $databasename = "sinhdien";
     $connect=mysqli_connect($server, $username, $password, $databasename);
    if(!$connect){
        die("Không kết nối:" . mysqli_connect_error());
        exit();
    }
    $msv="";
    $hoten="";
    $nganhhoc="";
    $tongdiem="";
    
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(isset($_POST["txtMSV"])){
            $msv=$_POST['txtMSV'];
        }
        if(isset($_POST["txtHoten"])){
            $hoten=$_POST['txtHoten'];
        }
        if(isset($_POST["txtNganhhoc"])){
            $nganhhoc=$_POST['txtNganhhoc'];
        }
        if(isset($_POST["txtTongdiem"])){
            $tongdiem=$_POST['txtTongdiem'];
        }
        $sql = "INSERT INTO danhsach(msv, hoten, nganhhoc, tongdiem) VALUES ('$msv','$hoten','$nganhhoc','$tongdiem')";
        if(mysqli_query($connect, $sql)){
            echo "Thêm dữ liệu thành công";
        }else{
            echo "Error: $sql. <br>". mysqli_error($connect);
        }
    }
    mysqli_close($connect);



?>