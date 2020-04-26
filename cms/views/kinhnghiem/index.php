<div id="page-wrapper">
    <div class="main-page">
        <div class="tables">
            <h3 class="title1">Kinh nghiệm bản thân</h3>
            <div class="bs-ex_ample widget-shadow" data-ex_ample-id="hoverable-table">
                <form action="kinhnghiem/editsave" method="post" enctype="multipart/form-data">
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="name">Kinh nghiệm 1</label>
                            <input type="tex_t" class="form-control" id="kn1" placeholder="Kinh nghiệm 1" name="kn1" value="<?php echo $this->data['ex_1'] ?>" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="name">Đánh giá</label>
                            <input type="text" class="form-control" id="rate1" placeholder="Kinh nghiệm 1" name="rate1" value="<?php echo $this->data['rate_1'] ?>" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="diachi">Kinh nghiệm 2</label>
                            <input type="text" class="form-control" id="kn2" placeholder="Kinh nghiệm 2" name="kn2" value="<?php echo $this->data['ex_2'] ?>" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="diachi">Đánh giá</label>
                            <input type="text" class="form-control" id="rate2" placeholder="Kinh nghiệm 2" name="rate2" value="<?php echo $this->data['rate_2'] ?>" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="dienthoai">Kinh nghiệm 3</label>
                            <input type="tex_t" class="form-control" id="kn3" placeholder="Kinh nghiệm 3" name="kn3" value="<?php echo $this->data['ex_3'] ?>" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="diachi">Đánh giá</label>
                            <input type="text" class="form-control" id="rate3"  name="rate3" value="<?php echo $this->data['rate_3'] ?>" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="email">Kinh nghiệm 4</label>
                            <input type="tex_t" class="form-control" placeholder="Kinh nghiệm 4" id="kn4" name="kn4" value="<?php echo $this->data['ex_4'] ?>">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="diachi">Đánh giá</label>
                            <input type="text" class="form-control" id="rate4" name="rate4" value="<?php echo $this->data['rate_4'] ?>" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="tenmien">Kinh nghiệm 5</label>
                            <input type="tex_t" class="form-control" id="kn5" placeholder="Kinh nghiệm 5" name="kn5" value="<?php echo $this->data['ex_5'] ?>">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="diachi">Đánh giá</label>
                            <input type="text" class="form-control" id="rate5" name="rate5" value="<?php echo $this->data['rate_5'] ?>" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="tenmien">Doanh thu</label>
                            <input type="tex_t" class="form-control" id="doanhthu" placeholder="Doanh thu" name="doanhthu" value="<?php echo $this->data['doanh_thu'] ?>">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="ghichu">Dự án</label>
                            <input type="number" class="form-control" id="duan" placeholder="Dự án" name="duan" value="<?php echo $this->data['du_an'] ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="ghichu">Khách hàng</label>
                            <input type="number" class="form-control" id="khachhang" placeholder="Khách hàng" name="khachhang" value="<?php echo $this->data['khach_hang'] ?>">
                        </div>
                    </div>
                    <div class="form-row">
                        <center><button type="submit" class="btn btn-primary">Cập nhật</button></center> &nbsp;&nbsp;&nbsp;
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
