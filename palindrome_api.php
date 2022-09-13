<?php
    $string = $_GET['string'];

    //Check palindrome
    function palindrome($string){ 
        return strrev($string) == $string; 
    } 

    $is_palindrome = palindrome($string);
    $result = [
        "string" => $string,
        "palindrome" => $is_palindrome 
    ];

    //print json
    echo json_encode($result)
?>