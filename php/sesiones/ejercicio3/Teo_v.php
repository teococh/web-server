
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
            return "<h4 class='bien'>".$vusuario."<h4>";
        }else{
            return "<h4 class='mal'>".$vusuario."<h4>";
        }
    }
    function vPassword($vpassword){
        if (strlen($vpassword) >= 6) {
            return "<h4 class='bien'>".$vpassword."<h4>";
        }else {
            return "<h4 class='mal'>".$vpassword."<h4>";
        }
    }
    function vNombre($vnombre){
        # El nombre debe tener de 3 a 18 caracteres alfanumericos
        if (preg_match('/^(?=.{3,18}$)[a-zñA-ZÑ](\s?[a-zñA-ZÑ])*$/', $vnombre)) {
            return "<h4 class='bien'>".$vnombre."<h4>";
        }else{
            return "";
        }
    }
    function vEmail($vemail){
        if (filter_var($vemail, FILTER_VALIDATE_EMAIL)) {
            return $vemail;
        }else {
            return "";
        }
    }
    function vFijo($vfijo){
        if (is_numeric($vfijo) && !is_null($vfijo) && strlen($vfijo) == 9 && preg_match('/^96/', $vfijo)) {
            return $vfijo;
        }
        else{
            return "";
        }
        
    }
    function vMovil($vmovil){
        if (is_numeric($vmovil) && !is_null($vmovil) && strlen($vmovil) == 9 && preg_match('/^(6)/', $vmovil)) {
            return $vmovil;
        }
        else{
            return "";
        }
    }
    function vCodigoPostal($cp)
    {
        if (is_numeric($cp) && !is_null($cp) && strlen($cp) == 5 && preg_match('/^(46)/', $cp)) {
            return $cp;
        }
        else{
            return "";
        }
    }
    ?>