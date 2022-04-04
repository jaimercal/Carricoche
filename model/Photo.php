<?php

class Photo {
    private $frontalPhoto;
    private $lateralPhoto;
    private $freePhoto;

    /**
     * @param $frontalPhoto
     * @param $lateralPhoto
     * @param $freePhoto
     */
    public function __construct($frontalPhoto, $lateralPhoto, $freePhoto) {
        $this->frontalPhoto = $frontalPhoto;
        $this->lateralPhoto = $lateralPhoto;
        $this->freePhoto = $freePhoto;
    }

    /**
     * @return mixed
     */
    public function getFrontalPhoto() {
        return $this->frontalPhoto;
    }

    /**
     * @return mixed
     */
    public function getLateralPhoto() {
        return $this->lateralPhoto;
    }

    /**
     * @return mixed
     */
    public function getFreePhoto() {
        return $this->freePhoto;
    }

    /**
     * @param mixed $frontalPhoto
     */
    public function setFrontalPhoto($frontalPhoto) {
        $this->frontalPhoto = $frontalPhoto;
    }

    /**
     * @param mixed $lateralPhoto
     */
    public function setLateralPhoto($lateralPhoto) {
        $this->lateralPhoto = $lateralPhoto;
    }

    /**
     * @param mixed $freePhoto
     */
    public function setFreePhoto($freePhoto) {
        $this->freePhoto = $freePhoto;
    }

    public function subirFoto($archivoFoto){
        $tamanoMaxArchivo = 5000000;
        $carpeta = "../img/imgStore/";
        $ruta = "";
        $nombreArchivo = $archivoFoto['name'];
        $tipo = $archivoFoto['type'];
        $tamano = $archivoFoto['size'];
        //Valido que el formato de imagen sea un jpeg o un png
        if((strpos($tipo, "jpeg") || strpos($tipo, "png")) && $tamano < $tamanoMaxArchivo ){
            $nombreArchivo = $this->limpiar_caracteres_especiales($nombreArchivo);
            // reviso si ya existe algun archivo con el mismo nombre en la carpeta.
            if(file_exists($carpeta.$nombreArchivo)){
                $nombreCortado = $this->cortarCadenaFinal($nombreArchivo);
                $numeroAletario = time();
                if(strpos($tipo, "jpeg")){
                    $extension = ".jpg";
                }else{
                    $extension = ".png";
                }
                $nombreArchivo = $nombreCortado."_".$numeroAletario.$extension;
            }
            if(move_uploaded_file($archivoFoto['tmp_name'], $carpeta.$nombreArchivo)){
                $ruta = $nombreArchivo;
            }else{
                echo "<script>alert('No se ha podido guardar el archivo. Contacte con el administrador')</script>";
            }
        }else{
            echo "<script>alert('No es un formato de imagen permitido o tiene un tamaño superior al permitido')</script>";
            $ruta = null;
        }
        return $ruta;
    }
    public function limpiar_caracteres_especiales($cadena) {
        //preg_replace($patrones, $sustituciones, $cadena);
        //$cadena =  preg_replace("/[^a-zA-Z0-9\_\-]+/", "",$cadena);
        //IMPORTANTE
        $cadena = utf8_decode($cadena);
        $cadena = str_replace(
            array('?', '¿'),
            array('_', '_'),
            $cadena
        );
        $cadena = str_replace(
            array(' '),
            array('_'),
            $cadena
        );
        $cadena = str_replace(
            array('á', 'à', 'ä', 'â', 'ª', 'Á', 'À', 'Â', 'Ä'),
            array('a', 'a', 'a', 'a', 'a', 'A', 'A', 'A', 'A'),
            $cadena
        );
        $cadena = str_replace(
            array('é', 'è', 'ë', 'ê', 'É', 'È', 'Ê', 'Ë'),
            array('e', 'e', 'e', 'e', 'E', 'E', 'E', 'E'),
            $cadena );
        $cadena = str_replace(
            array('í', 'ì', 'ï', 'î', 'Í', 'Ì', 'Ï', 'Î'),
            array('i', 'i', 'i', 'i', 'I', 'I', 'I', 'I'),
            $cadena );
        $cadena = str_replace(
            array('ó', 'ò', 'ö', 'ô', 'Ó', 'Ò', 'Ö', 'Ô'),
            array('o', 'o', 'o', 'o', 'O', 'O', 'O', 'O'),
            $cadena );
        $cadena = str_replace(
            array('ú', 'ù', 'ü', 'û', 'Ú', 'Ù', 'Û', 'Ü'),
            array('u', 'u', 'u', 'u', 'U', 'U', 'U', 'U'),
            $cadena );
        $cadena = str_replace(
            array('ñ', 'Ñ', 'ç', 'Ç'),
            array('n', 'N', 'c', 'C'),
            $cadena
        );
//para ampliar los caracteres a reemplazar agregar lineas de este tipo:
//$archivo = str_replace("caracter-que-queremos-cambiar","caracter-por-el-cual-lo-vamos-a-cambiar",$archivo);
        return $cadena;
    }
    public function cortarCadenaFinal($cadena, $caracter = "."){
// localicamos en que posición se haya la $subcadena, en nuestro caso la posicion es "7"
        $posicionsubcadena = strrpos ($cadena, $caracter);
// eliminamos los caracteres desde $subcadena hacia la izq, y le sumamos 1 para borrar tambien el @ en este caso
        $nombre = substr ($cadena, 0, ($posicionsubcadena));
        return $nombre;
    }
}