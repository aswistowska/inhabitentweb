document.addEventListener("DOMContentLoaded", function () {
    const search_field = document.getElementById('search-box');

    document.querySelector('.search-toggle').addEventListener("click", function (event) {
            event.preventDefault();

            if (search_field.classList.contains('hidden')) {
                search_field.classList.remove('hidden');
                search_field.focus();
            }
            else {
                search_field.onblur = hideSearch();
            }

            function hideSearch() {
                search_field.classList.add('hidden');
            }
        }
    );
});