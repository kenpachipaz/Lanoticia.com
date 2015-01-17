function mostrarMsg(msg){
	switch(msg){
		case 0:
			document.getElementById('errorLogin').style.display = 'block';
			document.getElementById('errorPassword').style.display = 'none';
		break;
		case 1:			
			document.getElementById('errorLogin').style.display = 'none';
			document.getElementById('errorPassword').style.display = 'block';
		break;
		case 2:
			document.getElementById('errorTitulo').style.display = 'block';

			document.getElementById('errorSeccion').style.display = 'none';
			document.getElementById('errorImg').style.display = 'none';
			document.getElementById('errorNoticia').style.display = 'none';
		break;
		case 3:			
			document.getElementById('errorSeccion').style.display = 'block';

			document.getElementById('errorTitulo').style.display = 'none';
			document.getElementById('errorImg').style.display = 'none';
			document.getElementById('errorNoticia').style.display = 'none';
		break;
		case 4:
			document.getElementById('errorImg').style.display = 'block';

			document.getElementById('errorSeccion').style.display = 'none';
			document.getElementById('errorTitulo').style.display = 'none';
			document.getElementById('errorNoticia').style.display = 'none';
		break;
		case 5:			
			document.getElementById('errorNoticia').style.display = 'block';

			document.getElementById('errorSeccion').style.display = 'none';
			document.getElementById('errorImg').style.display = 'none';
			document.getElementById('errorTitulo').style.display = 'none';
		break;
	}
}
function validar(formulario){
	if(formulario.login.value == ""){
		formulario.login.focus();
		mostrarMsg(0);
		return false;
	}
	if(formulario.password.value == ""){
		formulario.password.focus();
		mostrarMsg(1);
		return false;
	}
	return true;
}
function validarFormNot(formulario){
	if(formulario.idNoticia.value == ""){
		formulario.idNoticia.focus();
		mostrarMsg(6);
		return false;
	}
	if(formulario.titulo.value == ""){
		formulario.titulo.focus();
		mostrarMsg(2);
		return false;
	}
	if(formulario.seccion.value == "nada"){
		formulario.seccion.focus();
		mostrarMsg(3);
		return false;
	}
	if(formulario.img.value == ""){
		formulario.img.focus();
		mostrarMsg(4);
		return false;
	}
	if(formulario.noticia.value == ""){
		formulario.noticia.focus();
		mostrarMsg(5);
		return false;
	}
	return true;
}

/*Validación página modificar.php*/
function mostrar(formulario){
   var marcado=formulario.opcion.selectedIndex;
  switch(marcado){
  	 case 0:
    	document.getElementById('divTitulo').style.display='none';    
    	document.getElementById('divNoticia').style.display='none';
    	document.getElementById('divImg').style.display='none';
    	document.getElementById('divSeccion').style.display='none';
    break;
    case 1:
    	document.getElementById('divTitulo').style.display='block';
    
    	document.getElementById('divNoticia').style.display='none';
    	document.getElementById('divImg').style.display='none';
    	document.getElementById('divSeccion').style.display='none';
    break;
    case 2:
    	document.getElementById('divNoticia').style.display='block';
    
    	document.getElementById('divTitulo').style.display='none';
    	document.getElementById('divImg').style.display='none';
    	document.getElementById('divSeccion').style.display='none';
    break;
    case 3:
    	document.getElementById('divImg').style.display='block';
    
    	document.getElementById('divNoticia').style.display='none';
    	document.getElementById('divTitulo').style.display='none';
    	document.getElementById('divSeccion').style.display='none';
    break;
    case 4:
    	document.getElementById('divSeccion').style.display='block';
    
    	document.getElementById('divNoticia').style.display='none';
    	document.getElementById('divImg').style.display='none';
    	document.getElementById('divTitulo').style.display='none';
    break;
    
    
  }
 }
 function validarCampo(formulario){
	if(formulario.seccion.value == "nada"){
		formulario.seccion.focus();
		mostrarMsg(3);
		return false;
	}
	return true;
}