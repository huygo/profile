<div id="mainContent">
                  <div class="row gap-20 masonry pos-r">
                     <div class="masonry-sizer col-md-6"></div>
                     <div class="masonry-item w-100">
                        <div class="row gap-20">
                           <div class="col-md-3">
                              <div class="layers bd bgc-white p-20">
                                 <div class="layer w-100 mB-10">
                                    <h6 class="lh-1">Tổng lượt view</h6>
                                 </div>
                                 <div class="layer w-100">
                                    <div class="peers ai-sb fxw-nw">
                                       <div class="peer peer-greed"><!--<span id="sparklinedash"></span>-->18</div>
                                       <div class="peer"><span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-green-50 c-green-500">+10%</span></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-3">
                              <div class="layers bd bgc-white p-20">
                                 <div class="layer w-100 mB-10">
                                    <h6 class="lh-1">Lượt view trong tháng</h6>
                                 </div>
                                 <div class="layer w-100">
                                    <div class="peers ai-sb fxw-nw">
                                       <div class="peer peer-greed"><!--<span id="sparklinedash2"></span>-->15</div>
                                       <div class="peer"><span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-red-50 c-red-500">-7%</span></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-3">
                              <div class="layers bd bgc-white p-20">
                                 <div class="layer w-100 mB-10">
                                    <h6 class="lh-1">Lượt view tuần này</h6>
                                 </div>
                                 <div class="layer w-100">
                                    <div class="peers ai-sb fxw-nw">
                                       <div class="peer peer-greed"><!--<span id="sparklinedash3"></span>--><?php echo '12,500,000' ?></div>
                                       <div class="peer"><span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-purple-50 c-purple-500">~12%</span></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-3">
                              <div class="layers bd bgc-white p-20">
                                 <div class="layer w-100 mB-10">
                                    <h6 class="lh-1">Đang xem</h6>
                                 </div>
                                 <div class="layer w-100">
                                    <div class="peers ai-sb fxw-nw">
                                       <div class="peer peer-greed"><!--<span id="sparklinedash4"></span>-->
									   <?php echo number_format($this->saletotal) ?></div>
                                       <div class="peer"><span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-blue-50 c-blue-500">33%</span></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="masonry-item col-md-6">
                        <div class="bd bgc-white">
                           <div class="layers">
                              <div class="layer w-100 pX-20 pT-20">
                                 <h6 class="lh-1">Lượt view</h6>
                              </div>
                              <div class="layer w-100 p-20">
                                 <canvas id="line-chart" height="220"></canvas>
                              </div>
                              <div class="layer bdT p-20 w-100">
                                 <div class="peers ai-c jc-c gapX-20">
                                    <div class="peer"><span class="fsz-def fw-600 mR-10 c-grey-800">10% <i class="fa fa-level-up c-green-500"></i></span> <small class="c-grey-500 fw-600">APPL</small></div>
                                    <div class="peer fw-600"><span class="fsz-def fw-600 mR-10 c-grey-800">2% <i class="fa fa-level-down c-red-500"></i></span> <small class="c-grey-500 fw-600">Average</small></div>
                                    <div class="peer fw-600"><span class="fsz-def fw-600 mR-10 c-grey-800">15% <i class="fa fa-level-up c-green-500"></i></span> <small class="c-grey-500 fw-600">Sales</small></div>
                                    <div class="peer fw-600"><span class="fsz-def fw-600 mR-10 c-grey-800">8% <i class="fa fa-level-down c-red-500"></i></span> <small class="c-grey-500 fw-600">Profit</small></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="masonry-item col-md-6">
                        <div class="bd bgc-white">
                           <div class="layers">
                              <div class="layer w-100 p-20">
                                 <h6 class="lh-1">Khách hàng comment</h6>
                              </div>
                              <div class="layer w-100">
<!--                                 <div class="bgc-light-blue-500 c-white p-20">
                                    <div class="peers ai-c jc-sb gap-40">
                                       <div class="peer peer-greed">
                                          <h5><?php echo date("m/Y") ?></h5>
                                          <p class="mB-0">Lợi nhuận thuần</p>
                                       </div>
                                       <div class="peer">
                                          <h3 class="text-right"><?php echo number_format($this->saletotal) ?></h3>
                                       </div>
                                    </div>
                                 </div>
-->                                 <div class="table-responsive p-20">
                                    <table class="table">
                                       <thead>
                                          <tr>
                                             <th class="bdwT-0">Ngày giờ</th>
                                             <th class="bdwT-0">Địa chỉ IP</th>
                                             <th class="bdwT-0">Bài viết</th>
                                             <th class="bdwT-0">Nội dung</th>
                                          </tr>
                                       </thead>
                                       <tbody>
						<?php
							foreach ($this->sale as $item) {
								$loinhuan=$item['so_tien']-$item['gia_von'];
								echo '<tr>
											 <td>'.$item['ngay'].'</td>
                                             <td>'.$item['name'].'</td>
                                             <td align="right">'.number_format($item['so_tien']).'</td>
                                             <td align="right">'.number_format($item['gia_von']).'</td>
                                  	</tr>';
							}
						?>

                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                           <div class="ta-c bdT w-100 p-20"><a href="#">Check all the sales</a></div>
                        </div>
                     </div>
                     <div class="masonry-item col-md-6">
                        <div class="bd bgc-white">
                           <div class="layers">
                              <div class="layer w-100 p-20">
                                 <h6 class="lh-1">Liên hệ hỗ trợ</h6>
                              </div>
                              <div class="layer w-100">
                                 <!--<div class="bgc-grey-200 p-20 gapY-15">
                                    <div class="peers fxw-nw">
                                       <div class="peer mR-20"><img class="w-2r bdrs-50p" src="template/user.jpg" alt=""></div>
                                       <div class="peer peer-greed">
                                          <div class="layers ai-fs gapY-5">
                                             <div class="layer">
                                                <div class="peers fxw-nw ai-c pY-3 pX-10 bgc-white bdrs-2 lh-3/2">
                                                   <div class="peer mR-10"><small>10:00 AM</small></div>
                                                   <div class="peer-greed"><span>Lorem Ipsum is simply dummy text of</span></div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="peers fxw-nw ai-fe">
                                       <div class="peer ord-1 mL-20"><img class="w-2r bdrs-50p" src="template/user.jpg" alt=""></div>
                                       <div class="peer peer-greed ord-0">
                                          <div class="layers ai-fe gapY-10">
                                             <div class="layer">
                                                <div class="peers fxw-nw ai-c pY-3 pX-10 bgc-white bdrs-2 lh-3/2">
                                                   <div class="peer mL-10 ord-1"><small>10:00 AM</small></div>
                                                   <div class="peer-greed ord-0"><span>Heloo</span></div>
                                                </div>
                                             </div>
                                             <div class="layer">
                                                <div class="peers fxw-nw ai-c pY-3 pX-10 bgc-white bdrs-2 lh-3/2">
                                                   <div class="peer mL-10 ord-1"><small>10:00 AM</small></div>
                                                   <div class="peer-greed ord-0"><span>??</span></div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>-->
                                 <div class="p-20 bdT bgc-white">
                                    <div class="pos-r"><input type="text" class="form-control bdrs-10em m-0" placeholder="Say something..."> <button type="button" class="btn btn-primary bdrs-50p w-2r p-0 h-2r pos-a r-1 t-1"><i class="fa fa-paper-plane-o"></i></button></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
</div>
