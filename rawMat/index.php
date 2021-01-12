<!-- :: ksg_4 = ksg_20210112_2039 -->
<!-- :: ksg_3 = ksg_20210112_1604 -->
<!-- :: ksg_2 = ksg_20210109_1554 -->
<!-- :: ksg_1 = ksg_20210108_1930 -->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/pages/head.php';
	$lCode					=	'0100';
?>
<body>
<div class="container">
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/common/pages/header.php'; ?>
    <!-- :: open : ksg_1 : [진맛] 좌측메뉴 파트. -->
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/rawMat/pages/rawMat_left.php'; ?>
	<!-- :: close : ksg_1 : [진맛] 좌측메뉴 파트. -->
	<div class="wrapper">
		<div class="contents">
            <!-- :: open : ksg_2 : [진맛] 원자재 검색 파트. 여기서는 테이블 내 검색창을 쓰므로, 이것은 display : none 처리. -->
			<div class="section horizontalManageSort searcManageSort topLineMod" style="display : none;">
				<div class="titleBox manageHeadlineSort">직원검색</div>
				<div class="conGroup verticalManageSort">
					<table class="searchGroup">
						<colgroup>
							<col width="70">
							<col width="*">
							<col width="70">
							<col width="*">
						</colgroup>
						<tbody>
							<tr>
								<th>검색어</th>
								<td>
									<select class="sbox">
										<option>전체</option>
										<option>품목명</option>
										<option>품목코드</option>
										<option>바코드번호</option>
									</select>
									<input class="tbox searchInput topLineSearchMod" name="dd" type="text" placeholder="검색어를 입력해주세요.">
								</td>
								<th>
									생산일
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
							</tr>
							<tr>
								<th>
									입고단가
								</th>
								<td>
									<input class="tbox prcShortMod onlyNum">
									<div class="betweenWaveText">~</div>
									<input class="tbox prcShortMod onlyNum">
								</td>
								<th>
									출고단가
								</th>
								<td>
									<input class="tbox prcShortMod onlyNum">
									<div class="betweenWaveText">~</div>
									<input class="tbox prcShortMod onlyNum">
								</td>
							</tr>
						</tbody>
					</table>
					<!-- :: open : ksg_2 : [진맛] 테이블 밖에 배치되는 "검색" 버튼.. -->
                    <div class="btnGroup verticalBottomSort">
                        <a href="javascript:void(0);" class="btn singleSearchMod">검색</a>
                    </div>
                    <!-- :: close : ksg_2 : [진맛] 테이블 밖에 배치되는 "검색" 버튼.. -->
				</div>
            </div>
            <!-- :: close : ksg_2 : [진맛] 원자재 검색 파트. 여기서는 테이블 내 검색창을 쓰므로, 이것은 display : none 처리. -->
			<!-- :: open : ksg_3 : [진맛] 테이블 병렬일 때의 총괄 컨트롤 박스 파트. -->
			<div class="headLineBox pageControlSort">
                <a href="javascript:void(0);" class="btn listTopSort addStaffBtn">엑셀저장</a>
				<a href="javascript:void(0);" class="btn listTopSort addStaffBtn">인쇄</a>
			</div>
			<!-- :: close : ksg_3 : [진맛] 테이블 병렬일 때의 총괄 컨트롤 박스 파트. -->
            <!-- :: close : ksg_2 : [진맛] 입력창 / 검색버튼 / 추가버튼이 포함된 검색어 파트. -->
			<div class="section horizontalManageSort searcManageSort AsymDoub1">
				<div class="titleBox manageHeadlineSort">원자재 품목</div>
				<div class="conGroup verticalManageSort bottomRowSort">
					<div class="headLineBox listControlSort">
						<!-- <div class="selectGroup monthSort">
							<select>
								<option selected>2020년</option>
								<option >2019년</option>
								<option >2018년</option>
								<option >2017년</option>
							</select>
							<select>
								<option selected>6월</option>
								<option >5월</option>
								<option >4월</option>
								<option >3월</option>
							</select>
						</div> -->
						<!-- :: open : ksg_4 : [진맛] 테이블 내의 검색어 파트. -->
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
											<option>품목명</option>
											<option>품목코드</option>
											<option>품종</option>
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
							<div class="titleText">원자재 품목</div>
							<!-- :: open : ksg_4 : [진맛] 등록 페이지로 이동하는 버튼. 여기서는 테이블 내에서 내용을 바로 등록할 것이므로, 이것은 display : none 처리. -->
							<a href="/rawMat/rawMatSpec" class="btn headRightAbMod addPlanBtn" style="display : none;">원자재 추가</a>
							<!-- :: close : ksg_4 : [진맛] 등록 페이지로 이동하는 버튼. 여기서는 테이블 내에서 내용을 바로 등록할 것이므로, 이것은 display : none 처리. -->
						</div>
						<div class="sboxGroup listArraySort">
							<select class="sbox">
								<option>번호순▼</option>
								<option>번호순▲</option>
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
							<col style="width : 200px;">
							<col style="width : 70px;">
							<col style="width : 90px;">
							<col style="width : 90px;">
							<col style="width : 60px;">
						</colgroup>
						<thead>
						<tr>
							<th>
								품목명<br>
								(품목코드)
							</th>
							<th>이미지</th>
                            <th>바코드</th>
							<th>사용여부</th>
							<th>관리</th>
						</tr>
						</thead>
						<tbody>
						<!-- :: open : ksg_4 : [진맛] 테이블에 등록하는 파트. -->
						<tr>
							<td>
								<div>
									<input class="tbox regFullSort listMod" placeholder="품목명" value="">
								</div>
								<div class="mt2">
									<input class="tbox regFullSort listMod" placeholder="품목번호" value="">
								</div>
							</td>
							<td>
								<div class="imgUploadBox">
									<input type="file" class="hide" accept="image/*" name="img_1" onchange="img_sel(this, event)">
									<a href="javascript:void(0);" class="upload_btn" onclick="img_upload(this);"></a>
								</div>
							</td>
							<td>
								<div class="imgUploadBox">
									<input type="file" class="hide" accept="image/*" name="img_1" onchange="img_sel(this, event)">
									<a href="javascript:void(0);" class="upload_btn" onclick="img_upload(this);"></a>
								</div>
								<div class="mt2">
									<input class="tbox regFullSort listMod" placeholder="바코드번호" value="">
								</div>
							</td>
							<td>
								<!-- :: open : ksg_4 : [진맛] 사용/미사용 드롭박스 내용. -->
								<select class="sbox regFullSort">
									<option>사용</option>
									<option>미사용</option>
								</select>
								<!-- :: close : ksg_4 : [진맛] 사용/미사용 드롭박스 내용. -->
								<!-- :: open : ksg_4 : [진맛] 사용/미사용 라디오박스 파트. 여기서는 드롭박스를 사용할 것이므로, 이것은 display : none 처리. -->
								<div class="inTableRadioGroup" style="display : none;">
									<div class="radioCase">
										<div class="radioIconBox">
											<input type="radio" name="matList_2" value="1" checked="">
											<label></label>
										</div>
										<div class="radioTitle">사용</div>
									</div>
									<div class="radioCase">
										<div class="radioIconBox">
											<input type="radio" name="matList_2" value="2">
											<label></label>
										</div>
										<div class="radioTitle">미사용</div>
									</div>
								</div>
								<!-- :: close : ksg_4 : [진맛] 사용/미사용 라디오박스 파트. 여기서는 드롭박스를 사용할 것이므로, 이것은 display : none 처리. -->
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
									<input class="tbox regFullSort listMod" placeholder="품목명" value="수박">
								</div>
								<div class="mt2">
									<input class="tbox regFullSort listMod" placeholder="품목번호" value="24555111">
								</div>
							</td>
							<td>
								<div class="imgBgCase">
									<img src="/common/img/icon_status_topaz.png" class="img inTblSmSort">
								</div>
							</td>
							<td>
								<div class="imgBgCase">
									<img src="/common/img/icon_status_topaz.png" class="img inTblSmSort">
								</div>
								<div class="mt2">
									<input class="tbox regFullSort listMod" placeholder="바코드번호" value="A1133451">
								</div>
							</td>
							<td>
								<!-- :: open : ksg_4 : [진맛] 사용/미사용 드롭박스 내용. -->
								<select class="sbox regFullSort">
									<option>사용</option>
									<option>미사용</option>
								</select>
								<!-- :: close : ksg_4 : [진맛] 사용/미사용 드롭박스 내용. -->
								<!-- :: open : ksg_4 : [진맛] 사용/미사용 라디오박스 파트. 여기서는 드롭박스를 사용할 것이므로, 이것은 display : none 처리. -->
								<div class="inTableRadioGroup" style="display : none;">
									<div class="radioCase">
										<div class="radioIconBox">
											<input type="radio" name="matList_2" value="1" checked="">
											<label></label>
										</div>
										<div class="radioTitle">사용</div>
									</div>
									<div class="radioCase">
										<div class="radioIconBox">
											<input type="radio" name="matList_2" value="2">
											<label></label>
										</div>
										<div class="radioTitle">미사용</div>
									</div>
								</div>
								<!-- :: close : ksg_4 : [진맛] 사용/미사용 라디오박스 파트. 여기서는 드롭박스를 사용할 것이므로, 이것은 display : none 처리. -->
							</td>
							<td>
								<div class="btnGroup inListTable">
									<a href="javascript:void(0);" class="btn modifySort">저장</a>
								</div>
							</td>
						</tr>
						<tr class="reged">
							<td>
								<div>
									<input class="tbox regFullSort listMod" placeholder="품목명" value="사과">
								</div>
								<div class="mt2">
									<input class="tbox regFullSort listMod" placeholder="품목번호" value="31224455">
								</div>
							</td>
							<td>
								<div class="imgBgCase">
									<img src="/common/img/icon_status_topaz.png" class="img inTblSmSort">
								</div>
							</td>
							<td>
								<div class="imgBgCase">
									<img src="/common/img/icon_status_topaz.png" class="img inTblSmSort">
								</div>
								<div class="mt2">
									<input class="tbox regFullSort listMod" placeholder="바코드번호" value="A1133451">
								</div>
							</td>
							<td>
								<!-- :: open : ksg_4 : [진맛] 사용/미사용 드롭박스 내용. -->
								<select class="sbox regFullSort">
									<option>사용</option>
									<option>미사용</option>
								</select>
								<!-- :: close : ksg_4 : [진맛] 사용/미사용 드롭박스 내용. -->
								<!-- :: open : ksg_4 : [진맛] 사용/미사용 라디오박스 파트. 여기서는 드롭박스를 사용할 것이므로, 이것은 display : none 처리. -->
								<div class="inTableRadioGroup" style="display : none;">
									<div class="radioCase">
										<div class="radioIconBox">
											<input type="radio" name="matList_2" value="1" checked="">
											<label></label>
										</div>
										<div class="radioTitle">사용</div>
									</div>
									<div class="radioCase">
										<div class="radioIconBox">
											<input type="radio" name="matList_2" value="2">
											<label></label>
										</div>
										<div class="radioTitle">미사용</div>
									</div>
								</div>
								<!-- :: close : ksg_4 : [진맛] 사용/미사용 라디오박스 파트. 여기서는 드롭박스를 사용할 것이므로, 이것은 display : none 처리. -->
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
				<!-- :: open : ksg_3 : [진맛] 좌측 테이블과 유사한 구조의, 우측 상품 상세정보 내용. -->
				<div class="specInfoGroup hide">
					<div class="conGroup verticalManageSort">
						<div class="headLineBox listControlSort">
							<!-- :: open : ksg_4 : [진맛] 테이블 내의 검색어 파트. -->
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
												<option>품목명</option>
												<option>품목코드</option>
												<option>품종</option>
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
								<div class="titleText">원자재 상세정보</div>
							</div>
						</div>
						<table class="infoGroup txtCSort">
						<colgroup>
							<col style="width : 100px;">
							<col style="width : 70px;">
							<col style="width : 70px;">
							<col style="width : 70px;">
							<col style="width : 70px;">
							<col style="width : 70px;">
							<col style="width : 90px;">
							<col style="width : 200px;">
							<col style="width : 50px;">
						</colgroup>
						<thead>
						<tr>
							<th>
								<div>품종명</div>
								<div>(품종코드)</div>
							</th>
							<th>이미지</th>
                            <th>규격</th>
							<th>바코드</th>
							<th>입고단가</th>
							<th>출고단가</th>
							<th>사용여부</th>
							<th>비고</th>
							<th>관리</th>
						</tr>
						</thead>
						<tbody>
						<!-- :: open : ksg_4 : [진맛] 테이블에 등록하는 파트. -->
						<tr>
							<td>
								<div>
									<input class="tbox regFullSort listMod" placeholder="품종명" value="">
								</div>
								<div class="mt2">
									<input class="tbox regFullSort listMod" placeholder="품종코드" value="">
								</div>
							</td>
							<td>
								<div class="imgUploadBox">
									<input type="file" class="hide" accept="image/*" name="img_1" onchange="img_sel(this, event)">
									<a href="javascript:void(0);" class="upload_btn" onclick="img_upload(this);"></a>
								</div>
							</td>
							<td>
								<input class="tbox regFullSort listMod" placeholder="규격" value="">
							</td>
							<td>
								<div class="imgUploadBox">
									<input type="file" class="hide" accept="image/*" name="img_1" onchange="img_sel(this, event)">
									<a href="javascript:void(0);" class="upload_btn" onclick="img_upload(this);"></a>
								</div>
								<div class="mt2">
									<input class="tbox regFullSort listMod" placeholder="바코드번호" value="">
								</div>
							</td>
							<td>
								<input class="tbox regFullSort listMod" placeholder="입고단가" value="">
							</td>
							<td>
								<input class="tbox regFullSort listMod" placeholder="출고단가" value="">
							</td>
							<td>
								<!-- :: open : ksg_4 : [진맛] 사용/미사용 드롭박스 내용. -->
								<select class="sbox regFullSort">
									<option>사용</option>
									<option>미사용</option>
								</select>
								<!-- :: close : ksg_4 : [진맛] 사용/미사용 드롭박스 내용. -->
								<!-- :: open : ksg_4 : [진맛] 사용/미사용 라디오박스 파트. 여기서는 드롭박스를 사용할 것이므로, 이것은 display : none 처리. -->
								<div class="inTableRadioGroup" style="display : none;">
									<div class="radioCase">
										<div class="radioIconBox">
											<input type="radio" name="matList_2" value="1" checked="">
											<label></label>
										</div>
										<div class="radioTitle">사용</div>
									</div>
									<div class="radioCase">
										<div class="radioIconBox">
											<input type="radio" name="matList_2" value="2">
											<label></label>
										</div>
										<div class="radioTitle">미사용</div>
									</div>
								</div>
								<!-- :: close : ksg_4 : [진맛] 사용/미사용 라디오박스 파트. 여기서는 드롭박스를 사용할 것이므로, 이것은 display : none 처리. -->
							</td>
							<td>
								<input class="tbox regFullSort listMod" placeholder="비고" value="">
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
									<input class="tbox regFullSort listMod" placeholder="품종명" value="부민">
								</div>
								<div class="mt2">
									<input class="tbox regFullSort listMod" placeholder="품종코드" value="A1235123">
								</div>
							</td>
							<td>
								<div class="imgBgCase">
                                	<img src="/common/img/icon_status_topaz.png" class="img inTblSmSort">
								</div>
							</td>
							<td>
								<input class="tbox regFullSort listMod" placeholder="규격" value="3kg">
							</td>
							<td>
                                <div class="imgBgCase">
                                	<img src="/common/img/icon_status_topaz.png" class="img inTblSmSort">
								</div>
								<div class="mt2">
									<input class="tbox regFullSort listMod" placeholder="바코드번호" value="B10103401">
								</div>
							</td>
							<td>
								<input class="tbox regFullSort listMod" placeholder="입고단가" value="45,000">
							</td>
							<td>
								<input class="tbox regFullSort listMod" placeholder="출고단가" value="55,000">
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
								<input class="tbox regFullSort listMod" placeholder="비고" value="수박 품종 1 부민">
							</td>
							<td>
								<div class="btnGroup inListTable">
									<a href="/rawMat/rawMatSpec" class="btn modifySort">저장</a>
								</div>
							</td>
						</tr>
						</tbody>
						</table>
					</div>
					<!-- :: open : ksg_3 : [진맛] 우측 하단의 창고별 재고 확인 테이블 내용. 여기서는 사용하지 않을 것이므로 display : none 처리. -->
					<div class="conGroup verticalManageSort" style="display : none;">
						<div class="headLineBox listControlSort">
							<div class="titleBox inlistConSort">
								<div class="titleText">창고 정보</div>
							</div>
						</div>
						<table class="infoGroup">
							<colgroup>
								<col style="width : 50px;">
								<col style="*">
							</colgroup>
							<tbody>
								<tr>
									<th class="flatImgSort">
                                        <div class="imgBgCase">
                                            <img src="/common/img/icon_status_topaz.png" class="img inTblSmSort">
                                        </div>
                                    </th>
									<td>
                                        <div class="inTblTitleBox">수박창고1</div>
                                        <div class="inTblInfoBox materialSort">
                                            <span class="infoWord">경기도 성남시</span>
                                            <div class="stockCounter f_blue">150</div>
                                        </div>
                                        <a href="javascript:void(0);" class="linkCover"></a>
									</td>
                                </tr>
                                <tr>
									<th class="flatImgSort">
                                        <div class="imgBgCase">
                                            <img src="/common/img/icon_status_topaz.png" class="img inTblSmSort">
                                        </div>
                                    </th>
									<td>
                                        <div class="inTblTitleBox">수박창고2</div>
                                        <div class="inTblInfoBox materialSort">
                                            <span class="infoWord">충남 연기군</span>
                                            <div class="stockCounter f_blue">100</div>
                                        </div>
                                        <a href="javascript:void(0);" class="linkCover"></a>
									</td>
                                </tr>
							</tbody>
						</table>
					</div>
					<!-- :: close : ksg_3 : [진맛] 우측 하단의 창고별 재고 확인 테이블 내용. 여기서는 사용하지 않을 것이므로 display : none 처리. -->
				</div>
				<!-- :: close : ksg_3 : [진맛] 좌측 테이블과 유사한 구조의, 우측 상품 상세정보 내용. -->
            </div>
            <!-- :: close : ksg_2 : [진맛] 우측 테이블 구조. -->
		</div>
	</div>
</div>
<script src="/common/js/exif-js.js"></script>
<script src="/common/js/imgSet.js"></script>
<script src="/common/js/datePick.js"></script>
<script>
// :: single : ksg_2 [진맛] 다른 작업물의 "상세보기 표시, 숨기기", "상세검색 표시, 숨기기." 스크립트 있던 곳.
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
    $('.specInfoGroup').next('.btnGroup.horizontalBottomSort').removeClass('hide');
	$('.specRegGroup').addClass('hide');
	$(this).siblings('tr').removeClass('activated');
	$(this).addClass('activated');
});
// :: close : ksg_4 : [진맛] 원자재 목록 중, 등록된 테이블 라인(class="reged")가 있는 곳만, 클릭했을 때 우측 상세정보가 표시되도록 하는 스크립트.
// :: single : ksg_2 [진맛] 다른 작업물의 "집행등록 버튼 클릭 시, 등록창 표시.", ""직원 추가" 버튼 클릭 시, 직원 추가 팝업 나타나는 스크립트.", "직원 추가 팝업창에서 "등록" 버튼 클릭 시, 팝업창 닫히는 스크립트.", "팝업창의 X 버튼 클릭 시, 팝업 닫기 스크립트." 있던 곳.
// :: single : ksg_2 : [진맛] 다른 작업물의 "팝업창 외부 클릭 시 팝업창 닫기 스크립트." 있던 곳.
</script>
</body>
</html>