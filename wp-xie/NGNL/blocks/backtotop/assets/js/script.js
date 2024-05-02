document.addEventListener('scroll', (event) => {
    document.querySelectorAll('.wp-block-zavatta-backtotop').forEach((block) => {
        let hideOnTop = block.getAttribute('data-hideontop');
        if (hideOnTop === "true") {
            if (window.scrollY < window.innerHeight) {
                block.classList.add('hidden');
            } else {
                block.classList.remove('hidden');
            }
        }
    });
});
