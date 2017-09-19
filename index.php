<!DOCTYPE html>
<html>

<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">

    <link rel="stylesheet" href="css/freaking-custom.css" type="text/css">
    <link rel="stylesheet" href="css/adarsh.css" type="text/css">
</head>

<body ng-app="portfolio" ng-controller="portfolioCtrl">
    <div class="makeblur">
        <section id="mywork">
            <div class="container">
                <div class="section-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2 sec-title="MY PROJECTS">MY PROJECTS</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 m-b-md" ng-repeat="project in projects">
                        <div class="project-thumb">
                            <img class="img-responsive" src="img/projects/{{project}}.jpg">
                            <div class="project-overlay">
                                <i class="fa fa-search-plus zoom-modal" aria-hidden="true" data-toggle="modal" data-target="#{{project}}"></i>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="project-modal" ng-repeat="project in projects">
        <div id="{{project}}" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">{{project}}</h4>
                    </div>
                    <div class="modal-body">
                        <img class="img-responsive" src="img/projects/{{project}}.jpg">
                    </div>
                    <div class="modal-footer">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 text-center p-md mod-foot-elem" style="border-right:1px solid #ddd">
                                    <p class="m-none">Website</p>
                                </div>
                                <div class="col-xs-12 col-sm-6 text-center p-md mod-foot-elem" data-dismiss="modal">
                                    <p class="m-none">Close</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
    <script src="https://use.fontawesome.com/e49acd8124.js"></script>

    <script>
        angular.module("portfolio", []).controller("portfolioCtrl", function ($scope) {
            $scope.projects = ['supreme', 'labs', 'peacecafee', 'aqsa', 'beyondgreen']

        });
    </script>
    <script>
        $(document).ready(function () {
            $(".zoom-modal").click(function () {
                $(".makeblur").css("filter", "blur(25px)");
            });
            $(".project-modal .modal").click(function(){
                $(".makeblur").css("filter", "blur(0px)");
            });
        });
    </script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


</body>

</html>