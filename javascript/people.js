const people = [
    /*{
        name: "Luke",
        role: "Team Member",
        position: "CAD",
        img: "sample.jpg"
    },*/
    {
        name: "Robin Gan",
        role: "Team Member",
        position: "Software Director",
        img: "Robin Gan.jpg"
    },
    {
        name: "Alex Lynd",
        role: "Team Member",
        position: "Web Dev Director",
        img: "Alex Lynd.jpg"
    },
    {
        name: "Luke Soliman",
        role: "Team Member",
        position: "Design Director",
        img: "Luke Soliman.jpg"
    }
];

var result = '';
for (let ele of people) {
    result += `
    <div class="event card peopleCard">
        <div class="grid-item image-grid">
            <img src="./img/people/`+ ele.img + `" alt="` + ele.name +`"/>
        </div>
        <div class="grid-item info-grid">
            <h4>`+ ele.name +`</h4>
            <p>`+ ele.role +`</p>
            <h5>`+ ele.position +`</h5>
        </div>
    </div>
    `;
}
document.getElementById('peopleBox').innerHTML = result;