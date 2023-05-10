<?php

declare(strict_types=1);

namespace App\Domain\Post;


class PostRequest
{
    public $titulo;
    public $cuerpo;
    public $fecha_publicacion;

    public function __construct(
        $titulo,
        $cuerpo,
        $fecha_publicacion
    ) {
        $this->titulo = $titulo;
        $this->cuerpo = $cuerpo;
        $this->fecha_publicacion =  $fecha_publicacion;
    }

    public function titulo()
    {
        return $this->titulo;
    }

    public function cuerpo()
    {
        return $this->cuerpo;
    }

    public function fecha_publicacion()
    {
        return $this->fecha_publicacion;
    }
}
