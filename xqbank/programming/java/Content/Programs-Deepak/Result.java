class Result{
	public static void main(String args[]){
		int roll,mark1,mark2,mark3,total;
		String name;
		float percentage;
		roll=Integer.parseInt(args[0]);
		name=args[1];
		mark1=Integer.parseInt(args[2]);
		mark2=Integer.parseInt(args[3]);
		mark3=Integer.parseInt(args[4]);
		total=mark1+mark2+mark3;
		percentage=total/3.0f;
		System.out.println("Roll Number = "+roll);
		System.out.println("Name = "+name);
		System.out.println("Mark in Subject 1 = "+mark1);
		System.out.println("Mark in Subject 2 = "+mark2);
		System.out.println("Mark in Subject 3 = "+mark3);
		System.out.println("Total Mark = "+total);
		System.out.println("Percentage = "+percentage);		
	}
}