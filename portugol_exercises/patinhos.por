programa
{
	// vamos fazer uma programa que canta xuxa! Ebaaaa, que bosta!
	funcao inicio()
	{
		// regra
		
		//Cinco patinhos foram passear
		//Além das montanhas para brincar
		//A mamãe gritou: Quá, quá, quá, quá
		
		//Mas só quatro patinhos voltaram de lá


		/* A mamãe patinha foi procurar
		Além das montanhas na beira do mar
		A mamãe gritou: Quá, quá, quá, quá
		E os cinco patinhos voltaram de lá
		*/
		inteiro numero_patinhos
		
		escreva("Escreva a quantidade de patinhos que você deseja - ")
		leia(numero_patinhos)
		patinhos(numero_patinhos)
	}

	funcao patinhos(inteiro patinhos) {
		inteiro patinhos_original = patinhos

		// vai decrementar até nenhum patinho voltar de lá
		enquanto(patinhos > 0) {
		
			se(patinhos > 2) {
				escreva(patinhos, " patinhos foram passear")
				escreva("\nAlém das montanhas para brincar")
				escreva("\nA mamãe gritou: Quá, quá, quá, quá")
				patinhos--
				escreva("\nMas só ", patinhos, " patinhos voltaram de lá\n\n")
			}

			se(patinhos == 2) {
				escreva(patinhos, " patinhos foram passear")
				escreva("\nAlém das montanhas para brincar")
				escreva("\nA mamãe gritou: Quá, quá, quá, quá")
				patinhos--
				escreva("\nMas só ", patinhos, " patinho voltou de lá\n\n")
			}

			se(patinhos == 1) {
				escreva(patinhos, " patinho foi passear")
				escreva("\nAlém das montanhas para brincar")
				escreva("\nA mamãe gritou: Quá, quá, quá, quá")
				patinhos--
				escreva("\nMas nenhum patinho voltou de lá\n\n")	
			}

			se(patinhos == 0){
				escreva("A mamãe patinha foi procurar")
				escreva("\nAlém das montanhas na beira do mar")
				escreva("\nA mamãe gritou: Quá, quá, quá, quá")
				escreva("\nE os ", patinhos_original, " patinhos voltaram de lá\n\n")
			}
		}

	}
}
/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 206; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */