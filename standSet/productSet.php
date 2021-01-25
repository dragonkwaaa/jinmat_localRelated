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
			<!-- :: open : ksg_3 : [진맛] 테이블 병렬일 때의 총괄 컨트롤 박스 파트. -->
			<div class="headLineBox pageControlSort">
                <a href="javascript:void(0);" class="btn listTopSort addStaffBtn">엑셀저장</a>
				<a href="javascript:void(0);" class="btn listTopSort addStaffBtn">인쇄</a>
			</div>
			<!-- :: close : ksg_3 : [진맛] 테이블 병렬일 때의 총괄 컨트롤 박스 파트. -->
            <!-- :: close : ksg_2 : [진맛] 입력창 / 검색버튼 / 추가버튼이 포함된 검색어 파트. -->
			<div class="section horizontalManageSort searcManageSort AsymDoub1">
				<div class="titleBox manageHeadlineSort">생산품 품목</div>
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
											<option>상품명</option>
											<option>상품코드</option>
											<option>생산지</option>
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
							<col style="width : 150px;">
							<col style="width : 70px;">
							<col style="width : 90px;">
							<col style="width : 150px;">
							<col style="width : 90px;">
							<col style="width : 60px;">
						</colgroup>
						<thead>
						<tr>
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
							</tr>
							<tr>
								<th>생산품 코드</th>
								<td>
									<input class="tbox regFullSort" value="" readonly>
								</td>
							</tr>
							<!-- :: open : ksg_5 : [진맛] 이미지 등록 파트. -->
							<tr>
								<th>이미지</th>
								<td>
									<div class="imgUploadBox">
										<input type="file" class="hide" accept="image/*" name="img_1" onchange="img_sel(this, event)">
										<a href="javascript:void(0);" class="upload_btn" onclick="img_upload(this);"></a>
									</div>
								</td>
							</tr>
                            <!-- :: close : ksg_5 : [진맛] 이미지 등록 파트. -->
							<tr>
								<th>기준 Kg</th>
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
								<th>생산지 형태</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
							</tr>
							<tr>
								<th>생산지명</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
							</tr>
							<tr>
								<th>생산지 주소</th>
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
								<th>비고</th>
								<td>
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
							<!-- :: open : ksg_4 : [진맛] 테이블 내의 검색어 파트. 생산물 리스트에서는 사용하지 않을 것이므로 display : none 처리. -->
							<table class="searchGroup inTblSort" style="display : none;">
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
							<!-- :: close : ksg_4 : [진맛] 테이블 내의 검색어 파트. 생산물 리스트에서는 사용하지 않을 것이므로 display : none 처리. -->
							<!-- :: open : ksg_5 : [진맛] 테이블 내의 "검색" 버튼 파트. 위와 마찬가지로 생산물 리스트에서는 사용하지 않을 것이므로 display : none 처리. -->
                    		<div class="btnGroup verticalBottomSort inTblSort" style="display : none;">
                    		    <a href="javascript:void(0);" class="btn singleSearchMod">검색</a>
                    		</div>
							<!-- :: close : ksg_5 : [진맛] 테이블 내의 "검색" 버튼 파트. 위와 마찬가지로 생산물 리스트에서는 사용하지 않을 것이므로 display : none 처리. -->
							<div class="titleBox inlistConSort">
								<div class="titleText">사용 원자재 목록</div>
								<div class="btnGroup inListTable">
									<a href="javascript:void(0);" class="btn wearingPopBtn">불러오기</a>
								</div>
							</div>
							<!-- :: open : ksg_5 : [진맛] 정렬 기준 파트. 위와 마찬가지로 생산물 리스트에서는 사용하지 않을 것이므로 display : none 처리. -->
							<div class="sboxGroup listArraySort" style="display : none;">
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
							<!-- :: close : ksg_5 : [진맛] 정렬 기준 파트. 위와 마찬가지로 생산물 리스트에서는 사용하지 않을 것이므로 display : none 처리. -->
						</div>
						<table class="infoGroup txtCSort">
						<colgroup>
							<col style="width : 80px;">
							<col style="width : 80px;">
							<col style="width : 70px;">
							<col style="width : 70px;">
							<col style="width : 70px;">
							<col style="width : 70px;">
							<col style="width : 70px;">
							<col style="width : 90px;">
							<col style="width : 70px;">
							<col style="width : 150px;">
							<col style="width : 50px;">
						</colgroup>
						<thead>
						<tr>
							<th>
								<div>원자재명</div>
								<div>(원자재코드)</div>
							</th>
							<th>
								품종<br>
								이미지
							</th>
                            <th>규격</th>
                            <th>기준Kg</th>
							<th>입고단가</th>
							<th>출고단가</th>
							<th>사용 양</th>
							<th>비고</th>
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
								<div class="imgBgCase">
                                	<img src="/common/img/icon_status_topaz.png" class="img inTblSmSort">
								</div>
							</td>
							<td>
								<input class="tbox regFullSort listMod" placeholder="규격" readonly value="3kg">
                            </td>
                            <td>
								<input class="tbox regFullSort listMod" placeholder="기준Kg" readonly value="">
							</td>
							<td>
								<input class="tbox regFullSort listMod" placeholder="입고단가" value="45,000">
							</td>
							<td>
								<input class="tbox regFullSort listMod" placeholder="출고단가" value="55,000">
							</td>
							<td>
								<input class="tbox regFullSort listMod" placeholder="사용 양" value="2">
							</td>
							<td> 
								<input class="tbox regFullSort listMod" placeholder="비고" value="수박 품종 1 부민">
							</td>
						</tr>
						</tbody>
						</table>  
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
<div class="popup centerSort wearingPop">
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
					<col width="*">
				</colgroup>
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
					<th>발주요청품목</th>
					<td>
                        <!-- :: open : ksg_3 : [진맛] 테이블 내에서 품목을 등록하는 병렬 내용 파트.. -->
                        <!-- :: open : ksg_3 : [진맛] 왼쪽 품목 검색 파트. -->
                        <div class="inTblBoxGroup twinSort wearingGoodsMod">
                            <!-- :: open : ksg_3 : [진맛] 품목을 검색하고 등록하는 파트. -->
                            <div class="inTblSchGroup">
                                <select class="sbox">
						    		<option>품목명</option>
						    		<option>품목코드</option>
						    	</select>
                                <input class="tbox searchInput inTblSort" placeholder="검색어를 입력해주세요.">
                                <div class="btnGroup inTableSearch">
					        		<a href="javascript:void(0);" class="btn searchSort">검색</a>
					        	</div>
                            </div>
                            <!-- :: close : ksg_3 : [진맛] 품목을 검색하고 등록하는 파트. -->
                            <!-- :: open : ksg_3 : [진맛] 검색 결과로 표시되는 내부 테이블 형식의 품목 목록 파트. -->
                            <div class="mockingTbl subStgSetSort">
								<div class="mockingTHead">
									<div class="mockingTr">
										<div class="mockingTd fstSort highMod">
											<div>품목명</div>
											<div>(품목코드)</div>
										</div>
										<div class="mockingTd sndSort highMod">
											<div>품종명</div>
											<div>(품종코드)</div>
										</div>
										<div class="mockingTd thrdSort">이미지</div>
										<div class="mockingTd frthSort">규격</div>
										<div class="mockingTd fifSort">수량</div>
										<div class="mockingTd sixSort">단가</div>
                                        <div class="mockingTd sevSort">공급가액</div>
                                        <div class="mockingTd egthSort">부가세</div>
									</div>
								</div>
								<div class="mockingTBody">
									<div class="mockingTr">
										<div class="mockingTd fstSort highMod">
											<div>
												사과1
											</div>
											<div class="mt2">
												(A101010)
											</div>
										</div>
										<div class="mockingTd sndSort highMod">
                                            <div>
                                                부사1
											</div>
											<div class="mt2">
												(B101010)
											</div>
										</div>
										<div class="mockingTd thrdSort">
											<div class="imgBgCase">
                                				<img src="/common/img/icon_status_topaz.png" class="img inTblSmSort">
											</div> 
										</div>
										<div class="mockingTd frthSort">
											24
										</div>
										<div class="mockingTd fifSort">
											450
										</div>
										<div class="mockingTd sixSort">
											4,500원
										</div>
										<div class="mockingTd sevSort">
											3,800원
                                        </div>
                                        <div class="mockingTd egthSort">
											380원
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
                                        <div class="mockingTd sevSort">
											<input class="tbox regFullSort listMod" placeholder="비고" value="">
										</div>
									</div>
								</div>
							</div>
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
                        <div class="inTblBoxGroup twinSort wearingGoodsMod">
                            <!-- :: open : ksg_3 : [진맛] 검색 결과로 표시되는 내부 테이블 형식의 품목 목록 파트. -->
                            <div class="mockingTbl subStgSetSort">
                                <div class="mockingTHead">
									<div class="mockingTr">
										<div class="mockingTd fstSort highMod">
											<div>품목명</div>
											<div>(품목코드)</div>
										</div>
										<div class="mockingTd sndSort highMod">
											<div>품종명</div>
											<div>(품종코드)</div>
										</div>
										<div class="mockingTd thrdSort">이미지</div>
										<div class="mockingTd frthSort">규격</div>
										<div class="mockingTd fifSort">수량</div>
										<div class="mockingTd sixSort">단가</div>
                                        <div class="mockingTd sevSort">공급가액</div>
                                        <div class="mockingTd egthSort">부가세</div>
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
											<input class="tbox regFullSort listMod" placeholder="비고" value="">
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
                                        <div class="mockingTd sevSort">
											<input class="tbox regFullSort listMod" placeholder="비고" value="">
										</div>
									</div>
								</div>
							</div>
                            <!-- :: close : ksg_3 : [진맛] 검색 결과로 표시되는 내부 테이블 형식의 품목 목록 파트. -->
                        </div>
                        <!-- :: close : ksg_3 : [진맛] 우측 선택된 품목 파트. -->
                        <!-- :: close : ksg_3 : [진맛] 테이블 내에서 품목을 등록하는 병렬 내용 파트.. -->
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

</script>
</body>
</html>