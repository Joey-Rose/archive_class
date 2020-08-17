<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require('../db.php');
$database = DB::getInstance();

$results = $database->get_results("SELECT * FROM posts WHERE title like '%Palace%' AND title not like '%Palace Theat%' OR title like '%Avalon%' OR caption like '%Palace%' AND title not like 'Palace Theat%' OR caption like '%Avalon%'");
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Remembering 'The Palace'!</title>
  <link rel="stylesheet" href="style.css">
  <script>
  	function goto_page(select) {
  	    var value = select.options[select.selectedIndex].value;
  		document.location.href = value;
  	}
  </script>
</head>
<body>

<h1>Inside Rockarchivola</h1>

<nav>
	<div>
		<select id="page_select" onchange="goto_page(this)">
		<option value="/andrews">Jackson Andrews</option>
		<option value="/bonomi">Alessandro Bonomi</option>
		<option value="/bowen">Liam Bowen</option>
		<option value="/camozzi">Nicolas Camozzi</option>
		<option value="/chao">Peter Chao</option>
		<option value="/chitwood">Ian Chitwood</option>
		<option value="/endrizzi">Bryce Endrizzi</option>
		<option value="/farner">Jacob Farner</option>
		<option value="/gutierrez">Cassandra Gutierrez</option>
		<option value="/hirsch">Josiah Hirsch</option>
		<option value="/leon">Inez Leon</option>
		<option value="/marguglio">Nina Marguglio</option>
		<option value="/rose" selected>Joey Rose</option>
		<option value="/solomon">Ari Solomon</option>
		<option value="/steckel">Nate Steckel</option>
		<option value="/upchurch">Nolan Upchurch</option>
		</select>	
	</div>
	<div><a style = "color: #FFF" href = "../">Home</a></div> 
</nav>
<section>
	<div class="left">
		<h3>Remembering The Palace</h3>
		<p>
		Before 'The Avalon' came into existence in 2002, the legendary nightclub on the intersection of Hollywood and Vine was known as "The Palace" by many. A five-night-a-week mega dance club with the largest light and sound system in Los Angeles and an open dance pit for moshing, it became the prime destination for local and international bands. But exactly <i>what</i> was it remembered for?
		Was it the <a href = "https://avalonhollywood.com/about/#1980-1990">epicenter of British Invasion</a> during the 80s, hosting first time 
		U.S. performances by such bands as the Eurythmics, Culture Club, The Clash, Duran Duran, Erasure, Fine Young Cannibals, Madness and ABC? Or was it the epicenter of the evolving American rock scene, featuring artists like Nirvana, Smashing Pumpkins, Soundgarden, Nine Inch Nails, and The Beastie Boys? While The Avalon's <a href = "https://avalonhollywood.com/">website</a> documents performances by these English speaking bands, they fail to mention the Latinx rock en español artists that frequented this club. This page was created to remember and celebrate the rich history of rock en español music played at The Palace.
		</p>
		<p>
			The Palace is known among the Latinx Angeleno community for the exposure it gave Latinx artists, such as Miguel Mateos and Alex Nahual. This, <a href = "https://www.instagram.com/p/Box-Y_UhiSF/">according to Jorge N. Leal</a>, professor of American Studies and Ethnicity at USC, played a part in the growth and massification of many Latinx music genres. In the early 1990s, artists who'd previously played in venues located in predominantly Latinx neighborhoods had begun to be booked in prominent Los Angeles and Hollywood venues such as The Palace. This raised the profile of local and international rock en español bands. The Avalon's failure to recognize this historial rock en español music scene misinform individuals about its diverse cultural significance, while erasing the exciting historical memory of Latinx artists and fans.
		</p>
		<p>
			  In order to extract digital materials about The Palace and not '<a href = "https://www.laconservancy.org/locations/palace-theatre">The Palace Theatre</a>' located on 6th and Broadway, I searched for user submissions to Leal's <a href = "https://www.instagram.com/rockarchivola/">Rock Archivo de LA</a> whose title and caption mentioned The Palace, The Hollywood Palace, or The Avalon. Specifically, I searched for the posts placed in a MySQL table using the MySQL query 
			  "SELECT * FROM posts WHERE title like '%Palace%' AND title not like '%Palace Theat%' OR title like '%Avalon%' OR caption like '%Palace%' AND title not like 'Palace Theat%' OR caption like '%Avalon%'".
			  This query was able to extract 34 posts. As a whole, they span from pictures of concert tickets and flyers to live photos and videos!
		</p>
	</div>
	<div class="right">
	    	<img src="the_palace.jpg" style = "max-height: 50%; max-width: 50%; display:block; margin:auto;"/>
	    	<p class="caption" style = "text-align: center">The Palace (<a href = "https://www.pinterest.com/pin/143059725633669584/">circa 1966</a>)</p>
		</div>
</section>

<section>
<?php
for ($j = 0; $j < count($results); $j++) {
?>
<div class="row">
    <a href="<?=$results[$j]['insta_url']?>"><img src="<?=(!stristr($results[$j]['path'],'videos')) ? $results[$j]['path'] : '../video-icon.png'?>" /></a><br />
    <?=$results[$j]['caption']?>
</div>
<?php
}
?>

<div class = "left">
		  <p>
			  The Palace brought Latinx artists from all parts of Latin America to play within Hollywood. This included not only <a href = "https://www.instagram.com/p/BmZRiC2Bju1/">rock en español bands</a>, but also those that focused on other music genres <a href = "https://www.instagram.com/p/BgnXwZIHcvv/">such as la banda</a>. For Latinx communities, it <a href = "https://www.instagram.com/p/BfquEnSH3nr/">established Los Angeles as a formidable site of rock latinoamericano</a>, allowing the fans to watch live concerts and persuading artists to record their music here. In particular, The Palace became a widely popular venue for Argentine bands and artists. As reported in <a href = "https://www.instagram.com/p/BX4IRxZnPLA/">this user submission</a> to Leal's archive,
			  one person saw six different famous Argentine bands at The Palace within the early 2000s! Indeed, as this query reveals, many concerts featured Latin American artists, including <a href = "https://www.instagram.com/p/BfquEnSH3nr/">Soda Stereo's</a> first performance in the United States in 1989, <a href = "https://www.instagram.com/p/BYwBgjenOsv/">Miguel Mateos</a> in the 90s, <a href = "https://www.instagram.com/p/BsSF0ilhgTq/">Los Fabulosos Cadillacs</a> in 1993, <a href = "https://www.instagram.com/p/BuOn4VzB_Yj/">Los Enanitos Verdes</a> in 1998, and <a href = "https://www.instagram.com/p/BmZRiC2Bju1/">Babasónios</a> in 2002. In addition, The Palace gave exposure to more Latinx artists such as Spain's <a href = "https://www.instagram.com/p/BYwBgjenOsv/">Mecano</a> in 1989, Guatemalan artist <a href = "https://www.instagram.com/p/BgnXwZIHcvv/">Alex Nahual</a> in 1995, and Spanish/French artist <a href = "https://www.instagram.com/p/BUDljEtDKdK/">Manu Chao</a> in the 2000s.
		  </p>
		  <p>
		  Furthermore, The Palace also provided much needed representation for nearby Latinx artists and bands within Hollywood. 
		  Between 1994 and 1995 alone, los Angelenos enjoyed concerts from Mexican bands <a href = "https://www.instagram.com/p/BpGoWmFBrej/">Maldita Vecindad</a>, <a href = "https://www.instagram.com/p/BdxhUERn7sA/">Los Olvidados</a>, <a href = "https://www.instagram.com/p/Box-Y_UhiSF/">Víctimas del Dr. Cerebro</a>, <a href = "https://www.instagram.com/p/Box-Y_UhiSF/">Café Tacuba</a>, and <a href = "https://www.instagram.com/p/BsBLDV1BgNE/">Santa Sabina</a>. Furthermore, throughout the 90s, The Palace served as a platform for <i>then</i> emerging artists and bands such as L.A.'s <a href = "https://www.instagram.com/p/BnB9sbrBTRl/">María Fatal</a> in 1993, <a href = "https://www.instagram.com/p/Bv5xRs0heZ1/">Tex Tex, Transmetal, Especimen, Prophecy, Eclipse, and Heavy Nopal</a> in 1996, as well as established ones such as <a href = "https://www.instagram.com/p/BfY8Ge0nVHJ/">Caifanes</a> in 1992. This exposure came at a critical time in the history of California: while the local Latinx community had begun to take their place as performers and attendees in mainstream venues, the anti-immigrant Proposition 187 was <a href = "https://ballotpedia.org/California_Proposition_187,_Illegal_Aliens_Ineligible_for_Public_Benefits_(1994)">approved almost simultaneously by state voters</a>, creating an environment of xenophobia and hostility that undoubtedly affected the performers and made their representation of Spanish-language cultures all the more important.
		  
		  </p>
	</div>
	<div class="right">
	    <img src="los_enanitos_verdes.JPG" />
	    <p class="caption" style = "text-align: center">Los Enanitos performing at The Palace (Photo by <a href = "https://www.instagram.com/carlosmendezpics/">Carlos Mendez</a>)</p>
	</div>
</section>


</body>
</html>