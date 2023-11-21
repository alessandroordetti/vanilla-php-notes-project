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
        'password' => password_hash($password, PASSWORD_BCRYPT)
    ]);

    if($email == 'alessandro.ord@gmail.com'){
        $_SESSION['admin'] = [
            'email' => $email
        ];

        header('location: /admin-index');
        exit();
    } else {
        login('auth', $email);
    }
    
    header('location: /');
    exit();
}

