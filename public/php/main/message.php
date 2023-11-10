<?php
    $conn = mysqli_connect("localhost", "root", "", "db_project") or die("Database Error");
    $getMesg = mysqli_real_escape_string($conn, $_POST['text']);

    $check_data = "SELECT replies FROM tb_chatbot WHERE queries LIKE '%$getMesg%'";
    $run_query = mysqli_query($conn, $check_data) or die("Error");

    if(mysqli_num_rows($run_query) > 0){
        $fetch_data = mysqli_fetch_assoc($run_query);
        $replay = $fetch_data['replies'];
        echo $replay;
    }else{
        echo "Kami tak tau lah! males mau beli trek.";
    }
?>