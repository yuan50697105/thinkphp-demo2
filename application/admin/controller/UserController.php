<?php
/**
 * Created by PhpStorm.
 * UserController: yuane
 * Date: 2018/1/2
 * Time: 0:01
 */

namespace app\admin\controller;


use app\admin\model\UserModel;
use think\Controller;
use think\Request;

class UserController extends Controller{

   public function index(Request $request){
       $user=new UserModel();
       $data=$request->param("name");
       $result=null;
       if(!isset($data)){
           $result=$user->select();
       }else{
           $result=$user->where("name","like","%".$data."%")->select();
       }
       return $this->fetch("user/Index",["data"=>$data]);
   }

   public function edit($id){
       $user=new UserModel();
       $data=$user->where("id","=",$id)->select();
       return $this->fetch("user/Edit",["data"=>$data]);
   }

   public function doEdit(Request $request){
       $data=$request->param();
       $user=new UserModel();
       $result=$user->isUpdate(true)->save($data);
       return json_encode($result);
   }

   public function save(){
       return $this->fetch("user/Save");
   }

   public function doSave(Request $request){
       $data=$request->param();
       $user=new UserModel();
       $result=$user->save($data);
       return json_encode($result);
   }

   public function delete($id){
       $user=new UserModel();
       $result=$user->where("id","=",$id)->delete();
       return json_encode($result);
   }


}