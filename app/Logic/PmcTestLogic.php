<?php

namespace App\Logic;

use App\Models\PmcTestModel;
use App\Class\General;

class PmcTestLogic
{

    public static function RecordsdetGetByCaseId($case_id)
    {
        $resultado = PmcTestModel::RecordsdetGetByCaseId($case_id);
        return $resultado;
    }
}
