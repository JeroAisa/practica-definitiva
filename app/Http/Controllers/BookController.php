<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    /*El constructor realiza la verificacion de login y de ahi verifica que hacer o no */    
    public function __construct(){

        $this->middleware('auth');

    }

    public function index(){

        /*Si estoy logueado,  muestro el listado de libros de la persona logueada . Sino, devuelvo al menu principal */

        /*if (Auth::check()) {
            
        }*/

        /*Obtengo el id del cliente*/

        $user_id = Auth::user()->id;

        /*Busco los libros del usuario logueado*/
        
        $books = Book::where('user_id', $user_id)->get();

        /*Retorno la vista correspondiente*/

        /*Carpeta de la vista + vista */
        return view('books.index', [
            'books' => $books //preguntar si se devuelve en un json o un array comun
        ]);

    }

    public function storage(){

        

    }
}
