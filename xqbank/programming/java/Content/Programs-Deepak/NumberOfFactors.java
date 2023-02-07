class NumberOfFactors{
	public static void main(String[] args){
		int count=0,number;
		number=Integer.parseInt(args[0]);
		System.out.println("Number Inputed = "+number);
		for(int i=1;i<=number;i++){
			if(number%i==0)
			count++;
		}
		System.out.println("Numbers of Factors = "+count);
		
	}
}