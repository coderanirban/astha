<script>
	let sidebar = "false";
	function opensidebar() {
		if (sidebar == "true") {
			document.querySelector(".body1").style.width = "0px";
			document.querySelector(".con").innerHTML = "&Congruent;"
			document.querySelector(".main").style.width = "100%"
			sidebar = "false";
		}
		else {
			document.querySelector(".body1").style.width = "245px";
			document.querySelector(".con").innerHTML = "&Cross;"
			document.querySelector(".main").style.width = "83%"
			sidebar = "true";
		}
	}


	let menu2 = "show";
	function showpujas1() {
		if (menu2 == "show") {
			document.querySelector(".Puja1").style.display = "flex";
			menu2 = "hide";

		}
		else {
			document.querySelector(".Puja1").style.display = "none";
			menu2 = "show";
		}
	}



	function showtemples1() {
		if (menu2 == "hide") {
			menu2 = "show";
			document.querySelector(".Temple1").style.display = "flex";

		}
		else {
			menu2 = "hide";
			document.querySelector(".Temple1").style.display = "none";
		}
	}

</script>