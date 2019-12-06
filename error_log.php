<?php
function countDown($arg1){
    $arg1 = 0-10;
    try {
        if($arg1<1){
        throw new Exception('Er is iets fout gegaan');
        }elseif ($arg1>10) {
        throw new Exception('Er is iets fout gegaan');
        }
    } catch (Exception $e) {
        error_log($e, 3, "errors.log");
    echo("<h1>Er is iets fout gegaan!</h1>");
    }
}
?>