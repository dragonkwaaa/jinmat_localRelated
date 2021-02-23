<!-- :: ksg_4 = ksg_20210122_1409 -->
<!-- :: ksg_3 = ksg_20210121_1459 -->
<!-- :: ksg_2 = ksg_20210120_1102 -->
<!-- :: ksg_1 = ksg_20210108_1726 -->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/pages/head.php';
	$tCode					=	'400';
	$lCode					=	'0400';
?>
<body>
<div class="container">
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/pages/header.php'; ?>
    <!-- :: open : ksg_1 : [진맛] 좌측메뉴 파트. -->
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/wearing/pages/wearing_left.php'; ?>
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
                                    <option>발주번호</option>
                                    <option>입고번호</option>
                                    <option>납품처명</option>
                                    <option>납품처코드</option>  
                                    <option>창고명</option>
                                    <option>창고코드</option>
                                    <option>입고담당자</option>
								</select>
								<input class="tbox searchInput topLineSearchMod normal ui-autocomplete-input" placeholder="검색어를 입력해주세요.">
                            </td>
						</tr>  
						<tr>
							<th>
								입고일
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
                                배송방식
							</th>
							<td>
								<div class="inTableCheckGroup">  
                                    <div class="checkBoxCase">
										<div class="checkBoxIconBox">
											<input type="checkbox" name="" value="">
											<label></label>
										</div>
										<div class="checkBoxTitle">진짜 맛있는 과일 배송업체</div>
									</div>
									<div class="checkBoxCase">
										<div class="checkBoxIconBox">
											<input type="checkbox" name="" value="">
											<label></label>
										</div>
										<div class="checkBoxTitle">거래처 계약 배송업체</div>
									</div>
								</div>
                            </td>
						</tr> 
						<tr>
							<th> 
                                상태
							</th>
							<td>
								<div class="inTableCheckGroup">  
                                    <div class="checkBoxCase">
										<div class="checkBoxIconBox">
											<input type="checkbox" name="" value="">
											<label></label>
										</div>
										<div class="checkBoxTitle">입고 대기</div>
									</div>
									<div class="checkBoxCase">
										<div class="checkBoxIconBox">
											<input type="checkbox" name="" value="">
											<label></label>
										</div>
										<div class="checkBoxTitle">입고 승인</div>
                                    </div>
                                    <div class="checkBoxCase">
										<div class="checkBoxIconBox">
											<input type="checkbox" name="" value="">
											<label></label>
										</div>
										<div class="checkBoxTitle">입고 출발</div>
                                    </div>
                                    <div class="checkBoxCase">
										<div class="checkBoxIconBox">
											<input type="checkbox" name="" value="">
											<label></label>
										</div>
										<div class="checkBoxTitle">입고중</div>
                                    </div>
                                    <div class="checkBoxCase">
										<div class="checkBoxIconBox">
											<input type="checkbox" name="" value="">
											<label></label>
										</div>
										<div class="checkBoxTitle">입고 완료</div>
                                    </div>
                                    <div class="checkBoxCase">
										<div class="checkBoxIconBox">
											<input type="checkbox" name="" value="">
											<label></label>
										</div>
										<div class="checkBoxTitle">입고 취소</div>
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
			<div class="section horizontalManageSort fullMod">
				<div class="titleBox manageHeadlineSort">입고 목록</div>
				<div class="conGroup verticalManageSort bottomRowSort">
					<div class="headLineBox listControlSort">
                        <div class="titleBox inlistConSort">
					    	<div class="titleText">입고 목록</div>
                            <a href="javascript:void(0);" class="btn headRightAbMod wearingPopBtn">입고내역 추가</a>
                            <div class="tipBox mb15">* 입고내역을 클릭 시, 우측 박스에 상세정보가 표시됩니다.</div>
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
						<col style="width : 30px;">
						<col style="width : 100px;"> 
						<col style="width : 68px;">  
						<col style="width : 140px;">
						<col style="width : 80px;">
						<col style="width : 90px;">
						<col style="width : 68px;">  
						<col style="width : 140px;"> 
						<col style="width : 100px;">
						<col style="width : 60px;">  
						<col style="width : 70px;">
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
                            <th>입고관리 코드</th>
							<th>입고요청일</th>
							<th>납품처명(코드)<br>
								납품처 주소
							</th> 
							<th>납품처 연락처</th>
							<th>입고등록 관리자명<br> 
								(코드) 
							</th>
							<th>입고등록일</th> 
							<th>창고명(코드)<br>
								창고주소 
							</th>
							<th>배송방식</th>
							<th>총 금액<br>
								부가세<br>
								배송금액
							</th>
							<th>금액처리방법</th>  
							<th>입고상태</th>
                            <th>관리</th>
						</tr>
						</thead>
						<tbody>
						<!-- :: single : ksg_3 : [진맛] 테이블에 내용을 등록하기 위한 인풋들로 구성된 <tr> 이 있던 곳. -->
                        <!-- :: open : ksg_3 : [진맛] 즉석 수정이 불가능하도록 고정된 텍스트로 표시하는 내용 파트. -->
                        <tr class="reged">
							<td>
								<div class="checkBoxCase">
									<input type="checkbox" name value>
									<label></label>
								</div>
							</td>    
                            <td>12345687</td>
							<td>2021-02-01</td>
							<td>
								<div>강원농원(VDX1234)</div>
								<div class="mt2">강원도 춘천시 별내동 10-21</div>
							</td>  
							<td>035-021-4574</td>
							<td>김별(kim123)</td>  
							<td>2021-02-01</td>
							<td>
								<div>경남창고(ab123)</div>  
								<div class="mts">경상남도 창원시 의창동 12-15</div>
							</td>
							<td>진짜 맛있는 과일 배송업체</td>
							<td>
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
							<td>선금</td>
							<td>
								<select class="sbox tinys"> 
								    <option>입고승인대기</option>
								    <option>입고승인</option>
								    <option>입고출하중</option>   
									<option>입고출하완료</option>
									<option>창고대기</option> 
									<option>입고완료</option>
									<option>입고취소요청</option>
									<option>입고취소</option>
								</select> 
							</td>   
                            <td>
								<div class="btnGroup inListTable">
									<a href="javascript:void(0);" class="btn modifySort wearingPopBtn">상세</a>
									<a href="javascript:void(0);" class="btn modifySort wearingPopBtn">저장</a>
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
		</div>
	</div>
</div>
<!-- :: open : ksg_3 : [진맛] 입고내역 상세내용/등록 팝업. -->
<div class="popup centerSort normal wearingPop">
	<div class="popupCon wideSort"> 
		<a href="javascript:closePop()">
			<img src="/common/img/close.png" class="close">
		</a>
		<div class="titleBox popupSort">
			입고 상세 
		</div>
		<div class="conGroup verticalManageSort">  
			<table class="infoGroup">  
				<colgroup> 
					<col width="15%"> 
					<col width="35%">
					<col width="15%">    
					<col width="35%">    
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
					<th>입고상태</th>
					<td>
						<select class="sbox normal">
						    <option>입고승인대기</option>
						    <option>입고승인</option>
						    <option>입고출하중</option> 
							<option>입고출하완료</option>
							<option>창고대기</option> 
							<option>입고완료</option>
							<option>입고취소요청</option>
							<option>입고취소</option>
						</select> 
					</td>
					<th>입고요청일</th>
					<td>
						<input class="tbox regFullSort" value="">
					</td>
				</tr> 
                <tr> 
					<th>입고금액</th>
					<td>
						<input class="tbox regFullSort" value="" >
					</td>
					<th>납품처명(코드)</th>
					<td>
						<input class="tbox regFullSort" value="" >
					</td>
                </tr>  
				<tr>
					<th>납품처주소</th>
					<td>
						<input class="tbox regFullSort" value="" >
					</td>
					<th>납품처연락처</th>
					<td>
						<input class="tbox regFullSort" value="" >
					</td>
                </tr>
				<tr>  
					<th>입고등록 관리자명(코드)</th>
					<td>
						<input class="tbox regFullSort" value="" >
					</td>
					<th>창고명(코드)</th>
					<td>
						<input class="tbox regFullSort" value="">
					</td>
				</tr>
                <tr>
					<th>창고연락처</th>
					<td>
						<input class="tbox regFullSort" value="">
					</td>
					<th>창고주소</th>
					<td>
						<input class="tbox regFullSort" value="">
					</td>
                </tr>
                <tr>
					<th>
						입고상품 관리 
					</th> 
					<td colspan="3">
                        <!-- :: open : ksg_3 : [진맛] 테이블 내에서 품목을 등록하는 병렬 내용 파트.. -->
                        <!-- :: open : ksg_3 : [진맛] 왼쪽 품목 검색 파트. -->
                        <div class="inTblBoxGroup fullSort wearingGoodsMod">
							<!-- :: open : ksg_4 : [진맛] 내부 테이블(진짜 <table> 태그 사용)에 대한 내용 파트. -->
							<table class="searchResultTable">
								<colgroup> 
                    		        <col style="width : 100px;">
									<col style="width : 180px;"> 
									<col style="width : 100px;">
									<col style="width : 100px;"> 
									<col style="width : 100px;">
									<col style="width : 100px;">
									<col style="width : 100px;">
									<col style="width : 100px;">
									<col style="width : 100px;">
									<col style="width : 100px;">  
                    		    </colgroup>  
								<thead>
								<tr>  
									<th> 
                    		            입고상품 관리코드<br>
                    		            입고관리 코드
                    		        </th> 
                    		        <th>
                    		            원자재명<br>
										(코드) 
                    		        </th>
                    		        <th>입고요청 수량<br>
										실제입고 수량
									</th>
                    		        <th>단품금액</th>
                    		        <th>입고상품 상태</th>
									<th>규격</th>
									<th>단가</th> 
									<th>공급가액</th>  
									<th>부가세</th>   
                    		        <th>전체금액</th>
								</tr>
								</thead>
								<tbody>
                    		    <tr class="reged">
                    		        <td>
                    		            <div>
                    		                145262
                    		            </div>
                    		            <div class="mt5">
                    		                154679
                    		            </div>
									</td>
									<td>
                    		            <div>
										경주 꿀 부사
                    		            </div>
                    		            <div class="mt5">
                    		                ap1548212 
                    		            </div>
                    		        </td> 
                    		        <td> 
										<div>1,000</div>
										<div class="mt2">1,001</div>
									</td>
                    		        <td>4,400원</td>
									<td>
										<select class="sbox tiny">
						   					<option>입고승인대기</option>
						   					<option>입고승인</option>
						   					<option>입고출하중</option> 
											<option>입고출하완료</option>
											<option>창고대기</option> 
											<option>입고완료</option>
											<option>입고취소요청</option>
											<option>입고취소</option>
										</select>  
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
										<input class="tbox regFullSort listMod" placeholder="" value="">
									</td>
                    		        <td>4,600원</td>   
                    		    </tr>
								</tbody> 
                    		</table>
							<!-- :: close : ksg_4 : [진맛] 내부 테이블(진짜 <table> 태그 사용)에 대한 내용 파트. -->
                        </div>
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
					<th>택배비</th>
					<td>
						<input class="tbox regFullSort" value="">
					</td>
                </tr>
				<tr>
					<th>금액처리방법</th>
					<td colspan="3">  
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