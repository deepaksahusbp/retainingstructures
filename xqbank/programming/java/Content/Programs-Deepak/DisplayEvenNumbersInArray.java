import java.util.Scanner;
class DisplayEvenNumbersInArray{
	public static void main(String[] args){
		Scanner sc = new Scanner(System.in);
		int[] a = new int[10];
		System.out.print("Enter 10 Numbers : ");
		for(int i=0;i<10;i++){
			a[i]=sc.nextInt();
		}
		System.out.println("Entered Even Numbers = ");
		for(int j=0;j<10;j++){
			if(a[j]%2==0)
				System.out.print(a[j]+",");
		}
	}
}