<?php 
session_start();
if(!empty($_SESSION['id'])){
}else{
	$_SESSION['msg'] = "<font color:'#fff'>Área restrita</font>";
	header("Location: entrar.php");
}
?>
<!doctype html>
<html lang="t-br">
<head>
<meta charset="UTF-8"/>
<title>
Prova
</title>
<link rel="stylesheet" type="text/css" href="../css/Style22.css"/>	
</head>
<body>
<div id="conteudo19">
<div id ="p">
<br>
<h1> Responda todas as questões </h1><br>
<br>
<ul>
<li><?php if(!empty($_SESSION['id'])){echo "<a href='sair.php'>Sair</a>";}?></li> 
<li><a href="listar2.php">Editar Cadastro</a></li>
<br>
</ul>
<br>
<form type="text" name="form" method="post" action="salvar.php">
<br>
<fieldset>
1)
(UNESP) Leia o texto:
“Constitui um bioma brasileiro que se estendia originalmente por uma área de dois milhões de Km2, hoje restam apenas 20% desse total. Este bioma apresenta solo deficiente em nutrientes e rico em ferro e alumínio, abriga plantas de aparência seca, entre arbustos esparsos e gramíneas e um tipo mais denso de vegetação, de formação florestal. Estima-se que 10 mil espécies vegetais, 837 de aves e 161 de mamíferos vivam ali. Essa riqueza biológica, porém, é seriamente afetada pela caça e pelo comércio ilegal. Este bioma é o sistema ambiental brasileiro que mais sofreu alteração com a ocupação humana”.
(www.portalbrsil.net. Acessado em 29.04.2008. Adaptado.). O bioma brasileiro a que o texto faz referência é:  <br>
<input type="radio" name="q1" value="1"> a) Campos<br>
<input type="radio" name="q1" value="2"> b) Floresta Latifoliada<br>
<input type="radio" name="q1" value="3"> c) Caatinga<br>
<input type="radio" name="q1" value="4"> d) Cerrado<br>
<input type="radio" name="q1" value="5"> e) Floresta Equatorial<br>
</fieldset>
<fieldset>
2) (UFSC 2010) Sobre as formações fitogeográficas ou Biomas existentes no Brasil, assinale a(s) proposição (ões) correta(s). <br>
<input type="radio" name="q2" value="1"> a) O Cerrado é uma formação fitogeográfica caracterizada por uma floresta tropical que cobre cerca de 40% do território brasileiro, ocorrendo na Região Norte.<br>
<input type="radio" name="q2" value="2"> b) A Caatinga é caracterizada por ser uma floresta úmida da região litorânea do Brasil, hoje muito devastada.<br>
<input type="radio" name="q2" value="3"> c) O Mangue ocorre desde o Amapá até Santa Catarina e desenvolve-se em estuários, sendo utilizados por vários animais marinhos para reprodução.<br>
<input type="radio" name="q2" value="4"> d) O Pampa ocorre na Região Centro-Oeste onde o clima é quente e seco. A flora e a fauna dessa região são extremamente diversificadas.<br>
<input type="radio" name="q2" value="5"> e) A Floresta Amazônica está localizada nos estados do Maranhão e do Piauí e as árvores típicas dessa formação são as palmeiras e os pinheiros.<br>
</fieldset>
<fieldset>
3) Dentre as alternativas abaixo, todas representam um exemplo de como o clima influencia as vegetações e os solos, exceto:<br>
<input type="radio" name="q3" value="1"> a) Formação espinhosa em cactos para retenção de água em climas secos.<br>
<input type="radio" name="q3" value="2"> b) Solos rasos na região do semiárido nordestino<br>
<input type="radio" name="q3" value="3"> c) Formato cônico das coníferas para evitar o acúmulo de neve<br>
<input type="radio" name="q3" value="4"> d) Galhos retorcidos nas árvores do Cerrado para facilitar a evapotranspiração.<br>
<input type="radio" name="q3" value="5"> e) Solos pobres e arenosos em regiões de desertos.<br>
</fieldset>
<fieldset>
4) (UEMS – MS. Adaptada) O relevo terrestre é resultante da atuação de dois conjuntos de forças denominadas agentes do relevo, que compreendem os agentes internos ou criadores do relevo e os agentes externos ou modificadores do relevo. Podemos considerar agentes internos e externos, respectivamente:<br>
<input type="radio" name="q4" value="1"> a) Tectonismo e intemperismo<br>
<input type="radio" name="q4" value="2"> b) Águas correntes e seres vivos<br>
<input type="radio" name="q4" value="3"> c) Vento e vulcanismo<br>
<input type="radio" name="q4" value="4"> d) Águas correntes e intemperismo<br>
<input type="radio" name="q4" value="5"> e) Abalos sísmicos e vulcanismo<br>
</fieldset>
<fieldset>
5) A respeito da forma de relevo planície, encontrada não só no território brasileiro, mas em várias partes do mundo, identifique as alternativas a seguir como verdadeiras (V) ou falsas (F):
<br>
( ) Planícies são áreas geralmente planas, com paisagens bastante acidentadas e originadas por meio de processos erosivos.
<br>
( ) Planícies são relevos em construção, ao contrário dos planaltos, que são relevos em destruição.
<br>
( ) Planícies possuem origem sedimentar, o que significa que os processos de erosão superam os processos de acúmulo de sedimentos.
<br>
( ) Planícies podem ser classificadas em três tipos: aluviais, lacustres e costeiras.
<br>
( ) As planícies comumente se localizam em áreas de baixo nível altimétrico, ou seja, são pouco elevadas em relação ao nível do mar.
<br>
Assinale a alternativa correta:
<br>
<input type="radio" name="q5" value="1"> a) FVVFV<br>
<input type="radio" name="q5" value="2"> b) VVVFV <br>
<input type="radio" name="q5" value="3"> c) FVFVV<br>
<input type="radio" name="q5" value="4"> d) FFFVV<br>
<input type="radio" name="q5" value="5"> e) FVFVF<br>
</fieldset>
<fieldset>
6) Em relação aos tipos de clima no Brasil, marque qual clima abrange uma porção maior do território e melhor caracteriza o país:<br>
<input type="radio" name="q6" value="1">  a) Clima Semiarido<br>
<input type="radio" name="q6" value="2">  b) Clima Equatorial<br>
<input type="radio" name="q6" value="3">  c) Clima Subtropical<br>
<input type="radio" name="q6" value="4"> d) Clima Tropical<br>
<input type="radio" name="q6" value="5">  e) Clima Desertico<br>
</fieldset>
<fieldset>
7) As características descritas abaixo fazem referência a um único tipo de clima brasileiro. Analise-as e responda a qual tipo de clima elas estão se referindo.
<br>
<br>	
Temperaturas médias elevadas ao longo do ano.
<br>
Baixa precipitação anual e chuvas mal distribuídas.
<br>
Encontro de quatro massas de ar: Equatorial Continental, Equatorial Atlântico, Tropical Atlântico e Polar Atlântica.
<br>
O fenômeno La Niña, em que há um resfriamento da temperatura média das águas do Oceano Pacífico Equatorial, pode acarretar um excesso de precipitação.
<br>
<br>
<input type="radio" name="q7" value="1"> a) Clima Tropical<br>
<input type="radio" name="q7" value="2"> b) Clima Semiarido<br>
<input type="radio" name="q7" value="3"> c) Clima Equatorial<br>
<input type="radio" name="q7" value="4"> d) Clima Subtropical<br>
<input type="radio" name="q7" value="5"> e) Clima Tropical Humido<br>
</fieldset>
<fieldset>
8)(FGV). Natal (RN) e Rio de Janeiro (RJ) apresentam temperaturas médias anuais semelhantes:<br><br>
<input type="radio" name="q8" value="1"> a) porque possuem o mesmo tipo de clima,e em ambas os solos foram originalmente recobertos por matas;<br>
<input type="radio" name="q8" value="2"> b) porque estão na mesma longitude, predominando os morros recobertos por vegetação no Rio de Janeiro e as dunas em Natal;<br>
<input type="radio" name="q8" value="3"> c) porque estão ambas no litoral e as duas sofrem a in?uência amenizadora do oceano Atlântico;<br>
<input type="radio" name="q8" value="4"> d) mas têm climas diferentes, porque, estando em latitudes distintas, são submetidas a massas de ar de origens diferentes;<br>
<input type="radio" name="q8" value="5"> e) mas têm climas diferentes, porque a cidade do Rio de Janeiro tem temperaturas elevadas, durante o ano todo, enquanto em Natal as temperaturas máximas estão entre abril e setembro.<br>
</fieldset>
<fieldset>
9) (Unesp) No território brasileiro, em sentido Norte-Sul, em relação à média e à amplitude térmicas, é correto afirmar que:<br><br>
<input type="radio" name="q9" value="1"> a) as médias térmicas diminuem e as amplitudes aumentam.<br>
<input type="radio" name="q9" value="2"> b) as médias e as amplitudes térmicas diminuem.<br>
<input type="radio" name="q9" value="3"> c) as médias térmicas aumentam e as amplitudes diminuem.<br>
<input type="radio" name="q9" value="4"> d) as médias e as amplitudes térmicas não apresentam variação.<br>
<input type="radio" name="q9" value="5"> e) as médias e as amplitudes térmicas aumentam.<br>
</fieldset>
<fieldset>
10)

“A história sedimentar não termina na deposição. Uma vez depositado, o material sedimentar, terrígeno ou carbonático, passa a responder às condições de um novo ambiente, o de soterramento”.
 GIANNINI, P. C. F. Depósitos e rochas sedimentares. In: TEIXEIRA, W. et. al (orgs.). Decifrando a Terra. São Paulo: Oficina de Textos, 2000. p.288.
 <br>
O conjunto de transformações que os depósitos sedimentares sofrem no processo de gênese das rochas sedimentares é chamado de:<br>
<input type="radio" name="q10" value="1"> a) sedimentação<br>
<input type="radio" name="q10" value="2"> b) solidificação<br>
<input type="radio" name="q10" value="3"> c) diagênese<br>
<input type="radio" name="q10" value="4"> d) estratogênese<br>
<input type="radio" name="q10" value="5"> e) pressionamento<br>
</fieldset>
<br>
<input type="submit" id="botao" value="Salvar" id="botao"  /><br><br>
<br>
</div>
</div>
</body>
</html>