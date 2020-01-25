<div class="col-md-12">
	<?php if (!empty($_SESSION['masuk'])): ?>
		<div class="c-alert c-alert--info u-mb-medium">
			<i class="c-alert__icon fa fa-check-circle"></i> Selamat Datang di <?= $settings['title']; ?> !
		</div>
	<?php else: ?>
		<div class="c-card c-card--responsive u-mb-medium">
			<div class="c-card__header c-card__header--transparent o-line">
				<h5 class="c-card__title">Apa itu <?= $settings['title'] ?> ?</h5>
			</div>
			<div class="c-card__body">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</div>
		</div>
	<?php endif ?>
</div>

<?php if (!empty($_SESSION['masuk'])): ?>
	<div class="col-md-12">
		<span class="c-divider has-text u-mb-medium">Status Akun Instagram anda</span>
	</div>

	<?php  
	$getuserinfo = instagram(1, generate_useragent(), 'users/' . $_SESSION['username'] . '/usernameinfo', $_SESSION['cookies']);
	$result = json_decode($getuserinfo[1]);
	$media_count = $result->user->media_count;
	?>

	<div class="col-xl-4">
		<div class="c-graph-card" data-mh="graph-cards">
			<div class="c-graph-card__content">
				<h3 class="c-graph-card__title">Jumlah Media</h3>			
				<h4 class="c-graph-card__number"><?= $media_count ?></h4>
				<p class="c-graph-card__status"><?= $media_count ?> Media Pada Instagram anda</p>
			</div>

			<div class="c-graph-card__chart">
				<canvas id="js-chart-payout" width="300" height="74"></canvas>
			</div>
		</div>
	</div>

	<?php  
	$sqlprocess = "SELECT count(*) as jumlahproses FROM tb_cron WHERE userid='$_SESSION[userid]' AND status='Success'";
	$result = $mysql->query($sqlprocess);
	$read = $result->fetch_assoc();
	?>
	<div class="col-xl-8">
		<div class="c-graph-card" data-mh="graph-cards">
			<div class="c-graph-card__content">
				<h3 class="c-graph-card__title">Jumlah Proses Like Berjalan</h3>			
				<h4 class="c-graph-card__number"><?= $read['jumlahproses'] ?></h4>
				<p class="c-graph-card__status"><?= $read['jumlahproses'] ?> Proses telah Berjalan di Aplikasi ini untuk akun anda</p>
			</div>

			<div class="c-graph-card__chart">
				<canvas id="js-chart-earnings" width="600" height="74"></canvas>
			</div>
		</div>
	</div>
<?php else: ?>


	<div class="col-md-12">
		<span class="c-divider has-text u-mb-medium">Status Aplikasi</span>
	</div>

	<?php  
	$sqluser = "SELECT count(*) as useraktif FROM tb_user";
	$result = $mysql->query($sqluser);
	$read = $result->fetch_assoc();
	?>
	<div class="col-xl-6">
		<div class="c-graph-card" data-mh="graph-cards">
			<div class="c-graph-card__content">
				<h3 class="c-graph-card__title">User Aktif</h3>			
				<h4 class="c-graph-card__number"><?= $read['useraktif'] ?></h4>
				<p class="c-graph-card__status"><?= $read['useraktif'] ?> User Aktif di aplikasi ini</p>
			</div>

			<div class="c-graph-card__chart">
				<canvas id="js-chart-payout" width="300" height="74"></canvas>
			</div>
		</div>
	</div>

	<?php  
	$sqlprocess = "SELECT count(*) as jumlahproses FROM tb_cron WHERE status='Success'";
	$result = $mysql->query($sqlprocess);
	$read = $result->fetch_assoc();
	?>
	<div class="col-xl-6">
		<div class="c-graph-card" data-mh="graph-cards">
			<div class="c-graph-card__content">
				<h3 class="c-graph-card__title">Jumlah Proses Like Berjalan</h3>			
				<h4 class="c-graph-card__number"><?= $read['jumlahproses'] ?></h4>
				<p class="c-graph-card__status"><?= $read['jumlahproses'] ?> Proses telah Berjalan di Aplikasi ini</p>
			</div>

			<div class="c-graph-card__chart">
				<canvas id="js-chart-earnings" width="300" height="74"></canvas>
			</div>
		</div>
	</div>
<?php endif ?>