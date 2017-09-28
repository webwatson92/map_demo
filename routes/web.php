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
Route::group(['middleware' => ['web']], function () {
	///Teste avec le tuto Bestmomo
        // Route::get('/test-contact', function () {
        //     return new App\Mail\Contact([
        //       'nom' => 'Durand',
        //       'email' => 'webwatson92@gmail.com',
        //       'message' => 'Je voulais vous dire que votre site est magnifique !'
        //       ]);
        // });

        Route::get('photo', 'PhotoController@create');
        Route::post('photo', 'PhotoController@store');
    ///End test tuto BestMomo
		Route::get('/index', function () {
		    return view('pages.index');
		});
		Route::name('route_path')->get('/','Front\PageController@home');

		Route::get('/espace-utilisateurs', 'Front\PageController@espace_users')->name('espace_users_path');
		Route::name('route_path')->get('/','Front\PageController@home');
		Route::get('/login', function () {
   			return view('pages.login');
		});
		Route::get('/mail',[
    	'uses' => 'HomeController@store',
    	'as'   => 'mail'
    	]);
		
});

Route::group(['middleware' => ['guest']], function() {
       
        Route::get('/register', function () {
            return view('pages.register');
        });
        Route::post('/register',['uses' => 'Back\UserController@postSignUp','as'   => 'register' ]);

        //facebook  socialite

       Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
        Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');

        Route::post('/login/facebook',[
        'uses' => 'UserController@facebook',
        'as'   => 'facebook'
        ]);
 });

//Users
Route::group(['middleware' => ['auth']], function() {
        Route::get('/pays', ['uses' => 'Front\PaysController@index', 'as'   => 'pays' ]);
        Route::get('/contact',['uses' => 'Front\ContactController@index', 'as'   => 'contact' ]);
        Route::post('/contact',['uses' => 'Front\ContactController@store', 'as'   => 'contacts.store' ]);
        //Blogs Routes
        Route::get('/blogs',['uses' => 'Front\PostsController@index', 'as'   => 'blogs' ]);
        Route::get('/posts/{slug}',['uses' => 'Front\PostsController@show', 'as'   => 'posts.show' ]);
});

Auth::routes();


Route::get('/home', 'Front\HomeController@index')->name('home');

//admin redacteur
Route::prefix('admins')->middleware('redac')->namespace('Back')->group(function () {
});

//admin all
Route::prefix('admins')->middleware('admins')->namespace('Back')->group(function () {
});


    Route::post('/login',['uses' => 'Back\UserController@postSignIn', 'as'=>"login"]);
    Route::get('/admins', 'Back\AdminController@login_admin')->name('login_admin');
    Route::get('/admins/pays',['uses' => 'Back\AdminController@admin_pays' , 'as' => 'admin_pays' ]);
    Route::get('/admins/dashboard', 'Back\AdminController@dashboard')->name('dashboard');
    Route::get('/admins/pays-listes', 'Back\AdminController@listes_pays')->name('listes_pays');
    Route::get('/admins/modifier-pays/{id}', 'Back\AdminController@modifier_pays_get')->name('modifier_pays_get')->where('id', '[0-9]+');
    Route::get('/admins/supprimer-pays/{id}', 'Back\AdminController@supprimer_pays')->name('supprimer_pays')->where('id', '[0-9]+');
    
    Route::put('/admins/modifier-pays/{id}', 'Back\AdminController@update_pays_post')->name('update_pays_post')->where('id', '[0-9]+');   
    Route::post('/admins/dashboard', ['uses' => 'Back\AdminController@connexion' , 'as' => 'connexion' ]);
    Route::post('/admins/pays', ['uses' => 'Back\AdminController@ajouter_pays' , 'as' => 'ajouter_pays' ]);
    Route::get('/admins/message', ['uses' => 'Back\ContactController@message' , 'as' => 'message' ]);
    Route::get('/admins/statistique', 'Back\StatistiqueController@stat_page')->name('stat_page');


    Route::get('/admins/villes-listes', 'Back\VilleController@listes_ville')->name('listes_ville');
    Route::get('/admins/villes', 'Back\VilleController@admin_ville')->name('admin_ville');
    Route::get('/admins/modifier-ville/{id}', 'Back\VilleController@modifier_ville_get')->name('modifier_ville_get')->where('id', '[0-9]+');
    Route::put('/admins/modifier-ville/{id}', 'Back\VilleController@update_ville_post')->name('update_ville_post')->where('id', '[0-9]+'); 
    Route::get('/admins/supprimer-ville/{id}', 'Back\VilleController@supprimer_ville')->name('supprimer_ville')->where('id', '[0-9]+');  

    Route::post('/admins/ville', ['uses' => 'Back\VilleController@ajouter_ville' , 'as' => 'ajouter_ville' ]);
    
    Route::get('/admins/ajouter-ecoles', ['uses' => 'Back\EcoleController@admin_ecole' , 'as' => 'admin_ecole' ]);   
    Route::post('/admins/ajouter-ecoles', ['uses' => 'Back\EcoleController@ajouter_ecole' , 'as' => 'ajouter_ecole' ]);
    Route::get('/admins/ecoles-listes', ['uses' => 'Back\EcoleController@listes_ecole' , 'as' => 'listes_ecole' ]);   
    Route::get('/admins/modifier-ecoles/{id}', 'Back\EcoleController@update_ecole_get')->name('update_ecole_get')->where('id', '[0-9]+');
    Route::put('/admins/modifier-ecoles/{id}', 'Back\EcoleController@update_ecole_post')->name('update_ecole_post')->where('id', '[0-9]+'); 
    Route::get('/admins/supprimer-ecole/{id}', 'Back\EcoleController@supprimer_ecole')->name('supprimer_ecole')->where('id', '[0-9]+');  

    Route::get('/admins/filieres-listes', ['uses' => 'Back\FiliereController@listes_filiere' , 'as' => 'listes_filiere' ]);   
    Route::get('/admins/ajouter-filiere', ['uses' => 'Back\FiliereController@admin_filiere' , 'as' => 'admin_filiere' ]); 




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
