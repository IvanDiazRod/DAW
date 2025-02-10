package Ejercicios;

import java.util.Scanner;

public class ParOimpar {

	public static void main(String[] args) {
		
		String salida;
		
		Scanner numintrod = new Scanner(System.in);
		
		System.out.println("Introduce un número y te diré si es par o impar");
		
		int numero = numintrod.nextInt();
		
		salida = (numero % 2 == 0) ? "El número es par" : "El número es impar";
		
		System.out.println(salida);
		
		numintrod.close();

	}

}