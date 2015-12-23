<section id="inicio">
	<div class="container-fluid banner">
		<p class="icon-a-1 text-center"></p>
	</div>

	<div class="container" id="galeria">
		<h1 class="intro text-center lora">ESTO ES UNA PEQUEÑA PARTE DE NUESTRA HISTORIA</h1>
		<div class="col-sm-4 block-photo"><img src="images/01.jpg" alt="Foto Boda Checo 01"></div>
		<div class="col-sm-4 block-photo"><img src="images/02.jpg" alt="Foto Boda Checo 02"></div>
		<div class="col-sm-4 block-photo"><img src="images/03.jpg" alt="Foto Boda Checo 03"></div>

		<div class="col-xs-10 col-sm-6 ig-block col-xs-offset-1 col-sm-offset-3">
			<figure class="col-xs-3"><img src="images/instagram_icon.svg" alt="Instagram #checoyflaca"></figure>
			<p class="col-xs-9">Etiqueta tus fotos: <br><span class="hashtag cafe lora">#ChecoYFlaca</span></p>
		</div>
	</div>

	<div class="container-fluid venue-date" id="evento">
		
		<h2 class="title cafe lora text-center">EL EVENTO</h2>

		<div class="col-sm-4 text-center">
			<span class="icon-d-2 cafe"></span>
			<p class="title lora">Cuándo</p>
			<hr class="cafe">
			<p class="text txt-center">22 DE ENERO 2016</p>
		</div>
		
		<div class="col-sm-4 text-center">
			<span class="icon-c-2 cafe"></span>
			<p class="title lora">Dónde</p>
			<hr class="cafe">
			<p class="text txt-center">
				CEREMONIA: PARROQUIA SAN JAVIER DE LAS COLINAS<br>Dirección: Paseo Loma Ancha,<br> Colinas de San Javier, 44660 <br><br>
				RECEPCIÓN: CASA CLEMENTINA
			</p>
			<a href="https://goo.gl/maps/7vZFjVwX5BR2" class="mapa" target="_blank" title="Ver mapa">VER MAPA</a>
		</div>
		
		<div class="col-sm-4 text-center">
			<span class="icon-b-1 cafe"></span>
			<p class="title lora">Hora</p>
			<hr class="cafe">
			<p class="text txt-center">CEREMONIA: 7PM <br>RECEPCIÓN: 8PM</p>
		</div>

	</div>

	<div class="container-fluid text-center">
		<h2 class="title cafe lora text-center">MESA DE REGALOS</h2>

		<div class="col-sm-4 col-sm-offset-2">
			<h3>Palacio de Hierro</h3>
			<a class="btn btn-primary" target="_blank" href="http://www.elpalaciodehierro.com/celebra/view/index/id/296082/#results" title="Ver mesa de regalos de el Palacio de Hierro">Ver mesa</a>
		</div>
		<div class="col-sm-4">
			<h3>From Me (código 030)</h3>
			<a class="btn btn-primary" href="https://fromme.mx/novios/anapaolaysergio" target="_blank" title="Ver mesa de regalos de el Palacio de Hierro">Ver mesa</a>
		</div>

		<div class="col-sm-4 col-sm-offset-2">
			<h3>Liverpool</h3>
			<a class="btn btn-primary" target="_blank" href="http://www.liverpool.com.mx/tienda/giftregistry/giftRegistryDetail.jsp?eventNo=1&eventDNo=37214445&_requestid=848515#" title="Ver mesa de regalos de el Palacio de Hierro">Ver mesa</a>
		</div>
		<div class="col-sm-4">
			<img src="images/singular.png" alt="singular" width="55">
			<a class="btn btn-primary" href="http://singulartaller.com/" target="_blank" title="Ver mesa singulartaller.com">Ver sitio</a>
		</div>

	</div>


	<div class="container" id="rsvp">
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
				{!! Form::radio('confirma', 'SI', true, []) !!} ¡Sí, confirmo mi asistencia!
			</div>
			<div class="form-group">
				{!! Form::radio('confirma', 'NO', null, []) !!} Lo siento, no podré asistir :(
			</div>
			<div class="form-group">
				{!! Form::textarea('mensaje', null, ['class'=>'form-control', 'placeholder'=>'Déjanos un mensaje de felicitación o comentario']) !!}
			</div>
			<div class="form-group">
				{!! Form::submit('Enviar', ['class'=>'btn btn-primary']) !!}
			</div>

			<div class="sent_mail_alert lora">¡Gracias!</div>
			
		{!! Form::close() !!}


	</div>
</section>