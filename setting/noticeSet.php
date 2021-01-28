<!-- :: ksg_5 = ksg_20210117_1805 -->
<!-- :: ksg_4 = ksg_20210112_2039 -->
<!-- :: ksg_3 = ksg_20210112_1604 -->
<!-- :: ksg_2 = ksg_20210109_1554 -->
<!-- :: ksg_1 = ksg_20210108_1930 -->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/pages/head.php';
    $tCode					=	'0900';
	$lCode					=	'0901';
?>
<body>
<div class="container">
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/pages/header.php'; ?> 
    <!-- :: open : ksg_1 : [진맛] 좌측메뉴 파트. -->
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/setting/pages/setting_left.php'; ?>
	<!-- :: close : ksg_1 : [진맛] 좌측메뉴 파트. -->
	<div class="wrapper">
		<div class="contents">  
			<!-- :: single : ksg_4 : [진맛] 원자재 검색 파트 있던 곳. -->
            <!-- :: close : ksg_2 : [진맛] 입력창 / 검색버튼 / 추가버튼이 포함된 검색어 파트. -->
			<div class="section horizontalManageSort notWidth searcManageSort AsymDoub1">    
				<div class="titleBox manageHeadlineSort">공지사항 목록</div>  
				
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
											<option>제목</option>
											<option>내용</option>
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
							<div class="titleText">공지사항</div>
							<a href="javascript:void(0);" class="btn headRightAbMod">글쓰기</a>  
							<!-- :: single : ksg_4 : [진맛] 등록 페이지로 이동하는 버튼 있던 곳. -->
						</div>
						<!-- :: close : ksg_4 : [진맛] 테이블 내의 검색어 파트. -->
						<div class="sboxGroup listArraySort">
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
							<col style="width : 150px;">
							<col style="width : 100px;">
							<col style="width : 80px;">
							<col style="width : 50px;">
						</colgroup>
						<thead>
						<tr>
							<th>No.</th>
							<th>제목</th>
							<th>등록일</th> 
							<th>조회수</th>  
							<th>관리</th> 
						</tr>
						</thead>
						<tbody>
						<!-- :: open : ksg_4 : [진맛] 테이블에 등록하는 파트. -->
						<tr class="reged"> 
							<td>1</td>
							<td>신년맞이 사업변경 공지</td>
							<td>2021-01-28</td>
							<td>155</td>
							<td>
								<div class="btnGroup inListTable">
									<a href="javascript:void(0);" class="btn modifySort">저장</a>
									<a href="javascript:void(0);" class="btn deleteSort">삭제</a>    
								</div> 
							</td>
						</tr>
						<!-- :: close : ksg_4 : [진맛] 테이블에 등록하는 파트. -->
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
			<div class="section horizontalManageSort notWidth AsymDoub2">    
                <div class="titleBox manageHeadlineSort">상세정보</div>
				<!-- :: open : ksg_3 : [진맛] 좌측 테이블과 유사한 구조의, 우측 상품 상세정보 내용. -->
				<div class="specInfoGroup hide">
					<div class="conGroup verticalManageSort">
						<div class="headLineBox listControlSort">
							<div class="titleBox inlistConSort">
								<div class="titleText">공지사항 상세</div>  
							</div>
						</div>
						<table class="infoGroup">
						<colgroup>
							<col style="width : 30%;">
							<col style="width : 70%;">
						</colgroup>
						
						<tr>
							<th>제목</th>
							<td>
								<input class="tbox regFullSort listMod">
							</td>
						</tr>
						<tr>
							<th>내용</th>
							<td>
								<textarea class="tarea full"></textarea>
							</td>  
						</tr>
						</table> 
						<div class="headLineBox pageControlSort center"> 
						<a href="javascript:void(0);" class="btn listTopSort addStaffBtn mt15" >저장</a>   
					</div>  
					</div>
				</div>
				<!-- :: close : ksg_3 : [진맛] 좌측 테이블과 유사한 구조의, 우측 상품 상세정보 내용. -->
            </div>
            <!-- :: close : ksg_2 : [진맛] 우측 테이블 구조. -->
		</div>
	</div>
</div>

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
$(document).on('click', '.conGroup.verticalManageSort tr.reged', function(){
    $('.specInfoGroup.hide').removeClass('hide');
    $('.specInfoGroup').next('.btnGroup.horizontalBottomSort').removeClass('hide');
	$('.specRegGroup').addClass('hide');
	$(this).siblings('tr').removeClass('activated');
	$(this).addClass('activated');
});
// :: close : ksg_4 : [진맛] 원자재 목록 중, 등록된 테이블 라인(class="reged")가 있는 곳만, 클릭했을 때 우측 상세정보가 표시되도록 하는 스크립트.
</script>  
</body>
</html>