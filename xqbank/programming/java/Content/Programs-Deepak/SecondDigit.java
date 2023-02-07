class SecondDigit{
	public static void main(String[] args){
		int number,seconddigit;
		number=Integer.parseInt(args[0]);
		System.out.println("Number Inputed = "+number);
		number=number/10;
		seconddigit=number%10;
		System.out.println("Last Digit = "+seconddigit);
	}
}