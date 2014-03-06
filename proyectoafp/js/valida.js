function valida(f) {
  var ok = true;
  correo = 0;
  rut = 0;
  cajita = document.getElementById("lic");
  var msg = "Debes escribir algo en los campos:\n";
  if(f.elements[0].value == ""){msg += "-rut\n";ok = false;}
  if(f.elements[0].value != ""){rut = 1;}
  if(validaRut(f.elements[0].value) == 1 && rut == 1){msg += "- un rut correcto\n";ok = false;}
  if(validaRut(f.elements[0].value) == 2 && rut == 1){msg += "- un rut con el formato correcto\n";ok = false;}
  if(f.elements["nombre1"].value == ""){msg += "- nombre1\n";ok = false;}
  if(f.elements["nombre2"].value == ""){msg += "- nombre2\n";ok = false;}
  if(f.elements["apellido1"].value == ""){msg += "- primer apellido\n";ok = false;}
  if(f.elements["apellido2"].value == ""){msg += "- segundo apellido\n";ok = false;}
  if(f.elements["fecha_nacimiento"].value == ""){msg += "- fecha nacimiento\n";ok = false;}
  if(f.elements["tipo_cliente"].value == "0"){msg += "- tipo de cliente\n";ok = false;}
  if(f.elements["region_residencia"].value == "0"){msg += "- su región de residencia\n";ok = false;}  
  if(f.elements["email"].value == ""){msg += "- un email\n";ok = false;}
  if(f.elements["email"].value != ""){correo = 1;}
  if(!validarEmail(f.elements["email"].value) && correo == 1){msg += "- un email correcto\n";ok = false;}
  if(f.elements["afp"].value == "0"){msg += "- Nombre AFP\n";ok = false;}
  if(cajita.checked==false){msg+="- Debe aceptar los términos y condiciones"; ok=false;}
  if(ok == false){alert(msg);}return ok;
  }
  
  
  
function validarEmail( email ) {
    expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if ( !expr.test(email) ){
        return false;
    }
    return true;
}

function validaRut(rut){
    rexp = new RegExp(/^([0-9])+\-([kK0-9])+$/);
    largo = rut.length-2;
    if(rut.match(rexp)){
        RUT = rut.split("-");
        elRut = RUT[0].split();
        digito = RUT[1].split()
        ruti = String(elRut);
        factor = 2;
        suma = 0;
        dv=0;
        for(i=(largo-1); i>=0; i--){
            factor = factor > 7 ? 2 : factor;
            suma += parseInt(ruti[i])*parseInt(factor);
            factor = factor+1;
        }
        dv = 11 -(suma % 11);
        if(dv == 11){
            dv = 0;
        }else if (dv == 10){
            dv = "k";
        }

        if(dv == digito){
            return 0;
        }else{            
            return 1;
        }
    }else{        
        return 2;
    }
}