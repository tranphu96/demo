<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
    table {
        border-collapse: collapse;
        width: 90%;
        margin-top: -300px;
        margin-left: 100px;
        border-bottom: 3px;


    }

td{

}
    th, td {
        text-align: left;
        padding: 8px;

    }

tr{
    border-bottom: 3px;
}

    th {
        background-color: #337ab7;
        color: white;

    }
</style>
<body>
<div class="container-fluid">
    <div class="row content">
        <div class="col-sm-3 sidenav">
            <h4>John's Blog</h4>
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="<?php echo base_url('home');?>">Home</a></li>
                <li><a href="<?php echo base_url('user'); ?>">Friends</a></li>
                <li><a href="#section2">Family</a></li>
                <li><a href="#section3">Photos</a></li>
                <li><a href="<?php echo base_url('user/user_logout');?>" class="w3-bar-item w3-button w3-padding w3-blue "><i class="fa fa-sign-out"></i> Logout</a></li>
            </ul><br>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search Blog..">
                <span class="input-group-btn">
          <button class="btn btn-default" type="button">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </span>
            </div>
        </div>
    </div>


<div class="w3-main" style="margin-left:300px;margin-top:43px;">
    <table>

        <tr >
            <th>ID</th>
            <th>Maso</th>
            <th>Name</th>
            <th>dia chi</th>
            <th>ngay sinh</th>
            <th>gioi tinh</th>
            <th>trinh do</th>
            <th>Sửa dữ liệu</th>
            <th>Xóa dữ liệu</th>
        </tr>
        </thead>
        <tbody>


            <?php foreach ($users as $user) : ?>
                <tr>
                    <td><?php echo $user['id']; ?></td>
                    <td><?php echo $user['magv']; ?></td>
                    <td><?php echo  $user['tengv']; ?></td>
                    <td><?php echo  $user['diachi']; ?></td>
                    <td><?php echo  $user['ngaysinh']; ?></td>
                    <td><?php echo  $user['gioitinh']; ?></td>
                    <td><?php echo  $user['trinhdo']; ?></td>
                    <td><a href='<?php echo base_url('user/update?id=' . $user['id']) ?>'>Update</a></td>
                    <td><a href='<?php echo base_url('user/delete?id=' . $user['id']) ?>'>Del</a></td>
                </tr>


            <?php endforeach;?>



        </tbody>
    </table>

</div>
</div>
</div>
</body>
</html>
