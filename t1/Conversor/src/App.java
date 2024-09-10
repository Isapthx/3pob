/*
 * Trabalho Extraclasse 1
 * Alunos: Isaac Emanuel Pires de Almeida, Christiano Bourguignon, Gabriel Póvoa
*/

public class App {
    public static void main(String[] args) throws Exception {
        Medidas med = new Medidas();
        EntradaeSaida EeS = new EntradaeSaida();

        med.cent = EeS.obterMedida();

        med.converter();

        EeS.exibirMedidas(med.cent, med.poleg, med.pe, med.jarda, med.milha);
    }
}
