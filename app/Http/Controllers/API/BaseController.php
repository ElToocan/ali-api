<?php


namespace App\Http\Controllers\API;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class BaseController
{

    /**

     * success response method.

     *

     * @return \Illuminate\Http\Response

     */

    public function sendResponse($result, $message)

    {

        $response = [

            'success' => true,

            'data'    => $result,

            'message' => $message,

        ];

        Log::debug(response()->json($response, 200));
        return response()->json($response, 200);

    }


    /**

     * return error response.

     *

     * @return \Illuminate\Http\Response

     */

    public function sendError($error, $errorMessages = [], $code = 404)

    {

        $response = [

            'success' => false,

            'message' => $error,

        ];


        if(!empty($errorMessages)){

            $response['data'] = $errorMessages;

        }

        Log::debug(response()->json($response, 200));
        return response()->json($response, $code);

    }





}
