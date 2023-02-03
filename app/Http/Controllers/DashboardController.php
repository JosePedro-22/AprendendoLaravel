<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Categoria;
use App\Models\Produto;

use DB;

class DashboardController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except(['index']);
    }
    public function index(){
        $usuarios = User::all()->count();

        //grafico 1 - usuarios
        $usersData = User::select([
            DB::raw('YEAR(created_at) as ano'),
            DB::raw('COUNT(*) as total')
        ])
        ->groupBy('ano')
        ->orderBy('ano', 'asc')
        ->get();

        //preparar arrays
        foreach($usersData as $user){
            $ano[] = $user->ano;
            $total[] = $user->total;
        }

        $userLabel = "'Comparativo de cadastros de de usuarios'";
        $userAno = implode(',', $ano);
        $userTotal = implode(',', $total);


        $catData = Categoria::all();

        foreach($catData as $cat){
            $catNome[] = "'".$cat->nome."'";
            $catTotal[] = Produto::where('id_categoria', $cat->id)->count();
        }

        $catLabel = implode(',', $catNome);
        $catTotal = implode(',', $catTotal);

        return view('admin.dashboard', compact('usuarios', 'userLabel', 'userAno', 'userTotal', 'catLabel', 'catTotal'));
    }
}
