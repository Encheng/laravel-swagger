<?php
/**
 * Created by PhpStorm.
 * User: compter
 * Date: 2018/8/30
 * Time: 15:17
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/**
 * Class Controller
 *
 * @package App\Http\Controllers
 *
 * @SWG\Swagger(
 *     basePath="",
 *     host="127.0.0.1",
 *     schemes={"http"},
 *     @SWG\Info(
 *         version="1.0",
 *         title="OpenApi",
 *         @SWG\Contact(name="Pek Ratanak", url="https://www.google.com"),
 *     ),
 *     @SWG\Definition(
 *         definition="Error",
 *         required={"code", "message"},
 *         @SWG\Property(
 *             property="code",
 *             type="integer",
 *             format="int32"
 *         ),
 *         @SWG\Property(
 *             property="message",
 *             type="string"
 *         )
 *     )
 * )
 */
class ApiController extends Controller
{
    /**
     * @SWG\GET(
     *     path="/api/index",
     *     summary="api index by tags",
     *     tags={"測試tag"},
     *     description="返回測試内容",
     *     operationId="apIndex",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="tags",
     *         in="query",
     *         description="拿數據的描述",
     *         required=true,
     *         type="string",
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="Dashboard overview."
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */
    public function index(Request $request)
    {
        return response()->json([
            'result'    => [
                'statistics' => [
                    'users' => [
                        'name'  => 'Name',
                        'email' => '213213@qq.com'
                    ]
                ],
            ],
            'message'   => '',
            'type'      => 'success',
            'status'    => 0
        ]);
    }
}

