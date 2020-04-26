<script type="text/javascript" src="<?php echo CMS ?>/tinymce/tinymce.min.js"></script>
<div id="page-wrapper">
    <div class="main-page">
        <div class="bs-example widget-shadow" data-example-id="hoverable-table">
            <div class="panel-primary">
                <div class="panel-heading">
                    Cập nhật thông tin sản phẩm
                </div>
                <div class="panel-body">
									<form class="form-horizontal" action="sanpham/editsave?id=<?php echo $this->data['id'] ?>" method="post" enctype="multipart/form-data" >
											<div class="form-group">
													<label for="name" class="col-sm-2 control-label">Tên sản phẩm</label>
													<div class="col-sm-8">
															<input type="text" class="form-control1" id="name" name="name" placeholder="Tên sản phẩm"
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
													<label for="url" class="col-sm-2 control-label">Mã sản phẩm</label>
													<div class="col-sm-8">
															<input  type="text" class="form-control1" id="masp" name="masp" placeholder="Mã sản phẩm"
															value="<?php echo $this->data['ma_sp']; ?>" >
													</div>
											</div>
                      <div class="form-group">
													<label for="txtarea1" class="col-sm-2 control-label">Mô tả vắn tắt</label>
													<div class="col-sm-8">
															<textarea rows="3" class="form-control1 control2"
                              placeholder="Mô tả tính năng cơ bản của sản phẩm"
                              name="tinhnang" id="tinhnang"><?php echo $this->data['tinh_nang']; ?></textarea>
													</div>
											</div>
                      <div class="form-group">
                        <label for="danhmuc" class="col-sm-2 control-label">Chọn danh mục</label>
                        <div class="col-sm-8"><select name="danhmuc" id="danhmuc" class="form-control1" onchange="them()">
                          <option value="0">Chưa chọn danh mục</option>
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
													<label for="url" class="col-sm-2 control-label"></label>
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
													<label for="url" class="col-sm-2 control-label">URL</label>
													<div class="col-sm-8">
															<input  type="text" class="form-control1" id="url" name="url" placeholder="Đường dẫn URL"
															value="<?php echo $this->data['url']; ?>" >
													</div>
											</div>
											<div class="form-group">
													<label for="niemyet" class="col-sm-2 control-label">Giá thuê</label>
													<div class="col-sm-8">
															<input  type="text" class="form-control1" id="niemyet" name="niemyet" placeholder="Đường dẫn URL"
															value="<?php echo $this->data['gia_niem_yet']; ?>" >
													</div>
											</div>
											<div class="form-group">
													<label for="giaban" class="col-sm-2 control-label">Giá mua</label>
													<div class="col-sm-8">
															<input  type="text" class="form-control1" id="giaban" name="giaban" placeholder="Đường dẫn URL"
															value="<?php echo $this->data['gia_ban']; ?>" >
													</div>
											</div>
                      <div class="form-group">
													<label for="update" class="col-sm-2 control-label">Vị trí xuất hiện</label>
													<div class="col-sm-8">
															<input type="text" class="form-control1" placeholder="Vị trí trên trang chủ" id="vitri" name="vitri" value="<?php echo $this->data['com'] ?>">
													</div>
											</div>
                      <div class="form-group">
													<label for="update" class="col-sm-2 control-label">Lượt xem</label>
													<div class="col-sm-8">
															<input type="text" class="form-control1" placeholder="Lượt xem" id="luotxem" name="luotxem" value="<?php echo $this->data['luot_xem'] ?>">
													</div>
											</div>
											<div class="form-group">
													<label for="txtarea1" class="col-sm-2 control-label">Mô tả chi tiết</label>
													<div class="col-sm-8">
															<textarea rows="3" class="form-control1 control2" placeholder="Nội dung chi tiết :"  name="compose" id="compose"><?php echo $this->data['noi_dung']; ?></textarea>
													</div>
											</div>
											<div class="form-group">
													<label for="vitri" class="col-sm-2 control-label">Ảnh đại diện</label>
													<div class="col-sm-8">
															<img src="<?php echo ($this->data['hinh_anh']=='')?'http://via.placeholder.com/640x480':$this->data['hinh_anh']; ?>" height="60px">
													</div>
											</div>
											<div class="form-group">
													<label for="vitri" class="col-sm-2 control-label">Link ảnh</label>
													<div class="col-sm-8">
															<input type="text" class="form-control1" placeholder="Link ảnh" id="hinhanh" name="hinhanh" value="<?php echo $this->data['hinh_anh']; ?>">
													</div>
											</div>
                      <div class="form-group">
													<label for="slide0" class="col-sm-2 control-label">Ảnh slide 1</label>
													<div class="col-sm-8">
															<img src="<?php echo $this->data['slide_0']; ?>" height="60px">
													</div>
											</div>
											<div class="form-group">
													<label for="vitri" class="col-sm-2 control-label">Link ảnh</label>
													<div class="col-sm-8">
															<input type="text" class="form-control1" placeholder="Link ảnh" id="slide0" name="slide0" value="<?php echo $this->data['slide_0']; ?>">
													</div>
											</div>
                      <div class="form-group">
													<label for="slide1" class="col-sm-2 control-label">Ảnh slide 2</label>
													<div class="col-sm-8">
															<img src="<?php echo $this->data['slide_1']; ?>" height="60px">
													</div>
											</div>
											<div class="form-group">
													<label for="vitri" class="col-sm-2 control-label">Link ảnh</label>
													<div class="col-sm-8">
															<input type="text" class="form-control1" placeholder="Link ảnh" id="slide1" name="slide1" value="<?php echo $this->data['slide_1']; ?>">
													</div>
											</div>
                      <div class="form-group">
													<label for="slide2" class="col-sm-2 control-label">Ảnh slide 3</label>
													<div class="col-sm-8">
															<img src="<?php echo $this->data['slide_2']; ?>" height="60px">
													</div>
											</div>
											<div class="form-group">
													<label for="vitri" class="col-sm-2 control-label">Link ảnh</label>
													<div class="col-sm-8">
															<input type="text" class="form-control1" placeholder="Link ảnh" id="slide2" name="slide2" value="<?php echo $this->data['slide_2']; ?>">
													</div>
											</div>
                      <div class="form-group">
													<label for="slide3" class="col-sm-2 control-label">Ảnh slide 4</label>
													<div class="col-sm-8">
															<img src="<?php echo $this->data['slide_3']; ?>" height="60px">
													</div>
											</div>
											<div class="form-group">
													<label for="vitri" class="col-sm-2 control-label">Link ảnh</label>
													<div class="col-sm-8">
															<input type="text" class="form-control1" placeholder="Link ảnh" id="slide3" name="slide3" value="<?php echo $this->data['slide_3']; ?>">
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
