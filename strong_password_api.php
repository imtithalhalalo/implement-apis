<?php
$password = $_POST['password'];

//found uppercase char
$uppercase = preg_match('@[A-Z]@', $password);

//found lowercase char
$lowercase = preg_match('@[a-z]@', $password);

//Found numbers
$number    = preg_match('@[0-9]@', $password);

//found symbols
$symbols = preg_match('@[\w\.]@', $password);

if(!$uppercase || !$lowercase || !$number || !$symbols){
    $message = 'A combination of uppercase letters, lowercase letters, numbers, and symbols.';
}else if(strlen($password) < 12) {
    $message = 'Password should be at least 12 characters in length';
}else if(strlen($password) < 14) {
    $message = 'It is recommended to enter password with 14 characters in length';
}else{
    $message = 'Strong password.';
}

$result = [
    "password" => hash('sha256', $password),
    "message" => $message
];
echo json_encode($result)
?>
