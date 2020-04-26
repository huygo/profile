<div id="page-wrapper">
    <div class="main-page">
        <div class="bs-example widget-shadow" data-example-id="hoverable-table">
            <div class="panel-primary">
                <div class="panel-heading">
                    Upload media
                </div>
                <div class="panel-body">
									<form class="form-horizontal" action="media/addsave" method="post" enctype="multipart/form-data" >
											<div class="form-group">
													<label for="name" class="col-sm-2 control-label">Tiêu đề</label>
													<div class="col-sm-8">
															<input type="text" class="form-control1" id="name" name="name" placeholder="Tên media">
													</div>
											</div>
											<div class="form-group">
												<label for="loai" class="col-sm-2 control-label">Phân loại</label>
												<div class="col-sm-8"><select name="loai" id="loai" class="form-control1">
													<option value="1">Hình ảnh</option>
													<option value="2">Video</option>
													<option value="3">Audio</option>
												</select></div>
											</div>
											<div class="form-group">
													<label for="url" class="col-sm-2 control-label">URL</label>
													<div class="col-sm-8">
															<input  type="text" class="form-control1" id="url" name="url" placeholder="Link nhúng video/audio">
													</div>
											</div>
											<div class="form-group">
												<label for="folder" class="col-sm-2 control-label">Folder</label>
												<div class="col-sm-8"><select name="folder" id="folder" class="form-control1">
                          <?php
                                $folders = glob(ROOT_DIR.'/uploads/*', GLOB_ONLYDIR);
                                foreach ($folders as $folder) {
                                    $folder = substr($folder,strrpos($folder,'/')+1);
                                    echo '<option value="'.$folder.'">'.$folder.'</option>';
                                }
                          ?>
												</select></div>
											</div>
											<div class="form-group">
													<label for="update" class="col-sm-2 control-label">Thứ tự</label>
													<div class="col-sm-8">
														<div class="btn btn-default btn-file widget-shadow">
																<i class="fa fa-paperclip"></i> Tải ảnh 1 (max:2M)
																<input type="file" name="file">
														</div>
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
