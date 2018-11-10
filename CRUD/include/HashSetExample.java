// importing library
import java.util.HashSet;

public class HashSetExample  // main class
{
   public static void main(String args[]) // java main method
   {
      // HashSet declaration
      HashSet<String> h = new HashSet<String>();

      // Adding elements to the HashSet
      h.add("Apple");
      h.add("Mango");
      h.add("Grapes");
      h.add("Orange");
      h.add("Fig");
      
      /*//Addition of duplicate elements
      hset.add("Apple");
      hset.add("Mango");
      //Addition of null values
      hset.add(null);
      hset.add(null);
*/
      //Displaying HashSet elements
      System.out.println(hset);
    }
}