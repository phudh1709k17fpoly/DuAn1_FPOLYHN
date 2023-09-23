<style>
    .container {
        max-width: 800px;
        margin: 0 auto;
    }

    .container div {
        margin-top: 20px;
    }
</style>
<section class="container"  style="margin-top: 300px;">
    <form action="?ctl=edit_products&id=<?=$_GET['id']?>" method="post" enctype="multipart/form-data" id="form-2">
     <input type="hidden" name="id" value="<?=$value['id']?>"> 
        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="form6Example1">Tên sản phẩm</label>
                    <input type="text" name="name" id="name" class="form-control"  value="<?=$value['name'] ?>">
                    <span class="form-message" style="color: red;"><?php if (!empty($error['name'])) {
                     echo $error['name'];
                    } ?></span>
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="form6Example2">Giá sản phẩm </label >
                    <input type="number" name="price" id="price" class="form-control" value="<?=$value['price'] ?>" >
                    <span class="form-message" style="color: red;"><?php if (!empty($error['name'])) {
                    echo $error['name'];
                    } ?></span>
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="form6Example2">Số lượng sản phẩm </label>
                    <input type="number" name="quantity" id="quantity" class="form-control" value="<?=$value['quantity'] ?>">
                    <span class="form-message" style="color: red;"><?php if (!empty($error['quantity'])) {
                    echo $error['quantity'];
                      } ?></span>
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="form6Example2">Giảm giá sản phẩm Products</label>
                    <input type="number" name="sale" id="sale" class="form-control" value="<?=$value['sale']?>.0" >
                    <span class="form-message" style="color: red;"><?php if (!empty($error['sale'])) {
                     echo $error['sale'];
                   } ?></span>
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col">
            <label class="form-label" for="form6Example2">Trạng thái</label>
                <select class="form-select" aria-label="Default select example" id="status" name="status">
                    <option selected value="0"></option>
                    <option value="1">Còn hàng</option>
                    <option value="2">Hết hàng</option>
                </select>
                <span class="form-message" style="color: red;"><?php if(!empty($error['status'])){
	                 echo $error['status'];
	                 } ?></span>
            </div>
            <div class="col">
            <label class="form-label" for="form6Example2">ID danh mục</label>
        <select class="form-select" aria-label="Default select example" name="id_cate">
            <option value="0" selected></option>
            <?php foreach($public as $iteam) : ?>
            <option value="<?= $iteam['id']?>"><?= $iteam['name']?></option>
             <?php endforeach ?>
        </select>
           <span class="form-message" style="color: red;"><?php if(!empty($error['id_cate'])){
	   echo $error['id_cate'];
	} ?></span>
            </div>
            <div class="col">
       <div class="form-outline">
       <label class="form-label" for="form6Example2">Upload ảnh</label>
       <input type="file" name="img"><br>
       <input type="hidden" name="img_old" value="<?=$value['img']?>">
       <span class="form-message" style="color: red;"><?php if(!empty($error['img'])){
	   echo $error['img'];
	   } ?></span>
     <span class="form-message" style="color: red;"><?php if(!empty($error_img['img'])){
	   echo $error_img['img'];
	   } ?></span>
       </div>
       </div>
        </div>

        <div class="col">
         <div class="form-outline">
           <label class="form-label" for="form6Example2">Nội dung sản phẩm </label><br>
           <textarea name="detail" id="detail" cols="100" rows="4"><?=$value['detail'] ?></textarea>
           <span class="form-message" style="color: red;"><?php if (!empty($error['detail'])) {
                     echo $error['detail'];
                       } ?></span>
         </div>
       </div>
        <div class="text-left"><button type="submit" class="btn btn-success">Success</button></div>
    </form>
    <div style="padding-top: 20px;"><button class="btn btn-outline-info"><a href="?ctl=products" class="text-decoration-none" style="color: black;">Quay Lại</a></button></div>
</section>