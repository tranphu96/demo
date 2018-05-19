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
        border-bottom: 1px solid #cdcdcd;
    }

    th {
        background-color: #efefef;
        border-bottom: 1px solid #cdcdcd;
        color: black;

    }
</style>
<body>
<?php
// load ra file head
$this->load->view('admin/top');
?>
<div class="w3-main" style="margin-left: -61px;margin-top: 359px;">

    <table>

        <tr >
            <th>ID</th>
            <th>Maso</th>
            <th>Name</th>
            <th>dia chi</th>
            <th>ngay sinh</th>
            <th>gioi tinh</th>
            <th>trinh do</th>
            <th>Hinh anh</th>
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

                <!-- --><?php /*echo "<pre>";
                print_r($user);
                echo "</pre>"; */?>

                <td><img src="<?php echo base_url ();?>assets/upload/<?php echo $user['image'];?>" width="100px" height="100px"  ></td>
                <td><a href='<?php echo base_url('user/update?id=' . $user['id']) ?>'>Update</a></td>
                <td><a href='<?php echo base_url('user/delete?id=' . $user['id']) ?>'>Del</a></td>
            </tr>


        <?php endforeach;?>



        </tbody>
    </table>
    <div class="clear"></div>
</div>
</div>
</body>
</html>