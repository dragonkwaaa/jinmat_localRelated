<!-- :: ksg_6 = ksg_20210115_1704 -->
<!-- :: ksg_5 = ksg_20210113_1650 -->
<!-- :: ksg_4 = ksg_20210112_2039 -->
<!-- :: ksg_3 = ksg_20210112_1604 -->
<!-- :: ksg_2 = ksg_20210109_1554 -->
<!-- :: ksg_1 = ksg_20210108_1930 -->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/pages/head.php';
	$lCode					=	'0103';
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
			<!-- :: close : ksg_2 : [진맛] 입력창 / 검색버튼 / 추가버튼이 포함된 검색어 파트. -->
			<div class="section horizontalManageSort AsymDoub3">
				<div class="titleBox manageHeadlineSort">납품처 목록</div>
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
											<option>납품처명</option>
											<option>납품처코드</option>
											<option>대표자명</option>
											<option>납품담당자명</option>
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
							<div class="titleText">납품처 목록</div>
							<a href="javascript:void(0);" class="btn headRightAbMod addTradeBtn">납품처 추가</a>
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
							<col style="width : 30px;">
							<col style="width : 90px;">
							<col style="width : 90px;">
							<col style="width : 130px;">
							<col style="width : 80px;">
							<col style="width : 100px;">
							<col style="width : 120px;">
							<col style="width : 80px;">  
							<col style="width : 50px;">
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
								납품처명(상호)<br>
								(납품처코드)
							</th>
							<th>대표자정보</th>
							<th>주소</th>
							<th>납품담당자</th>
							<th>담당자전화번호</th>
							<th>비고</th>
							<th>사용여부</th>
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
									강남농원
								</div>
								<div class="mt5">
									G115200
								</div>
							</td>
							<td>
								<div>
									곽반장
								</div>
								<div class="mt5">
									010-1234-1234
								</div>
							</td>
							<td>
								서울시 영등포구 여의도동 1
							</td>
							<td>
								장팀장
							</td>
							<td>
								<div>
									010-4321-4321
								</div>
								<div class="mt5">
									010-1234-1234
								</div>
								<div class="mt5">  
									010-1234-5678
								</div>
							</td>
							<td>
								납품처 거래항목 1.2.3.4.5.6
							</td>
							<td>
								<!-- :: open : ksg_4 : [진맛] 사용/미사용 드롭박스 내용. -->
								<select class="sbox regFullSort">
									<option>사용</option>
									<option selected="">미사용</option>
								</select>
								<!-- :: close : ksg_4 : [진맛] 사용/미사용 드롭박스 내용. -->
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
			<div class="section horizontalManageSort AsymDoub4">
                <div class="titleBox manageHeadlineSort">상세정보</div>
				<!-- :: open : ksg_5 : [진맛] 생산품의 상세정보 파트. 입력창 형식. -->
				<div class="specRegGroup hide">
					<div class="conGroup verticalManageSort">
						<div class="headLineBox listControlSort">
							<div class="titleBox inlistConSort">
								<div class="titleText">납품처 상세정보</div>
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
								<th>납품처코드</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td> 
							</tr>
							<tr>
								<th>납품처주소</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
								<th>납품담당자</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
							</tr> 
							<tr>
								<th>거래처구분</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
								<th>업종구분</th>
								<td> 
									<input class="tbox regFullSort" value="">
								</td>
							</tr>
							<tr>
								<th>세무신고거래처</th>
								<td colspan="4">
									<input class="tbox regFullSort" value="">
								</td>
							</tr>
							<tr>
								<th>종사업장번호</th>
								<td colspan="4">
									<input class="tbox regFullSort" value="">
								</td>
							</tr>
							<tr>
								<th>대표자명</th>
								<td colspan="4">
									<input class="tbox regFullSort" value="">
								</td>
							</tr>
							<tr>  
								<th>업태</th>
								<td>
									<input class="tbox regFullSort" placeholder="업태명(업태코드)" value="">
								</td>
								<th>종목</th>
								<td> 
									<input class="tbox regFullSort" placeholder="종목명(종목코드)" value="">
								</td>  
							</tr>
							<tr>
								<th>유선전화</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td> 
								<th>대표자 휴대폰</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td> 
							</tr>
							<tr>
								<th>팩스</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
								<th>이메일</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
							</tr>	
							<tr>
								<th>주소</th>
								<td> 
									<input class="tbox regFullSort" value="">  
								</td>
								<th>홈페이지</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
							</tr>
							<tr>
								<th>검색창 내용</th>
								<td colspan="4">
									<input class="tbox regFullSort" value="#내용1, #내용2, #내용3">
								</td>
							</tr>
							<tr>
								<th>거래처그룹</th>
								<td colspan="4">
									<input class="tbox regFullSort" value="">
								</td>
							</tr>
							<tr>
								<th>출하대상거래처</th>
								<td colspan="4">
									<input class="tbox regFullSort" value="">
								</td>
							</tr>
							<tr>
								<th>거래유형</th>
								<td colspan="4">
									<input class="tbox regFullSort" placeholder="영업/구매" value="">
								</td>
							</tr>
							<tr>
								<th>담당자 연락처1</th>
								<td colspan="4">
									<input class="tbox regFullSort" value="">
								</td>
							</tr>
							<tr>
								<th>담당자 연락처2</th>
								<td colspan="4">
									<input class="tbox regFullSort" value="">
								</td>
							</tr>
							<tr>
								<th>담당자 연락처3</th>
								<td colspan="4">
									<input class="tbox regFullSort" value="">
								</td>
							</tr>
							<tr>
								<th>거래타입</th>
								<td colspan="4">
									<div class="inTableRadioGroup">
										<div class="radioCase">
											<div class="radioIconBox">
												<input type="radio" name="cate_1a" value="1" checked="">
												<label></label>
											</div>
											<div class="radioTitle">직거래 가능</div>
										</div>
										<div class="radioCase">
											<div class="radioIconBox">
												<input type="radio" name="cate_1a" value="2">
												<label></label>
											</div>
											<div class="radioTitle">직거래 불가능</div>
										</div>
									</div>
								</td>  
							</tr>  
							</tbody>
						</table>
					</div>
				</div>
				<div class="specRegGroup hide">
					<div class="conGroup verticalManageSort">
						<div class="headLineBox listControlSort"> 
							<div class="titleBox inlistConSort">
								<div class="titleText">원자재 정보</div>
							</div>
						</div>
							<table class="searchResultTable ">
							<thead>
								<tr> 
									<th>원자재</th> 
									<th>생산양</th>
									<th>주기</th>
								</tr>
							</thead> 
							<tbody>
								<tr>
									<td>
									<input class="tbox regFullSort" value="">
									</td>
									<td>
									<input class="tbox regFullSort" value="">
									</td>
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
				<!-- :: close : ksg_5 : [진맛] 생산품의 상세정보 파트. 입력창 형식. -->
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
<script>
// :: open : ksg_4 : [진맛] 원자재 목록 중, 등록된 테이블 라인(class="reged")가 있는 곳만, 클릭했을 때 우측 상세정보가 표시되도록 하는 스크립트.
$(document).on('click', '.conGroup.verticalManageSort .searchResultTable tr.reged', function(){
    $('.specInfoGroup.hide').removeClass('hide');
	$('.specRegGroup').removeClass('hide');
    $('.specInfoGroup').next('.btnGroup.horizontalBottomSort').removeClass('hide');
	$(this).siblings('tr').removeClass('activated');
	$(this).addClass('activated');
});
// :: close : ksg_4 : [진맛] 원자재 목록 중, 등록된 테이블 라인(class="reged")가 있는 곳만, 클릭했을 때 우측 상세정보가 표시되도록 하는 스크립트.




// :: open : ksg_6 : [진맛] "납품처 추가" 버튼을 클릭했을 때 우측 상세정보가 표시되도록 하는 스크립트.
$(document).on('click', '.btn.headRightAbMod.addTradeBtn', function(){
    $('.specInfoGroup.hide').removeClass('hide');
	$('.specRegGroup').removeClass('hide');
    $('.specInfoGroup').next('.btnGroup.horizontalBottomSort').removeClass('hide');
	$(this).siblings('tr').removeClass('activated');
	$(this).addClass('activated');
});
// :: close : ksg_6 : [진맛] "납품처 추가" 버튼을 클릭했을 때 우측 상세정보가 표시되도록 하는 스크립트.
</script>
</body>
</html>