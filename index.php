<!doctype html>
<html lang="en-US">

<head>
    <title>Adarsh Anchan</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <?php include '_partial/head.php' ?>
</head>

<body ng-app="portfolio" ng-controller="portfolioCtrl">
    <header>
        <?php include '_partial/header.php' ?>
    </header>
    <div class="clearfix"></div>
    <div class="makeblur">
        <section id="aboutme">
            <div class="container">
                <div class="section-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2 sec-title="ABOUT ME">ABOUT ME</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-8">

                    </div>
                    <div class="col-xs-12 col-sm-4 p-none">
                        <img src="img/adarsh.jpg" class="img-responsive">
                    </div>
                </div>
            </div>
        </section>
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

    <div class="clearfix"></div>
    <footer>
        <?php include '_partial/footer.php' ?>
    </footer>
    <?php include '_partial/footer-scripts.php' ?>

        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>

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
                $(".project-modal .modal").click(function () {
                    $(".makeblur").css("filter", "blur(0px)");
                });
            });
        </script>


</body>

</html>