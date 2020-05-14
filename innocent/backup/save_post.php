<?php  
 $connect = mysqli_connect("localhost", "root", "", "innocent");
 if(isset($_POST["aname"]) or isset($_POST["amobile"])  or isset($_POST["acourse"]) or isset($_POST["adepartment"]))
 {
  $name = mysqli_real_escape_string($connect, $_POST["aname"]);
  $mobile = mysqli_real_escape_string($connect, $_POST["amobile"]);
  $course = mysqli_real_escape_string($connect, $_POST["acourse"]);
  $department = mysqli_real_escape_string($connect, $_POST["adepartment"]);
  if($_POST["tid"] != '')  
  {  
    //update post  
    $sql = "UPDATE temp SET t_name = '".$name."', t_mobile = '".$mobile."' , t_department = '".$department."' , t_course = '".$course."' WHERE t_id = '".$_POST["tid"]."'";  
    mysqli_query($connect, $sql);  
  }  
  else  
  {  
    //insert post 
    $co = mysqli_query($connect,"SELECT * FROM temp ORDER BY t_id DESC LIMIT 1");
    while($r=mysqli_fetch_array($co))
    {
      $userid=$r['t_id'];

    }

    $sql = "INSERT INTO temp(t_userid, t_name, t_mobile, t_department, t_course, t_status) VALUES ('$userid','".$name."', '".$mobile."',  '".$department."',  '".$course."',  'draft')";  
    mysqli_query($connect, $sql);  
    echo mysqli_insert_id($connect);  
  }
 }
?>