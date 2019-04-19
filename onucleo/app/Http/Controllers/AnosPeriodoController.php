<?php

namespace onucleo\Http\Controllers;

use Illuminate\Http\Request;

class AnosPeriodoController extends Controller {

	public function verPeriodo($ano, $periodo) {
		return "
			aqui vai ter a lista das disciplinas 
			linkando pra a pagina da disciplina daquele ano
		";
	}

	public function verAno($ano) {
		return "
			aqui vai ter a lista com todos os periodos
			daquele ano, levando pra a pagina da funcao verPeriodo
		"; 
	}

	public function verDisciplina($ano, $periodo, $disciplina) {
		return "
			aqui vai ter os conteudos das disciplinas daquele periodo
			onde o cadastrado vai poder upar coisas se ele realmente fez aquela
			disciplina daquele periodo naquele ano
		";
	}

	public function enviarConteudo() {
		return "isso é um metodo post de arquivo";
		// Aqui vai ser a função chamada pra receber o arquivo que o
		// cadastrado fez upload, n tenho certeza de quais parametros
		// mas ja deixo aqui pra ter a estrutura, só preencher
	}

	public function baixarConteudo() {
		return "isso é um get pra baixar alguma coisa caso queiram"
		// Aqui é um função pra baixar os arquivos caso estejam guardados em blobs no
		// BD, recuperar o arquivo e enviar como download
	}
}
