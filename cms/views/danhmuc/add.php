<div id="page-wrapper">
    <div class="main-page">
        <div class="bs-example widget-shadow" data-example-id="hoverable-table">
            <div class="panel-primary">
                <div class="panel-heading">
                    Thêm danh mục bài viết
                </div>
                <div class="panel-body">
									<form class="form-horizontal" action="danhmuc/addsave" method="post" enctype="multipart/form-data" >
											<div class="form-group">
													<label for="name" class="col-sm-2 control-label">Tên danh mục</label>
													<div class="col-sm-8">
															<input type="text" class="form-control1" id="name" name="name" placeholder="Tên danh mục bài viết">
													</div>
											</div>
											<div class="form-group">
													<label for="url" class="col-sm-2 control-label">URL</label>
													<div class="col-sm-8">
															<input  type="text" class="form-control1" id="url" name="url" placeholder="Đường dẫn URL">
													</div>
											</div>
											<div class="form-group">
													<label for="mota" class="col-sm-2 control-label">Lời giới thiệu</label>
													<div class="col-sm-8">
															<input type="text" class="form-control1" placeholder="Lời giới thiệu" name="mota" id="mota">
													</div>
											</div>
											<div class="form-group">
												<label for="cha" class="col-sm-2 control-label">Danh mục cha</label>
												<div class="col-sm-8"><select name="cha" id="cha" class="form-control1">
													<option value="0">Root</option>
													<?php
																foreach ($this->menu as $opt) {
																	echo '<option value="'.$opt['id'].'" ';
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
															<img src="http://via.placeholder.com/360x225" height="60px" style="margin-right:60px">
                              <a href="media" target="_blank" alt="Quản lý media">Quản lý media</a>
													</div>
											</div>
											<div class="form-group">
													<label for="vitri" class="col-sm-2 control-label">Link ảnh</label>
													<div class="col-sm-8">
															<input type="text" class="form-control1" placeholder="Link ảnh" id="hinhanh" name="hinhanh" >
													</div>
											</div>
											<div class="form-group">
													<label for="update" class="col-sm-2 control-label">Vị trí xuất hiện</label>
													<div class="col-sm-8">
															<input type="text" class="form-control1" placeholder="Vị trí trên trang chủ" id="vitri" name="vitri" >
													</div>
											</div>
											<div class="form-group">
													<label for="niemyet" class="col-sm-2 control-label">Thứ tự xuất hiện</label>
													<div class="col-sm-8">
															<input  type="text" class="form-control1" id="thutu" name="thutu" placeholder="Thứ tự">
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
