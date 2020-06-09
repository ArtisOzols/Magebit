<?php
// Gets user id (email address)
session_start();
error_reporting(0);
if(isset($_SESSION['email']) || isset($_SESSION['RegEmail']) ){
    if(isset($_SESSION["RegEmail"])){
        $id =  $_SESSION["RegEmail"];
    } else if( isset($_SESSION["email"])){
        $id =  $_SESSION["email"];
    }
 }

Route::set('index.php', function() {
    Index::CreateView('Index');
});

Route::set('login', function() {
    Login::CreateView('Login');
});

Route::set('add-info-'.$id, function() {
    AddInfo::CreateView('AddInfo');
});


Route::set('test', function() {   
    Login::test();
});
Route::set('registration', function() {   
    Login::registration();
});


Route::set('add', function() {   
    AddInfo::add();
});


?>