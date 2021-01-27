<!-- :: ksg_4 = ksg_20210122_1409 -->
<!-- :: ksg_3 = ksg_20210121_1459 -->
<!-- :: ksg_2 = ksg_20210120_1102 -->
<!-- :: ksg_1 = ksg_20210108_1726 -->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/pages/head.php';
	$tCode					=	'800';
	$lCode					=	'800';
?>
<body>
<div class="container">
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/pages/header.php'; ?>
    <!-- :: open : ksg_1 : [진맛] 좌측메뉴 파트. -->
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/staff/pages/staff_left.php'; ?>  
	<!-- :: close : ksg_1 : [진맛] 좌측메뉴 파트. -->
	<div class="wrapper">
		<div class="contents">  
			<div class="section horizontalManageSort searcManageSort topLineMod">
				<div class="titleBox manageHeadlineSort">검색</div>
				<div class="conGroup verticalManageSort">
					<table class="searchGroup">  
						<colgroup>
							<col style="width : 10%;">
							<col style="width : 40%;">
							<col style="width : 10%;">
							<col style="width : 40%;">
						</colgroup>
						<tbody>
						<tr>
							<th>검색어</th>
							<td>
								<select class="sbox">
									<option>전체</option>
                                    <option>품목명</option>
                                    <option>품목코드</option>
                                    <option>품종명</option>
                                    <option>품종코드</option>
                                    <option>창고명</option>
                                    <option>창고코드</option>  
                                    <option>생상품명</option>
									<option>생산품코드</option>
								</select>
								<input class="tbox searchInput topLineSearchMod ui-autocomplete-input" placeholder="검색어를 입력해주세요.">
                            </td>  
                        </tr>    
						</tbody>
                    </table>
                    <div class="btnGroup verticalBottomSort inTblSort">
                        <a href="javascript:void(0);" class="btn singleSearchMod">검색</a>
                    </div>
				</div>
            </div>  
            
            








            <div class="section horizontalManageSort asymDoub1">
				<div class="titleBox manageHeadlineSort">부서 목록</div>
				<div class="conGroup verticalManageSort bottomRowSort">
					<div class="headLineBox listControlSort">
						<div class="titleBox inlistConSort">
							<div class="titleText">부서 목록</div>
                        </div>
                        <div class="tipBox mb15">* 하위 항목이 존재하는 부서 분류는 삭제할 수 없습니다.</div>
					</div>
					<!-- :: open : ksg_6 : [진맛] 분류 리스트 파트. -->
					<div class="cateListGroup fullMod">
						<!-- :: open : ksg_6 : [진맛] 1차 부서의 개별 항목을 나타내는 최외각 div. -->
						<div class="cateCover fstSort fstChd">
							<!-- :: open : ksg_6 : [진맛] 1차 부서의 자체 정보 파트(순서변경, 명칭, 사용여부, 삭제/하위분류추가 버튼) -->
							<div class="cateInfoCase fstSort">
								<!-- :: open : ksg_6 : [진맛] 1차 부서의 순서 변경 파트. -->
								<div class="infoBox posChanSort">
									<a href="javascript:void(0);" class="increaseIcon toUpSort"></a>
									<a href="javascript:void(0);" class="decreaseIcon toDownSort"></a>
								</div>
								<!-- :: close : ksg_6 : [진맛] 1차 부서의 순서 변경 파트. -->
								<!-- :: open : ksg_6 : [진맛] 1차 부서의 분류명 파트. -->
								<div class="infoBox NameSort">
									<input class="tbox regFullSort listMod" placeholder="" value="">
								</div>
								<!-- :: close : ksg_6 : [진맛] 1차 부서의 분류명 파트. -->
								<!-- :: open : ksg_6 : [진맛] 1차 부서의 사용여부 파트. -->
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
								<!-- :: close : ksg_6 : [진맛] 1차 부서의 사용여부 파트. -->
								<!-- :: open : ksg_6 : [진맛] 1차 부서의 관리 파트. -->
								<div class="infoBox controlSort">
									<div class="btnGroup inListTable">
										<a href="javascript:void(0);" class="btn modifySort">하위 부서</a>
										<a href="javascript:void(0);" class="btn delSort">삭제</a>
									</div>
								</div>
								<!-- :: close : ksg_6 : [진맛] 1차 부서의 관리 파트. -->
							</div>
							<!-- :: close : ksg_6 : [진맛] 1차 부서의 자체 정보 파트(순서변경, 명칭, 사용여부, 삭제/하위분류추가 버튼) -->
							<!-- :: open : ksg_6 : [진맛] 개별 1차 부서의 자식(2차 부서) 그룹. -->
							<div class="innerCateList sndSort hide">
								<!-- :: open : ksg_6 : [진맛] 2차 부서의 개별 항목을 나타내는 최외각 div. -->
								<div class="cateCover sndSort fstChd">
									<!-- :: open : ksg_6 : [진맛] 2차 부서의 자체 정보 파트(순서변경, 명칭, 사용여부, 삭제/하위분류추가 버튼) -->
									<div class="cateInfoCase sndSort">
										<!-- :: open : ksg_6 : [진맛] 2차 부서의 순서 변경 파트. -->
										<div class="infoBox posChanSort">
											<a href="javascript:void(0);" class="increaseIcon toUpSort"></a>
											<a href="javascript:void(0);" class="decreaseIcon toDownSort"></a>
										</div>
										<!-- :: close : ksg_6 : [진맛] 2차 부서의 순서 변경 파트. -->
										<!-- :: open : ksg_6 : [진맛] 2차 부서의 분류명 파트. -->
										<div class="infoBox NameSort">
											<input class="tbox regFullSort listMod" placeholder="" value="">
										</div>
										<!-- :: close : ksg_6 : [진맛] 2차 부서의 분류명 파트. -->
										<!-- :: open : ksg_6 : [진맛] 2차 부서의 사용여부 파트. -->
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
										<!-- :: close : ksg_6 : [진맛] 2차 부서의 사용여부 파트. -->
										<!-- :: open : ksg_6 : [진맛] 2차 부서의 관리 파트. -->
										<div class="infoBox controlSort">
											<div class="btnGroup inListTable">
												<a href="javascript:void(0);" class="btn modifySort">하위 부서</a>
												<a href="javascript:void(0);" class="btn delSort">삭제</a>
											</div>
										</div>
										<!-- :: close : ksg_6 : [진맛] 2차 부서의 관리 파트. -->
									</div>
									<!-- :: close : ksg_6 : [진맛] 2차 부서의 자체 정보 파트(순서변경, 명칭, 사용여부, 삭제/하위분류추가 버튼) -->
									<!-- :: open : ksg_6 : [진맛] 개별 2차 부서의 자식(3차 부서) 그룹. -->
									<div class="innerCateList thrdSort hide">
										<!-- :: open : ksg_6 : [진맛] 3차 부서의 개별 항목을 나타내는 최외각 div. -->
										<div class="cateCover thrdSort fstChd">
											<!-- :: open : ksg_6 : [진맛] 3차 부서의 자체 정보 파트(순서변경, 명칭, 사용여부, 삭제/하위분류추가 버튼) -->
											<div class="cateInfoCase thrdSort">
												<!-- :: open : ksg_6 : [진맛] 3차 부서의 순서 변경 파트. -->
												<div class="infoBox posChanSort">
													<a href="javascript:void(0);" class="increaseIcon toUpSort"></a>
													<a href="javascript:void(0);" class="decreaseIcon toDownSort"></a>
												</div>
												<!-- :: close : ksg_6 : [진맛] 3차 부서의 순서 변경 파트. -->
												<!-- :: open : ksg_6 : [진맛] 3차 부서의 분류명 파트. -->
												<div class="infoBox NameSort">
													<input class="tbox regFullSort listMod" placeholder="" value="">
												</div>
												<!-- :: close : ksg_6 : [진맛] 3차 부서의 분류명 파트. -->
												<!-- :: open : ksg_6 : [진맛] 3차 부서의 사용여부 파트. -->
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
												<!-- :: close : ksg_6 : [진맛] 3차 부서의 사용여부 파트. -->
												<!-- :: open : ksg_6 : [진맛] 3차 부서의 관리 파트. -->
												<div class="infoBox controlSort">
													<div class="btnGroup inListTable">
														<a href="javascript:void(0);" class="btn modifySort">하위 부서</a>
														<a href="javascript:void(0);" class="btn delSort">삭제</a>
													</div>
												</div>
												<!-- :: close : ksg_6 : [진맛] 3차 부서의 관리 파트. -->
											</div>
											<!-- :: close : ksg_6 : [진맛] 3차 부서의 자체 정보 파트(순서변경, 명칭, 사용여부, 삭제/하위분류추가 버튼) -->
											<!-- :: open : ksg_6 : [진맛] 개별 3차 부서의 자식(4차 부서) 그룹. -->
											<div class="innerCateList frthSort hide">
												<!-- :: open : ksg_6 : [진맛] 4차 부서의 개별 항목을 나타내는 최외각 div. -->
												<div class="cateCover frthSort fstChd">
													<!-- :: open : ksg_6 : [진맛] 4차 부서의 자체 정보 파트(순서변경, 명칭, 사용여부, 삭제/하위분류추가 버튼) -->
													<div class="cateInfoCase frthSort">
														<!-- :: open : ksg_6 : [진맛] 4차 부서의 순서 변경 파트. -->
														<div class="infoBox posChanSort">
															<a href="javascript:void(0);" class="increaseIcon toUpSort"></a>
															<a href="javascript:void(0);" class="decreaseIcon toDownSort"></a>
														</div>
														<!-- :: close : ksg_6 : [진맛] 4차 부서의 순서 변경 파트. -->
														<!-- :: open : ksg_6 : [진맛] 4차 부서의 분류명 파트. -->
														<div class="infoBox NameSort">
															<input class="tbox regFullSort listMod" placeholder="" value="">
														</div>
														<!-- :: close : ksg_6 : [진맛] 4차 부서의 분류명 파트. -->
														<!-- :: open : ksg_6 : [진맛] 4차 부서의 사용여부 파트. -->
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
														<!-- :: close : ksg_6 : [진맛] 4차 부서의 사용여부 파트. -->
														<!-- :: open : ksg_6 : [진맛] 4차 부서의 관리 파트. -->
														<div class="infoBox controlSort">
															<div class="btnGroup inListTable">
																<a href="javascript:void(0);" class="btn delSort">삭제</a>
															</div>
														</div>
														<!-- :: close : ksg_6 : [진맛] 4차 부서의 관리 파트. -->
													</div>
													<!-- :: close : ksg_6 : [진맛] 4차 부서의 자체 정보 파트(순서변경, 명칭, 사용여부, 삭제/하위분류추가 버튼) -->
												</div>
												<!-- :: close : ksg_6 : [진맛] 4차 부서의 개별 항목을 나타내는 최외각 div. -->
												<!-- :: open : ksg_6 : [진맛] 4차 부서를 등록하는 인풋창. -->
												<div class="cateRegCover frthSort">
													<div class="cateInfoCase frthSort">
														<div class="infoBox titleBox">4차 부서 등록 : </div>
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
												<!-- :: close : ksg_6 : [진맛] 4차 부서를 등록하는 인풋창. -->
											</div>
											<!-- :: close : ksg_6 : [진맛] 개별 3차 부서의 자식(4차 부서) 그룹. -->
										</div>
										<!-- :: close : ksg_6 : [진맛] 3차 부서의 개별 항목을 나타내는 최외각 div. -->
										<!-- :: open : ksg_6 : [진맛] 3차 부서를 등록하는 인풋창. -->
										<div class="cateRegCover thrdSort">
											<div class="cateInfoCase thrdSort">
												<div class="infoBox titleBox">3차 부서 등록 : </div>
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
										<!-- :: close : ksg_6 : [진맛] 3차 부서를 등록하는 인풋창. -->
									</div>
									<!-- :: close : ksg_6 : [진맛] 개별 2차 부서의 자식(3차 부서) 그룹. -->
								</div>
								<!-- :: close : ksg_6 : [진맛] 2차 부서의 개별 항목을 나타내는 최외각 div. -->
								<!-- :: open : ksg_6 : [진맛] 2차 부서를 등록하는 인풋창. -->
								<div class="cateRegCover sndSort">
									<div class="cateInfoCase sndSort">
										<div class="infoBox titleBox">2차 부서 등록 : </div>
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
								<!-- :: close : ksg_6 : [진맛] 2차 부서를 등록하는 인풋창. -->
							</div>
							<!-- :: close : ksg_6 : [진맛] 개별 1차 부서의 자식(2차 부서) 그룹. -->
						</div>
						<!-- :: close : ksg_6 : [진맛] 1차 부서의 개별 항목을 나타내는 최외각 div. -->	
						<!-- :: open : ksg_6 : [진맛] 1차 부서를 등록하는 인풋창. -->
						<div class="cateRegCover fstSort">
							<div class="cateInfoCase fstSort">
								<div class="infoBox titleBox">1차 부서 등록 : </div>
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
						<!-- :: close : ksg_6 : [진맛] 1차 부서를 등록하는 인풋창. -->
					</div>
					<!-- :: close : ksg_6 : [진맛] 분류 리스트 파트. -->
					<!-- :: open : ksg_6 : [진맛] 기존 분류 설정 파트. 새로운 것으로 교체하므로, 이것은 style="display : none;" 처리. -->
					<table class="searchResultTable" style="display : none;">
						<colgroup>
							<col style="width : 200px;">
							<col style="width : 90px;">
							<col style="width : 60px;">
						</colgroup>
						<thead>
						<tr>
							<th>
								분류명<br>
								(분류코드)
							</th>
							<th>사용여부</th>
							<th>관리</th>
						</tr>
						</thead>
						<tbody>
						<!-- :: open : ksg_4 : [진맛] 테이블에 등록하는 파트. -->
						<tr>
							<td>
								<div>
									<input class="tbox regFullSort listMod" placeholder="분류명" value="">
								</div>
								<div class="mt2">
									<input class="tbox regFullSort listMod" placeholder="분류코드" value="">
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
									<a href="javascript:void(0);" class="btn regSort">등록</a>
								</div>
							</td>
						</tr>
						<!-- :: close : ksg_4 : [진맛] 테이블에 등록하는 파트. -->
						<tr class="reged">
							<td>
								<div>
									<input class="tbox regFullSort listMod" placeholder="분류명" value="핵과류">
								</div>
								<div class="mt2">
									<input class="tbox regFullSort listMod" placeholder="분류코드" value="24555111" readonly>
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
                                    <a href="javascript:void(0);" class="btn delSort">삭제</a>
								</div>
							</td>
						</tr>
						<tr class="reged">
							<td>
								<div>
									<input class="tbox regFullSort listMod" placeholder="분류명" value="견과류">
								</div>
								<div class="mt2">
									<input class="tbox regFullSort listMod" placeholder="분류코드" value="31224455" readonly>
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
                                    <a href="javascript:void(0);" class="btn delSort">삭제</a>
								</div>
							</td>
						</tr>
						</tbody>
					</table>
					<!-- :: close : ksg_6 : [진맛] 기존 분류 설정 파트. 새로운 것으로 교체하므로, 이것은 style="display : none;" 처리. -->
				</div>
				<!-- :: open : ksg_6 : [진맛] 페이징 파트, 이것은 새로운 분류 구조에서는 필요 없을 것이므로, style="display : none;" 처리. -->
				<div class="page_group underSort" style="display : none;">
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
				<!-- :: close : ksg_6 : [진맛] 페이징 파트, 이것은 새로운 분류 구조에서는 필요 없을 것이므로, style="display : none;" 처리. -->
            </div>







			<!-- :: open : ksg_2 : [진맛] 우측 테이블 구조. -->  
			<div class="section horizontalManageSort AsymDoub2">
                <div class="titleBox manageHeadlineSort">상세정보</div>
				<!-- :: open : ksg_5 : [진맛] 생산품의 상세정보 파트. 입력창 형식. -->
				<div class="specInfoGroup hide">
					<div class="conGroup verticalManageSort">
						<div class="headLineBox listControlSort">
							<div class="titleBox inlistConSort">
								<div class="titleText">부서정보</div>
							</div>
                        </div>
                        




                        <table class="infoGroup">
							<colgroup>
								<col width="100">
								<col width="*">
							</colgroup>
							<tbody>
							<tr>
								<th>부서명</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
							</tr>
							<tr>
								<th>부서코드</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
                            </tr>
                            <tr>
								<th>사용가능메뉴</th>
								<td>
                                    <div class="inTableCheckGroup">
							    		<div class="checkBoxCase">
							    			<div class="checkBoxIconBox">
							    				<input type="checkbox" name="" value="" checked>
							    				<label></label>
							    			</div>
							    			<div class="checkBoxTitle">전체</div>
                                        </div>
                                        <div class="checkBoxCase">
							    			<div class="checkBoxIconBox">
							    				<input type="checkbox" name="" value="">
							    				<label></label>
							    			</div>
							    			<div class="checkBoxTitle">기준항목</div>
							    		</div>
							    		<div class="checkBoxCase">
							    			<div class="checkBoxIconBox">
							    				<input type="checkbox" name="" value="">
							    				<label></label>
							    			</div>
							    			<div class="checkBoxTitle">납품/발주</div>
                                        </div>
                                        <div class="checkBoxCase">
							    			<div class="checkBoxIconBox">
							    				<input type="checkbox" name="" value="">
							    				<label></label>
							    			</div>
							    			<div class="checkBoxTitle">구매(납품업체)</div>
                                        </div>
                                        <div class="checkBoxCase">
							    			<div class="checkBoxIconBox">
							    				<input type="checkbox" name="" value="">
							    				<label></label>
							    			</div>
							    			<div class="checkBoxTitle">입고</div>
                                        </div>
                                        <div class="checkBoxCase">
							    			<div class="checkBoxIconBox">
							    				<input type="checkbox" name="" value="">
							    				<label></label>
							    			</div>
							    			<div class="checkBoxTitle">생산/작업지시</div>
                                        </div>
                                        <div class="checkBoxCase">
							    			<div class="checkBoxIconBox">
							    				<input type="checkbox" name="" value="">
							    				<label></label>
							    			</div>
							    			<div class="checkBoxTitle">출고</div>
                                        </div>
                                        <div class="checkBoxCase">
							    			<div class="checkBoxIconBox">
							    				<input type="checkbox" name="" value="">
							    				<label></label>
							    			</div>
							    			<div class="checkBoxTitle">재고</div>
                                        </div>
                                        <div class="checkBoxCase">
							    			<div class="checkBoxIconBox">
							    				<input type="checkbox" name="" value="">
							    				<label></label>
							    			</div>
							    			<div class="checkBoxTitle">직원</div>
							    		</div>
							    	</div>
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
								<th>추가사업장</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
                            </tr>
							</tbody>
						</table>
					</div>
                </div>
                <!-- :: close : ksg_5 : [진맛] 생산품의 상세정보 파트. 입력창 형식. -->
                <!-- :: open : ksg_5 : [진맛] 생산품의 상세정보 파트. 입력창 형식. -->
				<div class="specInfoGroup hide">
					<div class="conGroup verticalManageSort">
						<div class="headLineBox listControlSort">
                            <div class="titleBox inlistConSort">
								<div class="titleText">직원 목록</div>
							</div>
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
												<option>직원명</option>
												<option>직원코드</option>
											</select>
											<input class="tbox searchInput topLineSearchMod" name="dd" type="text" placeholder="검색어를 입력해주세요.">
										</td>
									</tr>
									<!-- <tr>
										<th>
											작업지시일
										</th>
										<td>
											<div class="dateInputCase topLineSearchMod">
												<input class="tbox dateBox shortMod" id="startDate" readonly="" placeholder="시작일">
											</div>
											<div class="betweenWaveText">~</div>
											<div class="dateInputCase topLineSearchMod">
												<input class="tbox dateBox shortMod" id="endDate" readonly="" placeholder="종료일">
											</div>
										</td>
									</tr> -->
								</tbody>
							</table>
                    		<div class="btnGroup verticalBottomSort inTblSort">
                    		    <a href="javascript:void(0);" class="btn singleSearchMod">검색</a>
                    		</div>	
						</div>
						<table class="infoGroup txtCSort">
							<colgroup>
								<col style="width : 100px;">
								<col style="width : 100px;">
								<col style="width : 100px;">
                                <col style="width : 100px;">
                                <col style="width : 150px;">
                                <col style="width : 250px;">
								<col style="width : 70px;">
							</colgroup>
							<thead>
							<tr>
								<th>
									<div>직원명</div>
									<div>(직원코드)</div>
                                </th>
                                <th>아이디</th>
                                <th>비밀번호</th>
								<th>사용여부</th>
								<th>이체정보</th>
								<th>적요</th>
								<th>관리</th>
							</tr>
							</thead>
							<tbody>
							<!-- :: open : ksg_4 : [진맛] 테이블에 등록하는 파트. -->
							<tr>
								<td>
									<div>
										<input class="tbox regFullSort listMod" placeholder="직원명" value="">
									</div>
									<div class="mt2">
										<input class="tbox regFullSort listMod" placeholder="직원코드" value="">
									</div>
								</td>
								<td>
									<input class="tbox regFullSort listMod" placeholder="아이디" value="">
								</td>
								<td>
									<input class="tbox regFullSort listMod" placeholder="비밀번호" value="">
								</td>
								<td>
                                    <select class="sbox regFullSort">
								    	<option>사용</option>
								    	<option>미사용</option>
								    </select>
                                </td>
                                <td>
                                    <div>
                                        <input class="tbox regFullSort listMod" placeholder="은행명" value="">
                                    </div>
									<div class="mt2">
                                        <input class="tbox regFullSort listMod" placeholder="카드/계좌번호" value="">
                                    </div>
                                    <div>
                                        <input class="tbox regFullSort listMod" placeholder="소유주" value="">
                                    </div>
                                </td>
                                <td>
									<input class="tbox regFullSort listMod" placeholder="적요" value="">
                                </td>
								<td>
									<div class="btnGroup inListTable">
										<a href="javascript:void(0);" class="btn regSort">등록</a>
									</div>
								</td>
							</tr>
							<!-- :: close : ksg_4 : [진맛] 테이블에 등록하는 파트. -->
							<tr>
								<td>
									<div>
										<input class="tbox regFullSort listMod" placeholder="직원명" value="곽팀장">
									</div>
									<div class="mt2">
										<input class="tbox regFullSort listMod" placeholder="직원코드" value="0101011">
									</div>
								</td>
								<td>
									<input class="tbox regFullSort listMod" placeholder="아이디" value="drKwa">
								</td>
								<td>
									<input class="tbox regFullSort listMod" placeholder="비밀번호" value="sdd***">
								</td>
								<td>
                                    <select class="sbox regFullSort">
								    	<option selected="">사용</option>
								    	<option>미사용</option>
								    </select>
                                </td>
                                <td>
                                    <div>
                                        <input class="tbox regFullSort listMod" placeholder="은행명" value="우리은행">
                                    </div>
									<div class="mt2">
                                        <input class="tbox regFullSort listMod" placeholder="카드/계좌번호" value="1000-111-123123">
                                    </div>
                                    <div>
                                        <input class="tbox regFullSort listMod" placeholder="소유주" value="곽팀장">
                                    </div>
                                </td>
                                <td>
									<input class="tbox regFullSort listMod" placeholder="적요" value="곽팀장 직원 정보1">
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
                </div>
                <!-- :: close : ksg_5 : [진맛] 생산품의 상세정보 파트. 입력창 형식. -->
            </div>
            <!-- :: close : ksg_2 : [진맛] 우측 테이블 구조. -->
		</div>
	</div>
</div>
<!-- :: open : ksg_3 : [진맛] 재고이동 팝업. -->
<div class="popup centerSort moveStockPop">
	<div class="popupCon wideSort">
		<a href="javascript:closePop()">
			<img src="/common/img/close.png" class="close">
		</a>
		<div class="titleBox popupSort">
			항목 관리
		</div>
		<div class="conGroup verticalManageSort">
			<table class="infoGroup">
				<colgroup>
					<col style="width : 100px;">
					<col style="width : 1000px;">
				</colgroup>
				<tbody>
				<tr>
					<th>지역</th>
					<td>
						<select class="sbox regFullSort">
							<option>-선택-</option>
							<option>서울</option>
							<option>경기</option>
						</select>
					</td>
				</tr>
				<tr>
					<th>이동할 창고</th>
					<td>
						<select class="sbox regFullSort">
							<option>-선택-</option>
							<option>서울</option>
							<option>경기</option>
						</select>
					</td>
				</tr>
                <tr>
					<th>이동 수량</th>
					<td>
						<input class="tbox regFullSort listMod" placeholder="" value="">
					</td>
				</tr>
				<tr>
					<th>메모</th>
					<td>
						<input class="tbox regFullSort listMod" placeholder="" value="">
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
<!-- :: close : ksg_3 : [진맛] 재고이동 팝업. -->
<!-- :: open : ksg_20210127_1650 : [진맛] 히스토리 팝업 내용. -->
<div class="popup centerSort historyPop">
	<div class="popupCon wideSort">
		<a href="javascript:closePop()">
			<img src="/common/img/close.png" class="close">
		</a>
		<div class="titleBox popupSort">
			재고 변경 내역
		</div>
		<div class="conGroup verticalManageSort">
			<table class="infoGroup noneImgSort">
				<tbody>
					<tr>
						<td>
							<div class="inTblTitleBox">재고변경(경남창고1)</div>
                            <div class="inTblInfoBox materialSort">
                                <span class="infoWord">바코드1</span>
                                <span class="infoWord">제품명1</span>
                                <span class="infoWord">품번1</span>
                                <span class="infoWord">카테고리1</span>
                                <div class="stockCounter f_blue">변경수량 : 450 → 500</div>
                            </div>
                            <a href="javascript:void(0);" class="linkCover"></a>
						</td>
                    </tr>
                    <tr>
						<td>
                            <div class="inTblTitleBox">재고이동(서울창고 → 경남창고1)</div>
                            <div class="inTblInfoBox materialSort">
                                <span class="infoWord">바코드1</span>
                                <span class="infoWord">제품명1</span>
                                <span class="infoWord">품번1</span>
                                <span class="infoWord">카테고리1</span>
                                <div class="stockCounter f_blue">이동 수량 : 250</div>
                            </div>
                            <a href="javascript:void(0);" class="linkCover"></a>
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
<!-- :: close : ksg_20210127_1650 : [진맛] 히스토리 팝업 내용. -->
<script src="/common/js/datePick.js"></script>
<script>
// :: open : ksg_7 : [진맛] "하위 부서" 버튼을 누르면 해당 항목의 자식 리스트(하위 카테고리 목록)가 표시/숨김 되게 하는 스크립트.
$(document).on('click', '.cateInfoCase .infoBox.controlSort .btn.modifySort', function(){
	$(this).closest('.cateInfoCase').siblings('.innerCateList').toggleClass('hide');
});
// :: close : ksg_7 : [진맛] "하위 부서" 버튼을 누르면 해당 항목의 자식 리스트(하위 카테고리 목록)가 표시/숨김 되게 하는 스크립트.


// :: open : ksg_b021ja27_19b6 : [진맛] 4차 부서를 클릭하면 우측 테이블에 직원 목록이 표시되게 하는 스크립트.
$(document).on('click', '.cateListGroup .cateCover', function(){
    $('.specInfoGroup.hide').removeClass('hide');
    $('.specInfoGroup').next('.btnGroup.horizontalBottomSort').removeClass('hide');
	$('.specRegGroup').addClass('hide');
	$(this).siblings('tr').removeClass('activated');
	$(this).addClass('activated');
});
// :: close : ksg_b021ja27_19b6 : [진맛] 4차 부서를 클릭하면 우측 테이블에 직원 목록이 표시되게 하는 스크립트.


</script>
</body>
</html>