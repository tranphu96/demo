
<div id="leftSide" style="padding-top:30px;">

    <!-- Account panel -->

    <div class="sideProfile">
        <a href="#" title="" class="profileFace"><img src="<?php echo public_url(); ?>/admin/images/user.png" width="40"></a>
        <span>Xin chào: <strong>admin!</strong></span>
        <span>Trần Phú</span>
        <div class="clear"></div>
    </div>
    <div class="sidebarSep"></div>
    <!-- Left navigation -->

    <?php $this->load->helper('admin'); ?>

    <ul id="menu" class="nav">

        <li class="home">

            <a href="<?php echo base_url('user/register'); ?>">
                <span>Bảng điều khiển</span>
                <strong></strong>

            </a>


        </li>
        <li class="tran">

            <a href="<?php echo base_url('home');?>">
                <span>Quản lý</span>
            </a>
        </li>
        <li class="product">

            <a href="admin/product.html" class=" exp">
                <span>danh sách</span>
            </a>
        </li>
        <li class="account">

            <a href="" class=" exp">
                <span>Tài khoản</span>
            </a>
        </li>
        <li class="support">

            <a href="admin/support.html" class=" exp">
                <span>Hỗ trợ và liên hệ</span>
            </a>
        </li>
        <li class="content">

            <a href="<?php echo base_url('user/user_logout');?>" class="w3-bar-item w3-button w3-padding w3-blue "><i class="fa fa-sign-out">
                <span>Logout</span>
            </a>
        </li>

    </ul>

</div>
<div class="clear"></div>
