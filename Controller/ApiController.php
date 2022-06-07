<?php

namespace App\Http\Controllers\API;

use App\Models\api\Test;
use App\Helpers\ApiFormat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GetController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $data = Test::all();
        if ($data) {
            return ApiFormat::success($data, 'success');
        } else {
            return ApiFormat::error('failed');
        }
    }
}
