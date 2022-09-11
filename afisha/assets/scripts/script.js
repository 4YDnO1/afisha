document.querySelector('.menu-bg').addEventListener('click', function() {
    document.querySelector('.menu').classList.remove('active');
    document.querySelector('.header__button').classList.remove('active');
    document.querySelector('.menu-bg').classList.add('hidden');
});
document.querySelector('.header__button').addEventListener('click', function() {
    document.querySelector('.menu').classList.toggle('active');
    document.querySelector('.header__button').classList.toggle('active');
    document.querySelector('.menu-bg').classList.toggle('hidden');
});

