<div id="mainContent">
	<div class="container-fluid">
		<div class="row">
        	<div class="col-md-12">
            	
                
            	<div class="bgc-white bd bdrs-3 p-20 mB-20">
                	<h4 class="c-grey-900 mB-20">Chính sách phân chia lợi nhuận</h4>
<!--                    <a href="policy/add" class="btn cur-p btn-primary">Thêm mới</a>
                    <input class="form-control" placeholder="Tìm kiếm" style="width:200px; float:left; margin-right:20px">
                    <br /><br />
-->                    <table class="table">
           				<thead class="thead-dark">
                                    <tr>
                                       <th scope="col">#</th>
                                       <th scope="col">Ngày áp dụng</th>
                                       <th scope="col">% Kinh doanh</th>
                                       <th scope="col">% Văn phòng</th>
                                       <th scope="col">% Kỹ thuật</th>
                                       <th scope="col"></th>
                                    </tr>
                        </thead>
                        <tbody>
						<?php 
							$i=1;
							foreach ($this->data as $item) {
								echo ' <tr>
                                       <th scope="row">'.$i.'</th>
                                       <td>'.$item['ngay'].'</td>
                                       <td>'.$item['sale'].'</td>
									   <td>'.$item['van_phong'].'</td>
									   <td>'.$item['dev'].'</td>
                                       <td align="right">
                                       </td>
                                    </tr>';
								$i++;
							}
						?>
                        </tbody>
					</table>
                    <div class="form-group col-md-12">
                            <label for="ghichu">Ghi chú</label>
                            <textarea name="compose" class="form-control" rows="12" readonly="readonly"><?php echo $this->data[0]['ghi_chu'] ?></textarea>
                            <br /><br />
                            <?php if ($_SESSION['userdata']['id']==1) 
                            	echo '<a href="policy/edit?id='.$this->data[0]['id'].'" class="btn cur-p btn-primary">Điều chỉnh</a>';
							?>
                    </div>

				</div>
			</div>
		</div>
	</div>
</div>
