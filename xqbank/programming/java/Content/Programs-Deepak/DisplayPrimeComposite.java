class DisplayPrimeComposite{
	public static void main(String[] args){
		int count,number;
		for(int j=10;j<=20;j++){
			number=j;
			count=0;
			for(int i=2;i<number;i++){
			if(number%i==0)
			count++;
			}
			if(count==0){
				System.out.print(number+" ");
			}
		}
		
	}
}