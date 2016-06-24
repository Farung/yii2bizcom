<?php

namespace frontend\controllers;

class TestController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionTest() {
                return $this->render('test');
    }
      public function actionTest2() {
    return $this->render('fahshop');  } 
  public function actionTest3(){
  $a=1;
  $name = "farung"; 
  return $this->render('test3',['a'=>$a,'n'=>$name]); 
  }
 
  public function actionTest4($sname=null,$fname=null){
      $sms = "your name :: $sname <br> lastname :: $fname";
   return $this->render('test4',['sms'=>$sms]);
  }
  public function actionTesturl(){
      return $this->render('testurl');
  }
}
