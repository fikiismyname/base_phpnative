<!-- <h4 class="c-sidebar__title">Halaman</h4> -->

 <li class="c-sidebar__item">
 	<a class="c-sidebar__link dashboard" href="./">
 		<i class="fa fa-home u-mr-xsmall"></i>Dashboard
 	</a>
 </li>

 <?php if (empty($_SESSION['masuk'])): ?>
 	<li class="c-sidebar__item">
 		<a class="c-sidebar__link" href="?module=masuk">
 			<i class="fa fa-sign-in u-mr-xsmall"></i>Masuk
 		</a>
 	</li>
 <?php endif ?>

 <li class="c-sidebar__item">
 	<a class="c-sidebar__link" href="?module=laporan">
 		<i class="fa fa-mouse-pointer u-mr-xsmall"></i>Table Laporan
 	</a>
 </li>

  <li class="c-sidebar__item">
 	<a class="c-sidebar__link" href="?module=tentangaplikasi">
 		<i class="fa fa-info-circle u-mr-xsmall"></i>Tentang Aplikasi
 	</a>
 </li>