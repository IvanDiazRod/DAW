package ejercicios;

import java.util.Scanner;

public class DiazIvanPiramide {

	public static void main(String[] args) {
		
		Scanner numerin = new Scanner(System.in);
		
		System.out.println("Dame un número y de dibujaré una pirámide de asteriscos (*)");
		
		int numero = numerin.nextInt();
		
		for (int i = 1; i <= numero; i++) {
			
			if (numero <= 0) {
				
				System.out.println("Número no valido");
				
				} 	else	 {
			
				for (int j = 1; j <= i; j++) {
				
					System.out.print(" *");
				
					}
			
				}
			
			System.out.println("");
			
		}
		
		numerin.close();

	}

}
