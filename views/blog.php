<?php
    $posts = $data->getpost($page['data']['id']);;
    // $baiviet = $data->getbaiviet($page[]);
    // $lienquan = $data->homeprod(4);
    // $homeshare = $data->homepost(3);
?>


<section class="ftco-section bg-light" id="blog-section">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-5">
      <div class="col-md-7 heading-section text-center ftco-animate">
        <!-- <span class="subheading">Blog</span> -->
        <h2 class="mb-4"><?php echo $page['data']['name'] ?></h2>
        <p><?php echo $page['data']['mo_ta'] ?></p>
      </div>
    </div>
    <div class="row d-flex">
      <?php
          foreach ($posts AS $item) {
              echo '
                <div class="col-md-6 col-lg-4 d-flex ftco-animate">
                  <div class="blog-entry justify-content-end">
                    <a href="blog/'.$item['url'].'" class="block-20" style="background-image: url('.$item['hinh_anh'].');"></a>
                    <div class="text float-right d-block">
                      <div class="d-flex align-items-center pt-2 mb-4 topp">
                        <div class="one mr-2">
                          <span class="day">12</span>
                        </div>
                        <div class="two">
                          <span class="yr">2019</span>
                          <span class="mos">april</span>
                        </div>
                      </div>
                      <h3 class="heading"><a href="blog/'.$item['url'].'">'.$item['name'].'</a></h3>
                      <p>'.$item['mo_ta'].'</p>
                      <div class="d-flex align-items-center mt-4 meta">
                        <p class="mb-0"><a href="blog/'.$item['url'].'" class="btn btn-primary">Xem chi tiết <span class="ion-ios-arrow-round-forward"></span></a></p>
                        <p class="ml-auto mb-0"></p>
                      </div>
                    </div>
                  </div>
                </div>
              ';
          }
      ?>
    </div>
    <div class="row mt-5">
      <div class="col text-center">
        <div class="block-27">
          <ul>
            <li><a href="#">&lt;</a></li>
            <li class="active"><span>1</span></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">&gt;</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
