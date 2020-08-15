
<?php
    try{
        $db = new mysqli("localhost", "root", "", "sigma");
    }catch(Exception $exc){
        echo $exc -> getTraceAsString();
    }
    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['state']) && isset($_POST['city'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $state = $_POST['state'];
        $city = $_POST['city'];

        $is_insert = $db->query("INSERT INTO `registrosigma`(`name`, `email`, `state`,`city`) VALUES ('$name','$email','$state', '$city')");

        if($is_insert == TRUE){

            exit;
        }
    }
?>
