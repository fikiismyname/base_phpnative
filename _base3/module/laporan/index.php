<div class="col-md-12 u-mb-medium">
	<div class="c-table-responsive@desktop">
		<table class="c-table" id="datatable">
			<caption class="c-table__title">
				<?php if (empty($_SESSION['masuk'])): ?>
					Laporan Keseluruhan
				<?php else: ?>
					Laporan Anda
				<?php endif ?>
			</caption>

			<thead class="c-table__head c-table__head--slim">
				<tr class="c-table__row">
					<th class="c-table__cell c-table__cell--head">Tanggal</th>
					<th class="c-table__cell c-table__cell--head no-sort">User ID</th>
					<th class="c-table__cell c-table__cell--head no-sort">Jumlah Like</th>
					<th class="c-table__cell c-table__cell--head">Status</th>
					<th class="c-table__cell c-table__cell--head">Media Type</th>
					<th class="c-table__cell c-table__cell--head no-sort">Media Code</th>
				</tr>
			</thead>

			<tbody>
				<?php
				if (empty($_SESSION['masuk'])) {
					$sql = "SELECT *,COUNT(*) as jumlahlike FROM tb_laporan WHERE status='OK' GROUP BY mediacode";
				}else {
					$sql = "SELECT *,COUNT(*) as jumlahlike FROM tb_laporan WHERE userid='$_SESSION[userid]' AND status='OK' GROUP BY mediacode";
				}
				$result = $mysql->query($sql);
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
						echo '
						<tr class="c-table__row">
							<td class="c-table__cell">'.$row['tanggal'].'</td>
							<td class="c-table__cell">'.$row['userid'].'</td>
							<td class="c-table__cell">'.$row['jumlahlike'].'</td>
							<td class="c-table__cell">'.$row['status'].'</td>
							<td class="c-table__cell">'.$row['mediatype'].'</td>
							<td class="c-table__cell"><a class="c-btn c-btn--success" target="_blank" href="https://instagram.com/p/'.$row['mediacode'].'">'.$row['mediacode'].'</a></td>
						</tr>
						';
					}
				}
				?>
			</tbody>
		</table>
	</div>
</div>