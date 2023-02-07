import java.util.Scanner;
class ArmStrongNumber{
	public static void main(String[] args){
		Scanner sc = new Scanner(System.in);
		int number,number1,sum=0,temp,product=1;
		System.out.print("Enter a Number : ");
		number = sc.nextInt();
		System.out.println("Number Inputed = "+number);
		number1=number;
		while(number!=0){
			temp=number%10;
			product=temp*temp*temp;
			sum=sum+product;
			number=number/10;
		}
		if(number1==sum){
			System.out.println("The number inputed is ArmStrong Number");
		}
		else{
			System.out.println("The number inputed is NOT a ArmStrong Number");
		}
	}
}