let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
};

menu.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.removee('active');
};

document.querySelector('#close-edit').onclick = () =>{
    document.querySelector('.edit-form-container').style.display = 'none';
    window.location.href = 'addproduct.php';
};