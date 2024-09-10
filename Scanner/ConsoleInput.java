import java.util.Scanner;
 
public class ConsoleInput {
 
   public static void main(String[] args) {
        String maior = "";
       String nome;
       Scanner in = new Scanner(System.in);
       
       while( in.hasNext())
       {
    	   nome = in.nextLine();

            if(nome.length() > maior.length()) maior = nome;
       }

       System.out.printf("O número de caracteres para o maior nome é de %d (%s)", maior.length(), maior);

       in.close();            
    }
}