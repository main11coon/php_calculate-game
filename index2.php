<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="style0.css" />
		<title>creator</title>
	</head>
	<body>
		<header>
			<a style="display:block" href="../../index.php"><div id="logo"></div></a>
			<a href="../../allproj/creator/creator.php"><p class="navi">Creator</p></a>
			<a href="../../allproj/plusoumoins/index.php"><p class="navi">CalcTest</p></a>
			<a href="../../allproj/blog_add/index.php"><p class="navi">Blog Add</p></a>
			<a href="../../allproj/vetement-ex/index.php"><p class="navi">Boutique de vêtements</p></a>
		</header>

		<div class="web">
			<div class="content">


				<div class="inputdiv">

					<div class="inputup">

						<a href="index.php"><button class="resetbut">Reset</button></a>

						<?php
							$cal1 = rand(1,100);
							$cal2 = rand(1,100);
							$result2 = $cal1 + $cal2;
							$lastres2 = $result2;
							echo "<p class=\"calcul\">$cal1 + $cal2 = ...</p>";?>
					</div>

					<div class="inputdown">
						<form class="inputform" action="index.php?lastres=<?php echo $result2; ?>" method="post">
							<input type="number" id="inputinput" name="inputinput"/>
							<input type="submit" id="inputsub" value="👌"/>
						</form>
					</div>

				</div>


				<div class="answerdiv">
					
					<p class="vsavez">Vous avez :</p>


					<?php
						if (isset($_GET['lastres']) == True) {
							if (isset($_POST['inputinput']) == True) {
								$lastrep = $_POST['inputinput'];
								$lastres = $_GET['lastres'];
								if ($lastres == $lastrep) {
									echo "<p class=\"win\">Gagné</p>";
								} else {
									echo "<p class=\"lose\">Perdu</p>";
								}
							}
						}
					?>

				</div>

			</div>
		</div>

	</body>
</html>
