<?php 

use Core\App;
use Core\Database;
use Core\Validator;

$email = $_POST['email'];
$password = $_POST['password'];

$errors = [];

if(!Validator::email($email)){
    $errors['email'] = 'Please provide a valid email';
}

if(!Validator::string($password, 7, 25)){
    $errors['password'] = 'Please provide a valid password';
}

if(!empty($errors)){
    return view('registration/create.view.php', [
        'errors' => $errors
    ]);
}

$db = App::resolve(Database::class);

$user = $db->query('SELECT * FROM users WHERE email = :email', [
    ':email' => $email
])->find();

if($user){
    header('location: /');
} else {
    $db->query('INSERT INTO users (email, password) VALUES (:email, :password)',[
        'email' => $email,
        'password' => $password
    ]);
}
