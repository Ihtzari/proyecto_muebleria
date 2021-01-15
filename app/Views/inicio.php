<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Mueblería</title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/bootstrap.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('datatable/dataTables.bootstrap4.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('fontawesome/css/all.css') ?>">
	<script src="<?php echo base_url('js/jquery-3.5.1.min.js') ?>"></script>
	<script src="<?php echo base_url('bootstrap/popper.min.js') ?>"></script>
	<script src="<?php echo base_url('bootstrap/bootstrap.min.js') ?>"></script>
	<script src="<?php echo base_url('datatable/jquery.dataTables.min.js') ?>"></script>
	<script src="<?php echo base_url('datatable/dataTables.bootstrap4.min.js') ?>"></script>
	<script src="<?php echo base_url('js/muebles.js') ?>"></script>
	<script src="<?php echo base_url('js/sweetalert.min.js') ?>"></script>
	<script>
		var base_url = '<?php echo base_url() ?>'; //variable global 
	</script>
</head>
<body background="<?php echo base_url('img/madera.jpeg') ?>">
	<div class="contairner">
		<div class="container">
			<br>
			<br>
			<br>
			<center><font face ="Sans" size="100" color="#F1B514">CATALOGO   DE   MUEBLERIA</font></center>
			<div class="row">
				<div class="col-sm-4">
					<br>
					<br>
					<br>

					<button class="btn btn-secondary" data-toggle="modal" data-target="#modalAgregarMueble">
						<span class="far fa-plus-square"></span> AGREGAR
					</button>
				</div>
			</div>
			<hr>
			<div class="row">
				<hr>
				<div class="col-sm-12">
					<br>
					<div id="tablaCargadaMuebles"></div>
					<br>
				</div>
			</div>


			<!-- Modal -->
			<div class="modal fade" id="modalAgregarMueble" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">AGREGAR MUEBLE</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form id="frmAgregaMueble">
								<label>MUEBLE</label>
								<input type="text" id="mueble" name="mueble" class="form-control">
								<label>TIPO DE MADERA</label>
								<input type="text" id="tipo" name="tipo" class="form-control">
								<label>COSTO DE VENTA</label>
								<input type="text" id="costov" name="costov" class="form-control">
								<label>COSTO DE COMPRA</label>
								<input type="text" id="costoc" name="costoc" class="form-control">
								<label>FECHA</label>
								<input type="text" id="fecha" name="fecha" class="form-control">
							</form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">CERRAR</button>
							<button type="button" class="btn btn-primary" id="btnAgregarMueble">GUARDAR</button>
						</div>
					</div>
				</div>
			</div>


			<div class="modal fade" id="modalActualizarMueble" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">ACTUALIZAR MUEBLE</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form id="frmAgregaMuebleu">
								<input type="text" id="idMueble" name="idMueble" hidden="">
								<label>MUEBLE</label>
								<input type="text" id="muebleu" name="muebleu" class="form-control">
								<label>TIPO DE MADERA</label>
								<input type="text" id="tipou" name="tipou" class="form-control">
								<label>COSTO DE VENTA</label>
								<input type="text" id="costovu" name="costovu" class="form-control">
								<label>COSTO DE COMPRA</label>
								<input type="text" id="costocu" name="costocu" class="form-control">
								<label>Fecha</label>
								<input type="text" id="fechau" name="fechau" class="form-control">
							</form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">CERRAR</button>
							<button type="button" class="btn btn-warning" onclick="actualizarMueble()">ACTUALIZAR</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>