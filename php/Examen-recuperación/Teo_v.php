<?php

    // strip_tags() para eliminar etiquetas html
    // trim() elimina espacios en blanco antes y despues de la entrada de texto
    // is_ comprueba si la variable es del tipo indicado
    // filter_ filtra segun parametros predefinidos ud4b p19
    // Revisar ud4b pagina 12 para ejemplos
    // Usar urlencode() cuando hayan caracteres especiales

    

    // Validación de nombre
    function usuarioValido($usuario) {
        if ($usuario == "") {
            return "El campo Usuario esta vacio";
        } elseif (!ctype_alnum($usuario)) {
            return "El campo Usuario contiene caracteres invalidos (solo letras y numeros)";
        } else {
            return "Valido";
        }
    }
    
    function contraValido($contra) {
        if ($contra == "") {
            return "El campo Contraseña esta vacio";
        } elseif (strlen($contra)<6) {
            return "El campo Contraseña debería incluir al menos 6 caracteres";
        } else {
            return "Valido";
        }
    }
    
    function nombreValido($nombre) {
        if ($nombre == "") {
            return "El campo Nombre esta vacio";
        } elseif (!ctype_alpha(quitarTildes(str_replace(' ','',$nombre)))) {
            return "El campo Nombre contiene caracteres invalidos (solo letras)";
        } else {
            return "Valido";
        }
    }
    
    function correoValido($correo) {
        if ($correo == "") {
            return "El campo Correo esta vacio";
        } elseif (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            return "El campo Correo no es una dirección valida ";
        } else {
            return "Valido";
        }
    }
    
    function fijoValido($fijo) {
        if ($fijo == "") {
            return "El campo Fijo esta vacio";
        } elseif (!ctype_digit($fijo)) {
            return "El campo Fijo contiene caracteres invalidos (solo numeros) ";
        } else {
            preg_match("/^96\d{7}/", $fijo, $coFijo, PREG_OFFSET_CAPTURE);
            if (empty($coFijo)) {
                return "El campo Fijo no es valido (debe ser de la C. Valenciana, empieza por 96 y contiene 9 digitos)";
            } else {
                return "Valido";
            }
        }
    }
    
    function movilValido($movil) {
        if ($movil == "") {
            return "El campo Movil esta vacio";
        } elseif (!ctype_digit($movil)) {
            return "El campo Movil contiene caracteres invalidos (solo numeros) ";
        } else {
            preg_match("/^6\d{8}/", $movil, $coMovil, PREG_OFFSET_CAPTURE);
            if (empty($coMovil)){
                return "El campo Movil no es un numero de telefono invalido (empieza por 6 y contiene 9 digitos)";
            } else {
                return "Valido";
            }
        }
    }
    
    
    function cpValido($cp) {
        if ($cp == "") {
            return "El campo c.p. esta vacio";
        } elseif (!ctype_digit($cp)) {
            return "El campo c.p. contiene caracteres invalidos (solo numeros) ";
        } else {
            preg_match("/^46\d{3}/", $cp, $coCP, PREG_OFFSET_CAPTURE);
            if (empty($coCP)) {
                return "El campo c.p. no es valido (debe ser de la C.Valenciana, empieza por 46 y contiene 5 digitos)";
            } else {
                return "Valido";
            }
        }
    }
    
    function ecValido($ec) {
        if ($ec == "") {
            return "El campo estado civil esta vacio";
        } else {
            return "Valido";
        }
    }
    
    
    
    function conocidoValido($conocido) {
        if (empty($conocido)) {
            return "No has seleccionado ninguna opcion de donde nos has conocido";
        } else {
            return "Valido";
        }
    }
    
    
    function quitarTildes($string) {
        $tildes = array('á','é','í','ó','ú',
                        'à','è','ì','ò','ù',
                        'Á','É','Í','Ó','Ú',
                        'À','È','Ì','Ò','Ù',
                        'ñ','Ñ','ç','Ç');
        
        $reemplazar = array ('a','e','i','o','u',
                             'a','e','i','o','u',
                             'A','E','I','O','U',
                             'A','E','I','O','U',
                             'n','N','c','C');
    
        return str_replace($tildes,$reemplazar,$string);
    }

?>