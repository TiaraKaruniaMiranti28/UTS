<!DOCTYPE html>
<html>
<head>
	<title>Latihan 1</title>
	<script type="text/javascript" src="jquery-3.4.1.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$(".sembunyi1").click(function() {$("#foto1").hide("slow") });
			$(".tampil1").click(function() {$("#foto1").show("slow") });
			$(".sembunyi2").click(function() {$("#foto2").hide("slow") });
			$(".tampil2").click(function() {$("#foto2").show("slow") });
			$(".sembunyi3").click(function() {$("#foto3").hide("slow") });
			$(".tampil3").click(function() {$("#foto3").show("slow") });
		});
	</script>
</head>
<body>
<button class="sembunyi1">sembunyikan</button>
<button class="tampil1">tampilkan</button>
<p><img id="foto1" src="1.jpg"></p>
<br>
<button class="sembunyi2">sembunyikan</button>
<button class="tampil2">tampilkan</button>
<p><img id="foto2" src="2.jpg"></p>
<br>
<button class="sembunyi3">sembunyikan</button>
<button class="tampil3">tampilkan</button>
<p><img id="foto3" src="3.jpg"></p>
</body>
</html>