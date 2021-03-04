<!-- <?php include_once 'db.php'; $db = new DB(); $db->connect() ?> -->
<?php include_once 'includes/header.php' ?>


<div class="container p-4">
	<div class="row">
		<div class="col-md-4">

			<div class="card card-body">
				<form action="save.php" method="POST">
					<div class="from-group">
						<input type="text" name="identificacion" class="form-control" placeholder="identificacion">
					</div>
					<div class="from-group">
						<input type="text" name="nombre" class="form-control" placeholder="digite el nombre">
					</div>
					<div class="from-group">
						<input type="text" name="telefono" class="form-control" placeholder="digite su telefono">
					</div>
					<input type="submit" class="btn btn-success btn-block" name="save" value="save">
				</form>
			</div>

		</div>

			<div class="col-md-8">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>identificacion</th>
							<th>nombre</th>
							<th>telefono</th>
							<th>acciones</th>
						</tr>
					</thead>
					<tbody>
						<?php
							require_once 'consult.php';
							$cliente = new consult();
							$result = $cliente->getClient();

							while ($row = mysqli_fetch_array($result)) { ?>
								<!-- <?php print_r($row['id_cliente']) ?> -->
								<tr>
									<td><?php echo $row['identificacion'] ?></td>
									<td><?php echo $row['nombre'] ?></td>
									<td><?php echo $row['telefono'] ?></td>
									<td>
										<a class="btn btn-secondary" href="edit.php?id=<?php echo $row['id_cliente']?>">
											<i class="fas fa-user-edit"></i>
										</a>
										<a class="btn btn-danger" href="delete.php?id=<?php echo $row['id_cliente']?>">
											<i class="fas fa-user-minus"></i>
										</a>
									</td>
								</tr>

						<?php } ?>
					</tbody>

				</table>

			</div>

	</div>

</div>










<?php include_once 'includes/footer.php' ?>