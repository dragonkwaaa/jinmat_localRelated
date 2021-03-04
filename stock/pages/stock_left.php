<nav class="sideMenu majorSort">
	<div class="conGroup">
		<ul class="menuBox">
			<li>
				<a href="/stock/" class="<?=($lCode == '700' ? ' activated' : '')?>">
					<i class="dashboardIcon"></i>
					<span class="ml11">재고 관리</span>
				</a>
			</li>
		</ul>
		<ul class="menuBox">
			<li>
				<a href="/stock/watingStock" class="<?=($lCode == '701' ? ' activated' : '')?>">
					<i class="dashboardIcon"></i> 
					<span class="ml11">재고 대기</span> 
				</a>
			</li>
		</ul> 
		<ul class="menuBox">
			<li>
				<a href="/stock/stockLimit" class="<?=($lCode == '702' ? ' activated' : '')?>">
					<i class="dashboardIcon"></i> 
					<span class="ml11">재고사용수량 관리</span> 
				</a>
			</li>
		</ul> 
	</div>
</nav>  