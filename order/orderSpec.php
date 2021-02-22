<!-- :: ksg_5 = ksg_20210118_1639 -->
<!-- :: ksg_4 = ksg_20210112_2039 -->
<!-- :: ksg_3 = ksg_20210112_1604 -->
<!-- :: ksg_2 = ksg_20210109_1554 -->
<!-- :: ksg_1 = ksg_20210108_1930 -->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/pages/head.php';
	$tCode					=	'200';
	$lCode					=	'0201';
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
			<div class="section horizontalManageSort searcManageSort topLineMod">  
				<div class="titleBox manageHeadlineSort">발주상세</div> 
				<div class="conGroup verticalManageSort bottomRowSort">
					<div class="headLineBox listControlSort">
						<div class="titleBox inlistConSort">
							<div class="titleText">발주관리정보</div>
						</div>
					</div>
					<table class="infoGroup">
						<colgroup>
							<col width="20%">
							<col width="30%">
						</colgroup>
						<tbody>
						<tr>
<<<<<<< HEAD
							<th>채널</th> 
							<td colspan="3">
								<input class="tbox regFullSort" value="">
							</td> 
                        </tr>
						<tr>
=======
>>>>>>> 22f23cdacbac5707c1b7f13308289a607cb2f0aa
							<th>발주코드</th>
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
							<th>발주상태</th>
							<td>
								<select class="sbox tiny"> 
									<option>발주요청</option>
<<<<<<< HEAD
									<option>발주취소</option> 
									<option>작업지시</option>
=======
									<option>요청승인</option>
									<option>취소요청</option> 
									<option>발주취소</option>
									<option>취소완료</option>
>>>>>>> 22f23cdacbac5707c1b7f13308289a607cb2f0aa
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
						</tbody>
 					</table>  
					 <div class="headLineBox listControlSort">
						<div class="titleBox inlistConSort">
<<<<<<< HEAD
							<div class="titleText">상품결제정보</div>
						</div>
					</div>	
					<table class="infoGroup"> 
					<colgroup>
						<col style="width : 100px;"> 
						<col style="width : 100px;">  
						<col style="width : 100px;">   
						<col style="width : 100px;">  
						<col style="width : 100px;">  
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
=======
							<div class="titleText">상품정보</div>
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
						<th>상품명</th>
						<th>상품금액</th> 
						<th>배송비</th>
						<th>예치금</th>
						<th>마일리지</th>  
						<th>회원할인</th>
						<th>상품할인</th>
						<th>쿠폰</th>
>>>>>>> 22f23cdacbac5707c1b7f13308289a607cb2f0aa
					</tr>
					</thead>
					<tbody>
					<!-- :: open : ksg_4 : [진맛] 테이블에 등록하는 파트. -->
					<tr>
						<td>
							<div>
<<<<<<< HEAD
								<input class="tbox regFullSort Textleft" placeholder="" value="">
							</div>
						</td>  
						<td>
							<div>
								<input class="tbox regFullSort Textleft" placeholder="" value="">
							</div>
						</td>   
						<td>
							<div>
								<input class="tbox regFullSort Textleft" placeholder="" value="">
							</div>
						</td>   
						<td>
							<div>
								<input class="tbox regFullSort Textleft" placeholder="" value="">
							</div>
						</td>  
						<td>
							<div>
								<input class="tbox regFullSort Textleft" placeholder="" value="">
							</div>
						</td>  
						<td>
							<div>
								<input class="tbox regFullSort Textleft" placeholder="" value="">
							</div>
						</td>  
						<td>
							<div>
								<input class="tbox regFullSort Textleft" placeholder="" value="">
							</div>
						</td>  
						<td>
							<div>
								<input class="tbox regFullSort Textleft" placeholder="" value="">
							</div>
						</td>  			
						<td>
							<div>
								<input class="tbox regFullSort Textleft" placeholder="" value="">
							</div>
						</td>  
						<td>
							<div>
								<input class="tbox regFullSort Textleft" placeholder="" value="">
							</div>
						</td>
						<td>
							<div>
								<input class="tbox regFullSort Textleft" placeholder="" value="">
							</div>
						</td>
						<td>
							<div>
								<input class="tbox regFullSort Textleft" placeholder="" value="">
							</div>
						</td>
						<td>
							<div>
								<input class="tbox regFullSort Textleft" placeholder="" value="">
							</div>
						</td>       
=======
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
>>>>>>> 22f23cdacbac5707c1b7f13308289a607cb2f0aa
					</tr>  
					</tbody>
					</table>
					<div class="headLineBox listControlSort">
						<div class="titleBox inlistConSort">
<<<<<<< HEAD
							<div class="titleText">주문자 정보</div>
						</div>
					</div>	
					<table class="infoGroup">
						<colgroup> 
=======
							<div class="titleText">계산합계</div>
						</div>
					</div>	
					<table class="infoGroup">
						<colgroup>
							<col width="33%">
							<col width="*">
						</colgroup>
					<thead>
						<th>총 상품금액</th> 
						<th>총 할인금액</th>
						<th>총 결제금액</th>
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
								1,800
							</td>
						</tr>
					</tbody>
				</table>
					<div class="headLineBox listControlSort">
						<div class="titleBox inlistConSort">
							<div class="titleText">주문정보</div>
						</div>
					</div>	
					<table class="infoGroup">
						<colgroup>
>>>>>>> 22f23cdacbac5707c1b7f13308289a607cb2f0aa
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
<<<<<<< HEAD
                        </tr>  
=======
                        </tr>
>>>>>>> 22f23cdacbac5707c1b7f13308289a607cb2f0aa
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
<<<<<<< HEAD
							<td colspan="3">
=======
							<td>
>>>>>>> 22f23cdacbac5707c1b7f13308289a607cb2f0aa
							<select class="sbox tiny"> 
								<option>선불</option>
								<option>후불</option>
								<option>후불여신(_개월)</option> 
							</select>
<<<<<<< HEAD
							<input class="tbox regFullSort" value="" placeholder="여신개월">
							</td>  
						</tr>   
=======
							</td>
						</tr>
>>>>>>> 22f23cdacbac5707c1b7f13308289a607cb2f0aa
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
<<<<<<< HEAD
				<div class="headLineBox pageControlSort center">
					<a href="javascript:void(0);" class="btn listTopSort addStaffBtn ">목록</a>   
=======
				<div class="headLineBox pageControlSort center"> 
>>>>>>> 22f23cdacbac5707c1b7f13308289a607cb2f0aa
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