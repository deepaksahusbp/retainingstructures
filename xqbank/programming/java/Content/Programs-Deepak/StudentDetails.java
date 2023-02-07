import java.util.Scanner;
import java.io.*;
class StudentDetails{
	public static void main(String[] args){
		Scanner sc = new Scanner(System.in);
		int roll;
		char ch;
		String name;
		System.out.print("Enter Roll Number : ");
		roll=sc.nextInt();
		System.out.print("Enter Name : ");
		sc.nextLine();
		name=sc.nextLine();//forFlushing
		System.out.println("Roll Number = "+roll);
		System.out.println("Name = "+name);
	}	
}