<div id="mainContent">
	<div class="masonry-item col-md-12">
		<div class="bgc-white p-20 bd">
        	<h4 class="c-grey-900">Cập nhật chính sách</h6>
				<div class="mT-30">
                <form action="policy/editsave?id=<?php echo $this->data['id'] ?>" method="post">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="policy">Sale</label> 
                            <input type="text" class="form-control" id="policy" placeholder="Tên dịch vụ" name="policy"
                                value="<?php echo $this->data['sale'] ?>" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="donvi">Văn phòng</label>
                            <input type="text" class="form-control" id="donvi" placeholder="Đơn vị tính" name="donvi"
                            value="<?php echo $this->data['van_phong'] ?>" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="dongia">Developer</label>
                            <input type="text" class="form-control" id="dongia" placeholder="Đơn giá" name="dongia"
                            value="<?php echo $this->data['dev'] ?>" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="giavon">Tình trạng</label>
                            <input type="text" class="form-control" placeholder="Giá vốn"  id="giavon" name="giavon"
                            value="<?php echo $this->data['tinh_trang'] ?>">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="ghichu">Ghi chú</label>
                            <textarea name="ghichu" class="form-control" rows="10"><?php echo $this->data['ghi_chu'] ?></textarea>
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