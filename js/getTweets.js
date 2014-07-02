(function(){
    var app = angular.module('twitterApi', []);


    app.controller('TwitterController', ['$http', function($http){
        this.tweets = [];

        this.getTweets = function(twitterCtrl){
            console.log('I am inside');

            var request = $http({
                method: "POST",
                url:"getTweets.php",
                headers: {'Authorization': 'xxx', 'Content-Type': 'application/json'},
                data:{
                    'user':"user1234",
                    'pass':"pass1234"
                }
            })            
            .success(function(data){
                twitterCtrl.tweets = data;
            }).error(function(){
                console.log('error');
            });
            console.log('I am outside');
        };
    }]);

})();

