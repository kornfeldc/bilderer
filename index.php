<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Bilderer</title>

		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- jquery -->
		<script src="bower_components/jquery/dist/jquery.min.js" type="text/javascript"></script>
			
		<!-- vue | https://vuejs.org/ -->
		<script src="bower_components/vue/dist/vue.min.js" type="text/javascript"></script>
		<!-- vue-router | https://github.com/vuejs/vue-router help: http://router.vuejs.org/de/-->
		<script src="bower_components/vue-router/dist/vue-router.min.js" type="text/javascript"></script>

		<!-- fontawesome | http://fontawesome.io/ -->
		<script src="https://use.fontawesome.com/877ad47a09.js"></script>

		<!-- raleway font -->
		<!-- https://fonts.google.com/specimen/Raleway -->
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"/>

		<!-- bootstrap#v4.0.0-alpha.6 | https://v4-alpha.getbootstrap.com/getting-started/introduction/#starter-template -->
		<script src="bower_components/tether/dist/js/tether.min.js" type="text/javascript"></script>
		<script src="bower_components/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
		<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css" />

		<!-- my styles -->
		<link href="css/global.css" rel="stylesheet"/>

  	</head>

  	<body>
    	<div id="app">
			<nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse">
				<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<router-link to="/" class="navbar-brand">
					<img src="img/bilderer_w.png" height="40"/>
					Bilderer
				</router-link>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item">
							<router-link to="/events" class="nav-link">Events</router-link>
						</li>
					</ul>
				</div>
			</nav>
			<router-view></router-view>
		</div>
	</body>

	<script src="app/start.js?<?php echo rand()?>"></script>
	<script src="app/events.js?<?php echo rand()?>"></script>

	<script src="app/routes.js?<?php echo rand()?>"></script>

	<script>
		const app = new Vue({
			router
		}).$mount('#app');
	</script>
</html>