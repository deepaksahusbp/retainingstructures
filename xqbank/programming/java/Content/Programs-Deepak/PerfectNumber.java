class PerfectNumber{
	public static void main(String[] args){
		int sum=0,number;
		number=Integer.parseInt(args[0]);
		System.out.println("Number Inputed = "+number);
		for(int i=1;i<number;i++){
			if(number%i==0)
			sum=sum+i;;
		}
		if(sum==number){
			System.out.println("It is a Perfect Number");
		}
		else{
			System.out.println("It is not a Perfect Number");	
		}
		
	}
}