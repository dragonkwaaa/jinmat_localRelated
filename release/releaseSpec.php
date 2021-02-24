<!-- :: ksg_5 = ksg_20210118_1639 -->
<!-- :: ksg_4 = ksg_20210112_2039 -->
<!-- :: ksg_3 = ksg_20210112_1604 -->
<!-- :: ksg_2 = ksg_20210109_1554 -->
<!-- :: ksg_1 = ksg_20210108_1930 -->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/pages/head.php';
    $tCode					=	'600';
	$lCode					=	'600';
?>  
<body>
<div class="container">
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/common/pages/header.php'; ?>
    <!-- :: open : ksg_1 : [진맛] 좌측메뉴 파트. -->
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/release/pages/release_left.php'; ?>
	<!-- :: close : ksg_1 : [진맛] 좌측메뉴 파트. --> 
	<div class="wrapper">
		<div class="contents">
			<!-- :: single : ksg_4 : [진맛] 원자재 검색 파트 있던 곳. -->
            <!-- :: close : ksg_2 : [진맛] 입력창 / 검색버튼 / 추가버튼이 포함된 검색어 파트. -->
			<div class="section horizontalManageSort searcManageSort topLineMod">  
				<div class="titleBox manageHeadlineSort">출고상세</div>  
				<div class="conGroup verticalManageSort bottomRowSort">
					<div class="headLineBox listControlSort">
						<div class="titleBox inlistConSort">
							<div class="titleText">출고관리정보</div>
						</div> 
					</div>  
					<table class="infoGroup">  
						<colgroup>
							<col width="20%">
							<col width="30%">
						</colgroup>
						<tbody>
						<tr>
							<th>발주코드</th> 
							<td colspan="3">
								<input class="tbox regFullSort" value="">
							</td> 
                        </tr>
						<tr>
							<th>채널</th>  
							<td>
								<input class="tbox regFullSort" value="">
							</td>
							<th>발주원본코드</th>
							<td>
								<input class="tbox regFullSort" value="">
							</td> 
                        </tr>
                        <tr>
							<th>발주담당자 관리자코드</th>
							<td>
								<input class="tbox regFullSort" value="">
							</td>
							<th>출고상태</th> 
							<td>
								<select class="sbox tiny"> 
									<option>출고대기</option>
                                    <option>출고중</option> 
                                    <option>출고완료</option> 
									<option>출고취소</option> 
								</select>
							</td>   
                        </tr>
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
						<tr>
							<th>등록자 관리자 코드</th>
							<td>
								<input class="tbox regFullSort" value="">
							</td>
							<th>발주 요청사항</th>
							<td>
								<input class="tbox regFullSort" value="">
							</td> 
                        </tr>
						<tr>
							<th>비고</th>
							<td colspan="3">
								<input class="tbox regFullSort" value="">
							</td>
						</tr>
						<tr>
							<th>등록일</th>
							<td>
								<input class="tbox regFullSort" value="">
							</td>
							<th>작업지시일</th>
							<td>
								<input class="tbox regFullSort" value="">
							</td> 
                        </tr>
						<tr>
							<th>옵션정보1</th>
							<td>
								<input class="tbox regFullSort" value="">
							</td>
							<th>옵션정보2</th>
							<td>
								<input class="tbox regFullSort" value="">
							</td> 
                        </tr>
						<tr>
							<th>옵션정보3</th>
							<td>
								<input class="tbox regFullSort" value="">
							</td>
							<th>옵션정보4</th>
							<td>
								<input class="tbox regFullSort" value="">
							</td> 
                        </tr>
						</tr>
						<tr>
							<th>작업지시코드</th>
							<td colspan="3">
								<input class="tbox regFullSort" value="">
							</td>  
						</tr>
						<tr>
							<th>생산팀 담당자 관리자명(코드)</th>
 							<td colspan="3">
								<input class="tbox regFullSort" value="">
							</td>
						</tr>
						</tbody>
 					</table>  
					 <div class="headLineBox listControlSort">
						<div class="titleBox inlistConSort">
							<div class="titleText">상품결제정보</div>
						</div>
					</div>	
					<table class="infoGroup"> 
					<colgroup>
						<col style="width : 90px;"> 
						<col style="width : 90px;">  
						<col style="width : 50px;">    
						<col style="width : 50px;">   
						<col style="width : 90px;">   
						<col style="width : 90px;">  
						<col style="width : 90px;">   
						<col style="width : 90px;">  
						<col style="width : 90px;">     
						<col style="width : 90px;">  
						<col style="width : 90px;">  
						<col style="width : 90px;">  
						<col style="width : 90px;">  
						<col style="width : 30px;">  
					</colgroup>  
					<thead>
					<tr>
						<th>주문 상품명</th>
						<th>상품명</th>
						<th>순서</th>  
						<th>주문 품목 개수</th>
						<th>판매가</th>
						<th>총 결제금액</th> 
						<th>총 품목금액</th> 
						<th>총 배송금액</th>
						<th>예치금</th>
						<th>마일리지</th>  
						<th>총 회원할인금액</th>
						<th>총 상품할인금액</th>
						<th>총 쿠폰할인금액</th>
						<th>관리</th> 
					</tr>
					</thead>
					<tbody>
					<!-- :: open : ksg_4 : [진맛] 테이블에 등록하는 파트. -->
					<tr>
						<td>
							<div>
								<input class="tbox regFullSort" placeholder="" value="">
							</div>
						</td>  
						<td>
							<div>
								<input class="tbox regFullSort" placeholder="" value="">
							</div>
						</td>  
						<td>
							<div>
								<input class="tbox regFullSort" placeholder="" value="">
							</div>
						</td>  
						<td>  
							<div>
								<input class="tbox regFullSort" placeholder="" value="">
							</div>
						</td>  
						<td>
							<div>
								<input class="tbox regFullSort listMod right" placeholder="" value="">
							</div>
						</td>  
						<td>
							<div>
								<input class="tbox regFullSort listMod right" placeholder="" value="">
							</div>
						</td>    
						<td>
							<div>
								<input class="tbox regFullSort listMod right" placeholder="" value="">
							</div>
						</td>   
						<td>
							<div>
								<input class="tbox regFullSort listMod right" placeholder="" value="">
							</div>
						</td>   			
						<td>
							<div>
								<input class="tbox regFullSort listMod right" placeholder="" value="">
							</div>
						</td>  
						<td>
							<div>
								<input class="tbox regFullSort listMod right" placeholder="" value="">
							</div>
						</td>  
						<td>
							<div>
								<input class="tbox regFullSort listMod right" placeholder="" value="">
							</div>
						</td>  
						<td>
							<div>
								<input class="tbox regFullSort listMod right" placeholder="" value="">
							</div>
						</td>  
						<td>
							<div>
								<input class="tbox regFullSort listMod right" placeholder="" value="">
							</div>
						</td>   
						<td class="center">  
							<div class="btnGroup inListTable">
								<a href="javascript:void(0);" class="btn regSort">등록</a>
							</div>   
						</td>       
					</tr>
					<tr>
						<td>진한 청포도</td>
						<td>진한 청포도</td>
						<td>1</td>
						<td>2</td>
						<td class="right">10000</td>
						<td class="right">18000</td> 
						<td class="right">20000</td>
						<td class="right">0</td>
						<td class="right">0</td>
						<td class="right">0</td>
						<td class="right">0</td>
						<td class="right">0</td>
						<td class="right">2000</td>   
						<td class="center"> 
							<div class="btnGroup inListTable">
								<a href="javascript:void(0);" class="btn modifySort">취소</a> 
							</div>   
						</td>       
					</tr>    
					</tbody>
					</table>
					<div class="headLineBox listControlSort">
						<div class="titleBox inlistConSort">
							<div class="titleText">주문자 정보</div>
						</div>
					</div>	
					<table class="infoGroup">
						<colgroup> 
							<col width="20%">
							<col width="30%">
						</colgroup>
						<tbody>
						<tr>
							<th>회원명</th>
							<td>
								<input class="tbox regFullSort" value="">
							</td>
							<th>회원아이디</th>
							<td>
								<input class="tbox regFullSort" value="">
							</td> 
                        </tr>
                        <tr>
							<th>주문일자</th>
							<td>
								<input class="tbox regFullSort" value="">
							</td>
							<th>주문자명</th>
							<td>
								<input class="tbox regFullSort" value="">
							</td>
                        </tr>  
						<tr>
							<th>주문자 전화번호</th>
							<td>
								<input class="tbox regFullSort" value="">
							</td>
							<th>주문자 핸드폰번호</th>
							<td>
								<input class="tbox regFullSort" value="">
							</td> 
                        </tr>
						<tr>
							<th>주문시 요청사항</th>
							<td colspan="3">
								<input class="tbox regFullSort" value="">
							</td>
						</tr>
						<tr>
							<th>금액처리방법</th>
							<td colspan="3">
							<select class="sbox tiny"> 
								<option>선불</option>
								<option>후불</option>
								<option>후불여신(_개월)</option> 
							</select>
							<input class="tbox regFullSort" value="" placeholder="여신개월">
							</td>  
						</tr>   
						</tbody>
 					</table>
					 <div class="headLineBox listControlSort">
						<div class="titleBox inlistConSort">
							<div class="titleText">받는분정보</div>
						</div>
					</div>	
					 <table class="infoGroup">
						<colgroup>
							<col width="20%">
							<col width="30%">
						</colgroup>
						<tbody> 
						<tr>
							<th>받는분</th>
							<td>
								<input class="tbox regFullSort" value="">
							</td>
							<th>받는분 전화번호</th>
							<td>
								<input class="tbox regFullSort" value="">
							</td> 
                        </tr>
                        <tr>
							<th>받는분 핸드폰번호</th>
							<td>
								<input class="tbox regFullSort" value="">
							</td>
							<th>받는분 우편번호</th>
							<td>
								<input class="tbox regFullSort" value="">
							</td>
                        </tr>
						<tr>
							<th>받는분 주소</th>
							<td>
								<input class="tbox regFullSort" value="">
							</td>
							<th>받는분 상세주소</th>
							<td>
								<input class="tbox regFullSort" value="">
							</td> 
                        </tr>
						<tr>
							<th>배송업체명</th>
							<td>
								<input class="tbox regFullSort" value="">
							</td>
							<th>배송번호</th>
							<td>
								<input class="tbox regFullSort" value="">
							</td> 
                        </tr>
						<tr>
							<th>배송일자</th>
							<td>
								<input class="tbox regFullSort" value="">
							</td>
							<th>배송완료일자</th>
							<td>
								<input class="tbox regFullSort" value="">
							</td>  
                        </tr>
						</tbody>
 					</table>      
				</div>   
				<div class="headLineBox pageControlSort center">
					<a href="javascript:void(0);" class="btn listTopSort addStaffBtn ">목록</a>   
					<a href="javascript:void(0);" class="btn listTopSort addStaffBtn ">저장</a>   
				</div>  
			</div> 
            </div> 
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