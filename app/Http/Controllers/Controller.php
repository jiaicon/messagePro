<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function returnJSON($data, $status=0, $msg = '', $StatusCode = 200, $patches = null) {
        $ret = [
            'status' => $status,
            'msg' => $msg,
            'data' => $data
        ];
        if(!empty($patches)) {
            $ret['patches'] = $patches;
        }
        return new JsonResponse($ret, $StatusCode);
    }
}
