@extends('web.pagina-web-plantilla')

@section('contenido')
	<!-- Title page -->
	<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url({{ asset('web/images/bg-02.jpg')}})">
		<h2 class="ltext-105 cl0 txt-center">
			Registro Producto
		</h2>
	</section>	


	<!-- Content page -->
	<section class="bg0 p-t-104 p-b-116">
		<div class="container">
			<div class="flex-w flex-tr">
				<div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">

					<form action="{{route('guardar.producto')}}" method="POST" enctype="multipart/form-data">
						@csrf
						<div class="mb-3">
						  <label for="exampleInputEmail1" class="form-label">Producto</label>
						  <input type="text" class="form-control" name="producto" id="exampleInputEmail1" placeholder="Producto">
						</div>
						
						<div class="mb-3">
							<label for="exampleInputEmail1" class="form-label">Precio</label>
							<input type="text" class="form-control" name="precio" id="exampleInputEmail1"  placeholder="Precio">
						</div>

						<div class="mb-3">
							<label for="exampleInputEmail1" class="form-label">Stock</label>
							<input type="text" class="form-control" name="stock" id="exampleInputEmail1"  placeholder="Stock">
						</div>
						
						<div class="mb-3">
							<label for="exampleFormControlTextarea1" class="form-label">Descripcion</label>
							<textarea class="form-control" name="descripcion" id="exampleFormControlTextarea1" rows="3"></textarea>
						</div>

						<div class="mb-3">
							<div class="row">
								<div class="col-md-9">
									<label for="formFile" class="form-label">Foto</label>
									<input class="form-control" type="file" name="foto" id="input">
								</div>
								<div class="col-md-3">
									<div>
										<img src="" alt="" id="img" height = "60">
									</div>
								</div>
							</div>
						</div>

						<div class="mb-3">
							<label for="exampleInputEmail1" class="form-label">Fecha Registro</label>
							<input type="text" class="form-control" name="fecharegistro" id="exampleInputEmail1"  placeholder="Fecha Registro">
						</div>
						
						<div class="mb-3">
							<label for="exampleInputEmail1" class="form-label">Categoria</label>
							<input type="text" class="form-control" name="categoria" id="exampleInputEmail1"  placeholder="Categoria">
						</div>
					
					<button type="submit" class="btn btn-primary">Guardar Cambios</button>
					</form>
					
				</div>
				<div class="size-210 bor10 flex-w flex-col-m p-lr-93 p-tb-30 p-lr-15-lg w-full-md">
					<div class="flex-w w-full p-b-42">
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-map-marker"></span>
						</span>
						<div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
								Dirección
							</span>
							<p class="stext-115 cl6 size-213 p-t-18">
								Coza Store Center 8th floor, 379 Hudson St, New York, NY 10018 US
							</p>
						</div>
					</div>
					<div class="flex-w w-full p-b-42">
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-phone-handset"></span>
						</span>
						<div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
								Lets Talk
							</span>

							<p class="stext-115 cl1 size-213 p-t-18">
								+1 800 1236879
							</p>
						</div>
					</div>

					<div class="flex-w w-full">
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-envelope"></span>
						</span>

						<div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
								Soporte Técnico
							</span>

							<p class="stext-115 cl1 size-213 p-t-18">
								contact@example.com
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<script>
		let img = document.getElementById('img');
		let input = document.getElementById('input');
		input.onchange = (e) =>{
		if(input.files[0])
		img.src = URL.createObjectURL(input.files[0]); 
}
	</script>	
@endsection

	

	