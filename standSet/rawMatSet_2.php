<!-- :: ksg_1 = ksg_20210108_1726 -->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/pages/head.php';
	$tCode					=	'100';
	$lCode					=	'0100';
?> 
<body>
<div class="container">
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/pages/header.php'; ?>
    <!-- :: open : ksg_1 : [진맛] 좌측메뉴 파트. -->
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/standSet/pages/standSet_left.php'; ?>
	<!-- :: close : ksg_1 : [진맛] 좌측메뉴 파트. -->
	<div class="wrapper">  
		<div class="contents"> 
			<div class="section horizontalManageSort searcManageSort topLineMod">
				<div class="titleBox manageHeadlineSort">검색</div>
				<div class="conGroup verticalManageSort">
					<table class="searchGroup">
						<colgroup>
							<col style="width : 15%;">
							<col style="width : 85%;">
						</colgroup>
						<tbody>
							<tr>
								<th>검색어</th>
								<td>
									<select class="sbox">
										<option>전체</option>
										<option>원자재명</option>
                                        <option>원자재코드</option>
										<option>품목명</option>
										<option>품목코드</option>
                                        <option>품종명</option> 
                                        <option>품종코드</option>
										<option>납품처명</option> 
										<option>납품처코드</option>
									</select>
									<input class="tbox searchInput topLineSearchMod normal ui-autocomplete-input" placeholder="검색어를 입력해주세요.">
								</td>
							</tr>
							<tr> 
                                <th>
									사용여부
								</th>
								<td colspan="4">
									<div class="inTableCheckGroup">  
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
						</tbody>
                    </table>
                    <div class="btnGroup verticalBottomSort inTblSort">
                        <a href="javascript:void(0);" class="btn singleSearchMod">검색</a>
                    </div>
				</div>
			</div>
			<div class="section horizontalManageSort searcManageSort fullMod">
				<div class="titleBox manageHeadlineSort">원자재 목록</div> 
				<div class="conGroup verticalManageSort bottomRowSort">
					<div class="headLineBox listControlSort">
						<div class="sboxGroup listArraySort">
                            <a href="javascript:void(0);" class="btn listTopSort addStaffBtn">엑셀저장</a>
                            <a href="javascript:void(0);" class="btn listTopSort addStaffBtn">인쇄</a>
							<select class="sbox">
								<option>원자재코드▼</option>
								<option>원자재코드▲</option>
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
					<table class="searchResultTable">
						<colgroup>
                            <col style="width : 30px;">
							<col style="width : 100px;">
							<col style="width : 80px;">
                            <col style="width : 80PX;"> 
                            <col style="width : 80PX;">  
                            <col style="width : 80px;"> 
							<col style="width : 80px;">
                            <col style="width : 50px;">
							<col style="width : 80PX;">    
                            <col style="width : 100px;">  
							<col style="width : 65px;">
							<col style="width : 160px;">  
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
							<th>원자재코드</th>  
							<th>품목명(코드)</th>
                            <th>품종명(코드)</th> 
                            <th>납품처(코드)</th>
							<th>옵션(코드)</th>
							<th>생산지형태</th>
							<th>  
								<div>생산양</div>
								<div class="mt2">주기</div>
							</th>
							<th> 
								<div>규격</div>
								<div class="mt2">기준Kg</div>
							</th> 
							<th> 
								<div>입고단가</div>
								<div class="mt2">출고단가</div>
							</th>
							<th>사용여부</th> 
							<th>비고</th> 
							<th>관리</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td>
							
							</td>
							<td>
								<div>
									<input class="tbox regFullSort listMod" placeholder="원자재코드" value="">
								</div>
							</td>   
							<td>
								<div>
									<input class="tbox regFullSort listMod" placeholder="품목명(코드)" value="">
								</div>
							</td>
							<td>
								<div>
									<input class="tbox regFullSort listMod" placeholder="품종명(코드)" value="">
								</div>
							</td>
							<td>  
								<div>
									<input class="tbox regFullSort listMod" placeholder="납품처(코드)" value="">
								</div>
							</td>
							<td>
								<div>
									<input class="tbox regFullSort listMod" placeholder="" value="">
								</div>
								<div class="mt2">
									<input class="tbox regFullSort listMod" placeholder="" value="">
								</div> 
							</td> 
							<td>
								<div>
									<input class="tbox regFullSort listMod" placeholder="생산지형태" value="">
								</div>
							</td>	
							<td>
								<div>
									<input class="tbox regFullSort listMod" placeholder="생산양" value="">
								</div>
								<div class="mt2">
									<input class="tbox regFullSort listMod" placeholder="주기" value=""> 
								</div> 
							</td> 
							<td>
								<div>
									<input class="tbox regFullSort listMod" placeholder="규격" value="">
								</div>
								<div class="mt2">
									<input class="tbox regFullSort listMod" placeholder="기준Kg" value="">
								</div> 
							</td> 
							<td>
								<div>
									<input class="tbox regFullSort listMod priceMod" placeholder="입고단가" value="">
									<span class="priceWord">원</span> 
								</div>
								<div>   
									<input class="tbox regFullSort listMod priceMod" placeholder="출고단가" value="">
									<span class="priceWord">원</span> 
								</div>     
							</td>   
							<td>  
								<!-- :: open : ksg_4 : [진맛] 사용/미사용 드롭박스 내용. -->
								<select class="sbox regFullSort">
									<option>사용</option>
									<option>미사용</option>
								</select>  
								<!-- :: close : ksg_4 : [진맛] 사용/미사용 드롭박스 내용. -->
							</td>
							<!-- :: open : ksg_4 : [진맛] 품질 팝업을 띄우는 버튼. -->
							<!-- <td>
								<div class="btnGroup inListTable">
									<a href="javascript:void(0);" class="btn modifySort popQualMod">품질</a>
								</div>
							</td> -->
							<!-- :: close : ksg_4 : [진맛] 품질 팝업을 띄우는 버튼. -->
							<td>
								<input class="tbox regFullSort listMod" placeholder="비고" value="">
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
								<div class="checkBoxCase">
									<input type="checkbox" name value>
									<label></label>
								</div>
							</td>
							<td>
								<div>
									<input class="tbox regFullSort listMod" placeholder="원자재코드" value="ap1234" readonly> 
								</div> 
							</td>   
							<td> 
								<div>
									<input class="tbox regFullSort listMod"  value="부사">
								</div>
							</td>
							<td>
								<div>
									<input class="tbox regFullSort listMod"  value="00청과">
								</div> 
							</td>
							<td>
								<div>
									<input class="tbox regFullSort listMod" value="00농장">
								</div>
							</td> 
							<td>
								<div>
									<input class="tbox regFullSort listMod"  value="경주">
								</div>
								<div class="mt2">
									<input class="tbox regFullSort listMod" value="김명장">
								</div> 
							</td>
							<td>
								<div>
									<input class="tbox regFullSort listMod" value="노지">
								</div>
							</td>	
							<td>
								<div>
									<input class="tbox regFullSort listMod"  value="3t">
								</div>
								<div class="mt2">
									<input class="tbox regFullSort listMod"  value="매월">  
								</div> 
							</td> 
							<td>
								<div>
									<input class="tbox regFullSort listMod"  value="대">
								</div>
								<div class="mt2">
									<input class="tbox regFullSort listMod"  value="15">   
								</div> 
							</td> 
							<td>
								<div>
									<input class="tbox regFullSort listMod priceMod"  value="1,500">
									<span class="priceWord">원</span> 
								</div> 
								<div class="mt2"> 
									<input class="tbox regFullSort listMod priceMod" value="2,500">
									<span class="priceWord">원</span> 
								</div>
							</td>     
							<td> 
								<!-- :: open : ksg_4 : [진맛] 사용/미사용 드롭박스 내용. -->
								<select class="sbox regFullSort">
									<option>사용</option>
									<option>미사용</option>
								</select>
								<!-- :: close : ksg_4 : [진맛] 사용/미사용 드롭박스 내용. -->
							</td>
							<!-- :: open : ksg_4 : [진맛] 품질 팝업을 띄우는 버튼. -->
							<!-- <td>
								<div class="btnGroup inListTable">
									<a href="javascript:void(0);" class="btn modifySort popQualMod">품질</a>
								</div>
							</td> -->
							<!-- :: close : ksg_4 : [진맛] 품질 팝업을 띄우는 버튼. -->
							<td>
								<input class="tbox regFullSort listMod"  value="직거래 불가능">
							</td> 
							<td>
								<div class="btnGroup inListTable">
									<a href="/rawMat/rawMatSpec" class="btn modifySort">저장</a>
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
		</div>
	</div>
</div>
<!-- :: 날짜 변경 팝업 내용 -->
<div class="popup centerSort changeDatePop">
	<div class="popupCon">
		<a href="javascript:closePop()">
			<img src="/common/img/close.png" class="close">
		</a>
		<div class="titleBox popupSort">
			결제일변경
		</div>
		<div class="conGroup verticalManageSort">
			<table class="infoGroup">
				<colgroup>
					<col width="100">
					<col width="*">
				</colgroup>
				<tbody>
					<tr>
						<th>변경 날짜</th>
						<td>
                            <input class="tbox regFullSort listMod priceMod" value="" placeholder="입력 형식 예 ) 7월 1일 = 07.01">
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="btnGroup verticalBottomSort">
			<a href="javascript:choicePop();" class="btn searchSort">변경</a>
		</div>
	</div>
</div>

<script src="/common/js/datePick.js"></script>
<script>


// :: 검색 결과 클릭 시, 상세정보 표시.
// $(document).on('click', '.conGroup.verticalManageSort .searchResultTable td', function(){
// 	$('.specInfoGroup.hide').removeClass('hide');
// 	$('.specRegGroup').addClass('hide');
// 	$(this).parent().siblings('tr').removeClass('activated');
// 	$(this).parent('tr').addClass('activated');
// });
// :: 집행등록 버튼 클릭 시, 등록창 표시.
// $(document).on('click', '.btn.addPlanBtn', function(){
// 	$('.specInfoGroup').addClass('hide');
// 	$('.conGroup.verticalManageSort .searchResultTable tr').removeClass('activated');
// 	$('.specRegGroup.hide').removeClass('hide');
// });

// :: "카드잔액관리" 버튼 클릭 시,  팝업 나타나는 스크립트.
$(document).on('click', '.btn.addStaffBtn.cardSort', function(){
	$('.popup.centerSort.cardSort').show();
	$('.contents').addClass('overlay');
});

// :: 날짜 변경 팝업 오픈 스크립트.
function popdateChan() {
    $('.popup.changeDatePop').show();
    $('.contents').addClass('overlay');
}

// :: 팝업창에서 "등록" 버튼 클릭 시, 팝업창 닫히는 스크립트.
function choicePop(){
	$('.popup.centerSort').hide();
	$('.contents').removeClass('overlay');
}
// :: 팝업창의 X 버튼 클릭 시, 팝업 닫기 스크립트.
function closePop(){
	$('.popup.centerSort').hide();
	$('.contents').removeClass('overlay');
}
// :: 팝업창 외부 클릭 시 팝업창 닫기 스크립트.
$(document).mouseup(function (e) {
	let overlay = $('.contents');
	let popupM = $('.popup.centerSort')

	if (!popupM.is(e.target) && popupM.has(e.target).length === 0){
		popupM.hide();
		overlay.removeClass('overlay');
	}
});
</script>
</body>
</html>