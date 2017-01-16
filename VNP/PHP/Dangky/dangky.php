<?php
    // kết nối csdl 
    include_once('ketnoi.php');
    $action    = isset($_POST['action']) ? $_POST['action'] : '';
    $hoten      = isset($_POST['hoten']) ? $_POST['hoten'] : '';
    $diachi   = isset($_POST['diachi']) ? $_POST['diachi'] : '';
    $ngaysinh      = isset($_POST['ngaysinh']) ? $_POST['ngaysinh'] : '';
    $gioitinh       = isset($_POST['gioitinh']) ? $_POST['gioitinh'] : -1;
    if($action == 'submit') {
        if($hoten == '') {
            $errors['hoten'] = 'Vui lòng nhập họ và tên';
        }
        if($ngaysinh == '') {
            $errors['ngaysinh'] = 'Vui lòng nhập ngày sinh';
        }
        if($diachi == '') {
            $errors['diachi'] = 'Vui lòng nhập địa chỉ';
        }
        if($gioitinh < 0) {
            $errors['gioitinh'] = 'Vui lòng chọn một giới tính';
        }
        if(empty($errors)) {
           $sql = "INSERT INTO users(hoten,ngaysinh,gioitinh,diachi)
                VALUES('". $hoten ."', ".$ngaysinh.", ".$gioitinh." ,'".$diachi."')";
            mysqli_query($link, $sql);
            if ( mysqli_insert_id($link) > 0 ) {
                header($_SERVER['REQUEST_URI']);
            }
        }
    }
 ?> 
<!DOCTYPE html>
<html>
    <head>
        <title>Validate</title>
        <!-- Latest compiled and minified CSS & JS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <script src="//code.jquery.com/jquery.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
            <form action="" method="POST" class="form-horizontal" role="form">
                    <div class="form-group">
                        <legend class="col-sm-8 col-sm-offset-2">Form Validate</legend>
                    </div>
                    <div class="form-group ">
                        <label class="control-label col-sm-2 col-sm-offset-2" for="hoten">Họ tên :</label>
                        <div class="col-sm-4 ">
                            <input type="text" class="form-control" name="hoten" placeholder="Mời bạn nhập tên ">
                             <?php if(isset($errors['hoten'])) : ?>
                                <span class="text-danger"><?php echo $errors['hoten'] ?></span>
                            <?php endif ?>
                        </div>
                    </div>


                    <div class="form-group ">
                        <label class="control-label col-sm-2 col-sm-offset-2" for="name">Date :</label>
                        <div class="col-sm-4 ">
                            <input type="ngaysinh" class="form-control" name="ngaysinh" placeholder="Mời bạn nhập ngày sinh ">
                            <?php if(isset($errors['ngaysinh'])) : ?>
                                <span class=" text-danger"><?php echo $errors['ngaysinh'] ?></span>
                            <?php endif ?>
                        </div>
                    </div>

                    <div class="form-group ">
                        <label class="control-label col-sm-2 col-sm-offset-2" for="name">Giới tính :</label>
                        <div class="radio">
                            <label><input type="radio" name="gioitinh" value="1" <?php echo $gioitinh == 1 ? 'checked = "checked"': ""  ?> >Nam</label>
                            <label><input type="radio" name="gioitinh" value="0" <?php echo $gioitinh ==0 ? 'checked = "checked" ': "" ?> >Nữ</label>
                            
                        </div>
                        <div class="col-sm-4 col-sm-offset-4">
                            <?php if(isset($errors['gioitinh'])) : ?>
                                <span class=" text-danger"><?php echo $errors['gioitinh'] ?></span>
                            <?php endif ?>
                        </div>
                    </div>
                    
                    <div class="form-group ">
                        <label class="control-label col-sm-2 col-sm-offset-2" for="name">Địa chỉ :</label>
                        <div class="col-sm-4 ">
                            <input type="text" class="form-control" name="address" placeholder="Mời bạn nhập địa chỉ ">
                           <?php if(isset($errors['diachi'])) : ?>
                                <span class=" text-danger"><?php echo $errors['diachi'] ?></span>
                            <?php endif ?>
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="col-sm-8 col-sm-offset-4">
                            <input type="hidden" name="action" value="submit">
                             <button class="btn btn-sm btn-primary" type="submit">Đăng Ký</button>
                        </div>
                    </div>
            </form>
        </div>
    </body>
</html>