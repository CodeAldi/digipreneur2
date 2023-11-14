<?php

namespace App\Enums;

enum UserRole: String
{
    case Admin = 'admin';
    case Instruktur = 'instruktur';
    case Peserta = 'peserta';
}
