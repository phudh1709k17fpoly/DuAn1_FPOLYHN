<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $ho = $_POST['ho'];
  $ten = $_POST['ten'];
  $phone =$_POST['phone'];
  $address = $_POST['address'];
  $note = $_POST['note'];
 
 if(empty($ho)){
   $error['ho'] = " Vui lòng nhập lại trường này";
 }

 if(empty($ten)){
    $error['ten'] = " Vui lòng nhập lại trường này";
  }

  if(empty($phone)){
    $error['phone'] = " Vui lòng nhập lại trường này";
  }

  if(empty($address)){
    $error['address'] = " Vui lòng nhập lại trường này";
  }
  if(empty($note)){
    $error['note'] = " Vui lòng nhập lại trường này";
  }
if(!isset($error)){
   $name = $ho.''.$ten ;
   $sql = "INSERT INTO `addres_user`(`name`, `phone`, `adress`, `note`, `id_user`) VALUES
    ('$name',$phone,'$address','$note',$_SESSION[user])";

   pdo_execute($sql);

    $success  ='Thành công';
  }

}
?>
<div class="" style="margin-top: 100px;">
<a href="?ctl=order">Sử dụng địa chỉ trước đó</a>
</div>
<div class="row mb-4">
<form action="" method="post" id="form-cart">
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form3Example1">Họ</label>
        <input type="text" id="ho" class="form-control" name="ho" />
         <span class="form-message" style="color:red;"><?php if(!empty($error['ho'])){
	                       echo $error['ho'];
	                       } ?></span>
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
       <label class="form-label" for="form3Example2">Tên</label>
        <input type="text" id="ten" class="form-control" name="ten" />
        <span class="form-message" style="color:red;"><?php if(!empty($error['ten'])){
	                       echo $error['ten'];
	                       } ?></span>
      </div>
    </div>
  </div>

  <!-- Email input -->
  <div class="form-outline mb-4">
  <label class="form-label" for="form3Example3">Số điện thoại</label>
    <input type="number" id="phone" class="form-control" name="phone" />
    <span class="form-message" style="color:red;"><?php if(!empty($error['phone'])){
	                       echo $error['phone'];
	                       } ?></span>
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
  <label class="form-label" for="form3Example4">Địa chỉ</label>
    <input type="text" id="address" class="form-control" name="address" />
    <span class="form-message" style="color:red;"><?php if(!empty($error['address'])){
	                       echo $error['address'];
	                       } ?></span>
  </div>

  <!-- Checkbox -->
  <div class="form-outline mb-4">
  <label class="form-label" for="form4Example3">Chi tiết địa chỉ</label>
    <textarea class="form-control" id="form4Example3" rows="4" name="note" placeholder="số nhà/đườnng/xã,quận,phường/"></textarea>
    <span class="form-message" style="color:red;"><?php if(!empty($error['note'])){
	                       echo $error['note'];
	                       } ?></span>
  </div>
  <h4 style="color: green;"> <?php if(isset($success)){
    echo $success;
  } ?></h4>

  <button type="submit" class="btn btn-success">Success</button>
  </form>
  <script src="./js/validatorFormUser.js"></script>
    <script>
         validator({
          addres:'#form-cart',
             ErrorMessage:'.form-message',
             relus : [
                validator.isName('#ho'),
                validator.isName('#ten'),
                validator.isPhone2('#phone'),
                validator.isAddress('#address'),
             ]
        })
    </script>
  </section>
