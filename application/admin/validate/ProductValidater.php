<?php
/**
 * Created by PhpStorm.
 * User: yuane
 * Date: 2018/1/2
 * Time: 16:27
 */

namespace app\admin\validate;


use think\Validate;

class ProductValidater extends Validate
{
    protected $rule=[
      ["name","require","不能为空"]
    ];
}