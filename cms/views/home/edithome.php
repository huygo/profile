<div id="mainContent">
	<div class="masonry-item col-md-12">
		<div class="bgc-white p-20 bd">
        	<h4 class="c-grey-900" >Cập nhật thành phần trang chủ</h4>
				<div class="mT-30">
                <form action="home/edithomesave?id=<?php echo $this->data[0]['id'] ?>" method="post" 
                enctype="multipart/form-data">
                	<input type="hidden" id="com" name="com" value="<?php echo $this->data[0]['com_id'] ?>" />
                   <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="name">Tên thành phần</label> 
                            <input type="text" class="form-control" id="name" placeholder="Tên thành phần" name="name"
                                value="<?php echo $this->data[0]['name'] ?>" required="required">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="mota">Mô tả</label> 
                            <input type="text" class="form-control" id="mota" placeholder="Mô tả" name="mota"
                                value="<?php echo $this->data[0]['mo_ta'] ?>" >
                        </div>
					</div><div class="form-row">                            
                         <div class="form-group col-md-6">
                            <label for="opt1">Tùy chọn 1</label> 
                            <input type="text" class="form-control" id="opt1" placeholder="Tùy chọn 1" name="opt1"
                                value="<?php echo $this->data[0]['option_1'] ?>" >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="opt2">Tùy chọn 2</label> 
                            <input type="text" class="form-control" id="opt2" placeholder="Tùy chọn 2" name="opt2"
                                value="<?php echo $this->data[0]['option_2'] ?>">
                        </div>
					</div><div class="form-row">                            
                         <div class="form-group col-md-6">
                            <label for="link">Liên kết</label> 
                            <input type="text" class="form-control" id="link" placeholder="Liên kết" name="link"
                                value="<?php echo $this->data[0]['link'] ?>" >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="video">Video</label> 
                            <input type="text" class="form-control" id="video" placeholder="Video" name="video"
                                value="<?php echo $this->data[0]['video'] ?>">
                        </div>   
                    </div><div class="form-row">
                        <div class="form-group col-md-6">
                        	<img src="<?php 
								if (getimagesize($this->data[0]['hinh_anh']))
									echo $this->data[0]['hinh_anh'];
								else 
									echo 'https://via.placeholder.com/360x225';
							?>" height="100px" /> Ảnh đại diện
                        </div>
                        <div class="form-group col-md-6">
                        	<label for="logo">Link ảnh</label> 
                        	<input type="text" class="form-control" id="logo" placeholder="Link ảnh" name="logo"
                            value="<?php echo $this->data[0]['hinh_anh']; ?>">
                            <input type="file" id="hinh_anh" name="hinh_anh" class="btn btn-primary" style="margin-top:5px">
                        </div>
                    </div><div class="form-row">
                        <button type="submit" class="btn btn-primary">Cập nhật</button> &nbsp;&nbsp;&nbsp;
                        <a href="home/edit?id=<?php echo $this->data[0]['com_id'] ?>" type="button" class="btn btn-danger ">
                        Quay lại</a>
                    </div>
                </form>
              	</div>
			</div>
		</div>
	</div>
</div>