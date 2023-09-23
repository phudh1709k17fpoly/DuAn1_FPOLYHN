
<style>
		.container{
			max-width: 800px;
			margin:  0 auto;
		}
		.container div{
		   margin-top:30px;
		}
</style>
<section class="container" style="margin-top: 300px;">
<form action="?ctl=editUser&id=<?=$iteam['id']?>" method="post" enctype="multipart/form-data" id="">
 <div class="row mb-4">
 <input type="hidden" name="id" value="<?= $iteam['id'] ?>">
 <input type="hidden" name="name" value="<?= $iteam['name'] ?>">
 <input type="hidden" name="email" value="<?= $iteam['email'] ?>">
 <input type="hidden" name="username" value="<?= $iteam['username'] ?>">
 <input type="hidden" name="password" value="<?= $iteam['password'] ?>">
 <input type="hidden" name="img" value="<?= $iteam['img'] ?>">
 <input type="hidden" name="password_mahoa" value="<?= $iteam['password_mahoa'] ?>">
 <div class="col">
	<label for="exampleInputPassword1">Phân quyền</label>
	<select class="form-select" aria-label="Default select example" name="role">
        <option value="10" selected></option>
        <option value="0">Người dùng</option>
        <option value="1">Admin</option>
    </select>
	    <span class="form-message" style="color: red;"><?php if(!empty($error['role'])){
	   echo $error['role'];
	}?></span>
  </div>
 </div>
  <button type="submit" class="btn btn-primary" style="margin-top: 50px;">Submit</button>
</form>
</section>