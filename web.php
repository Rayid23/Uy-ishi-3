<?php

use App\Controllers\AuthorController;
use App\Controllers\BookController;
use App\Controllers\GenresController;
use App\Routes\Route;

#--------------------Жанры-----------------------------------
Route::get("/", [GenresController::class,"index"]); #Старница Жанров
Route::get("/CreateGenresView",[GenresController::class, "createView"]); #Страница создание Жанров
Route::get("/DeleteAllGenres",[GenresController::class, "deleteAll"]); #Удалить все Жанров
Route::post("/CreateGenres",[GenresController::class, "create"]); #Создать Жанр
Route::post("/ReadGenres",[GenresController::class, "read"]); #Читать Жанр
Route::post("/UpdateGenres",[GenresController::class, "update"]); #Обновить Жанр
Route::post("/DeleteGenres",[GenresController::class, "delete"]); #Удалить Жанр

Route::get("/Authors", [AuthorController::class,"index"]); #Старница Авторов
Route::get("/CreateAuthorView",[AuthorController::class, "createView"]); #Страница создание Авторов
Route::get("/DeleteAllAuthors",[AuthorController::class, "deleteAll"]); #Удалить все Авторов
Route::post("/CreateAuthor",[AuthorController::class, "create"]); #Создать Автора
Route::post("/ReadAuthor",[AuthorController::class, "read"]); #Читать Автора
Route::post("/UpdateAuthor",[AuthorController::class, "update"]); #Обновить Автора
Route::post("/DeleteAuthorr",[AuthorController::class, "delete"]); #Удалить Автора

Route::get("/Books", [BookController::class,"index"]); #Старница Книг
Route::get("/CreateBooksView",[BookController::class, "createView"]); #Страница создание Книги
Route::get("/DeleteAllBooks",[BookController::class, "deleteAll"]); #Удалить всех Книг
Route::post("/CreateBooks",[BookController::class, "create"]); #Создать Книгу
Route::post("/ReadBook",[BookController::class, "read"]); #Читать Книгу
Route::post("/UpdateBook",[BookController::class, "update"]); #Обновить Книгу
Route::post("/DeleteBook",[BookController::class, "delete"]); #Удалить Книгу





?>