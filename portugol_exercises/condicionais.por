programa
{
	
	funcao inicio()
	{

		// https://www.programasaudefacil.com.br/calculadora-de-imc
		real peso, altura, imc
		
		escreva("Digite o seu peso: ")
		leia(peso)

		escreva("Digite a sua altura: ")
		leia(altura)
		
		//IMC = Peso ÷ (Altura × Altura)
		imc = peso / (altura*altura)

		limpa()
		escreva("O seu IMC é: "+ imc +"\n")

		se(imc < 18.5) {
			escreva("Magreza extrema")
		}

		se(imc >= 18.5 e imc <= 24.9) {
			escreva("Peso normal")
		}

		se(imc >= 25.0 e imc <= 29.9) {
			escreva("Sobrepeso")
		}

		se(imc >= 30.0 e imc <= 39.9) {
			escreva("Obesidade")
		}

		
		se(imc > 40) {
			escreva("Obesidade grave")
		}
	}
}
/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 336; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */