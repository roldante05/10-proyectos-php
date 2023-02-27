<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link rel="stylesheet" href="src/resources/main.css">
	<title>Jupiter</title>
	<style>
		body {
			margin: 0;
			padding: 0;
			background-color: #191919;
			overflow: hidden;
      color: wheat;
      font-weight: 600;
		}

		.pointer {
			position: absolute;
			border-radius: 50%;
			animation: move 2s linear infinite;
			z-index: -1;
			opacity: 0.7;
		}

		.pointer-1 {
			top:20%;
			left: 10%;
			width: 20px;
			height: 20px;
			background-color: #C6F1D6;
			animation-delay: 0s;
		}

		.pointer-2 {
			top: 60%;
			left: 40%;
			width: 15px;
			height: 15px;
			background-color: #F8B195;
			animation-delay: 0.5s;
		}

		.pointer-3 {
			top: 30%;
			left: 70%;
			width: 30px;
			height: 30px;
			background-color: #9BCC93;
			animation-delay: 1s;
		}
		.pointer-4 {
			top: 40%;
			left: 5%;
			width: 30px;
			height: 30px;
			background-color: #9BCC93;
			animation-delay: 1.5s;
		}
		.pointer-5 {
			top: 90%;
			left: 50%;
			width: 30px;
			height: 30px;
			background-color: #9BCC93;
			animation-delay: 2s;
		}

		@keyframes move {
			from {
				transform: translate(0, 0) rotate(0);
			}
			to {
				transform: translate(50px, 50px) rotate(360deg);
			}
		}
	</style>
</head>
<body>
  <div class="pointer pointer-1"></div>
	<div class="pointer pointer-2"></div>
	<div class="pointer pointer-3"></div>
	<div class="pointer pointer-3"></div>
	<div class="pointer pointer-4"></div>
	<div class="pointer pointer-5"></div>
  <div class="container-fluid">
    <div class="row">
      <div class="abs-center">
        <p>Bienvenido a Jupiter</p>
        <p>Inicia Sesión en el sistema para continuar</p>
        <div>
          <a href="?form=ingresar" class="btn btn-success">Iniciar Sesión</a>
          <a href="?form=registrar" class="btn btn-success" >Registrarme</a>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
