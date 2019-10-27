<?php

    include 'includes/functions.php';

    if (isset($_GET['src'])) {
        $src = $_GET['src'];
    }
    switch ($src)
    {
        case 'delete':
        if (isset($_GET['pid'])) {
            $pid = $_GET['pid'];
            deleteproductfromstock($pid);
        }
    }
