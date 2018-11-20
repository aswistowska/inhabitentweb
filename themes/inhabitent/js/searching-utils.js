function showSearch() {
    let search_field = document.getElementById('search-box');

    if ( search_field.style.display == 'none' ) {
        search_field.style.display = 'inline';
    }
    else {
        search_field.style.display = 'none';
    }
}
