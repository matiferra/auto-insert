<?php

class Archivo extends Modelo
{

    protected function getTable()
    {
        return 'archivos';
    }

    protected function getPrimaryKey()
    {
        return 'ARCHIVOID';
    }

}