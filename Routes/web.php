<?php
    namespace Routes;
    use Config\Route;

    class web{
        public function process(){
            Route::get('/', 'ControllerAuth@viewLogin')->name('login');
            Route::prefix('autenticate', function(){
                Route::post('auth', 'ControllerAuth@auth')->name('post.auth');
            });

            Route::prefix('cadastros', function(){
                Route::get('novo', 'ControllerAlunos@viewAlunos')->name('view.cadastroAluno');
            });

            Route::prefix('perfil', function(){
                Route::get('edit', 'ControllerPerfil@viewEdit')->name('view.perfilAcademia');
            });
            
            Route::middleware('MiddlewareAuth@isLogged', function(){
                Route::prefix('dashboard', function(){
                    Route::get('/', 'ControllerHome@viewHome')->name('dashboard');
                });
            });
        }
    }
?>