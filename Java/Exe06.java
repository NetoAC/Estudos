import java.util.Scanner;
class Exe06 {
	public static void main(String[] args) {
		Scanner scan = new Scanner(System.in);
		System.out.println("Digite o raio do circulo");
		float raio = scan.nextFloat();
		float result = (float) Math.PI * (float) Math.pow(raio,2);
		System.out.println("A área do circulo é "+ result);
	}
}