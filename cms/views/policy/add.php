<div id="mainContent">
	<div class="masonry-item col-md-12">
		<div class="bgc-white p-20 bd">
        	<h4 class="c-grey-900">Cập nhật thông tin dịch vụ</h6>
				<div class="mT-30">
                <form action="policy/addsave" method="post">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="policy">Tên dịch vụ</label> 
                            <input type="text" class="form-control" id="policy" placeholder="Tên dịch vụ" name="policy"
                                value="" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="donvi">Đơn vị tính</label>
                            <input type="text" class="form-control" id="donvi" placeholder="Đơn vị tính" name="donvi"
                            value="" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="dongia">Đơn giá</label>
                            <input type="text" class="form-control" id="dongia" placeholder="Đơn giá" name="dongia"
                            value="" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="giavon">Giá vốn</label>
                            <input type="text" class="form-control" placeholder="Giá vốn"  id="giavon" name="giavon"
                            value="">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="ghichu">Ghi chú</label>
                            <input type="text" class="form-control" id="ghichu" placeholder="Ghi chú" name="ghichu"
                            value="">
                        </div>
                    </div>
                    <div class="form-row">
                        <button type="submit" class="btn btn-primary">Cập nhật</button>
                    </div>
                </form>
              	</div>
			</div>
		</div>
	</div>
</div>