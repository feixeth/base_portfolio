// var declaration

let menu = document.querySelector('#menu-btn');
let header = document.querySelector('.header');

// Arrow function - active les class et donc le menu au listener click;

menu.onclick = () => {
    menu.classList.toggle('fa-times');
    header.classList.toggle('active');
    document.body.classList.toggle('active');
}

// arrow function - remove la class en dessous de 991px;

window.onscroll = () => {
    if(window.innerWidth < 991){
        menu.classList.remove('fa-times');
        header.classList.remove('active');
        document.body.classList.remove('active');
    }

    /* essai creation d'un highlight sur le menu qui bouge avec le scroll 

        document.querySelectorAll('section').forEach(sec =>{

        let top = window.scrollY;
        let offset = sec.offsetTop;
        let height = sec.offsetHeight;
        let id = sec.getAttribute('id');

        if(top >= offset && top < offset + height){
            document.querySelectorAll('.header .navbar a').forEach(links =>{
                links.classList.remove('active');
                document.querySelector('.header .navbar a[href*='+ id + ']').classList.add('active')
            });
        }
    })*/


}
