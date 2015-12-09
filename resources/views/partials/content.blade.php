<section>
	<div class="container-fluid banner">
		<p class="icon-a-1 text-center"></p>
	</div>

	<div class="container">
		<h1 class="intro text-center lora">ESTO ES UNA PEQUEÑA PARTE DE NUESTRA HISTORIA</h1>
		<div class="col-sm-4 block-photo"><img src="images/photo.jpg" alt=""></div>
		<div class="col-sm-4 block-photo"><img src="images/photo.jpg" alt=""></div>
		<div class="col-sm-4 block-photo"><img src="images/photo.jpg" alt=""></div>
		<div class="col-sm-4 block-photo"><img src="images/photo.jpg" alt=""></div>
		<div class="col-sm-4 block-photo"><img src="images/photo.jpg" alt=""></div>
		<div class="col-sm-4 block-photo"><img src="images/photo.jpg" alt=""></div>
		<div class="col-sm-4 block-photo hidden-xs"><img src="images/photo.jpg" alt=""></div>
		<div class="col-sm-4 block-photo hidden-xs"><img src="images/photo.jpg" alt=""></div>
		<div class="col-sm-4 block-photo hidden-xs"><img src="images/photo.jpg" alt=""></div>

		<div class="col-xs-10 col-sm-6 ig-block col-xs-offset-1 col-sm-offset-3">
			<figure class="col-xs-3"><img src="images/instagram_icon.svg" alt="Instagram #checoyflaca"></figure>
			<p class="col-xs-9">Etiqueta tus fotos: <br><span class="hashtag cafe lora">#ChecoYFlaca</span></p>
		</div>
	</div>

	<div class="container-fluid venue-date">
		
		<h2 class="title cafe lora text-center">EL EVENTO</h2>

		<div class="col-sm-4 text-center">
			<span class="icon-d-2 cafe"></span>
			<p class="title lora">Cuándo</p>
			<hr class="cafe">
			<p class="text txt-center">22 de Enero de 2016</p>
		</div>
		
		<div class="col-sm-4 text-center">
			<span class="icon-c-2 cafe"></span>
			<p class="title lora">Dónde</p>
			<hr class="cafe">
			<p class="text txt-center">
				Nombre de lugar <br>
				Dirección del lugar <br>
				Ciudad, Estado.
			</p>
			<a href="#" class="mapa" target="_blank" title="Ver mapa">VER MAPA</a>
		</div>
		
		<div class="col-sm-4 text-center">
			<span class="icon-b-1 cafe"></span>
			<p class="title lora">Hora</p>
			<hr class="cafe">
			<p class="text txt-center">17:00 Hrs.</p>
		</div>

	</div>

	<div class="container">
		<p class="wish text-center lora cafe">¡Nos encantaría que vinieras a celebrar con nosotros!</p>
		<p class="text-center">El siguiente formulario es solamente para confirmar tu asistencia</p>
		
		{!! Form::open(['url'=>'sendmail', 'id'=>'contactForm']) !!}

			<div class="form-group">
				{!! Form::text('nombre', null, ['class'=>'form-control', 'placeholder'=>'*Nombre', 'data-validate'=>'required']) !!}
			</div>
			<div class="form-group">
				{!! Form::text('correo', null, ['class'=>'form-control', 'placeholder'=>'Correo', 'data-validate'=>'required|email']) !!}
			</div>
			<div class="form-group">
				{!! Form::radio('confirma', null, true, []) !!} ¡Sí, confirmo mi asistencia!
			</div>
			<div class="form-group">
				{!! Form::radio('confirma', null, null, []) !!} Lo siento, no podré asistir :(
			</div>
			<div class="form-group">
				{!! Form::textarea('mensaje', null, ['class'=>'form-control', 'placeholder'=>'Déjanos un mensaje de felicitación o comentario']) !!}
			</div>
			<div class="form-group">
				{!! Form::submit('Enviar', ['class'=>'btn btn-primary']) !!}
			</div>
			
		{!! Form::close() !!}


	</div>
</section>









