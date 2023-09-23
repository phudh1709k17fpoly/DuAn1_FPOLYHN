<section class="container" style="margin-top: 300px;">
    <form action="?ctl=upload&id=<?=$_GET['id']?>" method="post" enctype="multipart/form-data" id="">
        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="form6Example1"> Tên sản phẩm</label>
                    <input type="file" name="img" id="name" class="form-control">
                    <span class="form-message" style="color: red;"><?php if (!empty($error['name'])) {
                     echo $error['name'];
                    } ?></span>
                </div>
            </div>
            <div class="text-left"><button type="submit" class="btn btn-success">Success</button></div>
    </form>
</section>