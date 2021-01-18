<!-- :: ksg_2 = ksg_20210109_1554 -->
<!-- :: ksg_1 = ksg_20210108_1930 -->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/pages/head.php';
	$tCode					=	'099';
	$lCode					=	'0101';
?>
<body>
<div class="container">
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/common/pages/header.php'; ?>
    <!-- :: open : ksg_1 : [진맛] 좌측메뉴 파트. -->
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/pageTemplete/pages/pageTemplete_left.php'; ?>
	<!-- :: close : ksg_1 : [진맛] 좌측메뉴 파트. -->
	<div class="wrapper">
		<div class="contents">
            <!-- :: ksg_2 : [진맛] 헤비한 검색어 입력 파트. 여기서는 간소화 버전을 사용할 것이므로 디스플레이 논 부여하여 숨김. -->
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
								<td colspan="4">
									<select class="sbox">
										<option>전체</option>
										<option>직원명</option>
										<option>부서명</option>
										<option>지사/대리점</option>
									</select>
									<input class="tbox searchInput topLineSearchMod" name="dd" type="text" placeholder="검색어를 입력해주세요.">
								</td>
							</tr>
							<tr>
								<th>소속</th>
								<td>
									<div class="inTableCheckGroup">
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">전체</div>
										</div>
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">본사</div>
										</div>
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">지사</div>
										</div>
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">대리점</div>
										</div>
									</div>
								</td>
								<th>
									사용여부
								</th>
								<td>
									<div class="inTableCheckGroup">
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">전체</div>
										</div>
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">사용</div>
										</div>
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">미사용</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<th>권한</th>
								<td colspan="4">
									<div class="inTableCheckGroup">
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">전체</div>
										</div>
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
											<div class="checkBoxTitle">기초항목 관리</div>
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
							<tr>
								<th>
									요청기간
								</th>
								<td colspan="4">
									<div class="dateInputCase topLineSearchMod">
										<input class="tbox dateBox shortMod" id="startDate" readonly="" placeholder="시작일">
									</div>
									<div class="betweenWaveText">~</div>
									<div class="dateInputCase topLineSearchMod">
										<input class="tbox dateBox shortMod" id="endDate" readonly="" placeholder="종료일">
									</div>
									<div class="btnGroup inTableSearch">
										<a href="javascript:void(0);" class="btn searchSort">검색</a>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
            </div>
            <!-- :: ksg_2 : [진맛] 헤비한 검색어 입력 파트. 여기서는 간소화 버전을 사용할 것이므로 디스플레이 논 부여하여 숨김. -->
            <!-- :: open : ksg_2 : [진맛] 입력창 / 검색버튼 / 추가버튼이 포함된 검색어 파트. -->
            <div class="section horizontalManageSort searcManageSort topLineMod">
				<div class="titleBox manageHeadlineSort">원자재 검색</div>
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
								<td colspan="4">
									<select class="sbox">
										<option>전체</option>
										<option>직원명</option>
										<option>부서명</option>
										<option>지사/대리점</option>
                                    </select>
                                    <!-- :: open : ksg_2 : [진맛] 적당한 길이의 인풋과 검색 버튼 파트. -->
                                    <input class="tbox searchInput topLineSearchMod" name="dd" type="text" placeholder="검색어를 입력해주세요." style="display : none;">
                                    <input class="tbox withBtnSchMod" name="dd" type="text" placeholder="검색어를 입력해주세요.">
                                    <div class="btnGroup inTableSearch">
										<a href="javascript:void(0);" class="btn searchSort">검색</a>
                                    </div>
                                    <!-- :: close : ksg_2 : [진맛] 적당한 길이의 인풋과 검색 버튼 파트. -->
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
			<!-- :: open : ksg_3 : [진맛] 테이블 병렬일 때의 총괄 컨트롤 박스 파트. -->
			<div class="headLineBox pageControlSort">
                <a href="javascript:void(0);" class="btn listTopSort addStaffBtn">엑셀저장</a>
				<a href="javascript:void(0);" class="btn listTopSort addStaffBtn">인쇄</a>
			</div>
			<!-- :: close : ksg_3 : [진맛] 테이블 병렬일 때의 총괄 컨트롤 박스 파트. -->
            <!-- :: close : ksg_2 : [진맛] 입력창 / 검색버튼 / 추가버튼이 포함된 검색어 파트. -->
			<div class="section horizontalManageSort searcManageSort extendMod">
				<div class="titleBox manageHeadlineSort">원자재 목록</div>
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
						<div class="titleBox inlistConSort">
							<div class="titleText">원자재 목록</div>
							<a href="/rawMat/rawMatSpec" class="btn headRightAbMod addPlanBtn">원자재 추가</a>
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
							<!-- <th>비밀번호</th> -->
							<!-- <th>소속</th> -->
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
							<!-- <td>
							</td> -->
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
			<div class="section horizontalManageSort extendMod">
                <div class="titleBox manageHeadlineSort">상세정보</div>
                <!-- :: open : ksg_2 [진맛] 우측 테이블의 내용물. 입력창 배열 구조. 여기서는 다른 구조를 사용하므로 이것은 display none 처리 함. -->
				<div class="specInfoGroup hide" style="display : none;">
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
									<th class="flatImgSort">
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
									<th class="flatImgSort">
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
            </div>
            <!-- :: close : ksg_2 : [진맛] 우측 테이블 구조. -->
		</div>
	</div>
</div>
<!-- :: single : ksg_2 : [진맛]다른 작업물의 달력 스크립트 링크 있던 곳. -->
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