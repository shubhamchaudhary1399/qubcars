

var fleet_btn = document.querySelectorAll('.f-tab');

for( var i = 0; i< fleet_btn.length; i++){
	fleet_btn[i].addEventListener("click",function(){
		fleet_btn[0].classList.remove("f-tab-active");
		fleet_btn[1].classList.remove("f-tab-active");
		fleet_btn[2].classList.remove("f-tab-active");
		this.classList.add("f-tab-active");
	});
}

function fleetChange(num){
	var icons = document.getElementsByClassName("fleet-options");
	icons[0].classList.remove("change");
	icons[1].classList.remove("change");
	icons[2].classList.remove("change");
	if(num == 1)
	{
		var fleet_icon = document.querySelector("#city-taxi");
		fleet_icon.classList.add("change");
	}
	else if(num == 2)
	{
		var fleet_icon = document.querySelector("#outstation");
		fleet_icon.classList.add("change");
	}
	else{
		var fleet_icon = document.querySelector("#rentals");
		fleet_icon.classList.add("change");
	}
	
}