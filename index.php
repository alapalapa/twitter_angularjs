<html ng-app="request">
	<head>
		<title>Requests</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/app.css">
	</head>
	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top">
  			<div class="container">
    			<h3 class="text-info">Twitter</h3>
  			</div>
		</nav>

		<div id="app" class="container">
			<div class="section-page-landing" id="twitter">
				<div class="inner-section">
					<div class="container text-center" id="tweets">
						<h2><span><a href="https://twitter.com/FutApp" target="_blank">@FutApp</a></span></h2>
						<div class="text-center" id="twitter-feed"></div>
					</div>
				</div>
			</div>

			<div ng-controller="TwitterController as twitter">
				<div>
					<button class="btn btn-default" ng-click="twitter.getTweets()">Get Tweets</button>
				</div>
				<div ng-repeat="data in twitter.tweets">
					<h3>{{data.text}}</h3>
				</div>
			</div>
		</div>
		<script src="js/angular.min.js" type="text/javascript"></script>
		<script src="js/tweetfeed.js" type="text/javascript"></script>
	</body>
</html>
