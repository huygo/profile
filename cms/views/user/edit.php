<div id="page-wrapper">
    <div class="main-page">
        <div class="bs-example widget-shadow" data-example-id="hoverable-table">
            <div class="panel-primary">
                <div class="panel-heading">
                    Cập nhật thông tin users
                </div>
                <div class="panel-body">
									<form class="form-horizontal" action="user/editsave?id=<?php echo $this->data['id'] ?>" method="post" enctype="multipart/form-data" >
											<div class="form-group">
													<label for="name" class="col-sm-2 control-label">Họ tên</label>
													<div class="col-sm-8">
															<input type="text" class="form-control1" id="name" name="name" placeholder="Họ tên"
															value="<?php echo $this->data['name']; ?>" >
													</div>
											</div>
											<div class="form-group">
													<label for="mota" class="col-sm-2 control-label">Email</label>
													<div class="col-sm-8">
															<input type="text" class="form-control1" placeholder="Tên đăng nhập" name="email" id="email"
															value="<?php echo $this->data['email'] ?>">
													</div>
											</div>
											<div class="form-group">
													<label for="url" class="col-sm-2 control-label">Số điện thoại</label>
													<div class="col-sm-8">
															<input  type="text" class="form-control1" id="dienthoai" name="dienthoai" placeholder="Điện thoại"
															value="<?php echo $this->data['dien_thoai']; ?>" >
													</div>
											</div>
                      <div class="form-group">
													<label for="vitri" class="col-sm-2 control-label">Lời giới thiệu</label>
													<div class="col-sm-8">
															<input type="text" class="form-control1" placeholder="Lời giới thiệu" id="quote" name="quote" value="<?php echo $this->data['quote']; ?>">
													</div>
											</div>
											<div class="form-group">
													<label for="vitri" class="col-sm-2 control-label">Mật khẩu</label>
													<div class="col-sm-8">
															<input type="text" class="form-control1" placeholder="Để trống nếu không muốn reset" id="matkhau" name="matkhau">
													</div>
											</div>
											<div class="form-group">
													<label for="vitri" class="col-sm-2 control-label">Ảnh đại diện</label>
													<div class="col-sm-8">
															<img src="<?php echo $this->data['hinh_anh']; ?>" height="60px" style="margin-right:60px">
                              <a href="media" target="_blank" alt="Quản lý media">Quản lý media</a>
													</div>
											</div>
											<div class="form-group">
													<label for="vitri" class="col-sm-2 control-label">Link ảnh</label>
													<div class="col-sm-8">
															<input type="text" class="form-control1" placeholder="Link ảnh" id="hinhanh" name="hinhanh" value="<?php echo $this->data['hinh_anh']; ?>">
													</div>
											</div>
											<div class="form-group">
													<label for="capnhat" class="col-sm-2 control-label"></label>
													<div class="col-sm-8">
													<input type="submit" value="Cập nhật" id="capnhat" name="capnhat">
												  </div>
											</div>

									</form>
                </div>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
