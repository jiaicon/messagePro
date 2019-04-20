<?php
/**
 * Created by PhpStorm.
 * User: icon
 * Date: 2019/4/18
 * Time: 下午12:11
 */
namespace App\Http\Controllers;

use App\Models\Announce;
use App\Models\Dialog;
use Illuminate\Http\Request;

class AnnounceController extends Controller {
    public function create(Request $request) {
        if($request->has('announce_id')) {
            $announce_id = $request->input('announce_id');
        }else {
            $announce_id = time();
        }
        $announce = new Announce();
        $res = $announce->fill([
            'content'=>$request->input('content'),
            'announce_id'=>$announce_id,
        ]);
        if($res->save()) {
            return $this->returnJSON(['content'=>$request->input('content'),
                'announce_id'=>$announce_id,], 0, '新建成功');
        }
    }
    public function lists(Request $request) {

    }
}