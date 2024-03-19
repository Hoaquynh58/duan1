<?php
    // include hoặc require tất cả các file có trên hệ thống (controllers/commons/models). Views ở trong controllers
    // require commons
    require './commons/env.php';
    require './commons/helper.php';

    // require controllers
    require_file(PATH_CONTROLLER);
    // require models
    require_file(PATH_MODEL);
    // Điều hướng
    include_once './views/header.php';
    $act= $_GET['act'] ?? '/';
    switch ($act) {
        case '/':
            homeIndex();
            break;
        
        default:
            # code...
            break;
    }
    include_once './views/footer.php';

?>