<!-- Modal -->
<div class="modal fade" id="modalauthor" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-sm" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-question-circle"></i> About Tools</h5>
			</div>
			<div class="modal-body">

				<table class="table table-bordered">
					<tbody>
						<tr>
							<td>Author</td>
							<td><?= $settings['author'] ?></td>
						</tr>
						<tr>
							<td>Version</td>
							<td><?= $settings['version'] ?></td>
						</tr>
					</tbody>
				</table>

			</div>
		</div>
	</div>
</div>