
<style>
		.container{
			max-width: 800px;
			margin:  0 auto;
		}
		.container div{
		   margin-top:30px;
		}
</style>
<section class="container"  style="margin-top: 300px;">
<form action="index.php?ctl=edit_cate&id=<?=$public['id']?>" method="post" enctype="multipart/form-data" id="form-1">
 <div class="row mb-4">
 <div class="col">
	<label for="exampleInputPassword1">Name Categories</label>
	<input id="fullname" type="text" name="name" class="form-control" value="<?=$public['name']?>">
	    <span class="form-message" style="color: red;"></span>
  </div>
  <div class="col">
	<label for="exampleInputPassword1">Name Categories</label>
	<select class="form-select" aria-label="Default select example" name="condition">
        <option value=""></option>
        <option value="0">Đang Hoạt Động</option>
        <option value="1">Ngừng Hoạt Động</option>
    </select>
	    <span class="form-message" style="color: red;"><?php if(!empty($error['condition'])){
	   echo $error['condition'];
	}?></span>
  </div>
 </div>
  <button type="submit" class="btn btn-primary" style="margin-top: 50px;">Submit</button>
</form>
</section>