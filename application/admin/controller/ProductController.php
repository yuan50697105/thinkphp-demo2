<?php
/**
 * Created by PhpStorm.
 * User: yuane
 * Date: 2018/1/2
 * Time: 16:08
 */

namespace app\admin\controller;


use app\admin\model\ProductModel;
use think\Controller;
use think\Request;

class ProductController extends Controller {
    public function index(Request $request){
        $product=new ProductModel();
        $data=$request->param("name");
        $result=null;
        if(!isset($data)){
            $result=$product->select();
        }else{
            $result=$product->where("name","like","%".$data."%");
        }
        return $this->fetch("product/Index",["data"=>$result]);
    }
    public function edit($id){
        $product=new ProductModel();
        $data=$product->where("id","=","id")->select();
        return $this->fetch("product/Edit",["data"=>$data]);
    }
    public function doEdit(Request $request){
        $data=$request->param();
        $product=new ProductModel();
        $result=$product->isUpdate(true)->save($data);
        return json_encode($result);
    }
    public function save(){
        return $this->fetch("product/Save");
    }
    public function doSave(Request $request){
        $data=$request->param();
        $product=new ProductModel();
        $result=$product->save($data);
        return json_encode($result);
    }
    public function delete($id){
        $product=new ProductModel();
        $result=$product->where("id","=",$id)->delete();
        return json_encode($result);
    }
}