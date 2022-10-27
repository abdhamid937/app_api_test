<?php
    if(function_exists($_GET['function'])) {
            $_GET['function']();
        }   

    function get_id()
    {
    $response = array(
                    'status' => 1,
                    'message' =>'Success',
                    'data' => 'ok'
                );               
    header('Content-Type: application/json');
    echo json_encode($response);

    }
?>
