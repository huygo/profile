<div id="mainContent">
	<div class="masonry-item col-md-12">
		<div class="bgc-white p-20 bd">
        	<h4 class="c-grey-900" >Thêm thành phần trang chủ</h4>
				<div class="mT-30">
                <form action="home/addhomesave" method="post" 
                enctype="multipart/form-data">
                	<input type="hidden" id="com" name="com" value="<?php echo $this->com ?>" />
                   <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="name">Tên thành phần</label> 
                            <input type="text" class="form-control" id="name" placeholder="Tên thành phần" name="name"
                                value="" required="required">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="mota">Mô tả</label> 
                            <input type="text" class="form-control" id="mota" placeholder="Mô tả" name="mota"
                                value="" >
                        </div>
					</div><div class="form-row">                            
                         <div class="form-group col-md-6">
                            <label for="opt1">Tùy chọn 1</label> 
                            <input type="text" class="form-control" id="opt1" placeholder="Tùy chọn 1" name="opt1"
                                value="" >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="opt2">Tùy chọn 2</label> 
                            <input type="text" class="form-control" id="opt2" placeholder="Tùy chọn 2" name="opt2"
                                value="">
                        </div>
					</div><div class="form-row">                            
                         <div class="form-group col-md-6">
                            <label for="link">Liên kết</label> 
                            <input type="text" class="form-control" id="link" placeholder="Liên kết" name="link"
                                value="" >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="video">Video</label> 
                            <input type="text" class="form-control" id="video" placeholder="Video" name="video"
                                value="">
                        </div>   
                    </div><div class="form-row">
                        <div class="form-group col-md-6">
                        	<img src="https://via.placeholder.com/75x80" height="100px" /> Ảnh đại diện
                        </div>
                        <div class="form-group col-md-6">
                        	<label for="logo">Link ảnh</label> 
                        	<input type="text" class="form-control" id="logo" placeholder="Link ảnh" name="logo"
                            value="">
                            <input type="file" id="hinh_anh" name="hinh_anh" class="btn btn-primary" style="margin-top:5px">
                        </div>
                    </div><div class="form-row">
                        <button type="submit" class="btn btn-primary">Cập nhật</button> &nbsp;&nbsp;&nbsp;
                        <a href="home/edit?id=<?php echo $this->com ?>" type="button" class="btn btn-danger ">
                        Quay lại</a>
                    </div>
                </form>
              	</div>
			</div>
		</div>
	</div>
</div>