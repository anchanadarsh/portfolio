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
        <section id="banner">
            <div class="banner-inner ">
                <h1 class=""><span>H</span><span>i</span><span>,</span><span>&nbsp;</span><span>I</span><span>'</span><span>m</span><span>&nbsp;</span><span>A</span><span>d</span><span>a</span><span>r</span><span>s</span><span>h</span><span>&nbsp;</span><span>A</span><span>n</span><span>c</span><span>h</span><span>a</span><span>n</span><span>,</span><br><span>W</span><span>e</span><span>b</span><span>&nbsp;</span><span>D</span><span>e</span><span>v</span><span>e</span><span>l</span><span>o</span><span>p</span><span>e</span><span>r</span><span>.</span></h1>
            </div>
        </section>
        <div class="clearfix"></div>
        <section id="aboutme">
<!--
            <div class="full-overlay">
                <img src="img/aboutbg2.jpeg" class="img-responsive">
            </div>
-->
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
                        <p>Hello, World! – started from there just like any other developer and now I’m here! Adarsh Anchan, an Engineer turned Website Developer, who now turns coffee into codes.</p>
                        <p>Here’s a simple approach I live by –
                            <br> C(reativity) – to drive me as a developer.
                            <br> O(riginality) – to retain uniqueness.
                            <br> D(esigning) – to make your ideas visual.
                            <br> I(nnovation) – to unlock new concepts.
                            <br> N(ew trends) – to keep up in digital media.
                            <br> G(usto) – to love what you do.</p>
                        <p>I love coding, I really do! I have never worked a day in my life since my work is also my hobby. Speaking of which, I can translate designs into working code.</p>
                        <!--
                        <p>Mastering the art of making ideas happen for various brands to dominate small screens – I try to bridge the gap between a brand and their audiences with my visually appealing and responsive websites.</p>
                        <p>With an excellent communication and good listening skills, I am able to garner client expectations and put forth it into actions. I always keep an eye out for new, different approaches and techniques. As a developer, I am never afraid of criticism as it helps me grow and forge ahead. </p>
                        <p>Just like how programming language is not a hard nut to crack for me, neither is solving problems. I like to work with people and not for or apart from them!</p>
-->
                        <p>Being an outgoing and zealous person, I make sure to have a little dose of fun at work – because why not! And if you were to catch me on my day off, I would either be playing cricket or football!</p>

                    </div>
                </div>
            </div>
        </section>
        <div class="clearfix"></div>
        <section id="mywork">
            <div class="full-overlay">
                <!--                <img src="img/project-bg.jpg" class="img-responsive">-->
            </div>
            <div class="switch-on-off-button">
                <p>Switch on</p>
                <div class="switch-on-shadow"></div>
            </div>
            <div class="light-on-bulb">
                <img src="img/bulb-on.png" width="100px">
            </div>
            <div class="light-off-overlay">
                <div class="light-off-bulb">
                    <!--                    <div class="bulb-off-overlay"></div>-->
                    <img src="img/bulb-off.png" width="100px">
                </div>
            </div>
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
                            <img class="img-responsive" src="img/projects/{{project.name}}.jpg">
                            <div class="project-overlay">
                                <i class="fa fa-search-plus zoom-modal" aria-hidden="true" data-toggle="modal" data-target="#{{project.name}}"></i>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <div class="clearfix"></div>
    </div>
    <div class="project-modal" ng-repeat="project in projects">
        <div id="{{project.name}}" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">{{project.name | uppercase}}</h4>
                    </div>
                    <div class="modal-body">
                        <img class="img-responsive" src="img/projects/{{project.name}}.jpg">
                    </div>
                    <div class="modal-footer">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 text-center p-md mod-foot-elem" style="border-right:1px solid #ddd">
                                    <a href="{{project.url}}" target="_blank">
                                        <p class="m-none">Website</p>
                                    </a>
                                </div>
                                <div class="col-xs-6 col-sm-6 text-center p-md mod-foot-elem" data-dismiss="modal">
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
        angular.module("portfolio", []).controller("portfolioCtrl", function($scope) {
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

        });

    </script>


</body>

</html>
