<?php
/**
/** Personalizar Dropdown com CSS.


* @Author Quebrando a Cabeça
* @Author URL http://quebrandoacabeca.com
* @Post URL http://quebrandoacabeca.com/personalizar-dropdown-com-css/
*/?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Personalizar dropdown com CSS</title>

<style type="text/css">
.conteudo {
	width:960px;
	text-align:justify;
	margin:0 auto;
	
}
h1 { text-align:center }

.rodape {
	width:940px;
	margin:0 auto;
	height:30px;
	line-height:30px;
	color:#FFF;
	font-weight:bold;
	background-color:#000;
	padding:0 10px;
}


.dropdown {
	width:200px;  /*Tamanho final do select*/
	overflow:hidden; /*Oculta conteúdo que passar do tamanho do width*/
}

.dropdown select {

      border: 0 !important;  /*Remove bordas*/
      -webkit-appearance: none;  /*Remove estilo padrão do Chrome*/
      -moz-appearance: none; /* Remove estilo padrão do FireFox*/
      background: url("https://cdn4.iconfinder.com/data/icons/cc_mono_icon_set/blacks/16x16/br_down.png") no-repeat scroll 88% center #eee;  /* Imagem de BG*/
      background-position: 88% center;  /*Posição da imagem do background*/
      width: 220px; /* tamanho do select, maior que o tamanho do width da classe dropdown */
	  height:25px; /* altura do select*/
      text-indent: 0.01px; /* Remove seta padrão do FireFox */
      text-overflow: "";  /* Remove seta padrão do FireFox */
	  -webkit-box-shadow: 0 2px 10px 0 rgba(50, 50, 50, 0.75) inset; /* sombras internas do select para Chrome*/
	  -moz-box-shadow: 0 2px 10px 0 rgba(50, 50, 50, 0.75) inset; /* sombras internas do select* para FireFox*/
	  box-shadow: 0 2px 10px 0 rgba(50, 50, 50, 0.75) inset; /* sombras internas do select padrão*/	

	color: #000; /* cor da fonte */
	select::-ms-expand { display: none; }/* Remove seta padrão do IE*/

}
</style>
</head>

<body>
<h1>Personalizar dropdown com CSS</h1>
<p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
<h4>Exemplo com select</h4>
<div class="dropdown">
    
        <select>
        <option>Selecione uma opção</option>
         <option>Segunda-Feira</option>
         <option>Terça-Feira</option>
         <option>Quarta-Feira</option>
         <option>Quinta-Feira</option>
         <option>Sexta-Feira</option>
         <option>Sábado</option>
         <option>Domingo</option>

       </select>
   
</div> <!-- DropDown -->

</body>
</html>
