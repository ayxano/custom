<?php

use function DI\create;
use eftec\bladeone\BladeOne;
use Service\DatabaseService;

return [
    BladeOne::class         => create(BladeOne::class)->constructor('../views','../cache'),
    'db'                    => DatabaseService::create()
];