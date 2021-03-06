<!-- :: ksg_5 = ksg_20210117_1805 -->
<!-- :: ksg_4 = ksg_20210112_2039 -->
<!-- :: ksg_3 = ksg_20210112_1604 -->
<!-- :: ksg_2 = ksg_20210109_1554 -->
<!-- :: ksg_1 = ksg_20210108_1930 -->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/pages/head.php';
    $tCode					=	'099';
	$lCode					=	'0101-1';
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
							<!-- :: single : ksg_4 : [진맛] 등록 페이지로 이동하는 버튼 있던 곳. -->
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
						<table class="infoGroup txtCSort">
						<colgroup>
							<col style="width : 100px;">
							<col style="width : 70px;">
							<col style="width : 70px;">
							<col style="width : 70px;">
							<col style="width : 70px;">
							<col style="width : 70px;">
							<col style="width : 90px;">
							<col style="width : 50px;">
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
                            <th>기준Kg</th>
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
								<input class="tbox regFullSort listMod" placeholder="기준Kg" value="">
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
							</td>
							<!-- :: open : ksg_4 : [진맛] 품질 팝업을 띄우는 버튼. -->
							<!-- <td>
								<div class="btnGroup inListTable">
									<a href="javascript:void(0);" class="btn modifySort popQualMod">품질</a>
								</div>
							</td> -->
							<!-- :: close : ksg_4 : [진맛] 품질 팝업을 띄우는 버튼. -->
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
						<tr class="reged">
							<!-- :: open : ksg_5 : [진맛] 하위 정보 테이블이 존재할 경우 rowspan을 사용하여 "품종명" 항목을 수직으로 길게 늘리는 내용. -->
							<td rowspan="2">
								<div>
									<input class="tbox regFullSort listMod" placeholder="품종명" value="부민">
								</div>
								<div class="mt2">
									<input class="tbox regFullSort listMod" placeholder="품종코드" value="A1235123">
								</div>
							</td>
							<!-- :: close : ksg_5 : [진맛] 하위 정보 테이블이 존재할 경우 rowspan을 사용하여 "품종명" 항목을 수직으로 길게 늘리는 내용. -->
							<td>
								<div class="imgBgCase">
                                	<img src="/common/img/icon_status_topaz.png" class="img inTblSmSort">
								</div>
							</td>
							<td>
								<input class="tbox regFullSort listMod" placeholder="규격" value="3kg">
                            </td>
                            <td>
								<input class="tbox regFullSort listMod" placeholder="기준Kg" value="">
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
							<!-- <td>
								<div class="btnGroup inListTable">
									<a href="javascript:void(0);" class="btn modifySort popQualMod">품질</a>
								</div>
							</td> -->
							<td>
								<input class="tbox regFullSort listMod" placeholder="비고" value="수박 품종 1 부민">
							</td>
							<!-- :: open : ksg_5 : [진맛] 하위 정보 테이블이 존재할 경우 rowspan을 사용하여 "관리" 항목이 수직으로 늘어나게 하는 내용. -->
							<td rowspan="2">
								<div class="btnGroup inListTable">
									<a href="/rawMat/rawMatSpec" class="btn modifySort">저장</a>
								</div>
							</td>
							<!-- :: close : ksg_5 : [진맛] 하위 정보 테이블이 존재할 경우 rowspan을 사용하여 "관리" 항목이 수직으로 늘어나게 하는 내용. -->
						</tr>
						<!-- :: open : ksg_5 : [진맛] 우측 테이블 항목의 내부 항목 파트. 달리 방법이 없으므로, 별도의 tr 태그를 사용하도록 함. -->
						<tr class="subTrSort">
							<td colspan="8">
								<!-- :: open : ksg_5 : [진맛] 내부 항목 파트. 형태는 일반적인 테이블과 유사하나, div를 이용한 구조로 되어 있음. -->
								<div class="mockingTbl subStgSetSort">
									<div class="mockingTHead">
										<div class="mockingTr">
											<div class="mockingTd fstSort highMod">
												<div>단계1</div>
												<div>단계코드</div>
											</div>
											<div class="mockingTd sndSort highMod">
												<div>단계2</div>
												<div>단계코드</div>
											</div>
											<div class="mockingTd thrdSort">규격</div>
											<div class="mockingTd frthSort">기준Kg</div>
											<div class="mockingTd fifSort">출고단가</div>
											<div class="mockingTd sixSort">사용여부</div>
											<div class="mockingTd sevSort">비고</div>
											<div class="mockingTd egthSort">관리</div>
										</div>
									</div>
									<div class="mockingTBody">
										<div class="mockingTr">
											<div class="mockingTd fstSort highMod">
												<div>
													<input class="tbox regFullSort listMod" placeholder="단계1" value="">
												</div>
												<div class="mt2">
													<input class="tbox regFullSort listMod" placeholder="단계코드" value="">
												</div>
											</div>
											<div class="mockingTd sndSort highMod">
												<div>
													<input class="tbox regFullSort listMod" placeholder="단계2" value="">
												</div>
												<div class="mt2">
													<input class="tbox regFullSort listMod" placeholder="단계코드" value="">
												</div>
											</div>
											<div class="mockingTd thrdSort">
												<input class="tbox regFullSort listMod" placeholder="규격" value="">
											</div>
											<div class="mockingTd frthSort">
												<input class="tbox regFullSort listMod" placeholder="기준Kg" value="">
											</div>
											<div class="mockingTd fifSort">
												<input class="tbox regFullSort listMod" placeholder="출고단가" value="">
											</div>
											<div class="mockingTd sixSort">
												<select class="sbox regFullSort">
													<option>사용</option>
													<option>미사용</option>
												</select>
											</div>
											<div class="mockingTd sevSort">
												<input class="tbox regFullSort listMod" placeholder="비고" value="">
											</div>
											<div class="mockingTd egthSort">
												<div class="btnGroup inListTable">
													<a href="javascript:void(0);" class="btn regSort">등록</a>
												</div>
											</div>
										</div>
										<div class="mockingTr">
											<div class="mockingTd fstSort highMod">
												<div>
													<input class="tbox regFullSort listMod" placeholder="단계1" value="">
												</div>
												<div class="mt2">
													<input class="tbox regFullSort listMod" placeholder="단계코드" value="">
												</div>
											</div>
											<div class="mockingTd sndSort highMod">
												<div>
													<input class="tbox regFullSort listMod" placeholder="단계2" value="">
												</div>
												<div class="mt2">
													<input class="tbox regFullSort listMod" placeholder="단계코드" value="">
												</div>
											</div>
											<div class="mockingTd thrdSort">
												<input class="tbox regFullSort listMod" placeholder="규격" value="">
											</div>
											<div class="mockingTd frthSort">
												<input class="tbox regFullSort listMod" placeholder="기준Kg" value="">
											</div>
											<div class="mockingTd fifSort">
												<input class="tbox regFullSort listMod" placeholder="출고단가" value="">
											</div>
											<div class="mockingTd sixSort">
												<select class="sbox regFullSort">
													<option>사용</option>
													<option>미사용</option>
												</select>
											</div>
											<div class="mockingTd sevSort">
												<input class="tbox regFullSort listMod" placeholder="비고" value="">
											</div>
											<div class="mockingTd egthSort">
												<div class="btnGroup inListTable">
													<a href="javascript:void(0);" class="btn modifySort">저장</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- :: close : ksg_5 : [진맛] 내부 항목 파트. 형태는 일반적인 테이블과 유사하나, div를 이용한 구조로 되어 있음. -->
							</td>
						</tr>
						<!-- :: close : ksg_5 : [진맛] 우측 테이블 항목의 내부 항목 파트. 달리 방법이 없으므로, 별도의 tr 태그를 사용하도록 함. -->
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
					<!-- :: single : ksg_4 : [진맛] 우측 하단의 창고별 재고 확인 테이블 내용 있던 곳. -->
				</div>
				<!-- :: close : ksg_3 : [진맛] 좌측 테이블과 유사한 구조의, 우측 상품 상세정보 내용. -->
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
$(document).on('click', '.conGroup.verticalManageSort tr.reged', function(){
    $('.specInfoGroup.hide').removeClass('hide');
    $('.specInfoGroup').next('.btnGroup.horizontalBottomSort').removeClass('hide');
	$('.specRegGroup').addClass('hide');
	$(this).siblings('tr').removeClass('activated');
	$(this).addClass('activated');
});
// :: close : ksg_4 : [진맛] 원자재 목록 중, 등록된 테이블 라인(class="reged")가 있는 곳만, 클릭했을 때 우측 상세정보가 표시되도록 하는 스크립트.
// :: open : ksg_4 : [진맛] 품종 리스트의 "품질" 버튼 클릭 시, 품질 팝업창 표시하는 스크립트.
$(document).on('click', '.btn.popQualMod', function(){
	$('.popup.centerSort.qualitypop').show();
	$('.contents').addClass('overlay');
});
// :: close : ksg_4 : [진맛] 품종 리스트의 "품질" 버튼 클릭 시, 품질 팝업창 표시하는 스크립트.


</script>
</body>
</html>