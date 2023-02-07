class PrimeComposite{
	public static void main(String[] args){
		int count=0,number;
		number=Integer.parseInt(args[0]);
		System.out.println("Number Inputed = "+number);
		for(int i=2;i<number;i++){
			if(number%i==0)
			count++;
		}
		if(count==0){
			System.out.println("It is a Prime Number");
		}
		else{
			System.out.println("It is not a Composite Number");	
		}
		
	}
}