class FirstDigit{
	public static void main(String[] args){
		int number,firsttdigit;
		number=Integer.parseInt(args[0]);
		firsttdigit=number/100;
		System.out.println("Number Inputed = "+number);
		System.out.println("Last Digit = "+firsttdigit);
	}
}