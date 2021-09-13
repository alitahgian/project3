<?php
//  include "filter.php";

    function rigist ($username,$email,$password){
        $con =  mysqli_connect("localhost", "root", "", "test1");
        mysqli_query($con, "INSERT INTO `user`(`name`, `email`, `password`) VALUES ('$username','$email','$password')");
        $res = mysqli_affected_rows($con);
        if($res== 1){
          return true;
        }else {
          return false;
     }

     // query selcet data pase 
 }
    function login($email,$password){
    
      $con =  mysqli_connect("localhost", "root", "", "test1");
      $myq= mysqli_query($con, "SELECT * from `user` where `email` = '$email'  and `password` = '$password'");
      $res = mysqli_fetch_assoc($myq);
      
      return $res;
 }

  //query select data
  function Alidata(){
    
  $con =  mysqli_connect("localhost", "root", "", "test1");
  $myq= mysqli_query($con, "SELECT `id`, `name`, `email` from  `user` ");

  $data=[];
  while ($res = mysqli_fetch_assoc($myq)){
    
    $data[] = $res;
  }
  return $data;
}
