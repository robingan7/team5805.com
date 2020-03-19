const awards = [
    {
        title: "Finalist",
        eventName: "2019 Orange County Regional"
    },
    {
        title: "Winner",
        eventName: "2018 Orange County Regional"
    },
    {
        title: "Finalist",
        eventName: "2016 Battle at the Border"
    },
    {
        title: "Highest Rookie Seed",
        eventName: "2016 San Diego Regional"
    },
    {
        title: "Rookie All Star",
        eventName: "2016 San Diego Regional"
    }
];

var result = '';
var minWidth = 0;
for (let ele in awards) {
    result += `<div class="banner collectt">
        <img src="./img/first_icon.svg" >
            <div class="award-name">
                <span>`+ awards[ele].title +`</span>
            </div>

            <div class="award-event">
                <span>`+ awards[ele].eventName +`</span>
            </div>
        </div>`;
    minWidth += 150;    
    if(ele > 10) {
        break;
    }
}
document.getElementById('bannersCollections').innerHTML = result;
document.getElementById('bannersCollections').style.minWidth = minWidth + 10 + 'px';