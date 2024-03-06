<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class PmcTestModel
{          
    public static function RecordsdetGetByCaseId($case_id): Object
    {
        $parametros = array(
			$case_id			
		); 
        $res = DB::select("CALL sp_recordsdet_get_by_case_id(?)", $parametros);
        return $res[0] ?? new \stdClass();
    }    
}
