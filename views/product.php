<?php
    $product = $data->getprod($page['data']['id']);;
    $baiviet = $data->homepost(3);
    $lienquan = $data->homeprod(4);
?>

<div class="banner_bottom" style="margin-top:30px">
    <div class="container">
        <div class="col-md-9 technology-left">
            <h1><?php echo $page['data']['name']?></h1>
            <br>
        <ul class="portfolio-area">
          <?php
          foreach ($product as $item) {
              if (strpos($item['url'],'://')>0)
                  $link=$item['url'];
              else
                  $link='product/'.$item['url'];
              echo '
              <li class="portfolio-item2" data-id="id-0" data-type="cat-item-4">
                <div>
                  <span class="image-block block2 img-hover">
                  <a  href="'.$link.'">
                      <img src="'.$item['hinh_anh'].'" class="img-responsive" alt="'.$item['hinh_anh'].'">
                      <div class="port-info">
                          <h5>'.$item['name'].'</h5>
                          <p>'.$item['mo_ta'].'</p>
                        </div>
                  </a>
                </span>
                </div>
              </li>
              ';
          }
          ?>
            <div class="clearfix"></div>
          </ul>
        </div>
        <!-- technology-right -->
        <div class="col-md-3 technology-right-1">
            <h2 style="margin-bottom:10px">Sản phẩm ưa thích</h2>
            <?php
            foreach ($lienquan as $item)
                echo '<div class="blo-top" style="margin-bottom:20px; border:none">
                    <a href="product/'.$item['url'].'">
                    <div class="tech-btm">
                        <h4>'.$item['name'].'</h4>
                        <img src="'.$item['hinh_anh'].'" class="img-responsive" alt="" />
                        <p>'.$item['mo_ta'].'</p>
                    </div>
                    </a>
                </div>';
            ?>
            <div class="blo-top1">
                <div class="tech-btm">
                    <h4>Có thể bạn muốn xem thêm</h4>
                    <?php
                    // $i=0;
                    foreach ($baiviet as $item) {
                        // if ($i==8) break;
                        echo '
                        <div class="blog-grids">
                            <div class="blog-grid-left">
                                <a href="blog/'.$item['url'].'"><img src="'.$item['hinh_anh'].'" class="img-responsive" alt="'.$item['hinh_anh'].'" /></a>
                            </div>
                            <div class="blog-grid-right">
                                <h5><a href="blog/'.$item['url'].'">'.$item['name'].'</a></h5>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        ';
                        // $i++;
                    }
                    ?>
                </div>
            </div>

        </div>
        <div class="clearfix"></div>
    </div>
</div>
