<?php
namespace app\index\controller;

use think\Controller;
use xina\SaeTOAuthV2;

class Index extends Controller
{
    public function index()
    {
        $app_id = config("xina.WB_AKEY");
        $serct = config("xina.WB_SKEY");
        $callback_url = config("xina.WB_CALLBACK_URL");
        $o = new SaeTOAuthV2($app_id, $serct);
        $code_url = $o->getAuthorizeURL( $callback_url );
        var_dump($serct);
        //TODO:显示登录页面
        return $this->fetch('',[
            'url' => $code_url,
        ]);
    }
    public function callback(){
        $param = $this->request->param();
        var_dump($param);
    }
}
