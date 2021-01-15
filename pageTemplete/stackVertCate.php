<!-- :: ksg_7 = ksg_20210115_1132 -->
<!-- :: ksg_6 = ksg_20210114_1926 -->
<!-- :: ksg_5 = ksg_20210114_1446 -->
<!-- :: ksg_4 = ksg_20210112_2039 -->
<!-- :: ksg_3 = ksg_20210112_1604 -->
<!-- :: ksg_2 = ksg_20210109_1554 -->
<!-- :: ksg_1 = ksg_20210108_1930 -->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/pages/head.php';
    $tCode					=	'099';
	$lCode					=	'0106';
?>
<body>
<div class="container">
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/common/pages/header.php'; ?>
    <!-- :: open : ksg_1 : [진맛] 좌측메뉴 파트. -->
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/pageTemplete/pages/pageTemplete_left.php'; ?>
	<!-- :: close : ksg_1 : [진맛] 좌측메뉴 파트. -->
	<div class="wrapper">
		<div class="contents">
			<!-- :: single : ksg_4 : [진맛] 원자재 검색 파트 있던 곳. -->
			<!-- :: open : ksg_3 : [진맛] 테이블 병렬일 때의 총괄 컨트롤 박스 파트. -->
			<div class="headLineBox pageControlSort">
                <a href="javascript:void(0);" class="btn listTopSort addStaffBtn">엑셀저장</a>
				<a href="javascript:void(0);" class="btn listTopSort addStaffBtn">인쇄</a>
			</div>
			<!-- :: close : ksg_3 : [진맛] 테이블 병렬일 때의 총괄 컨트롤 박스 파트. -->
            <!-- :: open : ksg_5 : [진맛] 4배열 테이블 첫째 파트. -->
            <div class="section horizontalManageSort fullMod">
				<div class="titleBox manageHeadlineSort">1차 분류</div>
				<div class="conGroup verticalManageSort bottomRowSort">
					<div class="headLineBox listControlSort">
						<div class="titleBox inlistConSort">
							<div class="titleText">분류 목록</div>
                        </div>
                        <div class="tipBox mb15">* 상품에 적용 중인 분류는 삭제할 수 없습니다.</div>
					</div>
					<!-- :: open : ksg_6 : [진맛] 분류 리스트 파트. -->
					<div class="cateListGroup slightShortMod">
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
									<input class="tbox regFullSort listMod" placeholder="" value="">
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
											<input class="tbox regFullSort listMod" placeholder="" value="">
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
													<input class="tbox regFullSort listMod" placeholder="" value="">
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
															<input class="tbox regFullSort listMod" placeholder="" value="">
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
																<a href="javascript:void(0);" class="btn delSort">삭제</a>
															</div>
														</div>
														<!-- :: close : ksg_6 : [진맛] 4차 분류의 관리 파트. -->
													</div>
													<!-- :: close : ksg_6 : [진맛] 4차 분류의 자체 정보 파트(순서변경, 명칭, 사용여부, 삭제/하위분류추가 버튼) -->
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
            <!-- :: close : ksg_5 : [진맛] 4배열 테이블 첫째 파트. -->
		</div>
	</div>
</div>
<script>
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
</script>
</body>
</html>