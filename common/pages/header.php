<header>
	<a class="logoCase" href="/">
		<!-- <i class="logo longSort"></i> -->
		<span>진짜 맛있는 과일</span>
	</a>
	<div class="headerNav headerMainSort">
		<a href="/pageTemplete/singleTable" class="<?=($tCode == '099' ? ' activated' : '')?> mr20">
			<!-- <i class="engineerIcon"></i> -->
			<span class="">페이지 템플릿</span>
		</a>
		<a href="/standSet/rawMatSet" class="<?=($tCode == '0100' ? ' activated' : '')?> mr20">
			<!-- <i class="dashboardIcon"></i> -->
			<span class="">기준항목 관리</span>
		</a>
		<a href="/order/" class="<?=($tCode == '0200' ? ' activated' : '')?> mr20">
			<!-- <i class="dashboardIcon"></i> -->
			<span class="">납품/발주관리</span>
		</a>
		<a href="/buy/obligation" class="<?=($tCode == '0300' ? ' activated' : '')?> mr20">
			<!-- <i class="dashboardIcon"></i> -->
			<span class="">구매(납품업체)관리현황</span>
        </a>
	</div>

	<div class="headerNav rightSideSort">
		<!-- <a href="/my/chiefLog" class="btn userGradeSort">최고관리자</a>
		<a href="/my/myInfo" class="btn userGradeSort">내 정보</a> -->
		<!-- <a href="javascript:void(0);" class="btn userGradeSort">최고관리자</a> -->
        <div class="userGradeSort">adUser1234(최고관리자)</div>
		<!-- <a href="javascript:void(0);" class="btn userGradeSort">내 정보</a> -->
		<a href="/intro/login" class="btn logoutSort">로그아웃</a>
	</div>
</header>