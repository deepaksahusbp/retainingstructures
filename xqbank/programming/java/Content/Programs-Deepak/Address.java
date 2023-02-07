class Address{
	public static void main(String[] args){
		String name,father,lane,city,state,country,pincode;
		name=args[0];
		father=args[1];
		lane=args[2];
		city=args[3];
		state=args[4];
		country=args[5];
		pincode=args[6];
		System.out.println("To \n"+name+"\nc/o "+father);
		System.out.println("At - "+lane+" "+city+" "+state+" "+country+" - "+pincode);
	}
}