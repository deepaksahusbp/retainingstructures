class LastDigit{
	public static void main(String[] args){
		int number,lastdigit;
		number=Integer.parseInt(args[0]);
		lastdigit=number%10;
		System.out.println("Number Inputed = "+number);
		System.out.println("Last Digit = "+lastdigit);
	}
}