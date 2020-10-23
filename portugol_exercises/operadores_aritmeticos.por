programa
{
	
	funcao inicio()
	{
		cadeia nome = "Leonardo", estado, cidade
		inteiro ano_nascimento
		real peso, altura, imc

		escreva("Digite o seu estado: ")
		leia(estado)

		escreva("Digite o nome da sua cidade: ")
		leia(cidade)

		escreva("Digite o ano do seu nascimento: ")
		leia(ano_nascimento)


		escreva("Digite o seu peso: ")
		leia(peso)

		escreva("Digite a sua altura: ")
		leia(altura)
		
		//IMC = Peso ÷ (Altura × Altura)
		imc = peso / (altura*altura)
		
		escreva(nome+" pertence ao estado do "+estado+" e mora na cidade de "+cidade+".")
		escreva("\nTem aproximadamente "+ (2020 - ano_nascimento) +" anos.")
		escreva("\nO seu IMC é: "+ imc)

	}
}
/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 187; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */