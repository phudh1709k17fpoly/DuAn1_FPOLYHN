<?php
if(isset($_POST['submitcomment'])){
  if(isset($_SESSION['user'])) {

    $comment = $_POST['comment'];
    if (empty($comment)){
      $comment_error['error'] = " Vui lòng nhập comment ở đây";
    }
    if (!empty($comment)) {
      $sql = "INSERT INTO `feedback`(`content`, `id_user`, `id_pr`) VALUES
       ('$comment',$_SESSION[user],$_GET[id])";
      pdo_execute($sql);
    }
  }else{
    echo("<script>location.href ='../login';</script>");
  }
}

 $class  = new work;
 $publiccomment = $class->comment($_GET['id']);

?>

<div class="product__details__tab__desc">
  <section>
    <div class="container bootdey">
      <div class="col-md-12 bootstrap snippets">
        <div class="panel">
          <div class="panel-body">
            <form action="" method="post">
              <textarea class="form-control" rows="2" placeholder="What are you thinking?" name="comment"></textarea>
              <div class="mar-top clearfix">
                <input class="btn btn-sm btn-primary pull-right" type="submit" name="submitcomment" value="Gửi">
                <a class="btn btn-trans btn-icon fa fa-video-camera add-tooltip" href="#"></a>
                <a class="btn btn-trans btn-icon fa fa-camera add-tooltip" href="#"></a>
                <a class="btn btn-trans btn-icon fa fa-file add-tooltip" href="#"></a>
              </div>
              <h5 style="color: red;"><?php if(!empty($comment_error['error'])){
                echo $comment_error['error'];
              }?></h5>
          </div>
          </form>
        </div>
        <div class="panel">
          <div class="panel-body">
            <!-- Newsfeed Content -->
            <!--===================================================-->
            <?php foreach($publiccomment as $iteams) : ?>
            <div class="media-block">
              <a class="media-left" href="?ctl=infor&id=<?=$iteams['idkh']?>"><img class="img-circle img-sm" alt="Profile Picture" src="https://bootdey.com/img/Content/avatar/avatar1.png"></a>
              <div class="media-body">
                <div class="mar-btm">
                  <a href="?ctl=infor&id=<?=$iteams['idkh']?>" class="btn-link text-semibold media-heading box-inline"><?= $iteams['name']?>.</a>
                  <p class="text-muted text-sm"><i class="fa fa-mobile fa-lg"></i> - From Mobile - 11 min ago</p>
                </div>
                <p><?=$iteams['content']?></p>
                <div class="pad-ver">
                  <div class="btn-group">
                    <a class="btn btn-sm btn-default btn-hover-success" href="#"><i class="fa fa-thumbs-up"></i></a>
                    <a class="btn btn-sm btn-default btn-hover-danger" href="#"><i class="fa fa-thumbs-down"></i></a>
                  </div>
                  <a class="btn btn-sm btn-default btn-hover-primary" href="#">Comment</a>
                </div>
                <hr>
              </div>
            </div>
            <?php endforeach ?>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
</div>