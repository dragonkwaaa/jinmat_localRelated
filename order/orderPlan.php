<!-- :: ksg_5 = ksg_20210118_1639 -->
<!-- :: ksg_4 = ksg_20210112_2039 -->
<!-- :: ksg_3 = ksg_20210112_1604 -->
<!-- :: ksg_2 = ksg_20210109_1554 -->
<!-- :: ksg_1 = ksg_20210108_1930 -->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/pages/head.php';
	$tCode					=	'200';
	$lCode					=	'0202';
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
			<div class="section horizontalManageSort searcManageSort Six">  
				<div class="titleBox manageHeadlineSort">발주계획 목록</div>
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
						<div class="titleBox inlistConSort">
							<div class="titleText">발주계획 목록</div>
							<a href="javascript:void(0);" class="btn headRightAbMod addorderBtn">발주추가</a>  
							<!-- :: single : ksg_4 : [진맛] 등록 페이지로 이동하는 버튼 있던 곳. -->
						</div>
						<div class="sboxGroup listArraySort">
								<a href="javascript:void(0);" class="btn listTopSort addStaffBtn">엑셀저장</a> 
                            	<a href="javascript:void(0);" class="btn listTopSort addStaffBtn">인쇄</a>
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
							<col style="width : 50px;"> 
						</colgroup>
						<thead>
						<tr>
							<th>
								발주일자<br>
								(발주코드)
							</th>
							<th>
                                원자재명<br>
                                (원자재코드)
                            </th>
                            <th>
                                납품처명<br>
                                (납품처코드)  
							</th> 
							<th>발주담당자<br>
							(담당자연락처)
							</th> 
							<th>배송사항</th>
                            <th>진행상태</th>
							<th>비고</th>
							<th>관리</th>
						</tr>
						</thead>
						<tbody>
						<tr class="reged">
							<td>
								<div>
                                    2021-01-22 10:00
                                </div>
                                <div class="mt5">
                                    (G12341111)
                                </div>
							</td>
							<td>
								<div>
                                    사과
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
                            </td>
                            <td>
								<input class="tbox regFullSort Textleft"> 
							</td> 
							<td>
								<div class="btnGroup inListTable">
									<a href="javascript:void(0);" class="btn modifySort">발주</a>
									<a href="javascript:void(0);" class="btn deleteSort">삭제</a>
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
			<div class="section horizontalManageSort Four"> 
                <div class="titleBox manageHeadlineSort">상세정보</div>
				<!-- :: open : ksg_3 : [진맛] 우측의 내용 입력 파트. -->
                <div class="specInfoGroup hide">
                    <div class="conGroup verticalManageSort">
						<div class="headLineBox listControlSort">
							<div class="titleBox inlistConSort">
								<div class="titleText">납품처 정보</div>
							</div>
						</div>
						<table class="infoGroup">
							<colgroup>
								<col width="100">
								<col width="*">
							</colgroup>
							<tbody>
                            <tr> 
								<th>납품처명(코드)</th>
								<td colspan="3">
									<input class="tbox normal" value="">
								</td>
                            </tr> 
                            <tr>
								<th>납품처 연락처</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
								<th>납품처 주소</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td> 
                            </tr>
							<tr>
								<th>배송방법</th>
								<td>
									<select class="sbox tiny"> 
										<option>택배배송</option>
										<option>직접배송</option>
										<option>새벽배송</option> 
										<option>퀵서비스</option>
										<option>산지직배송</option>
									</select>
								</td>  
								<th>권역</th>
								<td>
									<select class="sbox tiny">
										<option>센터1</option>  
										<option>센터2</option>
									</select>
								</td>
							</tr>
							<tr>
								<th>금액처리방법</th>
								<td colspan="3">
									<select class="sbox tiny">
										<option>선금</option>
										<option>납입시</option>
										<option>후불</option>
										<option>후불여신(_개월)</option>
									</select>
								</td>
							</tr>
							<tr>
								<th>납품일</th>
								<td colspan="3">  
								    <input class="tbox dateBox small" id="startDate" readonly="" placeholder="납품일">
								</td>   
							</tr>
							<tr>
								<th>납품처 특이사항</th>
								<td colspan="3">
									<input class="tbox regFullSort" value="">
								</td>
							</tr>
							</tbody>
 						</table>  

						 <div class="headLineBox listControlSort">
							<div class="titleBox inlistConSort">
								<div class="titleText">납품목록</div>
							</div>
						</div>	
						<table class="infoGroup">
						<colgroup>
							<col style="width : 170px;">  
							<col style="width : 100px;">  
							<col style="width : 100px;">
							<col style="width : 170px;"> 
							<col style="width : 250px;"> 
							<col style="width : 220px;">
						</colgroup> 
						<thead>
						<tr>
							<th>원자재명</th>
							<th>규격</th> 
							<th>수량</th>
							<th>단가</th>
							<th>금액</th>  
							<th>비고</th>
						</tr>
						</thead>
						<tbody>
						<!-- :: open : ksg_4 : [진맛] 테이블에 등록하는 파트. -->
						<tr>
							<td>
								<div>
									<input class="tbox regFullSort Textleft" placeholder="원자재명(코드)" value="">
								</div>
							</td> 
							<td> 
								<div>
									<input class="tbox regFullSort Textleft" placeholder="규격" value="">
								</div>
							</td> 
							<td>
								<div>
									<input class="tbox regFullSort Textleft" placeholder="수량" value="">
								</div>
							</td> 
							<td>
								<div>
									<input class="tbox regFullSort Textleft" placeholder="단가" value="">
								</div>
							</td> 
							<td>
								<div>
									<input class="tbox regFullSort Textleft" placeholder="금액" value="">
								</div>
							</td> 
							<td>
								<div>  
									<input class="tbox regFullSort Textleft" placeholder="비고" value="">
								</div>
							</td>        				
						</tr>  
						</tbody>
						</table>

						<div class="headLineBox listControlSort">
							<div class="titleBox inlistConSort">
								<div class="titleText">계산합계</div>
							</div>
						</div>	
						<table class="infoGroup">
							<colgroup>
								<col width="33%">
								<col width="*">
							</colgroup>
						<thead>
							<th>공급가액</th> 
							<th>부가세액</th>
							<th>총합계</th>
						</thead>	
						<tbody>
							<tr>
								<td>
									2,800	
								</td>
								<td>
									1,000
								</td>
								<td>
									5,500
								</td>
							</tr>
						</tbody>
						</table>
						<div class="headLineBox listControlSort">
							<div class="titleBox inlistConSort">
								<div class="titleText">발주담당자 정보</div>
							</div>
						</div>
						<table class="infoGroup">
							<colgroup>
								<col width="100">
								<col width="*">
							</colgroup>
							<tbody>
                            <tr>
								<th>발주담당자명</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
								<th>담당자연락처</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
                            </tr>  
							</tbody>
 						</table>	 	  
					</div>   
					<div class="headLineBox pageControlSort center"> 
						<a href="javascript:void(0);" class="btn listTopSort addStaffBtn ">저장</a>   
					</div>  
				</div>
                <!-- :: close : ksg_5 : [진맛] 우측 하단의 내용 입력창 파트. -->
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