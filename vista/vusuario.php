<?php
include ('controlador/cusuario.php');
include ('controlador/cfunctions.php');
?>
	
	<div id="campos" style="width:500px; margin: 0 auto 0">
		<h1 class="page-header">DATOS DE USUARIO</h1>
		<form name="formUsuario" method="post" action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>">		
			<div class="row">
				<div class="form-group col-lg-6">
					<label for="male" class="control-label">Documento:</label>
					<input name="doc" id="doc" type="text" class="form-control">
				</div>
				<div class="form-group col-lg-6">
					<label for="male" class="control-label">Nombre:</label>
					<input name="nom" id="nom" type="text" class="form-control">		
				</div>	
			</div>
			<div class="row">
				<div class="form-group col-lg-6">
					<label for="male" class="control-label">Teléfono:</label>
					<input name="tel" type="text" class="form-control">		
				</div>
				<div class="form-group col-lg-6">
					<label for="male" class="control-label">Dirección:</label><br>
					<input name="dir" type="text" class="form-control">		
				</div>
			</div>
			<div class="row">
				<div class="form-group col-lg-6">
					<label for="male" class="control-label">Contraseña:</label>
					<input name="pass" id="pass" type="text" class="form-control">		
				</div>
				<div class="form-group col-lg-6">
					<label for="male" class="control-label">Confirme Contraseña:</label><br>
					<input name="confpass" id="confpass" type="text" class="form-control">		
				</div>
			</div>
			<div class="row">
				<div class="form-group col-lg-6">
					<label for="label" class="control-label">Seleccione el perfil</label>	
					<select name="idperf" id="" class="form-control">
						<?php
							$selperfil = $ins->selperf();
							for ($i=0; $i < count($selperfil); $i++)
							{
						?>
						<option value="<?php echo $selperfil[$i]['id']; ?>"> <?php echo $selperfil[$i]['nombre']; ?> </option>
						<?php
							 } 
						?>
					</select>	
				</div>	
			</div>
			<div class="row">
				<div class="form-group col-lg-6">
					<input type="button" value="Registrar" class="btn btn-primary" onclick="return regformhash(this.form, this.form.doc, this.form.nom, this.form.pass, this.form.confpass);">		
				</div>
			</div>
		</form>	
	</div>
	<div style="width:700px;  margin: 20px auto">
		<table class="table">
			<tr>
				<th>Documento</th>
				<th>Nombre</th>
				<th>Telefono</th>
				<th>Dirección</th>
				<th>Perfil</th>
			</tr>
			<?php
				$selusuario = $ins->selusu();
				for ($i=0; $i < count($usuarios); $i++) 
				{ 
			?>	
			<tr>
				<td><?php echo $selusuario[$i]['documento']; ?></td>
				<td><?php echo $selusuario[$i]['nombre']; ?></td>
				<td><?php echo $selusuario[$i]['telefono']; ?></td>
				<td><?php echo $selusuario[$i]['direccion']; ?></td> 
				<td><?php echo $selusuario[$i]['nomper']; ?></td> 
			</tr>
			<?php 
				}
			 ?>
		</table>
	</div>