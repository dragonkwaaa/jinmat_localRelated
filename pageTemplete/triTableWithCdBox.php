<!-- :: ksg_4 = ksg_20210110_1659 -->
<!-- :: ksg_3 = ksg_20210109_2153 -->
<!-- :: ksg_2 = ksg_20210109_1554 -->
<!-- :: ksg_1 = ksg_20210108_1930 -->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/pages/head.php';
	$tCode					=	'099';
	$lCode					=	'0102';
?>
<body>
<div class="container">
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/common/pages/header.php'; ?>
    <!-- :: open : ksg_1 : [진맛] 좌측메뉴 파트. -->
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/pageTemplete/pages/pageTemplete_left.php'; ?>
	<!-- :: close : ksg_1 : [진맛] 좌측메뉴 파트. -->
	<div class="wrapper">
		<div class="contents">
            <!-- :: single : ksg_3 : [진맛] 검색어 파트 있던 곳. -->
			<div class="section horizontalManageSort searcManageSort extendMod">
                <div class="titleBox manageHeadlineSort">원자재목록</div>
                <!-- :: open : ksg_4 : [진맛] 좌측 테이블의 상품 리스트 파트. 여기서는 인풋창 계열의 내용을 쓸 것이므로 이것은 display none 처리 함. -->
				<div class="conGroup verticalManageSort bottomRowSort" style="display : none;">
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
						<div class="titleBox inlistConSort">
							<div class="titleText">원자재목록</div>
							<a href="javascript:void(0);" class="btn headRightAbMod addPlanBtn">원자재 추가</a>
						</div>
						<!-- <div class="sboxGroup listArraySort">
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
						</div> -->
					</div>
					<table class="searchResultTable ">
						<colgroup></colgroup>
						<thead>
						<tr>
							<th>No.</th>
							<th>직원명</th>
							<th>아이디</th>
                            <th>승인 등급</th>
							<th>사용여부</th>
							<th>관리</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td>
								<div>2</div>
							</td>
							<td>곽반장</td>
							<td>
								sinwon1
							</td>
                            <td>
								중간승인자
							</td>
							<td>
								<div class="inTableRadioGroup">
									<div class="radioCase">
										<div class="radioIconBox">
											<input type="radio" name="userUse" value="1" checked="">
											<label></label>
										</div>
										<div class="radioTitle">사용</div>
									</div>
									<div class="radioCase">
										<div class="radioIconBox">
											<input type="radio" name="userUse" value="2" checked="">
											<label></label>
										</div>
										<div class="radioTitle">미사용</div>
									</div>
								</div>
							</td>
							<td>
								<div class="btnGroup inListTable">
									<a href="javascript:void(0);" class="btn delSort">삭제</a>
								</div>
							</td>
						</tr>
						</tbody>
					</table>
                </div>
                <!-- :: close : ksg_4 : [진맛] 좌측 테이블의 상품 리스트 파트. 여기서는 인풋창 계열의 내용을 쓸 것이므로 이것은 display none 처리 함. -->
                <!-- :: open : ksg_4 : [진맛] 좌측 테이블의 페이징 파트. 여기서는 인풋창 계열의 내용을 쓸 것이므로 이것은 display none 처리 함.  -->
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
                <!-- :: close : ksg_4 : [진맛] 좌측 테이블의 페이징 파트. 여기서는 인풋창 계열의 내용을 쓸 것이므로 이것은 display none 처리 함.  -->
                <!-- :: open : ksg_4 : [진맛] 좌측 테이블의 인풋창 버전 파트.  -->
                <div class="specRegGroup">
					<div class="conGroup verticalManageSort">
						<div class="headLineBox listControlSort">
							<div class="titleBox inlistConSort">
								<div class="titleText">원자재 정보</div>
							</div>
						</div>
						<table class="infoGroup">
							<colgroup>
								<col width="100">
								<col width="*">
							</colgroup>
							<tbody>
                            <!-- :: open : ksg_4 : [진맛] 이미지 등록 파트. -->
							<tr>
								<th>이미지</th>
								<td>
                                    <div class="uploadGroup showImgSort">
										<div class="imgUploadBox">
											<input type="file" class="hide" accept="image/*" name="img_1" onchange="img_sel(this, event)">
											<a href="javascript:void(0);" class="upload_btn" onclick="img_upload(this);"></a>
										</div>
										<div class="imgUploadBox">
											<input type="file" class="hide" accept="image/*" name="img_2" onchange="img_sel(this, event)">
											<a href="javascript:void(0);" class="upload_btn" onclick="img_upload(this);"></a>
										</div>
										<div class="imgUploadBox">
											<input type="file" class="hide" accept="image/*" name="img_3" onchange="img_sel(this, event)">
											<a href="javascript:void(0);" class="upload_btn" onclick="img_upload(this);"></a>
										</div>
										<div class="imgUploadBox">
											<input type="file" class="hide" accept="image/*" name="img_4" onchange="img_sel(this, event)">
											<a href="javascript:void(0);" class="upload_btn" onclick="img_upload(this);"></a>
										</div>
										<div class="imgUploadBox lastChild">
											<input type="file" class="hide" accept="image/*" name="img_5" onchange="img_sel(this, event)">
											<a href="javascript:void(0);" class="upload_btn" onclick="img_upload(this);"></a>
										</div>
									</div>
								</td>
							</tr>
                            <!-- :: close : ksg_4 : [진맛] 이미지 등록 파트. -->
							<tr>
								<th>직원명</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
							</tr>
							<tr>
								<th>아이디</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
							</tr>
							<tr>
								<th>비밀번호</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
							</tr>
							<tr>
								<th>분류</th>
								<td>
									<select class="sbox regFullSort">
										<option>-선택-</option>
										<option>1. 본사</option>
										<option>2. 지사</option>
										<option>3. 대리점</option>
									</select>
								</td>
							</tr>
							<tr>
								<th>소속</th>
								<td>
									<select class="sbox regFullSort">
										<option>-선택-</option>
										<option>1. 본사</option>
										<option>2. 인천지사</option>
										<option>3. 경기지사</option>
										<option>4. 부산지사</option>
									</select>
								</td>
							</tr>
							<tr>
								<th>부서</th>
								<td>
									<select class="sbox regFullSort">
										<option>-선택-</option>
										<option>1. 간호부</option>
										<option>2. 원무부</option>
									</select>
								</td>
							</tr>
							<tr>
								<th>직급</th>
								<td>
									<input class="tbox regFullSort" value="과장">
								</td>
							</tr>
							<tr>
								<th>사용여부</th>
								<td>
									<select class="sbox regFullSort">
										<option>1. 사용</option>
										<option>2. 미사용</option>
									</select>
								</td>
                            </tr>
                            <tr>
								<th>승인 등급</th>
								<td>
                                    <select class="sbox regFullSort listMod">
							        	<option>선택</option>
							        	<option selected="">1. 일반승인자</option>
							        	<option>2. 중간승인자</option>
							        	<option>3. 최종승인자</option>
							        </select>
								</td>
							</tr>
							<tr>
								<th>권한</th>
								<td>
									<div class="inTableRadioGroup inListSort">
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">대시보드</div>
										</div>
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">예산관리</div>
										</div>
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">집행관리</div>
										</div>
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">결산관리</div>
										</div>
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">기초항목관리</div>
										</div>
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">지출요청</div>
										</div>
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">수입관리</div>
										</div>
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">직원관리</div>
										</div>
									</div>
								</td>
							</tr>
							</tbody>
						</table>
					</div>
                </div>
                <!-- :: close : ksg_4 : [진맛] 좌측 테이블의 인풋창 버전 파트.  -->
                <!-- :: open : ksg_4 : [진맛] 좌측 테이블의 하단 내용(납작한 카드박스 버전) 파트. -->
                <div class="specRegGroup">
					<div class="conGroup verticalManageSort">
						<div class="headLineBox listControlSort">
							<div class="titleBox inlistConSort">
								<div class="titleText">재고 분포 정보</div>
							</div>
						</div>
                        <!-- :: open : ksg_4 : [진맛] 납작한 카드박스 파트. -->
                        <div class="cdBoxGroup flatSort">
                            <a href="javascript:void(0);" class="cdBox wareHsSort">
                                <i class="locaIcon"></i>
                                <span class="cdBoxName">서울 창고</span>
                                <span class="cdBoxCount f_blue">150</span>
                            </a>
                            <a href="javascript:void(0);" class="cdBox wareHsSort">
                                <i class="locaIcon"></i>
                                <span class="cdBoxName">서울 창고</span>
                                <span class="cdBoxCount f_blue">150</span>
                            </a>
                            <a href="javascript:void(0);" class="cdBox wareHsSort">
                                <i class="locaIcon"></i>
                                <span class="cdBoxName">서울 창고</span>
                                <span class="cdBoxCount f_blue">150</span>
                            </a>
                            <a href="javascript:void(0);" class="cdBox wareHsSort">
                                <i class="locaIcon"></i>
                                <span class="cdBoxName">서울 창고</span>
                                <span class="cdBoxCount f_blue">150</span>
                            </a>
                            <a href="javascript:void(0);" class="cdBox wareHsSort">
                                <i class="locaIcon"></i>
                                <span class="cdBoxName">서울 창고</span>
                                <span class="cdBoxCount f_blue">150</span>
                            </a>
                            <a href="javascript:void(0);" class="cdBox wareHsSort">
                                <i class="locaIcon"></i>
                                <span class="cdBoxName">서울 창고</span>
                                <span class="cdBoxCount f_blue">150</span>
                            </a>
                        </div>
                        <!-- :: close : ksg_4 : [진맛] 납작한 카드박스 파트. -->
					</div>
                </div>
                <!-- :: close : ksg_4 : [진맛] 좌측 테이블의 하단 내용(납작한 카드박스 버전) 파트. -->
            </div>
            <!-- :: open : ksg_2 : [진맛] 우측 테이블 구조. -->
			<div class="section horizontalManageSort extendMod">
                <div class="titleBox manageHeadlineSort">상세정보</div>
                <!-- :: open : ksg_2 [진맛] 우측 테이블의 내용물. 입력창 배열 구조. 여기서는 다른 구조를 사용하므로 이것은 display none 처리 함. -->
				<div class="specInfoGroup hide" style="display : none;">
					<div class="conGroup verticalManageSort">
						<div class="headLineBox listControlSort">
							<div class="titleBox inlistConSort">
								<div class="titleText">직원정보</div>
							</div>
						</div>
						<table class="infoGroup">
							<colgroup>
								<col width="100">
								<col width="*">
							</colgroup>
							<tbody>
								<tr>
									<th>번호</th>
									<td>
										<input class="tbox regFullSort" value="2" readonly>
									</td>
								</tr>
								<tr>
									<th>등록일</th>
									<td>
										<input class="tbox regFullSort" value="2020-03-11 11:00" readonly>
									</td>
								</tr>
								<!-- <tr>
									<th>입사일</th>
									<td>
										<input class="tbox regFullSort" value="2020-03-11 11:00" readonly>
									</td>
								</tr> -->
								<tr>
									<th>직원명</th>
									<td>
										<input class="tbox regFullSort" value="곽반장">
									</td>
								</tr>
								<tr>
									<th>아이디</th>
									<td>
										<input class="tbox regFullSort" value="sinwon1">
									</td>
								</tr>
								<tr>
									<th>비밀번호</th>
									<td>
										<input class="tbox regFullSort" value="asdf1">
									</td>
								</tr>
								<!-- <tr>
									<th>소속</th>
									<td>
										<select class="sbox regFullSort">
											<option>1. 본사</option>
											<option selected>2. 인천지사</option>
											<option>3. 경기지사</option>
											<option>4. 부산지사</option>
										</select>
									</td>
								</tr> -->
								<!-- <tr>
									<th>부서</th>
									<td>
										<select class="sbox regFullSort">
											<option>1. 간호부</option>
											<option selected>2. 원무부</option>
										</select>
									</td>
								</tr> -->
								<!-- <tr>
									<th>직급</th>
									<td>
										<input class="tbox regFullSort" value="과장">
									</td>
								</tr> -->
								<!-- <tr>
									<th>사용여부</th>
									<td>
										<select class="sbox regFullSort">
											<option>1. 사용</option>
											<option>2. 미사용</option>
										</select>
									</td>
								</tr> -->
                                <tr>
									<th>승인 등급</th>
									<td>
                                        <select class="sbox regFullSort listMod">
							            	<option>선택</option>
							            	<option selected="">1. 일반승인자</option>
							            	<option>2. 중간승인자</option>
							            	<option>3. 최종승인자</option>
							            </select>
									</td>
								</tr>
								<tr>
									<th>권한</th>
									<td>
										<div class="inTableRadioGroup inListSort">
											<div class="checkBoxCase">
												<div class="checkBoxIconBox">
													<input type="checkbox" name="" value="">
													<label></label>
												</div>
												<div class="checkBoxTitle">대시보드</div>
											</div>
											<div class="checkBoxCase">
												<div class="checkBoxIconBox">
													<input type="checkbox" name="" value="" checked>
													<label></label>
												</div>
												<div class="checkBoxTitle">예산관리</div>
											</div>
											<div class="checkBoxCase">
												<div class="checkBoxIconBox">
													<input type="checkbox" name="" value="" checked>
													<label></label>
												</div>
												<div class="checkBoxTitle">집행관리</div>
											</div>
											<div class="checkBoxCase">
												<div class="checkBoxIconBox">
													<input type="checkbox" name="" value="">
													<label></label>
												</div>
												<div class="checkBoxTitle">결산관리</div>
											</div>
											<div class="checkBoxCase">
												<div class="checkBoxIconBox">
													<input type="checkbox" name="" value="">
													<label></label>
												</div>
												<div class="checkBoxTitle">기초항목관리</div>
											</div>
											<div class="checkBoxCase">
												<div class="checkBoxIconBox">
													<input type="checkbox" name="" value="">
													<label></label>
												</div>
												<div class="checkBoxTitle">지출요청</div>
											</div>
											<div class="checkBoxCase">
												<div class="checkBoxIconBox">
													<input type="checkbox" name="" value="">
													<label></label>
												</div>
												<div class="checkBoxTitle">수입관리</div>
											</div>
											<div class="checkBoxCase">
												<div class="checkBoxIconBox">
													<input type="checkbox" name="" value="">
													<label></label>
												</div>
												<div class="checkBoxTitle">직원관리</div>
											</div>
										</div>
									</td>
								</tr>
								<!-- <tr>
									<th>휴대폰번호</th>
									<td>
										<input class="tbox regFullSort" value="010-1234-1234">
									</td>
								</tr>
								<tr>
									<th>회사 전화번호</th>
									<td>
										<input class="tbox regFullSort" value="02-1234-1234">
									</td>
								</tr> -->
							</tbody>
						</table>
					</div>
                </div>
                <!-- :: close : ksg_2 [진맛] 우측 테이블의 내용물. 입력창 배열 구조. 여기서는 다른 구조를 사용하므로 이것은 display none 처리 함. -->
                <!-- :: open : ksg_2 : [진맛] 우측 테이블의 등록창 파트. 여기서는 사용하지 않을 내용이므로 display none 처리 함. -->
				<div class="specRegGroup hide" style="display : none;">
					<div class="conGroup verticalManageSort">
						<div class="headLineBox listControlSort">
							<div class="titleBox inlistConSort">
								<div class="titleText">직원등록</div>
							</div>
						</div>
						<table class="infoGroup">
							<colgroup>
								<col width="100">
								<col width="*">
							</colgroup>
							<tbody>
							<!-- <tr>
								<th>입사일</th>
								<td>
									<input class="tbox regFullSort" value="2020-03-11 11:00" readonly>
								</td>
							</tr> -->
							<tr>
								<th>직원명</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
							</tr>
							<tr>
								<th>아이디</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
							</tr>
							<tr>
								<th>비밀번호</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
							</tr>
							<!-- <tr>
								<th>분류</th>
								<td>
									<select class="sbox regFullSort">
										<option>-선택-</option>
										<option>1. 본사</option>
										<option>2. 지사</option>
										<option>3. 대리점</option>
									</select>
								</td>
							</tr>
							<tr>
								<th>소속</th>
								<td>
									<select class="sbox regFullSort">
										<option>-선택-</option>
										<option>1. 본사</option>
										<option>2. 인천지사</option>
										<option>3. 경기지사</option>
										<option>4. 부산지사</option>
									</select>
								</td>
							</tr>
							<tr>
								<th>부서</th>
								<td>
									<select class="sbox regFullSort">
										<option>-선택-</option>
										<option>1. 간호부</option>
										<option>2. 원무부</option>
									</select>
								</td>
							</tr> -->
							<!-- <tr>
								<th>직급</th>
								<td>
									<input class="tbox regFullSort" value="과장">
								</td>
							</tr> -->
							<!-- <tr>
								<th>사용여부</th>
								<td>
									<select class="sbox regFullSort">
										<option>1. 사용</option>
										<option>2. 미사용</option>
									</select>
								</td>
                            </tr> -->
                            <tr>
								<th>승인 등급</th>
								<td>
                                    <select class="sbox regFullSort listMod">
							        	<option>선택</option>
							        	<option selected="">1. 일반승인자</option>
							        	<option>2. 중간승인자</option>
							        	<option>3. 최종승인자</option>
							        </select>
								</td>
							</tr>
							<tr>
								<th>권한</th>
								<td>
									<div class="inTableRadioGroup inListSort">
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">대시보드</div>
										</div>
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">예산관리</div>
										</div>
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">집행관리</div>
										</div>
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">결산관리</div>
										</div>
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">기초항목관리</div>
										</div>
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">지출요청</div>
										</div>
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">수입관리</div>
										</div>
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">직원관리</div>
										</div>
									</div>
								</td>
							</tr>
							</tbody>
						</table>
					</div>
                </div>
                <!-- :: close : ksg_2 : [진맛] 우측 테이블의 등록창 파트. 여기서는 사용하지 않을 내용이므로 display none 처리 함. -->
                <!-- :: open : ksg_2 [진맛] 우측 테이블 내용에 따라 같이 숨기는 내용. display none 처리 함. -->
				<div class="btnGroup horizontalBottomSort" style="display : none;">
					<a href="javascript:void(0);" class="btn saveSort">저장</a>
                </div>
                <!-- :: close : ksg_2 [진맛] 우측 테이블 내용에 따라 같이 숨기는 내용. display none 처리 함. -->
                <!-- :: open : ksg_2 : [진맛] 우측 테이블 내용물2. 개별 항목에 대한 종합 정보(사진/단순 내용.) -->
                <div class="specInfoGroup hide">
					<div class="conGroup verticalManageSort">
						<div class="headLineBox listControlSort">
							<div class="titleBox inlistConSort">
								<div class="titleText">직원정보</div>
							</div>
						</div>
						<table class="infoGroup">
							<colgroup>
								<col style="width : 50px;">
								<col style="*">
							</colgroup>
							<tbody>
								<tr>
									<th>
                                        <div class="imgBgCase">
                                            <img src="/common/img/icon_status_topaz.png" class="img inTblSmSort">
                                        </div>
                                    </th>
									<td>
                                        <div class="inTblTitleBox">딸기1</div>
                                        <div class="inTblInfoBox materialSort">
                                            <span class="infoWord">바코드1</span>
                                            <span class="infoWord">제품명1</span>
                                            <span class="infoWord">품번1</span>
                                            <span class="infoWord">카테고리1</span>
                                            <div class="stockCounter f_blue">450</div>
                                        </div>
                                        <a href="javascript:void(0);" class="linkCover"></a>
									</td>
                                </tr>
                                <tr>
									<th>
                                        <div class="imgBgCase">
                                            <img src="/common/img/icon_status_topaz.png" class="img inTblSmSort">
                                        </div>
                                    </th>
									<td>
                                        <div class="inTblTitleBox">딸기1</div>
                                        <div class="inTblInfoBox materialSort">
                                            <span class="infoWord">바코드1</span>
                                            <span class="infoWord">제품명1</span>
                                            <span class="infoWord">품번1</span>
                                            <span class="infoWord">카테고리1</span>
                                            <div class="stockCounter f_blue">450</div>
                                        </div>
                                        <a href="javascript:void(0);" class="linkCover"></a>
									</td>
                                </tr>
							</tbody>
						</table>
					</div>
                </div>
                <!-- :: single : ksg_2 : [진맛] 다른 작업물의 등록창 있던 곳. -->
                <!-- :: single : ksg_2 : [진맛] 다른 작업물의 저장버튼 있던 곳. -->
                <div class="btnGroup horizontalBottomSort hide">
					<a href="javascript:void(0);" class="btn saveSort">저장</a>
                </div>
                <!-- :: close : ksg_2 : [진맛] 우측 테이블 내용물2. 개별 항목에 대한 종합 정보(사진/단순 내용.) -->
                <!-- :: open : ksg_4 : [진맛] 우측 테이블 내용물. 재고/컨트롤버튼/작업내역 카드박스 버전. -->
                <div class="specInfoGroup">
					<div class="conGroup verticalManageSort">
						<div class="headLineBox listControlSort">
							<div class="titleBox inlistConSort">
								<div class="titleText">재고 내역</div>
							</div>
                        </div>
                        <!-- :: open : ksg_4 : [진맛] 콘솔버튼이 포함된 카드박스 파트. -->
                        <div class="cdBoxGroup consoleSort">
                            <div class="cdBox wareHsSort">
                                <div class="btnGroup cdBoxGdLineSort">
                                    <a href="javascript:void(0);" class="btn f_blue">입고</a>
                                    <a href="javascript:void(0);" class="btn f_red">출고</a>
                                    <a href="javascript:void(0);" class="btn f_emerald">변경</a>
                                    <a href="javascript:void(0);" class="btn f_charcooal">이동</a>
                                </div>
                                <div class="cdBoxCount f_blue">150</div>
                                <div class="cdBoxName">서울지사</div>
                                <div class="historyCardGroup">
                                    <div class="dateGroup">
                                        <div class="dateTxt">2021.01.01</div>
                                        <a href="javascript:void(0);" class="historyBox">
                                            <div class="titleBox">이동</div>
                                            <div class="historyInfo">
                                                <div class="infoSeg startSort">
                                                    <div>경남지사</div>
                                                    <div>
                                                        <span>80</span>
                                                        <span>→</span>
                                                        <span>50</span>
                                                    </div>
                                                </div>
                                                <span class="flowArrow">→</span>
                                                <div class="infoSeg endSort">
                                                    <div>경남지사</div>
                                                    <div>
                                                        <span>80</span>
                                                        <span>→</span>
                                                        <span>50</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0);" class="historyBox">
                                            <div class="titleBox">이동</div>
                                            <div class="historyInfo">
                                                <div class="infoSeg startSort">
                                                    <div>경남지사</div>
                                                    <div>
                                                        <span>80</span>
                                                        <span>→</span>
                                                        <span>50</span>
                                                    </div>
                                                </div>
                                                <span class="flowArrow">→</span>
                                                <div class="infoSeg endSort">
                                                    <div>경남지사</div>
                                                    <div>
                                                        <span>80</span>
                                                        <span>→</span>
                                                        <span>50</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- :: close : ksg_4 : [진맛] 콘솔버튼이 포함된 카드박스 파트. -->
					</div>
                </div>
                <!-- :: close : ksg_4 : [진맛] 우측 테이블 내용물. 재고/컨트롤버튼/작업내역 카드박스 버전. -->
            </div>
            <!-- :: close : ksg_2 : [진맛] 우측 테이블 구조. -->
		</div>
	</div>
</div>
<!-- :: single : ksg_2 : [진맛]다른 작업물의 달력 스크립트 링크 있던 곳. -->
<!-- :: open : ksg_4 : [진맛] 이미지 업로드 스크립트 연결 내용. -->
<script src="/common/js/exif-js.js"></script>
<script src="/common/js/imgSet.js"></script>
<!-- :: close : ksg_4 : [진맛] 이미지 업로드 스크립트 연결 내용. -->
<script>
// :: single : ksg_2 [진맛] 다른 작업물의 "상세보기 표시, 숨기기", "상세검색 표시, 숨기기." 스크립트 있던 곳.
// :: open : ksg_2 : [진맛] 원자재 목록을 클릭 시, 우측의 테이블 내용과 하단 버튼이 나타나도록 하는 내용.
$(document).on('click', '.conGroup.verticalManageSort .searchResultTable td', function(){
    $('.specInfoGroup.hide').removeClass('hide');
    $('.specInfoGroup').next('.btnGroup.horizontalBottomSort').removeClass('hide');
	$('.specRegGroup').addClass('hide');
	$(this).parent().siblings('tr').removeClass('activated');
	$(this).parent('tr').addClass('activated');
});
// :: close : ksg_2 : [진맛] 원자재 목록을 클릭 시, 우측의 테이블 내용과 하단 버튼이 나타나도록 하는 내용.
// :: single : ksg_2 [진맛] 다른 작업물의 "집행등록 버튼 클릭 시, 등록창 표시.", ""직원 추가" 버튼 클릭 시, 직원 추가 팝업 나타나는 스크립트.", "직원 추가 팝업창에서 "등록" 버튼 클릭 시, 팝업창 닫히는 스크립트.", "팝업창의 X 버튼 클릭 시, 팝업 닫기 스크립트." 있던 곳.
// :: single : ksg_2 : [진맛] 다른 작업물의 "팝업창 외부 클릭 시 팝업창 닫기 스크립트." 있던 곳.
</script>
</body>
</html>