<div id="page-wrapper">
    <div class="main-page">
        <div class="tables">
            <h3 class="title1">Thông tin chung của website</h3>
            <div class="bs-example widget-shadow" data-example-id="hoverable-table">
                <form action="thongtin/editsave" method="post" enctype="multipart/form-data">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="name">Tên công ty</label>
                            <input type="text" class="form-control" id="name" placeholder="Tên công ty" name="name" value="<?php echo $this->data['name'] ?>" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="diachi">Địa chỉ</label>
                            <input type="text" class="form-control" id="diachi" placeholder="Địa chỉ" name="diachi" value="<?php echo $this->data['dia_chi'] ?>" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="dienthoai">Điện thoại</label>
                            <input type="text" class="form-control" id="dienthoai" placeholder="Điện thoại" name="dienthoai" value="<?php echo $this->data['dien_thoai'] ?>" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" placeholder="Email" id="email" name="email" value="<?php echo $this->data['email'] ?>">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="tenmien">Tên miền</label>
                            <input type="text" class="form-control" id="tenmien" placeholder="Tên miền" name="tenmien" value="<?php echo $this->data['ten_mien'] ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="tenmien">Facebook</label>
                            <input type="text" class="form-control" id="facebook" placeholder="Facebook" name="facebook" value="<?php echo $this->data['facebook'] ?>">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="ghichu">Youtube</label>
                            <input type="text" class="form-control" id="youtubeyoutube" placeholder="Youtube" name="youtube" value="<?php echo $this->data['youtube'] ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="ghichu">Twitter</label>
                            <input type="text" class="form-control" id="twitter" placeholder="Twitter" name="twitter" value="<?php echo $this->data['twitter'] ?>">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="tenmien">Instagram</label>
                            <input type="text" class="form-control" id="instagram" placeholder="Instagram" name="instagram" value="<?php echo $this->data['instagram'] ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="tenmien">Zalo</label>
                            <input type="text" class="form-control" id="instagram" placeholder="Chưa hoạt động" name="zalo" >
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="tenmien">Chức danh</label>
                            <input type="text" class="form-control" id="chucdanh" placeholder="Instagram" name="chucdanh" value="<?php echo $this->data['chuc_danh'] ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="tenmien">Ngày sinh</label>
                            <input type="date" class="form-control" id="ngaysinh" placeholder="Ngày sinh" name="ngaysinh" value="<?php echo $this->data['ngay_sinh'];?>">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6 center">
                            <img src="<?php echo ($this->data['logo']!='')?$this->data['logo']:'https://via.placeholder.com/360x225'; ?>"
                            height="60px" />
                        </div>
                        <div class="form-group col-md-6">
                            <label for="logo">Link logo</label>
                            <input type="text" class="form-control" id="logo" placeholder="Logo" name="logo" value="<?php echo $this->data['logo']; ?>">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="time1">Tiêu đề trang chủ</label>
                            <input type="text" class="form-control" id="time1" placeholder="Tiêu đề trang chủ" name="time1" value="<?php echo $this->data['time1'] ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="gioi_thieu">Lời giới thiệu</label>
                            <input type="text" class="form-control" id="gioi_thieu" placeholder="Lời giới thiệu" name="gioi_thieu" value="<?php echo $this->data['gioi_thieu'] ?>">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="time2">Từ khóa SEO</label>
                            <input type="text" class="form-control" id="time2" placeholder="Từ khóa và hash tag" name="time2" value="<?php echo $this->data['time2'] ?>">
                        </div>
                    </div>

                    <div class="form-row">
                        <button type="submit" class="btn btn-primary">Cập nhật</button> &nbsp;&nbsp;&nbsp;
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
