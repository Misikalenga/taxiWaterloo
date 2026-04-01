export default class FloatingCart {
    constructor(element, footer = document.querySelector('footer')) {
        if (!element) return; // Sécurité si l'élément n'existe pas sur la page
        this.element = element;
        this.footer = footer;
        this.init();
    }

    init() {
        // On écoute l'événement scroll
        window.addEventListener('scroll', () => {
            this.handleScroll();
        });
    }

    handleScroll() {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        const footer = this.footer.getBoundingClientRect();
        const positionElement = this.element.getBoundingClientRect();

        if (scrollTop > 20 && positionElement.bottom < (footer.top - 20)) {
            this.element.classList.remove('hidden');
            setTimeout(() => {
                this.element.classList.remove('translate-x-20', 'opacity-0');
                this.element.classList.add('translate-x-0', 'opacity-100');
            }, 10);
        } else {
            this.element.classList.add('translate-x-20', 'opacity-0');
            this.element.classList.remove('translate-x-0', 'opacity-100');
            
            setTimeout(() => {
                if (window.pageYOffset <= 20) {
                    this.element.classList.add('hidden');
                }
            }, 500);
        }
    }
}