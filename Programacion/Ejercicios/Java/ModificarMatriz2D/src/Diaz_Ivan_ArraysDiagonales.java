import java.util.Scanner;

/*
Deberéis modificar el código facilitado en la sección de la UT4 para actuar sobre una diagonal para crear otros

tres módulos que trabajen sobre las otras 3 direcciones en las que podríamos cambiar las diagonales.

Deberéis estregar un fichero con el código que sea llamado Apellido_Nombre_ArraysDiagonales.java. 
*/

// Iván Díaz

public class Diaz_Ivan_ArraysDiagonales {

	public static void pintarMatriz(int[][] matriz){
		
		for(int i = 0; i < matriz.length; i++) {

			for(int j = 0; j < matriz[i].length; j++) {

				System.out.print(matriz[i][j] + " ");

			}

			System.out.println();

		}
        		
	}
	
	
	
	

	public static void cambiarDiagonalMasMas(int[][] matriz,int limite, int posX, int posY){
		
		for (int i = posX - 1, j = posY - 1; i < matriz.length && (i <= posX - 1 + limite) && j < matriz[i].length && ( j <= posY - 1 + limite); i++, j++) {

				matriz[i][j] = 1;

		}		

	}

	public static void main(String[] args){

		int dimensionX;

		int dimensionY;

		int posX;

		int posY;
		
		Scanner lector = new Scanner(System.in);

		System.out.println("Casillas en X");

		dimensionX=lector.nextInt();

		System.out.println("Casillas en Y");

		dimensionY=lector.nextInt();


		int[][] tablero = new int[dimensionX][dimensionY];

		pintarMatriz(tablero);
		
		System.out.println("posición X");

		posX=lector.nextInt();

		System.out.println("posición Y");

		posY=lector.nextInt();	
		
		cambiarDiagonalMasMas(tablero,2, posX, posY);

		System.out.println();

		System.out.println();

		System.out.println();

		pintarMatriz(tablero);

		lector.close();

	}

}