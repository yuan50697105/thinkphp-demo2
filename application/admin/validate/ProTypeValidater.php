<?php
/**
 * Created by PhpStorm.
 * User: yuane
 * Date: 2018/1/2
 * Time: 16:28
 */

namespace app\admin\validate;


use think\Validate;

class ProTypeValidater extends Validate
{
    protected $rule=[
      ["name","require","不能为空"]
    ];
}