<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
function switchBlock(id){
	var text = document.getElementsByClassName("texty");
		for (let i = 0; i < text.length; i++) {
		schovajtexty(text[i]);
		}
	document.getElementById(id.value).setAttribute("style","display: block");
}

function schovajtexty(schovanytext){
	schovanytext.setAttribute("style","display: none");
}
</script>
<!-- end Simple Custom CSS and JS -->
