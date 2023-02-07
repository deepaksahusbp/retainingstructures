class ReverseOfTheNumber1{
	public static void main(String[] args){
		int number,temp,reverse=0;
		number=Integer.parseInt(args[0]);
		System.out.println("Number Inputed = "+number);
		while(number!=0){
			temp=number%10;
			reverse=reverse*10+temp;
			number=number/10;
		}
		System.out.println("Reverse Of The Number = "+reverse);
	}
}