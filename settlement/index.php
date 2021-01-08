<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/pages/head.php';
	$lCode					=	'110';
	$subCode				=	'010';
?>
<body>
<div class="container">
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/pages/header.php'; ?>
	<div class="wrapper">
		<div class="contents">
			<div class="subMenuTab">
                <a href="/settlement/" class="btn subPartMod <?=($subCode == '010' ? ' activated' : '')?>">회사운영예산결산</a>
                <a href="/settlement/dailySettle" class="btn subPartMod <?=($subCode == '011' ? ' activated' : '')?>">일일현금지출결산</a>
                <a href="/settlement/buySettle" class="btn subPartMod <?=($subCode == '012' ? ' activated' : '')?>">구매자금지출결산</a>
                <a href="/settlement/compare" class="btn subPartMod <?=($subCode == '013' ? ' activated' : '')?>">총결산목록</a>
			</div> 
            <div class="section horizontalManageSort searcManageSort topLineMod">
				<div class="titleBox manageHeadlineSort">검색</div>
				<div class="conGroup verticalManageSort">
					<table class="searchGroup">
						<colgroup>
							<col width="70">
							<col width="*">
							<col width="70">
							<col width="*">
						</colgroup>
						<tbody>
							<tr>
								<th>검색어</th>
								<td>
									<select class="sbox">
										<option>전체</option>
										<option>과목</option>
									</select>
									<input class="tbox searchInput nearBtnMod" placeholder="검색어를 입력해주세요.">
                                    <div class="btnGroup inTableSearch">
								    	<a href="javascript:void(0);" class="btn searchSort">검색</a>
								    </div>
								</td>
                                <th>
									과목구분
								</th>
								<td>
									<div class="inTableCheckGroup">
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">전체</div>
										</div>
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">고정비용</div>
										</div>
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">변동비용</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
                                <th>
									검색기간
								</th>
								<td colspan="4">
									<div class="dateInputCase topLineSearchMod">
										<input class="tbox dateBox shortMod" id="startDate" readonly="" placeholder="시작일">
									</div>
									<div class="betweenWaveText">~</div>
									<div class="dateInputCase topLineSearchMod">
										<input class="tbox dateBox shortMod" id="endDate" readonly="" placeholder="종료일">
									</div>
									<div class="btnGroup inTableSearch">
										<a href="javascript:void(0);" class="btn searchSort">검색</a>
									</div>
								</td>
                            </tr>
						</tbody>
					</table>
				</div>
			</div>
            <div class="section horizontalManageSort searcManageSort fullMod">
				<div class="titleBox manageHeadlineSort">결산목록</div>
				<div class="conGroup verticalManageSort bottomRowSort">
					<div class="headLineBox listControlSort">
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
					<table class="searchResultTable summarySort">
						<tbody>
						<tr>
							<th>합계(일)</th>
							<td>
								<div class="tAlignR mt5">예산수입 합계 : 100,000,000 원</div>
                                <div class="tAlignR mt5">예산지출 합계 : 100,000,000 원</div>
                                <div class="tAlignR mt5">결산수입 합계 : 100,000,000 원</div>
								<div class="tAlignR mt5">결산지출 합계 : 100,000,000 원</div>
							</td>
						</tr>
						</tbody>
					</table>
					<table class="searchResultTable">
						<colgroup>
                            <col width="50">
                            <col width="100">
                            <col width="100">
                            <col width="120">
                            <col width="120">
                            <col width="120">
                            <col width="120">
                            <col width="120">
                            <col width="80">
                        </colgroup>
						<thead>
						<tr>
							<th rowspan="2">일</th>
                            <th rowspan="2">과목구분</th>
							<th rowspan="2">과목</th>
                            <th colspan="2">예산</th>
                            <th colspan="2">결산</th>
                            <th rowspan="2">예산대비 증감</th>
                            <th rowspan="2">비율</th>
						</tr>
                        <tr>
                            <th>수입</th>
                            <th>지출</th>
                            <th>수입</th>
                            <th>지출</th>
                        </tr>
						</thead>
						<tbody>
						<tr>
							<td>07.05</td>
							<td>
                               고정비용(02)
                            </td>
                            <td>
                                인건비(급여)(1108)
                            </td>
                            <td>
                                0 원
							</td>
							<td>
								0 원
							</td>
                            <td>
                                0 원
							</td>
                            <td>
                                1,0,000,000 원
							</td>
                            <td>
                                - 1,0,000,000 원
                            </td>
                            <td>
                                -100 %
							</td>
						</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="/common/js/datePick.js"></script>
<script>
</script>
</body>
</html>