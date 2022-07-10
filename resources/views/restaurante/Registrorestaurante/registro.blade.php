<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://unpkg.com/tailwindcss@1.2.0/dist/tailwind.min.css" rel="stylesheet">
	{{-- <link rel="stylesheet" href="style.css"> --}}
    <link href="{{ asset('css/registrorestaurantes_estilos.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css">


</head>
<body class="h-screen overflow-scroll flex items-center justify-center" style="background: #dfdfdf;">
    <!-- This is an example component -->
<div class="h-screen">
 


	<div x-data="app()" x-cloak>
		<div class="max-w-3xl mx-auto px-4 py-10">

			<div x-show.transition="step === 'complete'">
				<div class="bg-white rounded-lg p-10 flex items-center shadow justify-between">
					<div>
						<svg class="mb-4 h-20 w-20 text-green-500 mx-auto" viewBox="0 0 20 20" fill="currentColor">  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>

						<h2 class="text-2xl mb-4 text-gray-800 text-center font-bold">Registration Success</h2>

						<div class="text-gray-600 mb-8">
							Thank you. We have sent you an email to demo@demo.test. Please click the link in the message to activate your account.
						</div>

						<button
							@click="step = 1"
							class="w-40 block mx-auto focus:outline-none py-2 px-5 rounded-lg shadow-sm text-center text-gray-600 bg-white hover:bg-gray-100 font-medium border" 
						>Regresar al inicio</button>
					</div>
				</div>
			</div>

			<form action=" {{ Route('restaurantes.store') }} " method="POST">

				@csrf

			<div x-show.transition="step != 'complete'">	
				<!-- Top Navigation -->
				<div class="border-b-2 py-4">
					<div class="uppercase tracking-wide text-xs font-bold text-gray-500 mb-1 leading-tight" x-text="`Paso: ${step} de 6`"></div>
					<div class="flex flex-col md:flex-row md:items-center md:justify-between">
						<div class="flex-1">
							<div x-show="step === 1">
								<div class="text-lg font-bold text-orange-700 leading-tight">Información Básica</div>
							</div>
							
							<div x-show="step === 2">
								<div class="text-lg font-bold text-orange-700 leading-tight">Ubicación</div>
							</div>

							<div x-show="step === 3">
								<div class="text-lg font-bold text-orange-700 leading-tight">Horarios</div>
							</div>

							<div x-show="step === 4">
								<div class="text-lg font-bold text-orange-700 leading-tight">Datos Legales</div>
							</div>

							<div x-show="step === 5">
								<div class="text-lg font-bold text-orange-700 leading-tight">Redes sociales</div>
							</div>

							<div x-show="step === 6">
								<div class="text-lg font-bold text-orange-700 leading-tight">Información Adicional</div>
							</div>
						</div>

						<div class="flex items-center md:w-64">
							<div class="w-full bg-white rounded-full mr-2">
								<div class="rounded-full bg-green-500 text-xs leading-none h-2 text-center text-white" :style="'width: '+ parseInt(step / 6 * 100) +'%'"></div>
							</div>
							<div class="text-xs w-10 text-gray-600" x-text="parseInt(step / 6 * 100) +'%'"></div>
						</div>
					</div>
				</div>
				<!-- /Top Navigation -->



				<!-- Step Content -->
				<div class="py-10">	


					<div x-show.transition.in="step === 1">
						<div class="mb-5 text-center">
							<div class="mx-auto w-32 h-32 mb-2 border rounded-full relative bg-gray-100 mb-4 shadow-inset">
								<img id="image" class="object-cover w-full h-32 rounded-full" :src="image" />
							</div>
							
							<label 
								for="fileInput"
								type="button"
								class="cursor-pointer inine-flex justify-between items-center focus:outline-none border py-2 px-4 rounded-lg shadow-sm text-left text-gray-600 bg-white hover:bg-gray-100 font-medium"
							>
								<svg xmlns="http://www.w3.org/2000/svg" class="inline-flex flex-shrink-0 w-6 h-6 -mt-1 mr-1" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
									<rect x="0" y="0" width="24" height="24" stroke="none"></rect>
									<path d="M5 7h1a2 2 0 0 0 2 -2a1 1 0 0 1 1 -1h6a1 1 0 0 1 1 1a2 2 0 0 0 2 2h1a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-9a2 2 0 0 1 2 -2" />
									<circle cx="12" cy="13" r="3" />
								</svg>						
								Subir Foto de Perfil
							</label>

							<div class="mx-auto w-48 text-gray-500 text-xs text-center mt-1">Clic para escoger una imagen</div>

							<input name="photo" id="fileInput" accept="image/*" class="hidden" type="file" @change="let file = document.getElementById('fileInput').files[0]; 
								var reader = new FileReader();
								reader.onload = (e) => image = e.target.result;
								reader.readAsDataURL(file);">
						</div>
{{-- INICIO REGISTRO RESTAURANTE --}}
						<div class="mb-5">
							<label for="nombre_restaurante" class="font-bold mb-1 text-orange-700 block">Nombre del Restaurante</label>
							<input type="text"
								class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
								placeholder="Nombre de tu restaurante..." name="nombre_restauarante">
						</div>

						<div class="mb-5">
							<label for="descripcion" class="font-bold mb-1 text-orange-700 block">Descripción</label>
							<input type="text"
								class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
								placeholder="Una breve descripción de tu restaurante..." name="descripcion">
						</div>

						<div class="mb-5">
							<label for="telefono" class="font-bold mb-1 text-orange-700 block">Teléfono</label>
							<input type="tel"
								class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
								placeholder="Numero de telefono..." name="telefono">
						</div>

						<div class="mb-5">
							<label for="pagina_web" class="font-bold mb-1 text-orange-700 block">Tú Página Web</label>
							<input type="url"
								class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
								placeholder="Aqui tu enlace a tu pagina web..." name="pagina_web">
						</div>
					</div>
{{-- FIN REGISTRO RESTAURANTE --}}					
{{-- INICIO REGISTRO UBICACION RESTAURANTE --}}

					<div x-show.transition.in="step === 2">
						<div class="mb-5">
							<div class="text-gray-600 mt-2 mb-4">
								Ahora queremos saber tu ubicación para que tus clientes conozcan donde estás.
							</div>
						</div>

						<div class="mb-5">
							<label for="nombre_sede" class="font-bold mb-1 text-orange-700 block">Nombre de sede (opcional)</label>
							<input type="text"
								class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
								placeholder="Esribe el nombre de tu sede" name="nombre_sede">
						</div>

						<div class="mb-5">
							<label for="departamento" class="font-bold mb-1 text-orange-700 block">Departamento</label>
							<select name="departamento" class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium">
								<option selected>Seleccionar...</option>
								<option value="Valle del Cauca">Valle del Cauca</option>
							  </select>
						</div>

						<div class="mb-5">
							<label for="municipio" class="font-bold mb-1 text-orange-700 block">Municipio</label>
							<select name="municipio" class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium">
								<option selected>Seleccionar...</option>
								<option value="Valle del Cauca">Cali</option>
								<option value="Palmira">Palmira</option>
								<option value="Yumbo">Yumbo</option>
								<option value="Candelaria">Candelaria</option>
								<option value="Jamundí">Jamundí</option>
							  </select>
  						</div>

						<div class="mb-5">
							<label for="codigo_postal" class="font-bold mb-1 text-orange-700 block">Codigo Postal</label>
							<input type="text"
								class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
								placeholder="Codigo postal de tu ubicación..." name="codigo_postal">
								<a class="mt-5 text-gray-600">Puedes buscar tu codigo postal dando clic
									<a href="https://visor.codigopostal.gov.co/472/visor/" class="text-blue-500">Aqui</a>.
								</a>
						</div>


						<div class="mb-5">
							<label for="barrio" class="font-bold mb-1 text-orange-700 block">Barrio</label>
							<input type="text"
								class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
								placeholder="En que barrio estas..." name="barrio">
						</div>

						<div class="mb-5">
							<label for="direccion" class="font-bold mb-1 text-orange-700 block">Dirección</label>
							<input type="text"
								class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
								placeholder="Dinos tu dirrección..." name="direccion">
						</div>

						<div class="mb-5">
							<label for="anexo" class="font-bold mb-1 text-orange-700 block">Anexo</label>
							<input type="text"
								class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
								placeholder="Agrega algo a tu dirección..." name="anexo">
						</div>
					</div>
{{-- FIN REGISTRO UBICACION RESTAURANTE --}}
{{-- INICIO REGISTRO HORARIO RESTAURANTE --}}
					<div x-show.transition.in="step === 3">
						<div class="mb-5">
							<div class="text-gray-600 mt-2 mb-4">
								Tus clientes quieren saber tus horarios de atención.
							</div>
						</div>

						<div class="mb-5">

							<label for="horario" class="font-bold mb-1 text-orange-700 block" >Lunes a Viernes</label>
							<input type="text" name="dia_semana_LV" value="Lunes a Viernes" min="00:00" max="23:00" step="3600" 
							class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"> 
 							<a class="mt-5 text-gray-600">Hora de apertura</a>
							<input type="time" name="hora_apertura_LV" min="00:00" max="23:00" step="3600" 
							class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"> 

							<a class="mt-5 text-gray-600">Hora de cierre</a>
							<input type="time" name="hora_cierre_LV" min="00:00" max="23:00" step="3600" 
							class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"> 
 						</div>

						<div class="mb-5">
							<label for="horario" class="font-bold mb-1 text-orange-700 block">Sabados</label>
							<input type="text" name="dia_semana_S" value="Sabados" min="00:00" max="23:00" step="3600" 
							class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"> 
							<a class="mt-5 text-gray-600">Hora de apertura</a>
							<input type="time" name="hora_apertura_S" min="00:00" max="23:00" step="3600" 
							class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"> 

							<a class="mt-5 text-gray-600">Hora de cierre</a>
							<input type="time" name="hora_cierre_S" min="00:00" max="23:00" step="3600" 
							class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"> 						
						
						</div>


						<div class="mb-5">
							<label for="horario" class="font-bold mb-1 text-orange-700 block">Domingos y Festivos</label>
							<input type="text" name="dia_semana_DF" value="Domingos y Festivos" min="00:00" max="23:00" step="3600" 
							class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"> 						
							<a class="mt-5 text-gray-600">Hora de apertura</a>
							<input type="time" name="hora_apertura_DF" min="00:00" max="23:00" step="3600" 
							class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"> 						 
							<a class="mt-5 text-gray-600">Hora de cierre</a>
							<input type="time" name="hora_cierre_DF" min="00:00" max="23:00" step="3600" 
							class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"> 
 						</div>

					</div>
{{-- FIN REGISTRO HORARIO RESTAURANTE --}}
{{-- INICIO REGISTRO INFORMACION LEGAL RESTAURANTE --}}
					<div x-show.transition.in="step === 4">
						<div class="mb-5">
							<div class="text-gray-600 mt-2 mb-4">
								Queremos brindarte confianza a ti y a tus clientes, es por eso que necesitamos conocerte.
							</div>
						</div>

						<div class="mb-5">
							<label for="inflegals" class="font-bold mb-1 text-orange-700 block">Información legal del restaurante</label>
						</div>


						<div class="mb-5">
							<select name="regimen_tributario" class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium">
								<option selected>Regímen tributario</option>
								<option value="Régimen común">Régimen común</option>
								<option value="Régimen simplificado">Régimen simplificado</option>
								<option value="Gran contribuyente">Gran contribuyente</option>
								<option value="Candelaria">Autorretenedor</option>
							</select>
							  <a class="mt-5 text-gray-600">Es la categoría jurídica que pertenece tu restaurante</a>
 						</div>

						<div class="mb-5">
							<select name="tipo_persona" class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium">
								<option selected>Tipo de persona</option>
								<option value="Natural">Natural</option>
								<option value="jurídica">jurídica</option>
							</select>
						</div>

						<div class="mb-5">
							<select name="tipo_documento" class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium">
								<option selected>ID</option>
								<option value="CC">CC</option>
								<option value="NIT">NIT</option>
							</select>
							<input type="text"
							  class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
							  placeholder="Numero de ID..." name="numero_documento">
						</div>

						<div class="mb-5">
							<input type="text"
								class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
								placeholder="Razón social ó nombre legal del restaurante..." name="razon_social">
						</div>				
{{-- FIN REGISTRO INFORMACION LEGAL RESTAURANTE --}}
{{-- INICIO REGISTRO REPRESENTANTE LEGAL RESTAURANTE --}}

						<div class="mb-5">
							<label for="replegals" class="font-bold mb-1 text-orange-700 block">Información del representante legal</label>
						</div>


						<div class="mb-5">
							<input type="text"
								class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
								placeholder="Nombre del representante legal..." name="">
						</div>

						<div class="mb-5">
							<input type="text"
								class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
								placeholder="Apellido del representante legal...">
						</div>

						<div class="mb-5">
							<select name="select" class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium">
								<option selected>ID</option>
								<option value="CC">C.C</option>
								<option value="NIT">NIT</option>
								<option value="CE">C.E</option>
							  </select>
							<input type="text"
							  class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
							  placeholder="Numero de ID...">
						</div>
					</div>
{{-- FIN REGISTRO REPRESENTANTE LEGAL RESTAURANTE --}}
{{-- INICIO REGISTRO REDES SOCIALES  RESTAURANTE --}}
					<div x-show.transition.in="step === 5">
						<div class="mb-5">
							<div class="text-gray-600 mt-2 mb-4">
								Agrega tus redes sociales y haz
								que tus clientes te mejor.
							</div>
						</div>

						
						<div class="form-row clonar">
							<div class="form-group col-md-12">
								<div class="mb-5">
								<br>
								<label for="firstname" class="font-bold mb-1 text-orange-700 block">Red Social</label>
									<select name="red_social" class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium">
										<option selected>Seleccionar...</option>
										<option value="Instagram">Instagram</option>
										<option value="WhatsApp">WhatsApp</option>
										<option value="Facebook">Facebook</option>
										<option value="Tik Tok">Tik Tok</option>
										<option value="Twiter">Twiter</option>
									</select>
						        </div>

								<input type="text"
								class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
								name="usuario_red_social"
								placeholder="Cual es tu nombre de usuario...">
						   
								<input type="text"
								class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
								name="enlace_red_social"
								placeholder="Enlace del perfil...">
					
								<span class="text-gray-600 badge badge-pill badge-danger puntero ocultar">Eliminar</span>
								
							</div>
						</div>


						<!-- Input agregado -->
						<div id="contenedor"></div>
						

						<div class="form-row">
							<div class="col-md-12 text-center">
								<br>
								<button class="text-gray-600 btn btn-primary" id="agregar">Agregar campo +</button>
								<br>
							</div>
						</div>		
					</div>
{{-- FIN REGISTRO REDES SOCIALES  RESTAURANTE --}}
{{-- INICIO REGISTRO TIPO DE SERVICIO --}}
					<div x-show.transition.in="step === 6">
						<div class="mb-5">
							<div class="text-gray-600 mt-2 mb-4">
								Ya casi terminamos! Solo falta un paso mas.
							</div>
						</div>


						<label for="nombre_sede" class="font-bold mb-1 text-orange-700 block">Servicios Ofrecidos</label>
						<div class="text-gray-600 mb-5">
							<input type="checkbox"
								{{-- id="servicio"  --}}
								name="servicio" 
								value="Bike">
							<label for="servicio"> I have a bike</label><br>

							<input type="checkbox"
								{{-- id="servicio"  --}}
								name="servicio" 
								value="Bike">
							<label for="servicio"> I have a bike</label><br>

							<input type="checkbox"
								{{-- id="servicio"  --}}
								name="servicio" 
								value="Bike">
							<label for="servicio"> I have a bike</label><br>
						</div>
{{-- FIN REGISTRO TIPO DE SERVICIO --}}
{{-- INICIO REGISTRO TIPO DE OCACION --}}
						<br>
						<label for="nombre_sede" class="font-bold mb-1 text-orange-700 block">Tipo de ocaciones</label>
						<div class="text-gray-600 mb-5">
							<input type="checkbox"
								{{-- id="tipo_ocasion"  --}}
								name="tipo_ocasion" 
								value="Bike">
								<label for="servicio"> I have a bike</label><br>

							<input type="checkbox"
								{{-- id="tipo_ocasion"  --}}
								name="tipo_ocasion" 
								value="Bike">
								<label for="servicio"> I have a bike</label><br>

							<input type="checkbox"
								{{-- id="tipo_ocasion"  --}}
								name="tipo_ocasion" 
								value="Bike">
								<label for="servicio"> I have a bike</label><br>
						</div>
					</div>
				</div>
			
				<!-- / Step Content -->
			</div>
		</div>
{{-- FIN REGISTRO TIPO DE OCACION --}}	
{{-- INICIO BOTONES SEG - ANT - CONT  --}}
		<!-- Bottom Navigation -->	
		<div class="fixed bottom-0 left-0 right-0 py-5 bg-white shadow-md" x-show="step != 'complete'">
			<div class="max-w-3xl mx-auto px-4">
				<div class="flex justify-between">
					<div class="w-1/2">
						<a
							x-show="step > 1"
							@click="step--"
							class="w-32 focus:outline-none py-2 px-5 rounded-lg shadow-sm text-center text-gray-600 bg-white hover:bg-gray-100 font-medium border" 
						>Atras</a>
					</div>

					<div class="w-1/2 text-right">
						<a
							x-show="step < 6"
							@click="step++"
							class="w-32 focus:outline-none border border-transparent py-2 px-5 rounded-lg shadow-sm text-center text-white bg-blue-500 hover:bg-blue-600 font-medium" 
						>Continuar</a>

						<button 
							@click="step = 'complete'"
							x-show="step === 6"
							class="w-32 focus:outline-none border border-transparent py-2 px-5 rounded-lg shadow-sm text-center text-white bg-blue-500 hover:bg-blue-600 font-medium" 
						>Completar</button>
					</div>
				</div>
			</div>
		</div>

		</form>

		<!-- / Bottom Navigation https://placehold.co/300x300/e2e8f0/cccccc -->	
	</div>
{{-- FIN BOTONES SEG - ANT - CONT  --}}
	{{-- <script src="scripts/multistep.js"></script> --}}
    <script src="{{ asset('js/registrorestaurante_scripts.js') }}" defer></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>

</body>
</html>
