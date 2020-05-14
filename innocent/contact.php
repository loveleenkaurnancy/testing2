<?php
require("config.php");

if(isset($_POST["submit"]))
{
 
    $name=$_POST['name'];
    $gender=$_POST['gender'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $pincode=$_POST['pincode'];
    $department=$_POST['department'];
    $course=$_POST['course'];
    $hostel=$_POST['hostel'];

    $co = mysqli_query($con,"SELECT * FROM temp ORDER BY t_id DESC LIMIT 1");
    while($r=mysqli_fetch_array($co))
    {
      $userid=$r['t_userid'];

    }

    $comm = mysqli_query($con,"insert into details(d_userid,d_name,d_gender,d_mobile,d_email,d_address,d_pincode,d_department,d_course,d_hostel)
        values('$userid','$name','$gender','$mobile','$email','$address','$pincode','$department','$course','$hostel')");

    $de= mysqli_query($con,"delete from temp where t_userid='$userid'");
    
    if($comm && $de)
    {
        $msg = "Successfully Submit";
    }
    else
    {
        echo mysqli_error($con);
    }
}
?>


<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css">

<script>
  function show(str) {
    var xhttp;    
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (xhttp.readyState == 4) {
        document.getElementById("course").innerHTML = xhttp.responseText;
      }
    };
    xhttp.open("GET", "select.php?q="+str, true);
    xhttp.send();
  }

  function show2(str) {
    var xhttp;    
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (xhttp.readyState == 4) {
        document.getElementById("fees").innerHTML = xhttp.responseText;
      }
    };
    xhttp.open("GET", "select2.php?q="+str, true);
    xhttp.send();
  }
</script>

</head>
<body>

<h3>Contact Form</h3>

<div class="container">
    <div class="col-md-2">
    </div>

    <div class="col-md-8">
      <form method="post">
        <label for="fname"> Name</label>
        <input type="text" id="name" name="name" placeholder="Your name.." required pattern='[A-Za-z \\s]*' title="Enter Characters">

        <input name="gender" type="radio" class="with-gap" id="gender" value="male" required>
        <label>Male</label>

        <input name="gender" type="radio" class="with-gap" id="gender" value="female" required>
        <label>Female</label><br><br>

        <label> Mobile</label>
        <input type="text" id="mobile" name="mobile" placeholder="Contact Number.." required pattern="[0-9]{10}" title="Enter 10 digits">

        <label for="department">Department</label>
        <select onchange="show(this.value)" id="department" name="department" required>
            <?php
              echo "<option value='' disabled selected>Select Department</option>";
              $sql1 = "SELECT DISTINCT c_department FROM courses";
              $result = mysqli_query($con, $sql1);
              if (mysqli_num_rows($result) > 0) 
              {
                  // output data of each row
                 while($row = mysqli_fetch_array($result))
                 {
                    echo '<option value="'.$row[0].'">'.$row[0].'</option>';
                 }
               }
               else
               {
                 echo mysqli_error($con);
               }
                      
            ?>
        </select>

        <label for="course">Course</label>        
        <select onchange="show2(this.value)" id='course' name="course" required>
        <option value='' disable>Select Course</option>
        </select>

        <label for="fees">Fees</label>        
        <div id='fees' name="fees" required>
        </div>

        <br>

        <label for="fname"> Email</label>
        <input type="email" id="email" name="email" placeholder="Your Email.."  required>

        <label>Address</label>
        <textarea id="address" name="address" placeholder="Address.." style="height:100px"  required ></textarea>

        <label> PinCode</label>
        <input type="text" id="pincode" name="pincode" placeholder="Pincode.."  required pattern="[0-9]{6}" title="Enter 6 digits">


        <label>Hostel</label>
        <input name="hostel" type="radio" class="with-gap" id="showc" value="yes" required>
        <label>Yes</label>

        <input name="hostel" type="radio" class="with-gap" id="hidec" value="no" required>
        <label>No</label><br>



        <p>Rs. 25,000</p>
        <br>

        <input type="submit" value="Submit" name="submit">

            <div class="form-group">  
                <input type="hidden" name="t_id" id="t_id" />  
                <div id="autoSave"></div>  
            </div>  

      </form>
    </div>

    <div class="col-md-2">
    </div>
</div>

</body>
</html>

<script>
$(document).ready(function(){
  $("p").hide();
    $("#hidec").click(function(){
        $("p").hide();
    });
    $("#showc").click(function(){
        $("p").show();
    });
});
</script>

<script>  
 $(document).ready(function(){  
      function autoSave()  
      {  
           var name = $('#name').val();  
           var mobile = $('#mobile').val();

           var department = $('#department').val();  
           var course = $('#course').val();  

           var t_id = $('#t_id').val();  
           if(name != '' || mobile != '' || department != ''|| course != '')  
           {  
                $.ajax({  
                     url:"save_post.php",  
                     method:"POST",  
                     data:{aname:name, amobile:mobile, adepartment:department, acourse:course, tid:t_id},  
                     dataType:"text",  
                     success:function(data)  
                     {  
                          if(data != '')  
                          {  
                               $('#t_id').val(data);  
                          }  
                          $('#autoSave').text("Post save as draft");  
                          setInterval(function(){  
                               $('#autoSave').text('');  
                          }, 5000);  
                     }  
                });  
           }            
      }  
      setInterval(function(){   
           autoSave();   
           }, 2500);  
 });  
 </script>
