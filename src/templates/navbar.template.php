	<!-- NAVBAR -->
    <nav class="navbar navbar-dark navbar-expand-lg bg-dark">
		  <div class="container-fluid">
		    
		    <a class="navbar-brand" href="#">
		      <img src="../img/logoProducto.png" alt="Bootstrap" width="40" height="40">
		    </a>

		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button>
		    <div class="collapse navbar-collapse" id="navbarSupportedContent">
		      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
		         
		        <li class="nav-item">
		          <a class="nav-link" href="#">Link</a>
		        </li>
		        <li class="nav-item dropdown">
		          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
		            Dropdown
		          </a>
		          <ul class="dropdown-menu">
		            <li><a class="dropdown-item" href="#">Action</a></li>
		            <li><a class="dropdown-item" href="#">Another action</a></li>
		            <li><hr class="dropdown-divider"></li>
		          </ul>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link disabled">Disabled</a>
		        </li>
				
		        <li class="nav-item">
		          <a type="button" class="btn btn-primary nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal" >Login</a>
		        </li>

		      </ul> 
		    </div>
		  </div>
		</nav>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
		<form action="" method="POST">
			<div class="form-outline mb-4">
				<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="dark" class="bi bi-envelope " viewBox="0 0 16 16">
					<path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
				</svg>
				<label class="form-label">Correo</label>
				<input  
				type="text" name="email" class="form-control" required
				placeholder="Correo "  />
			</div>

			<div class="form-outline mb-4">
				<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="dark" class="bi bi-key" viewBox="0 0 16 16">
				<path d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8zm4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5z"/>
				<path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
			</svg>  
				<label  class="form-label">Contraseña</label> 
				<input type="password" name="password" class="form-control" required/>
			</div>

			<div class=" pt-1 mb-5 pb-1">
				<div class="mt-2 d-flex justify-content-center">
					<button id="sub"type="submit" value="Iniciar" 
					style="background-color:#008D36"class="btn text-white btn-lg mb-4">
						Iniciar Sesion
					</button>
				</div>
				<div class="mt-2 text-center">
					<a class="text-dark"href="#">Registrate</a>
				</div>
			</div>
		</form>
      </div>
    </div>
  </div>
</div>