// 1 - Crie um programa em portugol que receba uma temperatura 
// em número decimal, pergunte ao usuário em qual unidade ela 
// está (celsius, kelvin ou fahrenheit) e para qual unidade ele 
// deseja converter. Imprima o resultado na tela.

programa
{

	funcao logico validar(caracter unidade_entrada, caracter unidade_saida) {
		
		se(unidade_entrada == unidade_saida) {
			escreva("Tá de brincation with me? Fazendo eu perder tempo?")
			retorne falso
		}

		se(unidade_entrada != 'c' ou unidade_entrada != 'f' ou unidade_entrada != 'k') {
			escreva("A unidade de entrada está incorreta!")
			retorne falso
		}

		se(unidade_saida != 'c' ou unidade_saida != 'f' ou unidade_saida != 'k') {
			escreva("A unidade de saída está incorreta!")
			retorne falso
		}

		retorne verdadeiro
	}
	

	funcao real c_para_f(real c) {
		retorne c * 1.8 + 32.00
	}

	funcao real c_para_k(real c) {
		retorne c + 273.15
	}

	// f -> k
	// f -> c

	// k -> f
	// k -> c
	
	//f = (k-273.15)*1.8000 + 32.00
	
	funcao inicio()
	{
		real temperatura
		caracter unidade_entrada, unidade_saida
		
		escreva("Informe uma temperetura - ")
		leia(temperatura)
		
		escreva("Qual é a unidade da temperatura que você informou? (c, f ou k) ")
		leia(unidade_entrada)

		escreva("Qual é a unidade final da conversão? (c, f ou k) ")
		leia(unidade_saida)

	// testar o retorno da função validar, se for verdadeiro prosseguir com os cálculos 
		
	}
}
/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 906; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */