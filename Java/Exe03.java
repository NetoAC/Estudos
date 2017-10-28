import java.util.Scanner;
class Soma {
	public static void main(String[] args) {
		Scanner scan = new Scanner(System.in);
		System.out.println("Digite um número");
		int n1 = scan.nextInt();
		System.out.println("Digite mais um número");
		int n2 = scan.nextInt();
		int soma = n1 + n2;
		System.out.println("O resultado da soma entre "+
		n1 + " e " + n2 +" é igual a "+ soma);
	}
}