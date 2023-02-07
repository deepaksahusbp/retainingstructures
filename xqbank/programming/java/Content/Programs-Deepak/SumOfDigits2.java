import java.util.Scanner;
class SumOfDigits2{
	public static void main(String[] args){
		Scanner sc = new Scanner(System.in);
		int number,sum=0,temp;
		System.out.print("Enter a Number : ");
		number = sc.nextInt();
		System.out.println("Number Inputed = "+number);
		while(number!=0){
			temp=number%10;
			sum=sum+temp;
			number=number/10;
		}
		System.out.println("Sum Of Digits = "+sum);
	}
}