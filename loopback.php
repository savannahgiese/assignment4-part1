<?php
if($_SERVER['REQUEST_METHOD'] == 'GET') {
    $get_array = [];
    $get_array['Type'] = 'GET';
    if($_GET == []){
        $get_array['parameters'] = NULL;
        echo (json_encode($get_array));
    }
    else{
        $get_array['parameters'] = $_GET;
        echo (json_encode($get_array));
    }
}
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $post_array = [];
    $post_array['Type'] = 'POST';
    if($_POST == []){
        $post_array['parameters'] = NULL;
        echo (json_encode($post_array));
    }
    else{
        $post_array['parameters'] = $_POST;
        echo (json_encode($post_array));
    }
}
?>