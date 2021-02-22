<!-- :: ksg_5 = ksg_20210113_1650 -->
<!-- :: ksg_4 = ksg_20210112_2039 -->
<!-- :: ksg_3 = ksg_20210112_1604 -->
<!-- :: ksg_2 = ksg_20210109_1554 -->
<!-- :: ksg_1 = ksg_20210108_1930 -->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/pages/head.php';
    $tCode					=	'0100';
	$lCode					=	'0101';
?>
<body>
<div class="container">
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/common/pages/header.php'; ?>
    <!-- :: open : ksg_1 : [진맛] 좌측메뉴 파트. -->
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/standSet/pages/standSet_left.php'; ?>
	<!-- :: close : ksg_1 : [진맛] 좌측메뉴 파트. -->
	<div class="wrapper">
		<div class="contents">
			<!-- :: single : ksg_4 : [진맛] 원자재 검색 파트 있던 곳. -->
            <!-- :: close : ksg_2 : [진맛] 입력창 / 검색버튼 / 추가버튼이 포함된 검색어 파트. -->
			<div class="section horizontalManageSort searcManageSort AsymDoub5">
				<div class="titleBox manageHeadlineSort">생산품 품목</div>
				<div class="conGroup verticalManageSort bottomRowSort">
					<div class="headLineBox listControlSort">
						<table class="searchGroup inTblSort">
							<colgroup>
								<col style="width : 30%;">
								<col style="width : 70%;">
							</colgroup>
							<tbody>
								<tr> 
									<th>검색어</th>
									<td>
										<select class="sbox">
											<option>전체</option>
											<option>생상품명</option>
											<option>생상품코드</option>  
										</select>
										<input class="tbox searchInput topLineSearchMod" name="dd" type="text" placeholder="검색어를 입력해주세요.">
									</td>
								</tr>
							</tbody>
						</table>
                    	<div class="btnGroup verticalBottomSort inTblSort">
                    	    <a href="javascript:void(0);" class="btn singleSearchMod">검색</a>
                    	</div>
						<!-- :: close : ksg_4 : [진맛] 테이블 내의 검색어 파트. -->
						<div class="titleBox inlistConSort">
							<div class="titleText">생산품 품목</div>
							<a href="javascript:void(0);" class="btn headRightAbMod addProductBtn">생산품 추가</a>
							<!-- :: single : ksg_4 : [진맛] 등록 페이지로 이동하는 버튼 있던 곳. -->
						</div>
						<div class="sboxGroup listArraySort">
							<a href="javascript:void(0);" class="btn listTopSort addStaffBtn">엑셀저장</a>
                            <a href="javascript:void(0);" class="btn listTopSort addStaffBtn">인쇄</a>
							<select class="sbox">  
								<option>생산품코드▼</option>  
								<option>생산품코드▲</option>
								<option>등록순▼</option>
								<option>등록순▲</option>
							</select>
							<select class="sbox">
								<option>40개씩</option>
								<option>80개씩</option>
								<option>100개씩</option>
							</select>
						</div>
					</div>
					<table class="searchResultTable ">
						<colgroup>
							<col style="width : 30px;">
							<col style="width : 200px;">
							<col style="width : 50px;">
							<col style="width : 70px;">
							<col style="width : 50px;">
						</colgroup>
						<thead>
						<tr>
							<th>
								<div class="checkBoxCase">
									<input type="checkbox" name value>
									<label></label>
								</div> 
							</th> 
							<th>
								생산품명<br>
								(생산품코드)
							</th>
							<th>이미지</th>
							<th>사용여부</th>
							<th>관리</th>
						</tr>
						</thead>
						<tbody>
						<!-- :: open : ksg_4 : [진맛] 테이블에 등록하는 파트. -->
						<tr class="reged">
							<td>
								<div class="checkBoxCase">
									<input type="checkbox" name value>
									<label></label>
								</div>
							</td>
							<td>
								<div>
									<input class="tbox regFullSort listMod" placeholder="생산품명" value="수박">
								</div>
								<div class="mt2">
									<input class="tbox regFullSort listMod" value="24555111" readonly>
								</div>
							</td>
							<td>
								<div class="imgBgCase">
									<img src="/common/img/icon_status_topaz.png" class="img inTblSmSort">
								</div>
							</td>
							<td>
								<!-- :: open : ksg_4 : [진맛] 사용/미사용 드롭박스 내용. -->
								<select class="sbox regFullSort">
									<option>사용</option>
									<option>미사용</option>
								</select>
								<!-- :: close : ksg_4 : [진맛] 사용/미사용 드롭박스 내용. -->
							</td>
							<td>
								<div class="btnGroup inListTable">
									<a href="javascript:void(0);" class="btn modifySort">저장</a>
								</div>
							</td>
						</tr>
						<tr class="reged">
							<td>
								<div class="checkBoxCase">
									<input type="checkbox" name value>
									<label></label>
								</div>
							</td> 
							<td>
								<div>
									<input class="tbox regFullSort listMod" placeholder="생산품명" value="사과">
								</div>
								<div class="mt2">
									<input class="tbox regFullSort listMod"  value="31224455" readonly>
								</div>
							</td>
							<td>
								<div class="imgBgCase">
									<img src="/common/img/icon_status_topaz.png" class="img inTblSmSort">
								</div>
							</td>
							<td>
								<!-- :: open : ksg_4 : [진맛] 사용/미사용 드롭박스 내용. -->
								<select class="sbox regFullSort">
									<option>사용</option>
									<option>미사용</option>
								</select>
								<!-- :: close : ksg_4 : [진맛] 사용/미사용 드롭박스 내용. -->
								<!-- :: single : ksg_4 : [진맛] 라디오 버전의 사용/미사용 있던 곳. -->
							</td>
							<td>
								<div class="btnGroup inListTable">
									<a href="javascript:void(0);" class="btn modifySort">저장</a>
								</div>
							</td>
						</tr>
						<tr class="reged">
							<td>
								<div class="checkBoxCase">
									<input type="checkbox" name value>
									<label></label>
								</div>
							</td> 
							<td> 
								<div>
									<input class="tbox regFullSort listMod" placeholder="생산품명" value="사과">
								</div>
								<div class="mt2">
									<input class="tbox regFullSort listMod" value="31224455" readonly>
									<div class="tipBoxwarning mt10">  
									동일한 코드가 존재합니다.
									</div> 
								</div>
							</td>
							<td>
								<div class="imgBgCase">
									<img src="/common/img/icon_status_topaz.png" class="img inTblSmSort">
								</div>
							</td>
							<td>
								<!-- :: open : ksg_4 : [진맛] 사용/미사용 드롭박스 내용. -->
								<select class="sbox regFullSort">
									<option>사용</option>
									<option>미사용</option>
								</select>
								<!-- :: close : ksg_4 : [진맛] 사용/미사용 드롭박스 내용. -->
								<!-- :: single : ksg_4 : [진맛] 라디오 버전의 사용/미사용 있던 곳. -->
							</td>
							<td>
								<div class="btnGroup inListTable">
									<a href="javascript:void(0);" class="btn modifySort">저장</a>
								</div>
							</td>
						</tr>
						</tbody>
					</table>
				</div>
				<div class="page_group underSort">
					<ul class="page_box">
						<li class="prev arrow">
							<a href="javascript:void(0);"></a>
						</li>
						<li class="pageNum on">
							<a href="javascript:void(0);">1</a>
						</li>
						<li class="pageNum">
							<a href="javascript:void(0);">2</a>
						</li>
						<li class="next arrow">
							<a href="javascript:void(0); "></a>
						</li>
					</ul>
				</div>
            </div>
            <!-- :: open : ksg_2 : [진맛] 우측 테이블 구조. --> 
			<div class="section horizontalManageSort AsymDoub6">
                <div class="titleBox manageHeadlineSort">상세정보</div>



				<!-- :: open : ksg_5 : [진맛] 생산품의 상세정보 파트. 입력창 형식. -->
				<div class="specRegGroup hide">
					<div class="conGroup verticalManageSort">
						<div class="headLineBox listControlSort">
							<div class="titleBox inlistConSort">
								<div class="titleText">생산품 정보</div>
							</div>
						</div>
						<table class="infoGroup">
							<colgroup>
								<col width="100">
								<col width="*">
							</colgroup>
							<tbody>
							<tr>
								<th>생산품명</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
								<td rowspan="6">
									<div class="imgUploadBox">
										<input type="file" class="hide" accept="image/*" name="img_1" onchange="img_sel(this, event)">
										<a href="javascript:void(0);" class="upload_btn" onclick="img_upload(this);"></a>
									</div>
								</td>
				
							</tr>   
							<tr>
								<th>생산품 코드</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
							</tr>
							<tr>
								<th>규격</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
							</tr>
							<tr>
								<th>인건비</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
							</tr>

							<tr>
								<th>생산단가</th>
								<td>  
									<input class="tbox regFullSort" value="">
								</td>
							</tr>
							<tr>
								<th>출고단가</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
							</tr>
							<tr>
								<th>사용여부</th>
								<td>
								<select class="sbox regFullSort">
									<option>사용</option>
									<option>미사용</option>
								</select>
								</td>
							</tr>
							<tr>
								<th>비고</th>
								<td colspan="2">
									<input class="tbox regFullSort" value="">
								</td>
							</tr> 
							</tbody>
						</table>
					</div>
                </div>
				<!-- :: close : ksg_5 : [진맛] 생산품의 상세정보 파트. 입력창 형식. -->

				<!-- :: open : ksg_5 : [진맛] 생산품에 필요한 원자재 목록 파트. -->
				<div class="specInfoGroup hide">
					<div class="conGroup verticalManageSort">
						<div class="headLineBox listControlSort">
							<!-- :: close : ksg_5 : [진맛] 테이블 내의 "검색" 버튼 파트. 위와 마찬가지로 생산물 리스트에서는 사용하지 않을 것이므로 display : none 처리. -->
							<div class="titleBox inlistConSort">
								<div class="titleText">사용 원자재 목록
									<a href="javascript:void(0);" class="btn headRightAbMod wearingPopBtn">불러오기</a>
								</div>
							</div> 
						</div>
						<table class="infoGroup txtCSort">
<<<<<<< HEAD
						<colgroup> 
							<col style="width : 150px;">  
							<col style="width : 70px;">
							<col style="width : 70px;">  
							<col style="width : 60px;">
=======
						<colgroup>
							<col style="width : 100px;">
							<col style="width : 70px;">
							<col style="width : 70px;">
							<col style="width : 70px;">
>>>>>>> 22f23cdacbac5707c1b7f13308289a607cb2f0aa
							<col style="width : 70px;">  
							<col style="width : 70px;">
							<col style="width : 100px;">
							<col style="width : 40px;">
						</colgroup>
						<thead>
						<tr>
							<th>
								<div>원자재명</div>
								<div>(원자재코드)</div>
							</th>
<<<<<<< HEAD
							<th>생산지형태</th>
							<th> 
								<div>생산양</div>
								<div class="mt10">주기</div>
							</th> 
							<th> 
=======
							<th>납품처(코드)</th>
							<th>4차</th>
							<th> 
>>>>>>> 22f23cdacbac5707c1b7f13308289a607cb2f0aa
								<div>규격</div>
								<div class="mt10">기준Kg</div>
							</th> 
							<th> 
								<div>입고단가</div>
								<div class="mt10">출고단가</div>
							</th>
<<<<<<< HEAD
							<th>사용 양(Kg)</th> 
=======
							<th>사용 양</th> 
>>>>>>> 22f23cdacbac5707c1b7f13308289a607cb2f0aa
							<th>비고</th> 
							<th>관리</th> 
						</tr>
						</thead>
						<tbody>
						<tr>
							<td>
								<div>
									<input class="tbox regFullSort listMod" placeholder="원자재명" readonly value="사과-부사-01-01">
								</div>
								<div class="mt2">
									<input class="tbox regFullSort listMod" placeholder="원자재코드" readonly value="AP-01-01-01">
								</div>
							</td>
							<td>
<<<<<<< HEAD
								<input class="tbox regFullSort listMod"  value="노지" readonly> 
							</td>
							<td>
								<div> 
									<input class="tbox regFullSort listMod"  value="3t" readonly>
								</div>
								<div class="mt2">
									<input class="tbox regFullSort listMod" value="매월" readonly>
=======
								<input class="tbox regFullSort listMod" placeholder="납품처명(코드)" readonly value="강원농장(12)">
							</td>
							<td>
								<div>
									<input class="tbox regFullSort listMod"  value="경주" readonly>
								</div>
								<div class="mt2">
									<input class="tbox regFullSort listMod" value="김명장" readonly>
>>>>>>> 22f23cdacbac5707c1b7f13308289a607cb2f0aa
								</div> 
							</td>  
							<td>
								<div>
									<input class="tbox regFullSort listMod" placeholder="규격" value="대" readonly>
								</div>
								<div class="mt2">
									<input class="tbox regFullSort listMod" placeholder="기준Kg" value="3" readonly>
								</div> 
							</td> 
							<td>
								<div>
									<input class="tbox regFullSort listMod priceMod"  value="">
									<span class="priceWord">원</span> 
								</div> 
								<div class="mt10"> 
									<input class="tbox regFullSort listMod priceMod" value=""> 
									<span class="priceWord">원</span> 
								</div>
							</td>  
							<td>
								<input class="tbox regFullSort listMod" placeholder="사용 양" value="2">
							</td>
							<td> 
								<input class="tbox regFullSort listMod" placeholder="비고" value="수박 품종 1 부민">
							</td>
							<td>
								<div class="btnGroup inListTable">
									<a href="javascript:void(0);" class="btn modifySort">취소</a> 
								</div>
							</td>	   
						</tr>
						</tbody>
						</table>  
					</div>
					<div class="headLineBox pageControlSort center">
						<a href="javascript:void(0);" class="btn listTopSort addStaffBtn ">저장</a>   
					</div>
					<!-- :: single : ksg_4 : [진맛] 우측 하단의 창고별 재고 확인 테이블 내용 있던 곳. -->
				</div>
				<!-- :: close : ksg_5 : [진맛] 생산품에 필요한 원자재 목록 파트. -->
            </div>
            <!-- :: close : ksg_2 : [진맛] 우측 테이블 구조. -->
		</div>
	</div>
</div>

<!-- :: open : ksg_3 : [진맛] 입고내역 상세내용/등록 팝업. -->
<div class="popup centerSort innerFlowSort wearingPop">
	<div class="popupCon fullwideSort">  
		<a href="javascript:closePop()">  
			<img src="/common/img/close.png" class="close">
		</a>
		<div class="titleBox popupSort">
			원자재 관리 
		</div>
		<div class="conGroup verticalManageSort">
			<table class="infoGroup fullHSort">
				<tbody>
                <!-- :: open : ksg_3 : [진맛] 입력팝업에서는 사용하지 않는 발주/입고번호 내용. display : none 처리. -->
                <tr style="display : none;">
					<th>발주번호</th>
					<td>
						<input class="tbox regFullSort" value="">
					</td>
				</tr>
				<tr style="display : none;">
					<th>입고번호</th>
					<td>
						<input class="tbox regFullSort" value="">
					</td>
                </tr>
                <!-- :: close : ksg_3 : [진맛] 입력팝업에서는 사용하지 않는 발주/입고번호 내용. display : none 처리. -->
                <tr>
					<td>
                        <!-- :: open : ksg_3 : [진맛] 테이블 내에서 품목을 등록하는 병렬 내용 파트.. -->
                        <!-- :: open : ksg_3 : [진맛] 왼쪽 품목 검색 파트. -->
                        <div class="inTblBoxGroup twinSort highHeight wearingGoodsMod"> 
                            <!-- :: open : ksg_3 : [진맛] 품목을 검색하고 등록하는 파트. -->
                            <div class="inTblSchGroup">
                                <select class="sbox">
						    		<option>원자재명</option>
						    		<option>원자재코드</option> 
						    	</select>
                                <input class="tbox searchInput inTblSort" placeholder="검색어를 입력해주세요.">
                                <div class="btnGroup inTableSearch">
					        		<a href="javascript:void(0);" class="btn searchSort">검색</a>
					        	</div>
                            </div>
                            <!-- :: close : ksg_3 : [진맛] 품목을 검색하고 등록하는 파트. -->
                            <!-- :: open : ksg_3 : [진맛] 검색 결과로 표시되는 내부 테이블 형식의 품목 목록 파트. -->
							<table class="infoGroup txtCSort">   
							<colgroup>   
								<col style="width : 100px;">
								<col style="width : 50px;">
								<col style="width : 50px;">
								<col style="width : 40px;"> 
								<col style="width : 50px;">
								<col style="width : 20px;">      
							</colgroup>		 		 			
								<thead>  
<<<<<<< HEAD
									<tr>
										<th>
											<div>원자재명</div>
											<div>(원자재코드)</div>
										</th>
										<th>생산지형태</th>
										<th>
											<div>생산양</div> 
											<div class="mt10">주기</div>
										</th>
										<th> 
											<div>규격</div>
											<div class="mt10">기준Kg</div>
										</th> 
										<th>  
											<div>입고단가</div>
											<div class="mt10">출고단가</div>
										</th>
										<th>관리</th> 
									</tr> 
								</thead> 
								<tbody>  
									<tr>
										<td> 
=======
								<tr>
									<th>
										<div>원자재명</div>
										<div>(원자재코드)</div>
									</th>
									<th>납품처(코드)</th>
									<th>4차</th>
									<th> 
										<div>규격</div>
										<div class="mt10">기준Kg</div>
									</th> 
									<th> 
										<div>입고단가</div>
										<div class="mt10">출고단가</div>
									</th>
									<th>관리</th> 
								</tr>
								</thead> 
								<tbody>  
								<tr>
									<td>
>>>>>>> 22f23cdacbac5707c1b7f13308289a607cb2f0aa
										<div>
											<input class="tbox regFullSort listMod"  value="경주꿀사과" readonly>
										</div>
										<div>
											<input class="tbox regFullSort listMod"  value="ap1234" readonly>
										</div>
										</td>    
<<<<<<< HEAD
										<td>
											<div>
												<input class="tbox regFullSort listMod" value="노지" readonly>
											</div>
										</td> 
										<td>
											<div>
												<input class="tbox regFullSort listMod"  value="3t" readonly>
											</div>
											<div class="mt2">
												<input class="tbox regFullSort listMod" value="매월" readonly>
											</div> 
										</td>
										<td>
											<div>
												<input class="tbox regFullSort listMod"  value="대" readonly>
											</div>
											<div class="mt2">
												<input class="tbox regFullSort listMod" value="15" readonly> 
											</div> 
										</td> 
										<td>
											<div> 
												<input class="tbox regFullSort listMod"  value="1,500" readonly>
											</div>
											<div class="mt10"> 
												<input class="tbox regFullSort listMod" value="2,500" readonly>
											</div>  
										</td>  
										<td> 
											<div class="btnGroup inListTable">
												<a href="javascript:void(0);" class="btn regSort">등록</a> 
											</div> 
										</td>		 
									</tr>
=======
									<td>
										<div>
											<input class="tbox regFullSort listMod" value="강원농장(12)" readonly>
										</div>
									</td> 
									<td>
										<div>
											<input class="tbox regFullSort listMod"  value="경주" readonly>
										</div>
										<div class="mt2">
											<input class="tbox regFullSort listMod" value="김명장" readonly>
										</div> 
									</td>
									<td>
										<div>
											<input class="tbox regFullSort listMod"  value="대" readonly>
										</div>
										<div class="mt2">
											<input class="tbox regFullSort listMod" value="15" readonly> 
										</div> 
									</td> 
									<td>
										<div> 
											<input class="tbox regFullSort listMod"  value="1,500" readonly>
										</div>
										<div class="mt10"> 
											<input class="tbox regFullSort listMod" value="2,500" readonly>
										</div>  
									</td>  
									<td>
										<div class="btnGroup inListTable">
											<a href="javascript:void(0);" class="btn regSort">등록</a> 
										</div> 
									</td>		 
								</tr>
>>>>>>> 22f23cdacbac5707c1b7f13308289a607cb2f0aa
								</tbody>
							</table> 
                            <!-- :: close : ksg_3 : [진맛] 검색 결과로 표시되는 내부 테이블 형식의 품목 목록 파트. -->
                            <!-- :: open : ksg_3 : [진맛] 검색 결과에 대한 내부 페이징 파트. -->
                            <div class="page_group underSort">
					        	<ul class="page_box">
					        		<li class="prev arrow">
					        			<a href="javascript:void(0);"></a>
					        		</li>
					        		<li class="pageNum on">
					        			<a href="javascript:void(0);">1</a>
					        		</li>
					        		<li class="pageNum">
					        			<a href="javascript:void(0);">2</a>
					        		</li>
					        		<li class="next arrow">
					        			<a href="javascript:void(0); "></a>
					        		</li>
					        	</ul>
					        </div>
                            <!-- :: close : ksg_3 : [진맛] 검색 결과에 대한 내부 페이징 파트. -->
                        </div>
                        <!-- :: close : ksg_3 : [진맛] 왼쪽 품목 검색 파트. -->
                        <!-- :: open : ksg_3 : [진맛] 우측 선택된 품목 파트. -->
                        <div class="inTblBoxGroup twinSort highHeight scrollSort wearingGoodsMod">    
							<!-- :: open : ksg_3 : [진맛] 검색 결과로 표시되는 내부 테이블 형식의 품목 목록 파트. -->
							<div class="titleBox inlistConSort">
								<div class="titleText mt10"> 사용 원자재 목록</div>
							</div>     
							<div class="limitHeightTblCase">
								<table class="infoGroup txtCSort">    
									<colgroup>   
										<col style="width : 100px;">
<<<<<<< HEAD
										<col style="width : 50px;">
=======
>>>>>>> 22f23cdacbac5707c1b7f13308289a607cb2f0aa
										<col style="width : 50px;">
										<col style="width : 40px;"> 
										<col style="width : 50px;">
<<<<<<< HEAD
=======
										<col style="width : 40px;"> 
										<col style="width : 50px;">
>>>>>>> 22f23cdacbac5707c1b7f13308289a607cb2f0aa
										<col style="width : 20px;">      
									</colgroup>		 					
									<thead>
									<tr>
										<th>
											<div>원자재명</div>
											<div>(원자재코드)</div>
										</th>
<<<<<<< HEAD
										<th>생산지형태</th>
										<th>
											<div>생산양</div> 
											<div class="mt10">주기</div>
										</th>
=======
										<th>납품처(코드)</th>
										<th>4차</th>
>>>>>>> 22f23cdacbac5707c1b7f13308289a607cb2f0aa
										<th> 
											<div>규격</div>
											<div class="mt10">기준Kg</div>
										</th> 
<<<<<<< HEAD
										<th>  
=======
										<th> 
>>>>>>> 22f23cdacbac5707c1b7f13308289a607cb2f0aa
											<div>입고단가</div>
											<div class="mt10">출고단가</div>
										</th>
										<th>관리</th> 
									</tr>
									</thead>
									<tbody style="text-align: center;">  
										<tr>
											<td> 
											<div>
												<input class="tbox regFullSort listMod"  value="경주꿀사과" readonly>
											</div>
											<div>
												<input class="tbox regFullSort listMod"  value="ap1234" readonly>
											</div>
											</td>    
											<td>
												<div>
													<input class="tbox regFullSort listMod" value="노지" readonly>
												</div>
											</td> 
											<td>
<<<<<<< HEAD
												<div>
													<input class="tbox regFullSort listMod"  value="3t" readonly>
												</div>
												<div class="mt2">
													<input class="tbox regFullSort listMod" value="매월" readonly>
=======
											<div>
												<input class="tbox regFullSort listMod"  value="경주꿀사과" readonly>
											</div>
											<div>
												<input class="tbox regFullSort listMod"  value="ap1234" readonly>
											</div>
											</td>    
											<td>
												<div>
													<input class="tbox regFullSort listMod" value="강원농장(12)" readonly>
												</div>
											</td> 
											<td>
												<div>
													<input class="tbox regFullSort listMod"  value="경주" readonly>
												</div>
												<div class="mt2">
													<input class="tbox regFullSort listMod" value="김명장" readonly>
>>>>>>> 22f23cdacbac5707c1b7f13308289a607cb2f0aa
												</div> 
											</td>
											<td>
												<div>
													<input class="tbox regFullSort listMod"  value="대" readonly>
												</div>
												<div class="mt2">
													<input class="tbox regFullSort listMod" value="15" readonly> 
												</div> 
											</td> 
											<td>
												<div> 
													<input class="tbox regFullSort listMod"  value="1,500" readonly>
												</div>
												<div class="mt10"> 
													<input class="tbox regFullSort listMod" value="2,500" readonly>
												</div>  
											</td> 
											<td>
												<div class="btnGroup inListTable">
													<a href="javascript:void(0);" class="btn modifySort">취소</a> 
												</div> 
											</td>		 
										</tr>
									</tbody>
								</table> 
							</div>
                            <!-- :: close : ksg_3 : [진맛] 검색 결과로 표시되는 내부 테이블 형식의 품목 목록 파트. -->
							<div class="headLineBox pageControlSort center">
								<a href="javascript:void(0);" class="btn listTopSort addStaffBtn ">저장</a>   
							</div> 
                        </div>
                        <!-- :: close : ksg_3 : [진맛] 우측 선택된 품목 파트. -->
                        <!-- :: close : ksg_3 : [진맛] 테이블 내에서 품목을 등록하는 병렬 내용 파트.. -->
					</td>
                </tr>
				</tbody>
			</table>
		</div> 
	</div>  
</div>  
<!-- :: close : ksg_3 : [진맛] 입고내역 상세내용/등록 팝업. -->





<script src="/common/js/exif-js.js"></script>  
<script src="/common/js/imgSet.js"></script>
<script src="/common/js/datePick.js"></script>
<script>
// :: open : ksg_2 : [진맛] 원자재 목록을 클릭 시, 우측의 테이블 내용과 하단 버튼이 나타나도록 하는 내용. "등록" 파트를 눌러도 우측 내용이 나오는 문제가 있어, 이것은 사용을 중단함.
// $(document).on('click', '.conGroup.verticalManageSort .searchResultTable td', function(){
//     $('.specInfoGroup.hide').removeClass('hide');
//     $('.specInfoGroup').next('.btnGroup.horizontalBottomSort').removeClass('hide');
// 	$('.specRegGroup').addClass('hide');
// 	$(this).parent().siblings('tr').removeClass('activated');
// 	$(this).parent('tr').addClass('activated');
// });
// :: close : ksg_2 : [진맛] 원자재 목록을 클릭 시, 우측의 테이블 내용과 하단 버튼이 나타나도록 하는 내용. "등록" 파트를 눌러도 우측 내용이 나오는 문제가 있어, 이것은 사용을 중단함.
// :: open : ksg_4 : [진맛] 원자재 목록 중, 등록된 테이블 라인(class="reged")가 있는 곳만, 클릭했을 때 우측 상세정보가 표시되도록 하는 스크립트.
$(document).on('click', '.conGroup.verticalManageSort .searchResultTable tr.reged', function(){
    $('.specInfoGroup.hide').removeClass('hide');
	$('.specRegGroup').removeClass('hide');
    $('.specInfoGroup').next('.btnGroup.horizontalBottomSort').removeClass('hide');
	$(this).siblings('tr').removeClass('activated');
	$(this).addClass('activated');
});
// :: close : ksg_4 : [진맛] 원자재 목록 중, 등록된 테이블 라인(class="reged")가 있는 곳만, 클릭했을 때 우측 상세정보가 표시되도록 하는 스크립트.

$(document).on('click', '.btn.wearingPopBtn', function(){
	$('.popup.centerSort.wearingPop').show();
	$('.contents').addClass('overlay'); 
});
// :: open : ksg_6 : [진맛] "생산품 추가" 버튼을 클릭했을 때 우측 상세정보가 표시되도록 하는 스크립트.
$(document).on('click', '.btn.headRightAbMod.addProductBtn', function(){  
    $('.specInfoGroup.hide').removeClass('hide');  
	$('.specRegGroup').removeClass('hide');
    $('.specInfoGroup').next('.btnGroup.horizontalBottomSort').removeClass('hide');
	$(this).siblings('tr').removeClass('activated');
	$(this).addClass('activated');
});
// :: close : ksg_6 : [진맛] "생산품 추가" 버튼을 클릭했을 때 우측 상세정보가 표시되도록 하는 스크립트.

</script>
</body>
</html>