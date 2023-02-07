class SumOfDigits1{
	public static void main(String[] args){
		int number,sum=0,temp;
		number=Integer.parseInt(args[0]);
		System.out.println("Number Inputed = "+number);
		while(number!=0){
			temp=number%10;
			sum=sum+temp;
			number=number/10;
		}
		System.out.println("Sum Of Digits = "+sum);
	}
}