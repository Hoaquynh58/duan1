<?php
    /*
        Luồng MVC 1: Vào index
                -> được điều hướng xử lý logic trong controller tương ứng
                    -> Hàm sẽ trả về view luôn vì ko có tương tác với model   
    */
    function homeIndex(){
        require_once PATH_VIEW . 'home.php';
    }
    /*
        Luồng MVC 2: Vào index
                -> được điều hướng xử lý logic trong controller tương ứng
                    -> Hàm sẽ tương tác với hàm xử lý dữ liệu trong model
                        ->Dữ liệu này sẽ được trả về views   
    */
?>