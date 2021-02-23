<!-- :: ksg_4 = ksg_20210122_1409 -->
<!-- :: ksg_3 = ksg_20210121_1459 -->
<!-- :: ksg_2 = ksg_20210120_1102 -->
<!-- :: ksg_1 = ksg_20210108_1726 -->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/pages/head.php';
    $tCode					=	'600';
	$lCode					=	'602';
?>
<body>  
<div class="container">
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/pages/header.php'; ?>
    <!-- :: open : ksg_1 : [진맛] 좌측메뉴 파트. -->
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/release/pages/release_left.php'; ?>
	<!-- :: close : ksg_1 : [진맛] 좌측메뉴 파트. -->
	<div class="wrapper"> 
		<div class="contents">  
			<div class="section horizontalManageSort AsymDoub2">   
				<div class="titleBox manageHeadlineSort">출고 대기 상품 목록</div> 
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
							<div class="titleText">출고 대기 상품 목록</div> 
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
							<col style="width : 100px;">
							<col style="width : 100px;">
							<col style="width : 80px;"> 
							<col style="width : 120px;">
							<col style="width : 40px;"> 
                        </colgroup> 
						<thead>
						<tr>
							<th>출고 대기 상품 코드</th>
							 <th>상품명<br>
							 	(코드)
							 </th>
							 <th>수량</th>
							 <th>비고</th>
							<th>관리</th>
						</tr>
						</thead>
						<tbody>
						<tr class="reged"> 
							<td>
								<input class="tbox regFullSort listMod" placeholder="" value="" readonly> 
							</td>
							<td>    
								<div>
									<input class="tbox regFullSort listMod" placeholder="" value=""> 
								</div> 
							</td>
							<td>
								<input class="tbox regFullSort listMod" placeholder="" value="" readonly> 
							</td> 
							<td>
								<input class="tbox regFullSort listMod" placeholder="" value=""> 
							</td> 
							<td> 
								<div class="btnGroup inListTable">
									<a href="javascript:void(0);" class="btn regSort">등록</a>
								</div>
							</td>
						</tr>
                        <!-- :: open : ksg_3 : [진맛] 즉석 수정이 불가능하도록 고정된 텍스트로 표시하는 내용 파트. -->
                        <tr class="reged">
							<td>51000429</td>
							<td>   
								<div>
									경주 꿀 부사
								</div>
								<div class="mt2">
									ap15488212 
								</div>
							</td>
							<td>1,000</td>  
							<td>품질좋은것 우선으로 챙겨주세요</td> 
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
			<div class="section horizontalManageSort AsymDoub1">
                <div class="titleBox manageHeadlineSort">상세정보</div>
				<!-- :: open : ksg_5 : [진맛] 생산품의 상세정보 파트. 입력창 형식. -->
				<div class="specRegGroup hide">
					<div class="conGroup verticalManageSort">
						<div class="headLineBox listControlSort">
							<div class="titleBox inlistConSort">
								<div class="titleText">공장별 재고 정보</div>
							</div>
						</div>
						<table class="infoGroup txtCSort">
							<colgroup> 
								<col style="width : 100px;">
								<col style="width : 80px;">
								<col style="width : 120px;">  
							</colgroup>
							<thead>
							<tr>
								<th>
									<div>공장명</div>
									<div>(코드)</div> 
								</th>
								<th>수량</th>
								<th>관리</th>
							</tr>
							</thead>
							<tbody>
							<!-- :: open : ksg_4 : [진맛] 테이블에 등록하는 파트. -->
							<tr>
								<td>
									<div>
										<input class="tbox regFullSort listMod" placeholder="공장명(코드)" value="">
									</div> 
								</td>  
								<td> 
									<input class="tbox regFullSort listMod" placeholder="수량" value="">
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
									<input class="tbox regFullSort listMod" placeholder="수량" value="457">
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
					<th>지역</th>
					<td>
						<select class="sbox regFullSort">
							<option>-선택-</option>
							<option>서울</option>
							<option>경기</option>
						</select> 
					</td>
				</tr>
				<tr>
					<th>이동할 공장</th>
					<td>
						<select class="sbox regFullSort">
							<option>-선택-</option>
							<option>서울</option>
							<option>경기</option>
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
	<div class="popupCon stock wideSort">
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
							<div class="inTblTitleBox">재고변경(경남공장1)</div>
                            <div class="inTblInfoBox materialSort">
                                <div class="stockCounter f_blue">변경수량 : 450 → 500</div>
                            </div>
                            <a href="javascript:void(0);" class="linkCover"></a>
						</td>
                    </tr>
                    <tr>    
						<td>
                            <div class="inTblTitleBox">재고이동(서울공장 → 경남공장1)</div>
                            <div class="inTblInfoBox materialSort">
                                <div class="stockCounter f_blue">이동 수량 : 250</div>
                            </div>
                            <a href="javascript:void(0);" class="linkCover"></a>
						</td>
                    </tr>
					<tr>
						<td>
							<div class="inTblTitleBox">재고변경(경남공장1)</div>
                            <div class="inTblInfoBox materialSort">
                                <div class="stockCounter f_blue">변경수량 : 450 → 500</div>
                            </div>
                            <a href="javascript:void(0);" class="linkCover"></a>
						</td>
                    </tr>
                    <tr>     
						<td>
                            <div class="inTblTitleBox">재고이동(서울공장 → 경남공장1)</div>
                            <div class="inTblInfoBox materialSort">
                                <div class="stockCounter f_blue">이동 수량 : 250</div>
                            </div>
                            <a href="javascript:void(0);" class="linkCover"></a>
						</td>
                    </tr>
					<tr>
						<td>
							<div class="inTblTitleBox">재고변경(경남공장1)</div>
                            <div class="inTblInfoBox materialSort">
                                <div class="stockCounter f_blue">변경수량 : 450 → 500</div>
                            </div>
                            <a href="javascript:void(0);" class="linkCover"></a>
						</td>
                    </tr>
                    <tr>    
						<td>
                            <div class="inTblTitleBox">재고이동(서울공장 → 경남공장1)</div>
                            <div class="inTblInfoBox materialSort">
                                <div class="stockCounter f_blue">이동 수량 : 250</div>
                            </div>
                            <a href="javascript:void(0);" class="linkCover"></a>
						</td>
                    </tr>
					<tr>
						<td>
							<div class="inTblTitleBox">재고변경(경남공장1)</div>
                            <div class="inTblInfoBox materialSort">
                                <div class="stockCounter f_blue">변경수량 : 450 → 500</div>
                            </div>
                            <a href="javascript:void(0);" class="linkCover"></a>
						</td>
                    </tr>
                    <tr>    
						<td>
                            <div class="inTblTitleBox">재고이동(서울공장 → 경남공장1)</div>
                            <div class="inTblInfoBox materialSort">
                                <div class="stockCounter f_blue">이동 수량 : 250</div>
                            </div>
                            <a href="javascript:void(0);" class="linkCover"></a>
						</td>
                    </tr>
					<tr>
						<td>
							<div class="inTblTitleBox">재고변경(경남공장1)</div>
                            <div class="inTblInfoBox materialSort">
                                <div class="stockCounter f_blue">변경수량 : 450 → 500</div>
                            </div>
                            <a href="javascript:void(0);" class="linkCover"></a>
						</td>
                    </tr>
                    <tr>    
						<td>
                            <div class="inTblTitleBox">재고이동(서울공장 → 경남공장1)</div>
                            <div class="inTblInfoBox materialSort">
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