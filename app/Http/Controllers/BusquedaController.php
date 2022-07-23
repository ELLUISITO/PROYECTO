<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers;
use App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Restaurante;
use App\Ubicacione;
use App\Horario;
use App\Inflegal;
use App\Replegal;
use App\Redessociale;
use App\BD;
use App\Servicio;
use App\Tiposocasione;
use App\Tiposcomida;
use App\Imagene;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BusquedaController extends Controller
{
    public function index(Request $request)
    {
 
        echo $request;

    }


}
