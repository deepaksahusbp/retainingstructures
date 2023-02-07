class Factors{
	public static void main(String[] args){
		int number=Integer.parseInt(args[0]);
		System.out.println("Number Inputed = "+number);
		System.out.println("Factors are : ");
		for(int i=1;i<=number;i++){
			if(number%i==0)
			System.out.print(i+" ");
		}
	}
}