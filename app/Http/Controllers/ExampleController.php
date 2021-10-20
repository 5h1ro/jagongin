<?php

namespace App\Http\Controllers;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
        $dummy = [
            'name' => [
                'Bronze',
                'Silver',
                'Gold'
            ],
            'max' => [
                '200',
                '500',
                '1000'
            ]


        ];

        $data = (object) $dummy;
        var_dump($data);
        // if ($napi->isEmpty()) {
        //     return Response::json(array(
        //         'success'   => true,
        //         'message'   => '',
        //         'data'      => []
        //     ));
        // } else {
        //     return Response::json(array(
        //         'success'   => true,
        //         'message'   => '',
        //         'data'      => json_decode($napi)
        //     ));
        // }
    }
}
