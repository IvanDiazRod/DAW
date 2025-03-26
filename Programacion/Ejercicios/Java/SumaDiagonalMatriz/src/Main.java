package ejercicios;

import java.util.Random;

public class Main {

    public static void main (String[] args) {

        int[][] matrizote = new int[5][5];

        inicializarMatriz(matrizote);

        mostrarMatriz(matrizote);

        sumaDiagonal(matrizote);

    }

    public static void inicializarMatriz(int[][] matrizote) {

        Random numeroRandom = new Random();

        for (int i = 0; i < matrizote.length; i++) {

            for (int j = 0; j < matrizote[i].length; j++) {

                matrizote[i][j] = numeroRandom.nextInt(90);

            }

        }

    }

    public static void mostrarMatriz(int[][] matrizote) {

        for (int i = 0; i < matrizote.length; i++) {

            for (int j = 0; j < matrizote[i].length; j++) {

                System.out.print(matrizote[i][j] + " | ");

            }

            System.out.println();

        }

    }

    public static void sumaDiagonal(int[][] matrizote) {

        int sumador = 0;

        for (int i = 0; i < matrizote.length; i++) {

            for (int j = 0; j < matrizote[i].length; j++) {

                    sumador = matrizote[0][0] + matrizote[1][1] + matrizote[2][2] + matrizote[3][3] + matrizote[4][4];

            }

        }

        System.out.println("La suma de la diagonal de la matriz es " +sumador);

    }

}