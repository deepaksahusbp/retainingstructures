import java.util.Scanner;
class StudentDetails{
	private int roll;
	private String name;
	public void input(){
		Scanner sc = new Scanner(System.in);
		System.out.println("Enter Roll Number : ");
		roll=sc.nextInt();
		System.out.println("Enter Name : ");
		sc.nextLine();//forFlushing
		name=sc.nextLine();
	}
	public void output(){
		System.out.println("Roll = "+roll);
		System.out.println("Name = "+name);
	}
}
class Student1
{
	public static void main(String[] args){
		StudentDetails ob = new StudentDetails();
		ob.input();
		ob.output();
	}
}