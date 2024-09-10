import java.util.InputMismatchException;
import java.util.Scanner;

public class Piramide {
    Scanner entrada = new Scanner(System.in);
    int altura;

    void exibirPiramide() {
        for (int i = 1 ; i <= altura; i++) {
            String linha = "";
            for (int j = 1 ; j <= i ; j++) {
                linha += j;
            }
            for (int k = i - 1 ; k >= 1 ; k--) {
                linha += k;
            }
            System.out.println(linha);
        }  
    }

    void defineAltura() {

        while (true) { 
            System.out.println("Digite a altura da pirâmide(entre 1 e 9): ");
            try {
                altura = entrada.nextInt();
                if(altura >= 1 && altura <= 9) {
                    break;
                } else {
                    System.out.println("Valor inválido! Digite um entre 1 e 9.");
                }
            } catch (InputMismatchException e) {
                System.out.println("Valor inválido! Digite um valor válido.");
                entrada.next();
            }
        }
    }
}
