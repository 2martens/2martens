<!DOCTYPE html>
<html lang="en">
	<head>
		<title><?php echo $name; ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta charset="UTF-8" />
		<link href="css/bootstrap.min.css" rel="stylesheet" />
		<link href="css/style.css" rel="stylesheet" />
		<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet" />
	</head>
	<body>
		<div id="main" class="container">
			<header class="page_header">
				<h1><?php echo $name; ?> <small><?php echo $nameDesc; ?></small></h1>				
			</header>
			<hr />
			<div class="row">
				<div class="col-xs-12">
					<p><?php echo $intro; ?></p>
				</div>
			</div>
			<div>
				<div>
					<aside id="impress" class="pull-right">
						<span class="fa fa-home"></span>&nbsp;<span><?php echo $address; ?>:</span>
						<address>
							Jim Martens<br />
							Hamburg<?php if ($lang != 'de') {?><br />
							Germany<?php } ?>
						</address>
						<div class="margin-bottom">
							<span class="fa fa-envelope"></span>&nbsp;<span><?php echo $email; ?>:</span><br />
							<span><a href="mailto:jobs@2martens.de">jobs[at]2martens.de</a></span>
						</div>
						<div>
							<span class="fa fa-cloud"></span>&nbsp;<span><?php echo $platforms; ?>:</span>
							<ul class="icon-buttons">
								<li>
									<a href="https://github.com/frmwrk123" class="btn btn-primary">
										<span class="fa fa-github"></span>&nbsp;Github
									</a>
								</li>
								<li>
									<a href="http://stackoverflow.com/users/2615854/jim-martens" class="btn btn-primary">
										<span class="fa fa-stack-overflow"></span>&nbsp;StackExchange
									</a>
								</li>
							</ul>
						</div>
					</aside>
					<section>
						<?php echo $detailedDescription; ?>
					</section>
				</div>
			</div>
			<hr />
			<div class="row">
				<div class="col-md-6">
					<section>
						<header>
							<h3><span class="fa fa-lightbulb-o fa-1g"></span>&nbsp;<?php echo $skills;?></h3>
						</header>
						<div>
							<header>
								<h5><?php echo $programmingAndMarkupLangs; ?></h5>
							</header>
							<ul class="items">
								<li>PHP</li>
								<li>JavaScript</li>
								<li>Java</li>
								<li>HTML</li>
							</ul>
						</div>
						<div>
							<header>
								<h5><?php echo $tools;?></h5>
							</header>
							<ul class="items">
								<li>Eclipse</li>
								<li>vim</li>
								<li>PHPStorm</li>
							</ul>
						</div>
						<div>
							<header>
								<h5><?php echo $frameworks;?></h5>
							</header>
							<ul class="items">
								<li>WoltLab Community Framework</li>
								<li>Symfony</li>
								<li>jQuery</li>
								<li>Bootstrap</li>
							</ul>
						</div>
						<div>
							<header>
								<h5><?php echo $naturalLangs;?></h5>
							</header>
							<ul class="items">
								<li>German, native language</li>
								<li>English, fluent</li>
							</ul>
						</div>
						<div>
							<header>
								<h5><?php echo $favoriteSoftware;?></h5>
							</header>
							<ul class="items">
								<li>Firefox</li>
								<li>VLC media player</li>
							</ul>
						</div>
					</section>
					<section>
						<header>
							<h3><span class="fa fa-book fa-1g"></span>&nbsp;<?php echo $education;?></h3>
						</header>
						<div>
							<header>
								<h5>2000-2004: <?php echo $elementarySchool; ?></h5>
							</header>
						</div>
						<div>
							<header>
								<h5>2004-2012: <?php echo $higherSchool; ?></h5>
							</header>
							<ul class="items">
								<li><?php echo $advancedLevelMath; ?></li>
								<li><?php echo $pseProfile; ?></li>
							</ul>
						</div>
						<div>
							<header>
								<h5>2012-<?php echo $now; ?>: <?php echo $universityHamburg; ?></h5>
							</header>
							<ul class="items">
								<li><?php echo $BScInformatics; ?></li>
							</ul>
						</div>
					</section>
				</div>
				<div class="col-md-6">
					<header>
						<h3><span class="fa fa-rocket fa-1g"></span> <?php echo $projects; ?></h3>
					</header>
					<div class="media">
						<a class="pull-left" href="http://www.plugins-zum-selberbauen.de">
							<img src="http://www.gravatar.com/avatar/56e3e8c0f394cc6f37d34d7f3473473b.png"
							class="media-object" width="64" height="64" alt="" />
						</a>
						<div class="media-body">
							<h5 class="media-heading">
								<a href="http://www.plugins-zum-selberbauen.de">Ultimate CMS Community</a>
								<span class="job pull-right"><?php echo $founder; ?></span>
							</h5>
							<p>
								<?php echo $pzsDesc; ?>
							</p>
						</div>
					</div>
					<div class="media">
						<a class="pull-left" href="https://github.com/frmwrk123/de.plugins-zum-selberbauen.ultimate">
							<img src="http://www.gravatar.com/avatar/56e3e8c0f394cc6f37d34d7f3473473b.png"
							class="media-object" width="64" height="64" alt="" />
						</a>
						<div class="media-body">
							<h5 class="media-heading">
								<a href="https://github.com/frmwrk123/de.plugins-zum-selberbauen.ultimate">Ultimate CMS</a>
								<span class="job pull-right"><?php echo $founder; ?> & <?php echo $mainDev; ?></span>
							</h5>
							<p>
								<?php echo $ultimateCMSDesc; ?>
							</p>
						</div>
					</div>
					<div class="media">
						<a class="pull-left" href="https://github.com/frmwrk123/symfony-wcf">
							<img src="http://www.gravatar.com/avatar/56e3e8c0f394cc6f37d34d7f3473473b.png"
							class="media-object" width="64" height="64" alt="" />
						</a>
						<div class="media-body">
							<h5 class="media-heading">
								<a href="https://github.com/frmwrk123/symfony-wcf">WCF Extensions</a>
								<span class="job pull-right"><?php echo $founder; ?> & <?php echo $mainDev; ?></span>
							</h5>
							<p>
								<?php echo $symfonyWCFDesc; ?>
							</p>
						</div>
					</div>
					<div class="media">
						<img class="pull-left" src="http://www.gravatar.com/avatar/56e3e8c0f394cc6f37d34d7f3473473b.png"
							class="media-object" width="64" height="64" alt="" />
						<div class="media-body">
							<h5 class="media-heading">
								WCF Plugins
							</h5>
							<p>
								<?php echo $wcfPluginsDesc; ?>
							</p>
						</div>
					</div>
					<div class="media">
						<a class="pull-left" href="https://github.com/WoltLab/WCF">
							<img src="https://www.gravatar.com/avatar/08538511cd161adb9fa81bba6774f242"
							class="media-object" width="64" height="64" alt="" />
						</a>
						<div class="media-body">
							<h5 class="media-heading">
								<a href="https://github.com/WoltLab/WCF">WCF</a>
								<span class="job pull-right"><?php echo $contributor; ?></span>
							</h5>
							<p>
								<?php echo $wcfDesc; ?>
							</p>
						</div>
					</div>
				</div>
			</div>
			<hr />
			<div class="row">
				<header class="center">
					<h2 class="center-block"><span class="fa fa-check fa-1g"></span>&nbsp;<?php echo $expectations; ?></h2>
				</header>
				<div class="col-md-6">
					<section>
						<header>
							<h3><span class="fa fa-exclamation fa-1g"></span>&nbsp;<?php echo $requirements; ?></h3>
						</header>
						<div>
							<header>
								<h5><?php echo $payment; ?></h5>
							</header>
							<ul class="items">
								<li><?php echo $geq20Euro; ?></li>
								<li><?php echo $max10Hours; ?></li>
								<li><?php echo $freeWorkingTime; ?></li>
							</ul>
						</div>
						<div>
							<header>
								<h5><?php echo $kindOfWork; ?></h5>
							</header>
							<ul class="items">
								<li><?php echo $noGirlForEverything; ?></li>
								<li><?php echo $noHighPressure; ?></li>
								<li><?php echo $noMissionCritical; ?></li>
							</ul>
						</div>
					</section>
				</div>
				<div class="col-md-6">
					<section>
						<header>
							<h3><span class="fa fa-compass fa-1g"></span> <?php echo $preferrable; ?></h3>
						</header>
						<div>
							<header>
								<h5><?php echo $kindOfWork; ?></h5>
							</header>
							<ul class="items">
								<li><?php echo $whenItsDone; ?></li>
								<li><?php echo $myOwnProjects; ?></li>
							</ul>
						</div>
					</section>
				</div>
			</div>
			<footer>
				<a class="pull-right" href="#impress"><?php echo $impress; ?></a>
				Copyright &copy; 2013-2014 - Jim Martens
			</footer>
		</div>
	</body>
</html>