
    <!-- Shoping Cart Section Begin -->
 <form action="" method="post">
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Products</th>
                                    <th>Price</th>
                                    <th>sale</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($products as $iteams) : ?>
                                    <?php
                                    $totalOne = ($iteams['price'] -  $iteams['sale']) * $_SESSION['order'][$iteams['id']];

                                    $total = $total + $totalOne;
                                    $total_sale = $total_sale + $iteams['sale'];
                                    ?>
                                    <tr>
                                        <td class="shoping__cart__item">
                                            <img src="../admin/img/<?= $iteams['img'] ?>" alt="" width="150px">
                                            <h5><?= $iteams['name'] ?></h5>
                                        </td>
                                        <td class="shoping__cart__price">
                                            <?= number_format($iteams['price']) ?>
                                        </td>
                                        <td class="shoping__cart__price">
                                            <?= number_format($iteams['sale']) ?>
                                        </td>

                                        <td class="shoping__cart__quantity">
                                            <div class="quantity">
                                                <div class="pro-qty">
                                                    <input type="number" value="<?= $_SESSION['order'][$iteams['id']] ?>" min="1" max="<?= $iteams['quantity'] ?>" name="quantity[<?= $iteams['id'] ?>]">
                                                </div>
                                            </div>
                                        </td>
                                        <td class="shoping__cart__total">
                                            <?= number_format($totalOne) ?>
                                        </td>
                                        <td class="shoping__cart__item__close">
                                            <a href="?ctl=deleteOrder&id=<?= $iteams['id'] ?>" onclick="return confirm('Xóa sản phẩm ?')"><span class="icon_close"></span></a>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <a href="?ctl=products" class="primary-btn cart-btn">CONTINUE SHOPPING</a>
                        <input class="primary-btn cart-btn cart-btn-right" type="submit" style="border: none;" name="update" value="UpDate">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__continue">
                        <div class="shoping__discount">
                            <h5>Nhập địa chỉ</h5>
                            <h6 style="color: red;"><?php if (!empty($error['address'])) {
                                                        echo $error['address'];
                                                    } ?></h6>
                            <?php include_once "./view/order/address.php" ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__checkout">
                        <h5>Cart Total</h5>
                        <ul>
                            <li>Subtotal<span><?= number_format($total_sale) ?></span></li>
                            <li>Total<span><?= number_format($total) ?></span></li>
                            <input type="hidden" name="total" value="<?= $total ?>">
                            <input type="hidden" name="sale" value="<?= $total_sale ?>">
                        </ul>
                        <input type="submit" name="submit" class="primary-btn" value="PROCEED TO CHECKOUT" style="border: none;">
                    </div>
                </div>
            </div>
        </div>
    </section>
</form>
<!-- Shoping Cart Section End -->