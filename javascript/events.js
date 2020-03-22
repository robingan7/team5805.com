const events = [
    {
        title: "Orange County Regional",
        desc: "Our home regional. Let's go 5805!!!",
        info: `
        <ul>
            <li>
                <p>[4/1/20 - 4/4/20]</p>
            </li>
            <li>
                <a href="https://maps.google.com/?cid=2296049349719343994">
                    <i class="fas fa-map-marked-alt"></i>
                    OC Fair & Event Center
                </a>
            </li>
            <li>
                <a href="https://cafirst.org/frc/orangecounty/">
                        <i class="fas fa-link"></i>
                    Event website 
                </a>
            </li>
        </ul>
        `
    },
    {
        title: "Der Mal Regional",
        desc: "First regional of 2020 season. Come and support the team. ",
        info: `
        <ul>
            <li>
                <p>[3/5/20 - 3/8/20]</p>
            </li>
            <li>
                <a href="https://maps.google.com/?cid=8504660696595664927">
                    <i class="fas fa-map-marked-alt"></i>
                    Del Mar Fairgrounds
                </a>
            </li>
            <li>
                <a href="https://cafirst.org/frc/delmar/">
                    <i class="fas fa-link"></i>
                    Event website 
                </a>
            </li>
        </ul>
        `
    },
    {
        title: "Club Rush",
        desc: "Come check out our club at club rush in the gym during lunch!  We'll be discussing some of the events and activites in our club.",
        info: `
        <ul>
            <li>
                <p>[8/29/19]</p>
            </li>
            <li>
                <a href="https://goo.gl/maps/SVKvMQeYjjJtAaQe6">
                    <i class="fas fa-map-marked-alt"></i>
                    SMCHS
                </a>
            </li>
        </ul>
        `
    }
];

var result = '';
for (let ele in events) {
    let current = events[ele];
    result += `
    <div class="event card">
        <div class="grid-item">
            <h1>`+ current.title +`</h1>
            <p>`+ current.desc +`</p>
            `+ current.info +`
        </div>  
    </div>
    `;
    if (ele > 10) {
        break;
    }
}
document.getElementById('eventBox').innerHTML = result;