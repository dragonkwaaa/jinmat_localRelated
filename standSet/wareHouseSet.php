<!-- :: ksg_6 = ksg_20210118_1124 -->
<!-- :: ksg_5 = ksg_20210113_1650 -->
<!-- :: ksg_4 = ksg_20210112_2039 -->
<!-- :: ksg_3 = ksg_20210112_1604 -->
<!-- :: ksg_2 = ksg_20210109_1554 -->
<!-- :: ksg_1 = ksg_20210108_1930 -->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/pages/head.php';
    $tCode					=	'100';
	$lCode					=	'0106';
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
			<div class="section horizontalManageSort searcManageSort AsymDoub1">
				<div class="titleBox manageHeadlineSort">창고 목록</div>
				<div class="conGroup verticalManageSort bottomRowSort">
					<div class="headLineBox listControlSort">
						<div class="titleBox inlistConSort">  
							<div class="titleText">창고 목록</div>
                            <a href="javascript:void(0);" class="btn headRightAbMod addWHouseBtn">창고 추가</a>
						</div>
						<div class="sboxGroup listArraySort">
							<a href="javascript:void(0);" class="btn listTopSort addStaffBtn">엑셀저장</a>
                            <a href="javascript:void(0);" class="btn listTopSort addStaffBtn">인쇄</a>
							<select class="sbox"> 
								<option>창고코드▼</option>
								<option>창고코드▲</option>
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
							<col style="width : 150px;">
							<col style="width : 220px;"> 
							<col style="width : 100px;">
							<col style="width : 80px;">
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
								창고명<br>
								(창고 코드)
							</th>
							<th>주소</th>
                            <th>창고연락처</th>
							<th>사용여부</th>
							<th>관리</th>
						</tr>
						</thead>
						<tbody>
						<tr class="reged">
							<td>
								<div class="checkBoxCase">
									<input type="checkbox" name value>
									<label></label>
								</div> 
							</td> 
                            <td>
								<div>
									<input class="tbox regFullSort listMod" placeholder="창고명" value="경남창고1">
								</div>
								<div class="mt2">
									<input class="tbox regFullSort listMod" placeholder="창고 코드" value="W10101044" readonly>
								</div>
							</td>
							<td>
								<input class="tbox regFullSort listMod" placeholder="주소" value="경상남도 진주시 진주읍 진주리">
                            </td>
                            <td>
								<input class="tbox regFullSort listMod" placeholder="창고연락처" value="010-1234-1234">
							</td>
							<td> 
								<!-- :: open : ksg_4 : [진맛] 사용/미사용 드롭박스 내용. -->
								<select class="sbox regFullSort">
									<option>사용</option>
									<option selected="">미사용</option>
								</select>
								<!-- :: close : ksg_4 : [진맛] 사용/미사용 드롭박스 내용. -->
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
			<div class="section horizontalManageSort AsymDoub2">
                <div class="titleBox manageHeadlineSort">상세정보</div>



				<!-- :: open : ksg_5 : [진맛] 생산품의 상세정보 파트. 입력창 형식. -->
				<div class="specRegGroup hide">
					<div class="conGroup verticalManageSort">
						<div class="headLineBox listControlSort">
							<div class="titleBox inlistConSort">
								<div class="titleText">창고 정보</div> 
							</div>
						</div>
						<table class="infoGroup">
							<colgroup>
								<col width="17%">
								<col width="33%">
							</colgroup>
							<tbody>
							<tr>
								<th>창고명</th>
								<td> 
									<input class="tbox regFullSort" value="">
								</td>
								<th>창고 코드</th>
								<td>  
									<input class="tbox regFullSort" value="">
								</td>
							</tr>
                            <tr>
								<th>주소</th>
								<td> 
									<input class="tbox regFullSort" value="">
								</td>
								<th>창고연락처</th>
								<td>  
									<input class="tbox regFullSort" value="">
								</td>
                            </tr>
							<tr>
								<th>근무요일</th>
								<td colspan="4"> 
									<div class="inTableCheckGroup">
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">월</div>
                                        </div>
                                        <div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">화</div>
										</div>
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">수</div>
										</div>
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">목</div>
                                        </div>
                                        <div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">금</div>
										</div>
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">토</div>
										</div>  
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">일</div>
                                        </div>
									</div>
								</td>
							</tr>
							<tr>
								<th>근무시간</th>
								<td colspan="4"> 
								<div class="sboxGroup listArraySortLeft">
									<select class="sbox small">
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
									</select>
									시
									<select class="sbox small">
										<option>1</option>
										<option>2</option>  
										<option>3</option>
										<option>4</option>  
										<option>5</option>  
									</select>  
									분  
								</div>
								<div class="betweenText"> ~ </div> 
								<div class="sboxGroup listArraySortLeft"> 
									<select class="sbox small">
										<option>1</option>
										<option>2</option>  
										<option>3</option>
										<option>4</option>
										<option>5</option>
									</select>
									시
									<select class="sbox small">
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>  
									</select>
									분
								</div>  
								</td>  
							</tr>
							<tr>
								<th>담당자명</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
								<th>담당자연락처</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
							</tr>
							<tr>
								<th>비고</th>
								<td colspan="4">
									<input class="tbox regFullSort" value="">
								</td>
							</tr> 
							</tbody>
						</table>
					</div>
                </div>
				<!-- :: close : ksg_5 : [진맛] 생산품의 상세정보 파트. 입력창 형식. -->



				<!-- :: open : ksg_6 : [진맛] 창고의 특정 위치에 대한 정보를 표시하는 내용 파트.. -->
				<div class="specInfoGroup hide">
					<div class="conGroup verticalManageSort">
						<div class="headLineBox listControlSort">  
							<div class="titleBox inlistConSort">
								<div class="titleText">구역 현황</div>
							</div>
                        </div>
                        <!-- :: open : ksg_6 : [진맛] 특정 위치를 트리 구조로 표시하는 depth 테이블 내용.. -->
                        <div class="cateListGroup">
					    	<!-- :: open : ksg_6 : [진맛] 1차 분류의 개별 항목을 나타내는 최외각 div. -->
					    	<div class="cateCover fstSort fstChd">
					    		<!-- :: open : ksg_6 : [진맛] 1차 분류의 자체 정보 파트(순서변경, 명칭, 사용여부, 삭제/하위분류추가 버튼) -->
					    		<div class="cateInfoCase fstSort">
					    			<!-- :: open : ksg_6 : [진맛] 1차 분류의 순서 변경 파트. -->
					    			<div class="infoBox posChanSort">
					    				<a href="javascript:void(0);" class="increaseIcon toUpSort"></a>
					    				<a href="javascript:void(0);" class="decreaseIcon toDownSort"></a>
					    			</div>
					    			<!-- :: close : ksg_6 : [진맛] 1차 분류의 순서 변경 파트. -->
					    			<!-- :: open : ksg_6 : [진맛] 1차 분류의 분류명 파트. -->
					    			<div class="infoBox NameSort">
					    				<input class="tbox regFullSort listMod" placeholder="" value="3동">
					    			</div>
					    			<!-- :: close : ksg_6 : [진맛] 1차 분류의 분류명 파트. -->
					    			<!-- :: open : ksg_6 : [진맛] 1차 분류의 사용여부 파트. -->
					    			<div class="infoBox useChkSort">
					    				<div class="inTableRadioGroup">
					    					<div class="radioCase">
					    						<div class="radioIconBox">
					    							<input type="radio" name="cate_1a" value="1" checked="">
					    							<label></label>
					    						</div>
					    						<div class="radioTitle">사용</div>
					    					</div>
					    					<div class="radioCase">
					    						<div class="radioIconBox">
					    							<input type="radio" name="cate_1a" value="2">
					    							<label></label>
					    						</div>
					    						<div class="radioTitle">미사용</div>
					    					</div>
					    				</div>
					    			</div>
					    			<!-- :: close : ksg_6 : [진맛] 1차 분류의 사용여부 파트. -->
					    			<!-- :: open : ksg_6 : [진맛] 1차 분류의 관리 파트. -->
					    			<div class="infoBox controlSort">
					    				<div class="btnGroup inListTable">
					    					<a href="javascript:void(0);" class="btn modifySort">하위 분류</a>
					    					<a href="javascript:void(0);" class="btn delSort">삭제</a>
					    				</div>
					    			</div>
					    			<!-- :: close : ksg_6 : [진맛] 1차 분류의 관리 파트. -->
					    		</div>
					    		<!-- :: close : ksg_6 : [진맛] 1차 분류의 자체 정보 파트(순서변경, 명칭, 사용여부, 삭제/하위분류추가 버튼) -->
					    		<!-- :: open : ksg_6 : [진맛] 개별 1차 분류의 자식(2차 분류) 그룹. -->
					    		<div class="innerCateList sndSort hide">
					    			<!-- :: open : ksg_6 : [진맛] 2차 분류의 개별 항목을 나타내는 최외각 div. -->
					    			<div class="cateCover sndSort fstChd">
					    				<!-- :: open : ksg_6 : [진맛] 2차 분류의 자체 정보 파트(순서변경, 명칭, 사용여부, 삭제/하위분류추가 버튼) -->
					    				<div class="cateInfoCase sndSort">
					    					<!-- :: open : ksg_6 : [진맛] 2차 분류의 순서 변경 파트. -->
					    					<div class="infoBox posChanSort">
					    						<a href="javascript:void(0);" class="increaseIcon toUpSort"></a>
					    						<a href="javascript:void(0);" class="decreaseIcon toDownSort"></a>
					    					</div>
					    					<!-- :: close : ksg_6 : [진맛] 2차 분류의 순서 변경 파트. -->
					    					<!-- :: open : ksg_6 : [진맛] 2차 분류의 분류명 파트. -->
					    					<div class="infoBox NameSort">
					    						<input class="tbox regFullSort listMod" placeholder="" value="1층">
					    					</div>
					    					<!-- :: close : ksg_6 : [진맛] 2차 분류의 분류명 파트. -->
					    					<!-- :: open : ksg_6 : [진맛] 2차 분류의 사용여부 파트. -->
					    					<div class="infoBox useChkSort">
					    						<div class="inTableRadioGroup">
					    							<div class="radioCase">
					    								<div class="radioIconBox">
					    									<input type="radio" name="cate_2a" value="1">
					    									<label></label>
					    								</div>
					    								<div class="radioTitle">사용</div>
					    							</div>
					    							<div class="radioCase">
					    								<div class="radioIconBox">
					    									<input type="radio" name="cate_2a" value="2" checked="">
					    									<label></label>
					    								</div>
					    								<div class="radioTitle">미사용</div>
					    							</div>
					    						</div>
					    					</div>
					    					<!-- :: close : ksg_6 : [진맛] 2차 분류의 사용여부 파트. -->
					    					<!-- :: open : ksg_6 : [진맛] 2차 분류의 관리 파트. -->
					    					<div class="infoBox controlSort">
					    						<div class="btnGroup inListTable">
					    							<a href="javascript:void(0);" class="btn modifySort">하위 분류</a>
					    							<a href="javascript:void(0);" class="btn delSort">삭제</a>
					    						</div>
					    					</div>
					    					<!-- :: close : ksg_6 : [진맛] 2차 분류의 관리 파트. -->
					    				</div>
					    				<!-- :: close : ksg_6 : [진맛] 2차 분류의 자체 정보 파트(순서변경, 명칭, 사용여부, 삭제/하위분류추가 버튼) -->
					    				<!-- :: open : ksg_6 : [진맛] 개별 2차 분류의 자식(3차 분류) 그룹. -->
					    				<div class="innerCateList thrdSort hide">
					    					<!-- :: open : ksg_6 : [진맛] 3차 분류의 개별 항목을 나타내는 최외각 div. -->
					    					<div class="cateCover thrdSort fstChd">
					    						<!-- :: open : ksg_6 : [진맛] 3차 분류의 자체 정보 파트(순서변경, 명칭, 사용여부, 삭제/하위분류추가 버튼) -->
					    						<div class="cateInfoCase thrdSort">
					    							<!-- :: open : ksg_6 : [진맛] 3차 분류의 순서 변경 파트. -->
					    							<div class="infoBox posChanSort">
					    								<a href="javascript:void(0);" class="increaseIcon toUpSort"></a>
					    								<a href="javascript:void(0);" class="decreaseIcon toDownSort"></a>
					    							</div>
					    							<!-- :: close : ksg_6 : [진맛] 3차 분류의 순서 변경 파트. -->
					    							<!-- :: open : ksg_6 : [진맛] 3차 분류의 분류명 파트. -->
					    							<div class="infoBox NameSort">
					    								<input class="tbox regFullSort listMod" placeholder="" value="12열">
					    							</div>
					    							<!-- :: close : ksg_6 : [진맛] 3차 분류의 분류명 파트. -->
					    							<!-- :: open : ksg_6 : [진맛] 3차 분류의 사용여부 파트. -->
					    							<div class="infoBox useChkSort">
					    								<div class="inTableRadioGroup">
					    									<div class="radioCase">
					    										<div class="radioIconBox">
					    											<input type="radio" name="cate_3a" value="1">
					    											<label></label>
					    										</div>
					    										<div class="radioTitle">사용</div>
					    									</div>
					    									<div class="radioCase">
					    										<div class="radioIconBox">
					    											<input type="radio" name="cate_3a" value="2" checked="">
					    											<label></label>
					    										</div>
					    										<div class="radioTitle">미사용</div>
					    									</div>
					    								</div>
					    							</div>
					    							<!-- :: close : ksg_6 : [진맛] 3차 분류의 사용여부 파트. -->
					    							<!-- :: open : ksg_6 : [진맛] 3차 분류의 관리 파트. -->
					    							<div class="infoBox controlSort">
					    								<div class="btnGroup inListTable">
					    									<a href="javascript:void(0);" class="btn modifySort">하위 분류</a>
					    									<a href="javascript:void(0);" class="btn delSort">삭제</a>
					    								</div>
					    							</div>
					    							<!-- :: close : ksg_6 : [진맛] 3차 분류의 관리 파트. -->
					    						</div>
					    						<!-- :: close : ksg_6 : [진맛] 3차 분류의 자체 정보 파트(순서변경, 명칭, 사용여부, 삭제/하위분류추가 버튼) -->
					    						<!-- :: open : ksg_6 : [진맛] 개별 3차 분류의 자식(4차 분류) 그룹. -->
					    						<div class="innerCateList frthSort hide">
					    							<!-- :: open : ksg_6 : [진맛] 4차 분류의 개별 항목을 나타내는 최외각 div. -->
					    							<div class="cateCover frthSort fstChd">
					    								<!-- :: open : ksg_6 : [진맛] 4차 분류의 자체 정보 파트(순서변경, 명칭, 사용여부, 삭제/하위분류추가 버튼) -->
					    								<div class="cateInfoCase frthSort">
					    									<!-- :: open : ksg_6 : [진맛] 4차 분류의 순서 변경 파트. -->
					    									<div class="infoBox posChanSort">
					    										<a href="javascript:void(0);" class="increaseIcon toUpSort"></a>
					    										<a href="javascript:void(0);" class="decreaseIcon toDownSort"></a>
					    									</div>
					    									<!-- :: close : ksg_6 : [진맛] 4차 분류의 순서 변경 파트. -->
					    									<!-- :: open : ksg_6 : [진맛] 4차 분류의 분류명 파트. -->
					    									<div class="infoBox NameSort">
					    										<input class="tbox regFullSort listMod" placeholder="" value="2단">
					    									</div>
					    									<!-- :: close : ksg_6 : [진맛] 4차 분류의 분류명 파트. -->
					    									<!-- :: open : ksg_6 : [진맛] 4차 분류의 사용여부 파트. -->
					    									<div class="infoBox useChkSort">
					    										<div class="inTableRadioGroup">
					    											<div class="radioCase">
					    												<div class="radioIconBox">
					    													<input type="radio" name="cate_4a" value="1">
					    													<label></label>
					    												</div>
					    												<div class="radioTitle">사용</div>
					    											</div>
					    											<div class="radioCase">
					    												<div class="radioIconBox">
					    													<input type="radio" name="cate_4a" value="2" checked="">
					    													<label></label>
					    												</div>
					    												<div class="radioTitle">미사용</div>
					    											</div>
					    										</div>
					    									</div>
					    									<!-- :: close : ksg_6 : [진맛] 4차 분류의 사용여부 파트. -->
					    									<!-- :: open : ksg_6 : [진맛] 4차 분류의 관리 파트. -->
					    									<div class="infoBox controlSort">
					    										<div class="btnGroup inListTable">
                                                                    <a href="javascript:void(0);" class="btn modifySort">하위 분류</a>
					    											<a href="javascript:void(0);" class="btn delSort">삭제</a>
					    										</div>
					    									</div>
					    									<!-- :: close : ksg_6 : [진맛] 4차 분류의 관리 파트. -->
					    								</div>
                                                        <!-- :: close : ksg_6 : [진맛] 4차 분류의 자체 정보 파트(순서변경, 명칭, 사용여부, 삭제/하위분류추가 버튼) -->
                                                        <!-- :: open : ksg_6 : [진맛] 개별 4차 분류의 자식(5차 분류) 그룹. -->
                                                        <div class="innerCateList fifSort hide">
					    						        	<!-- :: open : ksg_6 : [진맛] 5차 분류의 개별 항목을 나타내는 최외각 div. -->
					    						        	<div class="cateCover fifSort fstChd">
					    						        		<!-- :: open : ksg_6 : [진맛] 5차 분류의 자체 정보 파트(순서변경, 명칭, 사용여부, 삭제/하위분류추가 버튼) -->
					    						        		<div class="cateInfoCase fifSort">
					    						        			<!-- :: open : ksg_6 : [진맛] 5차 분류의 순서 변경 파트. -->
					    						        			<div class="infoBox posChanSort">
					    						        				<a href="javascript:void(0);" class="increaseIcon toUpSort"></a>
					    						        				<a href="javascript:void(0);" class="decreaseIcon toDownSort"></a>
					    						        			</div>
					    						        			<!-- :: close : ksg_6 : [진맛] 5차 분류의 순서 변경 파트. -->
					    						        			<!-- :: open : ksg_6 : [진맛] 5차 분류의 분류명 파트. -->
					    						        			<div class="infoBox NameSort">
                                                                        <input class="tbox regFullSort listMod" placeholder="" value="204번">
					    						        			</div>
                                                                    <!-- :: close : ksg_6 : [진맛] 5차 분류의 분류명 파트. -->
                                                                    





                                                                    <!-- :: open : ksg_6 : [진맛] 5차 분류의 재고 파트. -->
                                                                    <div class="infoBox countMod">
                                                                        <span class="countWord">수량 :</span>
                                                                        <input class="tbox regFullSort listMod countMod" value="450">
                                                                    </div>
                                                                    <!-- :: close : ksg_6 : [진맛] 5차 분류의 재고 파트. -->







					    						        			<!-- :: open : ksg_6 : [진맛] 5차 분류의 사용여부 파트. -->
					    						        			<div class="infoBox useChkSort">
					    						        				<div class="inTableRadioGroup">
					    						        					<div class="radioCase">
					    						        						<div class="radioIconBox">
					    						        							<input type="radio" name="cate_4a" value="1">
					    						        							<label></label>
					    						        						</div>
					    						        						<div class="radioTitle">사용</div>
					    						        					</div>
					    						        					<div class="radioCase">
					    						        						<div class="radioIconBox">
					    						        							<input type="radio" name="cate_4a" value="2" checked="">
					    						        							<label></label>
					    						        						</div>
					    						        						<div class="radioTitle">미사용</div>
					    						        					</div>
					    						        				</div>
					    						        			</div>
					    						        			<!-- :: close : ksg_6 : [진맛] 5차 분류의 사용여부 파트. -->
					    						        			<!-- :: open : ksg_6 : [진맛] 5차 분류의 관리 파트. -->
					    						        			<div class="infoBox controlSort">
					    						        				<div class="btnGroup inListTable">
					    						        					<a href="javascript:void(0);" class="btn delSort">삭제</a>
					    						        				</div>
					    						        			</div>
					    						        			<!-- :: close : ksg_6 : [진맛] 5차 분류의 관리 파트. -->
					    						        		</div>
                                                                <!-- :: close : ksg_6 : [진맛] 5차 분류의 자체 정보 파트(순서변경, 명칭, 사용여부, 삭제/하위분류추가 버튼) -->
					    						        	</div>
					    						        	<!-- :: close : ksg_6 : [진맛] 5차 분류의 개별 항목을 나타내는 최외각 div. -->
					    						        	<!-- :: open : ksg_6 : [진맛] 5차 분류를 등록하는 인풋창. -->
					    						        	<div class="cateRegCover fifSort">
					    						        		<div class="cateInfoCase fifSort">
					    						        			<div class="infoBox titleBox">5차 분류 등록 : </div>
					    						        			<div class="infoBox NameSort">
					    						        				<input class="tbox regFullSort listMod" placeholder="" value="">
                                                                    </div>
                                                                    <div class="infoBox countMod">
                                                                        <span class="countWord">수량 :</span>
                                                                        <input class="tbox regFullSort listMod countMod" value="">
                                                                    </div>
					    						        			<div class="infoBox controlSort">
					    						        				<div class="btnGroup inListTable">
					    						        					<a href="javascript:void(0);" class="btn regSort">등록</a>
					    						        				</div>
					    						        			</div>
					    						        		</div>
					    						        	</div>
					    						        	<!-- :: close : ksg_6 : [진맛] 5차 분류를 등록하는 인풋창. -->
					    						        </div>
                                                        <!-- :: close : ksg_6 : [진맛] 개별 4차 분류의 자식(5차 분류) 그룹. -->
					    							</div>
					    							<!-- :: close : ksg_6 : [진맛] 4차 분류의 개별 항목을 나타내는 최외각 div. -->
					    							<!-- :: open : ksg_6 : [진맛] 4차 분류를 등록하는 인풋창. -->
					    							<div class="cateRegCover frthSort">
					    								<div class="cateInfoCase frthSort">
					    									<div class="infoBox titleBox">4차 분류 등록 : </div>
					    									<div class="infoBox NameSort">
					    										<input class="tbox regFullSort listMod" placeholder="" value="">
					    									</div>
					    									<div class="infoBox controlSort">
					    										<div class="btnGroup inListTable">
					    											<a href="javascript:void(0);" class="btn regSort">등록</a>
					    										</div>
					    									</div>
					    								</div>
					    							</div>
					    							<!-- :: close : ksg_6 : [진맛] 4차 분류를 등록하는 인풋창. -->
					    						</div>
					    						<!-- :: close : ksg_6 : [진맛] 개별 3차 분류의 자식(4차 분류) 그룹. -->
					    					</div>
					    					<!-- :: close : ksg_6 : [진맛] 3차 분류의 개별 항목을 나타내는 최외각 div. -->
					    					<!-- :: open : ksg_6 : [진맛] 3차 분류를 등록하는 인풋창. -->
					    					<div class="cateRegCover thrdSort">
					    						<div class="cateInfoCase thrdSort">
					    							<div class="infoBox titleBox">3차 분류 등록 : </div>
					    							<div class="infoBox NameSort">
					    								<input class="tbox regFullSort listMod" placeholder="" value="">
					    							</div>
					    							<div class="infoBox controlSort">
					    								<div class="btnGroup inListTable">
					    									<a href="javascript:void(0);" class="btn regSort">등록</a>
					    								</div>
					    							</div>
					    						</div>
					    					</div>
					    					<!-- :: close : ksg_6 : [진맛] 3차 분류를 등록하는 인풋창. -->
					    				</div>
					    				<!-- :: close : ksg_6 : [진맛] 개별 2차 분류의 자식(3차 분류) 그룹. -->
					    			</div>
					    			<!-- :: close : ksg_6 : [진맛] 2차 분류의 개별 항목을 나타내는 최외각 div. -->
					    			<!-- :: open : ksg_6 : [진맛] 2차 분류를 등록하는 인풋창. -->
					    			<div class="cateRegCover sndSort">
					    				<div class="cateInfoCase sndSort">
					    					<div class="infoBox titleBox">2차 분류 등록 : </div>
					    					<div class="infoBox NameSort">
					    						<input class="tbox regFullSort listMod" placeholder="" value="">
					    					</div>
					    					<div class="infoBox controlSort">
					    						<div class="btnGroup inListTable">
					    							<a href="javascript:void(0);" class="btn regSort">등록</a>
					    						</div>
					    					</div>
					    				</div>
					    			</div>
					    			<!-- :: close : ksg_6 : [진맛] 2차 분류를 등록하는 인풋창. -->
					    		</div>
					    		<!-- :: close : ksg_6 : [진맛] 개별 1차 분류의 자식(2차 분류) 그룹. -->
					    	</div>
					    	<!-- :: close : ksg_6 : [진맛] 1차 분류의 개별 항목을 나타내는 최외각 div. -->	
					    	<!-- :: open : ksg_6 : [진맛] 1차 분류를 등록하는 인풋창. -->
					    	<div class="cateRegCover fstSort">
					    		<div class="cateInfoCase fstSort">
					    			<div class="infoBox titleBox">1차 분류 등록 : </div>
					    			<div class="infoBox NameSort">
					    				<input class="tbox regFullSort listMod" placeholder="" value="">
					    			</div>
					    			<div class="infoBox controlSort">
					    				<div class="btnGroup inListTable">
					    					<a href="javascript:void(0);" class="btn regSort">등록</a>
					    				</div>
					    			</div>
					    		</div>
					    	</div>
					    	<!-- :: close : ksg_6 : [진맛] 1차 분류를 등록하는 인풋창. -->
					    </div>
                        <!-- :: close : ksg_6 : [진맛] 특정 위치를 트리 구조로 표시하는 depth 테이블 내용.. -->
					</div>
					<div class="headLineBox pageControlSort center"> 
					<a href="javascript:void(0);" class="btn listTopSort addStaffBtn ">저장</a>   
					</div>  	  
				</div>
                <!-- :: close : ksg_6 : [진맛] 창고의 특정 위치에 대한 정보를 표시하는 내용 파트.. -->
            </div>
            <!-- :: close : ksg_2 : [진맛] 우측 테이블 구조. -->
		</div>
	</div>
</div>
<!-- :: open : ksg_4 : [진맛] 품종의 품질을 설정하는 팝업. -->
<div class="popup centerSort qualitypop">
	<div class="popupCon narrSort">
		<a href="javascript:closePop()">
			<img src="/common/img/close.png" class="close">
		</a>
		<div class="titleBox popupSort">
			항목 관리
		</div>
		<div class="conGroup verticalManageSort">
			<!-- :: open : ksg_4 : [진맛] 안내문구 내용. 여기서는 사용할 필요 없으므로 display : none 처리. -->
			<div class="tipBox" style="display : none;">* 선택한 항목들만 리스트에 표시됩니다.</div>
			<div class="tipBox underBdSort" style="display : none;">* 필수 항목은 변경할 수 없습니다.</div>	
			<!-- :: close : ksg_4 : [진맛] 안내문구 내용. 여기서는 사용할 필요 없으므로 display : none 처리. -->
			<table class="infoGroup">
				<colgroup>
					<col width="*">
				</colgroup>
				<tbody>
					<tr>
						<th>당도(Brix)</th>
						<td>
							<input class="tbox regFullSort listMod" placeholder="" value="4.5">
						</td>
					</tr>
					<tr>
						<th>평가</th>
						<td>
							<input class="tbox regFullSort listMod" placeholder="" value="상">
						</td>
					</tr>
					<tr>
						<th>상태</th>
						<td>
							<input class="tbox regFullSort listMod" placeholder="" value="상">
						</td>
					</tr>
					<tr>
						<th>산도(pH)</th>
						<td>
							<input class="tbox regFullSort listMod" placeholder="" value="3.78">
						</td>
					</tr>
					<tr>
						<th>식감</th>
						<td>
							<input class="tbox regFullSort listMod" placeholder="" value="매우 무름">
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="btnGroup verticalBottomSort">
			<a href="javascript:closePop();" class="btn searchSort">저장</a>
		</div>
	</div>
</div>  
<!-- :: close : ksg_4 : [진맛] 품종의 품질을 설정하는 팝업. -->

<script>
// :: open : ksg_4 : [진맛] 원자재 목록 중, 등록된 테이블 라인(class="reged")가 있는 곳만, 클릭했을 때 우측 상세정보가 표시되도록 하는 스크립트.
$(document).on('click', '.conGroup.verticalManageSort .searchResultTable tr.reged', function(){
    $('.specInfoGroup.hide').removeClass('hide');
	$('.specRegGroup').removeClass('hide');
    $('.specInfoGroup').next('.btnGroup.horizontalBottomSort').removeClass('hide');
	$(this).siblings('tr').removeClass('activated');
	$(this).addClass('activated');
});
// :: close : ksg_4 : [진맛] 원자재 목록 중, 등록된 테이블 라인(class="reged")가 있는 곳만, 클릭했을 때 우측 상세정보가 표시되도록 하는 스크립트.


// :: open : ksg_7 : [진맛] "하위 분류" 버튼을 누르면 해당 항목의 자식 리스트(하위 카테고리 목록)가 표시/숨김 되게 하는 스크립트.
$(document).on('click', '.cateInfoCase .infoBox.controlSort .btn.modifySort', function(){
	$(this).closest('.cateInfoCase').siblings('.innerCateList').toggleClass('hide');
});
// :: close : ksg_7 : [진맛] "하위 분류" 버튼을 누르면 해당 항목의 자식 리스트(하위 카테고리 목록)가 표시/숨김 되게 하는 스크립트.
// :: open : ksg_7 : [진맛] "1차 분류 등록" 파트에서, "등록" 버튼을 누르면, 카테고리 하나가 추가되도록 하는 스크립트.
$(document).on('click', '.cateRegCover.fstSort .infoBox.controlSort .btn.regSort', function(){
	var str 		=	'';
 	str			+=	'<div class="cateCover fstSort">';
 	str			+=	'	<div class="cateInfoCase fstSort">';
 	str			+=	'		<div class="infoBox posChanSort">';
 	str			+=	'			<a href="javascript:void(0);" class="increaseIcon toUpSort"></a>';
 	str			+=	'			<a href="javascript:void(0);" class="decreaseIcon toDownSort"></a>';
 	str			+=	'		</div>';
 	str			+=	'		<div class="infoBox NameSort">';
 	str			+=	'			<input class="tbox regFullSort listMod" placeholder="" value="">';
 	str			+=	'		</div>';
 	str			+=	'		<div class="infoBox useChkSort">';
 	str			+=	'			<div class="inTableRadioGroup">';
 	str			+=	'				<div class="radioCase">';
 	str			+=	'					<div class="radioIconBox">';
 	str			+=	'						<input type="radio" name="cate_4a" value="1">';
 	str			+=	'						<label></label>';
 	str			+=	'					</div>';
 	str			+=	'					<div class="radioTitle">사용</div>';
 	str			+=	'				</div>';
 	str			+=	'				<div class="radioCase">';
 	str			+=	'					<div class="radioIconBox">';
 	str			+=	'						<input type="radio" name="cate_4a" value="2" checked="">';
 	str			+=	'						<label></label>';
 	str			+=	'					</div>';
 	str			+=	'					<div class="radioTitle">미사용</div>';
 	str			+=	'				</div>';
 	str			+=	'			</div>';
 	str			+=	'		</div>';
 	str			+=	'		<div class="infoBox controlSort">';
 	str			+=	'			<div class="btnGroup inListTable">';
	str			+=	'				<a href="javascript:void(0);" class="btn modifySort">하위 분류</a>';
 	str			+=	'				<a href="javascript:void(0);" class="btn delSort">삭제</a>';
 	str			+=	'			</div>';
 	str			+=	'		</div>';
 	str			+=	'	</div>';
	str			+=	'	<div class="innerCateList sndSort hide">';
	str			+=	'		<div class="cateRegCover sndSort">';
	str			+=	'			<div class="cateInfoCase sndSort">';
	str			+=	'				<div class="infoBox titleBox">2차 분류 등록 : </div>';
	str			+=	'				<div class="infoBox NameSort">';
	str			+=	'					<input class="tbox regFullSort listMod" placeholder="" value="">';
	str			+=	'				</div>';
	str			+=	'				<div class="infoBox controlSort">';
	str			+=	'					<div class="btnGroup inListTable">';
	str			+=	'						<a href="javascript:void(0);" class="btn regSort">등록</a>';
	str			+=	'					</div>';
	str			+=	'				</div>';
	str			+=	'			</div>';
	str			+=	'		</div>';
	str			+=	'	</div>';
 	str			+=	'</div>';
	// :: ksg_7 : open : [진맛] 추가되는 내용이 "1차 분류 등록" 입력 파트보다 위에 표시되도록 하는 내용.
	$(this).closest('.cateRegCover').before(str);
	// :: ksg_7 : close : [진맛] 추가되는 내용이 "1차 분류 등록" 입력 파트보다 위에 표시되도록 하는 내용.
});
// :: close : ksg_7 : [진맛] "1차 분류 등록" 파트에서, "등록" 버튼을 누르면, 카테고리 하나가 추가되도록 하는 스크립트.
// :: open : ksg_7 : [진맛] "2차 분류 등록" 파트에서, "등록" 버튼을 누르면, 카테고리 하나가 추가되도록 하는 스크립트.
$(document).on('click', '.cateRegCover.sndSort .infoBox.controlSort .btn.regSort', function(){
	var str 		=	'';
 	str			+=	'<div class="cateCover sndSort">';
 	str			+=	'	<div class="cateInfoCase sndSort">';
 	str			+=	'		<div class="infoBox posChanSort">';
 	str			+=	'			<a href="javascript:void(0);" class="increaseIcon toUpSort"></a>';
 	str			+=	'			<a href="javascript:void(0);" class="decreaseIcon toDownSort"></a>';
 	str			+=	'		</div>';
 	str			+=	'		<div class="infoBox NameSort">';
 	str			+=	'			<input class="tbox regFullSort listMod" placeholder="" value="">';
 	str			+=	'		</div>';
 	str			+=	'		<div class="infoBox useChkSort">';
 	str			+=	'			<div class="inTableRadioGroup">';
 	str			+=	'				<div class="radioCase">';
 	str			+=	'					<div class="radioIconBox">';
 	str			+=	'						<input type="radio" name="cate_4a" value="1">';
 	str			+=	'						<label></label>';
 	str			+=	'					</div>';
 	str			+=	'					<div class="radioTitle">사용</div>';
 	str			+=	'				</div>';
 	str			+=	'				<div class="radioCase">';
 	str			+=	'					<div class="radioIconBox">';
 	str			+=	'						<input type="radio" name="cate_4a" value="2" checked="">';
 	str			+=	'						<label></label>';
 	str			+=	'					</div>';
 	str			+=	'					<div class="radioTitle">미사용</div>';
 	str			+=	'				</div>';
 	str			+=	'			</div>';
 	str			+=	'		</div>';
 	str			+=	'		<div class="infoBox controlSort">';
 	str			+=	'			<div class="btnGroup inListTable">';
	str			+=	'				<a href="javascript:void(0);" class="btn modifySort">하위 분류</a>';
 	str			+=	'				<a href="javascript:void(0);" class="btn delSort">삭제</a>';
 	str			+=	'			</div>';
 	str			+=	'		</div>';
 	str			+=	'	</div>';
	str			+=	'	<div class="innerCateList thrdSort hide">';
	str			+=	'		<div class="cateRegCover thrdSort">';
	str			+=	'			<div class="cateInfoCase thrdSort">';
	str			+=	'				<div class="infoBox titleBox">3차 분류 등록 : </div>';
	str			+=	'				<div class="infoBox NameSort">';
	str			+=	'					<input class="tbox regFullSort listMod" placeholder="" value="">';
	str			+=	'				</div>';
	str			+=	'				<div class="infoBox controlSort">';
	str			+=	'					<div class="btnGroup inListTable">';
	str			+=	'						<a href="javascript:void(0);" class="btn regSort">등록</a>';
	str			+=	'					</div>';
	str			+=	'				</div>';
	str			+=	'			</div>';
	str			+=	'		</div>';
	str			+=	'	</div>';
 	str			+=	'</div>';
	// :: ksg_7 : open : [진맛] 추가되는 내용이 "2차 분류 등록" 입력 파트보다 위에 표시되도록 하는 내용.
	$(this).closest('.cateRegCover').before(str);
	// :: ksg_7 : close : [진맛] 추가되는 내용이 "2차 분류 등록" 입력 파트보다 위에 표시되도록 하는 내용.
});
// :: close : ksg_7 : [진맛] "2차 분류 등록" 파트에서, "등록" 버튼을 누르면, 카테고리 하나가 추가되도록 하는 스크립트.
// :: open : ksg_7 : [진맛] "3차 분류 등록" 파트에서, "등록" 버튼을 누르면, 카테고리 하나가 추가되도록 하는 스크립트.
$(document).on('click', '.cateRegCover.thrdSort .infoBox.controlSort .btn.regSort', function(){
	var str 		=	'';
 	str			+=	'<div class="cateCover thrdSort">';
 	str			+=	'	<div class="cateInfoCase thrdSort">';
 	str			+=	'		<div class="infoBox posChanSort">';
 	str			+=	'			<a href="javascript:void(0);" class="increaseIcon toUpSort"></a>';
 	str			+=	'			<a href="javascript:void(0);" class="decreaseIcon toDownSort"></a>';
 	str			+=	'		</div>';
 	str			+=	'		<div class="infoBox NameSort">';
 	str			+=	'			<input class="tbox regFullSort listMod" placeholder="" value="">';
 	str			+=	'		</div>';
 	str			+=	'		<div class="infoBox useChkSort">';
 	str			+=	'			<div class="inTableRadioGroup">';
 	str			+=	'				<div class="radioCase">';
 	str			+=	'					<div class="radioIconBox">';
 	str			+=	'						<input type="radio" name="cate_4a" value="1">';
 	str			+=	'						<label></label>';
 	str			+=	'					</div>';
 	str			+=	'					<div class="radioTitle">사용</div>';
 	str			+=	'				</div>';
 	str			+=	'				<div class="radioCase">';
 	str			+=	'					<div class="radioIconBox">';
 	str			+=	'						<input type="radio" name="cate_4a" value="2" checked="">';
 	str			+=	'						<label></label>';
 	str			+=	'					</div>';
 	str			+=	'					<div class="radioTitle">미사용</div>';
 	str			+=	'				</div>';
 	str			+=	'			</div>';
 	str			+=	'		</div>';
 	str			+=	'		<div class="infoBox controlSort">';
 	str			+=	'			<div class="btnGroup inListTable">';
	str			+=	'				<a href="javascript:void(0);" class="btn modifySort">하위 분류</a>';
 	str			+=	'				<a href="javascript:void(0);" class="btn delSort">삭제</a>';
 	str			+=	'			</div>';
 	str			+=	'		</div>';
 	str			+=	'	</div>';
	str			+=	'	<div class="innerCateList frthSort hide">';
	str			+=	'		<div class="cateRegCover frthSort">';
	str			+=	'			<div class="cateInfoCase frthSort">';
	str			+=	'				<div class="infoBox titleBox">4차 분류 등록 : </div>';
	str			+=	'				<div class="infoBox NameSort">';
	str			+=	'					<input class="tbox regFullSort listMod" placeholder="" value="">';
	str			+=	'				</div>';
	str			+=	'				<div class="infoBox controlSort">';
	str			+=	'					<div class="btnGroup inListTable">';
	str			+=	'						<a href="javascript:void(0);" class="btn regSort">등록</a>';
	str			+=	'					</div>';
	str			+=	'				</div>';
	str			+=	'			</div>';
	str			+=	'		</div>';
	str			+=	'	</div>';
 	str			+=	'</div>';
	// :: ksg_7 : open : [진맛] 추가되는 내용이 "3차 분류 등록" 입력 파트보다 위에 표시되도록 하는 내용.
	$(this).closest('.cateRegCover').before(str);
	// :: ksg_7 : close : [진맛] 추가되는 내용이 "3차 분류 등록" 입력 파트보다 위에 표시되도록 하는 내용.
});
// :: close : ksg_7 : [진맛] "3차 분류 등록" 파트에서, "등록" 버튼을 누르면, 카테고리 하나가 추가되도록 하는 스크립트.
// :: open : ksg_7 : [진맛] "4차 분류 등록" 파트에서, "등록" 버튼을 누르면, 카테고리 하나가 추가되도록 하는 스크립트.
$(document).on('click', '.cateRegCover.frthSort .infoBox.controlSort .btn.regSort', function(){
	var str 		=	'';
	str			+='<div class="cateCover frthSort fstChd">';
	str			+='	<div class="cateInfoCase frthSort">';
	str			+='		<div class="infoBox posChanSort">';
	str			+='			<a href="javascript:void(0);" class="increaseIcon toUpSort"></a>';
	str			+='			<a href="javascript:void(0);" class="decreaseIcon toDownSort"></a>';
	str			+='		</div>';
	str			+='		<div class="infoBox NameSort">';
	str			+='			<input class="tbox regFullSort listMod" placeholder="" value="">';
	str			+='		</div>';
	str			+='		<div class="infoBox useChkSort">';
	str			+='			<div class="inTableRadioGroup">';
	str			+='				<div class="radioCase">';
	str			+='					<div class="radioIconBox">';
	str			+='						<input type="radio" name="cate_4a" value="1">';
	str			+='						<label></label>';
	str			+='					</div>';
	str			+='					<div class="radioTitle">사용</div>';
	str			+='				</div>';
	str			+='				<div class="radioCase">';
	str			+='					<div class="radioIconBox">';
	str			+='						<input type="radio" name="cate_4a" value="2" checked="">';
	str			+='						<label></label>';
	str			+='					</div>';
	str			+='					<div class="radioTitle">미사용</div>';
	str			+='				</div>';
	str			+='			</div>';
	str			+='		</div>';
	str			+='		<div class="infoBox controlSort">';
    str			+='			<div class="btnGroup inListTable">';
    str			+='             <a href="javascript:void(0);" class="btn modifySort">하위 분류</a>';
	str			+='				<a href="javascript:void(0);" class="btn delSort">삭제</a>';
	str			+='			</div>';
	str			+='		</div>';
	str			+='	</div>';
	str			+='</div>';
	// :: ksg_7 : open : [진맛] 추가되는 내용이 "4차 분류 등록" 입력 파트보다 위에 표시되도록 하는 내용.
	$(this).closest('.cateRegCover').before(str);
	// :: ksg_7 : close : [진맛] 추가되는 내용이 "4차 분류 등록" 입력 파트보다 위에 표시되도록 하는 내용.
});
// :: close : ksg_7 : [진맛] "4차 분류 등록" 파트에서, "등록" 버튼을 누르면, 카테고리 하나가 추가되도록 하는 스크립트.
// :: open : ksg_7 : [진맛] "5차 분류 등록" 파트에서, "등록" 버튼을 누르면, 카테고리 하나가 추가되도록 하는 스크립트.
$(document).on('click', '.cateRegCover.fifSort .infoBox.controlSort .btn.regSort', function(){
	var str 		=	'';
	str			+='<div class="cateCover fifSort fstChd">';
	str			+='	<div class="cateInfoCase fifSort">';
	str			+='		<div class="infoBox posChanSort">';
	str			+='			<a href="javascript:void(0);" class="increaseIcon toUpSort"></a>';
	str			+='			<a href="javascript:void(0);" class="decreaseIcon toDownSort"></a>';
	str			+='		</div>';
	str			+='		<div class="infoBox NameSort">';
	str			+='			<input class="tbox regFullSort listMod" placeholder="" value="">';
    str			+='		</div>';
    str			+='     <div class="infoBox countMod">';
    str			+='         <span class="countWord">수량 :</span>';
    str			+='         <input class="tbox regFullSort listMod countMod" value="450">';
    str			+='     </div>';
	str			+='		<div class="infoBox useChkSort">';
	str			+='			<div class="inTableRadioGroup">';
	str			+='				<div class="radioCase">';
	str			+='					<div class="radioIconBox">';
	str			+='						<input type="radio" name="cate_4a" value="1">';
	str			+='						<label></label>';
	str			+='					</div>';
	str			+='					<div class="radioTitle">사용</div>';
	str			+='				</div>';
	str			+='				<div class="radioCase">';
	str			+='					<div class="radioIconBox">';
	str			+='						<input type="radio" name="cate_4a" value="2" checked="">';
	str			+='						<label></label>';
	str			+='					</div>';
	str			+='					<div class="radioTitle">미사용</div>';
	str			+='				</div>';
	str			+='			</div>';
	str			+='		</div>';
	str			+='		<div class="infoBox controlSort">';
	str			+='			<div class="btnGroup inListTable">';
	str			+='				<a href="javascript:void(0);" class="btn delSort">삭제</a>';
	str			+='			</div>';
	str			+='		</div>';
	str			+='	</div>';
	str			+='</div>';
	// :: ksg_7 : open : [진맛] 추가되는 내용이 "5차 분류 등록" 입력 파트보다 위에 표시되도록 하는 내용.
	$(this).closest('.cateRegCover').before(str);
	// :: ksg_7 : close : [진맛] 추가되는 내용이 "5차 분류 등록" 입력 파트보다 위에 표시되도록 하는 내용.
});
// :: close : ksg_7 : [진맛] "5차 분류 등록" 파트에서, "등록" 버튼을 누르면, 카테고리 하나가 추가되도록 하는 스크립트.
// :: open : ksg_7 : [진맛] "위, 아래 화살표 클릭 시, 분류 항목이 형제 분류 항목들의 위 또는 아래로 이동하도록 하는 스크립트.
$(document).on("click", "a.toUpSort", function(e){
	var wrapper = $(this).closest('.cateCover');
	wrapper.insertBefore(wrapper.prev());
	e.stopPropagation();
})
$(document).on("click", "a.toDownSort", function(e){
	// :: open : ksg_7 : [진맛] 아래로 내려가는 화살표를 눌렀을 때, 해당 항목이 등록 파트보다 밑으로 내려가는 문제를 해결하는 if 조건이 포함된 내용.
	if($(this).closest('.cateCover').next().is('.cateRegCover')) {
	} else {
		var wrapper = $(this).closest('.cateCover');
		wrapper.insertAfter(wrapper.next());
		e.stopPropagation();
	}
	// :: close : ksg_7 : [진맛] 아래로 내려가는 화살표를 눌렀을 때, 해당 항목이 등록 파트보다 밑으로 내려가는 문제를 해결하는 if 조건이 포함된 내용.
})
// :: close : ksg_7 : [진맛] "위, 아래 화살표 클릭 시, 분류 항목이 형제 분류 항목들의 위 또는 아래로 이동하도록 하는 스크립트.
// :: open : ksg_7 : [진맛] "삭제" 버튼을 눌렀을 때, 해당 분류 항목이 페이지에서 제거되도록 하는 스크립트..
$(document).on("click", ".cateInfoCase .infoBox.controlSort .btn.delSort", function(){
	$(this).closest('.cateCover').remove();
	e.stopPropagation();
});
// :: close : ksg_7 : [진맛] "삭제" 버튼을 눌렀을 때, 해당 분류 항목이 페이지에서 제거되도록 하는 스크립트..
// :: open : ksg_6 : [진맛] "창고 추가" 버튼을 클릭했을 때 우측 상세정보가 표시되도록 하는 스크립트.
$(document).on('click', '.btn.headRightAbMod.addWHouseBtn', function(){
    $('.specInfoGroup.hide').removeClass('hide');
	$('.specRegGroup').removeClass('hide');
    $('.specInfoGroup').next('.btnGroup.horizontalBottomSort').removeClass('hide');
	$(this).siblings('tr').removeClass('activated');
	$(this).addClass('activated');
});
// :: close : ksg_6 : [진맛] "창고 추가" 버튼을 클릭했을 때 우측 상세정보가 표시되도록 하는 스크립트.
</script>
</body>
</html>