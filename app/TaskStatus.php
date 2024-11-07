<?php

namespace App;

enum TaskStatus: string
{
    case Open = "open";
    case Closed = "closed";
    case Canceled = "canceled";

    public function label(): string
    {
        return match ($this) {
            self::Open => "Aberto",
            self::Closed => "Finalizado",
            self::Canceled => "Cancelado",
        };
    }
}
