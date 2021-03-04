<!-- :: ksg_6 = ksg_20210118_1124 -->
<!-- :: ksg_5 = ksg_20210113_1650 -->
<!-- :: ksg_4 = ksg_20210112_2039 -->
<!-- :: ksg_3 = ksg_20210112_1604 -->
<!-- :: ksg_2 = ksg_20210109_1554 -->
<!-- :: ksg_1 = ksg_20210108_1930 -->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/pages/head.php';
    $tCode					=	'900';
	$lCode					=	'900';
?>
<body>
<div class="container">
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/common/pages/header.php'; ?>
    <!-- :: open : ksg_1 : [진맛] 좌측메뉴 파트. -->
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/setting/pages/setting_left.php'; ?>
	<!-- :: close : ksg_1 : [진맛] 좌측메뉴 파트. -->
	<div class="wrapper">
		<div class="contents">
			
			
			<!-- :: open : ksg_20210128_1456 : [진맛] 메타태그, 카드박스 담긴 파트. -->
			<div class="section horizontalManageSort fullMod">
				<!-- :: open : ksg_20b10a28_1d47 : [진맛] 메타태그 테이블에 대한 제목 파트. -->
				<div class="titleBox manageHeadlineSort" style="display : none;">메타태그</div>
				<!-- :: close : ksg_20b10a28_1d47 : [진맛] 메타태그 테이블에 대한 제목 파트. -->
				<div class="conGroup verticalManageSort bottomRowSort" style="display : none;">
					<!-- :: open : ksg_2jb10ab8_a4d4 : [진맛] 메타태그 내용이 담긴 테이블 파트. -->
					<table class="searchResultTable">
						<colgroup>
							<col width="17%">
							<col width="33%">
							<col width="17%">
							<col width="33%">
						</colgroup>
						<tbody>
						<tr>
							<th>도메인</th>
							<td>사이트의 도메인명이 출력됩니다. 예)phone4yomall.heeyam.com</td>
            		        <th>날짜</th>
							<td>오늘 날짜가 출력됩니다. 예)12월27일</td>
            		    </tr>
            		    <tr>
            		        <th>아이디</th>
							<td>고객님의 아이디가 출력됩니다. 예)kwaDragon
							</td>
							<th>이름</th>
							<td>고객님의 이름이 출력됩니다. 예)곽반장</td>
            		    </tr>
            		    <tr>
            		        <th>계좌번호</th>
							<td>온라인입금시 고객이 선택한 계좌번호가 출력됩니다.
							</td>
							<th>은행</th>
							<td>온라인입금시 고객이 선택한 은행명이 출력됩니다.</td>
            		    </tr>
            		    <tr>
            		        <th>예금주</th>
							<td>온라인입금시 고객이 선택한 예금주가 출력됩니다.
							</td>
							<th>상품명</th>
							<td>상품명이 출력됩니다.</td>
            		    </tr>
						</tbody>
					</table>
					<!-- :: close : ksg_2jb10ab8_a4d4 : [진맛] 메타태그 내용이 담긴 테이블 파트. -->
				</div>


				<!-- :: open : ksg_20b10a28_1d47 : [진맛] 상황별 문자 카드박스 관련 내용에 대한 제목 파트. -->
				<div class="titleBox manageHeadlineSort">상황별 문자</div>
				<!-- :: close : ksg_20b10a28_1d47 : [진맛] 상황별 문자 카드박스 관련 내용에 대한 제목 파트. -->
				<div class="conGroup verticalManageSort bottomRowSort">


					<!-- :: open : ksg_b021j128_1e0a : [진맛] 상황별 문자 카드박스 그룹. -->
					<div class="multTxtSetGroup">
                        <div class="setTxtCdBox fstChd">
                            <div class="cdHeadLine">
                                <div class="titleBox">납품요청 시</div>
                                <div class="cdConBox">
                                    <!-- <div class="radioCase">
										<div class="radioIconBox">
											<input type="checkbox" checked="">
											<label></label>
										</div>
										<div class="radioTitle">사용</div>
                                    </div> -->
                                    <!-- <div class="btnGroup rightSided">
                                        <a href="javascript:void(0);" class="btn small modifySort">저장</a>
                                    </div> -->
                                </div>
                            </div>
                            <div class="cdTxtRegCase">
                                <!-- <div class="titleBox">사용가능한 머지문자</div>
                                <div class="tagTxtSet">{아이디}</div> -->
                                <div class="cdConBox">
                                    <textarea class="tarea full" readonly>납품 요청이 성공적으로 등록되었습니다.</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="setTxtCdBox">
                            <div class="cdHeadLine">
                                <div class="titleBox">납품승인 시</div>
                                <div class="cdConBox">
                                    <!-- <div class="radioCase">
										<div class="radioIconBox">
											<input type="checkbox" checked="">
											<label></label>
										</div>
										<div class="radioTitle">사용</div>
                                    </div> -->
                                    <!-- <div class="btnGroup rightSided">
                                        <a href="javascript:void(0);" class="btn small modifySort">저장</a>
                                    </div> -->
                                </div>
                            </div>
                            <div class="cdTxtRegCase">
                                <!-- <div class="titleBox">사용가능한 머지문자</div>
                                <div class="tagTxtSet">{아이디},{상품명},{날짜}</div> -->
                                <div class="cdConBox">
                                    <textarea class="tarea full" readonly>등록하신 납품 요청이 승인되었습니다.</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="setTxtCdBox">
                            <div class="cdHeadLine">
                                <div class="titleBox">출하완료 시</div>
                                <div class="cdConBox">
                                    <!-- <div class="radioCase">
										<div class="radioIconBox">
											<input type="checkbox" checked="">
											<label></label>
										</div>
										<div class="radioTitle">사용</div>
                                    </div> -->
                                    <!-- <div class="btnGroup rightSided">
                                        <a href="javascript:void(0);" class="btn small modifySort">저장</a>
                                    </div> -->
                                </div>
                            </div>
                            <div class="cdTxtRegCase">
                                <!-- <div class="titleBox">사용가능한 머지문자</div>
                                <div class="tagTxtSet">{아이디},{상품명},{날짜}</div> -->
                                <div class="cdConBox">
                                    <textarea class="tarea full" readonly>요청 상품이 출하되어 목적지로 이동 중입니다.</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="setTxtCdBox" style="/* margin-left: 11px; */">
                            <div class="cdHeadLine">
                                <div class="titleBox">입고완료 시</div>
                                <div class="cdConBox">
                                    <!-- <div class="radioCase">
										<div class="radioIconBox">
											<input type="checkbox" checked="">
											<label></label>
										</div>
										<div class="radioTitle">사용</div>
                                    </div> -->
                                    <!-- <div class="btnGroup rightSided">
                                        <a href="javascript:void(0);" class="btn small modifySort">저장</a>
                                    </div> -->
                                </div>
                            </div>
                            <div class="cdTxtRegCase">
                                <!-- <div class="titleBox">사용가능한 머지문자</div>
                                <div class="tagTxtSet">{아이디},{상품명},{날짜}</div> -->
                                <div class="cdConBox">
                                    <textarea class="tarea full" readonly>상품이 입고 완료되었습니다.</textarea>
                                </div>
                            </div>
                        </div>
					</div>
					<!-- :: close : ksg_b021j128_1e0a : [진맛] 상황별 문자 카드박스 그룹. -->
				</div>
			</div>
			<!-- :: close : ksg_20210128_1456 : [진맛] 메타태그, 카드박스 담긴 파트. -->
		</div>
	</div>
</div>
<script>
</script>
</body>
</html>