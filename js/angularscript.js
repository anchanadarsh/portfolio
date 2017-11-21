angular.module("portfolio", []).controller("portfolioCtrl", function ($scope) {
    $scope.projects = [{
        name: 'jdeyes',
        url: 'http://demo.quanical.com/jdeyes/'
            }, {
        name: 'starbulls',
        url: 'http://starbulls.kreativesanity.com/'
            }, {
        name: 'peacecafee',
        url: 'http://peacecafee.com/'
            }, {
        name: 'supreme',
        url: 'http://supremegroupindia.com/'
            }, {
        name: 'labs',
        url: 'https://lazyassbikers.com/'
            }, {
        name: 'fametraining',
        url: 'http://www.fametraining.ae/'
            }, {
        name: 'aqsa',
        url: 'http://www.aqsacomp.com/'
            }, {
        name: 'beyondgreen',
        url: 'http://beyondgreen.in/'
            }]

    $scope.skills = [{
        name: 'html',
        rating: 4
        }, {
        name: 'css',
        rating: 4
        }, {
        name: 'jQuery',
        rating: 3
        }, {
        name: 'javascript',
        rating: 2.5
        }, {
        name: 'angular',
        rating: 2
        }, {
        name: 'bootstrap',
        rating: 4
        }, {
        name: 'sass',
        rating: 3
        }, {
        name: 'less',
        rating: 2.5
        }, {
        name: 'material',
        rating: 3
        }, {
        name: 'wordpress',
        rating: 3
        }, {
        name: 'photoshop',
        rating: 3.5
        }, {
        name: 'php',
        rating: 2
    }]
});