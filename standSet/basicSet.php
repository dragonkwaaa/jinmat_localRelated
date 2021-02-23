<!-- :: ksg_5 = ksg_20210113_1650 -->
<!-- :: ksg_4 = ksg_20210112_2039 -->
<!-- :: ksg_3 = ksg_20210112_1604 -->
<!-- :: ksg_2 = ksg_20210109_1554 -->
<!-- :: ksg_1 = ksg_20210108_1930 -->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/pages/head.php';
    $tCode					=	'0100';
	$lCode					=	'099';
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
			<div class="section horizontalManageSort searcManageSort AsymDoub3">
				<div class="titleBox manageHeadlineSort">기초항목 관리</div>
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
						<!-- :: close : ksg_4 : [진맛] 테이블 내의 검색어 파트. -->
						<div class="titleBox inlistConSort">
							<div class="titleText">기초항목 목록</div>
							<!-- :: single : ksg_4 : [진맛] 등록 페이지로 이동하는 버튼 있던 곳. -->
						</div>
						<div class="sboxGroup listArraySort">
							<a href="javascript:void(0);" class="btn listTopSort addStaffBtn">엑셀저장</a>
							<select class="sbox">
								<option>품목코드▼</option>
								<option>품목코드▲</option>  
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
							<col style="width : 250px;">
							<col style="width : 150px;">
							<col style="width : 90px;">
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
							<th>품목명</th>
							<th>품목코드</th> 
							<th>사용여부</th>
							<th>관리</th>
						</tr>
						</thead>
						<tbody>
						<!-- :: open : ksg_4 : [진맛] 테이블에 등록하는 파트. -->
						<tr>
							<td></td>
							<td>
                                <input class="tbox regFullSort listMod" placeholder="품목명" value="">
                            </td>
							<td>
								<input class="tbox regFullSort listMod" placeholder="품목코드" value="">
							</td>
							<td>
								<select class="sbox regFullSort">
									<option>사용</option>
									<option>미사용</option>
								</select>
							</td>
							<td>
								<div class="btnGroup inListTable">
									<a href="javascript:void(0);" class="btn regSort">등록</a>
								</div>
							</td>
						</tr>
						<!-- :: close : ksg_4 : [진맛] 테이블에 등록하는 파트. -->
						<tr class="reged">
							<td>
								<div class="checkBoxCase">
									<input type="checkbox" name value>
									<label></label>
								</div>  
							</td>
							<td>
                                <input class="tbox regFullSort listMod" placeholder="품목명" value="사과">
                            </td> 
							<td>
								<input class="tbox regFullSort listMod" placeholder="품목코드" value="AP">
							</td>
							<td>
								<select class="sbox regFullSort">
									<option selected="">사용</option>
									<option>미사용</option>
								</select>
							</td> 
							<td>
								<div class="btnGroup inListTable">
									<a href="javascript:void(0);" class="btn modifySort">저장</a>
								</div>
							</td>
						</tr>
						<tr class="reged">
							<td>
								<div class="checkBoxCase">
									<input type="checkbox" name value>
									<label></label>
								</div>   
							</td>						
							<td>
                                <input class="tbox regFullSort listMod" placeholder="품목명" value="사과">
                            </td> 
							<td>
								<input class="tbox regFullSort listMod" placeholder="품목코드" value="AP">
								<div class="tipBoxwarning mt10"> 
									동일한 코드가 존재합니다.
								</div>
							</td>
							<td>
								<select class="sbox regFullSort">
									<option selected="">사용</option>
									<option>미사용</option>
								</select>
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
				<div class="specInfoGroup hide">
					<div class="conGroup verticalManageSort">
						<div class="headLineBox listControlSort">
							<!-- :: open : ksg_4 : [진맛] 테이블 내의 검색어 파트. 생산물 리스트에서는 사용하지 않을 것이므로 display : none 처리. -->
							<table class="searchGroup inTblSort" style="display : none;">
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
												<option>품종</option>
											</select>
											<input class="tbox searchInput topLineSearchMod" name="dd" type="text" placeholder="검색어를 입력해주세요.">
										</td>
									</tr>
								</tbody>
							</table>
							<!-- :: close : ksg_4 : [진맛] 테이블 내의 검색어 파트. 생산물 리스트에서는 사용하지 않을 것이므로 display : none 처리. -->
							<!-- :: open : ksg_5 : [진맛] 테이블 내의 "검색" 버튼 파트. 위와 마찬가지로 생산물 리스트에서는 사용하지 않을 것이므로 display : none 처리. -->
                    		<div class="btnGroup verticalBottomSort inTblSort" style="display : none;">
                    		    <a href="javascript:void(0);" class="btn singleSearchMod">검색</a>
                    		</div>
							<!-- :: close : ksg_5 : [진맛] 테이블 내의 "검색" 버튼 파트. 위와 마찬가지로 생산물 리스트에서는 사용하지 않을 것이므로 display : none 처리. -->
							<div class="titleBox inlistConSort">
								<div class="titleText">기초항목 상세</div>
							</div>
							<div class="tipBox mb15"></div>
							<!-- :: open : ksg_5 : [진맛] 정렬 기준 파트. 위와 마찬가지로 생산물 리스트에서는 사용하지 않을 것이므로 display : none 처리. -->
							<div class="sboxGroup listArraySort" style="display : none;">
								<select class="sbox">
									<option>품목코드▼</option>
									<option>품목코드▲</option> 
									<option>등록순▼</option> 
									<option>등록순▲</option>
								</select>
								<select class="sbox">
									<option>40개씩</option>
									<option>80개씩</option>
									<option>100개씩</option>
								</select>
							</div>
							<!-- :: close : ksg_5 : [진맛] 정렬 기준 파트. 위와 마찬가지로 생산물 리스트에서는 사용하지 않을 것이므로 display : none 처리. -->
						</div>
						<table class="infoGroup txtCSort">
						<colgroup>  
							<col style="width : 250px;">
							<col style="width : 150px;">
							<col style="width : 90px;">
							<col style="width : 150px;">
							<col style="width : 50px;">
						</colgroup>
						<thead>
						<tr>
							<th>품종명</th>
							<th>품종코드</th>
							<th>사용여부</th>
							<th>비고</th>
							<th>관리</th>
						</tr>
						</thead>
						<tbody>
						<!-- :: open : ksg_4 : [진맛] 테이블에 등록하는 파트. -->
						<tr>
							<td>
								<input class="tbox regFullSort listMod" placeholder="품종명" value="">
							</td>
							<td>
								<input class="tbox regFullSort listMod" placeholder="품종코드" value="">
							</td>  
							<td>
								<select class="sbox regFullSort">
									<option>사용</option>
									<option>미사용</option>
								</select>
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
						<!-- :: close : ksg_4 : [진맛] 테이블에 등록하는 파트. -->
						<tr>
							<td>
								<input class="tbox regFullSort listMod" placeholder="품종명" value="부사">
							</td>
							<td>
								<input class="tbox regFullSort listMod" placeholder="품종코드" value="AP01">
							</td>
							<td>
								<select class="sbox regFullSort">
									<option>사용</option>
									<option selected="">미사용</option>
								</select>
							</td>
                            <td>
								<input class="tbox regFullSort listMod" placeholder="비고" value="">
							</td>
							<td>
								<div class="btnGroup inListTable">  
									<a href="javascript:void(0);" class="btn modifySort">저장</a>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<input class="tbox regFullSort listMod" placeholder="품종명" value="부사">
							</td>
							<td>
								<input class="tbox regFullSort listMod" placeholder="품종코드" value="AP01">
								<div class="tipBoxwarning mt10"> 
									동일한 코드가 존재합니다.
								</div> 
							</td>
							<td>
								<select class="sbox regFullSort">
									<option>사용</option>
									<option selected="">미사용</option>
								</select>
							</td>
                            <td>
								<input class="tbox regFullSort listMod" placeholder="비고" value="">
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
					<!-- :: single : ksg_4 : [진맛] 우측 하단의 창고별 재고 확인 테이블 내용 있던 곳. -->
				</div>
				<!-- :: close : ksg_20210117_1542 : [진맛] 기초항목 세부 분류표 파트. -->
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
	$('.specRegGroup').removeClass('hide');
    $('.specInfoGroup').next('.btnGroup.horizontalBottomSort').removeClass('hide');
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


</script>
</body>
</html>