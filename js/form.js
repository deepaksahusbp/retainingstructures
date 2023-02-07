var menuToggle = document.getElementById("menu-toggle");
var formgroups = document.querySelectorAll(".form-group");
var sbc = document.getElementById("sbc");

menuToggle.addEventListener("click",function(){
	// formgroups.forEach(function(formgroup){
	// 	formgroup.classList.toggle("col-xs-12");
	// 	formgroup.classList.toggle("col-xs-8");
	// });
	// formgroup.classList.toggle("col-xs-12");
	// formgroup.classList.add("col-xs-2");
	// console.log("hello");
	sbc.classList.toggle("col-xs-12");
	sbc.classList.toggle("col-xs-8");
});
