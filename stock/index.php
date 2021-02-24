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
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/stock/pages/stock_left.php'; ?>  
	<!-- :: close : ksg_1 : [진맛] 좌측메뉴 파트. -->
	<div class="wrapper">
		<div class="contents">  
			<div class="section horizontalManageSort AsymDoub1">
				<div class="titleBox manageHeadlineSort">재고 목록</div> 
				<div class="conGroup verticalManageSort bottomRowSort">
					<div class="headLineBox listControlSort">
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
										</select> 
										<input class="tbox searchInput topLineSearchMod" name="dd" type="text" placeholder="검색어를 입력해주세요.">
									</td>
								</tr> 
							</tbody>
						</table>  
                    	<div class="btnGroup verticalBottomSort inTblSort">
                    	    <a href="javascript:void(0);" class="btn singleSearchMod">검색</a>
                    	</div> 
                        <div class="titleBox inlistConSort">
							<div class="titleText">재고 목록</div> 
                            <div class="tipBox mb15">* 재고내역을 클릭 시, 창고별 상세재고를 표시하는 테이블이 나타납니다.</div>
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
                            <col style="width : 200px;">
                            <col style="width : 30px;">
                        </colgroup>
						<thead>
						<tr> 
							<th>원자재명 (코드)</th>
							<th>관리</th> 
						</tr>
						</thead>
						<tbody>
						<tr>
							<td>
								<div>
									<input class="tbox regFullSort listMod" placeholder="원자재명(코드)" value="">
								</div>
							</td>  
							<td> 
								<div class="btnGroup inListTable">
									<a href="javascript:void(0);" class="btn regSort">등록</a>
								</div>
							</td>
						</tr>
                        <!-- :: open : ksg_3 : [진맛] 즉석 수정이 불가능하도록 고정된 텍스트로 표시하는 내용 파트. -->
                        <tr class="reged">
							<td>
								<div>
									<input class="tbox regFullSort listMod"  value="경주 꿀 부사" readonly>
								</div>
							</td> 
							<td>
								<div class="btnGroup inListTable">
									<a href="javascript:void(0);" class="btn modifySort">저장</a>
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
			<!-- :: open : ksg_2 : [진맛] 우측 테이블 구조. -->  
			<div class="section horizontalManageSort AsymDoub2">
                <div class="titleBox manageHeadlineSort">상세정보</div>
				<!-- :: open : ksg_5 : [진맛] 생산품의 상세정보 파트. 입력창 형식. -->
				<div class="specRegGroup hide">
					<div class="conGroup verticalManageSort">
						<div class="headLineBox listControlSort">
							<div class="titleBox inlistConSort">
								<div class="titleText">창고별 재고 정보</div>
							</div>
						</div>
						<table class="infoGroup txtCSort">
							<colgroup>
								<col style="width : 120px;">
								<col style="width : 250px;">
								<col style="width : 100px;">
								<col style="width : 100px;">
								<col style="width : 120px;">
							</colgroup>
							<thead>
							<tr>
								<th>
									<div>창고명</div>
									<div>(창고코드)</div>
								</th>
								<th>창고주소</th>
								<th>재고수량</th>
								<th>알림 설정 재고량</th>
								<th>관리</th>
							</tr>
							</thead>
							<tbody>
							<!-- :: open : ksg_4 : [진맛] 테이블에 등록하는 파트. -->
							<tr>
								<td>
									<div>
										<input class="tbox regFullSort listMod" placeholder="창고명(코드)" value="">
									</div> 
								</td>
								<td>
									<input class="tbox regFullSort listMod" placeholder="창고주소" value="">
								</td>
								<td>
									<input class="tbox regFullSort listMod" placeholder="재고수량" value="">
								</td>
								<td>
									<input class="tbox regFullSort listMod" placeholder="알림 설정 재고량" value="">
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
										<input class="tbox regFullSort listMod" placeholder="창고명" value="경남창고1" readonly>
									</div>
								</td>
								<td>
									<input class="tbox regFullSort listMod" placeholder="창고주소" value="경상남도 경산시 00면 00리 1-11" readonly>
								</td> 
								<td>
									<input class="tbox regFullSort listMod" placeholder="재고수량" value="457">
								</td>
								<td>
									<input class="tbox regFullSort listMod" placeholder="알림 설정 재고량" value="150">
								</td>
								<td>
									<div class="btnGroup inListTable">
										<a href="javascript:void(0);" class="btn modifySort">저장</a>
										<a href="javascript:void(0);" class="btn delSort historyPopMod">작업기록</a>
										<a href="javascript:void(0);" class="btn modifySort moveStockMod">재고이동</a>
									</div>
								</td>
							</tr>
							</tbody>
						</table>
					</div>
                </div>
				<!-- :: close : ksg_5 : [진맛] 생산품의 상세정보 파트. 입력창 형식. -->
            </div>
            <!-- :: close : ksg_2 : [진맛] 우측 테이블 구조. -->
		</div>
	</div>
</div>
<!-- :: open : ksg_3 : [진맛] 재고이동 팝업. -->
<div class="popup centerSort moveStockPop">
	<div class="popupCon halfSort">  
		<a href="javascript:closePop()">
			<img src="/common/img/close.png" class="close">
		</a>
		<div class="titleBox popupSort">  
			재고 이동  
		</div>
		<div class="conGroup verticalManageSort">
			<table class="infoGroup">  
				<colgroup>
					<col style="width : 30%;"> 
					<col style="width : 70%;">
				</colgroup>
				<tbody>
				<tr>
					<th>이동할 공장</th>
					<td>
						<select class="sbox regFullSort">
							<option>-선택-</option> 
							<option>서울공장</option>
							<option>경기공장</option>
						</select>
					</td>
				</tr>
                <tr>
					<th>이동 수량</th>
					<td>
						<input class="tbox regFullSort listMod" placeholder="" value="">
					</td>
				</tr>
				<tr>  
					<th>메모</th>
					<td>
						<textarea class="tarea full"></textarea>
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
<!-- :: close : ksg_3 : [진맛] 재고이동 팝업. -->
<!-- :: open : ksg_20210127_1650 : [진맛] 히스토리 팝업 내용. -->
<div class="popup centerSort historyPop">
	<div class="popupCon wideSort">
		<a href="javascript:closePop()">
			<img src="/common/img/close.png" class="close">
		</a>
		<div class="titleBox popupSort">
			재고 변경 내역
		</div>
		<div class="scroll">
		<div class="conGroup verticalManageSort Pop"> 
			<table class="infoGroup noneImgSort">
				<tbody>
					<tr>
						<td>
							<div class="inTblTitleBox">재고변경(경남창고1)</div>
                            <div class="inTblInfoBox materialSort">
								<span class="infoWord">작업일시 : 2021-02-21 09:00:00</span>
                                <span class="infoWord">작업자 : 김별</span> <br>   
								<span class="infoWord">메모 : 작업 서둘러 진행해주세요.</span>  
                                <div class="stockCounter f_blue">변경수량 : 450 → 500</div>
                            </div>
                            <a href="javascript:void(0);" class="linkCover"></a>
						</td>
                    </tr>
                    <tr>
						<td> 
                            <div class="inTblTitleBox">재고이동(서울창고 → 경남창고1)</div>
                            <div class="inTblInfoBox materialSort">
								<span class="infoWord">작업일시 : 2021-02-21 09:00:00</span>
                                <span class="infoWord">작업자 : 김별</span> <br>   
								<span class="infoWord">메모 : 이동시 주의부탁드립니다.</span>  
                                <div class="stockCounter f_blue">이동 수량 : 250</div>
                            </div> 
                            <a href="javascript:void(0);" class="linkCover"></a>
						</td>
                    </tr>
				</tbody>
			</table>
		</div>
		</div> 
		<div class="btnGroup verticalBottomSort">
			<a href="javascript:closePop();" class="btn searchSort">저장</a>
		</div>
	</div>  
</div>  
<!-- :: close : ksg_20210127_1650 : [진맛] 히스토리 팝업 내용. -->
<script src="/common/js/datePick.js"></script>
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

// :: open : ksg_4 : [진맛] 우측 리스트의 "재고이동" 버튼 클릭 시, 재고이동 팝업창 표시하는 스크립트.
$(document).on('click', '.btn.moveStockMod', function(){
	$('.popup.centerSort.moveStockPop').show();
	$('.contents').addClass('overlay');
});
// :: close : ksg_4 : [진맛] 우측 리스트의 "재고이동" 버튼 클릭 시, 재고이동 팝업창 표시하는 스크립트.


// :: open : ksg_2021j1b7_a652 : [진맛] 우측 리스트의 "작업기록" 버튼 클릭 시, 작업기록 팝업창 표시하는 스크립트.
$(document).on('click', '.btn.historyPopMod', function(){
	$('.popup.centerSort.historyPop').show();
	$('.contents').addClass('overlay');
});
// :: close : ksg_2021j1b7_a652 : [진맛] 우측 리스트의 "작업기록" 버튼 클릭 시, 작업기록 팝업창 표시하는 스크립트.
</script>
</body>
</html>