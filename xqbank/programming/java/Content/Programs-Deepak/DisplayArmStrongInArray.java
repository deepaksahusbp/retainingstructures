import java.util.Scanner;
class DisplayArmStrongInArray{
	public static void main(String[] args){
		Scanner sc = new Scanner(System.in);
		int[] a = new int[10];
		int sum,product,number,temp;
		System.out.print("Enter 10 Numbers : ");
		for(int i=0;i<10;i++){
			a[i]=sc.nextInt();
		}
		System.out.println("Entered ArmStrong Numbers Are = ");
		for(int j=0;j<10;j++){
			number=a[j];
			sum=0;
				while(number!=0){
					temp=number%10;
					product=temp*temp*temp;
					sum=sum+product;
					number=number/10;
				}
			if(a[j]==sum){
				System.out.print(a[j]+",");
			}
		}
	}
}

