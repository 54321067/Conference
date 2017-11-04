<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



// 7 Routes = Restful


///////////////////////////////////////////////////////////////////////////////////
//infoconference//
////home////
Route::get('/home',['as'=>'adminconference.home','uses'=>'UserController@home']);


////////
//user//
Route::post('/upload/{id}', 'UploadController@upload')->middleware('auth');
Route::get('/Mysubmition',['as'=>'cfs.Mysubmition','uses'=>'PaperController@gotosubmition'])->middleware('auth');
Route::get('/Mysubmition/{id}/{pname}/{paperid}',['as'=>'cfs.paperDetails','uses'=>'PaperController@gotopaperdetail'])->middleware('auth');
Route::post('/Mysubmition/{id}/{pname}/invoice.pdf',['as'=>'cfs.payment','uses'=>'PaperController@viewPaymentPDF'])->middleware('auth');
////////
Route::get('/homecon',['as'=>'cfs.homecon','uses'=>'PaperController@conall'])->middleware('auth');
Route::get('/viewinfo',['as'=>'cfs.account','uses'=>'PaperController@myinfo'])->middleware('auth');
//NEW//
Route::get('/paperform/{id}',['as'=>'cfs.paperform','uses'=>'PaperController@viewpaper'])->middleware('auth');
Route::post('/paperform/{id}',['as'=>'cfs.paperform','uses'=>'PaperController@store'])->middleware('auth');
Route::get('/coninfo/{id}',['as'=>'cfs.coninfo','uses'=>'PaperController@coninfo'])->middleware('auth');
///////
Route::get('/Reviewer',['as'=>'cfs.Reviewer','uses'=>'PaperController@Reviewer'])->middleware('auth');
///end///
//user///
////////
///chair////
Route::get('/chairhome',['as'=>'chaircon.adminchair','uses'=>'chairController@chairhome'])->middleware('auth','chair');
Route::get('/checkreviewer/{id}',['as'=>'chair.checkreviewer','uses'=>'chairController@checkreviewer'])->middleware('auth','chair');
Route::post('/chair/setreviewer/{id}',['as'=>'chaircon.choosereviewer','uses'=>'chairController@review'])->middleware('auth','chair');
Route::get('/assessment/{id}',['as'=>'chaircon.assessment','uses'=>'chairController@assessment'])->middleware('auth','chair');
Route::get('/chair/aboutConference/{id}',['as'=>'chair.chairinfo','uses'=>'chairController@aboutConference'])->middleware('auth','chair');
Route::get('/chair/viewpaper/{id}',['as'=>'chair.chairview','uses'=>'chairController@viewpaper'])->middleware('auth','chair');
Route::get('/chair/choose/paper/{id}/{conid}',['as'=>'ff','uses'=>'chairController@choosereviewer'])->middleware('auth','chair');
Route::post('/getscore/{paperid}','chairController@getscore')->middleware('auth','chair');
Route::get('/chair/preview/{name}',['as'=> 'chairpreview','uses'=>'chairController@preview']);

/////////
//admin//
////////

Route::get('/view/{id}',['as'=>'adminconference.aboutConference','uses'=>'ProjectController@show'])->middleware('auth');
Route::get('/myConference',['as'=>'adminconference.myConference','uses'=>'AdminController@myConference'])->middleware('auth','admin');
Route::post('/get',['as'=>'adminconference.installcfs','uses'=>'AdminController@store'])->middleware('auth','admin');
Route::get('/checkreviewer/{id}',['as'=>'adminconference.checkreviewer','uses'=>'AdminController@checkreviewer'])->middleware('auth','admin');
Route::get('/choose/paper/{id}/{conid}',['as'=>'gg','uses'=>'AdminController@choosereviewer'])->middleware('auth','admin');
Route::get('/checkpayment/{id}',['as'=>'adminconference.checkpayment','uses'=>'AdminController@checkpayment'])->middleware('auth','admin');
Route::get('/adminhome',['as'=>'adminconference.adminhome','uses'=>'AdminController@adminhome'])->middleware('auth','admin');
Route::get('/aboutConference/{id}',['as'=>'adminconference.aboutConference','uses'=>'AdminController@aboutConference'])->middleware('auth','admin');
Route::get('/list/news',['as'=>'adminconference.tables','uses'=>'AdminController@table'])->middleware('auth','admin')->middleware('auth','admin');
Route::get('/list',['as'=>'adminconference.index','uses'=>'AdminController@index'])->middleware('auth','admin');
Route::get('/list/admin',['as'=>'adminconference.path','uses'=>'AdminController@admin'])->middleware('auth','admin');
Route::post('/list/admin',['as'=>'adminconference.path','uses'=>'AdminController@admin'])->middleware('auth','admin');
Route::get('/list/install','AdminController@install')->middleware('auth','admin');
Route::get('/list/submitcreate','AdminController@submitcreate')->middleware('auth','admin');
Route::get('/viewpaper/{id}',['as'=>'adminconference.viewpaper','uses'=>'AdminController@viewpaper'])->middleware('auth','admin');
Route::get('/list/info/{id}','AdminController@info')->middleware('auth','admin');
Route::delete('/list/info/{id}','AdminController@dropadmin')->middleware('auth','admin');
Route::get('/list/create','AdminController@create')->middleware('auth','admin');
//Route::get('/list/{id}',['as'=>'movies.show','uses'=>'ProjectController@show']);
Route::get('/list/{id}/edit','AdminController@edit')->middleware('auth','admin');
Route::put('/list/{id}','AdminController@update')->middleware('auth','admin');
Route::delete('/list/{id}','AdminController@destroy')->middleware('auth','admin');
Route::get('/user/{name}/preview',['as'=> 'userpreview','uses'=>'PaperController@preview']);
Route::get('/viewpaper/{name}/preview',['as'=>'viewpaper','uses'=>'AdminController@preview']);
Route::post('/viewpaperpayment/{id}/{conid}','AdminController@setpayment')->middleware('auth','admin');
Route::post('/resetpayment/{id}/{conid}','AdminController@resetpayment')->middleware('auth','admin');
/////////
///end///
//admin//
/////////


/////////
//reviewer
/////////


Route::get('/reviewer/{name}/preview',['as'=> 'reviewerpreview','uses'=>'PaperController@preview']);
Route::post('/list/getchair/{id}/{id2}',['as'=>'cfs.chair','uses'=>'ReviewerController@getchair']);
Route::get('/sendemail/send','mailcontroller@sendemail');
Route::post('/list/evaluation/{id}/{id2}','ReviewerController@evaluation');
Route::get('/list/evaluation/{id}/{id2}','ReviewerController@view');
////////////////////

////////////////////
//User Controller///
////////////////////
Route::get('/login',['as'=>'users.getLogin','uses'=>'UserController@getLogin']);
Route::post('/login',['as'=>'users.setLogin','uses'=>'UserController@setLogin']);
Route::get('/register',['as'=>'users.getRegister','uses'=>'UserController@getRegister']);
Route::post('/register',['as'=>'users.setRegister','uses'=>'UserController@setRegister']);
Route::get('/logout',['as'=>'users.logout','uses'=>'UserController@logout']);
