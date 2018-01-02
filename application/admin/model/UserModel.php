<?php
/**
 * Created by PhpStorm.
 * UserController: yuane
 * Date: 2018/1/2
 * Time: 0:04
 */

namespace app\admin\model;


use app\admin\controller\UserController;
use think\db\exception\DataNotFoundException;
use think\db\exception\ModelNotFoundException;
use think\exception\DbException;
use think\Model;

class UserModel extends Model
{
    protected $table="user";
}