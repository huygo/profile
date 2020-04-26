<div id="page-wrapper">
    <div class="main-page">
        <div class="bs-example widget-shadow" data-example-id="hoverable-table">
            <div class="panel-primary">
                <div class="panel-heading">
                    Cập nhật thông tin menu
                </div>
                <div class="panel-body">
									<form class="form-horizontal" action="menu/editsave?id=<?php echo $this->data['id'] ?>" method="post" enctype="multipart/form-data" >
											<div class="form-group">
													<label for="name" class="col-sm-2 control-label">Tên menu</label>
													<div class="col-sm-8">
															<input type="text" class="form-control1" id="name" name="name" placeholder="Tên menu"
															value="<?php echo $this->data['name']; ?>" >
													</div>
											</div>
											<div class="form-group">
												<label for="cha" class="col-sm-2 control-label">Menu cha</label>
												<div class="col-sm-8"><select name="cha" id="cha" class="form-control1">
													<option value="0" <?php if ($this->data['cha']==0) echo 'selected="selected"'; ?>>Root</option>
													<?php
																foreach ($this->menu as $opt) {
                                   echo '<option value="'.$opt['id'].'" ';
                                   if ($this->data['cha']==$opt['id']) echo 'selected ';
                                   echo '>';
                                   if ($opt['level']==1) echo '---';
                                   if ($opt['level']==2) echo '------';
                                   echo $opt['name'].'</option>';
																}
													?>
												</select></div>
											</div>
											<div class="form-group">
													<label for="kieu" class="col-sm-2 control-label">Kiểu liên kết</label>
													<div class="col-sm-8">
														<select name="kieu" id="kieu" class="form-control1" onChange="reloadselection()">
															<option value="1" <?php if ($this->data['phan_loai']==1) echo 'selected="selected"'; ?>>Bài viết</option>
															<option value="2" <?php if ($this->data['phan_loai']==2) echo 'selected="selected"'; ?>>Danh mục bài viết</option>
															<option value="3" <?php if ($this->data['phan_loai']==3) echo 'selected="selected"'; ?>>Sản phẩm</option>
															<option value="4" <?php if ($this->data['phan_loai']==4) echo 'selected="selected"'; ?>>Danh mục sản phẩm</option>
															<option value="5" <?php if ($this->data['phan_loai']==5) echo 'selected="selected"'; ?>>Template</option>
                              <option value="6" <?php if ($this->data['phan_loai']==6) echo 'selected="selected"'; ?>>Liên kết ngoài</option>
														</select>
													</div>
											</div>
											<div class="form-group">
													<label for="selection" class="col-sm-2 control-label">Selection</label>
													<div class="col-sm-8">
														<select name="selection" id="selection" class="form-control1">
                              <?php
    																foreach ($this->select as $opt) {
    																	echo '<option value="'.$opt['id'].'" ';
    																	if ($this->data['url']==$opt['id']) echo 'selected="selected"';
    																	echo '>'.$opt['name'].'</option>';
    																}
    													?>
														</select>
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
													<label for="update" class="col-sm-2 control-label">Thứ tự</label>
													<div class="col-sm-8">
															<input type="text" class="form-control1" placeholder="Ngày cập nhật" id="thutu" name="thutu" value="<?php echo $this->data['thu_tu'] ?>">
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
function reloadselection() {
		var e=document.getElementById('kieu');
		var opt = e.options[e.selectedIndex].value;
    $.get("menu/select?option="+opt, function(data, status){
        var sel=document.getElementById("selection")
        sel.innerHTML = "";
        var options = JSON.parse(data,true);
        options.forEach(function(item){
            var option = document.createElement("option");
            option.value = item.id;
            option.text = item.name;
            sel.add(option);
        });
    });
}
</script>


<!-- <div id="mainContent">
	<div class="masonry-item col-md-12">
		<div class="bgc-white p-20 bd">
        	<h4 class="c-grey-900" >Sửa menu</h4>
				<div class="mT-30">
                <form action="menu/editsave?id=" method="post"
                enctype="multipart/form-data">
                   <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="menu">Tên menu</label>
                            <input type="text" class="form-control" id="menu" placeholder="Tên menu" name="menu"
                                value="" required="required">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="cha">Menu cha</label>
                            <select id="cha" class="form-control" name="cha">
                            	<option value="0" >Root
                                </option>

                            </select>
                        </div>
                	</div><div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="url">Chọn URL danh mục, bài viết hoặc liên kết ngoài</label>
                            <select id="url" class="form-control" name="url">
                            	<option value="0">Liên kết ngoài</option>

                            </select>
                        </div>
						<div class="form-group col-md-6">
                            <label for="link">URL</label>
                            <input type="text" class="form-control" id="link" placeholder="Mô tả" name="link"
                                value="">
                        </div>
                    </div><div class="form-row">
                        <button type="submit" class="btn btn-primary">Cập nhật</button> &nbsp;&nbsp;&nbsp;
                        <a href="menu" type="button" class="btn btn-danger ">Bỏ qua</a>
                    </div>
                </form>
              	</div>
			</div>
		</div>
	</div>
</div> -->
