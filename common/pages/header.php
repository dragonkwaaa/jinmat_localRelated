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
        
		<a href="/budget/" class="<?=($tCode == '101' ? ' activated' : '')?> mr20">
			<!-- <i class="dashboardIcon"></i> -->
			<span class="">예산관리</span>
		</a>
		<a href="/settlement/" class="<?=($tCode == '110' ? ' activated' : '')?> mr20">
			<!-- <i class="branchIcon"></i> -->
			<span class="">결산관리</span>
		</a>
		<a href="/setting/subjectList.php" class="<?=($tCode == '111' ? ' activated' : '')?> mr20">
			<!-- <i class="branchIcon"></i> -->
			<span class="">기초항목 관리</span>
		</a>

		<a href="/expense/expendList" class="<?=($tCode == '0102' ? ' activated' : '')?> mr20">
			<!-- <i class="branchIcon"></i> -->
			<span class="">지출자료관리</span>
        </a>
        <a href="/cardSetting/limit" class="<?=($tCode == '0108' ? ' activated' : '')?> mr20">
			<!-- <i class="branchIcon"></i> -->
			<span class="">카드한도관리</span>
		</a>
		<!-- <a href="/income/" class="<?=($tCode == '0104' ? ' activated' : '')?> mr20">
			<span class="">영업소관리</span>
		</a> -->
		<!-- <a href="/outcome/" class="<?=($tCode == '0105' ? ' activated' : '')?> mr20">
			<span class="">고정지출관리</span>
		</a> -->
		
		<!-- <a href="/my/itemList" class="<?=($tCode == '0107' ? ' activated' : '')?> mr20">
			<span class="">품목관리</span>
		</a> -->
		<a href="/staff/" class="<?=($tCode == '0103' ? ' activated' : '')?> mr20">
			<!-- <i class="staffIcon"></i> -->
			<span class="">관리자목록</span>
		</a>
		<!-- <a href="/set/payMethod" class="<?=($tCode == '0109' ? ' activated' : '')?> mr20">
			<span class="">결제수단 관리</span>
		</a> -->
		<!-- <a href="/pay/" class="<?=($tCode == '0112' ? ' activated' : '')?> mr20">
			<span class="">결제관리</span>
		</a> -->
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