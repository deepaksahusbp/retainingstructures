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
class StudentArray
{
	public static void main(String[] args){
		StudentDetails ob[] = new StudentDetails[5];
		for(int i=0; i<5; i++){
			ob[i] = new StudentDetails();
		}
		for(int i=0; i<5; i++){
			ob[i].input();
		}
		for(int j=0; j<5; j++){
			ob[j].output();
		}
	}
}