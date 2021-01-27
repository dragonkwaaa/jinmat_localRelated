<!-- :: ksg_5 = ksg_20210118_1639 -->
<!-- :: ksg_4 = ksg_20210112_2039 -->
<!-- :: ksg_3 = ksg_20210112_1604 -->
<!-- :: ksg_2 = ksg_20210109_1554 -->
<!-- :: ksg_1 = ksg_20210108_1930 -->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/pages/head.php';
	$tCode					=	'200';
	$lCode					=	'0201';
?>
<body>
<div class="container">
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/common/pages/header.php'; ?>
    <!-- :: open : ksg_1 : [진맛] 좌측메뉴 파트. -->
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/order/pages/order_left.php'; ?>
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
			<div class="section horizontalManageSort searcManageSort extendMod">
				<div class="titleBox manageHeadlineSort">발주목록</div>
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
								<col style="width : 20%;">
								<col style="width : 80%;">
							</colgroup>
							<tbody>
                                <tr>
                                    <th>
								    	발주일자
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
									<th>검색어</th>
									<td>
										<select class="sbox">
											<option>발주코드</option>
											<option>창고명</option>
                                            <option>창고코드</option>
                                            <option>납품처명</option>
                                            <option>납품처코드</option>
                                            <option>품목명</option>
                                            <option>품목코드</option>
                                            <option>품종명</option>
                                            <option>품종코드</option>
                                            <option>생산품명</option>
                                            <option>생산품코드</option>
										</select>
										<input class="tbox searchInput topLineSearchMod" name="dd" type="text" placeholder="검색어를 입력해주세요.">
									</td>
                                </tr>
                                <tr>
                                    <th>
								    	배송일
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
                                        배송방법
							    	</th>
							    	<td >
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
							    				<div class="checkBoxTitle">직접배송</div>
							    			</div>
							    			<div class="checkBoxCase">
							    				<div class="checkBoxIconBox">
							    					<input type="checkbox" name="" value="">
							    					<label></label>
							    				</div>
							    				<div class="checkBoxTitle">경동택배</div>
                                            </div>
                                            <div class="checkBoxCase">
							    				<div class="checkBoxIconBox">
							    					<input type="checkbox" name="" value="">
							    					<label></label>
							    				</div>
							    				<div class="checkBoxTitle">한진택배</div>
                                            </div>
							    		</div>
							    	</td>
                                </tr>
                                <tr>
                                    <th>
                                        종결여부
							    	</th>
							    	<td >
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
							    				<div class="checkBoxTitle">진행중</div>
							    			</div>
							    			<div class="checkBoxCase">
							    				<div class="checkBoxIconBox">
							    					<input type="checkbox" name="" value="">
							    					<label></label>
							    				</div>
							    				<div class="checkBoxTitle">종결</div>
                                            </div>
							    		</div>
							    	</td>
							    </tr>
                                <tr>
                                    <th>
                                        상태
							    	</th>
							    	<td >
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
							    				<div class="checkBoxTitle">발주요청</div>
							    			</div>
							    			<div class="checkBoxCase">
							    				<div class="checkBoxIconBox">
							    					<input type="checkbox" name="" value="">
							    					<label></label>
							    				</div>
							    				<div class="checkBoxTitle">발주요청승인</div>
                                            </div>
                                            <div class="checkBoxCase">
							    				<div class="checkBoxIconBox">
							    					<input type="checkbox" name="" value="">
							    					<label></label>
							    				</div>
							    				<div class="checkBoxTitle">발주취소요청</div>
                                            </div>
                                            <div class="checkBoxCase">
							    				<div class="checkBoxIconBox">
							    					<input type="checkbox" name="" value="">
							    					<label></label>
							    				</div>
							    				<div class="checkBoxTitle">발주취소</div>
                                            </div>
                                            <div class="checkBoxCase">
							    				<div class="checkBoxIconBox">
							    					<input type="checkbox" name="" value="">
							    					<label></label>
							    				</div>
							    				<div class="checkBoxTitle">발주완료</div>
							    			</div>
							    		</div>
							    	</td>
							    </tr>
							</tbody>
						</table>
                    	<div class="btnGroup verticalBottomSort inTblSort">
                    	    <a href="javascript:void(0);" class="btn singleSearchMod">검색</a>
                    	</div>
						<!-- :: close : ksg_4 : [진맛] 테이블 내의 검색어 파트. -->
						<div class="titleBox inlistConSort">
							<div class="titleText">발주목록</div>
							<a href="javascript:void(0);" class="btn headRightAbMod addorderBtn">발주추가</a>  
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
							<col style="width : 70px;">
							<col style="width : 100px;">
							<col style="width : 70px;">
							<col style="width : 70px;">
                            <col style="width : 50px;">
							<col style="width : 85px;">  
							<col style="width : 120px;"> 
						</colgroup>
						<thead>
						<tr>
							<th>
								발주일자<br>
								(발주코드)
							</th>
							<th>
                                생산품명<br>
                                (생산품코드)
                            </th>
                            <th>
                                납품처명<br>
                                (납품처코드)
							</th>
							<th>담당자<br>
							(담당자번호)
							</th> 
							<th>배송방법</th>
                            <th>진행상태</th>
                            <th>비고</th>
						</tr>
						</thead>
						<tbody>
						<tr class="reged">
							<td>
								<div>
                                    21/01/22
                                </div>
                                <div class="mt5">
                                    (G12341111)
                                </div>
							</td>
							<td>
								<div>
                                    홍시
                                </div>
                                <div class="mt5">
                                    (G12341111)
                                </div>
							</td>
							<td>
								<div>
                                    ㅇㅇ청과
                                </div>
                                <div class="mt5">
                                    (G12341111)
                                </div>
							<td>
								<div>
                                    김별
                                </div> 
                                <div class="mt5">
                                    (010-5100-0429)
                                </div>
							</td>
							<td>새벽배송</td>
                            <td>
								<select class="sbox regFullSort">
									<option>발주요청</option>
                                    <option>발주요청승인</option>
                                    <option>발주취소요청</option>
                                    <option>발주취소</option>
                                    <option>발주완료</option>
								</select>
								<div class="btnGroup inListTable">
									<a href="javascript:void(0);" class="btn modifySort">저장</a>
								</div> 
                            </td>
                            <td>
								<input class="tbox regFullSort listMod" placeholder="비고" value="">
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
				<!-- :: open : ksg_3 : [진맛] 우측의 내용 입력 파트. -->
				<div class="specInfoGroup hide">
                    <div class="conGroup verticalManageSort">
						<div class="headLineBox listControlSort">
							<div class="titleBox inlistConSort">
								<div class="titleText">발주요청 정보</div>
							</div>
						</div>
						<table class="infoGroup">
							<colgroup>
								<col width="100">
								<col width="*">
							</colgroup>
							<tbody>
							<tr>
								<th>발주요청일자</th>
								<td>
									<input class="tbox regFullSort" value="" readonly>
								</td>
							</tr>
							<tr>
								<th>발주요청코드</th>
								<td>
									<input class="tbox regFullSort" value="" readonly>
								</td>
							</tr>
							<tr>
								<th>창고명</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
                            </tr>
                            <tr>
								<th>창고코드</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
                            </tr>
                            <tr>
								<th>창고주소</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
                            </tr>
                            <tr>
								<th>창고연락처</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
                            </tr>
                            <tr>
								<th>발주 요청자</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
                            </tr>
                            <tr>
								<th>발주요청품목</th>
								<td>
                                    <!-- :: open : ksg_5 : [진맛] 테이블 내에서 긴 카드박스 형태로 품목 여러개를 표시하는 내용. -->
                                    <!-- :: open : ksg_5 : [진맛] 품목을 검색하고 등록하는 파트. -->
                                    <div class="inTblSchGroup">
                                        <select class="sbox">
											<option>품목명</option>
											<option>품목코드</option>
										</select>
                                        <input class="tbox searchInput inTblSort" placeholder="검색어를 입력해주세요.">
                                        <div class="btnGroup inTableSearch">
								    		<a href="javascript:void(0);" class="btn searchSort">등록</a>
								    	</div>
                                    </div>
                                    <!-- :: close : ksg_5 : [진맛] 품목을 검색하고 등록하는 파트. -->
                                    <div class="inTblCdListGroup">
                                        <!-- :: open : ksg_5 : [진맛] 테이블 개별 품목의 카드박스 내용. -->
                                        <div class="inTblCdBox">
                                            <div class="inTblTitleBox">딸기1</div>
                                            <div class="inTblInfoBox materialSort">
                                                <span class="infoWord">바코드1</span>
                                                <span class="infoWord">제품명1</span>
                                                <span class="infoWord">품번1</span>
                                                <span class="infoWord">카테고리1</span>
                                                <div class="stockCounter f_blue">450</div>
                                            </div>
                                            <a href="javascript:void(0);" class="linkCover"></a>
                                        </div>
                                        <!-- :: close : ksg_5 : [진맛] 테이블 개별 품목의 카드박스 내용. -->
                                        <div class="inTblCdBox">
                                            <div class="inTblTitleBox">딸기1</div>
                                            <div class="inTblInfoBox materialSort">
                                                <span class="infoWord">바코드1</span>
                                                <span class="infoWord">제품명1</span>
                                                <span class="infoWord">품번1</span>
                                                <span class="infoWord">카테고리1</span>
                                                <div class="stockCounter f_blue">450</div>
                                            </div>
                                            <a href="javascript:void(0);" class="linkCover"></a>
                                        </div>
                                    </div>
                                    <!-- :: close : ksg_5 : [진맛] 테이블 내에서 긴 카드박스 형태로 품목 여러개를 표시하는 내용. -->
								</td>
                            </tr>
                            <tr>
								<th>상태</th>
								<td>
									<select class="sbox regFullSort">
									    <option>1. 발주요청</option>
                                        <option>2. 발주요청승인</option>
                                        <option>3. 발주취소요청</option>
                                        <option>4. 발주취소</option>
                                        <option>5. 발주완료</option>
                                    </select>
                                    <div class="mt2">
                                        <input class="tbox regFullSort" placeholder="취소 사유를 입력해 주십시오" value="">
                                    </div>
								</td>
                            </tr>
                            <tr>
								<th>비고</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
                            </tr>
                            <!-- :: open : ksg_5 : [진맛] 여기서는 사용하지 않을 테이블 항목들. 때문에 display : none 처리 함, -->
							<tr style="display : none;">
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
							<tr style="display : none;">
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
							<tr style="display : none;">
								<th>부서</th>
								<td>
									<select class="sbox regFullSort">
										<option>-선택-</option>
										<option>1. 간호부</option>
										<option>2. 원무부</option>
									</select>
								</td>
							</tr>
							<tr style="display : none;">
								<th>직급</th>
								<td>
									<input class="tbox regFullSort" value="과장">
								</td>
							</tr>
							<tr style="display : none;">
								<th>사용여부</th>
								<td>
									<select class="sbox regFullSort">
										<option>1. 사용</option>
										<option>2. 미사용</option>
									</select>
								</td>
                            </tr>
                            <tr style="display : none;">
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
							<tr style="display : none;">
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
                            <!-- :: close : ksg_5 : [진맛] 여기서는 사용하지 않을 테이블 항목들. 때문에 display : none 처리 함, -->
							</tbody>
						</table>
					</div>
				</div>
                <!-- :: close : ksg_3 : [진맛] 우측의 내용 입력 파트. -->
                <!-- :: open : ksg_5 : [진맛] 우측 하단의 내용 입력창 파트. -->
                <div class="specInfoGroup hide">
                    <div class="conGroup verticalManageSort">
						<div class="headLineBox listControlSort">
							<div class="titleBox inlistConSort">
								<div class="titleText">발주입력 정보</div>
							</div>
						</div>
						<table class="infoGroup">
							<colgroup>
								<col width="100">
								<col width="*">
							</colgroup>
							<tbody>
                            <tr>
								<th>납품처명</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
                            </tr>
                            <tr>
								<th>납품처 코드</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
                            </tr>
                            <tr>
								<th>납품처 연락처</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
                            </tr>
                            <tr>
								<th>창고명</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
							</tr>
                            <tr>
								<th>창고 코드</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
                            </tr>
                            <tr>
								<th>발주처 배송업체</th>
								<td>
                                    <input class="tbox regFullSort" placeholder="배송업체명" value="">
								</td>
							</tr>
                            <tr>
								<th>거래처 배송업체</th>
								<td>
                                    <input class="tbox regFullSort" placeholder="배송업체명" value="">
								</td>
                            </tr>
                            <tr>
								<th>택배비</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
							</tr>
                            <tr>
								<th>거래수량</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
                            </tr>
                            <tr>
								<th>금액처리</th>
								<td>
                                    <select class="sbox regFullSort">
										<option>-선택-</option>
										<option>1. 선금</option>
										<option>2. 납입시</option>
										<option>3. 후불</option>
										<option>4. 후불여신(개월)</option>
									</select>
								</td>
							</tr>
                            <tr>
								<th>결제방법</th>
								<td>
                                    <select class="sbox regFullSort">
										<option>-선택-</option>
										<option>1. 우리카드1</option>
										<option>2. 국민카드1</option>
										<option>3. 국민카드2</option>
										<option>4. 국민계좌1</option>
									</select>
									<input class="tbox regFullSort" placeholder="결제방법명 / 카드(은행)명 / 카드(계좌)번호 / 예금주" value="">
								</td>
							</tr>
                            <tr>
								<th>납품일</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
							</tr>
                            <tr>
								<th>미납금</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
							</tr>
                            <tr>
								<th>입고자명</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
                            </tr>
                            <tr>
								<th>입고자 전화번호</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
                            </tr>
                            <tr>
								<th>입고지 주소</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
                            </tr>
                            <tr>
								<th>발주 담당자명</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
							</tr>
                            <tr>
								<th>발주 담당자 전화번호</th>
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










                            <!-- :: open : ksg_5 : [진맛] 여기서는 사용하지 않을 테이블 항목들. 때문에 display : none 처리 함, -->
							<tr style="display : none;">
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
							<tr style="display : none;">
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
							<tr style="display : none;">
								<th>부서</th>
								<td>
									<select class="sbox regFullSort">
										<option>-선택-</option>
										<option>1. 간호부</option>
										<option>2. 원무부</option>
									</select>
								</td>
							</tr>
							<tr style="display : none;">
								<th>직급</th>
								<td>
									<input class="tbox regFullSort" value="과장">
								</td>
							</tr>
							<tr style="display : none;">
								<th>사용여부</th>
								<td>
									<select class="sbox regFullSort">
										<option>1. 사용</option>
										<option>2. 미사용</option>
									</select>
								</td>
                            </tr>
                            <tr style="display : none;">
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
							<tr style="display : none;">
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
                            <!-- :: close : ksg_5 : [진맛] 여기서는 사용하지 않을 테이블 항목들. 때문에 display : none 처리 함, -->
							</tbody>
						</table>
					</div>
				</div>
                <!-- :: close : ksg_5 : [진맛] 우측 하단의 내용 입력창 파트. -->
                <div class="btnGroup horizontalBottomSort">
					<a href="javascript:void(0);" class="btn saveSort">저장</a>
                </div>
            </div>
            <!-- :: close : ksg_2 : [진맛] 우측 테이블 구조. -->
		</div>
	</div>
</div>
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



// :: open : ksg_6 : [진맛] "창고 추가" 버튼을 클릭했을 때 우측 상세정보가 표시되도록 하는 스크립트.
$(document).on('click', '.btn.headRightAbMod.addorderBtn', function(){
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