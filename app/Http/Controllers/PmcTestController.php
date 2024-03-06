<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Http\Responses\ApiResponse;
use App\Logic\PmcTestLogic;
use Illuminate\Http\Request;

class PmcTestController extends Controller
{
    public function __construct()
    {
    }

    public function RecordsdetGetByCaseId(Request $request)
    {
        $resultado = new ApiResponse();
        $case_id = $request->input("case_id");
        try {
            $resultado = PmcTestLogic::RecordsdetGetByCaseId($case_id);
        } catch (\Exception $e) {
            return ApiResponse::error('Error' . $e, 404, $resultado);
        }
        return ApiResponse::success('Success', 200, $resultado);
    }
}
