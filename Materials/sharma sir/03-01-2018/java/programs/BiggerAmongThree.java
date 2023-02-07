//Program to display bigger among three numbers


class BiggerAmongThree       
{
   public static void main(String args[]) 
   {
	int x, y, z;
      	x = 123;  
	y=20;
	z=40;
	if(x>y && x>z)           
		System.out.println(x + " is bigger"); 
	else if(y>x && y>z)
		System.out.println(y + " is bigger");
	else if(z>x && z>y)
		System.out.println(z + " is bigger");
   }
}