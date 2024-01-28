<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\CompanyController;
use App\Controllers\ContractController;
use App\Controllers\FundingController;
use App\Controllers\UserController;
use App\Controllers\MessageController;
use App\Controllers\PaymentController;
use App\Controllers\AuthController;

/**
 * @var RouteCollection $routes
 */
$routes->get('/login', [AuthController::class, 'loginView'], ['as' => 'auth.login', 'filter' => 'guest']);
$routes->post('/login', [AuthController::class, 'login'], ['as' => 'auth.login.request', 'filter' => 'guest']);

// You can comment out this 2 line to disable user registration
$routes->get('/register', [AuthController::class, 'registerView'], ['as' => 'auth.register', 'filter' => 'guest']);
$routes->post('/register', [AuthController::class, 'register'], ['as' => 'auth.login.request', 'filter' => 'guest']);

$routes->post('/logout', [AuthController::class, 'logout'], ['as' => 'auth.logout.request']);
$routes->get('/register', [AuthController::class, 'registerView'], ['as' => 'auth.register', 'filter' => 'guest']);
$routes->post('/register', [AuthController::class, 'register'], ['as' => 'auth.register.request', 'filter' => 'guest']);

$routes->get('/', 'Home::index', ['as' => 'home']);

// company routes
$routes->get('/companies', [CompanyController::class, 'index'], ['as' => 'companies']);
$routes->get('/add-company', [CompanyController::class, 'addView'], ['as' => 'add.company']);
$routes->post('/add-company', [CompanyController::class, 'addAction'], ['as' => 'add.company.request']);
$routes->get('/company/edit', [CompanyController::class, 'updateView'], ['as' => 'update.company']);
$routes->post('/update-company', [CompanyController::class, 'updateAction'], ['as' => 'update.company.request']);
$routes->post('/company/delete', [CompanyController::class, 'delete'], ['as' => 'delete.company.request']);

// contract routes
$routes->get('/contracts', [ContractController::class, 'index'], ['as' => 'contracts']);
$routes->get('/add-contract', [ContractController::class, 'addView'], ['as' => 'add.contract']);
$routes->post('/add-contract', [ContractController::class, 'AddAction'], ['as' => 'add.contract.request']);

// funding routes
$routes->get('/fundings', [FundingController::class, 'index'], ['as' => 'fundings']);
$routes->get('/add-funding', [FundingController::class, 'addView'], ['as' => 'add.funding']);
$routes->post('/add-funding', [FundingController::class, 'addAction'], ['as' => 'add.funding.request']);
$routes->get('/funding/edit', [FundingController::class, 'updateView'], ['as' => 'update.funding']);
$routes->post('/funding/update', [FundingController::class, 'updateAction'], ['as' => 'update.funding.request']);
$routes->post('/funding/delete', [FundingController::class, 'delete']);

// payment routes
$routes->get('/payments', [PaymentController::class, 'index'], ['as' => 'payments']);
$routes->get('/add-payment', [PaymentController::class, 'addView'], ['as' => 'add.payment']);
$routes->post('/add-payment', [PaymentController::class, 'addAction']);

// user routes
$routes->get('/add-user', [UserController::class, 'createView'], ['as' => 'add.user']);
$routes->post('/add-user', [UserController::class, 'create'], ['as' => 'add.user.request']);
$routes->get('/users', [UserController::class, 'index'], ['as' => 'users']);

// contact routes
$routes->get('/messages', [MessageController::class, 'index'], ['as' => 'messages']);
$routes->get('/message/view', [MessageController::class, 'view'], ['as' => 'message.view']);
$routes->post('/message/delete', [MessageController::class, 'delete'], ['as' => 'message.delete']);
$routes->get('/contact-us', [MessageController::class, 'sendView'], ['as' => 'send.message']);
$routes->post('/contact-us', [MessageController::class, 'sendAction'], ['as' => 'send.message.request']);


