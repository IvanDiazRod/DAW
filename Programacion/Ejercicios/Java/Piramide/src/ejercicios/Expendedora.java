package ejercicios;

import java.util.Locale;

import java.util.Scanner;

public class Expendedora {

	public static void main(String[] args) {
		
		Scanner producto = new Scanner(System.in).useLocale(Locale.US);
		
		System.out.println("Ofrezco los siguientes productos:");
		
		System.out.println("1. Cafe 1.00 $");
		
		System.out.println("2. Colacao 1.10 $");
		
		System.out.println("3. Chocolate 1.20 $");
		
		System.out.println("¿Cual eliges?");
		
		String decision = producto.nextLine();
		
		switch (decision) {
		
		case "Cafe":
			
			System.out.println("Introduce 1.00$");
			
			float cantidad = producto.nextFloat();
		
		}
				
		producto.close();

	}

}
