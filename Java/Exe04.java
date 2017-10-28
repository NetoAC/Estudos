import java.util.Scanner;
class Exe04 {
	public static void main(String[] args) {
		Scanner scan = new Scanner(System.in);
		System.out.println("Digite a nota da Primeira Unidade");
		float n1 = scan.nextFloat();
		System.out.println("Digite a nota da Segunda Unidade");
		float n2 = scan.nextFloat();
		System.out.println("Digite a nota da Terceira Unidade");
		float n3 = scan.nextFloat();
		System.out.println("Digite a nota da Quarta Unidade");
		float n4 = scan.nextFloat();
		float media = (n1 + n2 + n3 + n4) / 4;
		System.out.println("A média dessas notas foi de "+ media);
	}
}