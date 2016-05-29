function loadCSS(path) {
    var link = document.createElement('link');
    link.type = 'text/css';
    link.rel = 'stylesheet';
    link.href = path;
    document.getElementsByTagName('head')[0].appendChild(link);
}

loadCSS('/wp-content/themes/twentyfourteen/css/all.min.css');
