//Program to Display Second Digit of Three Digit Number.



class SecondDigit       
{
   public static void main(String args[]) 
   {
      int x, y, z;
      x = 123;  
      y = x/10;           
      z = y%10;        
      System.out.println("Last Digit of " + x + " is "+z); 
   }
}