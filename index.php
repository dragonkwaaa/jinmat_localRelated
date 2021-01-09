<!-- :: ksg1 = ksg_20210108_1551 -->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/pages/head.php';
	$lCode					=	'';
?>
<body>
<div class="container">
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/pages/header.php'; ?>
	<!-- :: open : ksg_1 : [진맛] 좌측메뉴 파트. -->
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/dash/pages/dash_left.php'; ?>
	<!-- :: close : ksg_1 : [진맛] 좌측메뉴 파트. -->
	<div class="wrapper">
		<div class="contents">
			<div class="section dashStatusSort">
				<div class="conGroup">
					<div class="statusBox">
						<div class="statusTitle">처리 현황</div>
						<div class="statusCountBox">
							<span>246건</span>
							<i class="statusIcon jadeMod"></i>
						</div>
					</div>
					<div class="statusBox">
						<div class="statusTitle">미처리 현황</div>
						<div class="statusCountBox">
							<span>255건</span>
							<i class="statusIcon amethyst"></i>
						</div>
					</div>
					<div class="statusBox">
						<div class="statusTitle">승인 현황</div>
						<div class="statusCountBox">
							<span>42건</span>
							<i class="statusIcon emerald"></i>
						</div>
					</div>
					<div class="statusBox">
						<div class="statusTitle">미승인 현황</div>
						<div class="statusCountBox">
							<span>400건</span>
							<i class="statusIcon topaz"></i>
						</div>
					</div>
				</div>
			</div>
			<div class="section dashTableSort mt34">
				<div class="titleBox sectionSort">
					<div>발주승인요청내역</div>
					<a href="/plan/executeList" class="btn regLinkBtn">승인하기</a>
				</div>
				<div class="conGroup tableSort">
					<table class="listTable">
						<colgroup>
							<col style="width : 500px">
							<col style="width : 500px">
							<col style="width : 500px">
							<col style="width : 500px">
							<col style="width : 500px">
							<col style="width : 500px">
						</colgroup>
						<thead>
						<tr>
							<th>No.</th>
							<th>분류</th>
							<th>원자재명</th>
							<th>업체명</th>
							<th>메모</th>
							<th>상태</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td>2</td>
							<td>사과</td>
							<td>홍옥</td>
							<td>과일장수</td>
							<td>홍옥 정기 보충</td>
							<td>승인</td>
						</tr>
						<tr>
							<td>1</td>
							<td>사과</td>
							<td>부사</td>
							<td>과일장수</td>
							<td>부사 긴급 보충</td>
							<td>대기</td>
						</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="section dashTableSort mt34">
				<div class="titleBox sectionSort">
					<div>공지사항</div>
				</div>
				<div class="conGroup tableSort">
					<table class="listTable">
						<colgroup>
							<col width="30">
							<col width="30">
							<col width="100">
							<col width="60">
						</colgroup>
						<thead>
						<tr>
							<th>No.</th>
							<th>작성자</th>
							<th>제목</th>
							<th>분류</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td>1</td>
							<td>강동원</td>
							<td>징검다리 연휴 기간 정기 구매 처리 건에 관하여.</td>
							<td>전체공지</td>
						</tr>
						<tr>
							<td>2</td>
							<td>강동원</td>
							<td>품의서 내역 확인 및 수정 규칙</td>
							<td>관리자공지</td>
						</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
</script>
</body>
</html>