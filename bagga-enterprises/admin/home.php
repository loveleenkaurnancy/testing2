<?php
    require 'header.php';
    require 'Controllers/DataFile.php';

    $object = new DataFile();
    if (isset($_POST['submit']))
    {

        $result=$object->Products($_POST['subcategory'],$_POST['name'],$_FILES['image'],$_POST['price']);
        if ($result==true){

            $msg = '<div class="alert alert-success alert-dismissable fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Success!</strong> Data Entered Succcessfully.
                  </div>';
        }
        else{
            $msg = '<div class="alert alert-danger alert-dismissable fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Alert!</strong> Data Not Enter, Try Again.</div>';
        }
    }

    @$del=$_GET['id'];
    @$photodel=$_GET['dd'];
    if($del>0)
    {
        $comm = mysqli_query($object->db,"delete from products where id='$del' ");
        if(!$comm)
        {
            $msg = '<div class="alert alert-danger alert-dismissable fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Alert!</strong> Data Not Deleted, Try Again.</div>';
        }
        else
        {
            $filedel="pics/".$photodel;
            if(!unlink($filedel))
            {
                $msg = '<div class="alert alert-danger alert-dismissable fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Alert!</strong> Data Not Deleted, Try Again.</div>';

            }
            else
            {
                $msg = '<div class="alert alert-success alert-dismissable fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Success!</strong> Data Deleted Succcessfully.
                  </div>';
            }
        }
    }
?>
    <style>
        .dataHeight{
            min-height: 10px !important;
        }
    </style>
    <script>
        function show(str) {
            var xhttp;
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (xhttp.readyState == 4) {
                    document.getElementById("testid").innerHTML = xhttp.responseText;
                }
            };
            xhttp.open("GET", "select.php?q="+str, true);
            xhttp.send();
        }
    </script>
    <div class="right_col dataHeight" role="main">
        <div class="x_panel">
            <div class="x_title">
                <h2>Add Products</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>

                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br />
                <?php if(isset($msg)){
                    echo $msg;
                }?>
                <h4>Add Water Purifier Products</h4>
                <p class="font-gray-dark">
                    Following are the Form in which you add the products of Water Purifier.
                </p>

                <form class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                        <label class="control-label col-md-3">Select Category *:</label>
                        <div class="col-md-7">
                                <select onchange="show(this.value)" name="category" id="category" class="form-control">
                                    <?php
                                    echo "<option value='' disabled selected>Select Category</option>";
                                    $sql1 = "SELECT distinct(category) FROM category";
                                    $result = mysqli_query($object->db, $sql1);
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
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Select Sub-Category *:</label>
                        <div class="col-md-7">
                            <select id='testid' class="form-control" name="subcategory" id="subcategory">
                                <option>First Select Category</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3" for="first-name">Product Name <span class="required">*</span>
                        </label>
                        <div class="col-md-7">
                            <input type="text" id="first-name2" name="name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3" for="first-name">Product Image<span class="required">*</span>
                        </label>
                        <div class="col-md-7">
                            <input type="file" name="image" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3" for="last-name">Product Price<span class="required">*</span>
                        </label>
                        <div class="col-md-7">
                            <input type="text" id="last-name2" name="price" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-7 col-md-offset-3">
                            <button type="submit" name="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Product Information</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>

                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <p class="text-muted font-13 m-b-30">
                            Below Table show the information about the products.
                        </p>
                        <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Subcategory</th>
                                <th>Image</th>
                                <th>Price</th>
                                <th>Delete</th>
                            </tr>
                            </thead>


                            <tbody>
                            <?php
                                echo $object->getData();
                            ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
    require 'footer.php';
?>