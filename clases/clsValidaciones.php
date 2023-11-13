<?php

class Validaciones
{
    public static function ValidarCedula($cedula)
    {
        $mensaje = "";

        if (is_numeric($cedula) && strlen($cedula) == 8) {
            // No se realiza ninguna operación numérica
        } else {
            $mensaje .= "<b>La Cédula debe tener exactamente 8 Dígitos numéricos</b>";
        }

        return $mensaje;
    }

    public static function ValidarNumero($Telefono)
    {
        $mensaje = "";

        if (is_numeric($Telefono) && strlen($Telefono) == 8) {
            // No se realiza ninguna operación numérica
        } else {
            $mensaje .= "<b>El telefono debe tener exactamente 8 Dígitos numéricos</b>";
        }

        return $mensaje;
    }
}
