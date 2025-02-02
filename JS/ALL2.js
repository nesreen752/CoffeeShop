//menuIcon
let menuIcon = document.querySelector(".menu-icon");
let menuBar = document.querySelector(".menu-bar");

menuIcon.addEventListener("click", function() {
    if (menuBar.style.display === "block") {
        menuBar.style.display = "none"; 
    } else {
        menuBar.style.display = "block"; 
    }
});


//header
window.addEventListener('scroll', function() {
    const header = document.querySelector('header');
    const contentSection = document.querySelector('.dark'); // Change this to the class of your content section
    const logo = document.getElementById('logo');

    // Get the position of the content section
    const sectionTop = contentSection.getBoundingClientRect().top;

    // Check if the content section is in the viewport
    if (sectionTop <= 0) {
        header.classList.add('white-bg'); // Add class to change background
        logo.src = '../images/logo-1.png'; // Change logo when in viewport

    } else {
        header.classList.remove('white-bg'); // Remove class if not in viewport
        logo.src = '../images/logo-2.png'; // Revert to default logo

    }
});

//scrollToTopBtn
let scrollToTopBtn = document.getElementById("scrollToTopBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        scrollToTopBtn.style.display = "block";
    } else {
        scrollToTopBtn.style.display = "none";
    }
};

// When the user clicks on the button, scroll to the top of the document
scrollToTopBtn.onclick = function() {
    window.scrollTo({top: 0, behavior: 'smooth'});
};

// sidebar
document.addEventListener('DOMContentLoaded', function() {
    const barIcon = document.getElementById('bar');
    const sidebar = document.getElementById('sidebar');
    const closeSidebar = document.getElementById('closeSidebar');

    // Show sidebar when bar icon is clicked
    barIcon.addEventListener('click', function() {
        sidebar.classList.toggle('active'); 
    });

    // Close sidebar when close button is clicked
    closeSidebar.addEventListener('click', function() {
        sidebar.classList.remove('active'); 
    });
});
// console.log(5)



// Login start 
const User_Login=document.querySelector(".user_login");
const user_login_logout=document.querySelector(".user_login_logout");
User_Login.addEventListener("click",()=>{
    user_login_logout.classList.toggle("display_login");
})
// Login end  