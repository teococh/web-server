
    <!--
        Variables a comprobar:
        $usuario;
        $password;
        $nombre;
        $email;
        $fijo;
        $movil;
        $publicidad;
        $novela;
        $edad;
    -->
    <?php
    function vUsuario($vusuario){
        if (strlen($vusuario) > 4) {
            return $vusuario;
        }else{
            return "<p class='mal'>usuario</p>";
        }
    }
    function vPassword($vpassword){
        if (strlen($vpassword) >= 6) {
            return $vpassword;
        }else {
            return "<p class='mal'>password</p>";
        }
    }
    function vNombre($vnombre){
        # El nombre debe tener de 3 a 18 caracteres alfanumericos
        if (preg_match('/^(?=.{3,18}$)[a-zñA-ZÑ](\s?[a-zñA-ZÑ])*$/', $vnombre)) {
            return $vnombre;
        }else{
            return "<p class='mal'>nombre</p>";
        }
    }
    function vEmail($vemail){
        if (filter_var($vemail, FILTER_VALIDATE_EMAIL)) {
            return $vemail;
        }else {
            return "<p class='mal'>email</p>";
        }
    }
    function vFijo($vfijo){
        if (is_numeric($vfijo) && !is_null($vfijo) && strlen($vfijo) == 9 && preg_match('/^96/', $vfijo)) {
            return $vfijo;
        }
        else{
            return "<p class='mal'>fijo</p>";
        }
        
    }
    function vMovil($vmovil){
        if (is_numeric($vmovil) && !is_null($vmovil) && strlen($vmovil) == 9 && preg_match('/^(6)/', $vmovil)) {
            return $vmovil;
        }
        else{
            return "<p class='mal'>movil</p>";
        }
    }
    function vCodigoPostal($cp)
    {
        if (is_numeric($cp) && !is_null($cp) && strlen($cp) == 5 && preg_match('/^(46)/', $cp)) {
            return $cp;
        }
        else{
            return "<p class='mal'>cp";
        }
    }
    ?>