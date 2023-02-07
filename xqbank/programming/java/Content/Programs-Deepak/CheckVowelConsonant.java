class CheckVowelConsonant{
	public static void main(char[] args){
		char ch;
		int flag=0;
		ch=args[0];
		if(ch=='A'||ch=='E'||ch=='I'||ch=='O'||ch=='U'||ch=='a'||ch=='e'||ch=='i'||ch=='o'||ch=='u'){
			flag=1;
		}
		if(flag==0){
			System.out.println("The Character is a consonant");
		}
		else{
			System.out.println("The Character is a Vowel");
			
		}
	}
}