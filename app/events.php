<?php

Event::listen('user.login', 'Acme\Services\Validators\LoginValidator@fire');
Event::listen('user.register', 'Acme\Services\Validators\RegisterValidator@fire');