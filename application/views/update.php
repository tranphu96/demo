<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Update</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('Login/css/util.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('Login/css/main.css');?>">
</head>
<body>

<span style="background-color:red;">
  <div class="container">
      <div class="row">
          <div class="col-md-4 col-md-offset-4">
              <div class="login-panel panel panel-success">
                  <div class="panel-heading">
                      <h3 class="panel-title">Update</h3>
                  </div>
                  <div class="panel-body">

                  <?php
                  $error_msg=$this->session->flashdata('error_msg');
                  if($error_msg){
                      echo $error_msg;
                  }
                  ?>
                      <?php foreach ($users as $user) : ?>
                      <form role="form" method="post" action="<?php echo base_url('user/update_user_id'); ?>">

                          <fieldset>
                              <div class="form-group">
                                  <input class="form-control" placeholder="id" name="id" type="text" autofocus>
                              </div>

                              <div class="form-group">
                                  <input class="form-control" placeholder="magv" name="magv" type="text" autofocus>
                              </div>

                              <div class="form-group">
                                  <input class="form-control" placeholder="tengv" name="tengv" type="text" autofocus>
                              </div>
                              <div class="form-group">
                                  <input class="form-control" placeholder="diachi" name="diachi" type="text" value="">
                              </div>

                              <div class="form-group">
                                  <input class="form-control" placeholder="ngaysinh" name="ngaysinh" type="date" value="">
                              </div>

                              <div class="form-group">
                                  <input class="form-control" placeholder="gioitinh" name="gioitinh" type="text" value="">
                              </div>
                              <div class="form-group">
                                  <input class="form-control" placeholder="trinhdo" name="trinhdo" type="text" value="">
                              </div>
                              <div class="form-group">
                              <input type="file" name="image" size="20" />
                              </div>
                              <div class="container-login100-form-btn">
                                    <button class="login100-form-btn"  type="submit" value="Update" name="update" >
                                        Sửa
                                    </button>
                              </div>


                          </fieldset>
                      </form>
                      <?php endforeach; ?>
                      <center></b> <br></b><a href="<?php echo base_url('user/user_profile'); ?>">trangchu</a></center>
                  </div>
              </div>
          </div>
      </div>
  </div>





</span>




</body>
</html>
