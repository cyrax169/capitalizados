function valida(f) {
  var ok = true;
  cajita = document.getElementById("lic");
  var msg = "Debes escribir algo en los campos:\n";
  if(f.elements[0].value == ""){msg += "-rut\n";ok = false;}
  if(f.elements["nombre1"].value == ""){msg += "- nombre1\n";ok = false;}
  if(f.elements["nombre2"].value == ""){msg += "- nombre2\n";ok = false;}
  if(f.elements["apellido1"].value == ""){msg += "- primer apellido\n";ok = false;}
  if(f.elements["apellido2"].value == ""){msg += "- segundo apellido\n";ok = false;}
  if(f.elements["fecha_nacimiento"].value == ""){msg += "- fecha nacimiento\n";ok = false;}
  if(f.elements["tipo_cliente"].value == "0"){msg += "- tipo de cliente\n";ok = false;}
  if(f.elements["region_residencia"].value == "0"){msg += "- region de residencia\n";ok = false;}
  if(f.elements["afp"].value == "0"){msg += "- Nombre AFP\n";ok = false;}
  if(cajita.checked==false){msg+="- Debe aceptar los términos y condiciones"; ok=false;}
  if(ok == false){alert(msg);}return ok;
  }