<div id="page-wrapper">
    <div class="main-page">
        <div class="bs-example widget-shadow" data-example-id="hoverable-table">
            <div class="panel-primary">
                <div class="panel-heading">
                    Thêm mới menu
                </div>
                <div class="panel-body">
									<form class="form-horizontal" action="menu/addsave" method="post" enctype="multipart/form-data" >
											<div class="form-group">
													<label for="name" class="col-sm-2 control-label">Tên menu</label>
													<div class="col-sm-8">
															<input type="text" class="form-control1" id="name" name="name" placeholder="Tên menu">
													</div>
											</div>
											<div class="form-group">
												<label for="cha" class="col-sm-2 control-label">Menu cha</label>
												<div class="col-sm-8"><select name="cha" id="cha" class="form-control1">
													<option value="0" >Root</option>
													<?php
																foreach ($this->menu as $opt) {
																	echo '<option value="'.$opt['id'].'" >';
																	if ($opt['level']==1) echo '---';
																	elseif ($opt['level']==2) echo '------';
																	echo $opt['name'].'</option>';
																}
													?>
												</select></div>
											</div>
											<div class="form-group">
													<label for="kieu" class="col-sm-2 control-label">Kiểu liên kết</label>
													<div class="col-sm-8">
														<select name="kieu" id="kieu" class="form-control1" onChange="reloadselection()">
															<option value="1" >Bài viết</option>
															<option value="2" >Danh mục bài viết</option>
															<option value="3" >Sản phẩm</option>
															<option value="4" >Danh mục sản phẩm</option>
															<option value="5" >Template</option>
                              <option value="6" >Liên kết ngoài</option>
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
    																	echo '>'.$opt['name'].'</option>';
    																}
    													?>
														</select>
													</div>
											</div>
											<div class="form-group">
													<label for="url" class="col-sm-2 control-label">URL</label>
													<div class="col-sm-8">
															<input  type="text" class="form-control1" id="url" name="url" placeholder="Đường dẫn URL" >
													</div>
											</div>
											<div class="form-group">
													<label for="thutu" class="col-sm-2 control-label">Thứ tự</label>
													<div class="col-sm-8">
															<input type="text" class="form-control1" placeholder="Thứ tự" id="thutu" name="thutu">
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
