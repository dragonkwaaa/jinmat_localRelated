<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/pages/head.php';
	$lCode					=	'111';
	$subCode				=	'001';
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
				<div class="titleBox manageHeadlineSort">지출과목목록</div>
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
                            <col width="30">
                            <col width="100">
                            <col width="100">
                            <col width="100">
                            <col width="80">
                            <col width="80">
                        </colgroup>
						<thead>
						<tr>
                            <th>
                                <div class="checkBoxIconBox">
									<input type="checkbox" name="" value="">
									<label></label>
								</div>
                            </th>
							<th>구분명</th>
							<th>과목코드</th>
                            <th>과목명</th>
                            <th>사용여부</th>
							<th>관리</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td></td>
							<td>
                                <select class="sbox regFullSort listMod">
							    	<option selected="">선택</option>
							    	<option >1. 고정비</option>
							    	<option>2. 변동비</option>
							    </select>
                            </td>
							<td>
                                <input class="tbox regFullSort listMod" value="">
							</td>
							<td>
                                <input class="tbox regFullSort listMod" value="">
                            </td>
                            <td>
                                <div class="inTableRadioGroup">
									<div class="radioCase">
										<div class="radioIconBox">
											<input type="radio" name="userUse_1" value="1">
											<label></label>
										</div>
										<div class="radioTitle">사용</div>
									</div>
									<div class="radioCase">
										<div class="radioIconBox">
											<input type="radio" name="userUse_1" value="2" checked="">
											<label></label>
										</div>
										<div class="radioTitle">미사용</div>
									</div>
								</div>
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
                                <select class="sbox regFullSort listMod">
							    	<option >선택</option>
							    	<option >1. 고정비</option>
							    	<option selected="">2. 변동비</option>
							    </select>
                            </td>
							<td>
                                <input class="tbox regFullSort listMod" value="2211">
							</td>
							<td>
                                <input class="tbox regFullSort listMod" value="세금(근소세외)">
                            </td>
                            <td>
                                <div class="inTableRadioGroup">
									<div class="radioCase">
										<div class="radioIconBox">
											<input type="radio" name="userUse_2" value="1">
											<label></label>
										</div>
										<div class="radioTitle">사용</div>
									</div>
									<div class="radioCase">
										<div class="radioIconBox">
											<input type="radio" name="userUse_2" value="2" checked="">
											<label></label>
										</div>
										<div class="radioTitle">미사용</div>
									</div>
								</div>
                            </td>
							<td>
								<div class="btnGroup inListTable">
                                    <a href="javascript:void(0);" class="btn modifySort">수정</a>
                                    <!-- <a href="javascript:void(0);" class="btn delSort">삭제</a> -->
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
                                <select class="sbox regFullSort listMod">
							    	<option selected="">선택</option>
							    	<option selected="">1. 고정비</option>
							    	<option>2. 변동비</option>
							    </select>
                            </td>
							<td>
                                <input class="tbox regFullSort listMod" value="3111">
							</td>
							<td>
                                <input class="tbox regFullSort listMod" value="공과금">
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
							<td colspan="7">
                                <div class="emtyAlarm">검색결과가 없습니다.</div>
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
		</div>
	</div>
</div>


<script src="/common/js/datePick.js"></script>
<script>

</script>
</body>
</html>