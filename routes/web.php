<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('{p1}/{p2}/{p3}/{p4}', function ($p1,$p2,$p3,$p4) {

  return view('welcome',[
   'p1'=>$p1,
   'p2'=>$p2,
   'p3'=>$p3,
   'p4'=>$p4,

 ]);}); */

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/', 'UsuarioController@store' )->name('nomeDaRota');

Route::get('apagar/{id}', 'UsuarioController@destroy');

Route::get('mostrar', 'UsuarioController@');

//Route::get('/','ExemploController@now');


Route::get('/pagina1', function () {
    return view('pagina1');
});

Route::get('/pagina2', function () {
    return view('pages.pagina2');
});

Route::get('servicos/{id}', function ($id) {
 return "O serviço do ".$id." é muito bom.<br><br>
Gostou?<a href='".url('pagina1')."'> Esse é o contato
dele.</a>";
});

Route::get('servicos/{id}/{telefone}', function ($id,$telefone) {
 return "O serviço do ".$id." é muito bom.<br><br>
Gostou?<a href='".url('pagina1')."'> Esse é o telefone dele:
".$telefone.".</a>";
});

Route::get('doc/{nome}', function ($nome) {
 return "Nome: ".$nome.".";
});

Route::get('doc/{nome}/{cpf}', function ($nome,$cpf) {
 return "Nome: ".$nome.".<br> CPF:".$cpf.".";
});

Route::get('doc/{nome}/{cpf}/{rg}', function ($nome,$cpf,$rg) {
 return "Nome: ".$nome.".<br> CPF:".$cpf.".<br>RG:".$rg.".";
});

Route::get('doc/{nome}/{cpf}/{rg}/{cep}', function ($nome,$cpf,$rg,$cep) {
 return "Nome: ".$nome.".<br> CPF:".$cpf.".<br>RG:".$rg."<br> CEP:".$cep.".";
});
