<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="pragma" content="no-cache">
		<!--<meta name="theme-color" content="#FAF911">

		<title>Bilderer</title>
	
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

		<!-- my styles -->
		<link href="css/global.css" rel="stylesheet"/>
    </head>
	<body>
        <div id="app">
            <router-link to="/">Start</router-link>
            <router-link to="/events">Events</router-link>
            <router-view></router-view>
        </div>
    </body>

    <script src="app/start.js"></script>
    <script src="app/events.js"></script>

	<script src="app/routes.js"></script>

    <script>
        const app = new Vue({
            router
        }).$mount('#app');
    </script>
</html>