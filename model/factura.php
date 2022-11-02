<?php
require_once "cfdi.php";
class FACTURA extends CFDI
{
    public function cabeceraCFDIMthod()
    {
        # cabeza de CFDI
        foreach ($this->openXML()->xpath('//cfdi:Comprobante')  as $cfdi) :
            $this->_total = $cfdi['Total'];
            $this->_subtotal = $cfdi['SubTotal'];
        endforeach;
    }

    public function emisorCFDIMethod()
    {
        # Emisor CFDI
        foreach ($this->openXML()->xpath('//cfdi:Comprobante//cfdi:Emisor')  as $emisor) :
            $this->_emisor = $emisor['Nombre'];
            $this->_rfc_emisor = $emisor['Rfc'];
        endforeach;
    }

    public function receptorCFDIMtethod()
    {
        # Receptor CFDI
        foreach ($this->openXML()->xpath('//cfdi:Comprobante//cfdi:Receptor')  as $receptor) :
            $this->_receptor = $receptor['Nombre'];
            $this->_rfc_receptor = $receptor['Rfc'];
        endforeach;
    }

    public function conceptosCFDIMethod()
    {
        foreach ($this->openXML()->xpath('//cfdi:Comprobante//cfdi:Conceptos//cfdi:Concepto')  as $concepto) :
            $this->_descripcion[] = $concepto['Descripcion'];
            $this->_descripcionVal[] = $concepto['ValorUnitario'];
        endforeach;
    }

    public function impuestosTrasladoCFDIMethod()
    {
        # impuestos traslado solo por cada concepto
        foreach ($this->openXML()->xpath('//cfdi:Comprobante//cfdi:Conceptos//cfdi:Concepto//cfdi:Impuestos//cfdi:Traslados//cfdi:Traslado')  as $impuesto) :
            $this->_impuestos[] = array('Base' => $impuesto['Base'], 'Importe' => $impuesto['Importe'], 'Tasa' => $impuesto['TasaOCuota']);
        endforeach;
    }

    public function impuestoTotalCFDIMethod()
    {
        #IMPUESTOS TRASLADADOS TOTAL
        foreach ($this->openXML()->xpath('//cfdi:Comprobante//cfdi:Impuestos')  as $_traslado) :
            $this->_traslado = $_traslado['TotalImpuestosTrasladados'];
        endforeach;
    }

    public function loader()
    {
        # Ejecuta todas las funciones
        $this->cabeceraCFDIMthod();
        $this->emisorCFDIMethod();
        $this->receptorCFDIMtethod();
        $this->conceptosCFDIMethod();
        $this->impuestosTrasladoCFDIMethod();
        $this->impuestoTotalCFDIMethod();
    }
}


