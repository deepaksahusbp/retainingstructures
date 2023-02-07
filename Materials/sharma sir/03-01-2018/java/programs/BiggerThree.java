//Program to display bigger among three numbers


class BiggerThree       
{
   public static void main(String args[]) 
   {
	int x, y, z;
      	x = 123;  
	y=20;
	z=40;
	if(x>y)
	{
		if(x>z)           
			System.out.println(x + " is bigger"); 
		else
			System.out.println(z + " is bigger"); 
	}
	else
	{
		if(y>z)           
			System.out.println(y + " is bigger"); 
		else
			System.out.println(z + " is bigger");
	}

   }
}