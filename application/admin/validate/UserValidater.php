<?php
/**
 * Created by PhpStorm.
 * User: yuane
 * Date: 2018/1/2
 * Time: 16:24
 */

namespace app\admin;


use think\Validate;

class UserValidater extends Validate
{
    protected $rule=[
        ["id","required|mixlength:6","请输入账户|最短六位"],
        ["name","required|minlength:6","请输入密码|最短六位"]
    ];
}