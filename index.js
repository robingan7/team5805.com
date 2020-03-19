var tag = document.createElement('script');
var canDisplay = false;
var canDisplay2 = false;
tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

const videoUrl = 'g8Y575O-hOc';
const videoUrl2 = 'dZktppr_DOI';
var player, player2;
function onYouTubeIframeAPIReady() {
    player = new YT.Player('player', {
        height: '315',
        width: '560',
        videoId: videoUrl,
        events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
        }
    });

    player2 = new YT.Player('player2', {
        height: '315',
        width: '560',
        videoId: videoUrl2,
        events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange2
        }
    });
}

function onPlayerReady(event) {
    event.target.playVideo();
    event.target.mute();
}

function onPlayerStateChange(event) {
    if (event.data != 1) {
        canDisplay = false;
    } else {
        canDisplay = true;
    }
    displayVideo();
    if (event.data == YT.PlayerState.ENDED) {
        repeatVideo();
    }
}

function onPlayerStateChange2(event) {
    if (event.data != 1) {
        canDisplay2 = false;
    } else {
        canDisplay2 = true;
    }
    displayVideo();
    if (event.data == YT.PlayerState.ENDED) {
        repeatVideo2();
    }
}

function repeatVideo() {
    player.cueVideoById({
        videoId: videoUrl,
        startSeconds: 0,
        endSeconds: 14
    });
    player.playVideo();
}

function repeatVideo2() {
    player2.cueVideoById({
        videoId: videoUrl2,
        startSeconds: 12,
        endSeconds: 120
    });
    player2.playVideo();
}

function displayVideo() {
    if (window.innerWidth < 650) {
        document.getElementById('player').style.opacity = '0';
    } else {
        if(canDisplay) {
            document.getElementById('player').style.opacity = '1';
        } else {
            document.getElementById('player').style.opacity = '0';
        }

        if(canDisplay2) {
            document.getElementById('player2').style.opacity = '1';
        } else {
            document.getElementById('player2').style.opacity = '0';
        }
    }
}

displayVideo();

window.addEventListener('resize', () => {
    displayVideo();
}, false);
