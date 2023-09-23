
<div class="hero__item set-bg" data-setbg="img/hero/background.jpg">
                        <div class="hero__text">
                            <span>FRUIT FRESH</span>
                            <h2>Vegetable<br/>100% Organic</h2>
                            <p>Free Pickup and Delivery Available</p>
                            <a href="#" class="primary-btn">SHOP NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    <?php foreach($public as $iteam) : ?>
                    <div class="col-lg-3">
                    <a href="?ctl=categories-<?=$iteam['id']?>&id=<?=$iteam['id']?>">
                        <div class="categories__item set-bg" data-setbg="img/categories/categories-<?=$iteam['id']?>.jpg">
                            <h5 style="color:white; font-weight: 400;"><?=$iteam['name']?></h5>
                        </div>
                        </a>
                    </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </section>
<section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    
                    <div class="featured__controls">
                         <h4>Sản Phẩm</h4>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                <?php foreach($productsPublic as $iteams) : ?>
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" >
                            <img src="../admin/img/<?=$iteams['img']?>" alt="" style="width:100%; height:100%;">
                            <ul class="featured__item__pic__hover">
                                <li><a href="?ctl=detailsProducts&id=<?=$iteams['id']?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                </svg></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#"><?=$iteams['name']?></a></h6>
                            <h5><?=number_format($iteams['price'])?></h5>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
        </div>
    </section>
    <!-- Featured Section End -->

    <!-- Banner Begin -->
    <div class="banner">
    <div class="container">
    <div class="product__discount">
                        <div class="section-title product__discount__title">
                            <h2>Giảm giá</h2>
                        </div>
                        <div class="row">
                            <div class="product__discount__slider owl-carousel">
                                <?php foreach($sale as $iteam) : ?>
                                <?php
                                         $price = 0;
                                        if(!empty($iteam['price'])){
                                            $price = $iteam['price'] - $iteam['sale']; 
                                        }
                                        $sale = 0;
                                        if(!empty($iteam['price'])){
                                            $sale = $iteam['sale'] / $iteam['price'] * 100;
                                        }
                                        $sale = ceil($sale);
                                ?>
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="../admin/img/<?=$iteam['img']?>">
                                            <div class="product__discount__percent">-<?= $sale ?>%</div>
                                            <ul class="product__item__pic__hover">
                                            <li><a href="?ctl=detailsProducts&id=<?=$iteam['id']?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                            </svg></a></li>
                                            
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span>sale</span>
                                            <h5><a href="?ctl=detailsProducts&id=<?=$iteam['id']?>"><?=$iteam['name']?></a></h5>
                                            <div class="product__item__price"><?=number_format($price)?><span><?=number_format($iteam['price'])?></span></div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach ?>
                            </div>
                        </div>
                    </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="img/banner/banner-1.1.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="img/banner/banner-1.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <!-- Latest Product Section Begin -->
    <section class="latest-product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Top Sản phẩm mới nhất</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                            <?php foreach($last as $iteam) : ?>
                                <a href="?ctl=detailsProducts&id=<?=$iteam['id']?>" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="../admin/img/<?=$iteam['img']?>" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6><?=$iteam['name']?></h6>
                                        <span><?=number_format($iteam['price'])?></span>
                                    </div>
                                </a>
                                <?php endforeach ?>
                            </div>
                            <div class="latest-prdouct__slider__item">
                            <?php foreach($more as $iteam) : ?>
                                <a href="?ctl=detailsProducts&id=<?=$iteam['id']?>" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="../admin/img/<?=$iteam['img']?>" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                    <h6><?=$iteam['name']?></h6>
                                        <span><?=number_format($iteam['price'])?></span>
                                    </div>
                                </a>
                                <?php endforeach ?>
                            </div>
                            <div class="latest-prdouct__slider__item">
                            <?php foreach($end as $iteam) : ?>
                                <a href="?ctl=detailsProducts&id=<?=$iteam['id']?>" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="../admin/img/<?=$iteam['img']?>" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                    <h6><?=$iteam['name']?></h6>
                                        <span><?=number_format($iteam['price'])?></span>
                                    </div>
                                </a>
                                <?php endforeach ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Top sản phẩm bán chạy</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                            <?php foreach($sold_cate1 as $iteam) : ?>
                                <a href="?ctl=detailsProducts&id=<?=$iteam['id']?>" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="../admin/img/<?=$iteam['img']?>" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                    <h6><?=$iteam['name']?></h6>
                                        <span><?=number_format($iteam['price'])?></span>
                                    </div>
                                </a>
                                <?php endforeach ?>
                            </div>
                            <div class="latest-prdouct__slider__item">
                            <?php foreach($sold_cate2 as $iteam) : ?>
                                <a href="?ctl=detailsProducts&id=<?=$iteam['id']?>" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="../admin/img/<?=$iteam['img']?>" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                    <h6><?=$iteam['name']?></h6>
                                        <span><?=number_format($iteam['price'])?></span>
                                    </div>
                                </a>
                                <?php endforeach ?>
                            </div>
                            <div class="latest-prdouct__slider__item">
                            <?php foreach($sold_cate3 as $iteam) : ?>
                                <a href="?ctl=detailsProducts&id=<?=$iteam['id']?>" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="../admin/img/<?=$iteam['img']?>" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                    <h6><?=$iteam['name']?></h6>
                                        <span><?=number_format($iteam['price'])?></span>
                                    </div>
                                </a>
                                <?php endforeach ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Top Sản phẩm lượt xem</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                            <?php foreach($view_cate1 as $iteam) : ?>
                                <a href="?ctl=detailsProducts&id=<?=$iteam['id']?>" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="../admin/img/<?=$iteam['img']?>" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                    <h6><?=$iteam['name']?></h6>
                                        <span><?=number_format($iteam['price'])?></span>
                                    </div>
                                </a>
                                <?php endforeach ?>
                            </div>
                            <div class="latest-prdouct__slider__item">
                            <?php foreach($view_cate2 as $iteam) : ?>
                                <a href="?ctl=detailsProducts&id=<?=$iteam['id']?>" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="../admin/img/<?=$iteam['img']?>" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                    <h6><?=$iteam['name']?></h6>
                                        <span><?=number_format($iteam['price'])?></span>
                                    </div>
                                </a>
                                <?php endforeach ?>
                            </div>
                            <div class="latest-prdouct__slider__item">
                            <?php foreach($view_cate3 as $iteam) : ?>
                                <a href="?ctl=detailsProducts&id=<?=$iteam['id']?>" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="../admin/img/<?=$iteam['img']?>" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                    <h6><?=$iteam['name']?></h6>
                                        <span><?=number_format($iteam['price'])?></span>
                                    </div>
                                </a>
                                <?php endforeach ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Product Section End -->
       <!-- Banner Begin -->
   <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="from-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title from-blog__title">
                        <h2>From The Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="img/blog/blog-1.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">Cooking tips make cooking simple</a></h5>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="img/blog/blog-2.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">6 ways to prepare breakfast for 30</a></h5>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="img/blog/blog-3.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">Visit the clean farm in the US</a></h5>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>