<?php $conn = new PDO('mysql:host=localhost;port=3306;dbname=test;', "root", "");

if(isset($_POST['action'])){
        $act = $_POST['action'];
        if($act === 'getUserData'){
            $data = json_decode($_POST['data']);
            $arr = get_object_vars($data);

            $sql = "SELECT `content` FROM `user` WHERE `content` LIKE '%".$arr['bob']."%';";
            $result = $conn->query($sql);

            print_r(json_encode($result->fetchAll()) ) ;
        }

}



