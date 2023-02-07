import java.util.Scanner;
class DisplayNineNumbers{
	public static void main(String[] args){
		Scanner sc = new Scanner(System.in);
		int[] a = new int[9];
		System.out.print("Enter 9 Numbers : ");
		for(int i=0;i<9;i++){
			a[i]=sc.nextInt();
		}
		System.out.println("You Have Entered : ");
		for(int j=0;j<9;j++){
			System.out.print(a[j]+",");
		}
	}
}