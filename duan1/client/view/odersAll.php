</section>
<section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Shopping Cart</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Shopping Cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Mã đơn hàng</th>
                                    <th>Giảm giá</th>
                                    <th>Số Lượng</th>
                                    <th>Tổng giá</th>
                                    <th>Trạng thái</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($public as $iteams) : ?>
                                <tr>
                                    <td class="shoping__cart__item">
                                    <a href="?ctl=detailsOder&id=<?=$iteams['od_id']?>">
                                        <h5><?= $iteams['od_codebill'] ?></h5>
                                    </a>
                                    </td>
                                    <td class="shoping__cart__price__sale">
                                    <?php echo number_format($iteams['od_totalsale'])?>
                                    </td>
                                       <td class="shoping__cart__quantity">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                               <span><?= $iteams['od_quantity'] ?></span>
                                            </div>
                                        </div>
                                    </td>
                                  
                                    <td class="shoping__cart__total">
                                    <?php echo number_format($iteams['od_totalprice'])?>
                                    </td>
                                    <td class="shoping__cart__total">
                                    <?php if($iteams['od_status'] == 1){
                                       echo "Chờ xác nhận";
                                    }else if($iteams['od_status'] == 2){
                                        echo "Người bán đang chuẩn bị";
                                    }else if($iteams['od_status'] == 3){
                                        echo "Đang giao";
                                    }else if($iteams['od_status'] == 4){
                                        echo "Đã mua";
                                    }else if($iteams['od_status'] == 0){
                                        echo "Đơn đã hủy";
                                    }
                                    ?>
                                    </td>
                                    <td class="shoping__cart__total">
                                   <span><a href="?ctl=detailsOder&id=<?=$iteams['od_id']?>">Chi tiết đơn hàng</a></span>
                                    </td>
                                </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shoping Cart Section End -->