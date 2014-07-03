(function(){
    var app = angular.module('twitterApi', []);


    app.controller('TwitterController', ['$http', function($http){
        this.tweets = [];

        this.getTweets = function(twitterCtrl){
            console.log('I am inside');

            var request = $http({
                method: "POST",
                url:"http://localhost/twitter/getTweets.php",
                //withCredentials: true,
                headers: {'Accept': 'application/json','Authorization': 'xxxx', 'Content-Type': 'application/json'},
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

