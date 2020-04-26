<div id="page-wrapper">
    <div class="main-page">
        <div class="bs-example widget-shadow" data-example-id="hoverable-table">
            <div class="panel-primary">
                <div class="panel-heading">
                    Thêm danh mục sản phẩm
                </div>
                <div class="panel-body">
									<form class="form-horizontal" action="dmtemp/addsave" method="post" enctype="multipart/form-data" >
											<div class="form-group">
													<label for="name" class="col-sm-2 control-label">Tên danh mục</label>
													<div class="col-sm-8">
															<input type="text" class="form-control1" id="name" name="name" placeholder="Tên danh mục sản phẩm">
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
															<img src="http://via.placeholder.com/360x225" height="60px">
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
															<input  type="text" class="form-control1" id="thutu" name="thutu" placeholder="Thứ tự xuất hiện" >
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
