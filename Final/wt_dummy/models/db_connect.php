<?php
    $uname="root";
    $servername="localhost";
    $pass="";
    $db_name="wt_dummy_project";

    function execute($query){
        global $uname, $servername, $pass, $db_name;
        $conn=mysqli_connect($servername, $uname, $pass, $db_name);
        if(!$conn){
            die("Connection Error: ".mysqli_connect_error());
        }
        mysqli_query($conn,$query);
    }

    function doQuery($query){
        global $uname, $servername, $pass, $db_name;
        $conn=mysqli_connect($servername, $uname, $pass, $db_name);
        if(!$conn){
            die("Connection Error: ".mysqli_connect_error());
        }
        $result=mysqli_query($conn, $query);
        $data=array();
        if($result && mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_assoc($result)){
                $data[]=$row;
            }
        }
        return $data;
    }
?>