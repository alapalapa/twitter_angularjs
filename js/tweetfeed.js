(function(){
    var app = angular.module('request', []);
    

    app.controller('TwitterController', ['$http', function($http){
        this.tweets = [];

        this.getTweets = function(twitterCtrl){
            console.log('I am inside');

            var request = $http({
                method: "POST",
                url:"get-tweets.php",
                data:{
                    'user':"user1234",
                    'pass':"pass1234"
                }
            })            
            .success(function(data){
                console.log('success');
                twitterCtrl.tweets = data;
                console.log(twitterCtrl.tweets);
                /*
                console.log(this.tweets[1].text);
                console.log(this.tweets[1].created_at);
                console.log(this.tweets[1].user.name);
                console.log(this.tweets[1].source);
                */
            }).error(function(){
                console.log('error');
            });
            console.log('I am outside');
        };
    }]);

})();