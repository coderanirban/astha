<?php
include "header.php";
include "sidebar.php";
?>

	<div class="main" style="background: url(assest/img/homebg.jpg); background-size: cover;">
		<div class="items">
			<div class="jak">
				<!-- <a href="#"><img class="cfr" src="assest/img/prest.png"></a>
				<a href="file:///C:/Users/ANIRBAN/OneDrive/Desktop/anirban/Ashwi%202.0/final/Mandir-list.html"><img
						class="cde" src="assest/img/temp.png"></a> -->
			</div>
			<img src="assest/img/om.gif" alt="omm image">
			<div class="inputs">
			<form action="mandir-list.php" method="post">
				<input type="text" name="search" id="search" placeholder="Search for Puja or Temple..." on>
				<button type="submit" name="submit" class="material-symbols-outlined search__icon" style="border: none;">
					search
				</button>
			</form>
			</div>
			<div class="cotesion">
				ॐ सर्वे सुखिनः भवन्तु, सर्वे सन्तु निरामयाः ।<br>
				सर्वे भद्राणि पश्यन्तु, मा कश्चिद्दुःखभाग्भवेत् ।<br>
				ॐ शान्तिः शान्तिः शान्तिः ॥
			</div>
		</div>
	</div>

</body>

<?php include "footer.php"; ?>

</html>