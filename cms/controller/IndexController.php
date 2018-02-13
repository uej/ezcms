<?php
namespace cms\controller;
use ez\core\Session;

/**
 * 后台登录
 * 
 * @author lxj <my2233@foxmail.com>
 */
class IndexController extends GlobalController
{
    
    /**
     * 登录页
     * 
     * @access public
     */
    public function index() {
        
        // ceshi 
        Session::set('user', ['ID' => 1]);
        var_dump(Session::get());
    }
    
    
}



