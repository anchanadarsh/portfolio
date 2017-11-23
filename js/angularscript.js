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

    $scope.skills = [
        {
            name: 'html',
            rating: 4,
            color: '#f16429'
        }, {
            name: 'css',
            rating: 4,
            color: '#29a8e0'
        }, {
            name: 'jQuery',
            rating: 3,
            color: '#0f68ae'
        }, {
            name: 'javascript',
            rating: 2.5,
            color: '#fdda3e'
        }, {
            name: 'angular',
            rating: 2,
            color: '#e42d37'
        }, {
            name: 'bootstrap',
            rating: 4,
            color: '#5c2c4e'
        }, {
            name: 'sass',
            rating: 3,
            color: '#cd6799'
        }, {
            name: 'less',
            rating: 2.5,
            color: '#1e416f'
        }, {
            name: 'material',
            rating: 3,
            color: '#ec6f77'
        }, {
            name: 'wordpress',
            rating: 3,
            color: '#464442'
        }, {
            name: 'photoshop',
            rating: 3.5,
            color: '#32324c'
        }, {
            name: 'php',
            rating: 2,
            color: '#777bb3'
    }]

//    $scope.setbgColor = function (e) {
//        alert("hello");
//        var getcolor = e.getAttribute("setcolor");
//        alert(getcolor);
////        $("#myskills").css("background", "red");
//    }
});