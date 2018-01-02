<?php
/**
 * Created by PhpStorm.
 * User: yuane
 * Date: 2018/1/2
 * Time: 16:17
 */

namespace app\admin\controller;


use app\admin\model\ProTypeModel;
use think\Controller;
use think\Request;

class ProTypeController extends Controller
{
    public function index(Request $request){
        $data=$request->param("name");
        $result=null;
        $protype=new ProTypeModel();
        if(!isset($data)){
            $result=$protype->select();
        }else{
            $result=$protype->where("name","like","%".$data."%");
        }
        return json_encode($result);
    }
    public function edit($id){
        $protype=new ProTypeModel();
        $data=$protype->where("id","=",$id)->select();
        return json_encode($data);
    }
    public function doEdit(Request $request){
        $protype=new ProTypeModel();
        $data=$request->param();
        $result=$protype->isUpdate(true)->save($data);
        return json_encode($result);
    }
    public function save(){
        return $this->fetch("");
    }
    public function doSave(Request $request){
        $data=$request->param();
        $protype=new ProTypeModel();
        $result=$protype->save($data);
        return json_encode($result);
    }
}