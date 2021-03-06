<?php
// +----------------------------------------------------------------------
// | HisiPHP框架[基于ThinkPHP5开发]
// +----------------------------------------------------------------------
// | Copyright (c) 2016-2018 http://www.hisiphp.com
// +----------------------------------------------------------------------
// | HisiPHP提供个人非商业用途免费使用，商业需授权。
// +----------------------------------------------------------------------
// | Author: 橘子俊 <364666827@qq.com>，开发者QQ群：50304283
// +----------------------------------------------------------------------
namespace app\common\validate;

use think\Validate;

/**
 * 语言包验证器
 * @package app\common\validate
 */
class AdminLanguage extends Validate
{
    //定义验证规则
    protected $rule = [
        'name|语言名称' => 'require|unique:admin_language',
        'code|语言代码'  => 'require|unique:admin_language',
    ];

    //定义验证提示
    protected $message = [
        'name.require' => '语言名称不允许为空',
        'name.unique' => '语言名称已存在',
        'code.require' => '语言代码不允许为空',
        'code.unique' => '语言代码已存在',
    ];
}
