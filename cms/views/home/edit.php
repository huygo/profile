<div id="mainContent">
	<div class="container-fluid">
		<div class="row">
     		<div class="col-md-12">
       			<div class="bgc-white bd bdrs-3 p-20 mB-20">    
                	<div class="form-group col-md-3" style="float:left">
                		<h4>Quản lý <?php echo $this->title ?></h4>
                    </div>
					<div class="form-group col-md-2" style="float:left">
                    	<a href="home/addhome?com=<?php echo $this->com ?>" 
                        class="btn cur-p btn-primary">Thêm mới</a>
                    </div>
                	<div class="table-responsive">
                    <table class="table">
           				<thead class="v-bg-blue">
                                    <tr>
                                       <td>#</td>
                                       <td>Tên</td>
                                       <td>Mô tả</td>
                                       <td align="center">Hình ảnh</td>
                                       <td align="center">Bật/tắt</td>
                                    </tr>
                        </thead>
                        <tbody>
						<?php 
							$i=1;
							foreach ($this->data as $item) {
								echo ' <tr>
                                       <td>'.$i.'</td>
                                       <td>'.$item['name'].' <a href="home/edithome?id='.$item['id'].'"
									   class="btn"><i class="c-blue-500 ti-pencil-alt"></i></a></td>
									   <td>'.$item['mo_ta'].'</td>
                                       <td align="center"><img src="'.$item['hinh_anh'].'" height="60px" /></td> 
										<td align="center"><a href="home/delhome?id='.$item['id'].'&com='.$this->com.'"';
								if ($item['tinh_trang']==1)
									echo 'class="btn cur-p btn-primary">Bật</a></td></tr>';
								else
									echo 'class="btn cur-p btn-danger">Tắt</a></td></tr>';
								$i++;
							}
						?>
                        </tbody>
					</table>
				</div>
                <a href="home" type="button" class="btn btn-danger ">Quay lại</a>
			</div>
		</div>
	</div>
</div>
