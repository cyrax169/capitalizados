function comprueba_extension(formulario, archivo) {
   extensiones_permitidas = new Array(".pdf"); 
   mierror = "";
   ok = false;
   if (!archivo) { 
      //Si no tengo archivo, es que no se ha seleccionado un archivo en el formulario 
      	mierror = "- No has seleccionado ningún archivo\n"; 
   }
   else{ 
      //recupero la extensión de este nombre de archivo 
      extension = (archivo.substring(archivo.lastIndexOf("."))).toLowerCase(); 
      //alert (extension); 
      //compruebo si la extensión está entre las permitidas 
      permitida = false; 
      for (var i = 0; i < extensiones_permitidas.length; i++) { 
         if (extensiones_permitidas[i] == extension) { 
            permitida = true; 
            break; 
         } 
      } 
      if (!permitida) { 
         mierror = "- Comprueba la extensión de los archivos a subir. \n   Sólo se pueden subir archivos con extensiones: " + extensiones_permitidas.join()+"\n"; 
      	}else{ 
         	 //submito!  
            ok = true;
            
      	} 
   }
   if(formulario.elements["cuatrimestre"].value == "0"){mierror += "\n- Debes seleccionar un cuatrimestre\n";ok = false;}
   if(formulario.elements["anio"].value == "0"){mierror += "\n- Debes seleccionar un año\n";ok = false;}
   //si estoy aqui es que no se ha podido submitir 
   if (mierror !=""){alert (mierror);}
   if(ok == true){formulario.submit();}
   return ok;
}