<div id="mainContent">
	<div class="container-fluid">
		<div class="row">
     		<div class="col-md-12">
       			<div class="bgc-white bd bdrs-3 p-20 mB-20">    
                	<div class="form-group col-md-3" style="float:left">
                		<h4>Quản lý component</h4>
                    </div>
                    <div class="form-group col-md-2" style="float:left">
                    	<a href="component/add" class="btn cur-p btn-primary">Thêm mới</a>
                    </div>
                 	<div class="table-responsive">
                 	<table class="table">
                       <thead class="v-bg-blue">
                        <tr>
                         <td>#</td>
                         <td>Tên thành phần</td>
                         <td>Phân loại</td>
                         <td align="center">Tình trạng</td>
                       </tr>
                     </thead>
                     <tbody>
					<?php 
							$i=1;
							foreach ($this->data as $item) { 
								if ($item['loai']==1)
									$loai='Bài viết';
								elseif ($item['loai']==2)
									$loai='Danh mục';
								else
									$loai='Thành phần trang chủ';
								echo '
								<tr>
								<th scope="row">'.$i.'</th>
								<td><a href="component/edit?id='.$item['id'].'">'.$item['name'].'</a></td>
								<td>'.$loai.'</td>
								<td align="center"><a href="component/del?id='.$item['id'].'"';
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
    			</div>
  			</div>
		</div>
	</div>
</div>