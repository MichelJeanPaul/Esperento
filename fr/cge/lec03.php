<?php
$titolo="3 (tri)";
$leciono = 3;
$section=isset($_GET["section"])?$_GET["section"]:"1";
include "dlekkapo.inc.php";
?>
<div class="row">
	<article class="col s12 m10 l7 offset-m1 offset-l1">
				
		<section id="leciono-enhavo">
		<?php 
		getTitoloLecionero('CG',$leciono,$section);
		
			if ($section=="1") {
			?>
			<p>Nous avons vu pas mal de choses dans la 2<sup>e</sup> leçon. Voici un tableau qui
				résume une structure de phrase très courante&nbsp;:</p>
				<div class="container">
					<table class="bordered">
						<tr>
							<td>Sujet<br>Adjectif Nom</td>
							<td>Verbe</td>
							<td>Complément d’objet direct<br>Adjectif Nom</td>
						</tr>
						<tr class="eo">
							<td>____-a   ____-o<br>____-aj  ____-oj</td>
							<td>____-is<br>____-as<br>____-os</td>
							<td>____-an   ____-on<br>____-ajn  ____-ojn</td>
						</tr>
						<tr><td>Mia patrino</td><td>lavas</td><td>mian fraton.</td></tr>
						<tr><td>Niaj fratinoj</td><td>vidis</td><td>viajn instruistojn.</td></tr>
					</table>
				</div>
			<p>
			Comme les fonctions de sujet, verbe et complément d’objet sont marquées
			sans ambiguïté par la terminaison, on peut fort bien les intervertir sans
			changer le sens de la phrase. Cette relative liberté de l’ordre des mots
			permet de mettre en valeur certains groupes de mots ou de clarifier le
			sens. Toutefois, dans ce cours, nous nous contenterons le plus souvent de
			l’ordre « normal » : sujet, verbe, compléments.
			</p>
			
			<div class="row container">
				<div class="col s4">La fille m’a vu.</div>
				<div class="col s8">
					<p>= La knabino vidis <span class="eo">min</span>.</p>
					<p>= <span class="eo">Min</span> vidis la knabino</p>
					<p>= <span class="eo">Min</span> <span class="ekz">la knabino</span> vidis.</p>
					<p>= …</p>
				</div>
			</div>

			<p>
			Page suivante, nous vous proposons, à titre d’exercice, deux autres exemples illustrant la façon dont
			on peut modifier l’ordre des mots.</p>
	
		<?php 
		} // fin section 
		if ($section=="2") {
		?>
			<fieldset class="ekzerco">
				<legend><strong>EXERCICE</strong></legend>
				<p>Considérez les phrases suivantes et répondez en français aux questions :</p>
				<input type="hidden" name="013_cxap03.1" value="1. Considérez la phrase suivante et répondez en français aux questions.">
				<div class="tasko">
				<?php
					$demandoj=array (
					1 => "Mian fraton lavis mia patrino.<br>* Qui a été lavé ?<br>* Qui a lavé ?",
					2 => "Instruistojn viajn fratinoj niaj vidis.<br>* Qui a vu ?<br>* Qui a été vu ?"
					);
					ekzerco(False, 3);
				?>
				</div>
			</fieldset>

		<?php 
		} // fin section 1
		if ($section=="3") {
		?>
		
			<div class="vortlisto row">
				<div class="col s12 m4">
					<p><b>Noms</b></p>
					<p><span class="eo">horo</span> : heure</p>
					<p><span class="eo">jaro<sup>[1]</sup></span> : année</p>
					<p><span class="eo">mateno</span> : matin</p>
					<p><span class="eo">minuto</span> : minute</p>
					<p><span class="eo">semajno</span> : semaine</p>
					<p><span class="eo">nokto</span> : nuit</p>
					<p><span class="eo">tago</span> : jour</p>
					<p><span class="eo">vespero</span> : soir, soirée</p>
				</div>
				<div class="col s12 m4">
					<p><b>Verbes</b></p>
					<p><span class="eo">atendi</span> : attendre</p>
					<p><span class="eo">demandi <sup>[2]</sup></span> : demander</p>
					<p><span class="eo">fumi</span> : fumer</p>
					<p><span class="eo">kuri</span> : courir</p>
					<p><span class="eo">peti <sup>[3]</sup></span> : demander</p>
					<p><span class="eo">promeni</span> : se promener</p>
					<p><span class="eo">respondi</span> : répondre</p>
					<p><span class="eo">soifi <sup>[4]</sup></span> : avoir soif</p>
					<p><span class="eo">vivi</span> : vivre</p>
				</div>
				<div class="col s12 m4">
					<p><b>Adjectifs</b></p>
					<p><span class="eo">blanka</span> : blanc</p>
					<p><span class="eo">blua</span> : bleu</p>
					<p><span class="eo">bruna</span> : brun (marron)</p>
					<p><span class="eo">flava</span> : jaune</p>
					<p><span class="eo">griza</span> : gris</p>
					<p><span class="eo">nigra</span> : noir</p>
					<p><span class="eo">ruĝa</span> : rouge</p>
					<p><span class="eo">verda</span> : vert</p>
				</div>
			</div>
				
			<div class="notoj">
				<p><span class="eo">[1]</span> Rappelez-vous que le <em><span class="eo">j</span></em> est prononcé comme le <em>y</em> dans yoghourt.</p>
				<p><span class="eo">[2]</span> <em><span class="eo">demandi</span></em> : poser une question.</p>
				<p><span class="eo">[3]</span> <em><span class="eo">peti</span></em> : demander pour obtenir quelque chose.</p>
				<p><span class="eo">[4]</span> <em><span class="eo">soifi</span></em> : bien prononcer le <em>o</em> et le <em>i</em> séparément (<span class="eo">so-<u>i</u>-fi</span>).</p>
			</div>

		<?php 
		} // fin section 1
		if ($section=="4") {
		?>
		
		<p>
		Expression d’une certaine «sagesse populaire» – ce qui n’est pas synonyme
		de vérité absolue –, les proverbes sont surtout de minuscules poèmes avec
		leurs rimes, leurs rythmes et l’originalité de leur syntaxe. Nous en
		introduisons quelques uns à chaque leçon pour vous familiariser avec leurs
		sonorités.
		</p>
		
		<p><i>Cliquez sur le bouton pour écouter la phrase&nbsp;: <a href="<?php echo $vojo;?>fr/son/pv3.mp3" class="sm2_button"></a></i></p>
		<p><span class="eo">Akvo kura – akvo pura</span><br>
		De l’eau courante (<i>qui court</i>) [c’est] de l’eau pure (<i>propre</i>)</p>
	
		<?php 
		} // fin section
		if ($section=="5") {
		?>
	
		<p class="parto">
		Les <b>adverbes</b> jouent un peu le même r&ocirc;le que les adjectifs, mais au
		lieu de préciser les idées exprimées par des noms, ils précisent les idées
		exprimées par des verbes, des adjectifs, d’autres adverbes ou même des
		phrases entières.  Le plus souvent, ils expriment la manière, la cause, le
		temps ou le lieu.
		</p>
		<p>
		En espéranto, les adverbes se terminent généralement par <b>-e</b> (et c’est
		toujours le cas lorsqu’il s’agit d’un adverbe dérivé d’un autre mot). 
		</p>
		<p>
		Avec cette terminaison vous connaissez maintenant la totalité des
		terminaisons qui marquent la catégorie du mot. L’idée fondamentale exprimée
		par la racine d’un mot peut être utilisée de différentes façons gr&acirc;ce à un
		simple changement de terminaison :
		</p>
	
		<div class="vortlisto row">
			<p class="col s6"><span class="eo">sana</span> = sain, en bonne santé</p>
			<p class="col s6"><span class="eo">Li estas sana.</span></p>
			<p class="col s6"><span class="eo">sano</span> = santé</p>
			<p class="col s6"><span class="eo">Li havas bonan sanon.</span></p>
			<p class="col s6"><span class="eo">sani</span> = être en bonne santé</p>
			<p class="col s6"><span class="eo">Li sanas.</span></p>
			<p class="col s6"><span class="eo">sane</span> = sainement</p>
			<p class="col s6"><span class="eo">Li sane vivas</span> (ou : <span class="ekz">li vivas sane</span>).</p>
		</div>
		
		<p class="parto">
		En général l’adverbe précède le mot qu’il précise. Toutefois, quand
		l’adverbe précise le verbe d’une phrase, il est fréquent qu’il prenne la
		place usuelle des compléments, c’est-à-dire après le verbe.
		</p>

		<div class="vortlisto row">
			<p class="col s12">Exemples :
			<a href="<?php echo $vojo;?>fr/son/l03-1.mp3" class="sm2_button"></a></p>
		
			<p class="col s6"><span class="eo">Insektoj vivas nokte</span></p>
			<p class="col s6">Les insectes vivent la nuit.</p>
			<p class="col s6"><span class="eo">Li malbone skribis</span></p>
			<p class="col s6">Il a mal écrit.</p>
			<p class="col s6"><span class="eo">Ŝi respondis seke.</span></p>
				<p class="col s6">Elle a répondu sèchement.</p>
			<p class="col s6"><span class="eo">Ni renkontos lin promene.</span></p>
			<p class="col s6">Nous le rencontrerons lors de la promenade.</p>
		</div>
		
		<?php 
		} // fin section 1
		if ($section=="6") {
		?>
		
		<p class="parto">
		En espéranto, chaque voyelle (<em>a</em>, <em>e</em>, <em>i</em>, <em>o</em>,
		<em>u</em>) forme une syllabe. Le mot espéranto <em>sane</em> a donc deux
		syllabes (<em>sa-ne</em>).  Alors qu’en français, le <em>-e</em> final est
		généralement muet (comme, par exemple, dans <em>père</em>), il n’existe rien
		de tel en espéranto.
		</p>
		<p>
		Dans <span class="eo">soifi</span> il y a trois syllabes (<span class="eo">so-i-fi</span>), alors que le
		français <em>soif</em> ne contient qu’une syllabe.
		</p>
		            
		<?php 
		} // fin section
		if ($section=="7") {
		?>
		
		<fieldset class="ekzerco">
			<legend><strong>EXERCICE</strong> : Traduisez en espéranto.</legend>
			<input type="hidden" name="013_cxap03.2" value="2. Traduisez en espéranto.">
			<?php atentigo();	?>
			<div class="tasko">
			<?php
				$demandoj=array (
					3 => "Mon frère se promènera le matin. (adv.: «matinalement»)",
					4 => "Son ami a répondu chaleureusement. (adv.: dérivé de «chaud»)",
					5 => "La plume marron écrit bien. (adv.: dérivé de «bon»)",
					6 => "La belle fille court mal. (adv.: contraire de «bien»)",
					7 => "Notre père fume le soir. (adv.: dérivé de «soir»)"
				);
				ekzerco(True, 1);
			?>
			</div>
		</fieldset>

		<?php 
		} // fin section
		if ($section=="8") {
		?>

		<p class="parto">Les <b>nombres cardinaux</b> n’ont pas de terminaison spéciale et ils restent
		invariables.
		</p>
		<p>
			<audio controls="controls">Votre navigateur ne supporte pas la lecture du fichier audio.
				<source src="<?php echo $vojo;?>fr/son/l03-2.mp3" type="audio/mp3">
			</audio>
		</p>
		
		<div class="vortlisto row">
			<div class="col s6 m3">
				<p>1 : <span class="eo">unu</span></p>
				<p>2 : <span class="eo">du</span></p>
				<p>3 : <span class="eo">tri</span></p>
				<p>4 : <span class="eo">kvar</span></p>
				<p>5 : <span class="eo">kvin</span></p>
				<p>6 : <span class="eo">ses</span></p>
				<p>7 : <span class="eo">sep</span></p>
				<p>8 : <span class="eo">ok</span></p>
				<p>9 : <span class="eo">naŭ</span></p>
				<p>10 : <span class="eo">dek</span></p>
			</div>
			<div class="col s6 m3">
				<p>11 : <span class="eo">dek unu</span></p>
				<p>2 : <span class="eo">dek du</span></p>
				<p>3 : <span class="eo">dek tri</span></p>
				<p>4 : <span class="eo">dek kvar</span></p>
				<p></p>
				<p>20 : <span class="eo">dudek</span></p>
				<p>21 : <span class="eo">dudek unu</span></p>
				<p></p>
				<p>30 : <span class="eo">tridek</span></p>
			</div>
			<div class="col s6 m3">
				<p>31 : <span class="eo">tridek unu</span></p>
				<p>32 : <span class="eo">tridek du</span></p>
				<p></p>
				<p>40 : <span class="eo">kvardek</span></p>
				<p>50 : <span class="eo">kvindek</span></p>
				<p>60 : <span class="eo">sesdek</span></p>
				<p>70 : <span class="eo">sepdek</span></p>
				<p>80 <span class="eo">okdek</span></p>
				<p>90 : <span class="eo">naŭdek</span></p>
			</div>
			<div class="col s6 m3">
				<p>100 : <span class="eo">cent</span></p>
				<p>200 : <span class="eo">ducent</span></p>
				<p>300 : <span class="eo">cent</span></p>
				<p></p>
				<p>1000 : <span class="eo">mil</span></p>
			</div>
		</div>
		<div class="vortlisto row">
			<div class="col s12">
				<p>1998 : <span class="eo">mil naŭcent naŭdek ok</span></p>
				<p>749 : <span class="eo">sepcent kvardek naŭ</span></p>
				<p>1515 : <span class="eo">mil kvincent dek kvin</span></p>
				<p>2051 : <span class="eo">du mil kvindek unu</span></p>
			</div>
		</div>

		<p class="rimarko"><strong>REMARQUE</strong> : 
		Le <b>a</b> de <span class="eo">naŭ</span> se prononce comme «ow» anglais dans «cow», «how», «now»,
		ou encore «au» en allemand, espagnol, italien...</p>
		
		<p class="parto">Les <b>nombres ordinaux</b> se forment par adjonction de la terminaison
		<em>-a</em> d’adjectif aux nombres cardinaux. Comme tous les adjectifs, ils
		prennent la marque du pluriel <span class="eo">-j</span> et celle du complément d’objet
		<em>-n</em>.
		</p>

		<div class="vortlisto row">
			<div class="col s12 m4">
				<p><span class="eo">unua</span> : premier</p>
				<p><span class="eo">dua</span> : deuxième</p>
				<p><span class="eo">tria</span> : troisième</p>
				<p><span class="eo">kvara</span> : quatrième</p>
			</div>
			<div class="col s12 m4">
				<p><span class="eo">dudeka</span> : 20<sup>e</sup></p>
				<p><span class="eo">sepdek-unua</span> : 71<sup>e</sup></p>
				<p><span class="eo">centa</span> : 100<sup>e</sup></p>
				<p><span class="eo">dek-kvara</span> : 14<sup>e</sup></p>
			</div>
			<div class="col s12 m4">
				<p><span class="eo">unue</span> : premièrement</p>
				<p><span class="eo">due</span> : deuxièmement</p>
				<p><span class="eo">trie</span> : troisièmement</p>
				<p><span class="eo">dek-kvare</span> : quatorzièmement</p>
			</div>
		</div>

		<p>Exemples :</p>
		<div class="container">
			<p><span class="eo">Mi petis ses plumojn.</span> : J’ai demandé six plumes.</p>
			<p><span class="eo">La unuaj knaboj venas.</span> : Les premiers garçons arrivent.</p>
		</div>
		<?php 
		} // fin section
		if ($section=="9") {
		?>

		<fieldset class="ekzerco">
			<legend><strong>EXERCICE</strong> : Traduisez les phrases en espéranto.</legend>
			<input type="hidden" name="013_cxap03.3" value="3. Traduisez en espéranto.">
			<?php atentigo();	?>
			<div class="tasko">
			<?php
				$demandoj=array (
					8 => "Il l’aime. (la personne aimée est une femme)",
					9 => "Il aime sa sœur. (il s’agit de la sœur de sa femme)",
					10 => "Elle l’aime. (la personne aimée est un homme)",
					11 => "Le premier homme aime la deuxième femme.",
					12 => "La seconde femme déteste le premier homme.",
					13 => "Les garçons ont demandé en premier trois gâteaux.",
					14 => "Deuxièmement, ils ont demandé de la limonade.",
					15 => "La boutique fait mal le pain brun."
				);
				ekzerco(True, 1);
			?>
			</div>
		</fieldset>

		<?php 
		} // fin section
		if ($section=="10") {
		?>
		<p class="parto">Nous avons vu de nombreux exemples de <b>verbes transitifs</b> :
		<span class="eo">vidi</span>, <span class="eo">trinki</span>, <span class="eo">skribi</span>...
		</p>
		<p class="parto">
		On appelle <b>verbe intransitif</b> un verbe qui n’exprime pas une action
		venant d’un sujet vers un complément d’objet; parfois un tel verbe décrit
		simplement l’état du sujet. Ex.: <em>vivi</em>, <em>promeni</em>, <em>kuri</em>,
		<em>esti</em>, <em>sani</em>...
		</p>
		<p>
		Quand un verbe intransitif est suivi d’un adjectif ou d’un nom ce dernier
		n’est pas un complément d’objet direct mais un attribut qui décrit le
		sujet. La terminaison <b>-n</b> de l’accusatif <b>n’est donc jamais
		employée</b> dans ce cas.
		</p>
		<div class="container">
			<p><span class="eo">Li estas sana.</span> : Il est en bonne santé.</p>
			<p><span class="eo">Li promenas soifa.</span> : Il se promène assoiffé.</p>
			<p><span class="eo">Li estas instruisto.</span> : Il est instituteur.</p>
			<p><span class="eo">Ŝia frato estas bela knabo.</span> : Son frère est (un) beau garçon.</p>
		</div>

		<?php 
		} // fin section
		if ($section=="11") {
		?>
		
			<fieldset class="ekzerco">
				<legend><strong>EXERCICE</strong> : Traduisez en espéranto.</legend>
				<?php atentigo();	?>
				<input type="hidden" name="013_cxap03.4" value="4. Traduisez en espéranto.">
				<div class="tasko">
				<?php
					$demandoj=array (
					16 => "Soixante minutes font une heure. (utiliser le verbe <i>esti</i>)",
					17 => "Seize heures font un jour; huit heures font une nuit.",
					18 => "Sept jours font une semaine.",
					19 => "Le troisième garçon est mon second fils.",
					20 => "J’ai neuf cent quatre-vingt dix-neuf biscuits."
					);
					ekzerco(True, 1);
				?>
				</div>
			</fieldset>

		<?php 
		} // fin section
		if ($section=="12") {
		?>
			<p>Résumons-nous.</p>
			<p>Vous avez maintenant appris à former toutes sortes de
			compléments grâce à la forme d’adverbe en <b>-e</b>. De plus, vous savez
			compter de 1 à 999 999 et pour cela il ne vous a fallu apprendre que...
			12 mots nouveaux. Qui dit mieux&nbsp;?
			</p>
		<?php 
		} // fin section 
		?>	
		</section>

		<section id="leciono-fino">
			<div id="marko" class="right-align">
				<?php getBoutonFinSection('CG',$leciono,$section,$persono_id); ?>
				<a id="farita" class="btn-floating btn-large light-blue darken-1 hide"><i class="material-icons">done_all</i></a>
			</div>
			<div class="ligoj">
				<?php getLecioneroAntauxa('CG',$leciono,$section); ?>
				<?php getLecioneroVenonta('CG',$leciono,$section); ?>
			</div>
		</section>

	</article>
			
	<aside class="col s12 m10 l3 offset-m1 push-l1">
								
		<ul class="collapsible" data-collapsible="expandable">

			<?php 
			// On affiche le sommaire de la lecon
			getEnhavtabelo('CG',$leciono); 
			?>

		</ul>	
				
	</aside>
</div>
<?php include "dlekpiedo.inc.php"; ?>
