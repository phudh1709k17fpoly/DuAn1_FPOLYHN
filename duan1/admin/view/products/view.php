<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-9">
                            <h3 class="title-5 m-b-35">Sản Phẩm</h3>
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
                                       <a href="?ctl=add_products">
                                       <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                            <i class="zmdi zmdi-plus"></i>add item</button>
                                       </a>
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
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>STT</th>
                                                <th class="text-right">Tên</th>
                                                <th class="text-right">Giá</th>
                                                <th class="text-right">Giảm Giá</th>
                                                <th class="text-right">Số Lượng</th>
                                                <th class="text-right">Ảnh</th>
                                               
                                                <th class="text-right">Thao Tác</th>

                                       
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $count  = 1; 
                                            $count2 = count($public);
                                            ?>
                                            <?php foreach($public as $iteams) : ?>
                                            <tr>
                                                <td><?= $count  ?></td>
                                                <td class="text-right"><?= $iteams['name'] ?></td>
                                                <td class="text-right"><?= $iteams['price'] ?></td>
                                                <td class="text-right"><?= $iteams['sale'] ?></td>
                                                <td class="text-right"><?= $iteams['quantity'] ?></td>
                                                <td class="text-right"><img src="./img/<?=$iteams['img']?>" alt="" style="width: 140px;"></td>
                                                <td class="text-right">

                                                <div class="table-data-feature">
                                                      <a href="?ctl=edit_products&id=<?=$iteams['id']?>"><button class="item" data-toggle="tooltip" data-placement="top" title="Sửa">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button></a>
                                                        <a href="?ctl=delete_products&id=<?=$iteams['id']?>" onclick="return confirm('Xóa sản phẩm')">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Xóa">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                        </a>
                                                        <a href="?ctl=upload&id=<?=$iteams['id']?>">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="thêm ảnh">
                                                            <i class="zmdi zmdi-mail-send"></i>
                                                        </button>
                                                        </a>
                                                        <a href="?ctl=products&img=<?=$iteams['id']?>">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </button>
                                                        </a>
                                                    </div>
                                                </td>
                                                <?php $count++ ?>
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
                                                        <td>Tổng Sản Phẩm:</td>
                                                        <td class="text-right"><?= $count2 ?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <!-- USER DATA-->
                                <div class="user-data m-b-30">
                                    <h3 class="title-3 m-b-30">
                                        <i class="zmdi zmdi-account-calendar"></i>user data</h3>
                                    <div class="filters m-b-45">
                                        <div class="rs-select2--dark rs-select2--md m-r-10 rs-select2--border">
                                            <select class="js-select2" name="property">
                                                <option selected="selected">All Properties</option>
                                                <option value="">Products</option>
                                                <option value="">Services</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <div class="rs-select2--dark rs-select2--sm rs-select2--border">
                                            <select class="js-select2 au-select-dark" name="time">
                                                <option selected="selected">All Time</option>
                                                <option value="">By Month</option>
                                                <option value="">By Day</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                    </div>
                                    <div class="table-responsive table-data">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <td>
                                                        <label class="au-checkbox">
                                                            <input type="checkbox">
                                                            <span class="au-checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td>Ảnh</td>
                                                    <td>Sản phẩm</td>
                                                    <td></td>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach($public2 as $iteams) : ?>
                                                <tr>
                                                    <td>
                                                        <label class="au-checkbox">
                                                            <input type="checkbox">
                                                            <span class="au-checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                      <img src="./img/<?=$iteams['link']?>" alt="" style="width: 140px;">
                                                    </td>
                                                    <td>
                                                    <h6><?= $iteams['name']?></h6>
                                                    </td>
                                                    <td>
                                                    <div class="table-data-feature">
                                                        <a href="?ctl=deleteimage&id=<?=$iteams['id_img']?>" onclick="return confirm('Xóa ảnh sản phẩm')">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                        </a>
                                                    </div>
                                                    </td>
                                                </tr>
                                                <?php endforeach ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="user-data__footer">
                                        <button class="au-btn au-btn-load">load more</button>
                                    </div>
                                </div>
                                <!-- END USER DATA-->
                            </div>
                            <div class="col-lg-6">
                                <!-- TOP CAMPAIGN-->
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </th>
                                                <th>name</th>
                                                <th>email</th>
                                                <th>nội dung</th>
                                            
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php if(!empty($public3)) : ?>
                                            <?php foreach($public3 as $iteams) : ?>
                                            <tr class="tr-shadow">
                                                <td>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </td>
                                                <td><?= $iteams['name'] ?></td>
                                                <td>
                                                    <span class="block-email"><?= $iteams['email'] ?></span>
                                                </td>
                                                <td class="desc"><?= $iteams['content'] ?></td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <a href="?ctl=deleteComment&id=<?=$iteams['idfb']?>" onclick="return confirm('xóa bình luận')">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="spacer"></tr> 
                                            <?php endforeach ?>
                                        <?php endif ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!--  END TOP CAMPAIGN-->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                               
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