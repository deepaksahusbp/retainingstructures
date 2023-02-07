class AreaOfTriangle{
	public static void main(String[] args){
		int base,height;
		float area;
		base=Integer.parseInt(args[0]);
		height=Integer.parseInt(args[1]);
		area=0.5f*base*height;
		System.out.println("Base Of Triangle = "+base);
		System.out.println("Height Of Triangle = "+height);
		System.out.println("Area Of Triangle = "+area);
		
	}
}