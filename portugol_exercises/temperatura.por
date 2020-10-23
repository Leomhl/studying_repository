programa
{
	//inclua biblioteca PortugolStudio

	funcao logico validar(caracter unidade_entrada, caracter unidade_saida) {

		
		se(unidade_entrada == unidade_saida) {
			escreva("Tá de brincation with me? Fazendo eu perder tempo?")
			retorne falso
		}

		se(unidade_entrada != 'c' e unidade_entrada != 'f' e unidade_entrada != 'k') {
			escreva("A unidade de entrada está incorreta!")
			retorne falso
		}

		se(unidade_saida != 'c' e unidade_saida != 'f' e unidade_saida != 'k') {
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
	funcao real f_para_k(real f) {
		retorne (f - 32) * 1.8 + 273.15
	}
	
	// f -> c
	funcao real f_para_c(real f) {
		retorne (f - 32) * 1.8
	}
	
	// k -> f
	funcao real k_para_f(real k){
		retorne (k - 273.15) * 1.8 + 32
	}
	// k -> c
	funcao real k_para_c(real k) {
		retorne k - 273.15
	}
	
	
	
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

		se(validar(unidade_entrada, unidade_saida)) {
				
			se(unidade_entrada == 'c' e unidade_saida == 'f') {
				escreva(c_para_f(temperatura))
			}
	
			se(unidade_entrada == 'c' e unidade_saida == 'k') {
				escreva(c_para_k(temperatura))
			}
	
			se(unidade_entrada == 'f' e unidade_saida == 'k') {
				escreva(f_para_k(temperatura))
			}
	
			se(unidade_entrada == 'f' e unidade_saida == 'c') {
				escreva(f_para_c(temperatura))
			}
	
			se(unidade_entrada == 'k' e unidade_saida == 'f') {
				escreva(k_para_f(temperatura))
			}
	
			se(unidade_entrada == 'k' e unidade_saida == 'c') {
				escreva(k_para_c(temperatura))
			}
		}	
	}
}
/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 1985; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */