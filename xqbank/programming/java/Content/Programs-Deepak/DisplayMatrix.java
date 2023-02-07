import java.util.Scanner;
class DisplayMatrix{
	public static void main(String[] args){
		Scanner sc = new Scanner(System.in);
		int[][] a = new int[3][3];
		System.out.print("Enter 9 Numbers : ");
		for(int i=0;i<3;i++)
		for(int j=0;j<3;j++){
			a[i][j]=sc.nextInt();
		}
		System.out.println("You Have Entered : ");
		for(int i=0;i<3;i++){
			System.out.println();
			for(int j=0;j<3;j++){
				System.out.print(a[i][j]+" ");
			}			
		}
	}
}