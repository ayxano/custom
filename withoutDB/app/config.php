<?php

use function DI\create;
use eftec\bladeone\BladeOne;

return [
    BladeOne::class         => create(BladeOne::class)->constructor('../views','../cache'),
];