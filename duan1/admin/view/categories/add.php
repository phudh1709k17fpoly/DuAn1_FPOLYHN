
<style>
		.container{
			max-width: 800px;
			margin:  0 auto;
		}
		.container div{
		   margin-top:30px;
		}
</style>
<section class="container" style="margin-top: 300px;" >
<form action="index.php?ctl=add_cate" method="post" enctype="multipart/form-data" id="form-1">
 <div class="row mb-4">
 <div class="col">
	<label for="exampleInputPassword1">Name Categories</label>
	<input id="fullname" type="text" name="name"  class="form-control">
	    <span class="form-message" style="color: red;"><?php if(!empty($error['name'])){
	   echo $error['name'];
	} ?></span>
  </div>
 </div>
  <button type="submit" class="btn btn-primary" style="margin-top: 50px;">Submit</button>
</form>
</section>