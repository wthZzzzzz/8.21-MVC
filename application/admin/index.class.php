<?php
use lib\db;
use lib\Smarty;
//class index{
//    function int(){
//        $db=new \db();
//        $smarty=new \Smarty();
//        var_dump($smarty);
//        $smarty->display("admin.html");
//    }
//}
class index extends main {

    function int(){
        $db=$this->db;
        $smarty=$this->smarty;
$smarty->display("admin.html");
    }
    function login() {

       $uname= $_POST["uname"];
       $upassword= $_POST["upassword"];
       $db=$this->db;

        $result=$db->query("select * from demo where uname='$uname' and upassword='$upassword'");
        var_dump($result);

        if($result->num_rows){
            echo "成功登录";
            echo APP_JS;

        }else{
            echo "登录失败";
        }
    }
    function zhuce(){

        $db=$this->db;
        $smarty=$this->smarty;
        $smarty->display("reg.html");
    }
    function reg(){

        $uname= $_POST["uname"];
        $upassword= $_POST["upassword"];
        $upassword1= $_POST["upassword1"];
       if($upassword!==$upassword1){
           echo "两次密码不一致";
           return;
       }

        $db=$this->db;
        $smarty=$this->smarty;
      $result=$db->query("insert into demo(uname,upassword) values ('$uname','$upassword')");

  if($db->affected_rows>0){
      echo "插入成功";
  }
    }
    function checkName(){

        $name=$_POST["uname1"];
            echo $name;
//        $db=new mysqli("localhost","root","123456","uuer","3308");
//        if(mysqli_connect_error()){
//            dir("数据库连接失败");
//        }
//        $db->query("set names utf8");
//       $result= $db->query("select * from demo where name='$uname'");
//       echo "select * from demo where name='$uname'";
////       echo $result->num_rows;
//       if($result->num_rows==0){
//echo true;
//       }else{
//           echo false;
//       }

    }
}
