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
            <!-- :: close : ksg_2 : [진맛] 입력창 / 검색버튼 / 추가버튼이 포함된 검색어 파트. -->
			<div class="section horizontalManageSort searcManageSort topLineMod">  
				<div class="titleBox manageHeadlineSort">검색</div>
				<div class="conGroup verticalManageSort bottomRowSort">
					<div class="headLineBox listControlSort"> 
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
							    					<input type="checkbox" name="" value="">
							    					<label></label>
							    				</div>
							    				<div class="checkBoxTitle">택배배송</div>
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
							    				<div class="checkBoxTitle">새벽발송</div>
                                            </div>
											<div class="checkBoxCase">
							    				<div class="checkBoxIconBox">
							    					<input type="checkbox" name="" value="">
							    					<label></label>
							    				</div>
							    				<div class="checkBoxTitle">퀵서비스</div>
                                            </div>
											<div class="checkBoxCase">
							    				<div class="checkBoxIconBox">
							    					<input type="checkbox" name="" value="">
							    					<label></label>
							    				</div>
							    				<div class="checkBoxTitle">산지직배송</div>  
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
						<div class="titleBox manageHeadlineSort">발주 목록</div>
						<div class="titleBox inlistConSort">
							<div class="titleText">발주목록</div> 
							<a href="/order/orderSpec" class="btn headRightAbMod addorderBtn">발주추가</a>  
							<!-- :: single : ksg_4 : [진맛] 등록 페이지로 이동하는 버튼 있던 곳. -->
						</div>
						<div class="sboxGroup listArraySort">
								<a href="javascript:void(0);" class="btn listTopSort addStaffBtn">엑셀업로드</a> 
								<a href="javascript:void(0);" class="btn listTopSort addStaffBtn">엑셀저장</a>
								<a href="javascript:void(0);" class="btn listTopSort addStaffBtn">작업지시</a>   
							<select class="sbox">  
								<option>번호순▼</option>  
								<option>번호순▲</option>
								<option>등록순▼</option>   
								<option>등록순▲</option>
							</select>
							<select class="sbox">
								<option>10개씩</option>
								<option>20개씩</option>
							</select> 
						</div>
					</div>
					<table class="searchResultTable ">
						<colgroup>
							<col style="width : 30px;">
							<col style="width : 70px;">  
							<col style="width : 70px;">
							<col style="width : 80px;">  
							<col style="width : 90px;">
							<col style="width : 90px;">       
							<col style="width : 40px;">   
                            <col style="width : 60px;"> 
							<col style="width : 70px;">  
							<col style="width : 70px;">
							<col style="width : 70px;">
							<col style="width : 55px;">
							<col style="width : 80px;">       
							<col style="width : 180px;">  
							<col style="width : 80px;">  
                            <col style="width : 40px;"> 
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
								발주코드<br>
								채널<br> 
								(발주원본코드) 
							</th>
							<th>주문일자</th> 
							<th> 
                                주문자명<br>
                                주문자 전화번호<br>
								주문자 핸드폰번호
                            </th>
							<th>주문 상품명</th>  
                            <th>   
                               상품명
							</th>
							<th>상품수량</th>
							<th>판매가</th> 
							<th>총 결제금액<br>
								총 품목금액<br>
								총 배송금액
							</th>
							<th>예치금<br>
								마일리지
							</th>
							<th>총 회원할인금액<br>
								총 상품할인금액<br>
								총 쿠폰할인금액
							</th>
							<th>금액처리방법</th> 
							<th>받는분<br>
								받는분 전화번호<br>
								받는분 핸드폰번호
							</th>
							<th>배송지정보</th> 
							<th>발주상태</th>
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
									210211
								</div>
								<div class="mt2">
									일반발주
								</div> 
								<div class="mt2">
									164521
								</div>
							</td>
							<td>
								2021-02-21
							</td>
							<td>
								<div>
									허평강
								</div>
								<div class="mt2">
									031-846-6918
								</div>
								<div class="mt2">
									010-4300-6138
								</div>
							<td>
								<div class="mt2">
									진한 청포도 외 1건
								</div>
							</td>
							<td>진한 청포도</td>
							<td>2</td>
							<td class="right">
								10,000
								<span class="priceWord">원</span>
							</td>
							<td class="right">
								<div>
									18,000
									<span class="priceWord">원</span>
								</div>
								<div class="mt2">
									2,0000
									<span class="priceWord">원</span>
								</div>
								<div class="mt2">
									0 
									<span class="priceWord">원</span>
								</div> 
							</td> 
							<td class="right">  
								<div>
									0
									<span class="priceWord">원</span>
								</div>
								<div class="mt2">
									0
									<span class="priceWord">원</span>
								</div>
							</td>
							<td class="right"> 
								<div>
									0
									<span class="priceWord">원</span>
								</div>
								<div class="mt2">
									2,000
									<span class="priceWord">원</span>
								</div>
								<div class="mt2">
									0 
									<span class="priceWord">원</span>
								</div>
							</td>
							<td>
								선불
                            </td>
							<td>
								<div>
									김별
								</div>
								<div class="mt2">
									02-454-6918
								</div>
								<div class="mt2">
									010-5100-0429
								</div>
							</td>
							<td>
								<div>
									123-874
								</div>
								<div class="mt2">
									서울시 도봉구 방학동 인경빌라 203호
								</div>
							</td>
                            <td>
								<select class="sbox regFullSort">
									<option>발주요청</option>
                                    <option>발주취소</option> 
                                    <option>작업지시</option> 
								</select>
                            </td>
							<td>
								<div class="btnGroup inListTable">
									<a href="javascript:void(0);" class="btn modifySort">저장</a>
								</div>
								<div class="btnGroup inListTable">
									<a href="/order/orderSpec" class="btn modifySort">상세</a>
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
		</div>
	</div>
</div>

<div class="popup centerSort normal wearingPop">
	<div class="popupCon normalSort">  
		<a href="javascript:closePop()">
			<img src="/common/img/close.png" class="close">
		</a>
		<div class="titleBox popupSort"> 
		작업지시
		</div>
		<div class="conGroup verticalManageSort">
			<table class="infoGroup">
				<colgroup>
					<col width="10%">
					<col width="90%">
				</colgroup>  
				<tbody>
				<tr> 
					<th>공장</th>
					<td>
						<select class="sbox normal">
						    <option>서울공장</option>
						    <option>경기공장</option>
						</select> 
					</td>
				</tr> 
				<tr>
					<th>작업지시일</th>  
					<td>  
					<div class="dateInputCase topLineSearchMod">
						<input class="tbox dateBox shortMod" id="startDate" readonly="" placeholder="작업지시일">
					</div>
					</td>
                </tr> 
                <tr>
					<th>
						관리
					</th> 
					<td>
                        <!-- :: open : ksg_3 : [진맛] 테이블 내에서 품목을 등록하는 병렬 내용 파트.. -->
                        <!-- :: open : ksg_3 : [진맛] 왼쪽 품목 검색 파트. --> 
                        <div class="inTblBoxGroup fullSort scrollSort wearingGoodsMod">
							<!-- :: open : ksg_4 : [진맛] 내부 테이블(진짜 <table> 태그 사용)에 대한 내용 파트. --> 
							<table class="searchResultTable">
								<colgroup> 
									<col style="width : 100px;"> 
									<col style="width : 30px;"> 
									<col style="width : 120px;"> 
									<col style="width : 80px;"> 
									<col style="width : 60px;"> 
									<col style="width : 60px;">    
									<col style="width : 50px;">  
                    		    </colgroup>   
								<thead>
								<tr>
									<th>상품명</th>
									<th>발주수량</th>
									<th>원자재명</th>
									<th>창고</th> 
									<th>현재재고</th>
									<th>필요수량</th>
									<th>관리</th> 
								</tr>  
								</thead>
								<tbody> 
								<tr class="reged">
									<td>
										진한 청포도
									</td>
									<td>
										10
									</td>
									<td>
										청포도
									</td>
									<td>A창고</td> 
									<td>10</td> 
									<td>10</td> 
									<td> 
										<div class="btnGroup inListTable">
											<a href="/stock/index" class="btn regSort">재고이동</a> 
										</div>  
									</td>		 
								</tr>
								</tbody> 
                    		</table>
                        </div>   
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
 
$(document).on('click', '.addStaffBtn', function(){
	$('.popup.centerSort.wearingPop').show();
	$('.contents').addClass('overlay');
}); 

  
</script>
</body>
</html>