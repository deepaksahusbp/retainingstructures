var flag,heightofsoilretained, surcharge, lengthofbase, sbc, unitweightofsoil, angleofrepose, coefficientoffriction, gradeofconcrete, gradeofsteel;
var basethickness, H, depthoffoundation, B,soilheight,discretewalllength,topwidth;
var Q,Ka,w,w1,w2,w3,p1,p2,x1,x2,x3,x4,x5,eccentricity,pmax,pmin,udl,dc;
var counterdepth, counternoofbar, counters1,counters2,counters3,spacinginheel,spacingintoe,spacingintoedistribution,spacinginheeldistribution,spacinginwall,spacinginwalltemps1,spacinginwalltemps2;
var fosom,fossliding,ekbaar=0,status;
var dssc = [
	[0.28, 0.28, 0.29, 0.29, 0.29, 0.30],
	[0.35, 0.36, 0.36, 0.37, 0.37, 0.38],
	[0.46, 0.48, 0.49, 0.50, 0.50, 0.51],
	[0.54, 0.56, 0.57, 0.59, 0.59, 0.60],
	[0.60, 0.62, 0.64, 0.66, 0.67, 0.68],
	[0.64, 0.67, 0.70, 0.71, 0.73, 0.74],
	[0.68, 0.72, 0.74, 0.76, 0.78, 0.79],
	[0.71, 0.75, 0.78, 0.80, 0.82, 0.84],
	[0.71, 0.79, 0.82, 0.84, 0.86, 0.88],
	[0.71, 0.81, 0.85, 0.88, 0.90, 0.92],
	[0.71, 0.82, 0.88, 0.91, 0.93, 0.95],
	[0.71, 0.82, 0.90, 0.94, 0.96, 0.98],
	[0.71, 0.82, 0.92, 0.96, 0.99, 1.01]
];
var mss = [2.5,2.8,3.1,3.5,3.7,4.0];
var shear = [0,0,0,0,0,0];
function checkforshear(Vu,ast,type) {
	//alert(" In checkforshear function");
	var p,TAUv,TAUc,i,j,D;
	D = basethickness*1000;
	//alert("D in checkforshear = "+D);
	p = (100*ast)/(1000*D);
	if (gradeofconcrete == 15) {
		j = 0;
	}
	else if (gradeofconcrete == 20) {
		j = 1;
	}
	else if (gradeofconcrete == 25) {
		j = 2;
	}
	else if (gradeofconcrete == 30) {
		j = 3;
	}
	else if (gradeofconcrete == 35) {
		j = 4;
	}
	else if (gradeofconcrete >= 40) {
		j = 5;
	}

	if (p<=0.15) {
		i = 0;
		TAUc = dssc[i][j];
	}
	else if (p>0.15 && p<=0.25) {
		TAUc = interpolate1(0.15,dssc[0][j],0.25,dssc[1][j],p);
		//alert("TAUc = "+TAUc);
	}
	else if (p>0.25 && p<=0.50) {
		TAUc = interpolate1(0.25,dssc[1][j],0.50,dssc[2][j],p);
		//alert("TAUc = "+TAUc);
	}
	else if (p>0.50 && p<=0.75) {
		TAUc = interpolate1(0.50,dssc[2][j],0.75,dssc[3][j],p);
		//alert("TAUc = "+TAUc);
	}
	else if (p>0.75 && p<=1.00) {
		TAUc = interpolate1(0.75,dssc[3][j],1.00,dssc[4][j],p);
		//alert("TAUc = "+TAUc);
	}
	else if (p>1.00 && p<=1.25) {
		TAUc = interpolate1(1.00,dssc[4][j],1.25,dssc[5][j],p);
		//alert("TAUc = "+TAUc);
	}
	else if (p>1.25 && p<=1.50) {
		TAUc = interpolate1(1.25,dssc[5][j],1.50,dssc[6][j],p);
		//alert("TAUc = "+TAUc);
	}
	else if (p>1.50 && p<=1.75) {
		TAUc = interpolate1(1.50,dssc[6][j],1.75,dssc[7][j],p);
		//alert("TAUc = "+TAUc);
	}
	else if (p>1.75 && p<=2.00) {
		TAUc = interpolate1(1.75,dssc[7][j],2.00,dssc[8][j],p);
		//alert("TAUc = "+TAUc);
	}
	else if (p>2.00 && p<=2.25) {
		TAUc = interpolate1(2.00,dssc[8][j],2.25,dssc[9][j],p);
		//alert("TAUc = "+TAUc);
	}
	else if (p>2.25 && p<=2.50) {
		TAUc = interpolate1(2.25,dssc[9][j],2.50,dssc[10][j],p);
		//alert("TAUc = "+TAUc);
	}
	else if (p>2.50 && p<=2.75) {
		TAUc = interpolate1(2.50,dssc[10][j],2.75,dssc[11][j],p);
		//alert("TAUc = "+TAUc);
	}
	else if (p>2.75 && p<=3.00) {
		TAUc = interpolate1(2.75,dssc[11][j],3.00,dssc[12][j],p);
		//alert("TAUc = "+TAUc);
	}
	else if (p >= 3) {
		i = 12;
		TAUc = dssc[i][j];
	}
	TAUv = (Vu*1000)/(1000*D);
	//alert("overall depth = "+D);
	if (TAUv < TAUc && TAUc<mss[j]) {
		alert("Vu = "+Vu+" TAUv = "+TAUv+" N per mm sq.\n TAUc = "+TAUc+" N per mm sq.\nMaximum Shear Strength Of Concrete = "+mss[j]+" N per mm sq.\nTAUv < TAUc\nTAUc < TAUcMax\n Hence,"+type+" is Safe in shear");
		return 1;
	}
	else{
		alert(type+" is NOT safe in Shear");
		if (TAUc>mss[j]) {
			alert("Increase the Grade of Concrete");
		}
		else if(TAUv > (TAUc)){
			alert("Vu = "+Vu+" TAUv = "+TAUv+" N per mm sq.\n TAUc = "+TAUc+" N per mm sq.\nMaximum Shear Strength Of Concrete = "+mss[j]+" N per mm sq.\nTAUv > TAUc\nTAUc < TAUcMax\n Hence,"+type+" is NOT Safe in shear");
			//alert("Code for stirrups");
			basethickness = basethickness+0.05;
			if(flag == 0){
				findforcepressure();
				return 0;
			}
			else if(flag == 1){
				findforcepressure1();
				return 0;
			}
			//findforcepressure();
			//break;
			//return;
		}
	}
}
// function display1() {
// 	alert("display1 called");
// 	document.getElementById('ans1').value = heightofsoilretained;
// 	console.log("hello");
// 	console.log(heightofsoilretained);
// }
function assignvalues(c=0) {
	//alert("In assignvalues function");
	if (c==0) {
		flag = 0;
	}
	else if (c==1) {
		flag = 1;
	}
	else if(c==2){
		flag = 2;
		//alert("flag = "+flag);
		heightofsoilretained = document.getElementById('v1').value;
		sbc =  parseFloat(document.getElementById('v3').value);
		unitweightofsoil = parseFloat(document.getElementById('v4').value);
		angleofrepose = parseFloat(document.getElementById('v5').value);
		Q = parseFloat(document.getElementById('v6').value);
		gradeofconcrete = parseInt(document.getElementById('v7').value);
		topwidth = parseFloat(document.getElementById('v8').value);
		// alert("heightofsoilretained = "+heightofsoilretained+
		// 	"sbc = "+sbc+
		// 	"unitweightofsoil = "+unitweightofsoil+
		// 	"angleofrepose = "+angleofrepose+
		// 	"Q = "+Q+
		// 	"gradeofconcrete = "+gradeofconcrete+
		// 	"topwidth = "+topwidth);
			finddepthoffoundation();
		return;
	}
	//alert("flag's value = "+flag);
	// <?php
 //  		header("Location: http://www.example.com/");
	// ?>
	//header('Location: https://stackoverflow.com');
	//window.location.href = 'http://example.com';
	heightofsoilretained = document.getElementById('v1').value;
	surcharge = parseFloat(document.getElementById('v2').value);
	sbc =  parseFloat(document.getElementById('v3').value);
	unitweightofsoil = parseFloat(document.getElementById('v4').value);
	angleofrepose = parseFloat(document.getElementById('v5').value);
	coefficientoffriction = parseFloat(document.getElementById('v6').value);
	gradeofconcrete = parseInt(document.getElementById('v7').value);
	gradeofsteel = parseInt(document.getElementById('v8').value);
	//alert(heightofsoilretained);
	finddepthoffoundation();
	
}
function finddepthoffoundation() {
	//alert("In finddepthoffoundation function");
	//alert(angleofrepose);
	//alert(Math.sin(22*30/(7*180)));
	//alert((1-Math.sin(22*angleofrepose/1260)));
	Ka = (1-Math.sin(22*angleofrepose/1260))/(1+Math.sin(22*angleofrepose/1260));
	//alert(Ka);
	depthoffoundation=(sbc/unitweightofsoil)*((1-Math.sin(Math.PI*angleofrepose/180))/(1+Math.sin(Math.PI*angleofrepose/180)))*((1-Math.sin(Math.PI*angleofrepose/180))/(1+Math.sin(Math.PI*angleofrepose/180)));
	//alert(depthoffoundation);	
	depthoffoundation = depthoffoundation + 0.6;
	depthoffoundation = depthoffoundation.toFixed(2);
	depthoffoundation = roundit(depthoffoundation);
	//alert(depthoffoundation);
	if(flag == 0){
		finddimensions();
	}
	else if(flag == 1){
		finddimensions1();
	}
	else if (flag == 2) {
		finddimensions2();
	}
	
}
function finddimensions2() {
	//alert("In finddimensions2 function");
	//alert(depthoffoundation);
	//alert(heightofsoilretained);
	var z;
	H = parseFloat(heightofsoilretained) + parseFloat(depthoffoundation);
	w1 = H*topwidth*gradeofconcrete;
	p2 = 0.5*Ka*unitweightofsoil*H*H;
	p2 = p2.toFixed(3);
	z = (w1*topwidth/2) + (p2*H/3);
	B = (-1*topwidth + Math.sqrt(topwidth*topwidth + 4*(6*z/(H*gradeofconcrete)-2*topwidth*topwidth)))/2;	
	//alert("B = "+B);
	// w = 0.5*(topwidth+B)*H*gradeofconcrete;
	// w2 = w - w1;
	checkforsliding2();
	//toeprojection = toeprojection.toFixed(3);
	//alert("H = "+H+" B= "+B+" basethickness= "+basethickness+" toeprojection= "+toeprojection);
	//findforcepressure();
}
function finddimensions1() {
	//alert("In finddimensions1 function");
	H = parseFloat(heightofsoilretained) + parseFloat(depthoffoundation);
	B = 0.6*H;
	basethickness = H/30;
	//alert("h by thirty = "+basethickness);
	//basethickness = basethickness.toFixed(3);
	basethickness = roundit1(basethickness);
	if((basethickness/3) > (H/6)){
		toeprojection = basethickness/3;
	}
	else{
		toeprojection = H/6;

	}
	toeprojection = toeprojection.toFixed(3);
	discretewalllength = parseInt((0.8*Math.sqrt(H)+1.2*Math.sqrt(H))/2);
	findforcepressure1();

}
function finddimensions() {
	//alert("In finddimensions function");
	//alert(depthoffoundation);
	//alert(heightofsoilretained);
	H = parseFloat(heightofsoilretained) + parseFloat(depthoffoundation);
	B = 0.6*H;
	basethickness = 0.1*H;
	toeprojection = B/3;
	toeprojection = toeprojection.toFixed(3);
	//alert("H = "+H+" B= "+B+" basethickness= "+basethickness+" toeprojection= "+toeprojection);
	findforcepressure();
}
function findforcepressure() {
	//alert("In findforcepressure function");
	w1 = (basethickness)*(H-basethickness)*25;
	x1 = B - toeprojection - basethickness/2;
	w2 = (B*basethickness)*25;
	x2 = B/2;
	w3 = (H-basethickness+ surcharge)*(B - toeprojection - basethickness)*unitweightofsoil;
	x3 = (B - toeprojection - basethickness)/2;
	p1 = Ka*unitweightofsoil*surcharge*H;
	p1 = p1.toFixed(3);
	x4 = H/2;
	p2 = 0.5*(Ka*unitweightofsoil*H)*H;
	p2 = p2.toFixed(3);
	x5 = H/3;

	//alert("H = "+H+" B= "+B+" basethickness= "+basethickness+ "surcharge = "+surcharge+" toeprojection= "+toeprojection+"unitweightofsoil="+unitweightofsoil);
	//alert("p2 = "+p2+"x5="+x5);
	checkmiddlethird();
}
function findforcepressure1() {
	//alert("In findforcepressure1 function");
	w1 = (basethickness)*(H-basethickness)*25;
	x1 = B - toeprojection - basethickness/2;
	w2 = (B*basethickness)*25;
	x2 = B/2;
	w3 = (H-basethickness+ surcharge)*(B - toeprojection - basethickness)*unitweightofsoil;
	x3 = (B - toeprojection - basethickness)/2;
	p2 = 0.5*(Ka*unitweightofsoil*H)*H;
	p2 = p2.toFixed(3);
	x5 = H/3;
	checkmiddlethird1();
}
function checkmiddlethird2() {
	//alert("In checkmiddlethird2 function");
	x1 = (w1*topwidth + ((B - topwidth)/3 + topwidth)*w2)/w;
	var centroid,Bbythree,Btwobythree,Bbysix;
	centroid = (w*x1 + p2*(H/3))/(w);
	eccentricity = centroid - (B/2);
	eccentricity = Math.abs(eccentricity);
	Bbythree = B/3;
	Btwobythree = (2*B)/3;
	Bbysix = B/6;

	//alert(eccentricity+" - "+ Bbythree+" - "+Btwobythree);

	if (eccentricity < Bbysix) {
		alert("Eccentricity (in m) = "+eccentricity+"\nOne sixth of Base Slab (in m) = "+Bbysix+"\n"+eccentricity+" < "+Bbysix+"\nHence Safe");
	}
	else{
		B = B + 0.5;
		alert("Eccentricity = "+eccentricity+"\n It is unsafe \n Increasing basethickness by 0.5 m in next loop");
		checkforsliding2();
		return;
	}
	if ((centroid > Bbythree) && (centroid < Btwobythree)) {
		alert("Centroid is at = "+centroid+" m\n"+Btwobythree+" < "+centroid+" > "+Bbythree+"\nThus it satisfies the Middle Third Criteria");
	}
	else{
		B = B + 0.5;
		alert("Eccentricity = "+eccentricity+"\n It is unsafe \n Increasing basethickness by 0.5 m in next loop");
		checkforsliding2();
		return;
	}
	//alert(eccentricity);
	checkbearingpressure2();
}
function checkmiddlethird1() {
	//alert("In checkmiddlethird1 function");
	var centroid,Bbythree,Btwobythree,Bbysix;
	centroid = (w1*x1 + w2*x2 + w3*x3 + p2*x5)/(w1 + w2 + w3);
	eccentricity = centroid - (B/2);
	eccentricity = Math.abs(eccentricity);
	Bbythree = B/3;
	Btwobythree = (2*B)/3;
	Bbysix = B/6;

	//alert(eccentricity+" - "+ Bbythree+" - "+Btwobythree);

	if (eccentricity < Bbysix && ekbaar==1) {
		alert("Eccentricity (in m) = "+eccentricity+"\nOne sixth of Base Slab (in m) = "+Bbysix+"\n"+eccentricity+" < "+Bbysix+"\nHence Safe");
	}
	if ((centroid > Bbythree) && (centroid < Btwobythree) && ekbaar==1) {
		alert("Centroid is at = "+centroid+" m\n"+Btwobythree+" < "+centroid+" > "+Bbythree+"\nThus it satisfies the Middle Third Criteria");
	}
	//alert(eccentricity);
	checkoverturning1();
}
function checkmiddlethird() {
	//alert("In checkmiddlethird function");
	var centroid,Bbythree,Btwobythree,Bbysix;
	centroid = (w1*x1 + w2*x2 + w3*x3 + p1*x4 + p2*x5)/(w1 + w2 + w3);
	eccentricity = centroid - (B/2);
	eccentricity = Math.abs(eccentricity);
	Bbythree = B/3;
	Btwobythree = (2*B)/3;
	Bbysix = B/6;

	//alert(eccentricity+" - "+ Bbythree+" - "+Btwobythree);

	if (eccentricity < Bbysix && ekbaar==1) {
		alert("Eccentricity (in m) = "+eccentricity+"\nOne sixth of Base Slab (in m) = "+Bbysix+"\n"+eccentricity+" < "+Bbysix+"\nHence Safe");
	}
	if ((centroid > Bbythree) && (centroid < Btwobythree) && ekbaar==1) {
		alert("Centroid is at = "+centroid+" m\n"+Btwobythree+" < "+centroid+" > "+Bbythree+"\nThus it satisfies the Middle Third Criteria");
	}
	
	//alert(eccentricity);
	checkoverturning();
}
function checkoverturning1() {
	//alert("In checkoverturning1 function");
	var OM, SM;
	OM = p2*H/3;
	SM = (w1*(B-x1) + w2*(B-x2) + w3*(B-x3));
	fosom = SM/OM;
	fosom = fosom.toFixed(3);
	if (fosom > 1.55 && ekbaar==1) {
		alert("Factor Of Safety against Overturning = "+fosom+"\n"+fosom+" > 1.55 \n Hence Safe Against Overturning");
	}
	checkforsliding1();
}
function checkoverturning() {
	//alert("In checkoverturning function");
	var OM, SM;
	OM = p1*H/2 + p2*H/3;
	SM = (w1*(B-x1) + w2*(B-x2) + w3*(B-x3));
	fosom = SM/OM;
	fosom = fosom.toFixed(3);
	if (fosom > 1.55 && ekbaar==1) {
		//alert("safe against overturning");
		alert("Factor Of Safety against Overturning = "+fosom+"\n"+fosom+" > 1.55 \n Hence Safe Against Overturning");

	}
	checkforsliding();
}
function checkforsliding2() {
	//alert("In checkforsliding2 function");
	//w = w1 + w2;
	//var fossliding;
	w = 0.5*(topwidth+B)*H*gradeofconcrete;
	w2 = w - w1;
	coefficientoffriction = Math.tan(22*Q/1260);
	//alert("coefficientoffriction = "+coefficientoffriction);
	fossliding = (w*coefficientoffriction)/(p2);
	fossliding = fossliding.toFixed(3);
	//alert("fossliding = "+fossliding);
	if (fossliding>1.5) {
		alert("Factor Of Safety against Sliding = "+fossliding+"\n"+fossliding+" > 1.5 \n Hence Safe Against Sliding");
		//alert("safe against sliding");
	}
	else{
		alert("fossliding = "+fossliding+"\n It is unsafe \n Increasing basethickness by 0.5 m in next loop");
		B = B + 0.5;
		checkforsliding2();
		return;
	}
	//alert("fossliding = "+fossliding);
	//checkbearingpressure();
	checkmiddlethird2();
}
function checkforsliding1() {
	//alert("In checkforsliding1 function");
	w = w1 + w2 + w3;
	//var fossliding;
	fossliding = (w*coefficientoffriction)/(p2);
	fossliding = fossliding.toFixed(3);
	if (fossliding>1.55 && ekbaar==1) {
		alert("Factor Of Safety against Sliding = "+fossliding+"\n"+fossliding+" > 1.55 \n Hence Safe Against Sliding");
		//alert("safe against sliding");
	}
	else{
		//alert("Provide a Shear Key of Size "+basethickness+" mm x "+basethickness+" mm");
	}
	//alert("fossliding = "+fossliding);
	checkbearingpressure();
}
function checkforsliding() {
	//alert("In checkforsliding function");
	w = w1 + w2 + w3;
	var foss;
	//alert(w+" "+coefficientoffriction+" "+p1+" "+p2);
	foss = parseFloat(p1)+parseFloat(p2);
	fossliding = w/foss;
	//alert("foss = "+foss);
	fossliding = fossliding*coefficientoffriction;
	fossliding = fossliding.toFixed(3);
	if (fossliding>1.55 && ekbaar==1) {
		//alert("safe against sliding");
		alert("Factor Of Safety against Sliding = "+fossliding+"\n"+fossliding+" > 1.55 \n Hence Safe Against Sliding");
	}
	else{
		//alert("Provide a Shear Key of Size "+basethickness+" x "+basethickness);
	}
	//alert("fossliding = "+fossliding);
	checkbearingpressure();
}
function checkbearingpressure() {
	//alert("In checkbearingpressure function");
	pmax = (w/(1*B))*(1 + 6*eccentricity/B);
	pmin = (w/(1*B))*(1 - 6*eccentricity/B);
	//alert("pmax = "+pmax+" pmin = "+pmin);
	if (pmax > sbc) {
		alert("Unsafe against Bearing Pressure \n Allow "+ basethickness +" m increase in Toe-projection\nTrial Length Of Base = "+B+" m");
		//alert("Trial Length Of Base = "+B);
		B = B + basethickness;
		//alert("B before = "+B);
		//B = B.toFixed(3);
		//alert("B after = "+B);
		toeprojection = B/3;
		toeprojection = toeprojection.toFixed(3);
		if(flag == 0){
			findforcepressure();
		}
		else if(flag == 1){
			findforcepressure1();
		}
		//findforcepressure();
	}
	else{
		alert("Final Length Of Base = "+B+" m");
		//location.replace("https://www.w3schools.com");
		//window.location.href = "http://www.w3schools.com";
		//header('Location: https://stackoverflow.com');
		designofheel();
	}
	//alert("pmax = "+ pmax+"pmin = "+ pmin);
	
}
function checkbearingpressure2() {
	//alert("In checkbearingpressure2 function");
	pmax = (w/(1*B))*(1 + 6*eccentricity/B);
	pmin = (w/(1*B))*(1 - 6*eccentricity/B);
	//alert("pmax = "+pmax+" pmin = "+pmin);
	if (pmax > sbc) {
		alert("Unsafe against Bearing Pressure \n Allow "+ basethickness +" m increase in Toe-projection\nTrial Length Of Base = "+B+" m");
		//alert("Trial Length Of Base = "+B);
		B = B + 0.5;
		//alert("B before = "+B);
		//B = B.toFixed(3);
		//alert("B after = "+B);
		//toeprojection = B/3;
		//toeprojection = toeprojection.toFixed(3);		
		checkforsliding2();
	}
	else{
		B = roundit(B);
		alert("Final Length Of Base = "+B);
		postgravity();
	}
	//alert("pmax = "+ pmax+"pmin = "+ pmin);
	
}

function designofheel() {
	//alert("In designofheel function");
	var Vu,Mu,d,Ast,temp,temp1,netforce1,netforce2,depthprovided,s1;
	soilheight = H - basethickness + surcharge;
	udl = soilheight*unitweightofsoil + basethickness*25;
	//udl = udl + surcharge;
	//alert("udl = "+ udl);
	temp = B - toeprojection - basethickness;
	temp1 = interpolate(pmax,pmin,temp);
	//alert("temp1 = "+ temp1);
	netforce1 = udl - temp1;
	netforce2 = udl - pmin;
	lengthofbase = B - toeprojection - basethickness;
	lengthofbase = lengthofbase.toFixed(3);
	Mu = netforce1*lengthofbase*lengthofbase/2 + 0.5*(netforce2 - netforce1)*lengthofbase*(2/3)*lengthofbase;
	Mu = 1.5*Mu;
	Vu = 1.5*(udl - (netforce1 + netforce2)/2);
	d = Math.sqrt((Mu*1000000)/(0.138*gradeofconcrete*1000));
	//alert("vu = "+ Vu+ "netforce1 = "+netforce1+"netforce2 = "+netforce2);
	
	depthprovided = basethickness*1000;
	//alert("Depth of Heel required in mm = "+ d+" Depth Available = "+depthprovided);
	if (d < depthprovided) {
		d = depthprovided-50;
	}
	else{
		depthprovided = d + 50;
	}
	if (depthprovided <= (basethickness*1000)) {
		//alert(".....");
		depthprovided = basethickness*1000;
		d = basethickness*1000 - 50;
	}
	else{
		basethickness = depthprovided/1000;
		alert("Trial Failed \n We have to Redesign \nNew Basethickness = "+basethickness+" m");
	}
	//basethickness = depthprovided/1000;
	//alert("Depth Provided = "+depthprovided);
	//alert("Mu = "+ Mu);
	//alert("Small d before sending = "+d);
	Ast = areaofsteel(Mu,d);
	//alert("Ast required = "+Ast);
	//alert("Area Of Steel Required in Heel = "+Ast+" sq. mm");
	s1 = spacing(18,Ast);
	s1 = parseInt(s1);
	s1 = s1 - (s1%10);
	//alert("spacing in heel = "+s1);
	spacinginheel = s1;
	s1 = spacing(10,(0.0012*1*(basethickness+0.05)*1000000));
	//s1 = spacing(18,Ast);
	s1 = parseInt(s1);
	s1 = s1 - (s1%10);
	//alert("spacinginheeldistribution in heel = "+s1);
	spacinginheeldistribution = s1;
	//alert("Vu in Heel = "+Vu+"Mu in Heel = "+Mu);
	shear[0] = Vu;
	shear[1] = Mu;
	//checkforshear(Vu,Ast,(d+50));
	designoftoe();

}
function designoftoe() {
	//alert("In designoftoe function");
	//alert("in toe fun");
	var Vu,Mu,d,Ast,temp,temp1,netforce1,netforce2,depthprovided,s1;
	depthprovided = basethickness-0.05;
	dc = basethickness - 0.05;
	//alert(depthprovided);
	temp = B - toeprojection;
	temp1 = interpolate(pmax,pmin,temp);
	temp = B - toeprojection + depthprovided;
	temp2 = interpolate(pmax,pmin,temp);
	

	Vu = 1.5*((pmax+temp2)/2 - basethickness*gradeofconcrete)*(toeprojection - basethickness);
	Mu = 1.5*(0.5*toeprojection*((pmax-temp1-2*basethickness*gradeofconcrete)*(2/3)*toeprojection)+(temp1 - basethickness*gradeofconcrete)*toeprojection*toeprojection/2);
	d = Math.sqrt((Mu*1000000)/(0.138*gradeofconcrete*1000));
	//alert("vu = "+ Vu+ "netforce1 = "+netforce1+"netforce2 = "+netforce2);
	//alert("depth of base required for toe in mm = "+ d);
	depthprovided = basethickness*1000;
	
	if (d < depthprovided) {
		d = depthprovided - 50;
	}
	else{
		depthprovided = d + 50;
	}
	if (depthprovided <= (basethickness*1000)) {
		//alert(".....");
		depthprovided = basethickness*1000;
		d = basethickness*1000 - 50;
	}
	else{
		basethickness = depthprovided/1000;
		//alert("We have to redesign...new basethickness = "+basethickness);
		alert("Trial Failed \n We have to Redesign \nNew Basethickness = "+basethickness+" m");

	}
	//alert("depthprovided in toe = "+depthprovided);
	//alert("Mu = "+ Mu);
	Ast = areaofsteel(Mu,d);
	//alert("Area Of Steel Required in Toe = "+Ast+" sq. mm");
	//alert("Ast required = "+Ast);
	s1 = spacing(16,Ast);
	s1 = parseInt(s1);
	s1 = s1 - (s1%10);
	//alert("spacing in toe 0 = "+s1);
	spacingintoe = s1;
	//alert("spacing in toe 1 = "+s1);
	s1 = spacing(10,(0.0012*1*(basethickness+0.05)*1000000));
	//alert("spacing in toe 2 = "+s1);
	//s1 = spacing(18,Ast);
	s1 = parseInt(s1);
	s1 = s1 - (s1%10);
	//alert("spacingintoedistribution in heel = "+s1);
	spacingintoedistribution = s1;
	shear[2] = Vu;
	shear[3] = Mu;
	//alert("Vu in Toe = "+Vu+"Mu in toe = "+Mu);
	//checkforshear(Vu,Ast,(d+50));
	designofwall();
	//alert("Mu = "+ Mu);
}
function designofwall() {
	//alert("In designofwall function");
	var Vu,Mu,d,Ast,temp,temp1,netforce1,netforce2,depthprovided,s1,h;
	h = (H-basethickness);
	//alert("h = "+h);
	Mu = 1.5*((1/6)*Ka*unitweightofsoil*Math.pow(h,3)+0.5*Ka*unitweightofsoil*surcharge*Math.pow(h,2));
	Vu = 1.5*(0.5*Ka*unitweightofsoil*Math.pow(h,2)+Ka*unitweightofsoil*surcharge*h);
	//alert("Mu = "+Mu+"Vu = "+Vu);
	d = Math.sqrt((Mu*1000000)/(0.138*gradeofconcrete*1000));
	//alert("vu = "+ Vu+ "netforce1 = "+netforce1+"netforce2 = "+netforce2);
	//alert("effective thickness of wall at base in mm = "+ d);
	depthprovided = basethickness*1000;
	
	if (d < depthprovided) {
		d = depthprovided - 50;
	}
	else{
		depthprovided = d + 50;
	}
	if (depthprovided <= (basethickness*1000)) {
		//alert(".....");
		depthprovided = basethickness*1000;
		d = basethickness*1000 - 50;
	}
	else{
		basethickness = depthprovided/1000;
		basethickness = roundit1(basethickness);
		alert("We have to redesign. New Base & Wall thickness = "+basethickness+" m");
	}

	// if (depthprovided > (basethickness*1000)) {
	// 	alert("counterforts required");
	// }
	//basethickness = depthprovided/1000;
	//alert("depthprovided in wall base = "+depthprovided);
	//alert("Mu = "+ Mu);
	Ast = areaofsteel(Mu,d);
	//alert("Area Of Steel Required in Wall = "+Ast+" mm sq.");
	s1 = spacing(25,Ast);
	s1 = parseInt(s1);
	s1 = s1 - (s1%10);
	//alert("spacing in wall = "+s1);
	spacinginwall = s1;
	//alert("before checkforshear fun....");
	shear[4] = Vu;
	shear[5] = Mu;
	//alert("Vu in wall = "+Vu+"Mu in Wall = "+Mu);
	//checkforshear(Vu,Ast,(d+50));
	
	if (ekbaar == 0) {
		ekbaar = 1;
		//alert("Last check with final values...");
		if (flag == 0) {
			findforcepressure();
			return;
		}
		else if (flag == 1) {
			findforcepressure1();
			return;
		}
	}

	alert("Area Of Steel required in Heel = "+areaofsteel(shear[1],d)+" mm sq.\n"+
	"Area Of Steel required in Toe = "+areaofsteel(shear[3],d)+" mm sq.\n"+
	"Area Of Steel required in Stem = "+areaofsteel(shear[5],d)+" mm sq.");

	checkforshear(shear[0],areaofsteel(shear[1],d),"Heel");
	
	checkforshear(shear[4],areaofsteel(shear[5],d),"Stem");
	status = checkforshear(shear[2],areaofsteel(shear[3],d),"Toe");
	//alert("status = "+status);
	if (status == 0) {
		return;
	}

	
	//alert("before temperaturereinforcement fun...");
	temperaturereinforcement();
	
}	
function temperaturereinforcement() {
	//alert("In temperaturereinforcement function");
	var tsa,areaoftempsteel,n1,n2,s1,s2,noofbar;
	tsa = basethickness*(H-basethickness)*1000*1000;
	areaoftempsteel = 0.0012*tsa;
	noofbar = Math.ceil(areaoftempsteel/50); //assuming 8mm bars
	//alert("-----"+noofbar);
	n1 = Math.ceil((2/3)*noofbar);
	n2 = noofbar - n1;
	s1 = (H-basethickness)*1000/n1;
	s1 = parseInt(s1);
	s1 = s1 - (s1%10);
	s2 = (H-basethickness)*1000/n2;
	s2 = parseInt(s2);
	s2 = s2 - (s2%10);
	//alert("s1="+s1+"s2="+s2);
	spacinginwalltemps1 = s1;
	spacinginwalltemps2 = s2;
	// if (flag == 1) {
	// 	mainreinforcement();
	// }
	//alert("khatam");
	console.log(heightofsoilretained);
	//alert("console dekh");
	//var check = <?php echo 35; ?>;
	//alert(check);
	//<?php session_start(); $_SESSION["HOSR"]?> = 5;
	// var check = <?php
	// $_SESSION["HOSR"]?>
	//alert(check);
	//alert(<?php	echo $_SESSION["HOSR"];?>);
	
	//console.log(HOSR);
	//$.post("result1.php", {heightofsoilretained:heightofsoilretained});
	if (flag == 0) {
		//alert("before post canti");
		postcantilever();
	}
	else if (flag == 1) {
		mainreinforcement();
	} 

	

}
function mainreinforcement() {
	//alert("In mainreinforcement function");
	var s1,Ast,availableD,depthprovided,lateralpressure,netdownwardpressureatc;
	var netdownwardpressureatb,temp,lateralpressureatf,SFF1,BM;
	netdownwardpressureatc = (H - basethickness)*unitweightofsoil + basethickness*25 - pmin;
	netdownwardpressureatc*=discretewalllength;
	temp = interpolate(pmax,pmin,(B - toeprojection - basethickness));
	netdownwardpressureatb = (H - basethickness)*unitweightofsoil + basethickness*25 - temp;
	netdownwardpressureatb*=discretewalllength;
	lateralpressureatf = Ka*unitweightofsoil*heightofsoilretained*discretewalllength;
	SFF1 = 0.5*heightofsoilretained*lateralpressureatf;
	BM = SFF1*heightofsoilretained/3;
	d = Math.sqrt((BM*1000000)/(0.138*gradeofconcrete*1000));
	depthprovided = d + 60;
	counterdepth = depthprovided;
	counterdepth = counterdepth.toFixed(3);
	//alert("depthprovided = "+counterdepth);
	Q = Math.atan((B - toeprojection - basethickness)/(H - basethickness));
	Q = (180/Math.PI)*Q;
	Q = Q.toFixed(3);
	availableD = heightofsoilretained*Math.sin(Math.atan((B - toeprojection - basethickness)/(H - basethickness)));
	//alert("D="+depthprovided+"availableD="+availableD);
	Ast = areaofsteel(BM,(availableD*1000 - 60));
	s1 = spacing(16,Ast);
	s1 = parseInt(s1);
	s1 = s1 - (s1%10);
	counters1 = s1;
	//alert("counters1 = "+counters1);
	counternoofbar = Math.ceil(Ast/((Math.PI/4)*16*16));

	//alert("s1 = "+s1+"noofbar = "+counternoofbar);
	designofconnection();
}
function designofconnection() {
	//alert("in designofconnection function");
	var lateralpressureatc,Ast1,Ast2,T1,T2,s1,s2,verticaldownwardforce;
	lateralpressureatc = Ka*unitweightofsoil*(H - basethickness)*discretewalllength;
	T1 = lateralpressureatc;
	
	Ast1 = (T1*1000)/(0.87*gradeofsteel);
	s1 = spacing(8,Ast1);
	s1 = parseInt(s1);
	s1 = s1 - (s1%10);
	//alert();
	verticaldownwardforce = unitweightofsoil*(H - basethickness)*discretewalllength;
	T2 = verticaldownwardforce;
	
	Ast2 = (T2*1000)/(0.87*gradeofsteel);
	s2 = spacing(8,Ast2);
	s2 = parseInt(s2);
	s2 = s2 - (s2%10);
	alert("Maximum Tension T1 due to Lateral Force = "+T1+" kN \nAst1 required = "+Ast1+" mm sq.\n"+
		"Maximum Tension T2 due to Vertical Force = "+T2+" kN \nAst2 required = "+Ast2+" mm sq.");
	counters2 = s1;
	counters3 = s2;
	//alert("connection s1 = "+ s1 +"s2 = "+s2);
	//alert("basethickness="+basethickness);
	//alert("before postcantilever");
	postcantilever();
}
function postcantilever() {
	//alert("In postcantilever function");
	var t1,t2,t3,t4,t5;
	var emps = [];
	var emp1 = {};
	t1 = Ka*unitweightofsoil*surcharge*H;
	t2 = Ka*unitweightofsoil*H;
	t1 = t1.toFixed(3);
	t2 = t2.toFixed(3);
	//alert("aur batao");
	emp1.flag = flag;
	//alert("flag "+flag);
	emp1.h = heightofsoilretained;
	emp1.sbc = sbc;
	emp1.s = surcharge;
	emp1.uw = unitweightofsoil;
	emp1.aor = angleofrepose;
	emp1.mu = coefficientoffriction;
	emp1.gc = gradeofconcrete;
	emp1.gs = gradeofsteel;
	emp1.Df = depthoffoundation;
	emp1.Lb = B;
	//alert(flag+" "+sbc+" "+unitweightofsoil+" "+angleofrepose+" "+coefficientoffriction+" "+gradeofconcrete+" "+gradeofsteel);
	//alert("sab thik to...");
	emp1.Tp = toeprojection;
	emp1.SW = basethickness*1000;
	emp1.Lh = lengthofbase;
	emp1.LF1 = t1;
	emp1.LF2 = t2;
	emp1.p1 = p1;
	emp1.p2 = p2;
	//alert("sab thik to...2");
	emp1.udl = udl;
	emp1.pmax = pmax.toFixed(3);
	emp1.pmin = pmin.toFixed(3);
	//alert("sab thik to...3");
	t3 = interpolate(pmax,pmin,(B - toeprojection));
	emp1.pb = t3.toFixed(3);
	t4 = interpolate(pmax,pmin,(B - toeprojection - basethickness));
	emp1.pc = t4.toFixed(3);
	t5 = interpolate(pmax,pmin,(B - toeprojection + basethickness - 0.05));
	emp1.pcritical = t5.toFixed(3);
	//alert(t1+" "+t2+" "+t3+" "+t4+" "+t5);
	emp1.a = basethickness*1000;
	dc = basethickness - 0.05;
	emp1.d = dc*1000;
	emp1.fossliding = fossliding;
	emp1.fosom = fosom;

	emp1.s1 = spacinginheeldistribution;
	emp1.s2 = spacinginwalltemps2;
	emp1.s3 = spacinginwalltemps1;
	emp1.s4 = spacinginwall;
	emp1.s5 = spacinginheel;
	emp1.s6 = spacingintoe;
	emp1.s7 = spacingintoedistribution;

	emp1.dwl = discretewalllength;
	emp1.counterdepth = counterdepth;
	emp1.cs1 = counters1;
	emp1.counternoofbar = counternoofbar;
	emp1.cs2 = counters2;
	emp1.cs3 = counters3;
	emp1.q = Q;
	//alert("before push");
	emps.push(emp1);
	//alert("push");
	//t2 = 153;
	//console.log(t1,t2);
	console.log(emps);
	//alert("console dekh fir se");
	$.ajax({
		url:"requestserver.php",
		method: "post",
		data: { emps : JSON.stringify( emps ) },
		success: function(res) {
			console.log(res);
		}
	})
	alert("Posting Results in Server.");
}
function postgravity() {
	//alert("In postcantilever function");
	var t1,t2,t3,t4,t5;
	var emps = [];
	var emp1 = {};
	//t1 = Ka*unitweightofsoil*surcharge*H;
	t2 = Ka*unitweightofsoil*H;
	//t1 = t1.toFixed(3);
	t2 = t2.toFixed(3);
	//alert("aur batao");
	emp1.flag = flag;
	//alert("flag "+flag);
	emp1.h = heightofsoilretained;
	emp1.sbc = sbc;
	emp1.s = topwidth;
	emp1.uw = unitweightofsoil;
	emp1.aor = angleofrepose;
	emp1.q = Q;
	emp1.gc = gradeofconcrete;
	//emp1.gs = gradeofsteel;
	emp1.Df = depthoffoundation;
	emp1.Lb = B;
	emp1.LF2 = t2;
	//emp1.p1 = p1;
	emp1.p2 = p2;
	//alert("sab thik to...2");
	//emp1.udl = udl;
	emp1.pmax = pmax.toFixed(3);
	emp1.pmin = pmin.toFixed(3);
	emp1.fossliding = fossliding;
	
	emps.push(emp1);
	
	console.log(emps);
	//alert("console dekh fir se");
	$.ajax({
		url:"requestserver1.php",
		method: "post",
		data: { emps : JSON.stringify( emps ) },
		success: function(res) {
			console.log(res);
		}
	})
	alert("Posting Results in Server.");
}

function spacing(dia,ast) {
	return(1000*((Math.PI)/4)*dia*dia/ast);
}
function areaofsteel(M,d) {
	return((0.5*gradeofconcrete/gradeofsteel)*(1-Math.sqrt(1 - (4.6*M*1000000)/(gradeofconcrete*1000*d*d)))*1000*d);
}
function interpolate(ul,ll,x) {
	return(ll + ((ul - ll)/(B))*x);

}
function interpolate1(x1,y1,x2,y2,x) {
	//alert(x1+"---->"+y1+"    "+x2+"---->"+y2+"   "+x+"---->"+(y1 + ((y2 - y1)/(x2 - x1))*(x-x1)));
	return(y1 + ((y2 - y1)/(x2 - x1))*(x-x1));

}
function roundit(arg1) {
	var temp,temp1;
	temp = parseInt(arg1*100);
	//alert(temp);
	temp1 = temp%10;
	//alert("last digit = "+temp1);
	if (temp1>0 && temp1<5) {
		temp = temp - temp1 + 5;
		//alert("new temp  = "+temp);
		return(temp/100);
	} 
	else if(temp1>5 && temp1<9){
		temp = temp - temp1 + 10;
		//alert("new temp  = "+temp);
		return(temp/100);
	}
	else{
		return(temp/100);
	}
}
function roundit1(arg1) {
	var temp,temp1;
	temp = parseInt(arg1*1000);
	//alert(temp);
	temp1 = temp%10;
	//alert("last digit = "+temp1);
	if (temp1>0 && temp1<5) {
		temp = temp - temp1 + 5;
		//alert("new temp  = "+temp);
		return(temp/1000);
	} 
	else if(temp1>5 && temp1<9){
		temp = temp - temp1 + 10;
		//alert("5-9 new temp  = "+temp);
		return(temp/1000);
	}
	else{
		return(temp/1000);
	}
}