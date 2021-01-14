<!-- :: ksg_5 = ksg_20210114_1446 -->
<!-- :: ksg_4 = ksg_20210112_2039 -->
<!-- :: ksg_3 = ksg_20210112_1604 -->
<!-- :: ksg_2 = ksg_20210109_1554 -->
<!-- :: ksg_1 = ksg_20210108_1930 -->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/pages/head.php';
    $tCode					=	'0100';
	$lCode					=	'0102';
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
			<!-- :: open : ksg_3 : [진맛] 테이블 병렬일 때의 총괄 컨트롤 박스 파트. -->
			<div class="headLineBox pageControlSort">
                <a href="javascript:void(0);" class="btn listTopSort addStaffBtn">엑셀저장</a>
				<a href="javascript:void(0);" class="btn listTopSort addStaffBtn">인쇄</a>
			</div>
			<!-- :: close : ksg_3 : [진맛] 테이블 병렬일 때의 총괄 컨트롤 박스 파트. -->
            <!-- :: open : ksg_5 : [진맛] 4배열 테이블 첫째 파트. -->
            <div class="section horizontalManageSort equalQuadSort">
				<div class="titleBox manageHeadlineSort">1차 카테고리</div>
				<div class="conGroup verticalManageSort bottomRowSort">
					<div class="headLineBox listControlSort">
                    

						<!-- :: open : ksg_5 : [진맛] 테이블 내의 검색어 파트. 카테고리 페이지에서는 필요없을 것 같아 display : none 처리 함. -->
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
                        <!-- :: close : ksg_5 : [진맛] 테이블 내의 검색어 파트. 카테고리 페이지에서는 필요없을 것 같아 display : none 처리 함. -->
                        <!-- :: open : ksg_5 : [진맛] "검색" 버튼 파트.. 카테고리 페이지에서는 필요없을 것 같아 display : none 처리 함. -->
                    	<div class="btnGroup verticalBottomSort inTblSort" style="display : none;">
                    	    <a href="javascript:void(0);" class="btn singleSearchMod">검색</a>
                    	</div>
                        <!-- :: close : ksg_5 : [진맛] "검색" 버튼 파트.. 카테고리 페이지에서는 필요없을 것 같아 display : none 처리 함. -->
                        
						<div class="titleBox inlistConSort">
							<div class="titleText">1차 카테고리 목록</div>
							<!-- :: single : ksg_4 : [진맛] 등록 페이지로 이동하는 버튼 있던 곳. -->
                        </div>
                        <div class="tipBox mb15">* 상품에 적용 중인 카테고리는 삭제할 수 없습니다.</div>
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
							<col style="width : 200px;">
							<col style="width : 90px;">
							<col style="width : 60px;">
						</colgroup>
						<thead>
						<tr>
							<th>
								카테고리명<br>
								(분류코드)
							</th>
							<th>사용여부</th>
							<th>관리</th>
						</tr>
						</thead>
						<tbody>
						<!-- :: open : ksg_4 : [진맛] 테이블에 등록하는 파트. -->
						<tr>
							<td>
								<div>
									<input class="tbox regFullSort listMod" placeholder="카테고리명" value="">
								</div>
								<div class="mt2">
									<input class="tbox regFullSort listMod" placeholder="분류코드" value="">
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
							<td>
								<div class="btnGroup inListTable">
									<a href="javascript:void(0);" class="btn regSort">등록</a>
								</div>
							</td>
						</tr>
						<!-- :: close : ksg_4 : [진맛] 테이블에 등록하는 파트. -->
						<tr class="reged">
							<td>
								<div>
									<input class="tbox regFullSort listMod" placeholder="카테고리명" value="핵과류">
								</div>
								<div class="mt2">
									<input class="tbox regFullSort listMod" placeholder="분류코드" value="24555111" readonly>
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
							<td>
								<div class="btnGroup inListTable">
                                    <a href="javascript:void(0);" class="btn modifySort">저장</a>
                                    <a href="javascript:void(0);" class="btn delSort">삭제</a>
								</div>
							</td>
						</tr>
						<tr class="reged">
							<td>
								<div>
									<input class="tbox regFullSort listMod" placeholder="카테고리명" value="견과류">
								</div>
								<div class="mt2">
									<input class="tbox regFullSort listMod" placeholder="분류코드" value="31224455" readonly>
								</div>
							</td>
							<td>
								<!-- :: open : ksg_4 : [진맛] 사용/미사용 드롭박스 내용. -->
								<select class="sbox regFullSort">
									<option>사용</option>
									<option>미사용</option>
								</select>
								<!-- :: close : ksg_4 : [진맛] 사용/미사용 드롭박스 내용. -->
								<!-- :: single : ksg_4 : [진맛] 라디오 버전의 사용/미사용 있던 곳. -->
							</td>
							<td>
								<div class="btnGroup inListTable">
                                    <a href="javascript:void(0);" class="btn modifySort">저장</a>
                                    <a href="javascript:void(0);" class="btn delSort">삭제</a>
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
            <!-- :: close : ksg_5 : [진맛] 4배열 테이블 첫째 파트. -->
            <!-- :: open : ksg_5 : [진맛] 4배열의 두번째 테이블 내용.. -->
			<div class="section horizontalManageSort equalQuadSort">
                <div class="titleBox manageHeadlineSort">2차 카테고리</div>
				<div class="specInfoGroup hide">
					<div class="conGroup verticalManageSort">
						<div class="headLineBox listControlSort">
							<div class="titleBox inlistConSort">
								<div class="titleText">2차 카테고리 목록</div>
                            </div>
                            <div class="tipBox mb15">* 상품에 적용 중인 카테고리는 삭제할 수 없습니다.</div>
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
						    	<col style="width : 200px;">
						    	<col style="width : 90px;">
						    	<col style="width : 60px;">
						    </colgroup>
						    <thead>
						    <tr>
						    	<th>
						    		카테고리명<br>
						    		(분류코드)
						    	</th>
						    	<th>사용여부</th>
						    	<th>관리</th>
						    </tr>
						    </thead>
						    <tbody>
						    <!-- :: open : ksg_4 : [진맛] 테이블에 등록하는 파트. -->
						    <tr>
						    	<td>
						    		<div>
						    			<input class="tbox regFullSort listMod" placeholder="카테고리명" value="">
						    		</div>
						    		<div class="mt2">
						    			<input class="tbox regFullSort listMod" placeholder="분류코드" value="">
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
						    	<td>
						    		<div class="btnGroup inListTable">
						    			<a href="javascript:void(0);" class="btn regSort">등록</a>
						    		</div>
						    	</td>
						    </tr>
						    <!-- :: close : ksg_4 : [진맛] 테이블에 등록하는 파트. -->
						    <tr class="reged">
						    	<td>
						    		<div>
						    			<input class="tbox regFullSort listMod" placeholder="카테고리명" value="아몬드">
						    		</div>
						    		<div class="mt2">
						    			<input class="tbox regFullSort listMod" placeholder="분류코드" value="24555111" readonly>
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
						    	<td>
						    		<div class="btnGroup inListTable">
                                        <a href="javascript:void(0);" class="btn modifySort">저장</a>
                                        <a href="javascript:void(0);" class="btn delSort">삭제</a>
						    		</div>
						    	</td>
						    </tr>
						    <tr class="reged">
						    	<td>
						    		<div>
						    			<input class="tbox regFullSort listMod" placeholder="카테고리명" value="마카다미아">
						    		</div>
						    		<div class="mt2">
						    			<input class="tbox regFullSort listMod" placeholder="분류코드" value="31224455" readonly>
						    		</div>
						    	</td>
						    	<td>
						    		<!-- :: open : ksg_4 : [진맛] 사용/미사용 드롭박스 내용. -->
						    		<select class="sbox regFullSort">
						    			<option>사용</option>
						    			<option>미사용</option>
						    		</select>
						    		<!-- :: close : ksg_4 : [진맛] 사용/미사용 드롭박스 내용. -->
						    		<!-- :: single : ksg_4 : [진맛] 라디오 버전의 사용/미사용 있던 곳. -->
						    	</td>
						    	<td>
						    		<div class="btnGroup inListTable">
                                        <a href="javascript:void(0);" class="btn modifySort">저장</a>
                                        <a href="javascript:void(0);" class="btn delSort">삭제</a>
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
            </div>
            <!-- :: close : ksg_5 : [진맛] 4배열의 두번째 테이블 내용.. -->
            <!-- :: open : ksg_5 : [진맛] 4배열의 세번째 테이블 내용.. -->
            <div class="section horizontalManageSort equalQuadSort">
                <div class="titleBox manageHeadlineSort">3차 카테고리</div>
				<!-- :: open : ksg_3 : [진맛] 좌측 테이블과 유사한 구조의, 우측 상품 상세정보 내용. -->
				<div class="specInfoGroup hide">
					<div class="conGroup verticalManageSort">
						<div class="headLineBox listControlSort">
							<div class="titleBox inlistConSort">
								<div class="titleText">3차 카테고리 목록</div>
                            </div>
                            <div class="tipBox mb15">* 상품에 적용 중인 카테고리는 삭제할 수 없습니다.</div>
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
						    	<col style="width : 200px;">
						    	<col style="width : 90px;">
						    	<col style="width : 60px;">
						    </colgroup>
						    <thead>
						    <tr>
						    	<th>
						    		카테고리명<br>
						    		(분류코드)
						    	</th>
						    	<th>사용여부</th>
						    	<th>관리</th>
						    </tr>
						    </thead>
						    <tbody>
						    <!-- :: open : ksg_4 : [진맛] 테이블에 등록하는 파트. -->
						    <tr>
						    	<td>
						    		<div>
						    			<input class="tbox regFullSort listMod" placeholder="카테고리명" value="">
						    		</div>
						    		<div class="mt2">
						    			<input class="tbox regFullSort listMod" placeholder="분류코드" value="">
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
						    	<td>
						    		<div class="btnGroup inListTable">
						    			<a href="javascript:void(0);" class="btn regSort">등록</a>
						    		</div>
						    	</td>
						    </tr>
						    <!-- :: close : ksg_4 : [진맛] 테이블에 등록하는 파트. -->
						    <tr class="reged">
						    	<td>
						    		<div>
						    			<input class="tbox regFullSort listMod" placeholder="카테고리명" value="미국산">
						    		</div>
						    		<div class="mt2">
						    			<input class="tbox regFullSort listMod" placeholder="분류코드" value="24555111" readonly>
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
						    	<td>
						    		<div class="btnGroup inListTable">
                                        <a href="javascript:void(0);" class="btn modifySort">저장</a>
                                        <a href="javascript:void(0);" class="btn delSort">삭제</a>
						    		</div>
						    	</td>
						    </tr>
						    <tr class="reged">
						    	<td>
						    		<div>
						    			<input class="tbox regFullSort listMod" placeholder="카테고리명" value="호주산">
						    		</div>
						    		<div class="mt2">
						    			<input class="tbox regFullSort listMod" placeholder="분류코드" value="31224455" readonly>
						    		</div>
						    	</td>
						    	<td>
						    		<!-- :: open : ksg_4 : [진맛] 사용/미사용 드롭박스 내용. -->
						    		<select class="sbox regFullSort">
						    			<option>사용</option>
						    			<option>미사용</option>
						    		</select>
						    		<!-- :: close : ksg_4 : [진맛] 사용/미사용 드롭박스 내용. -->
						    		<!-- :: single : ksg_4 : [진맛] 라디오 버전의 사용/미사용 있던 곳. -->
						    	</td>
						    	<td>
						    		<div class="btnGroup inListTable">
                                        <a href="javascript:void(0);" class="btn modifySort">저장</a>
                                        <a href="javascript:void(0);" class="btn delSort">삭제</a>
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
				<!-- :: close : ksg_3 : [진맛] 좌측 테이블과 유사한 구조의, 우측 상품 상세정보 내용. -->
            </div>
            <!-- :: close : ksg_5 : [진맛] 4배열의 세번째 테이블 내용.. -->
            <!-- :: open : ksg_5 : [진맛] 4배열의 네번째 테이블 내용.. -->
            <div class="section horizontalManageSort equalQuadSort">
                <div class="titleBox manageHeadlineSort">4차 카테고리</div>
				<!-- :: open : ksg_3 : [진맛] 좌측 테이블과 유사한 구조의, 우측 상품 상세정보 내용. -->
				<div class="specInfoGroup hide">
					<div class="conGroup verticalManageSort">
						<div class="headLineBox listControlSort">
							<div class="titleBox inlistConSort">
								<div class="titleText">4차 카테고리 목록</div>
                            </div>
                            <div class="tipBox mb15">* 상품에 적용 중인 카테고리는 삭제할 수 없습니다.</div>
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
						    	<col style="width : 200px;">
						    	<col style="width : 90px;">
						    	<col style="width : 60px;">
						    </colgroup>
						    <thead>
						    <tr>
						    	<th>
						    		카테고리명<br>
						    		(분류코드)
						    	</th>
						    	<th>사용여부</th>
						    	<th>관리</th>
						    </tr>
						    </thead>
						    <tbody>
						    <!-- :: open : ksg_4 : [진맛] 테이블에 등록하는 파트. -->
						    <tr>
						    	<td>
						    		<div>
						    			<input class="tbox regFullSort listMod" placeholder="카테고리명" value="">
						    		</div>
						    		<div class="mt2">
						    			<input class="tbox regFullSort listMod" placeholder="분류코드" value="">
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
						    	<td>
						    		<div class="btnGroup inListTable">
						    			<a href="javascript:void(0);" class="btn regSort">등록</a>
						    		</div>
						    	</td>
						    </tr>
						    <!-- :: close : ksg_4 : [진맛] 테이블에 등록하는 파트. -->
						    <tr class="reged">
						    	<td>
						    		<div>
						    			<input class="tbox regFullSort listMod" placeholder="카테고리명" value="생과(냉장)">
						    		</div>
						    		<div class="mt2">
						    			<input class="tbox regFullSort listMod" placeholder="분류코드" value="24555111" readonly>
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
						    	<td>
						    		<div class="btnGroup inListTable">
                                        <a href="javascript:void(0);" class="btn modifySort">저장</a>
                                        <a href="javascript:void(0);" class="btn delSort">삭제</a>
						    		</div>
						    	</td>
						    </tr>
						    <tr class="reged">
						    	<td>
						    		<div>
						    			<input class="tbox regFullSort listMod" placeholder="카테고리명" value="생과(냉동)">
						    		</div>
						    		<div class="mt2">
						    			<input class="tbox regFullSort listMod" placeholder="분류코드" value="31224455" readonly>
						    		</div>
						    	</td>
						    	<td>
						    		<!-- :: open : ksg_4 : [진맛] 사용/미사용 드롭박스 내용. -->
						    		<select class="sbox regFullSort">
						    			<option>사용</option>
						    			<option>미사용</option>
						    		</select>
						    		<!-- :: close : ksg_4 : [진맛] 사용/미사용 드롭박스 내용. -->
						    		<!-- :: single : ksg_4 : [진맛] 라디오 버전의 사용/미사용 있던 곳. -->
						    	</td>
						    	<td>
						    		<div class="btnGroup inListTable">
                                        <a href="javascript:void(0);" class="btn modifySort">저장</a>
                                        <a href="javascript:void(0);" class="btn delSort">삭제</a>
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
				<!-- :: close : ksg_3 : [진맛] 좌측 테이블과 유사한 구조의, 우측 상품 상세정보 내용. -->
            </div>
            <!-- :: close : ksg_5 : [진맛] 4배열의 네번째 테이블 내용.. -->
		</div>
	</div>
</div>
<script>
// :: open : ksg_5 : [진맛] 카테고리 항목 클릭 시, 바로 우측의 하위 카테고리 내용이 표시되게 하는 스크립트.
$(document).on('click', '.conGroup.verticalManageSort .searchResultTable tr.reged', function(){
    $(this).closest('.section.horizontalManageSort.equalQuadSort').nextAll('.section.horizontalManageSort.equalQuadSort').children('.specInfoGroup').addClass('hide');
    $(this).closest('.section.horizontalManageSort.equalQuadSort').next('.section.horizontalManageSort.equalQuadSort').children('.specInfoGroup').removeClass('hide');
	$(this).siblings('tr').removeClass('activated');
	$(this).addClass('activated');
});
// :: close : ksg_5 : [진맛] 카테고리 항목 클릭 시, 바로 우측의 하위 카테고리 내용이 표시되게 하는 스크립트.
</script>
</body>
</html>