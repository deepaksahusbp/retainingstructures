import java.util.Scanner;
class DisplayPrimeNumbersInArray{
	public static void main(String[] args){
		Scanner sc = new Scanner(System.in);
		int[] a = new int[10];
		int count,number;
		System.out.print("Enter 10 Numbers : ");
		for(int i=0;i<10;i++){
			a[i]=sc.nextInt();
		}
		System.out.println("Entered Prime Numbers = ");
		for(int j=0;j<10;j++){
			number=a[j];
			count=0;
			for(int i=2;i<number;i++){
				if(number%i==0)
				count++;
			}
			if(count==0){
				System.out.print(a[j]+",");
			}
		}
	}
}