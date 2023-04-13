console.log("teseet")


const data = [
    {title : "Les bases de PHP", miniDesc: "Adapté aux débutants", image:"https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Image_created_with_a_mobile_phone.png/800px-Image_created_with_a_mobile_phone.png"},
    {title : "Gestion de projet", miniDesc: "Pilkoter des projets au quotidien", image:"https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Image_created_with_a_mobile_phone.png/800px-Image_created_with_a_mobile_phone.png"},
    {title : "Les bases de PHP", miniDesc: "Adapté aux débutants", image:"https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Image_created_with_a_mobile_phone.png/800px-Image_created_with_a_mobile_phone.png"},
    {title : "Gestion de projet", miniDesc: "Pilkoter des projets au quotidien", image:"https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Image_created_with_a_mobile_phone.png/800px-Image_created_with_a_mobile_phone.png"},
    {title : "Les bases de PHP", miniDesc: "Adapté aux débutants", image:"https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Image_created_with_a_mobile_phone.png/800px-Image_created_with_a_mobile_phone.png"},
    {title : "Gestion de projet", miniDesc: "Pilkoter des projets au quotidien", image:"https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Image_created_with_a_mobile_phone.png/800px-Image_created_with_a_mobile_phone.png"},
]
let cards = document.getElementById("cards")
for (item of data) {
    cards.innerHTML += `<div class="card" style="width: 18rem;">
    <img src=${item.image} class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">${item.title}</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
</div>`
}

console.log(cards.innerHTML)