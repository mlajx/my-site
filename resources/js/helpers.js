const helpers = {
    isScrolledIntoView(el, completely = false) {
        var rect = el.getBoundingClientRect();
        var elemTop = rect.top;
        var elemBottom = rect.bottom;

        if(completely) {
            return (elemTop >= 0) && (elemBottom <= window.innerHeight);
        }

        return elemTop < window.innerHeight && elemBottom >= 0;
    }
}

export default helpers;
