<?php
/**
 * 获取、设置配置函数
 * 
 * @param mixed $name 配置的名称或者 key=>value 对
 * @param mixed $value 配置$name的value
 * 
 * @return mixed 
 */
function config($name=null, $value=null)
{
    global $_config;
    
	/* 无参数时获取所有 */
    if (empty($name)) return $_config;
   
    /* 优先执行设置获取或赋值 */ 
    if (is_string($name)) {

        /* 值过滤 */
        if (is_null($value)) {
            return isset($_config[$name]) ? $_config[$name] : null;
        }

        /* 设置配置定义 */
        $GLOBALS['_config'][$name] = $value;
        return;
    }
	
    /* 批量设置 */ 
    if(is_array($name))
        return $GLOBALS['_config'] = array_merge($_config,array_change_key_case($name));
	
    return null;
}
