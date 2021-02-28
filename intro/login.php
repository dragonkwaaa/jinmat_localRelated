<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/pages/head.php';?>
<body>
<div class="container">
	<div class="wrapper loginSort">
		<div class="contents loginSort">
			<div class="section loginSect">
				<div class="loginTitleBox">
                    <span>진짜 맛있는 과일</span>
				</div>
				<div class="loginsubTitleBox">로그인 후 사용 가능합니다.</div>
				<div class="conGroup loginInfoSort">
					<input class="tbox" placeholder="아이디"/>
					<input class="tbox" placeholder="비밀번호"/>
				</div>
				<div class="btnGroup loginSort">
					<a href="/" class="btn loginSort">로그인</a>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="/common/js/datePick.js"></script>
<script>
// :: 로그인 페이지 높이값 자동 계산해주는 스크립트.
function funLoad(){
	var Cheight = $(window).height();
	var autoH = Cheight;
	$('.contents.loginSort').css({'height':autoH+'px'});
}
window.onload = funLoad;
window.onresize = funLoad;
</script>
</body>
</html>