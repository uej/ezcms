<?php
namespace cms\controller;
use ez\core\Controller;
use ez\core\Session;
use ez\core\Network;

/**
 * 后台全局控制器
 * 
 * @author lxj <my2233@foxmail.com>
 */
class GlobalController extends Controller
{
    
    /**
     * 构造函数
     * 
     * @access public
     */
    public function __construct() {
        parent::__construct();
        $this->log();
    }
    
    /**
     * 日志记录
     * 
     * @access private
     */
    private function log() {
        $logs   = new \cms\model\Logs();
        $logs->insert([
            'App'           => APP_NAME,
            'Controller'    => CONTROLLER_NAME,
            'Action'        => ACTION_NAME,
            'Post'          => json_encode(filter_input_array(INPUT_POST), JSON_UNESCAPED_UNICODE),
            'Get'           => json_encode(filter_input_array(INPUT_GET), JSON_UNESCAPED_UNICODE),
            'Cookie'        => json_encode(filter_input_array(INPUT_COOKIE), JSON_UNESCAPED_UNICODE),
            'UserID'        => Session::get('user')['ID'],
            'IP'            => Network::get_ip(),
            'CreateTime'    => time(),
            'Session'       => json_encode(Session::get(), JSON_UNESCAPED_UNICODE),
        ]);
    }
    
}

