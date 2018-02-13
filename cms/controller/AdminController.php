<?php
namespace cms\controller;
use ez\core\Session;

/**
 * 后台控制器
 * 
 * @author lxj <my2233@foxmail.com>
 */
class AdminController extends GlobalController
{
    
    /**
     * 构造函数
     * 
     * @access public
     */
    public function __construct() {
        parent::__construct();
        
        if (empty(Session::get('user')['ID'])) {
            $this->redirect('index/login');
        }
    }
    
}

