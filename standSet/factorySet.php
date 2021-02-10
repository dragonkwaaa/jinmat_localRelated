<!-- :: ksg_1 = ksg_20210108_1726 -->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/pages/head.php';
	$tCode					=	'100';
	$lCode					=	'0107';
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
										<option>공장명</option>
                                        <option>공장코드</option>
										<option>공장연락처</option>
										<option>관리자명</option>
                                        <option>관리자코드</option> 
                                        <option>관리자연락처</option>
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
				<div class="titleBox manageHeadlineSort">공장 목록</div>
				<div class="conGroup verticalManageSort bottomRowSort">
					<div class="headLineBox listControlSort">
						<div class="sboxGroup listArraySort">
                            <a href="javascript:void(0);" class="btn listTopSort addStaffBtn">엑셀저장</a>
                            <a href="javascript:void(0);" class="btn listTopSort addStaffBtn">인쇄</a>
							<select class="sbox">
								<option>공장코드▼</option>
								<option>공장코드▲</option>
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
                            <col style="width : 100px;">
							<col style="width : 80px;">
							<col style="width : 80px;">
                            <col style="width : 80PX;">  
                            <col style="width : 80PX;">  
                            <col style="width : 55px;"> 
							<col style="width : 80px;">
							<col style="width : 180px;">  
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
							<th>공장코드</th> 
							<th>공장명</th>
							<th>공장연락처</th>
                            <th>공장관리자명</th>
                            <th>공장관리자코드</th>
							<th>관리자 연락처</th>
                            <th>사용여부</th>
							<th>등록일</th>
							<th>비고</th>
							<th>관리</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td></td>
							<td>
								<input class="tbox regFullSort listMod" placeholder="공장코드" value="">
							</td>
							<td>
                                <input class="tbox regFullSort listMod" placeholder="공장명" value="">
                            </td>
							<td>
								<input class="tbox regFullSort listMod" placeholder="공장연락처" value=""> 
							</td>
                            <td>
                                <input class="tbox regFullSort listMod" placeholder="공장관리자명" value="">
							</td> 
							<td>
                                <input class="tbox regFullSort listMod" placeholder="공장관리자코드" value="">
                            </td>
                            <td>
                                <input class="tbox regFullSort listMod" placeholder="관리자 연락처" value="">
							</td>
							<td>
                                <select class="sbox regFullSort">
									<option>사용</option>
									<option>미사용</option>
								</select>
							</td>
							<td>
                                <input class="tbox regFullSort listMod" placeholder="등록일" value=""> 
							</td>
                            <td>
                                <input class="tbox regFullSort listMod" placeholder="비고" value="">
							</td>
							<td>
								<div class="btnGroup inListTable">
									<a href="javascript:void(0);" class="btn regSort">등록</a> 
								</div> 
							</td>
                        </tr>
                        <tr>
							<td>
								<div class="checkBoxCase">
									<input type="checkbox" name value>
									<label></label>
								</div> 
							</td> 
							<td>
								<input class="tbox regFullSort listMod" placeholder="공장코드" value="G01011111" readonly>
							</td>  
							<td>
                                <input class="tbox regFullSort listMod" placeholder="공장명" value="횡성공장">
                            </td>
							<td>
								<input class="tbox regFullSort listMod" placeholder="공장연락처" value="051-2512-2121">
							</td>
                            <td>
                                <input class="tbox regFullSort listMod" placeholder="공장관리자명" value="김별">
							</td>
							<td>
                                <input class="tbox regFullSort listMod" placeholder="공장관리자코드" value="0215421">
                            </td>
                            <td>
                                <input class="tbox regFullSort listMod" placeholder="관리자 연락처" value="010-5100-0429">
							</td>
							<td>
                                <select class="sbox regFullSort">
									<option>사용</option>
									<option selected="">미사용</option>
								</select>
							</td> 
							<td>
                                <input class="tbox regFullSort listMod" placeholder="등록일" value="2021-02-21"> 
							</td>
                            <td>
                                <input class="tbox regFullSort listMod" placeholder="비고" value="별관 공사중">
							</td>
							<td>
								<div class="btnGroup inListTable">
									<a href="/rawMat/rawMatSpec" class="btn modifySort">저장</a>
									<a href="javascript:void(0);" class="btn modifySort">창고관리</a>
								</div> 
							</td> 
                        </tr>
						<tr>
							<td>
								<div class="checkBoxCase">
									<input type="checkbox" name value>
									<label></label>
								</div> 
							</td> 
							<td>
								<input class="tbox regFullSort listMod" placeholder="공장코드" value="G01011111">
								<div class="tipBoxwarning mt10">  
									동일한 코드가 존재합니다.
								</div> 
							</td>  
							<td>
                                <input class="tbox regFullSort listMod" placeholder="공장명" value="경주공장">
                            </td>
							<td>
								<input class="tbox regFullSort listMod" placeholder="공장연락처" value="051-2512-2121">
							</td>
                            <td>
                                <input class="tbox regFullSort listMod" placeholder="공장관리자명" value="허평강">
							</td>
							<td>
                                <input class="tbox regFullSort listMod" placeholder="공장관리자코드" value="09522145">
                            </td>
                            <td>
                                <input class="tbox regFullSort listMod" placeholder="관리자 연락처" value="010-4300-6138">
							</td>
							<td>
                                <select class="sbox regFullSort"> 
									<option selected>사용</option>
									<option>미사용</option> 
								</select>
							</td> 
							<td>
                                <input class="tbox regFullSort listMod" placeholder="등록일" value=""> 
							</td>
                            <td>
                                <input class="tbox regFullSort listMod" placeholder="비고" value="">
							</td>
							<td>
								<div class="btnGroup inListTable">
									<a href="/rawMat/rawMatSpec" class="btn modifySort ">저장</a>
									<a href="javascript:void(0);" class="btn modifySort wearingPopBtn">창고관리</a> 
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


<!-- :: open : ksg_3 : [진맛] 입고내역 상세내용/등록 팝업. -->
<div class="popup centerSort innerFlowSort wearingPop">
	<div class="popupCon fullwideSort">  
		<a href="javascript:closePop()">  
			<img src="/common/img/close.png" class="close">
		</a>
		<div class="titleBox popupSort">
			창고목록  
		</div>
		<div class="conGroup verticalManageSort">
			<table class="infoGroup fullHSort">
				<tbody>
                <tr>
					<td> 
                        <div class="inTblBoxGroup twinSort highHeight scrollSort wearingGoodsMod">   
							<div class="limitHeightTblCase">
								<table class="infoGroup txtCSort">    
									<colgroup>   
										<col style="width : 20px;">
										<col style="width : 70px;">
										<col style="width : 100px;">
										<col style="width : 50px;">
										<col style="width : 40px;">   
										<col style="width : 50px;">
										<col style="width : 20px;">      
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
											<div>창고명</div>
											<div>(창고코드)</div>
										</th>
										<th>주소</th>
										<th>창고연락처</th>
										<th>담당자명</th> 
										<th>담당자 연락처</th> 
										<th>관리</th> 
									</tr>
									</thead>
									<tbody style="text-align: center;">  
										<tr>
											<td>
												<div class="checkBoxCase">
													<input type="checkbox" name value>
													<label></label>
												</div>  
											</td>
											<td>
											<div>
												<input class="tbox regFullSort listMod"  value="경남창고1" readonly>
											</div>
											<div>
												<input class="tbox regFullSort listMod"  value="W10101044" readonly>
											</div>
											</td>    
											<td>
												<div>
													<input class="tbox regFullSort listMod" value="경상남도 진주시 진주읍 진주리" readonly>
												</div>
											</td> 
											<td>
												<div>
													<input class="tbox regFullSort listMod"  value="010-1234-1234" readonly>
												</div>
											</td>
											<td> 
												<div>
													<input class="tbox regFullSort listMod"  value="김별" readonly>
												</div>
											</td> 													
											<td>
												<div>
													<input class="tbox regFullSort listMod" value="010-5100-0429" readonly> 
												</div> 
											</td>  
											<td>
												<div class="btnGroup inListTable">
													<a href="javascript:void(0);" class="btn modifySort">취소</a> 
												</div> 
											</td>		 
										</tr>
									</tbody>
								</table> 
							</div>
                            <!-- :: close : ksg_3 : [진맛] 검색 결과로 표시되는 내부 테이블 형식의 품목 목록 파트. -->
							<div class="headLineBox pageControlSort center">
								<a href="javascript:void(0);" class="btn listTopSort addStaffBtn ">저장</a>   
							</div> 
                        </div>
                        <!-- :: close : ksg_3 : [진맛] 우측 선택된 품목 파트. -->
                        <!-- :: close : ksg_3 : [진맛] 테이블 내에서 품목을 등록하는 병렬 내용 파트.. -->
					</td>
                </tr>
				</tbody>
			</table>
		</div>   
	</div>  
</div>  
<!-- :: close : ksg_3 : [진맛] 입고내역 상세내용/등록 팝업. -->








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


$(document).on('click', '.btn.wearingPopBtn', function(){
	$('.popup.centerSort.wearingPop').show();
	$('.contents').addClass('overlay'); 
});
</script>
</body>
</html>