<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<!--	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<style>
body, html {
    height: 100%;
	background-color: #000;
	margin: 0;
}

.parallax {
    height: 70%; 
	filter: alpha(opacity=80);
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
.parallaxcontainer {
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
.img_01 {  background-image: url('element_001.jpg'); }
.img_02 {  background-image: url('element_002.jpg'); }
.img_03 {  background-image: url('element_003.jpg'); }
.img_04 {  background-image: url('element_004.jpg'); }

.section_001 {  background-image: url('001.jpg'); }
.section_002 {  background-image: url('002.jpg'); }
.section_003 {  background-image: url('003.jpg'); }
.section_004 {  background-image: url('004.jpg'); }
.section_005 {  background-image: url('005.jpg'); }
.section_006 {  background-image: url('006.jpg'); }
.section_007 {  background-image: url('007.jpg'); }
.section_008 {  background-image: url('008.jpg'); }
.section_009 {  background-image: url('009.jpg'); }
.section_010 {  background-image: url('010.jpg'); }

/* Turn off parallax scrolling for tablets and phones. Increase the pixels if needed */
@media only screen and (max-device-width: 1024px) {
    .parallax .parallaxcontainer{
        background-attachment: scroll;
    }
}

.container {
	width: 100%;
	padding-top: 100px;
	padding-bottom: 100px;
	color: #fff;
	text-align: center;
}

#box1 {
	height: 100%;
	opacity: 0.4;
}

h1 p {
	z-index: 1;
}
</style>
<script>
	$( document ).ready(function() {
		$(function() {
			$('.parallax').each(function() {
				var $obj = $(this);

				$(window).scroll(function() {
					var offset = $obj.offset();
					var yPos = -($(window).scrollTop() - offset.top) / $obj.data('speed');
					var bgpos = '50% ' + yPos + 'px';
					$obj.css('background-position', bgpos);
				});
			});
		});
	});
</script>
</head>
<body>

<!-- PRIMEIRA DIV INICIAL, COM FOTO DA E UM PEQUENO MENU -->
<div id="box1" class="parallax section_008" data-speed="5">
</div>
<div class="container" style="background: #b56258;">
	<h1>Magia e Oraculos</h1>
	<p>Escola de Magia e Oraculismo cituada na zona norte do Rio de Janeiro.</p>
	<p>É um centro de capacitação para qualquer um que deseja adquirir habilidades paranormais no Brasil todo. Venha estudar conosco.</p>
</div>

<!-- A ESCOLA -->
<div class="parallax section_009" data-speed="10"></div>
<div class="container" style="background: #000000;">
	<h1>A Escola</h1>
	<p>Nossa escola conta com uma maravilhosa estrutura para atender a todas as necessidades de estudo.</p>
	<p>Para melhor absorver os ensinamentos e praticar, sempre estamos o mais perto possível da natureza.</p>
</div>

<!--MISSÃO-->
<div class="parallax section_003" data-speed="15"></div>
<div class="container" style="background: #5a3518;">
	<h1>MISSÃO</h1>
</div>

<!--QUEM SOMOS-->
<div class="parallax section_004" data-speed="10"></div>
<div class="container" style="background: #161b04;">
	<h1>QUEM SOMOS</h1>
</div>

<!--AGENDA-->
<div class="parallax section_005" data-speed="15"></div>
<div class="container" style="background: #8a3b1c;">
	<h1>AGENDA</h1>
</div>

<!--CURSOS-->
<div class="parallax section_007" data-speed="10"></div>
<div class="container" style="background: #3f3631;">
	<h1>CURSOS</h1>
</div>

<!--RELACIONAMENTOS-->
<div class="parallax section_001" data-speed="10"></div>
<div class="container" style="background: #cf6a1c;">
	<h1>RELACIONAMENTOS</h1>
</div>

<!--REDES SOCIAIS-->
<div class="parallax section_002" data-speed="10"></div>
<div class="container" style="background: #3b2b36;">
	<h1>REDES SOCIAIS</h1>
</div>

<!--CONTATO-->
<div class="parallax section_010" data-speed="10"></div>
<div class="container" style="background: #0e0800;">
	<h1>CONTATO</h1>
</div>

</body>
</html>
