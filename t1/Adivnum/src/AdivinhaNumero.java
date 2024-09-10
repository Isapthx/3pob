/*
 * Trabalho Extraclasse 1
 * Alunos: Isaac Emanuel Pires de Almeida, Christiano Bourguignon, Gabriel Póvoa
 */

import java.util.Random;
import java.util.Scanner;

public class AdivinhaNumero {
    public static void main(String[] args) {
        Scanner entrada = new Scanner(System.in);
        Random random = new Random();

        System.out.print("Jogador 1: ");
        String jogador1 = entrada.nextLine();
        System.out.print("Jogador 2: ");
        String jogador2 = entrada.nextLine();

        String jogadorAtual = random.nextBoolean() ? jogador1 : jogador2;
        System.out.println("Jogador sorteado para começar: " + jogadorAtual);
        int numeroSecreto = random.nextInt(1000) + 1;

        while (true) {
            System.out.print("Palpite " + jogadorAtual + ": ");
            int palpite = entrada.nextInt();
            entrada.nextLine();

            if (palpite < numeroSecreto) {
                System.out.println("Computador: número é maior");
            } else if (palpite > numeroSecreto) {
                System.out.println("Computador: número é menor");
            } else {
                System.out.println(jogadorAtual + " ganhou!");
                break;
            }
            jogadorAtual = jogadorAtual.equals(jogador1) ? jogador2 : jogador1;
        }
        entrada.close();
    }
}
