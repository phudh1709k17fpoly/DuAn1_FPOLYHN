<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Đơn Hàng</h3>
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                        <div class="rs-select2--light rs-select2--md">
                                            <select class="js-select2" name="property">
                                                <option selected="selected">All Properties</option>
                                                <option value="">Option 1</option>
                                                <option value="">Option 2</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <div class="rs-select2--light rs-select2--sm">
                                            <select class="js-select2" name="time">
                                                <option selected="selected">Today</option>
                                                <option value="">3 Days</option>
                                                <option value="">1 Week</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <button class="au-btn-filter">
                                            <i class="zmdi zmdi-filter-list"></i>filters</button>
                                    </div>
                                    <div class="table-data__tool-right">
                                        <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                                            <select class="js-select2" name="type">
                                                <option selected="selected">Export</option>
                                                <option value="">Option 1</option>
                                                <option value="">Option 2</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                            <div class="col-lg-9">
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                               <th>Ngày Tạo</th>
                                                <th>Codebill</th>
                                                <th>Thông tin Khách Hành</th>
                                                <th class="text-right">Tổng Giá</th>
                                                <th class="text-right">Tổng giảm giá</th>
                                                <th class="text-right">Số lượng</th>
                                                <th class="text-right">Trạng Thái</th>
                                                <th></th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $count = count($public) ?>
                                            <?php foreach($public as $iteams) : ?>
                                                <?php if($iteams['od_status'] == 0){
                                                       $status = "Đã hủy";
                                                    }elseif($iteams['od_status'] == 1){
                                                        $status = "Chờ xác nhận";
                                                    }elseif($iteams['od_status'] == 2){
                                                        $status = "Đang chuẩn bị";
                                                    }elseif($iteams['od_status'] == 3){
                                                        $status = "Đang giao";
                                                    }elseif($iteams['od_status'] == 4){
                                                        $status = "Thành công";
                                                    } ?>
                                            <tr>
                                                <td><?= date("Y-m-d",$iteams['od_creatadate'])?></td>
                                                <td><?= $iteams['od_codebill'] ?></td>
                                                <td><a href="?ctl=userOrder&id_user=<?= $iteams['id_user'] ?>&id_address=<?=$iteams['id_address'] ?>">Xem</a></td>
                                                <td><?= $iteams['od_totalprice'] ?></td>
                                                <td><?= $iteams['od_totalsale'] ?></td>
                                                <td><?= $iteams['od_quantity'] ?></td>
                                                <td><?= $status ?></td>
                                                <td>
                                                <form action="?ctl=order&id=<?=$iteams['od_id']?>" method="post">
                                                            <input type="hidden" name="status" value="<?=$iteams['od_status']?>">
                                                                <?php if($iteams['od_status'] == 0) : ?>
                                                                <input type="submit" value="Cập Nhật" disabled > 
                                                                <?php endif ?>
                                                                <?php if($iteams['od_status'] == 1) : ?>
                                                                <input type="submit" name="update_xndh" value="Xác Nhận Đơn Hàng"> 
                                                                <?php endif ?>
                                                                <?php if($iteams['od_status'] == 2) : ?>
                                                                <input type="submit" name="update_xncb" value="Chuẩn bị đơn hàng"> 
                                                                <?php endif ?>
                                                                <?php if($iteams['od_status'] == 3) : ?>
                                                                <input type="submit" name="" value="Chờ xác nhận giao hàng"> 
                                                                <?php endif ?>
                                                                <?php if($iteams['od_status'] == 4) : ?>
                                                                <input type="submit" value="Thành công" disabled style="color: green;"> 
                                                                <?php endif ?>
                                                            </form>
                                                </td>
                                            </tr>
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="au-card au-card--bg-blue au-card-top-countries m-b-30">
                                    <div class="au-card-inner">
                                        <div class="table-responsive">
                                            <table class="table table-top-countries">
                                                <tbody>
                                                    <tr>
                                                        <td>Tổng Đơn Hàng:</td>
                                                        <td class="text-right"><?=  $count ?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>