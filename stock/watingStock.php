<!-- :: ksg_4 = ksg_20210122_1409 -->
<!-- :: ksg_3 = ksg_20210121_1459 -->
<!-- :: ksg_2 = ksg_20210120_1102 -->
<!-- :: ksg_1 = ksg_20210108_1726 -->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/pages/head.php';
	$tCode					=	'700';
	$lCode					=	'0701'; 
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
							<div class="titleText">창고 목록</div> 
                            <div class="tipBox mb15">* 창고목록을 클릭 시, 창고별 상세재고를 표시하는 테이블이 나타납니다.</div>
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
                        </colgroup>
						<thead>
						<tr>   
							<th>창고명
								(코드)
							</th>
							<th>주소</th>
							<th>창고연락처</th>
						</tr>
						</thead>
						<tbody>
						<tr class="reged">
							<td>경기창고1(G11027)</td>
							<td>경기도 양주시 삼숭동 27-12</td>
							<td>031-846-8164</td>
						</tr>
                        <!-- :: open : ksg_3 : [진맛] 즉석 수정이 불가능하도록 고정된 텍스트로 표시하는 내용 파트. -->
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
								<col style="width : 50px;">
							</colgroup>
							<thead>
							<tr>	
								<th>입고일</th>
								<th>원자재명(코드)</th>
								<th>총 개수</th>
								<th>미지정 개수</th>
								<th>관리</th>
							</tr>
							</thead>
							<tbody>
							<!-- :: open : ksg_4 : [진맛] 테이블에 등록하는 파트. -->
							<tr>
								<td>2021-02-22 09:00:12</td> 
								<td>경주 꿀 부사</td>
								<td>175</td> 
								<td>100</td>  
								<td>
									<div class="btnGroup inListTable">
										<a href="javascript:void(0);" class="btn modifySort wearingPopBtn">분류</a> 
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

<!-- :: open : ksg_3 : [진맛] 입고내역 상세내용/등록 팝업. -->
<div class="popup centerSort normal wearingPop">
	<div class="popupCon"> 
		<a href="javascript:closePop()">
			<img src="/common/img/close.png" class="close">
		</a>
		<div class="titleBox popupSort">
			재고 분류 상세 
		</div>
		<div class="conGroup verticalManageSort">  
			<table class="infoGroup">  
				<colgroup> 
					<col width="13%"> 
					<col width="20%"> 
					<col width="13%"> 
					<col width="20%">  
					<col width="13%">  
					<col width="20%">   
				</colgroup>   
				<tbody> 
                <!-- :: open : ksg_3 : [진맛] 입력팝업에서는 사용하지 않는 발주/입고번호 내용. display : none 처리. -->
                <tr style="display : none;">
					<th>입고관리 코드</th>
					<td>
						<input class="tbox regFullSort" value="">
					</td>
				</tr>
                <!-- :: close : ksg_3 : [진맛] 입력팝업에서는 사용하지 않는 발주/입고번호 내용. display : none 처리. -->
                <tr>
					<th>총 개수</th>
					<td>100</td>
					<th>지정 수</th>
					<td>80</td>
					<th>미지정 수</th>
					<td>20</td> 
                </tr>
                <tr>
					<td colspan="6"> 
                        <!-- :: open : ksg_3 : [진맛] 테이블 내에서 품목을 등록하는 병렬 내용 파트.. -->
                        <!-- :: open : ksg_3 : [진맛] 왼쪽 품목 검색 파트. -->
                        <div class="inTblBoxGroup fullSort wearingGoodsMod">  
							<!-- :: open : ksg_4 : [진맛] 내부 테이블(진짜 <table> 태그 사용)에 대한 내용 파트. -->
							<table class="searchResultTable">
								<colgroup> 
                    		        <col style="width : 180px;">
									<col style="width : 100px;">  
                    		    </colgroup>  
								<thead>
								<tr>  
									<th>창고권역</th>
									<th>지정 수</th>
								</tr>  
								</thead>  
								<tbody>
                    		    <tr>  
                    		       <td class="left">A열 1층 1번</td>   
								   <td>
								   <input class="tbox regFullSort" value="">
								   </td> 
                    		    </tr> 
								</tbody> 
                    		</table>
							<!-- :: close : ksg_4 : [진맛] 내부 테이블(진짜 <table> 태그 사용)에 대한 내용 파트. -->
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
// :: open : ksg_4 : [진맛] 원자재 목록 중, 등록된 테이블 라인(class="reged")가 있는 곳만, 클릭했을 때 우측 상세정보가 표시되도록 하는 스크립트.
$(document).on('click', '.conGroup.verticalManageSort .searchResultTable tr.reged', function(){
    $('.specInfoGroup.hide').removeClass('hide');
	$('.specRegGroup').removeClass('hide');
    $('.specInfoGroup').next('.btnGroup.horizontalBottomSort').removeClass('hide');
	$(this).siblings('tr').removeClass('activated');
	$(this).addClass('activated');
});
$(document).on('click', '.btn.wearingPopBtn', function(){
	$('.popup.centerSort.wearingPop').show();
	$('.contents').addClass('overlay');
});
// :: close : ksg_4 : [진맛] 원자재 목록 중, 등록된 테이블 라인(class="reged")가 있는 곳만, 클릭했을 때 우측 상세정보가 표시되도록 하는 스크립트.

</script>
</body>
</html>