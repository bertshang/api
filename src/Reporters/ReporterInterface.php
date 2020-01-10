<?php

namespace Bertshang\Api\Reporters;

use Exception;

interface ReporterInterface
{
    public function report(Exception $e);
}
