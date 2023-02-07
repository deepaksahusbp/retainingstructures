class SumOfFactors{
	public static void main(String[] args){
		int sum=0,number;
		number=Integer.parseInt(args[0]);
		System.out.println("Number Inputed = "+number);
		for(int i=1;i<=number;i++){
			if(number%i==0)
			sum=sum+i;
		}
		System.out.println("Sum of Factors = "+sum);
		
	}
}