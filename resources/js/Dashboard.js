const play = document.querySelectorAll('.category');

play.forEach(cat => {
    cat.addEventListener('click', () => {
        cat.classList.toggle('active');
    })
})