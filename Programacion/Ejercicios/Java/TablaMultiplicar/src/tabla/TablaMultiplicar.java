package tabla;

import java.util.Scanner;

public class TablaMultiplicar {

	public static void main(String[] args) {
		
		Scanner amogus = new Scanner(System.in);
		
		System.out.println("¿Que tabla de multiplicar quieres hacer?");
		
		final int numeroMultiplicador = amogus.nextInt();
		
		for (int i = 1; i <= 10; i++) {
			
			System.out.println(numeroMultiplicador + " * " + i + " = " + numeroMultiplicador * i);
			
		}
		
		amogus.close();

	}

}