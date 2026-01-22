<?php

namespace App\interfaces;

require_once "src/componentes/Log.php";

use App\componentes\Log;


interface ILog
{
    public function registrarLog(Log $log);
}
