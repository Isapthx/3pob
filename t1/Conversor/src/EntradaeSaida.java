import java.math.BigDecimal;
import java.util.Scanner;

public class EntradaeSaida {
    Scanner entrada = new Scanner(System.in); // cria o objeto Scanner

    float obterMedida() {
        System.out.println("Digite a medida a ser convertida(em centímetros): ");
        return Float.parseFloat(entrada.nextLine()); // Lê a próxima linha do teclado
    }

    void exibirMedidas(float cm, float pol, float pe, float jarda, BigDecimal milha) {
        System.out.println(cm + " centímetros equivalem:");
        System.out.println("Em polegadas = " + pol);
        System.out.println("Em pés = " + pe);
        System.out.println("Em jardas = " + jarda);
        System.out.println("Em milhas = " + milha);
    }
}