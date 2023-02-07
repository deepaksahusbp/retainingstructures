import java.util.Scanner;
class AddMatrix{
	public static void main(String[] args){
		Scanner sc = new Scanner(System.in);
		int[][] a,b,c;
		a = new int[3][3];
		System.out.print("Enter Elements Of First Matrix : ");
		for(int i=0;i<3;i++)
		for(int j=0;j<3;j++){
			a[i][j]=sc.nextInt();
		}
		b = new int[3][3];
		System.out.print("Enter Elements Of Second Matrix : ");
		for(int i=0;i<3;i++)
		for(int j=0;j<3;j++){
			b[i][j]=sc.nextInt();
		}
		c = new int[3][3];
		for(int i=0;i<3;i++)
		for(int j=0;j<3;j++){
			c[i][j] = a[i][j] + b[i][j];
		}
		System.out.println("Sum Of The Matrix = ");
		for(int i=0;i<3;i++){
			System.out.println();
			for(int j=0;j<3;j++){
				System.out.print(c[i][j]+" ");
			}			
		}
	}
}