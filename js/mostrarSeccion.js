function mostrarSeccion(seccion){
	switch(seccion){
		case 0:
			document.getElementById('bienvenida').style.display= 'block';

			document.getElementById('consulta').style.display= 'none';
			document.getElementById('alta').style.display= 'none';
			document.getElementById('eliminar').style.display= 'none';
			document.getElementById('modificar').style.display= 'none';
		break;
		case 1:
			document.getElementById('consulta').style.display= 'block';

			document.getElementById('bienvenida').style.display= 'none';
			document.getElementById('alta').style.display= 'none';
			document.getElementById('eliminar').style.display= 'none';
			document.getElementById('modificar').style.display= 'none';
		break;
		case 2:
			document.getElementById('alta').style.display= 'block';

			document.getElementById('consulta').style.display= 'none';
			document.getElementById('bienvenida').style.display= 'none';
			document.getElementById('eliminar').style.display= 'none';
			document.getElementById('modificar').style.display= 'none';
		break;
		case 3:
			document.getElementById('eliminar').style.display= 'block';

			document.getElementById('consulta').style.display= 'none';
			document.getElementById('alta').style.display= 'none';
			document.getElementById('bienvenida').style.display= 'none';
			document.getElementById('modificar').style.display= 'none';
		break;
		case 4:
			document.getElementById('modificar').style.display= 'block';

			document.getElementById('consulta').style.display= 'none';
			document.getElementById('alta').style.display= 'none';
			document.getElementById('eliminar').style.display= 'none';
			document.getElementById('bienvenida').style.display= 'none';
		break;
		case 5:
			document.getElementById('noticias').style.display='none';
			document.getElementById('principal').style.display='block'
		break;

	}
}