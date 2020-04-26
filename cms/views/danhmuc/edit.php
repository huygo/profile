<div id="page-wrapper">
    <div class="main-page">
        <div class="bs-example widget-shadow" data-example-id="hoverable-table">
            <div class="panel-primary">
                <div class="panel-heading">
                    Cập nhật danh mục bài viết
                </div>
                <div class="panel-body">
									<form class="form-horizontal" action="danhmuc/editsave?id=<?php echo $this->data['id'] ?>" method="post" enctype="multipart/form-data" >
											<div class="form-group">
													<label for="name" class="col-sm-2 control-label">Tên danh mục</label>
													<div class="col-sm-8">
															<input type="text" class="form-control1" id="name" name="name" placeholder="Tên danh mục bài viết"
															value="<?php echo $this->data['name']; ?>" >
													</div>
											</div>
											<div class="form-group">
													<label for="url" class="col-sm-2 control-label">URL</label>
													<div class="col-sm-8">
															<input  type="text" class="form-control1" id="url" name="url" placeholder="Đường dẫn URL"
															value="<?php echo $this->data['url']; ?>" >
													</div>
											</div>
											<div class="form-group">
													<label for="mota" class="col-sm-2 control-label">Lời giới thiệu</label>
													<div class="col-sm-8">
															<input type="text" class="form-control1" placeholder="Lời giới thiệu" name="mota" id="mota"
															value="<?php echo $this->data['mo_ta'] ?>">
													</div>
											</div>
											<div class="form-group">
												<label for="cha" class="col-sm-2 control-label">Danh mục cha</label>
												<div class="col-sm-8"><select name="cha" id="cha" class="form-control1">
													<option value="0" <?php if ($this->data['cha']==0) echo 'selected="selected"'; ?>>Root</option>
													<?php
																foreach ($this->menu as $opt) {
																	echo '<option value="'.$opt['id'].'" ';
																	if ($this->data['cha']==$opt['id']) echo 'selected="selected"';
																	echo '>';
																	if ($opt['level']==1) echo '---';
																	elseif ($opt['level']==2) echo '------';
																	echo $opt['name'].'</option>';
																}
													?>
												</select></div>
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
													<label for="update" class="col-sm-2 control-label">Vị trí xuất hiện</label>
													<div class="col-sm-8">
															<input type="text" class="form-control1" placeholder="Vị trí trên trang chủ" id="vitri" name="vitri" value="<?php echo $this->data['com'] ?>">
													</div>
											</div>
                      <div class="form-group">
													<label for="update" class="col-sm-2 control-label">Icon hiển thị</label>
													<div class="col-sm-8">
															<input type="text" class="form-control1" placeholder="Icon hiển thị" id="icon" name="icon" value="<?php echo $this->data['icon'] ?>">
													</div>
											</div>
											<div class="form-group">
													<label for="niemyet" class="col-sm-2 control-label">Thứ tự xuất hiện</label>
													<div class="col-sm-8">
															<input  type="text" class="form-control1" id="thutu" name="thutu" placeholder="Thứ tự"
															value="<?php echo $this->data['thu_tu']; ?>" >
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



<!-- <div id="page-wrapper">
    <div class="main-page">
        <div class="bs-example widget-shadow" data-example-id="hoverable-table">
            <div class="panel-primary">
                <div class="panel-heading">
                    Cập nhật thông tin danh mục
                </div>
                <div class="panel-body">
                    <form class="com-mail" action="danhmuc/editsave?id=<?php echo $this->data['id'] ?>" method="post" enctype="multipart/form-data" >
                        <input type="text" class="form-control1 control3" placeholder="Tên danh mục" id="danhmuc" name="danhmuc"
													value="<?php echo $this->data['name'] ?>">
                        <input type="text" class="form-control1 control3" placeholder="Mô tả" id="mota" name="mota"
													value="<?php echo $this->data['com'] ?>">
                        <textarea rows="3" class="form-control1 control2" placeholder="Nội dung:" id="com" name="com"><?php echo $this->data['com'] ?></textarea>
                        <br>
                        <input type="text" class="form-control1 control3" placeholder="Thứ tự sắp xếp" id="thutu" name="thutu"
													value="<?php echo $this->data['thu_tu'] ?>">
                        <input type="text" class="form-control1 control3" placeholder="URL" id="url" name="url"
													value="<?php echo $this->data['url'] ?>">
												<input type="text" class="form-control1 control3" placeholder="Link ảnh (để trống nếu muốn tải ảnh lên)" id="hinhanh" name="hinhanh"
													value="">
												<img src="<?php echo $this->data['hinh_anh']; ?>" height="60px">
												<div class="btn btn-default btn-file widget-shadow">
														<i class="fa fa-paperclip"></i> Tải ảnh lên (max:2M)
														<input type="file" name="hinh_anh">
												</div>
												<input type="submit" value="Cập nhật">
                    </form>
                </div>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
</div> -->
