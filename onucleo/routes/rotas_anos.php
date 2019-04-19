<?php

Route::get('/{ano}', 'AnosPeriodoController@verAno');
Route::get('/{ano}/{periodo}', 'AnosPeriodoController@verPeriodo');
Route::get('/{ano}/{periodo}/{disciplina}', 'AnosPeriodoController@verDisciplina');
