// JavaScript Document

function agregar(elemento){
	validado=true;
	/*nomb_host*/
	if(document.getElementById("nomb_host").value==""){
		validado = false;
		document.getElementById("nomb_host").style.border='red dashed 2px';
	}
	/*tipo_equipo*/
	if(document.getElementById("tipo_equipo").value=="Seleccione..."){
		validado = false;
		document.getElementById("tipo_equipo").style.border='red dashed 2px';
	}
	/*tipo_conexion*/
	if(document.getElementById("tipo_conexion").value=="Seleccione..."){
		validado = false;
		document.getElementById("tipo_conexion").style.border='red dashed 2px';
	}
	/*gerencia*/
	if(document.getElementById("gerencia").value=="Seleccione..."){
		validado = false;
		document.getElementById("gerencia").style.border='red dashed 2px';
	}
	/*nomb_usuario*/
	if(document.getElementById("nomb_usuario").value=="Seleccione..."){
		validado = false;
		document.getElementById("nomb_usuario").style.border='red dashed 2px';
	}
	/*nomb_usuario_otro*/
	if((document.getElementById("nomb_usuario_otro").value=="" || document.getElementById("nomb_usuario_otro").value=="Indique...") && document.getElementById("nomb_usuario").value=="Otro..."){
		validado = false;
		document.getElementById("nomb_usuario_otro").style.border='red dashed 2px';
	}
	/*host_disponible*/
	if(document.getElementById("host_disponible").value!=""){
		validado = false;
	}
	return validado;	
}

function buscar(elemento){
	validado=true;
	/*nomb_host*/
	if(document.getElementById("campo").value=="Seleccione..."){
		validado = false;
		document.getElementById("campo").style.border='red dashed 2px';
	}
	
	return validado;	
}

function obligatorio(elemento) {
	/*nomb_host*/
	if(elemento.name=="nomb_host"){
		if(elemento.value=="" || elemento.value=="Seleccione..."){
			elemento.style.border='red dashed 2px';
			}else {
			elemento.style.border='#999 solid 2px';
				}
			}
	/*tipo_equipo*/
	if(elemento.name=="tipo_equipo"){
		if(elemento.value=="Seleccione..."){
			elemento.style.border='red dashed 2px';
			}else {
			elemento.style.border='#999 solid 2px';
				}
			}
	/*tipo_conexion*/
	if(elemento.name=="tipo_conexion"){
		if(elemento.value=="Seleccione..."){
			elemento.style.border='red dashed 2px';
			}else {
			elemento.style.border='#999 solid 2px';
				}
			}
	/*gerencia*/
	if(elemento.name=="gerencia"){
		if(elemento.value=="Seleccione..."){
			elemento.style.border='red dashed 2px';
			}else {
			elemento.style.border='#999 solid 2px';
				}
			}
	/*nomb_usuario*/
	if(elemento.name=="nomb_usuario"){
		if(elemento.value=="Seleccione..."){
			elemento.style.border='red dashed 2px';
			}else {
			elemento.style.border='#999 solid 2px';
				}
			}
	/*nomb_usuario_otro*/
	if(elemento.name=="nomb_usuario_otro"){
		if(elemento.value=="Indique..." || elemento.value==""){
			elemento.style.border='red dashed 2px';
			}else {
			elemento.style.border='#999 solid 2px';
				}
			}
	/*fecha_falla*/
	if(elemento.name=="fecha_falla"){
		if(elemento.value=="dd-mm-yyyy"){
			elemento.style.border='red dashed 2px';
			}else {
			elemento.style.border='#999 solid 2px';
				}
			}
	/*descripcion_falla*/
	if(elemento.name=="descripcion_falla"){
		if(elemento.value=="Seleccione..."){
			elemento.style.border='red dashed 2px';
			}else {
			elemento.style.border='#999 solid 2px';
				}
			}
	/*descripcion_falla_otro*/
	if(elemento.name=="descripcion_falla_otro"){
		if(elemento.value=="Indique..." || elemento.value==""){
			elemento.style.border='red dashed 2px';
			}else {
			elemento.style.border='#999 solid 2px';
				}
			}
	/*solucion*/
	if(elemento.name=="solucion"){
		if(elemento.value=="Seleccione..."){
			elemento.style.border='red dashed 2px';
			}else {
			elemento.style.border='#999 solid 2px';
				}
			}
	/*solucion_otro*/
	if(elemento.name=="solucion_otro"){
		if(elemento.value=="Indique..." || elemento.value==""){
			elemento.style.border='red dashed 2px';
			}else {
			elemento.style.border='#999 solid 2px';
				}
			}
	/*usuario*/
	if(elemento.name=="usuario"){
		if(elemento.value==""){
			elemento.style.border='red dashed 2px';
			}else {
			elemento.style.border='#999 solid 2px';
				}
			}
	/*contrasenia*/
	if(elemento.name=="contrasenia"){
		if(elemento.value==""){
			elemento.style.border='red dashed 2px';
			}else {
			elemento.style.border='#999 solid 2px';
				}
			}
	/*equipo0*/
	if(elemento.name=="equipo0"){
		if(elemento.value=="Seleccione..."){
			elemento.style.border='red dashed 2px';
			}else {
			elemento.style.border='#999 solid 2px';
			document.getElementById("accion1").style.border='#999 solid 2px';
			document.getElementById("accion1").value='Seleccione...';
			document.getElementById("modificar").style.border='#999 solid 2px';
			document.getElementById("nuevo").style.border='#999 solid 2px';
				}
			}
	/*nuevo*/
	if(elemento.name=="nuevo"){
		if(elemento.value==""){
			elemento.style.border='red dashed 2px';
			}else {
			elemento.style.border='#999 solid 2px';
			 }
			}
	/*accion1*/
	if(elemento.name=="accion1"){
		if(elemento.value=="Seleccione..."){
			elemento.style.border='red dashed 2px';
			}else {
			elemento.style.border='#999 solid 2px';
			document.getElementById("modificar").style.border='#999 solid 2px';
			 }
			}
	/*modificar*/
	if(elemento.name=="modificar"){
		if(elemento.value==""){
			elemento.style.border='red dashed 2px';
			}else {
			elemento.style.border='#999 solid 2px';
			 }
			}
	/*conexion0*/
	if(elemento.name=="conexion0"){
		if(elemento.value=="Seleccione..."){
			elemento.style.border='red dashed 2px';
			}else {
			elemento.style.border='#999 solid 2px';
			document.getElementById("accion2").style.border='#999 solid 2px';
			document.getElementById("accion2").value='Seleccione...';
			document.getElementById("modificar2").style.border='#999 solid 2px';
			document.getElementById("nuevo2").style.border='#999 solid 2px';
				}
			}
	/*nuevo2*/
	if(elemento.name=="nuevo2"){
		if(elemento.value==""){
			elemento.style.border='red dashed 2px';
			}else {
			elemento.style.border='#999 solid 2px';
			 }
			}
	/*accion2*/
	if(elemento.name=="accion2"){
		if(elemento.value=="Seleccione..."){
			elemento.style.border='red dashed 2px';
			}else {
			elemento.style.border='#999 solid 2px';
			document.getElementById("modificar2").style.border='#999 solid 2px';
			 }
			}
	/*modificar2*/
	if(elemento.name=="modificar2"){
		if(elemento.value==""){
			elemento.style.border='red dashed 2px';
			}else {
			elemento.style.border='#999 solid 2px';
			 }
			}
	
}


function otro(elemento) {
	/*nomb_usuario*/
	if(elemento.name=="nomb_usuario"){
		if(elemento.value=="Otro..."){
			document.getElementById("nomb_usuario_otro").style.visibility='visible';
			document.getElementById("nomb_usuario_otro").style.position='static';
			document.getElementById("nomb_usuario_otro").value='Indique...';
			}else {
			document.getElementById("nomb_usuario_otro").style.visibility='collapse';
			document.getElementById("nomb_usuario_otro").style.position='fixed';
				}
			}
	/*descripcion_falla*/
	if(elemento.name=="descripcion_falla"){
		if(elemento.value=="Otro..."){
			document.getElementById("descripcion_falla_otro").style.visibility='visible';
			document.getElementById("descripcion_falla_otro").style.position='static';
			document.getElementById("descripcion_falla_otro").value='Indique...';
			document.getElementById("descripcion_falla_otro").style.border='#999 solid 2px';
			}else {
			document.getElementById("descripcion_falla_otro").style.visibility='collapse';
			document.getElementById("descripcion_falla_otro").style.position='fixed';
				}
			if(elemento.value=="Seleccione..."){
			elemento.style.border='red dashed 2px';
			}else {
			elemento.style.border='#999 solid 2px';
				}
			
			}
	/*solucion*/
	if(elemento.name=="solucion"){
		if(elemento.value=="Otro..."){
			document.getElementById("solucion_otro").style.visibility='visible';
			document.getElementById("solucion_otro").style.position='static';
			document.getElementById("solucion_otro").value='Indique...';
			document.getElementById("solucion_otro").style.border='#999 solid 2px';
			
			}else {
			document.getElementById("solucion_otro").style.visibility='collapse';
			document.getElementById("solucion_otro").style.position='fixed';
				}
			if(elemento.value=="Seleccione..."){
			elemento.style.border='red dashed 2px';
			}else {
			elemento.style.border='#999 solid 2px';
				}
			}
	/*campo*/
	if(elemento.name=="campo"){
		if(elemento.value=="nomb_host"){
			document.getElementById("b_nomb_host").style.visibility='visible';
			document.getElementById("b_nomb_host").style.position='static';
			}else {
			document.getElementById("b_nomb_host").style.visibility='collapse';
			document.getElementById("b_nomb_host").style.position='fixed';
				}
			}
			
		if(elemento.value=="tipo_equipo"){
			document.getElementById("b_tipo_equipo").style.visibility='visible';
			document.getElementById("b_tipo_equipo").style.position='static';
			}else {
			document.getElementById("b_tipo_equipo").style.visibility='collapse';
			document.getElementById("b_tipo_equipo").style.position='fixed';
				}
		if(elemento.value=="tipo_conexion"){
			document.getElementById("b_tipo_conexion").style.visibility='visible';
			document.getElementById("b_tipo_conexion").style.position='static';
			}else {
			document.getElementById("b_tipo_conexion").style.visibility='collapse';
			document.getElementById("b_tipo_conexion").style.position='fixed';
				}
		if(elemento.value=="nombre_unidad"){
			document.getElementById("b_codunidad").style.visibility='visible';
			document.getElementById("b_codunidad").style.position='static';
			}else {
			document.getElementById("b_codunidad").style.visibility='collapse';
			document.getElementById("b_codunidad").style.position='fixed';
				}
		if(elemento.value=="nomb_usuario"){
			document.getElementById("b_nomb_usuario").style.visibility='visible';
			document.getElementById("b_nomb_usuario").style.position='static';
			}else {
			document.getElementById("b_nomb_usuario").style.visibility='collapse';
			document.getElementById("b_nomb_usuario").style.position='fixed';
				}
			
			
}


function otro_f(elemento) {
	if(elemento.name=="campo"){
		if(elemento.value=="nomb_host"){
			document.getElementById("b_nomb_host").style.visibility='visible';
			document.getElementById("b_nomb_host").style.position='static';
			}else {
			document.getElementById("b_nomb_host").style.visibility='collapse';
			document.getElementById("b_nomb_host").style.position='fixed';
				}
			}
		if(elemento.value=="nomb_usuario"){
			document.getElementById("b_nomb_usuario").style.visibility='visible';
			document.getElementById("b_nomb_usuario").style.position='static';
			}else {
			document.getElementById("b_nomb_usuario").style.visibility='collapse';
			document.getElementById("b_nomb_usuario").style.position='fixed';
				}
			
			
}


function indique(elemento) {
	/*nomb_usuario*/
	if(elemento.name=="nomb_usuario_otro"){
		if(elemento.value=="Indique..."){
			document.getElementById("nomb_usuario_otro").value='';
			}
			}
	/*descripcion_falla_otro*/
	if(elemento.name=="descripcion_falla_otro"){
		if(elemento.value=="Indique..."){
			document.getElementById("descripcion_falla_otro").value='';
			}
			}
	/*solucion_otro*/
	if(elemento.name=="solucion_otro"){
		if(elemento.value=="Indique..."){
			document.getElementById("solucion_otro").value='';
			}
			}
	
}

function agregar_f(elemento){
	validado=true;
	/*nomb_host*/
	if(document.getElementById("nomb_host").value=="Seleccione..."){
		validado = false;
		document.getElementById("nomb_host").style.border='red dashed 2px';
	}
	/*ingreso*/
	if(document.getElementById("ingreso").value=="dd-mm-yyyy"){
		validado = false;
		document.getElementById("ingreso").style.border='red dashed 2px';
	}
	/*descripcion_falla*/
	if(document.getElementById("descripcion_falla").value=="Seleccione..."){
		validado = false;
		document.getElementById("descripcion_falla").style.border='red dashed 2px';
	}
	/*solucion*/
	if(document.getElementById("solucion").value=="Seleccione..."){
		validado = false;
		document.getElementById("solucion").style.border='red dashed 2px';
	}
	return validado;	
}

function editar_f(elemento){
	validado=true;
	/*nomb_host*/
	if(document.getElementById("nomb_host").value==""){
		validado = false;
		document.getElementById("nomb_host").style.border='red dashed 2px';
	}
	/*ingreso*/
	if((document.getElementById("ingreso").value=="" || document.getElementById("ingreso").value=="dd-mm-yyyy")){
		validado = false;
		document.getElementById("ingreso").style.border='red dashed 2px';
	}
	/*descripcion_falla*/
	if(document.getElementById("descripcion_falla").value=="Seleccione..." || document.getElementById("descripcion_falla").value==""){
		validado = false;
		document.getElementById("descripcion_falla").style.border='red dashed 2px';
	}
	/*solucion*/
	if(document.getElementById("solucion").value=="Seleccione..." || document.getElementById("solucion").value==""){
		validado = false;
		document.getElementById("solucion").style.border='red dashed 2px';
	}
	return validado;	
}

function ingreso(elemento){
	validado=true;
	/*nomb_host*/
	if(document.getElementById("usuario").value==""){
		validado = false;
		document.getElementById("usuario").style.border='red dashed 2px';
	}
	/*ingreso*/
	if(document.getElementById("contrasenia").value==""){
		validado = false;
		document.getElementById("contrasenia").style.border='red dashed 2px';
	}
	
	return validado;	
}


function agregar_equipo(elemento){
	validado=true;
	/*tipo_equipo*/
	if(document.getElementById("equipo0").value !="Seleccione..."){
		
		if(document.getElementById("equipo0").value =="Agregar Nuevo..." && document.getElementById("nuevo").value ==""){
			validado = false;
			document.getElementById("nuevo").style.border='red dashed 2px';
		}
		if(document.getElementById("accion1").value =="Seleccione..." && document.getElementById("equipo0").value !="Agregar Nuevo..." ){
			validado = false;
			document.getElementById("accion1").style.border='red dashed 2px';
			}
		if(document.getElementById("accion1").value =="Modificar" && document.getElementById("modificar").value =="" && document.getElementById("equipo0").value !="Agregar Nuevo..."){
			validado = false;
			document.getElementById("modificar").style.border='red dashed 2px';
		}
				
	}else {
		validado = false;
		document.getElementById("equipo0").style.border='red dashed 2px';
		}
	return validado;	
}

function agregar_conexion(elemento){
	validado=true;
	if(document.getElementById("conexion0").value !="Seleccione..."){
		
		if(document.getElementById("conexion0").value =="Agregar Nuevo..." && document.getElementById("nuevo2").value ==""){
			validado = false;
			document.getElementById("nuevo2").style.border='red dashed 2px';
		}
		if(document.getElementById("accion2").value =="Seleccione..." && document.getElementById("conexion0").value !="Agregar Nuevo..." ){
			validado = false;
			document.getElementById("accion2").style.border='red dashed 2px';
			}
		if(document.getElementById("accion2").value =="Modificar" && document.getElementById("modificar2").value =="" && document.getElementById("conexion0").value !="Agregar Nuevo..."){
			validado = false;
			document.getElementById("modificar2").style.border='red dashed 2px';
		}
				
	}else {
		validado = false;
		document.getElementById("conexion0").style.border='red dashed 2px';
		}
	return validado;	
}


function accion(elemento) {
	if(elemento.name=="equipo0"){
		if(elemento.value !="Seleccione..."){
			if(elemento.value =="Agregar Nuevo..."){
			document.getElementById("b_tipo_equipo").style.visibility='visible';
			document.getElementById("b_tipo_equipo").style.position='static';
			document.getElementById("equipo1").style.visibility='collapse';
			document.getElementById("equipo1").style.position='fixed';
			document.getElementById("b_tipo_equipo2").style.visibility='collapse';
			document.getElementById("b_tipo_equipo2").style.position='fixed';
			}else{
				document.getElementById("equipo1").style.visibility='visible';
				document.getElementById("equipo1").style.position='static';
				document.getElementById("b_tipo_equipo").style.visibility='collapse';
				document.getElementById("b_tipo_equipo").style.position='fixed';
				}
		}else{
		document.getElementById("equipo1").style.visibility='collapse';
		document.getElementById("equipo1").style.position='fixed';
		document.getElementById("b_tipo_equipo2").style.visibility='collapse';
		document.getElementById("b_tipo_equipo2").style.position='fixed';
		document.getElementById("b_tipo_equipo").style.visibility='collapse';
		document.getElementById("b_tipo_equipo").style.position='fixed';
		}
	}
	
	if(elemento.name=="accion1"){
		if(elemento.value == "Modificar"){
		document.getElementById("b_tipo_equipo2").style.visibility='visible';
		document.getElementById("b_tipo_equipo2").style.position='static';
		}else{
		document.getElementById("b_tipo_equipo2").style.visibility='collapse';
		document.getElementById("b_tipo_equipo2").style.position='fixed';
		}
	}
	
	
	
	
	if(elemento.name=="conexion0"){
		if(elemento.value !="Seleccione..."){
			if(elemento.value =="Agregar Nuevo..."){
			document.getElementById("b_tipo_conexion").style.visibility='visible';
			document.getElementById("b_tipo_conexion").style.position='static';
			document.getElementById("conexion1").style.visibility='collapse';
			document.getElementById("conexion1").style.position='fixed';
			document.getElementById("b_tipo_conexion2").style.visibility='collapse';
			document.getElementById("b_tipo_conexion2").style.position='fixed';
			}else{
				document.getElementById("conexion1").style.visibility='visible';
				document.getElementById("conexion1").style.position='static';
				document.getElementById("b_tipo_conexion").style.visibility='collapse';
				document.getElementById("b_tipo_conexion").style.position='fixed';
				}
		}else{
		document.getElementById("conexion1").style.visibility='collapse';
		document.getElementById("conexion1").style.position='fixed';
		document.getElementById("b_tipo_conexion2").style.visibility='collapse';
		document.getElementById("b_tipo_conexion2").style.position='fixed';
		document.getElementById("b_tipo_conexion").style.visibility='collapse';
		document.getElementById("b_tipo_conexion").style.position='fixed';
		}
	}
	
	if(elemento.name=="accion2"){
		if(elemento.value == "Modificar"){
		document.getElementById("b_tipo_conexion2").style.visibility='visible';
		document.getElementById("b_tipo_conexion2").style.position='static';
		}else{
		document.getElementById("b_tipo_conexion2").style.visibility='collapse';
		document.getElementById("b_tipo_conexion2").style.position='fixed';
		}
	}
	
	
	
}

