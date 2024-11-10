function showContent(section) {
    // Hide all content sections
    let contents = document.querySelectorAll('.content');
    contents.forEach(function(content) {
        content.classList.remove('active');
    });

    // Show the clicked section
    let activeSection = document.getElementById(section);
    if (activeSection) {
        activeSection.classList.add('active');
    }
}
