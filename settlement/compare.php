<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/pages/head.php';
	$lCode					=	'110';
	$subCode				=	'013';
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
            <div class="section horizontalManageSort searcManageSort fullMod">
				<div class="titleBox manageHeadlineSort">결산목록</div>
				<div class="conGroup verticalManageSort bottomRowSort">
					<div class="headLineBox listControlSort">
						<div class="selectGroup monthSort">
							<select>
								<option selected>2020년</option>
								<option>2019년</option>
								<option>2018년</option>
								<option>2017년</option>
							</select>
                        </div>
                    </div>
                    <table class="searchResultTable summarySort">
						<tbody>
						<tr>
							<th>합계(일)</th>
							<td>
								<div class="tAlignR mt5">지출 합계 : 100,000,000 원</div>
								<div class="tAlignR mt5">수입 합계 : 100,000,000 원</div>
							</td>
						</tr>
						</tbody>
					</table>
					<table class="searchResultTable">
						<colgroup>
                            <col width="180">
                            <col width="100">
                            <col width="100">
                            <col width="100">
                            <col width="100">
                            <col width="100">
                            <col width="100">
                            <col width="100">
                            <col width="100">
                            <col width="100">
                            <col width="100">
                            <col width="100">
                            <col width="100">
                            <col width="100">
                        </colgroup>
						<thead>
						<tr>
                            <th rowspan="2"></th>
                            <th>2020.01 월</th>
                            <th>2 월</th>
                            <th>3 월</th>
                            <th>4 월</th>
                            <th>5 월</th>
                            <th>6 월</th>
                            <th>7 월</th>
                            <th>8 월</th>
                            <th>9 월</th>
                            <th>10 월</th>
                            <th>11 월</th>
                            <th>12 월</th>
                            <th rowspan="2">총합</th>
						</tr>
                        <tr>
                            <th colspan="3">1/4 분기</th>
                            <th colspan="3">2/4 분기</th>
                            <th colspan="3">3/4 분기</th>
                            <th colspan="3">4/4 분기</th>
                        </tr>
						</thead>
						<tbody>
						<tr class="highTr">
							<th>
                                <span>지출합계</span>
                                <span class="highClosed hide">▼</span>
                                <span class="highOpened">▲</span>
                            </th>
							<td>
                               -
                            </td>
                            <td>
                                1,000,000,000 원
                            </td>
                            <td>
                                1,000,000,000 원
							</td>
							<td>
								-
							</td>
                            <td>
                                -
							</td>
                            <td>
                                <span>1,0,000,000 원</span>
							</td>
                            <td>
                                <span>2,0,000,000 원</span>
                            </td>
                            <td>
								-
							</td>
                            <td>
                                -
                            </td>
                            <td>
								-
							</td>
                            <td>
                                -
                            </td>
                            <td>
								-
                            </td>
                            <td>
                                5,0,000,000 원
							</td>
                        </tr>
                        <tr class="subTr firstSort">
							<th>인건비(비급여)</th>
							<td>
                               -
                            </td>
                            <td>
                                500,000,000 원
                            </td>
                            <td>
                                500,000,000 원
							</td>
							<td>
								-
							</td>
                            <td>
                                -
							</td>
                            <td>
                                <span>5,000,000 원</span>
							</td>
                            <td>
                                <span>10,000,000 원</span>
                            </td>
                            <td>
								-
							</td>
                            <td>
                                -
                            </td>
                            <td>
								-
							</td>
                            <td>
                                -
                            </td>
                            <td>
								-
                            </td>
                            <td>
                                25,000,000 원
							</td>
                        </tr>
                        <tr class="subTr firstSort">
							<th>인건비(급여)</th>
							<td>
                               -
                            </td>
                            <td>
                                500,000,000 원
                            </td>
                            <td>
                                500,000,000 원
							</td>
							<td>
								-
							</td>
                            <td>
                                -
							</td>
                            <td>
                                <span>5,000,000 원</span>
							</td>
                            <td>
                                <span>10,000,000 원</span>
                            </td>
                            <td>
								-
							</td>
                            <td>
                                -
                            </td>
                            <td>
								-
							</td>
                            <td>
                                -
                            </td>
                            <td>
								-
                            </td>
                            <td>
                                25,000,000 원
							</td>
                        </tr>
                        <tr class="highTr">
							<th>수입합계</th>
							<td>
                               -
                            </td>
                            <td>
                                5,000,000,000 원
                            </td>
                            <td>
                                15,000,000,000 원
							</td>
							<td>
								-
							</td>
                            <td>
                                -
							</td>
                            <td>
                                <span>150,000,000 원</span>
							</td>
                            <td>
                                <span>200,000,000 원</span>
                            </td>
                            <td>
								-
							</td>
                            <td>
                                -
                            </td>
                            <td>
								-
							</td>
                            <td>
                                -
                            </td>
                            <td>
								-
							</td>
                            <td>
								550,000,000 원
							</td>
						</tr>
						</tbody>
					</table>
				</div>
				<!-- <div class="page_group underSort">
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
				</div> -->
			</div>
		</div>
	</div>
</div>
<script src="/common/js/datePick.js"></script>
<script>
// :: highTr 라인 클릭 시, 귀속된 firstSubTr 표시하는 스크립트. 
$(document).on('click', 'tr.highTr', function(){
    $(this).children('th').children('span.highOpened').toggleClass('hide');
    $(this).children('th').children('span.highClosed').toggleClass('hide');
    $(this).nextUntil('tr.highTr').toggleClass('hide');
});
</script>
</body>
</html>