class DisplayBigAmongThree{
	public static void main(String[] args){
		int number1,number2,number3,big;
		number1=Integer.parseInt(args[0]);
		number2=Integer.parseInt(args[1]);
		number3=Integer.parseInt(args[2]);
		if(number1>number2){
			big=number1;
		}
		else{
			big=number2;
		}
		if(number3>big){
			big=number3;
		}
		System.out.println("Biggest Number = "+big);
	}
}