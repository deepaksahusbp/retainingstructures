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
	public String returnName(){
		return this.name;
	}
}
class SearchByName
{
	public static void main(String[] args){
		StudentDetails ob[] = new StudentDetails[5];
		int flag=0;
		String nameofstudent;
		Scanner sc = new Scanner(System.in);
		for(int i=0; i<5; i++){
			ob[i] = new StudentDetails();
		}
		for(int i=0; i<5; i++){
			ob[i].input();
		}
		
		System.out.println("Enter Name of Student to search : ");
		nameofstudent=sc.nextLine();
		
		for(int j=0; j<5; j++){
			if(nameofstudent.equals(ob[j].returnName())){
				System.out.println("....Student Found....");
				ob[j].output();
				flag=1;
			}
		}
		if(flag==0){
			System.out.println("Error 404 .... Student Not Found ");
		}
	}
}