<div id="page-wrapper">
    <div class="main-page">
        <div class="bs-example widget-shadow" data-example-id="hoverable-table">
            <div class="panel-primary">
                <div class="panel-heading">
                    Cập nhật danh mục sản phẩm
                </div>
                <div class="panel-body">
									<form class="form-horizontal" action="dmtemp/editsave?id=<?php echo $this->data['id'] ?>" method="post" enctype="multipart/form-data" >
											<div class="form-group">
													<label for="name" class="col-sm-2 control-label">Tên danh mục</label>
													<div class="col-sm-8">
															<input type="text" class="form-control1" id="name" name="name" placeholder="Tên danh mục sản phẩm"
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
															<img src="<?php echo $this->data['hinh_anh']; ?>" height="60px">
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
													<label for="niemyet" class="col-sm-2 control-label">Thứ tự xuất hiện</label>
													<div class="col-sm-8">
															<input  type="text" class="form-control1" id="thutu" name="thutu" placeholder="Đường dẫn URL"
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
