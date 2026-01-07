document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.accordion').forEach(elm => {
        const button = elm.querySelector('.toggle-button');
        const content = elm.querySelector('.content');

        button.addEventListener('click', () => {
            const isOpen = !content.classList.contains('invisible');

            // toggle visibility
            content.classList.toggle('invisible');
            content.classList.toggle('pb-6');

            // height animation
            content.style.maxHeight = isOpen
                ? '0px'
                : content.scrollHeight + 'px';

            // button color
            button.classList.toggle('text-teal-600', !isOpen);
            button.classList.toggle('text-slate-900', isOpen);
        });
    });
});
