function showSearch() {
    const search_field = document.getElementById('search-box');
    console.log(search_field.style.display);
    if ( !search_field.style.display || search_field.style.display == 'none' ) {
        search_field.style.display = 'inline';
        search_field.focus();
    }
    else {
        search_field.onblur = hideSearch();
    }
    
    function hideSearch() {
        search_field.style.display = 'none';
    }
}
