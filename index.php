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
			<!-- :: starting : ksg_20210304_1813 : [진맛] 창고현황 파트. -->
			<div class="section dashTableSort mt34">
				<div class="titleBox sectionSort">
					<div>최근 창고현황</div>
					<a href="javascript:Void(0);" class="btn regLinkBtn">더 보기</a>
				</div>
				<div class="conGroup inHorizon_double">
					<!-- :: starting : ksg_20210304_1819 : [땡땡] 구역에서 절반의 너비를 차지하는 그래프 내용. -->
					<div class="graphCase lSide_relaNoScr">
						<canvas id="barChart_1" style="height : 400px; width : 100%; min-width : 246px;"></canvas>
					</div>
					<!-- :: starting : ksg_20210304_1818 : [땡땡] 구역에서 절반의 너비를 차지하는 테이블 내용. 좌측에 그래프가 있을 때의 모습. -->
					<table class="listTable rSide_absol">
						<colgroup>
							<col style="width : 500px">
							<col style="width : 500px">
							<col style="width : 500px">
							<col style="width : 500px">
							<col style="width : 500px">
						</colgroup>
						<thead>
						<tr>
							<th>창고명</th>
							<th>재고량</th>
							<th>입고량</th>
							<th>출고량</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td>서울창고</td>
							<td>4,200</td>
							<td>8,000</td>
							<td>1,200</td>
						</tr>
						<tr>
							<td>경기창고</td>
							<td>4,150</td>
							<td>7,500</td>
							<td>500</td>
						</tr>
						<tr>
							<td>대전창고</td>
							<td>3,950</td>
							<td>4,200</td>
							<td>700</td>
						</tr>
						<tr>
							<td>옥천창고</td>
							<td>3,900</td>
							<td>100</td>
							<td>3,500</td>
						</tr>
						<tr>
							<td>부산창고</td>
							<td>3,950</td>
							<td>2,000</td>
							<td>7,000</td>
						</tr>
						</tbody>
					</table>
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
<script src="/common/js/Chart.min.js"></script>
<script>
// :: open : ksg_20210304_1838 : [세무야] 바 형태의 그래프. Y축 최하단에서부터 시작하는 내용. 한 년도당 3개씩 표시.
$( document ).ready( function(){
    let chart    = document.getElementById('barChart_1').getContext('2d'),
    // :: 그래프 내부의 그라디언트 색상 관련.
    gradient1 = chart.createLinearGradient(0, 0, 0, 500);
    gradient1.addColorStop(0.5, '#a2bcef');
    gradient1.addColorStop(0.7, '#f8fafe');
    gradient1.addColorStop(1, '#fff');

    gradient2 = chart.createLinearGradient(0, 0, 0, 280);
    gradient2.addColorStop(0, 'cornFlowerBlue');
    gradient2.addColorStop(0.4, 'lightBlue');
    gradient2.addColorStop(1, '#fff');

    // :: 측정값 데이터 들어가는 자리.
    let data  = {
        labels: [ '2009', '', '2010', '', '2011', '', '2012', '', '2013', '', '2014', '', '2015', '', '2016', '', '2017', '', '2018', '', '2019', '', '2020', '', '2021' ],
        datasets: [{
    		label: 'Custom Label Name',
    		pointBackgroundColor: '#4d42e5',
    		pointRadius: 1,
    		pointHoverRadius: 1,
    		borderWidth: 1,
    		borderColor: '#5a51e7',
    		data: [0, 0, 0, 0, 0, 0, 10, 40, 40, 40, 40, 70, 70, 65, 65, 150, 150, 27, 27, 27, 15, 0, 0, 0, 0]
        }]
    };
    // :: 차트 옵션
    let options = {
    	layout: {
            padding: {
                left: 0,
                right: 0,
                top: 30,
                bottom: 0
    		},
    		margin: {
                left: 0,
                right: 0,
                top: 0,
                bottom: 0
    		}
        },
    	responsive: false,
    	maintainAspectRatio: true,
    	animation: {
    		easing: 'easeInOutQuad',
    		duration: 520
        
    	},
    	scales: {
    		xAxes: [{
    			gridLines: {
    				color: 'rgba(200, 200, 200, 0.05)',
    				lineWidth: 1
    			},
    			ticks: {
                    autoSkip: false,
                    maxRotation: 0,
    				// minRotation: 0
    				fontSize: 10,
    				fontStyle : 600
                }
    		}],
    		yAxes: [{
    			gridLines: {
    				color: '#a2bcef',
    				lineWidth: 1,
    				drawBorder: false
    			},
    			ticks: {
                
    				autoSkip: false,		// :: y축 단위계 생략되지 않게 하는 내용 1.
    				stepSize : 1,			// :: y축 단위계 생략되지 않게 하는 내용 2.
    				min: 0,
    				max: 10000,
    				maxRotation: 0,
    				padding : 10,
    				fontSize: 10,
    				fontStyle : 600,
    				fontColor : '#000',
    				fontFamily : 'Noto Sans KR',
    				// :: 특정 y축 단위계의 명칭을 커스터마이징.
    				callback: function(label, index, labels) {
						// :: open : ksg_20210304_1900 : [진맛] 띄어쓰기가 들어간 텍스트를 입력할때의 구조. 주석 처리 하여 보존함.
    					// let	worstText		=	"매우<br>나쁨";
    					// let	spacedWorstText	=	worstText.split("<br>");
						// :: close : ksg_20210304_1900 : [진맛] 띄어쓰기가 들어간 텍스트를 입력할때의 구조. 주석 처리 하여 보존함.
    					switch (label) {
    					  	case 2000:
    							return '2000';
    					  	case 4000:
    							return '4000';
    					  	case 6000:
    							return '6000';
							case 8000:
    							return '8000';
							case 10000:
    							return '10000';
						  	// :: open : ksg_20210304_1900 : [진맛] 띄어쓰기가 들어간 텍스트를 입력할때의 구조. 주석 처리 하여 보존함.
    					  	// case 150:
    						// 	return spacedWorstText;
							// :: close : ksg_20210304_1900 : [진맛] 띄어쓰기가 들어간 텍스트를 입력할때의 구조. 주석 처리 하여 보존함.	
    					}
    				}
    			}
    		}]
    	},
    	elements: {
    		line: {
                // :: open : ksg_20210201_1907 : [공기] 그래프의 선을 곡선으로 만드는 내용.(높은 숫자일수록 곡선이 된다.)
                tension: 0.3
                // :: close : ksg_20210201_1907 : [공기] 그래프의 선을 곡선으로 만드는 내용.(높은 숫자일수록 곡선이 된다.)
    		}
    	},
    	legend: {
    		display: true,
			position : 'left'
    	},
    	point: {
    		backgroundColor: 'white'
    	},
    	tooltips: {
    		titleFontFamily: 'Open Sans',
    		backgroundColor: 'rgba(0,0,0,0.3)',
    		titleFontColor: 'red',
    		caretSize: 5,
    		cornerRadius: 2,
    		xPadding: 10,
    		yPadding: 10
    	}
    };
    let dataFirst = {
		label : "재고량",
        data: [4200, 4150, 3950, 3900, 3950],
        lineTension: 0,
        fill: true,
        backgroundColor: gradient1,
        borderColor: '#ccc',
        borderWidth : 1,
        pointRadius: 1,
    	pointHoverRadius: 1,
    	lineTension: 0.5           
    };
    let dataSecond = {
		label : "입고량",
        data: [8000, 7500, 4200, 100, 2000],
        lineTension: 0,
        fill: true,
        backgroundColor: "navy",
        borderColor: 'navy',
        borderWidth : 1,
        pointRadius: 1,
    	pointHoverRadius: 1,
    	lineTension: 0.5
    };
	let dataThird = {
		label : "출고량",
        data: [1200, 500, 700, 3500, 7000],
        lineTension: 0,
        fill: true,
        backgroundColor: "#cecece",
        borderColor: '#ccc',
        borderWidth : 1,
        pointRadius: 1,
    	pointHoverRadius: 1,
    	lineTension: 0.5
    };
    var speedData = {
        labels: [ '서울창고', '경기창고', '대전창고', '옥천창고', '부산창고' ],
      datasets: [dataFirst, dataSecond, dataThird]
    };
    let chartInstance = new Chart(chart, {
        type: 'bar',
        // data: data,
        data : speedData,
    	options: options
    });
});
// :: close : ksg_20210304_1838 : [세무야] 바 형태의 그래프. Y축 최하단에서부터 시작하는 내용. 한 년도당 3개씩 표시.
</script>
</body>
</html>