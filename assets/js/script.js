document.addEventListener("DOMContentLoaded", function () {
    const themeToggle = document.getElementById("theme-toggle");
    const htmlElement = document.documentElement;
    const body = document.body;
    const moonIcon = document.getElementById("moon-icon");
    const sunIcon = document.getElementById("sun-icon");

    // Check user preference from localStorage
    if (localStorage.getItem("theme") === "dark") {
        body.classList.add("dark-mode");
        moonIcon.classList.add("hidden");
        sunIcon.classList.remove("hidden");
    }

    // Toggle Dark Mode
    themeToggle.addEventListener("click", function () {
        if (body.classList.contains("dark-mode")) {
            body.classList.remove("dark-mode");
            localStorage.setItem("theme", "light");
            moonIcon.classList.remove("hidden");
            sunIcon.classList.add("hidden");
        } else {
            body.classList.add("dark-mode");
            localStorage.setItem("theme", "dark");
            moonIcon.classList.add("hidden");
            sunIcon.classList.remove("hidden");
        }
    });

    
    document.addEventListener("DOMContentLoaded", function () {
        const serviceCards = document.querySelectorAll(".service-card");
        let lastScrollY = window.scrollY; // Track previous scroll position
    
        function revealOnScroll() {
            const currentScrollY = window.scrollY;
            const isScrollingDown = currentScrollY > lastScrollY;
    
            serviceCards.forEach((card) => {
                const rect = card.getBoundingClientRect();
                const windowHeight = window.innerHeight;
    
                if (rect.top < windowHeight * 0.85 && rect.bottom > 0) {
                    // If scrolling down and element is in view, fade in
                    card.style.opacity = 1;
                    card.style.transform = "translateY(0)";
                } else if (!isScrollingDown) {
                    // If scrolling up, reset animation so it plays again
                    card.style.opacity = 0;
                    card.style.transform = "translateY(40px)";
                }
            });
    
            lastScrollY = currentScrollY; // Update last scroll position
        }
    
        window.addEventListener("scroll", revealOnScroll);
        revealOnScroll(); // Run on page load
    });
    
    document.addEventListener("DOMContentLoaded", function () {
        const filterButtons = document.querySelectorAll(".filter-btn");
        const projects = document.querySelectorAll(".project-card");
    
        filterButtons.forEach(button => {
            button.addEventListener("click", function () {
                const category = this.getAttribute("data-filter");
    
                projects.forEach(project => {
                    if (category === "all") {
                        project.style.display = "block";  // Show all projects
                    } else {
                        if (project.getAttribute("data-category") === category) {
                            project.style.display = "block";  // Show matching category
                        } else {
                            project.style.display = "none";  // Hide non-matching category
                        }
                    }
                });
    
                // Remove active styles from all buttons
                filterButtons.forEach(btn => btn.classList.remove("bg-blue-600", "text-white"));
    
                // Add active styles to the clicked button
                this.classList.add("bg-blue-600", "text-white");
            });
        });
    });
    
        
});
