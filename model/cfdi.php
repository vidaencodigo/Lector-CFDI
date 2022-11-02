<?php
/**
 * Clase base cfdi se pueden añadir todos los campos del cfdi
 * para despues ser leidos y retornados
 */
class CFDI
{
    public $_rfc_emisor;
    public $_emisor;
    public $_rfc_receptor;
    public $_receptor;
    public $_total;
    public $_subtotal;
    public $_descripcion; # array
    public $_descripcionVal; # array
    public $_impuestos; #array
    public $_traslado;
    public $file_;

    protected $full_path;
    protected $path_ = "xml";

    public function readFullPath()
    {
        // crea la ruta completa con el archivo
        //$this->full_path = $this->path_ . "/" . $this->file_;
        $this->full_path = $this->file_;
        return $this->full_path;
    }

    protected function openXML()
    {
        // abre y carga el archivo xml
        return simplexml_load_file($this->readFullPath());
    }
}
