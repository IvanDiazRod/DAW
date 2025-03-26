package ejercicios;

import java.util.Scanner;

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

                System.out.print(matrizote[i][j] + " | ")

            }

            System.out.println();

        }

    }

}