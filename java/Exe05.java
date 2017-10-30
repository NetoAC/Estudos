import java.util.Scanner;
class Exe05 {
	public static void main(String[] args) {
		Scanner scan = new Scanner(System.in);
		System.out.println("Digite quantos metros você andou...");
		float n1 = scan.nextFloat();
		float n = n1 * 100;
		System.out.println("Voce andou " + n +" centímetros");
	}
}