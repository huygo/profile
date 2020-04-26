<div id="mainContent">
	<div class="masonry-item col-md-12">
		<div class="bgc-white p-20 bd">
        	<h4 class="c-grey-900" >Thêm component</h4> 
				<div class="mT-30">
                <form action="component/addsave" method="post" enctype="multipart/form-data">
                   <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="name">Tên component</label> 
                            <input type="text" class="form-control" id="name" placeholder="Tên component" name="name"
                                value="" required="required">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="loai">Phân loại</label> 
                            <select id="loai" class="form-control" name="loai">
                                <option value="3" >
                                	Thành phần trang chủ</option>
                            	<option value="1" >
                                	Bài viết</option>
                                <option value="2" >
                                	Danh mục</option>
                            </select>                        
                        </div>
                    </div><div class="form-row">
                        <button type="submit" class="btn btn-primary">Cập nhật</button> &nbsp;&nbsp;&nbsp;
                        <a href="component" type="button" class="btn btn-danger ">Bỏ qua</a>
                    </div>
                </form>
              	</div>
			</div>
		</div>
	</div>
</div>