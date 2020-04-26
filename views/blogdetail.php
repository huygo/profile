<?php
    $blogdetail = $page['data'];
    $danhmuc = $data->danhmucbaiviet();
    $baivietmoi = $data->baivietmoi();
?>

<section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo $blogdetail['hinh_anh'] ?>');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end justify-content-start">
      <div class="col-md-9 ftco-animate pb-4">
        <h1 class="mb-3 bread"><?php echo $blogdetail['name'] ?></h1>
        <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="blog.html">Blog <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog Single <i class="ion-ios-arrow-forward"></i></span></p>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 ftco-animate">
        <div class="noidung"><?php echo $blogdetail['noi_dung'] ?></div>
        <div class="tag-widget post-tag-container mb-5 mt-5">
          <div class="tagcloud">
            <div class="fb-share-button" data-href="<?php echo HOME.'/'.$_GET['url'] ?>" data-layout="button" data-size="large">
              <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo HOME.'/'.$_GET['url'] ?>&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Chia sẻ</a>
            </div>
            <div class="zalo-share-button" data-href="" data-oaid="579745863508352884" data-layout="1" data-color="blue"
            data-customize=false></div>
            <!-- <a href="#" class="tag-cloud-link">Chia sẻ facebook</a> -->
            <!-- <a href="#" class="tag-cloud-link">Chia sẻ zalo</a> -->
            <!-- <a href="#" class="tag-cloud-link">Gửi email</a>
            <a href="#" class="tag-cloud-link">Tải về nội dung</a> -->
          </div>
        </div>

        <!-- <div class="about-author d-flex p-4 bg-light">
          <div class="bio mr-5">
            <img src="images/person_1.jpg" alt="Image placeholder" class="img-fluid mb-4">
          </div>
          <div class="desc">
            <h3>George Washington</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
          </div>
        </div> -->


      </div> <!-- .col-md-8 -->
      <div class="col-lg-4 sidebar ftco-animate">
        <div class="sidebar-box">
          <form action="timbaiviet" class="search-form">
            <div class="form-group">
              <span class="icon icon-search"></span>
              <input type="text" name="tukhoa" class="form-control" placeholder="Tìm nội dung khác">
            </div>
          </form>
        </div>
        <div class="sidebar-box ftco-animate">
          <h2 class="heading-sidebar">Danh mục bài viết</h2>
          <ul class="categories">
            <?php
              foreach ($danhmuc AS $item)
                echo '<li><a href="#">'.$item['name'].' <span>('.$item['total'].')</span></a></li>';
            ?>
          </ul>
        </div>

        <div class="sidebar-box ftco-animate">
          <h2 class="heading-sidebar">Bài viết mới</h2>
          <?php
            foreach ($baivietmoi AS $item)
              echo '
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url('.$item['hinh_anh'].');"></a>
                <div class="text">
                  <h3 class="heading"><a href="blog/'.$item['url'].'">'.$item['name'].'</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> '.date("d/m/Y",strtotime($item['ngay_cap_nhat'])).'</a></div>
                  </div>
                </div>
              </div>
              ';
          ?>
        </div>

        <div class="sidebar-box ftco-animate">
          <h2 class="heading-sidebar">Gợi ý từ khóa</h3>
          <div class="tagcloud">
            <a href="timkiem?tukhoa=phần mềm bán hàng" class="tag-cloud-link">phần mềm bán hàng</a>
            <a href="timkiem?tukhoa=phần mềm bán hàng" class="tag-cloud-link">phần mềm quản lý kho</a>
            <a href="timkiem?tukhoa=phần mềm bán hàng" class="tag-cloud-link">văn phòng điện tử</a>
            <a href="timkiem?tukhoa=phần mềm bán hàng" class="tag-cloud-link">phần mềm chấm công</a>
            <a href="timkiem?tukhoa=phần mềm bán hàng" class="tag-cloud-link">phần mềm spa</a>
            <a href="timkiem?tukhoa=phần mềm bán hàng" class="tag-cloud-link">quản lý nhà thuốc</a>
            <a href="timkiem?tukhoa=phần mềm bán hàng" class="tag-cloud-link">phần mềm CRM</a>
            <a href="timkiem?tukhoa=phần mềm bán hàng" class="tag-cloud-link">quản lý hợp đồng</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
