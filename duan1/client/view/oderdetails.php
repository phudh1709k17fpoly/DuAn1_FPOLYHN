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
    <section class="">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12">
            <div class="card card-stepper text-black" style="border-radius: 16px;">

              <div class="card-body p-5">

                <div class="d-flex justify-content-between align-items-center mb-5">
                  <div>
                    <h5 class="mb-0">MÃ ĐƠN HÀNG :<span class="text-primary font-weight-bold"><?= $address['od_codebill'] ?></span></h5>
                  </div>
                  <div class="text-end">
                    <p class="mb-0">Đơn vị vận chuyển :<span>VNXPESS</span></p>
                    <p class="mb-0">Ngày đặt hàng :<span class="font-weight-bold"><?= date("Y-m-d",$address['od_creatadate'])?></span></p>
                  </div>
                </div>

                <ul id="progressbar-2" class="d-flex justify-content-between mx-0 mt-0 mb-5 px-0 pt-0 pb-2">
                  <li class="step0 text-center" id="step1"></li>
                  <li class="step0 text-center" id="step2"></li>
                  <li class="step0 text-center" id="step3"></li>
                  <li class="step0 text-center" id="step4"></li>
                </ul>

                <div class="d-flex justify-content-between">
                  <div class="d-lg-flex align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-bag-check" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                      <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                    </svg>
                    <div>
                      <?php if ($address['od_status'] >= 1) : ?>
                        <p class="fw-bold mb-1">Chờ</p>
                        <p class="fw-bold mb-0">Xác Nhận</p>
                      <?php endif ?>

                      <?php if ($address['od_status'] < 1) : ?>
                        <p class="fw-bold mb-1">Đã</p>
                        <p class="fw-bold mb-0">Hủy Đơn</p>
                      <?php endif ?>
                    </div>
                  </div>
                  <div class="d-lg-flex align-items-center" style="margin-left: 10px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-cart-check" viewBox="0 0 16 16">
                      <path d="M11.354 6.354a.5.5 0 0 0-.708-.708L8 8.293 6.854 7.146a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z" />
                      <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                    </svg>
                    <div>
                      <p class="fw-bold mb-1">Đang chuẩn</p>
                      <p class="fw-bold mb-0">bị hàng</p>
                    </div>
                  </div>
                  <div class="d-lg-flex align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-truck" viewBox="0 0 16 16">
                      <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                    </svg>
                    <div>
                      <p class="fw-bold mb-1">Đang</p>
                      <p class="fw-bold mb-0">giao</p>
                    </div>
                  </div>
                  <div class="d-lg-flex align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-bookmark-check" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M10.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                      <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z" />
                    </svg>
                    <div>
                      <p class="fw-bold mb-1">Thành</p>
                      <p class="fw-bold mb-0">công</p>
                    </div>
                  </div>
                </div>

              </div>

            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="row">
      <div class="col-lg-12">
        <div class="shoping__cart__table">
          <table>
            <thead>
              <tr>
                <th class="shoping__product">Sản phẩm</th>
                <th>Giá</th>
                <th>Giảm giá</th>
                <th>Số Lượng</th>
                <th>Tổng giá</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php $count = 0;
              $count_sale = 0 ?>
              <?php foreach ($public as $iteams) : ?>

                <?php

                $total_all_price = ($iteams['dts_price'] - $iteams['dts_sale']) * $iteams['dts_quantity'];
                $count = $count + $total_all_price;
                $count_sale = $count_sale + $iteams['dts_sale'];
                ?>
                <tr>
                  <td class="shoping__cart__item">
                    <a href="?ctl=detailsProducts&id=<?= $iteams['id_pr'] ?>">
                      <img src="../admin/img/<?= $iteams['img'] ?>" alt="" width="100px">
                      <h5><?= $iteams['name'] ?></h5>
                    </a>
                  </td>
                  <td class="shoping__cart__price">
                    <?php echo number_format($iteams['dts_price']) ?>
                  </td>
                  <td class="shoping__cart__price__sale">
                    <?php echo number_format($iteams['dts_sale']) ?>
                  </td>
                  <td class="shoping__cart__quantity">
                    <div class="quantity">
                      <div class="pro-qty">
                        <h5>x<?= $iteams['dts_quantity'] ?></h5>
                      </div>
                    </div>
                  </td>
                  <td class="shoping__cart__total">
                    <?= number_format($total_all_price) ?>
                  </td>
                  <input type="hidden" value="" class="all_price">
                  <td class="shoping__cart__item__close">

                    <h5></h5>
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

      </div>
      <div class="col-lg-6" style="margin-top: 50px;">
        <div class="">
          <h5>Chi tiết :</h5>
          <h5>Tên: <?= $address['name'] ?></h5>
          <h5>Phone: <?= $address['phone'] ?></h5>
          <h5>Địa chỉ:<?= $address['adress'] ?></h5>
          <h5>Chi tiết địa chỉ: <?= $address['note'] ?></h5>

        </div>
      </div>
      <div class="col-lg-6">
        <div class="shoping__checkout" id="shoping__checkout">
          <h5>Cart Total</h5>
          <ul>
            <li>Giảm giá<input type="hidden" id="insert_sale" value="" name="total_sale"><span id="all_price_sale"><?= number_format($count_sale) ?></span></input></li>
            <li>Tổng tiền <input type="hidden" id="insert_price" value="" name="total_price"><span id="all_price"><?= number_format($count) ?></span></input></li>
          </ul>
          <?php if ($address['od_status'] == 1 || $address['od_status'] == 2 ) : ?>
            <a href="?ctl=uploadOrder&act=abort&id=<?=$_GET['id']?>"><input type="button" class="primary-btn" value="HỦY ĐƠN" style="border: none;"></a>
          <?php endif ?>
          <?php if ($address['od_status'] == 0) : ?>
            <a href="?ctl=uploadOrder&act=replay&id=<?=$_GET['id']?>"><input type="button" class="primary-btn" value="MUA LẠI" style="border: none;"></a>
          <?php endif ?>
          <?php if ($address['od_status'] == 2 ) : ?>
            <input type="button" class="" value="HỦY ĐƠN" style="border: none;" disabled>
          <?php endif ?>
          <?php if ($address['od_status'] == 3 ) : ?>
            <a href="?ctl=uploadOrder&act=thanhcong&id=<?=$_GET['id']?>"><input type="button" class="primary-btn" value="Nhận Hàng Thành Công" style="border: none;" ></a>
          <?php endif ?>
          <?php if ($address['od_status'] == 4 ) : ?>
            <input type="button" class="primary-btn" value="Đã Mau Thành Công" style="border: none;" disabled>
          <?php endif ?>
        </div>
        <div class="accordion" id="accordionExample" style="margin-top: 30px;">
        </div>
      </div>
    </div>
    </form>
  </div>
</section>

<script>
  <?php if ($address['od_status'] == 2) : ?>
    var step1 = document.getElementById("step1");
    step1.classList.add('active');
  <?php endif ?>
  <?php if ($address['od_status'] == 3) : ?>
    step1.classList.add('active');
    var step2 = document.getElementById("step2");
    step2.classList.add('active');
  <?php endif ?>
  <?php if ($address['od_status'] == 4) : ?>
    step1.classList.add('active');
    step2.classList.add('active');
    var step3 = document.getElementById("step3");
    step3.classList.add('active');
    var step4 = document.getElementById("step4");
    step4.classList.add('active');
  <?php endif ?>
</script>
<!-- Shoping Cart Section End -->