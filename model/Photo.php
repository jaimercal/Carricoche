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

    public function uploadPhoto($file){
        $maxFileSize = 5000000;
        $folder = "../img/imgStore/";
        $route = "";
        $fileName = $file['name'];
        $fileType = $file['type'];
        $size = $file['size'];
        //Valido que el formato de imagen sea un jpeg o un png
        if((strpos($fileType, "jpeg") || strpos($fileType, "png")) && $size < $maxFileSize ){
            $fileName = $this->clearSpChar($fileName);
            // reviso si ya existe algun archivo con el mismo nombre en la carpeta.
            if(file_exists($folder.$fileName)){
                $cutName = $this->cutString($fileName);
                $random = time();
                if(strpos($fileType, "jpeg")){
                    $extension = ".jpg";
                }else{
                    $extension = ".png";
                }
                $fileName = $cutName."_".$random.$extension;
            }
            if(move_uploaded_file($file['tmp_name'], $folder.$fileName)){
                $route = $fileName;
            }else{
                echo "<script>alert('No se ha podido guardar el archivo. Contacte con el administrador')</script>";
            }
        }else{
            echo "<script>alert('No es un formato de imagen permitido o tiene un tamaño superior al permitido')</script>";
            $route = null;
        }
        return $route;
    }
    public function clearSpChar($charString) {
        //preg_replace($patrones, $sustituciones, $cadena);
        //$cadena =  preg_replace("/[^a-zA-Z0-9\_\-]+/", "",$cadena);
        //IMPORTANTE
        $charString = utf8_decode($charString);
        $charString = str_replace(
            array('?', '¿'),
            array('_', '_'),
            $charString
        );
        $charString = str_replace(
            array(' '),
            array('_'),
            $charString
        );
        $charString = str_replace(
            array('á', 'à', 'ä', 'â', 'ª', 'Á', 'À', 'Â', 'Ä'),
            array('a', 'a', 'a', 'a', 'a', 'A', 'A', 'A', 'A'),
            $charString
        );
        $charString = str_replace(
            array('é', 'è', 'ë', 'ê', 'É', 'È', 'Ê', 'Ë'),
            array('e', 'e', 'e', 'e', 'E', 'E', 'E', 'E'),
            $charString );
        $charString = str_replace(
            array('í', 'ì', 'ï', 'î', 'Í', 'Ì', 'Ï', 'Î'),
            array('i', 'i', 'i', 'i', 'I', 'I', 'I', 'I'),
            $charString );
        $charString = str_replace(
            array('ó', 'ò', 'ö', 'ô', 'Ó', 'Ò', 'Ö', 'Ô'),
            array('o', 'o', 'o', 'o', 'O', 'O', 'O', 'O'),
            $charString );
        $charString = str_replace(
            array('ú', 'ù', 'ü', 'û', 'Ú', 'Ù', 'Û', 'Ü'),
            array('u', 'u', 'u', 'u', 'U', 'U', 'U', 'U'),
            $charString );
        $charString = str_replace(
            array('ñ', 'Ñ', 'ç', 'Ç'),
            array('n', 'N', 'c', 'C'),
            $charString
        );
//para ampliar los caracteres a reemplazar agregar lineas de este tipo:
//$archivo = str_replace("caracter-que-queremos-cambiar","caracter-por-el-cual-lo-vamos-a-cambiar",$archivo);
        return $charString;
    }
    public function cutString($charString, $character = "."){
// localicamos en que posición se haya la $subcadena, en nuestro caso la posicion es "7"
        $stringPos = strrpos ($charString, $character);
// eliminamos los caracteres desde $subcadena hacia la izq, y le sumamos 1 para borrar tambien el @ en este caso
        $name = substr ($charString, 0, ($stringPos));
        return $name;
    }
}