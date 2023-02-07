class DisplayBig{
	public static void main(String[] args){
		int number1,number2;
		number1=Integer.parseInt(args[0]);
		number2=Integer.parseInt(args[1]);
		if(number1>number2){
			System.out.println("Bigger Number = "+number1);
		}
		else{
			System.out.println("Bigger Number = "+number2);
		}
	}
}