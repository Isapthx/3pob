import java.util.Scanner;
 
public class ConsoleInput {
 
   public static void main(String[] args) {
 
       String nome;
       Scanner entrada = new Scanner(System.in);
       
       while( entrada.hasNext())
       {
    	   nome = entrada.nextLine();
    	   System.out.println( nome);
       }
       entrada.close();            
    }
}