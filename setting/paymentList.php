<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/pages/head.php';
	$lCode					=	'111';
	$subCode				=	'003';
?>
<body>
<div class="container">
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/pages/header.php'; ?>
	<div class="wrapper">
		<div class="contents">
			<?php include $_SERVER['DOCUMENT_ROOT'] . '/setting/pages/headLine.php';?>
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
								<td colspan="2">
									<select class="sbox">
										<option>지출명</option>
										<option>지출코드</option>
									</select>
									<input class="tbox searchInput nearBtnMod" placeholder="검색어를 입력해주세요.">
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
				<div class="titleBox manageHeadlineSort">결제수단목록</div>
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
                            <col width ="30">
                            <col width ="90">
                            <col width ="90">
                            <col width ="90">
                            <col width ="200">
                            <col width ="100">
                            <col width ="80">
                        </colgroup>
						<thead>
						<tr>
                            <th>
                                <div class="checkBoxIconBox">
									<input type="checkbox" name="" value="">
									<label></label>
								</div>
                            </th>
							<th>결제수단코드</th>
                            <th>
                                <div>분류</div>
                                <div class="guideWord mt5">
                                    <div>1. 카드</div>
                                    <div>2. 계좌이체</div>
                                    <div>3. 어음</div>
                                    <div>4. B2B</div>
                                </div>
                            </th>
							<th>명칭</th>
                            <th>결제수단정보</th>
                            <th>사용여부</th>
							<th>관리</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td></td>
							<td>
								<input class="tbox regFullSort listMod onlyNum" value="" maxlength="4"/>
							</td>
                            <td>
                                <input class="tbox regFullSort listMod" value="">
                            </td>
							<td>
                                <input class="tbox regFullSort listMod" value="">
                            </td>
                            <td>
								<div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" value="" placeholder="은행/카드사">
                                </div>
                                <div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" value="" placeholder="카드/계좌번호">
                                </div>
                                <div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" value="" placeholder="예금주">
                                </div>
							</td>
                            <td>
                                <div class="inTableRadioGroup">
									<div class="radioCase">
										<div class="radioIconBox">
											<input type="radio" name="userUse_3" value="1">
											<label></label>
										</div>
										<div class="radioTitle">사용</div>
									</div>
									<div class="radioCase">
										<div class="radioIconBox">
											<input type="radio" name="userUse_3" value="2" checked="">
											<label></label>
										</div>
										<div class="radioTitle">미사용</div>
									</div>
								</div>
                            </td>
							<td>
								<div class="btnGroup inListTable">
									<a href="javascript:void(0);" class="btn modifySort">수정</a>
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
								<input class="tbox regFullSort listMod onlyNum" value="1567" maxlength="4"/>
							</td>
                            <td>
                                <input class="tbox regFullSort listMod" value="계좌이체(2)">
                            </td>
							<td>
                                <input class="tbox regFullSort listMod" value="우리계좌1(1109)">
                            </td>
                            <td>
								<div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" value="우리은행" placeholder="은행/카드사">
                                </div>
                                <div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" value="1234-1234-1234" placeholder="카드/계좌번호">
                                </div>
                                <div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" value="곽반장" placeholder="예금주">
                                </div>
							</td>
                            <td>
                                <div class="inTableRadioGroup">
									<div class="radioCase">
										<div class="radioIconBox">
											<input type="radio" name="userUse_3" value="1">
											<label></label>
										</div>
										<div class="radioTitle">사용</div>
									</div>
									<div class="radioCase">
										<div class="radioIconBox">
											<input type="radio" name="userUse_3" value="2" checked="">
											<label></label>
										</div>
										<div class="radioTitle">미사용</div>
									</div>
								</div>
                            </td>
							<td>
								<div class="btnGroup inListTable">
                                    <a href="javascript:void(0);" class="btn modifySort">수정</a>
								</div>
							</td>
						</tr>
						<tr>
							<td colspan="10">검색결과가 없습니다.</td>
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