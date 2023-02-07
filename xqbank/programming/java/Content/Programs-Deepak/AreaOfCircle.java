class AreaOfCircle{
	public static void main(String[] args){
		int radius;
		float area;
		radius=Integer.parseInt(args[0]);
		area=3.14f*radius*radius; //here f in 3.14f is for implicit type conversion of double 3.14 to float 3.14
		System.out.println("Radius Of Circle = "+radius);
		System.out.println("Area Of Circle = "+area);
	}
}