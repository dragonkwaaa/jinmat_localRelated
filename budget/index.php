<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/pages/head.php';
    $lCode					=	'0101';
	$subCode				=	'021';

	
?>
<body>
<div class="container">
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/pages/header.php'; ?>
	<div class="wrapper">
		<div class="contents">
            <div class="subMenuTab">
				<a href="/budget/" class="btn subPartMod <?=($subCode == '021' ? ' activated' : '')?>">회사운영예산</a>
				<a href="/budget/buyBudgetFst" class="btn subPartMod <?=($subCode == '022' ? ' activated' : '')?>">구매자금예산</a>
			</div> 
			<div class="section horizontalManageSort searcManageSort topLineMod">
				<div class="titleBox manageHeadlineSort">예산검색</div>
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
									<input class="tbox searchInput topLineSearchMod" placeholder="검색어를 입력해주세요.">
								</td>
								<th>
									구분
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
											<div class="checkBoxTitle">수입</div>
										</div>
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">고정비</div>
										</div>
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">변동비</div>
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
				<div class="titleBox manageHeadlineSort">예산목록</div>
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
								<div class="tAlignR mt5">예산수입 합계 : 120,000,000 원</div>
                                <div class="tAlignR mt5">예산지출 합계 : 120,000,000 원</div>
							</td>
						</tr>
						</tbody>
                    </table>
                    <table class="searchResultTable">
						<colgroup>
                            <col width="30">
                            <col width="30">
                            <col width="100">
                            <col width="100">
                            <col width="100">
                            <col width="100">
                            <col width="100">
                            <col width="100">
                            <col width="80">
                        </colgroup>
						<thead>
						<tr>
                            <th rowspan="2">
                                <div class="checkBoxIconBox">
									<input type="checkbox" name="" value="">
									<label></label>
								</div>
                            </th>
							<th rowspan="2">일</th>
                            <th rowspan="2">
                                <div>구분</div>
                                <div class="guideWord mt5">
                                    <div>1. 수입</div>
                                    <div>2. 고정비용</div>
                                    <div>3. 변동비용</div>
                                </div>
                            </th>
							<th rowspan="2">과목</th>
                            <th colspan="2">예산</th>
                            <th rowspan="2">관리</th>
						</tr>
                        <tr>
                            <th>수입</th>
                            <th>지출</th>
                        </tr>
						</thead>
						<tbody>
                        <tr>
                            <td></td>
							<td>
                                <input class="tbox regFullSort listMod" placeholder="일" value="">
                            </td>
							<td>
                                <input class="tbox regFullSort listMod" placeholder="구분" value="">
                            </td>
							<td>
                                <input class="tbox regFullSort listMod" placeholder="과목" value="">
                            </td>
							<td>
                                <input class="tbox regFullSort listMod priceMod onlyNum" value="">
                                <span class="priceWord">원</span>
							</td>
							<td>
                                <input class="tbox regFullSort listMod priceMod onlyNum" value="">
                                <span class="priceWord">원</span>
							</td>
							<td>
								<div class="btnGroup inListTable">
									<a href="javascript:void(0);" class="btn regSort">등록</a>
								</div>
							</td>
						</tr>
						<tr>
                            <td>
                                <div class="checkBoxIconBox">
									<input type="checkbox" name="" value="">
									<label></label>
								</div>
                            </td>
							<td>
                                <input class="tbox regFullSort listMod" placeholder="일" value="07.05">
                            </td>
							<td>
                                <input class="tbox regFullSort listMod" placeholder="구분" value="고정비용(01)">
                            </td>
                            <td>
                                <input class="tbox regFullSort listMod" placeholder="구분" value="인건비(1001)">
                            </td>
                            <td>
                                <input class="tbox regFullSort listMod priceMod" placeholder="" value="0">
                                <span class="priceWord">원</span>
							</td>
						    <td>
                                <input class="tbox regFullSort listMod priceMod" placeholder="" value="0">
                                <span class="priceWord">원</span>
							</td>
							<td>
								<div class="btnGroup inListTable">
									<a href="javascript:void(0);" class="btn modifySort">수정</a>
								</div>
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