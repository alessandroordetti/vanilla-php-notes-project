<?php 

/* BASIC ROUTES */
$router->get('/', 'controllers/index.php');
$router->get('/about', 'controllers/about.php');
$router->get('/contact', 'controllers/contact.php');

/* READ ROUTES */
$router->get('/notes', 'controllers/notes/index.php')->only('auth')->only('admin');
$router->get('/note', 'controllers/notes/show.php');

/* CREATE ROUTES */
$router->get('/notes/create', 'controllers/notes/create.php');
$router->post('/notes', 'controllers/notes/store.php');

/* UPDATE ROUTES */
$router->get('/note/edit', 'controllers/notes/edit.php');
$router->patch('/note', 'controllers/notes/update.php');

/* DELETE ROUTE */
$router->delete('/note', 'controllers/notes/destroy.php');

/* REGISTRATION ROUTES */
$router->get('/register', 'controllers/users/register.php')->only('guest');
$router->post('/register', 'controllers/users/store.php');

/* ADMIN PANEL */
$router->get('/admin-index', 'controllers/admin/index.php')->only('admin');