<?php
function printMenu($page){
    $home = '';
    $robots = '';
    $events = '';
    $people = '';
    $resources = '';

    if($page == 'home') {
        $home = ' active dark';
    } else if($page == 'robots') {
        $robots = ' active dark';
    } else if($page == 'events') {
        $events = ' active dark';
    }else if($page == 'people') {
        $people = ' active dark';
    }else if($page == 'resources') {
        $resources = ' active dark';
    }

    echo'<nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="/"><img class="logoImg" src="img/half_5805.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".foo" aria-controls="foo" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse foo">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item'.$home.'"> <a class="nav-link" href="/">Home<span class="sr-only">(current)</span></a> </li>
                <li class="nav-item'.$robots.'"> <a class="nav-link" href="robots">Robots</a> </li>
                <li class="nav-item'.$events.'"> <a class="nav-link" href="events">Events</a> </li>
                <!--<li class="nav-item dropdown'.$events.'">
                    <a class="nav-link dropdown-toggle" href="events" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Events
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Meetings</a>
                        <a class="dropdown-item" href="#">Competition</a>
                    </div>
                </li>-->
                <li class="nav-item dropdown'.$people.'">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        About
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="people">People</a>
                        <a class="dropdown-item" href="teams">Teams</a>
                    </div>
                </li>
                <li class="nav-item dropdown'.$resources.'">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Resources
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="http://5805docs.robingan.org">Reference Site</a>
                        <a class="dropdown-item" href="https://github.com/orgs/SMblyRequired">Github</a>
                        <a class="dropdown-item" href="https://frc-scope.com">Scouting Website</a>
                    </div>
                </li>
                <li class="nav-item"> <button type="button" class="btn btn-outline-primary donate" 
                    onclick="window.location.href = \'mailto:robotics@smhs.org\'">Donate</button></li>
              </ul>
            </div>
            <div class="collapse navbar-collapse foo">
                <ul class="navbar-nav ml-auto">
                    <!--<li class="nav-item logo-item">
                        <a class="nav-link" href="https://github.com/orgs/SMblyRequired/dashboard"><i class="fab fa-github"></i></a>
                    </li>-->
                    <li class="nav-item logo-item">
                        <a class="nav-link" href="mailto:robotics@smhs.org"><i class="fas fa-envelope"></i></a>
                    </li>
                    <li class="nav-item logo-item">
                        <a class="nav-link" href="https://twitter.com/smblyrequired"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li class="nav-item logo-item">
                        <a class="nav-link" href="https://www.instagram.com/smblyrequired5805"><i class="fab fa-instagram"></i></a>
                    </li>
                </ul>
            </div>
          </nav>';
}
?>

<!--loading bar-->
<div id="progressBar" class="progress-bar">
    <span class="bar">
        <span class="progress"></span>
    </span>
</div>