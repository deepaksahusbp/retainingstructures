class VotingEligibility{
	public static void main(String[] args){
		int age;
		age=Integer.parseInt(args[0]);
		System.out.println("Age Of The Candidate = "+age);
		if(age>=18){
			System.out.println("Yes . Eligible to vote.");
		}
		else{
			System.out.println("No. Not Eligible to vote.");
		}
	}
}