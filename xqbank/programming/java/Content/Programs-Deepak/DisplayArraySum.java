import java.util.Scanner;
class DisplayArraySum{
	public static void main(String[] args){
		Scanner sc = new Scanner(System.in);
		int[] a = new int[10];
		int sum = 0;
		System.out.print("Enter 10 Numbers : ");
		for(int i=0;i<10;i++){
			a[i]=sc.nextInt();
		}
		for(int j=0;j<10;j++){
			sum+=a[j];
		}
		System.out.println("Sum Of Ten Numbers = "+sum);
	}
}