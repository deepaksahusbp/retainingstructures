import java.util.Scanner;
class Student{
	private int roll,s1,s2,s3,total;
	private float percentage;
	private String name;
	void input(){
		Scanner sc = new Scanner(System.in);
		System.out.print("Enter Roll Number : ");
		roll=sc.nextInt();
		System.out.print("Enter Name : ");
		sc.nextLine();
		name = sc.nextLine();
		System.out.print("Enter Mark of Subject 1 : ");
		s1=sc.nextInt();
		System.out.print("Enter Mark of Subject 2 : ");
		s2=sc.nextInt();
		System.out.print("Enter Mark of Subject 3 : ");
		s3=sc.nextInt();
	}
	void calculate(){
		total = s1+s2+s3;
		percentage=total/3.0f;
	}
	void output(){
		System.out.println("Roll Number = "+roll);
		System.out.println("Enter Name = "+name);
		System.out.println("Mark of Subject 1 = "+s1);
		System.out.println("Mark of Subject 2 = "+s2);
		System.out.println("Mark of Subject 3 = "+s3);
		System.out.println("Total Marks = "+total);
		System.out.println("Percentage = "+percentage);
	}
}
class MainClass{
	public static void main(String[] args){
		Student obj = new Student();
		obj.input();
		obj.calculate();
		obj.output();
	}
}