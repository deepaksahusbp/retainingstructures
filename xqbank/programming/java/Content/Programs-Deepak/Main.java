import java.util.Scanner;
class StudentDetails{
	int roll;
	String name;
	public void inputoutput(){
		Scanner sc = new Scanner(System.in);
		System.out.println("Enter Roll Number : ");
		roll=sc.nextInt();
		System.out.println("Enter Name : ");
		sc.nextLine();//forFlushing
		name=sc.nextLine();
		System.out.println("Roll = "+roll);
		System.out.println("Name = "+name);
	}
}
class Main{
	public static void main(String[] args){
		StudentDetails ob = new StudentDetails();
		ob.inputoutput();
	}
}