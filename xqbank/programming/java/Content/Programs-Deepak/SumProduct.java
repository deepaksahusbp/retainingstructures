class SumProduct{
	public static void main(String[] args){
		int number1,number2,number3,sum,product;
		number1=Integer.parseInt(args[0]);
		number2=Integer.parseInt(args[1]);
		number3=Integer.parseInt(args[2]);
		sum=number1+number2;
		product=number2*number3;
		System.out.println("First Number = "+number1);
		System.out.println("Second Number = "+number2);
		System.out.println("Third Number = "+number3);
		System.out.println("Sum of first two numbers = "+sum);
		System.out.println("Product of last two numbers = "+product);
	}
}