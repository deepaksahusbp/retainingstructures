class Integers{
	public static void main(String[] args){
		int number;
		number=Integer.parseInt(args[0]);
		if(number>0){
			System.out.println("Positive Number");
		}
		else if(number<0){
			System.out.println("Negative Number");
		}
		else{
			System.out.println("Zero is neither positive nor negative.");
		}
	}
}