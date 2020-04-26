<script type="text/javascript" src="<?php echo CMS ?>/tinymce/tinymce.min.js"></script>
<div id="page-wrapper">
    <div class="main-page">
        <div class="bs-example widget-shadow" data-example-id="hoverable-table">
            <div class="panel-primary">
                <div class="panel-heading">
                    Cập nhật thông tin bài viết
                </div>
                <div class="panel-body">
									<form class="form-horizontal" action="baiviet/editsave?id=<?php echo $this->data['id'] ?>" method="post" enctype="multipart/form-data" >
											<div class="form-group">
													<label for="name" class="col-sm-2 control-label">Tiêu đề bài viết</label>
													<div class="col-sm-8">
															<input type="text" class="form-control1" id="name" name="name" placeholder="Tiêu đề bài viết"
															value="<?php echo $this->data['name']; ?>" >
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
													<label for="url" class="col-sm-2 control-label">URL</label>
													<div class="col-sm-8">
															<input  type="text" class="form-control1" id="url" name="url" placeholder="Đường dẫn URL"
															value="<?php echo $this->data['url']; ?>" >
													</div>
											</div>
                      <div class="form-group">
                        <label for="danhmuc" class="col-sm-2 control-label">Thuộc danh mục</label>
                        <div class="col-sm-8">
                            <div id="danhsach" style="border:1px solid #CCC; padding:10px" >
                                <?php
                                       foreach ($this->danhsach as $value)
                                       echo '<input type="checkbox" name="danhsach[]"
                                       value="'.$value['id'].'" checked> '.$value['name'].' ';
                                ?>
                            </div>
                        </div>
                      </div>
                      <div class="form-group">
                          <label for="url" class="col-sm-2 control-label"></label>
                          <div class="col-sm-8"><select name="danhmuc" id="danhmuc" class="form-control1" onchange="them()">
                            <option value="0">Chọn danh mục</option>
                            <?php
                                  foreach ($this->danhmuc as $opt) {
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
													<label for="vitri" class="col-sm-2 control-label">Vị trí</label>
													<div class="col-sm-8">
															<input type="text" class="form-control1" placeholder="Vị trí xuất hiện trên trang chủ" id="com" name="com" value="<?php echo $this->data['com']; ?>">
													</div>
											</div>
                      <div class="form-group">
													<label for="vitri" class="col-sm-2 control-label">Lượt xem</label>
													<div class="col-sm-8">
															<input type="text" class="form-control1" placeholder="Thứ tự xuất hiện" id="luotxem" name="luotxem" value="<?php echo $this->data['luot_xem']; ?>">
													</div>
											</div>
											<div class="form-group">
													<label for="txtarea1" class="col-sm-2 control-label">Nội dung</label>
													<div class="col-sm-8">
															<textarea rows="3" class="form-control1 control2" placeholder="Nội dung chi tiết :"  name="compose" id="compose"><?php echo $this->data['noi_dung']; ?></textarea>
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
													<label for="update" class="col-sm-2 control-label">Ngày cập nhật</label>
													<div class="col-sm-8">
															<input type="date" class="form-control1" placeholder="Ngày cập nhật" id="ngay" name="ngay" value="<?php echo $this->data['ngay_cap_nhat'] ?>">
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
<script>
	tinymce.init({
                mode: "textareas",
								entity_encoding : "raw",
                plugins: ["advlist autolink lists link image charmap print preview anchor",
                            "searchreplace visualblocks code fullscreen textcolor", "media",
                            "insertdatetime media table contextmenu paste jbimages","fullscreen","moxiemanager"],
                image_advtab: true,
                paste_data_images: true,
                browser_spellcheck : true,
                relative_urls:false,
                remove_script_host : false,
                //convert_urls : true,
                image_dimensions: false,
                forced_root_block : false,
                force_br_newlines : true,
                force_p_newlines : false,
                toolbar: " undo redo | styleselect | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media insertfile |  fontsizeselect | forecolor backcolor | fullscreen"
		});

    function them() {
  		var id=document.getElementById("danhmuc").value;
  		var row=document.getElementById("danhmuc");
  		var text=row.options[row.selectedIndex].text;
  		var danhsach=document.getElementById('danhsach');
  		var inner=danhsach.innerHTML+'<input type="checkbox" name="danhsach[]" value="'+id+'" checked=""> '+text+' ';
  		danhsach.innerHTML=inner;
  	}

</script>
