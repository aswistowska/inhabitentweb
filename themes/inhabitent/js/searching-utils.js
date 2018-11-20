function showSearch() {
    let search_field = document.getElementById('header-search-field');

    if ( search_field.style.display == 'none' ) {
        search_field.style.display = 'inline';
    }
    else {
        search_field.style.display = 'none';
    }
}
