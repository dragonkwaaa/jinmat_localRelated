<!-- :: ksg_4 = ksg_20210122_1409 -->
<!-- :: ksg_3 = ksg_20210121_1459 -->
<!-- :: ksg_2 = ksg_20210120_1102 -->
<!-- :: ksg_1 = ksg_20210108_1726 -->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/pages/head.php';
	$tCode					=	'700';
	$lCode					=	'0700';
?>
<body>
<div class="container">
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/pages/header.php'; ?>
    <!-- :: open : ksg_1 : [진맛] 좌측메뉴 파트. -->
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/wearing/pages/stock_left.php'; ?>  
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
			<div class="section horizontalManageSort fullMod">
				<div class="titleBox manageHeadlineSort">재고 목록</div> 
				<div class="conGroup verticalManageSort bottomRowSort">
					<div class="headLineBox listControlSort">
                        <div class="titleBox inlistConSort">
					    	<div class="titleText">재고 목록</div>
                            <a href="javascript:void(0);" class="btn headRightAbMod wearingPopBtn">입고내역 추가</a>
                            <div class="tipBox mb15">* 재고내역을 클릭 시, 재고의 창고로 이동합니다.</div>
					    </div>
						<div class="sboxGroup listArraySort">
                            <a href="javascript:void(0);" class="btn listTopSort addStaffBtn">엑셀저장</a>
                            <a href="javascript:void(0);" class="btn listTopSort addStaffBtn">인쇄</a>
							<select class="sbox">
								<option>번호순▼</option>
								<option>번호순▲</option>
								<option>등록순▼</option>
								<option>등록순▲</option>
                                <option>과목순▼</option>
								<option>과목순▲</option>
							</select>
							<select class="sbox">
								<option>40개씩</option>
								<option>80개씩</option>
								<option>100개씩</option>
							</select>
                        </div>
                    </div>
					<table class="searchResultTable">
						<colgroup>
                            <col style="width : 100px;">
                            <col style="width : 100px;">
                            <col style="width : 100px;">
                            <col style="width : 200px;">
                            <col style="width : 100px;">
                            <col style="width : 100px;">
                            <col style="width : 100px;">
                            <col style="width : 150px;">
                            <col style="width : 200px;">
                            <col style="width : 100px;">
                            <col style="width : 90px;">
                        </colgroup>
						<thead>
						<tr>
							<th>
                                품목명<br>
                                (품목코드)
                            </th>
                            <th>
                                품종명<br>
                                (품종코드)
                            </th>
                            <th>
                                생산품명<br>
                                (생산품코드)
                            </th>
                            <th>창고 별 재고</th>
                            <th>발주처연락처</th> 
                            <th>
                                창고명<br>
                                (창고코드)
                            </th>
                            <th>창고연락처</th>
                            <th>배송방식</th>
                            <th>입고상태</th>
                            <th>입고일</th>
                            <th>관리</th>
						</tr>
						</thead>
						<tbody>
						<!-- :: single : ksg_3 : [진맛] 테이블에 내용을 등록하기 위한 인풋들로 구성된 <tr> 이 있던 곳. -->
                        <!-- :: open : ksg_3 : [진맛] 즉석 수정이 불가능하도록 고정된 텍스트로 표시하는 내용 파트. -->
                        <tr class="reged">
                            <td>
                                <div>
                                    (발주:1152412)
                                </div>
                                <div class="mt5">
                                    (입고:3122245)
                                </div>
							</td>
							<td>
                                <div>
                                    강남농원1
                                </div>
                                <div class="mt5">
                                    (G12341111)
                                </div>
                            </td>
                            <td>
                                <div>
                                    진맛1
                                </div>
                                <div class="mt5">
                                    (J1044555)
                                </div>
                            </td>
                            <td>강원도 정선군 읍리 12길</td>
                            <td>
                                02-1234-1234
							</td>
                            <td>
                                <div>
                                    진맛창고1
                                </div>
                                <div class="mt5">
                                    (J1044555)
                                </div>
                            </td>
                            <td>
                                02-1234-1234
                            </td>
                            <td>진짜 맛있는 과일 배송업체</td>
                            <td>
                                <div>
                                    입고취소
                                </div>
                                <div class="mt5">
                                    (사유:기한만료입고취소)
                                </div>
                            </td>
                            <td>
                                2021.01.03<br>
                                11:45:30
                            </td>
                            <td>
								<div class="btnGroup inListTable">
									<a href="javascript:void(0);" class="btn modifySort wearingPopBtn">상세보기</a>
								</div>
							</td>
                        </tr>
                        <!-- :: close : ksg_3 : [진맛] 즉석 수정이 불가능하도록 고정된 텍스트로 표시하는 내용 파트. -->
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
            <!-- :: open : ksg_3 : [진맛] 너비가 좁은 우측 내용 파트. 여기서는 풀 사이즈 싱글 테이블만 사용할 것이므로 이것은 display : none 처리. -->
            <div class="section horizontalManageSort wearDoub2" style="display : none;">
                <div class="titleBox manageHeadlineSort">상세정보</div>
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
								<th>발주번호</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
							</tr>
							<tr>
								<th>입고번호</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
							</tr>
							<tr>
								<th>납품처</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
                            </tr>
                            <tr>
								<th>납품처코드</th>
								<td>
									<input class="tbox regFullSort" value="" readonly>
								</td>
                            </tr>
                            <tr>
								<th>납품처주소</th>
								<td>
									<input class="tbox regFullSort" value="" readonly>
								</td>
                            </tr>
                            <tr>
								<th>납품처연락처</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
                            </tr>
                            <tr>
								<th>발주처</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
                            </tr>
                            <tr>
								<th>발주처코드</th>
								<td>
									<input class="tbox regFullSort" value="" readonly>
								</td>
                            </tr>
                            <tr>
								<th>발주처연락처</th>
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
								<th>발주요청품목</th>
								<td>
                                    <!-- :: open : ksg_3 : [진맛] 테이블 내에서 긴 카드박스 형태로 품목 여러개를 표시하는 내용. -->
                                    <!-- :: open : ksg_3 : [진맛] 품목을 검색하고 등록하는 파트. -->
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
                                    <!-- :: close : ksg_3 : [진맛] 품목을 검색하고 등록하는 파트. -->
                                    <div class="inTblCdListGroup">
                                        <!-- :: open : ksg_3 : [진맛] 테이블 개별 품목의 카드박스 내용. -->
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
                                        <!-- :: close : ksg_3 : [진맛] 테이블 개별 품목의 카드박스 내용. -->
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
                                    <!-- :: close : ksg_3 : [진맛] 테이블 내에서 긴 카드박스 형태로 품목 여러개를 표시하는 내용. -->
								</td>
                            </tr>
                            <tr>
								<th>배송방식</th>
								<td>
                                    <select class="sbox regFullSort">
										<option>-선택-</option>
										<option>1. 진짜 맛있는 과일 배송업체</option>
										<option>2. 거래처 계약 배송업체</option>
									</select>
								</td>
                            </tr>
                            <tr>
								<th>택배비</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
                            </tr>
                            <tr>
								<th>택배수량</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
                            </tr>
                            <tr>
								<th>입고상태</th>
								<td>
                                    <select class="sbox regFullSort">
										<option>-선택-</option>
										<option>1. 입고 대기</option>
                                        <option>2. 입고 승인</option>
                                        <option>3. 입고 출발</option>
                                        <option>4. 입고중</option>
                                        <option>5. 입고 완료</option>
                                        <option>6. 입고 취소</option>
                                    </select>
                                    <div class="mt2">
                                        <input class="tbox regFullSort" placeholder="취소 사유" value="">
                                    </div>
								</td>
                            </tr>
							</tbody>
						</table>
					</div>
				</div>
                <div class="btnGroup horizontalBottomSort">
					<a href="javascript:void(0);" class="btn saveSort">저장</a>
                </div>
            </div>
            <!-- :: close : ksg_3 : [진맛] 너비가 좁은 우측 내용 파트. 여기서는 풀 사이즈 싱글 테이블만 사용할 것이므로 이것은 display : none 처리. -->
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
					<th>납품처</th>
					<td>
						<input class="tbox regFullSort" value="">
					</td>
                </tr>
                <tr>
					<th>납품처코드</th>
					<td>
						<input class="tbox regFullSort" value="" readonly>
					</td>
                </tr>
                <tr>
					<th>납품처주소</th>
					<td>
						<input class="tbox regFullSort" value="" readonly>
					</td>
                </tr>
                <tr>
					<th>납품처연락처</th>
					<td>
						<input class="tbox regFullSort" value="" readonly>
					</td>
                </tr>
                <!-- :: open : ksg_3 : [진맛] 입력 팝업에서는 사용하지 않을 발주처 정보 파트. display : none 처리. -->
                <tr style="display : none;">
					<th>발주처</th>
					<td>
						<input class="tbox regFullSort" value="">
					</td>
                </tr>
                <tr style="display : none;">
					<th>발주처코드</th>
					<td>
						<input class="tbox regFullSort" value="" readonly>
					</td>
                </tr>
                <tr style="display : none;">
					<th>발주처연락처</th>
					<td>
						<input class="tbox regFullSort" value="">
					</td>
                </tr>
                <!-- :: close : ksg_3 : [진맛] 입력 팝업에서는 사용하지 않을 발주처 정보 파트. display : none 처리. -->
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
					<th>
						발주요청<br>
						품목
					</th>
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
					        		<a href="javascript:void(0);" class="btn searchSort">등록</a>
					        	</div>
                            </div>
							<!-- :: close : ksg_3 : [진맛] 품목을 검색하고 등록하는 파트. -->
							<!-- :: open : ksg_4 : [진맛] 내부 테이블(진짜 <table> 태그 사용)에 대한 내용 파트. -->
							<table class="searchResultTable">
								<colgroup>
                    		        <col style="width : 100px;">
                    		        <col style="width : 100px;">
                    		        <col style="width : 100px;">
                    		        <col style="width : 50px;">
                    		        <col style="width : 100px;">
                    		        <col style="width : 100px;">
                    		        <col style="width : 100px;">
                    		        <col style="width : 60px;">
                    		    </colgroup>
								<thead>
								<tr>
									<th>
                    		            품목명<br>
                    		            (품목코드)
                    		        </th>
                    		        <th>
                    		            품종명<br>
                    		            (품종코드)
                    		        </th>
                    		        <th>유통기한</th>
                    		        <th>규격</th>
                    		        <th>단가</th>
                    		        <th>공급가액</th>
                    		        <th>부가세</th>
                    		        <th>관리</th>
								</tr>
								</thead>
								<tbody>
                    		    <tr class="reged">
                    		        <td>
                    		            <div>
                    		                사과
                    		            </div>
                    		            <div class="mt5">
                    		                (115122)
                    		            </div>
									</td>
									<td>
                    		            <div>
                    		                부사
                    		            </div>
                    		            <div class="mt5">
                    		                (110055)
                    		            </div>
                    		        </td>
                    		        <td>2021.02.24</td>
                    		        <td>14</td>
                    		        <td>3,400원</td>
                    		        <td>4,400원</td>
                    		        <td>600원</td>
                    		        <td>
										<div class="btnGroup inListTable">
											<a href="javascript:void(0);" class="btn regSort">선택</a>
										</div>
									</td>
                    		    </tr>
								</tbody>
                    		</table>
							<!-- :: close : ksg_4 : [진맛] 내부 테이블(진짜 <table> 태그 사용)에 대한 내용 파트. -->


                            
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
							<!-- :: open : ksg_4 : [진맛] 내부 테이블(진짜 <table> 태그 사용)에 대한 내용 파트. -->
							<table class="searchResultTable">
								<colgroup>
									<col style="width : 100px;">
                    		        <col style="width : 100px;">
                    		        <col style="width : 100px;">
                    		        <col style="width : 50px;">
                    		        <col style="width : 100px;">
                    		        <col style="width : 100px;">
                    		        <col style="width : 100px;">
                    		        <col style="width : 60px;">
                    		    </colgroup>
								<thead>
								<tr>
									<th>
                    		            품목명<br>
                    		            (품목코드)
                    		        </th>
                    		        <th>
                    		            품종명<br>
                    		            (품종코드)
                    		        </th>
                    		        <th>유통기한</th>
                    		        <th>규격</th>
                    		        <th>단가</th>
                    		        <th>공급가액</th>
                    		        <th>부가세</th>
                    		        <th>관리</th>
								</tr>
								</thead>
								<tbody>
                    		    <tr class="reged">
                    		        <td>
                    		            <div>
                    		                사과
                    		            </div>
                    		            <div class="mt5">
                    		                (115122)
                    		            </div>
									</td>
									<td>
                    		            <div>
                    		                부사
                    		            </div>
                    		            <div class="mt5">
                    		                (110055)
                    		            </div>
                    		        </td>
                    		        <td>2021.02.24</td>
                    		        <td>
										<input class="tbox regFullSort listMod" placeholder="" value="">
									</td>
                    		        <td>
										<input class="tbox regFullSort listMod" placeholder="" value="">
									</td>
                    		        <td>
										<input class="tbox regFullSort listMod" placeholder="" value="">
									</td>
                    		        <td>
										<input class="tbox regFullSort listMod" placeholder="" value="">
									</td>
                    		        <td>
										<div class="btnGroup inListTable">
											<a href="javascript:void(0);" class="btn delSort">삭제</a>
										</div>
									</td>
								</tr>
								<tr class="reged">
                    		        <td>
                    		            <div>
                    		                사과
                    		            </div>
                    		            <div class="mt5">
                    		                (115122)
                    		            </div>
									</td>
									<td>
                    		            <div>
                    		                부사
                    		            </div>
                    		            <div class="mt5">
                    		                (110055)
                    		            </div>
                    		        </td>
                    		        <td>2021.02.24</td>
                    		        <td>
										<input class="tbox regFullSort listMod" placeholder="" value="">
									</td>
                    		        <td>
										<input class="tbox regFullSort listMod" placeholder="" value="">
									</td>
                    		        <td>
										<input class="tbox regFullSort listMod" placeholder="" value="">
									</td>
                    		        <td>
										<input class="tbox regFullSort listMod" placeholder="" value="">
									</td>
                    		        <td>
										<div class="btnGroup inListTable">
											<a href="javascript:void(0);" class="btn delSort">삭제</a>
										</div>
									</td>
								</tr>
								<tr class="reged">
                    		        <td>
                    		            <div>
                    		                사과
                    		            </div>
                    		            <div class="mt5">
                    		                (115122)
                    		            </div>
									</td>
									<td>
                    		            <div>
                    		                부사
                    		            </div>
                    		            <div class="mt5">
                    		                (110055)
                    		            </div>
                    		        </td>
                    		        <td>2021.02.24</td>
                    		        <td>
										<input class="tbox regFullSort listMod" placeholder="" value="">
									</td>
                    		        <td>
										<input class="tbox regFullSort listMod" placeholder="" value="">
									</td>
                    		        <td>
										<input class="tbox regFullSort listMod" placeholder="" value="">
									</td>
                    		        <td>
										<input class="tbox regFullSort listMod" placeholder="" value="">
									</td>
                    		        <td>
										<div class="btnGroup inListTable">
											<a href="javascript:void(0);" class="btn delSort">삭제</a>
										</div>
									</td>
                    		    </tr>
								<tr class="reged">
                    		        <td>
                    		            <div>
                    		                사과
                    		            </div>
                    		            <div class="mt5">
                    		                (115122)
                    		            </div>
									</td>
									<td>
                    		            <div>
                    		                부사
                    		            </div>
                    		            <div class="mt5">
                    		                (110055)
                    		            </div>
                    		        </td>
                    		        <td>2021.02.24</td>
                    		        <td>
										<input class="tbox regFullSort listMod" placeholder="" value="">
									</td>
                    		        <td>
										<input class="tbox regFullSort listMod" placeholder="" value="">
									</td>
                    		        <td>
										<input class="tbox regFullSort listMod" placeholder="" value="">
									</td>
                    		        <td>
										<input class="tbox regFullSort listMod" placeholder="" value="">
									</td>
                    		        <td>
										<div class="btnGroup inListTable">
											<a href="javascript:void(0);" class="btn delSort">삭제</a>
										</div>
									</td>
								</tr>
								<tr class="reged">
                    		        <td>
                    		            <div>
                    		                사과
                    		            </div>
                    		            <div class="mt5">
                    		                (115122)
                    		            </div>
									</td>
									<td>
                    		            <div>
                    		                부사
                    		            </div>
                    		            <div class="mt5">
                    		                (110055)
                    		            </div>
                    		        </td>
                    		        <td>2021.02.24</td>
                    		        <td>
										<input class="tbox regFullSort listMod" placeholder="" value="">
									</td>
                    		        <td>
										<input class="tbox regFullSort listMod" placeholder="" value="">
									</td>
                    		        <td>
										<input class="tbox regFullSort listMod" placeholder="" value="">
									</td>
                    		        <td>
										<input class="tbox regFullSort listMod" placeholder="" value="">
									</td>
                    		        <td>
										<div class="btnGroup inListTable">
											<a href="javascript:void(0);" class="btn delSort">삭제</a>
										</div>
									</td>
								</tr>
								<tr class="reged">
                    		        <td>
                    		            <div>
                    		                사과
                    		            </div>
                    		            <div class="mt5">
                    		                (115122)
                    		            </div>
									</td>
									<td>
                    		            <div>
                    		                부사
                    		            </div>
                    		            <div class="mt5">
                    		                (110055)
                    		            </div>
                    		        </td>
                    		        <td>2021.02.24</td>
                    		        <td>
										<input class="tbox regFullSort listMod" placeholder="" value="">
									</td>
                    		        <td>
										<input class="tbox regFullSort listMod" placeholder="" value="">
									</td>
                    		        <td>
										<input class="tbox regFullSort listMod" placeholder="" value="">
									</td>
                    		        <td>
										<input class="tbox regFullSort listMod" placeholder="" value="">
									</td>
                    		        <td>
										<div class="btnGroup inListTable">
											<a href="javascript:void(0);" class="btn delSort">삭제</a>
										</div>
									</td>
								</tr>
								<tr class="reged">
                    		        <td>
                    		            <div>
                    		                사과
                    		            </div>
                    		            <div class="mt5">
                    		                (115122)
                    		            </div>
									</td>
									<td>
                    		            <div>
                    		                부사
                    		            </div>
                    		            <div class="mt5">
                    		                (110055)
                    		            </div>
                    		        </td>
                    		        <td>2021.02.24</td>
                    		        <td>
										<input class="tbox regFullSort listMod" placeholder="" value="">
									</td>
                    		        <td>
										<input class="tbox regFullSort listMod" placeholder="" value="">
									</td>
                    		        <td>
										<input class="tbox regFullSort listMod" placeholder="" value="">
									</td>
                    		        <td>
										<input class="tbox regFullSort listMod" placeholder="" value="">
									</td>
                    		        <td>
										<div class="btnGroup inListTable">
											<a href="javascript:void(0);" class="btn delSort">삭제</a>
										</div>
									</td>
								</tr>
								<tr class="reged">
                    		        <td>
                    		            <div>
                    		                사과
                    		            </div>
                    		            <div class="mt5">
                    		                (115122)
                    		            </div>
									</td>
									<td>
                    		            <div>
                    		                부사
                    		            </div>
                    		            <div class="mt5">
                    		                (110055)
                    		            </div>
                    		        </td>
                    		        <td>2021.02.24</td>
                    		        <td>
										<input class="tbox regFullSort listMod" placeholder="" value="">
									</td>
                    		        <td>
										<input class="tbox regFullSort listMod" placeholder="" value="">
									</td>
                    		        <td>
										<input class="tbox regFullSort listMod" placeholder="" value="">
									</td>
                    		        <td>
										<input class="tbox regFullSort listMod" placeholder="" value="">
									</td>
                    		        <td>
										<div class="btnGroup inListTable">
											<a href="javascript:void(0);" class="btn delSort">삭제</a>
										</div>
									</td>
                    		    </tr>
								</tbody>
                    		</table>
							<!-- :: close : ksg_4 : [진맛] 내부 테이블(진짜 <table> 태그 사용)에 대한 내용 파트. -->
                        </div>
                        <!-- :: close : ksg_3 : [진맛] 우측 선택된 품목 파트. -->
                        <!-- :: close : ksg_3 : [진맛] 테이블 내에서 품목을 등록하는 병렬 내용 파트.. -->
					</td>
                </tr>
                <tr>
					<th>배송방식</th>
					<td>
                        <select class="sbox regFullSort">
							<option>-선택-</option>
							<option>1. 진짜 맛있는 과일 배송업체</option>
							<option>2. 거래처 계약 배송업체</option>
						</select>
					</td>
                </tr>
                <tr>
					<th>택배비</th>
					<td>
						<input class="tbox regFullSort" value="">
					</td>
                </tr>
                <tr>
					<th>택배수량</th>
					<td>
						<input class="tbox regFullSort" value="">
					</td>
				</tr>
				<tr>
					<th>금액처리방법</th>
					<td>
                        <select class="sbox regFullSort">
							<option>-선택-</option>
							<option>1. 선금</option>
							<option>2. 납입시</option>
							<option>3. 후불</option>
							<option>4. 후불여신(개월)</option>
						</select>
						<div class="mt2">
							<input class="tbox regFullSort" placeholder="여신개월" value="">
						</div>
					</td>
                </tr>
                <tr>
					<th>납품일</th>
					<td>
						<input class="tbox regFullSort" value="">
					</td>
                </tr>
                <tr>
					<th>입고 담당자</th>
					<td>
						<input class="tbox regFullSort" value="">
					</td>
                </tr>
                <tr>
					<th>입고 담당자 전화번호</th>
					<td>
						<input class="tbox regFullSort" value="">
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
<script src="/common/js/datePick.js"></script>
<script>
// :: single : ksg_3 : [진맛] 버튼 누르면 품목 리스트 팝업을 표시하도록 하는 스크립트가 있던 곳.
// :: single : ksg_3 : [진맛] 테이블의 목록 중, 등록된 테이블 라인(class="reged")가 있는 곳만, 클릭했을 때 우측 상세정보가 표시되도록 하는 스크립트 있던 곳.
// :: single : ksg_3 : [진맛] "입고내역 추가" 버튼을 클릭했을 때 우측 상세정보가 표시되도록 하는 스크립트 있던 곳.

// :: open : ksg_4 : [진맛] 좌측 리스트의 "입고내역 추가" 버튼 클릭 시, 상세정보/등록 팝업창 표시하는 스크립트.
$(document).on('click', '.btn.wearingPopBtn', function(){
	$('.popup.centerSort.wearingPop').show();
	$('.contents').addClass('overlay');
});
// :: close : ksg_4 : [진맛] 좌측 리스트의 "입고내역 추가" 버튼 클릭 시, 상세정보/등록 팝업창 표시하는 스크립트.
</script>
</body>
</html>