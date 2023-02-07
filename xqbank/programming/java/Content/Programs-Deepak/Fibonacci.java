import java.util.Scanner;
class Fibonacci{
	public static void main(String[] args){
		Scanner sc = new Scanner(System.in);
		int n,third,first=0,second=1;
		System.out.print("Enter Number of Elements : ");
		n = sc.nextInt();
		if(n<=2){
			if(n==1){
				System.out.print("0,");
			}
			else
				System.out.print("0,1,");
		}
		else{
			System.out.print("0,1,");
			for(int i=2;i<n;i++){
				third = first+second;
				System.out.print(third+",");
				first=second;
				second=third;
			}
		}
	}
}