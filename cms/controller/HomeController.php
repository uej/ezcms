<?php
namespace cms\controller;

/**
 * 后台首页
 * 
 * @author lxj <my2233@foxmail.com>
 */
class HomeController extends GlobalController
{
    
    /**
     * 首页
     * 
     * @access public
     */
    public function index() {
        $this->display();
    }
    
}
