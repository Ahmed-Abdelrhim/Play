<?php
namespace App\Http\Controllers\API;
trait BlogPostTrait {
    public function apiResponse($data = [] , $status = null , $headers = null)
    {
        $array = [
            'data' => $data,
            'status' => $status,
            'msg'=> $headers,
        ];
        return response($array,$status);
    }
}
