package ejercicios;

import java.util.Random;

import java.util.Scanner;

public class Main {

	public static void main(String[] args) {
		
		Random numeroRandom = new Random();
		
		Scanner sc = new Scanner(System.in);
		
		// Solicitar al usuario las dimensiones
		
		System.out.println("introduce la dimensión X");
		
		int dimensionX = sc.nextInt();
		
		System.out.println("Introduce la dimensión Y");
		
		int dimensionY = sc.nextInt();
		
		// Fin de solicitar al usuario las dimensiones
		
		int[][] putaMatriz = new int[dimensionX][dimensionY];
		
		inicializarMatriz(putaMatriz, numeroRandom);
		
		mostrarMatriz(putaMatriz);
		
		sumarDiagonal(putaMatriz);
		
		sc.close();

	}
	
	public static void inicializarMatriz(int[][] putaMatriz, Random numeroRandom) {
		
		for (int i = 0; i < putaMatriz.length; i++) {
			
			for (int j = 0; j < putaMatriz[i].length; j++) {
				
				putaMatriz[i][j] = numeroRandom.nextInt(9);
				
			}
			
		}
		
	}
	
	public static void mostrarMatriz(int[][] putaMatriz) {
		
		for (int i = 0; i < putaMatriz.length; i++) {
			
			for (int j = 0; j < putaMatriz[i].length; j++) {
				
				System.out.print(putaMatriz[i][j] + " | ");
				
			}
			
			System.out.println();
			
		}
		
	}
	
	public static void sumarDiagonal(int[][] putaMatriz) {
		
		int sumaDiagonal = 0;
		
		for (int i = 0; i < putaMatriz.length; i++) {
			
			for (int j = 0; j < putaMatriz[i].length; j++) {
				
				if (putaMatriz[i] == putaMatriz[j]) {
					
					sumaDiagonal += putaMatriz[i][j];
					
					break;
					
				}
				
			}
			
		}
		
		System.out.println("La suma de la diagonal es " +sumaDiagonal);
		
	}

}