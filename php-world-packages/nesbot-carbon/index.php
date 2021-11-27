<?php

require '../vendor/autoload.php';

use Carbon\Carbon;

printf("Now: %s", Carbon::now()->format('d/m/Y'));