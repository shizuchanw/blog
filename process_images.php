#!/usr/local/bin/php
<?php 
    header('Content-Type: text/plain; charset=utf-8');
    if(isset($_FILES['image']) & isset($_FILES['username'])) {
        $queue_dir = __DIR__ . "/queue";
        $new_filename = $queue_dir . "/" . $_FILES['username']."-".strval(time()) . ".png";

        //moves the uploaded file to a new location;
        $success = move_uploaded_file($_FILES['image']['tmp_name'], $new_filename);

        if($success) {
            echo "File was uploaded successfully";
        } else {
            echo "File upload failed";
        }
    }
?>