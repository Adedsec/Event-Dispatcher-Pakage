<?php

use App\Core\Dispatcher;
use App\Events\UserSignedIn;
use App\Listeners\SendEmail;
use App\Listeners\UpdateLastLogin;
use App\Models\User;

require_once 'vendor/autoload.php';

$user = new User();

$user->id = 1;
$user->email = "arefmaddah@gmail.com";

$dispatcher = new Dispatcher();

$dispatcher->addListener('UserSignedIn', new SendEmail());
$dispatcher->addListener('UserSignedIn', new UpdateLastLogin());
$dispatcher->dispatch(new UserSignedIn($user));
