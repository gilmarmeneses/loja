<?php
	require_once"require/class/CRUD.class.php";
	require_once"require/config/config.php";

	$r_QueryString = explode('/',substr(REDIRECT_QUERY_STRING,3));
	$urlAmigavel = new UrlAmigavel;
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Minha Loja Virtual</title>
		<link type="text/css" rel="stylesheet" href="/require/css/header.css">
		<script type="text/javascript" src="/require/js/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="/require/js/login.js"></script>
	</head>
	<body>
		<header>
			<div>
				<ul>
					<li><a href="#"><img src="/require<?=PROJETO?>caminhao.png" />Frete grátis</a></li>
					<li><a href="#"><img src="/require<?=PROJETO?>telAtendimento.png" />Central de Atendimento</a></li>
					<li><a href="#"><img src="/require<?=PROJETO?>devolucao.png" />Saiba sobre as regras para devolução</a></li>
				</ul>
			</div>
<div>
	<figure>
		<a href="/"><img src="/require<?=LOGO?>logo.png" /></a>
	</figure>

	<form>
		<input type="search" placeholder="Digite o que procura..." value="Buscar por Produtos, Marcas e Categorias" class="inputButton input" />
		<button class="inputButton button">Buscar</button>
	</form>	
		<section>
			<figure>
				<img src="/require<?=PROJETO?>carrinho.png" title="Meu carrinho" />
				<figcaption title="Meu Carrinho">3</figcaption>
			</figure>
			<figure>
			<a href="/login"><img src="/require<?=PROJETO?>entrar.png" title="Acessar Minha Conta"></a>
			</figure>
		</section>
</div>
<nav>
	<ul>
		<li><a href="">Oferta do Dia</a></li>
			<?php
					$itensMenu=array('Massa Muscular','Proteínas','Vitamínas',
			'Energia','Acessórios','Massa Muscular','Energia');
				for($i=0;$i<count($itensMenu);$i++){
			?>	
			<li>
				<a href=""><?=$itensMenu[$i];?></a>
				<ul>
				<figure>
				<img src="/require<?=PRODUTO?>prod10.png" />
				<figcaption>
					<p>ZMA - 90 Cápsulas - Optimum Nutrition</p>
					<span>
					<?php
						$desc= 'ZMA Optimum Nutrition foi desenvolvida pra elevar os níveis naturais de hormônios. Estudos científicos comprovam que a combinação de Zinc Monomethionine Aspartate, Magnesium Aspartate, e Vitamin B6 (ZMA) apresentada em sua fórmula podem aumentar consideravelmente os Níveis Hormonais e o Tamanho Muscular em Atletas de Treinos Intensos. Aumenta os níveis de testosterona em até 30% e os níveis de IGF-1 de forma significativa.';
							print substr($desc, 0,270).'...';
						?>
					</span>
						<a href="" class="link">Confira esta oferta</a>
				</figcaption>
				</figure>
					<li><a href="">BCAA</a></li>
					<li><a href="">Pré-Treinos</a></li>
					<li><a href="">Pré-Hormonais</a></li>
					<li><a href="">ZMA</a></li>
					<li><a href="">Packs</a></li>
				</ul>
			</li>

		<?php }?>



		<li><a href="">Blog</a></li>
	</ul>
</nav>
</header>
<main>