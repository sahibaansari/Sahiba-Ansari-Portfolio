<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sahiba M Ansari | Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="module" crossorigin="" src="assets/js/script.js"></script>
    <!-- Load React Development Version (for debugging) -->
    <script src="https://unpkg.com/react@18/umd/react.development.js" crossorigin></script>
    <script src="https://unpkg.com/react-dom@18/umd/react-dom.development.js" crossorigin></script>

</head>

<body class="bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-gray-200">
<?php if(isset($_GET['success'])): ?>
    <div class="bg-green-500 text-white text-center py-3 px-4">
        ✅ Your message has been sent successfully!
    </div>
<?php elseif(isset($_GET['error'])): ?>
    <div class="bg-red-500 text-white text-center py-3 px-4">
        ❌ Something went wrong. Please try again.
    </div>
<?php endif; ?>

  <div id="root">
    <!-- Navigation Bar -->
    <header class="w-full bg-white dark:bg-gray-800 shadow-md fixed top-0 z-50">
        <div class="container mx-auto flex justify-between items-center py-4 px-6">
            <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Sahiba M Ansari</h1>
            <nav class="hidden md:flex items-center space-x-8">
              <a href="#services" class="nav-link text-gray-900 dark:text-white">Services</a>
              <a href="#experience" class="nav-link text-gray-900 dark:text-white">Experience</a>
              <!-- <a href="#projects" class="nav-link text-gray-900 dark:text-white">Projects</a> -->
              <a href="contact.html" class="nav-link text-gray-900 dark:text-white">Contact</a>
            </nav>
            <div class="hidden md:flex items-center space-x-4">
              <a href="https://github.com/settings/profile" target="_blank" rel="noopener noreferrer" class="nav-link">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-github w-5 h-5">
                  <path d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4"></path>
                  <path d="M9 18c-4.51 2-5-2-7-2"></path>
                </svg>
              </a>
              <a href="https://www.linkedin.com/in/sahiba-ansari27/" target="_blank" rel="noopener noreferrer" class="nav-link">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-linkedin w-5 h-5">
                  <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                  <rect width="4" height="12" x="2" y="9"></rect>
                  <circle cx="4" cy="4" r="2"></circle>
                </svg>
              </a>
              <a href="https://x.com/iamsahibaansari" target="_blank" rel="noopener noreferrer" class="nav-link">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-twitter w-5 h-5">
                  <path d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z"></path>
                </svg>
              </a>
              <button id="theme-toggle" class="p-2 rounded-lg bg-gray-100 dark:bg-gray-800 text-gray-600 dark:text-gray-300" 
              aria-label="Toggle theme">
          
          <!-- Moon Icon (Dark Mode) -->
          <svg id="moon-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" 
               stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" 
               class="lucide lucide-moon w-5 h-5">
              <path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z"></path>
          </svg>
      
          <!-- Sun Icon (Light Mode) -->
          <svg id="sun-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" 
               stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" 
               class="lucide lucide-sun w-5 h-5 hidden">
              <circle cx="12" cy="12" r="4"></circle>
              <path d="M12 2v2"></path>
              <path d="M12 20v2"></path>
              <path d="m4.93 4.93 1.41 1.41"></path>
              <path d="m17.66 17.66 1.41 1.41"></path>
              <path d="M2 12h2"></path>
              <path d="M20 12h2"></path>
              <path d="m6.34 17.66-1.41 1.41"></path>
              <path d="m19.07 4.93-1.41 1.41"></path>
          </svg>
      
      </button>
        </div>
    </header>

   <!-- Hero Section -->
<section class="flex flex-col md:flex-row items-center justify-between container mx-auto px-6 py-20 md:py-32 gap-12">
    <!-- Text Content -->
    <div class="md:w-1/2 text-center md:text-left">
        <h1 class="text-4xl md:text-6xl font-bold mb-6 text-gray-900 dark:text-white">Hi, I'm Sahiba Ansari</h1>
        
        <!-- Profession Title -->
        <div class="text-xl md:text-2xl text-gray-600 dark:text-gray-300 mb-8">
            <span id="changing-text" class="font-semibold text-indigo-600 dark:text-indigo-400">Web Designer & Developer</span>
        </div>
        
        <!-- Your Paragraph with Emojis -->
        <div class="space-y-6 max-w-2xl mx-auto md:mx-0 text-xl md:text-2xl text-gray-700 dark:text-gray-300 leading-relaxed">
            <p>
                Hey, I'm Sahiba. I work as a <span class="text-2xl">🌐</span> web designer and <span class="text-2xl">&lt;/&gt;</span> developer.<br>
                Designing interfaces and bringing them to life in development is one of my favourite things to do.
            </p>
            
            <p>
                Outside of this, I love listening to <span class="text-2xl">🎧</span> music, playing <span class="text-2xl">🎮</span> video games, and spending time with my family.
            </p>
        </div>
        
        <!-- CTA Button -->
        <div class="pt-8">
            <a href="contact.html" class="inline-block bg-indigo-600 hover:bg-indigo-700 text-white px-8 py-3 rounded-lg text-lg font-semibold transition duration-300">
            Get in Touch
            </a>
        </div>
    </div>
    
    <div class="md:block mt-12">
            <img src="assets/images/sahiba2.jpg" alt="Sahiba M Ansari" class="rounded-2xl shadow-2xl" style="width: 700px; height: auto;">
        </div>
</section>

     <!-- Services Section -->
     <section id="services" class="py-20">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12">My Services</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service 1 -->
        <div class="service-card bg-white dark:bg-gray-900 rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow" style="opacity: 1; transform: none;"><div class="w-12 h-12 bg-blue-100 dark:bg-blue-900 rounded-lg flex items-center justify-center mb-6"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-app-window w-6 h-6 text-blue-600 dark:text-blue-400"><rect x="2" y="4" width="20" height="16" rx="2"></rect><path d="M10 4v4"></path><path d="M2 8h20"></path><path d="M6 4v4"></path></svg></div><h3 class="text-xl font-bold mb-3">Web Apps</h3><p class="text-gray-600 dark:text-gray-400">Custom web applications built with modern frameworks and best practices</p></div>
        <div class="service-card bg-white dark:bg-gray-900 rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow" style="opacity: 1; transform: none;"><div class="w-12 h-12 bg-blue-100 dark:bg-blue-900 rounded-lg flex items-center justify-center mb-6"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-globe w-6 h-6 text-blue-600 dark:text-blue-400"><circle cx="12" cy="12" r="10"></circle><path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path><path d="M2 12h20"></path></svg></div><h3 class="text-xl font-bold mb-3">Websites</h3><p class="text-gray-600 dark:text-gray-400">Responsive and performant websites optimized for search engines</p></div>
        <div class="service-card bg-white dark:bg-gray-900 rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow" ><div class="w-12 h-12 bg-blue-100 dark:bg-blue-900 rounded-lg flex items-center justify-center mb-6"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-building2 w-6 h-6 text-blue-600 dark:text-blue-400"><path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"></path><path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"></path><path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2"></path><path d="M10 6h4"></path><path d="M10 10h4"></path><path d="M10 14h4"></path><path d="M10 18h4"></path></svg></div><h3 class="text-xl font-bold mb-3">CRM/ERP Solutions</h3><p class="text-gray-600 dark:text-gray-400">Integrated business solutions for improved efficiency</p></div>
        <div class="service-card bg-white dark:bg-gray-900 rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow" style="opacity: 1; transform: none;"><div class="w-12 h-12 bg-blue-100 dark:bg-blue-900 rounded-lg flex items-center justify-center mb-6"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-terminal w-6 h-6 text-blue-600 dark:text-blue-400"><polyline points="4 17 10 11 4 5"></polyline><line x1="12" x2="20" y1="19" y2="19"></line></svg></div><h3 class="text-xl font-bold mb-3">CLI Tools</h3><p class="text-gray-600 dark:text-gray-400">Command-line tools for automation and productivity</p></div>
        <div class="service-card bg-white dark:bg-gray-900 rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow" style="opacity: 1; transform: none;"><div class="w-12 h-12 bg-blue-100 dark:bg-blue-900 rounded-lg flex items-center justify-center mb-6"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-message-square w-6 h-6 text-blue-600 dark:text-blue-400"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg></div><h3 class="text-xl font-bold mb-3">Discord Bots</h3><p class="text-gray-600 dark:text-gray-400">Custom Discord bots for community management</p></div>
        <div class="service-card bg-white dark:bg-gray-900 rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow" ><div class="w-12 h-12 bg-blue-100 dark:bg-blue-900 rounded-lg flex items-center justify-center mb-6"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-plug2 w-6 h-6 text-blue-600 dark:text-blue-400"><path d="M9 2v6"></path><path d="M15 2v6"></path><path d="M12 17v5"></path><path d="M5 8h14"></path><path d="M6 11V8h12v3a6 6 0 1 1-12 0v0Z"></path></svg></div><h3 class="text-xl font-bold mb-3">WordPress Plugins</h3><p class="text-gray-600 dark:text-gray-400">Custom WordPress plugins for extended functionality</p></div>
        <div class="service-card bg-white dark:bg-gray-900 rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow" style="opacity: 1; transform: none;"><div class="w-12 h-12 bg-blue-100 dark:bg-blue-900 rounded-lg flex items-center justify-center mb-6"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-monitor-check w-6 h-6 text-blue-600 dark:text-blue-400"><path d="m9 10 2 2 4-4"></path><rect width="20" height="14" x="2" y="3" rx="2"></rect><path d="M12 17v4"></path><path d="M8 21h8"></path></svg></div><h3 class="text-xl font-bold mb-3">Desktop Apps</h3><p class="text-gray-600 dark:text-gray-400">Cross-platform desktop applications for Windows, macOS, and Linux</p></div>   
        <div class="service-card bg-white dark:bg-gray-900 rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow" style="opacity: 1; transform: none;"><div class="w-12 h-12 bg-blue-100 dark:bg-blue-900 rounded-lg flex items-center justify-center mb-6"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-server w-6 h-6 text-blue-600 dark:text-blue-400"><rect width="20" height="8" x="2" y="2" rx="2" ry="2"></rect><rect width="20" height="8" x="2" y="14" rx="2" ry="2"></rect><line x1="6" x2="6.01" y1="6" y2="6"></line><line x1="6" x2="6.01" y1="18" y2="18"></line></svg></div><h3 class="text-xl font-bold mb-3">API Development</h3><p class="text-gray-600 dark:text-gray-400">RESTful APIs for data exchange between systems</p></div>
        <div class="service-card bg-white dark:bg-gray-900 rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow" ><div class="w-12 h-12 bg-blue-100 dark:bg-blue-900 rounded-lg flex items-center justify-center mb-6"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-database w-6 h-6 text-blue-600 dark:text-blue-400"><ellipse cx="12" cy="5" rx="9" ry="3"></ellipse><path d="M3 5V19A9 3 0 0 0 21 19V5"></path><path d="M3 12A9 3 0 0 0 21 12"></path></svg></div><h3 class="text-xl font-bold mb-3">Database Design</h3><p class="text-gray-600 dark:text-gray-400">Optimized database design for efficient data storage and retrieval</p></div>
        <div class="service-card bg-white dark:bg-gray-900 rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow" style="opacity: 1; transform: none;"><div class="w-12 h-12 bg-blue-100 dark:bg-blue-900 rounded-lg flex items-center justify-center mb-6"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shopping-cart w-6 h-6 text-blue-600 dark:text-blue-400"><circle cx="8" cy="21" r="1"></circle><circle cx="19" cy="21" r="1"></circle><path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"></path></svg></div><h3 class="text-xl font-bold mb-3">E-commerce Solutions</h3><p class="text-gray-600 dark:text-gray-400">Custom e-commerce solutions for online stores</p></div>
        <div class="service-card bg-white dark:bg-gray-900 rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow" style="opacity: 1; transform: none;"><div class="w-12 h-12 bg-blue-100 dark:bg-blue-900 rounded-lg flex items-center justify-center mb-6"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-smartphone w-6 h-6 text-blue-600 dark:text-blue-400"><rect width="14" height="20" x="5" y="2" rx="2" ry="2"></rect><path d="M12 18h.01"></path></svg></div><h3 class="text-xl font-bold mb-3">Mobile Apps</h3><p class="text-gray-600 dark:text-gray-400">Cross-platform mobile applications for iOS and Android</p></div>
        <div class="service-card bg-white dark:bg-gray-900 rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow" ><div class="w-12 h-12 bg-blue-100 dark:bg-blue-900 rounded-lg flex items-center justify-center mb-6"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-search w-6 h-6 text-blue-600 dark:text-blue-400"><circle cx="11" cy="11" r="8"></circle><path d="m21 21-4.3-4.3"></path></svg></div><h3 class="text-xl font-bold mb-3">SEO Services</h3><p class="text-gray-600 dark:text-gray-400">Search engine optimization for improved visibility and ranking</p></div>
        </div>
        </div>
    </section>

    <section id="experience" class="py-20 bg-white dark:bg-gray-900">
        <div class="container mx-auto px-6">
          <h2 class="text-3xl md:text-4xl font-bold text-center mb-16">Professional Experience</h2>
          <div class="max-w-4xl mx-auto">
      
            <div class="experience-entry relative pl-8 pb-12 border-l-2 border-blue-600 last:pb-0">
              <div class="absolute left-[-9px] top-0">
                <div class="w-4 h-4 rounded-full bg-blue-600"></div>
              </div>
              <div class="bg-gray-50 dark:bg-gray-800 rounded-lg p-6 shadow-lg">
                <div class="flex items-center mb-4">
                  <img src="assets/images/logo.png" alt="codora tech" class="w-12 h-12 rounded-full object-cover mr-4">
                  <h3 class="text-xl font-bold">CODORA Tech</h3>
                </div>
                <p class="text-lg font-semibold text-gray-700 dark:text-gray-300 mb-2">Founder &amp; CEO</p>
                <p class="text-gray-600 dark:text-gray-400 mb-4">2024-02 - Present</p>
                <div class="space-y-4">
                  <div>
                    <h4 class="font-semibold mb-2">Key Responsibilities:</h4>
                    <ul class="list-disc list-inside space-y-1">
                      <li class="text-gray-600 dark:text-gray-400">Leading a team of developers</li>
                      <li class="text-gray-600 dark:text-gray-400">Developing various software solutions</li>
                      <li class="text-gray-600 dark:text-gray-400">Designing software infrastructure</li>
                      <li class="text-gray-600 dark:text-gray-400">Building scalable and efficient web solutions</li>
                    </ul>
                  </div>
                  <div>
                    <h4 class="font-semibold mb-2">Key Skills:</h4>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">Leadership, Software Development, Software Design, Web Engineering, Software Infrastructure</p>
                  </div>
                </div>
              </div>
            </div>
      
            <div class="experience-entry relative pl-8 pb-12 border-l-2 border-blue-600 last:pb-0">
              <div class="absolute left-[-9px] top-0">
                <div class="w-4 h-4 rounded-full bg-blue-600"></div>
              </div>
              <div class="bg-gray-50 dark:bg-gray-800 rounded-lg p-6 shadow-lg">
                <div class="flex items-center mb-4">
                  <img src="assets/images/gamecloud.jpg" alt="gamecloud" class="w-12 h-12 rounded-full object-cover mr-4">
                  <h3 class="text-xl font-bold">Game Cloud Technology</h3>
                </div>
                <p class="text-lg font-semibold text-gray-700 dark:text-gray-300 mb-2">Game Developer</p>
                <p class="text-gray-600 dark:text-gray-400 mb-4">2024-06 </p>
                <div class="space-y-4">
                  <div>
                    <h4 class="font-semibold mb-2">Key Responsibilities:</h4>
                    <ul class="list-disc list-inside space-y-1">
                      <li class="text-gray-600 dark:text-gray-400">Developing game applications using C#.net</li>
                      <li class="text-gray-600 dark:text-gray-400">Designing game infrastructure</li>
                      <li class="text-gray-600 dark:text-gray-400">Building scalable and efficient solutions</li>
                    </ul>
                  </div>
                  <div>
                    <h4 class="font-semibold mb-2">Key Skills:</h4>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">C#, Software Design, Web Engineering, Unity, Software Infrastructure</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="experience-entry relative pl-8 pb-12 border-l-2 border-blue-600 last:pb-0">
                <div class="absolute left-[-9px] top-0">
                  <div class="w-4 h-4 rounded-full bg-blue-600"></div>
                </div>
                <div class="bg-gray-50 dark:bg-gray-800 rounded-lg p-6 shadow-lg">
                  <div class="flex items-center mb-4">
                    <img src="assets/images/abracadabra.jpg" alt="abracadabra" class="w-12 h-12 rounded-full object-cover mr-4">
                    <h3 class="text-xl font-bold">Abracadabra Software pvt ltd</h3>
                  </div>
                  <p class="text-lg font-semibold text-gray-700 dark:text-gray-300 mb-2">Software Developer</p>
                  <p class="text-gray-600 dark:text-gray-400 mb-4">2024-03</p>
                  <div class="space-y-4">
                    <div>
                      <h4 class="font-semibold mb-2">Key Responsibilities:</h4>
                      <ul class="list-disc list-inside space-y-1">
                        <li class="text-gray-600 dark:text-gray-400">Overseeing playstore and operations management</li>
                        <li class="text-gray-600 dark:text-gray-400">Leading people management strategies</li>
                        <li class="text-gray-600 dark:text-gray-400">Working with firebase authentication</li>
                        <li class="text-gray-600 dark:text-gray-400">Implementing Object-Oriented Programming principles</li>
                        <li class="text-gray-600 dark:text-gray-400">Integrating Ad in applications</li>
                      </ul>
                    </div>
                    <div>
                      <h4 class="font-semibold mb-2">Key Skills:</h4>
                      <p class="text-gray-600 dark:text-gray-400 mb-4">Marketing Management, People Management, Firebase, Object-Oriented Programming (OOP), API Integration, Firebse Database</p>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="experience-entry relative pl-8 pb-12 border-l-2 border-blue-600 last:pb-0">
                <div class="absolute left-[-9px] top-0">
                  <div class="w-4 h-4 rounded-full bg-blue-600"></div>
                </div>
                <div class="bg-gray-50 dark:bg-gray-800 rounded-lg p-6 shadow-lg">
                  <div class="flex items-center mb-4">
                    <img src="assets/images/kkwagh.png" alt="KKWEER" class="w-12 h-12 rounded-full object-cover mr-4">
                    <h3 class="text-xl font-bold">K.K.Wagh Institute of Enginering and Technology</h3>
                  </div>
                  <p class="text-lg font-semibold text-gray-700 dark:text-gray-300 mb-2">Masters Of Computer Applications</p>
                  <p class="text-gray-600 dark:text-gray-400 mb-4">2022-12 </p>
                  <div class="space-y-4">
                    <div>
                      <h4 class="font-semibold mb-2">Key Responsibilities:</h4>
                      <ul class="list-disc list-inside space-y-1">
                        <li class="text-gray-600 dark:text-gray-400">Learn IT operations and cybersecurity tools</li>
                        <li class="text-gray-600 dark:text-gray-400">Learn data and network security</li>
                        <li class="text-gray-600 dark:text-gray-400">Learn AI/ML and data science</li>
                        <li class="text-gray-600 dark:text-gray-400">Manage many seminars and tornaments </li>
                        <li class="text-gray-600 dark:text-gray-400">Manage technical strategy and execution</li>
                        <li class="text-gray-600 dark:text-gray-400">Developing embedded software</li>
                        <li class="text-gray-600 dark:text-gray-400">Executing technical projects as a solo performer</li>
                      </ul>
                    </div>
                    <div>
                      <h4 class="font-semibold mb-2">Key Skills:</h4>
                      <p class="text-gray-600 dark:text-gray-400 mb-4">Network Security, Cybersecurity, IT Management, Data Security, Technology Leadership, Technology Management, Embedded Software, Solo Performance,AI/ML</p>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="experience-entry relative pl-8 pb-12 border-l-2 border-blue-600 last:pb-0">
                <div class="absolute left-[-9px] top-0">
                  <div class="w-4 h-4 rounded-full bg-blue-600"></div>
                </div>
                
                </div>
              </div>
      
            </div>
        </div>
      </section>
<!-- project
<section id="projects" class="py-20 bg-white dark:bg-gray-900">
  <div class="container mx-auto px-6">
    <h2 class="text-3xl md:text-4xl font-bold text-center mb-16">Project Portfolio</h2>

    <div class="flex flex-wrap justify-center gap-4 mb-12">
      <button class="px-6 py-2 rounded-full transition-colors bg-blue-600 text-white" data-filter="all">All</button>
      <button class="px-6 py-2 rounded-full transition-colors bg-gray-100 dark:bg-gray-800 hover:bg-gray-200 dark:hover:bg-gray-700" data-filter="plugins">Plugins</button>
      <button class="px-6 py-2 rounded-full transition-colors bg-gray-100 dark:bg-gray-800 hover:bg-gray-200 dark:hover:bg-gray-700" data-filter="bots">Bots</button>
      <button class="px-6 py-2 rounded-full transition-colors bg-gray-100 dark:bg-gray-800 hover:bg-gray-200 dark:hover:bg-gray-700" data-filter="cli-tools">CLI Tools</button>
      <button class="px-6 py-2 rounded-full transition-colors bg-gray-100 dark:bg-gray-800 hover:bg-gray-200 dark:hover:bg-gray-700" data-filter="web-apps">Web Apps</button>
    </div>

    <div class ="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      <div class="bg-gray-50 dark:bg-gray-800 rounded-xl overflow-hidden shadow-lg" data-category="plugins">
        <div class="relative group">
          <img src="https://cdn.sarveshmrao.in/website-resources/wp-discord-invite.jpg" alt="WP Discord Invite" class="w-full h-48 object-cover">
          <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center space-x-4">
            <a href="https://go.sarveshmrao.in/wp-discord-invite?mtm_source=website" target="_blank" rel="noopener noreferrer" class="p-2 bg-white rounded-full hover:bg-gray-100">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-external-link w-5 h-5 text-gray-900">
                <path d="M15 3h6v6"></path><path d="M10 14 21 3"></path><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
              </svg>
            </a>
            <a href="https://github.com/sarveshmrao/wp-discord-invite" target="_blank" rel="noopener noreferrer" class="p-2 bg-white rounded-full hover:bg-gray-100">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-github w-5 h-5 text-gray-900">
                <path d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4"></path><path d="M9 18c-4.51 2-5-2-7-2"></path>
              </svg>
            </a>
          </div>
        </div>
        <div class="p-6">
          <h3 class="text-xl font-bold mb-2">WP Discord Invite</h3>
          <p class="text-gray-600 dark:text-gray-400 mb-4">WordPress plugin to invite users to Discord servers</p>
          <div class="flex flex-wrap gap-2">
            <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-600 dark:text-blue-400 rounded-full text-sm">WordPress</span>
            <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-600 dark:text-blue-400 rounded-full text-sm">PHP</span>
            <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-600 dark:text-blue-400 rounded-full text-sm">MySQL</span>
            <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-600 dark:text-blue-400 rounded-full text-sm">Discord API</span>
          </div>
        </div>
      </div>
      <div class="bg-gray-50 dark:bg-gray-800 rounded-xl overflow-hidden shadow-lg" data-category="bots">
        <div class="relative group">
          <img src="https://cdn.sarveshmrao.in/website-resources/nyaru-bot.jpg" alt="Nyaru Discord Bot" class="w-full h-48 object-cover">
          <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center space-x-4">
            <a href="https://go.sarveshmrao.in/nyaru?mtm_source=website" target="_blank" rel="noopener noreferrer" class="p-2 bg-white rounded-full hover:bg-gray-100">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-external-link w-5 h-5 text-gray-900">
                <path d="M15 3h6v6"></path><path d="M10 14 21 3"></path><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
              </svg>
            </a>
          </div>
        </div>
        <div class="p-6">
          <h3 class="text-xl font-bold mb-2">Nyaru Discord Bot</h3>
          <p class="text-gray-600 dark:text-gray-400 mb-4">A public Discord Bot with features like Mod, Leveling etc,.</p>
          <div class="flex flex-wrap gap-2">
            <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-600 dark:text-blue-400 rounded-full text-sm">Node.js</span>
            <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-600 dark:text-blue-400 rounded-full text-sm">Discord.js</span>
            <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-600 dark:text-blue-400 rounded-full text-sm">MongoDB</span>
          </div>
        </div>
      </div>
      <div class="bg-gray-50 dark:bg-gray-800 rounded-xl overflow-hidden shadow-lg" data-category="bots">
        <div class="relative group">
          <img src="https://cdn.sarveshmrao.in/website-resources/hymity.jpg" alt="HYMITY" class="w-full h-48 object-cover">
          <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center space-x-4">
            <a href="https://go.sarveshmrao.in/hymity?mtm_source=website" target="_blank" rel="noopener noreferrer" class="p-2 bg-white rounded-full hover:bg-gray-100">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-external-link w-5 h-5 text-gray-900">
                <path d="M15 3h6v6"></path><path d="M10 14 21 3"></path><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
              </svg>
            </a>
            <a href="https://github.com/sarveshmrao/hymity" target="_blank" rel="noopener noreferrer" class="p-2 bg-white rounded-full hover:bg-gray-100">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-github w-5 h-5 text-gray-900">
                <path d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4"></path><path d="M9 18c-4.51 2-5-2-7-2"></path>
              </svg>
            </a>
          </div>
        </div>
        <div class="p-6">
          <h3 class="text-xl font-bold mb-2">HYMITY</h3>
          <p class="text-gray-600 dark:text-gray-400 mb-4">A Discord.JS Bot Generator CLI tool which prevents repeat steps for Discord Bot Developers</p>
          <div class="flex flex-wrap gap-2">
            <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-600 dark:text-blue-400 rounded-full text-sm">Node.js</span>
            <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-600 dark:text-blue-400 rounded-full text-sm">Discord.js</span>
            <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-600 dark:text-blue-400 rounded-full text-sm">NPM</span>
          </div>
        </div>
      </div>
      <div class="bg-gray-50 dark:bg-gray-800 rounded-xl overflow-hidden shadow-lg" data-category="web-apps">
        <div class="relative group">
          <img src="https://cdn.sarveshmrao.in/website-resources/getmml.jpg" alt="GETM.ML (Deprecated)" class="w-full h-48 object-cover">
          <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center space-x-4">
            </div>
        </div>
        <div class="p-6">
          <h3 class="text-xl font-bold mb-2">GETM.ML (Deprecated)</h3>
          <p class="text-gray-600 dark:text-gray-400 mb-4">A URL Shortener service with a simple and easy to use interface.</p>
          <div class="flex flex-wrap gap-2">
            <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-600 dark:text-blue-400 rounded-full text-sm">PHP</span>
            <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-600 dark:text-blue-400 rounded-full text-sm">MySQL</span>
            <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-600 dark:text-blue-400 rounded-full text-sm">Bootstrap</span>
          </div>
        </div>
      </div>
      <div class="bg-gray-50 dark:bg-gray-800 rounded-xl overflow-hidden shadow-lg" data-category="bots">
        <div class="relative group">
          <img src="https://cdn.sarveshmrao.in/website-resources/smr-bot.jpg" alt="SMR Bot (Deprecated)" class="w-full h-48 object-cover">
          <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center space-x-4">
            <a href="https://go.sarveshmrao.in/smr-bot?mtm_source=website" target="_blank" rel="noopener noreferrer" class="p-2 bg-white rounded-full hover:bg-gray-100">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-external-link w-5 h-5 text-gray-900">
                <path d="M15 3h6v6"></path><path d="M10 14 21 3"></path><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
              </svg>
            </a>
          </div>
        </div>
        <div class="p-6">
          <h3 class="text-xl font-bold mb-2">SMR Bot (Deprecated)</h3>
          <p class="text-gray-600 dark:text-gray-400 mb-4">An Opensource Discord Bot for Per-Server Moderation and Fun Commands</p>
          <div class="flex flex-wrap gap-2">
            <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-600 dark:text-blue-400 rounded-full text-sm">Node.js</span>
            <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-600 dark:text-blue-400 rounded-full text-sm">Discord.js</span>
            <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-600 dark:text-blue-400 rounded-full text-sm">MongoDB</span>
          </div>
        </div>
      </div>
      <div class="bg-gray-50 dark:bg-gray-800 rounded-xl overflow-hidden shadow-lg" data-category="web-apps">
        <div class="relative group">
          <img src="https://cdn.sarveshmrao.in/website-resources/smr-free-host.jpg" alt="SMR Free Host (Deprecated)" class="w-full h-48 object-cover">
          <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center space-x-4">
          </div>
        </div>
        <div class="p-6">
          <h3 class="text-xl font-bold mb-2">SMR Free Host (Deprecated)</h3>
          <p class="text-gray-600 dark:text-gray-400 mb-4">A free and unlimited hosting with PHP &amp; MySQL. No Ads, No Limits. Operated for 3 successful years.</p>
          <div class="flex flex-wrap gap-2">
            <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-600 dark:text-blue-400 rounded-full text-sm">PHP</span>
            <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-600 dark:text-blue-400 rounded-full text-sm">MySQL</span>
            <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-600 dark:text-blue-400 rounded-full text-sm">Bootstrap</span>
          </div>
        </div>
      </div>
    
    
  </div>
</section> -->

<!-- Git Stats  -->

<section class="py-20 bg-gray-50 dark:bg-gray-900">
  <div class="container mx-auto px-6">
    <h2 class="text-3xl md:text-4xl font-bold text-center mb-16">GitHub Statistics</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8"  style="opacity: 1;">

        <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-lg">
          <div class="flex items-center space-x-4">
            <div class="p-3 bg-blue-100 dark:bg-blue-900 rounded-lg">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-git-branch w-6 h-6 text-blue-600 dark:text-blue-400">
                <line x1="6" x2="6" y1="3" y2="15"></line><circle cx="18" cy="6" r="3"></circle><circle cx="6" cy="18" r="3"></circle><path d="M18 9a9 9 0 0 1-9 9"></path>
              </svg>
            </div>
            <div>
              <p class="text-gray-600 dark:text-gray-400">Repositories</p>
              <p class="text-2xl font-bold">5</p>
            </div>
          </div>
        </div>
        
        <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-lg">
          <div class="flex items-center space-x-4">
            <div class="p-3 bg-blue-100 dark:bg-blue-900 rounded-lg">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-6 h-6 text-blue-600 dark:text-blue-400">
                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
              </svg>
            </div>
            <div>
              <p class="text-gray-600 dark:text-gray-400">Total Stars</p>
              <p class="text-2xl font-bold">2</p>
            </div>
          </div>
        </div>

        <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-lg">
          <div class="flex items-center space-x-4">
            <div class="p-3 bg-blue-100 dark:bg-blue-900 rounded-lg">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users w-6 h-6 text-blue-600 dark:text-blue-400">
                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
              </svg>
            </div>
            <div>
              <p class="text-gray-600 dark:text-gray-400">Followers</p>
              <p class="text-2xl font-bold">1</p>
            </div>
          </div>
        </div>

        <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-lg">
          <div class="flex items-center space-x-4">
            <div class="p-3 bg-blue-100 dark:bg-blue-900 rounded-lg">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-code w-6 h-6 text-blue-600 dark:text-blue-400">
                <polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline>
              </svg>
            </div>
            <div>
              <p class="text-gray-600 dark:text-gray-400">Top Language</p>
              <p class="text-2xl font-bold">JavaScript</p>
            </div>
          </div>
        </div>

        <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-lg">
          <div class="flex items-center space-x-4">
            <div class="p-3 bg-blue-100 dark:bg-blue-900 rounded-lg">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-git-merge w-6 h-6 text-blue-600 dark:text-blue-400">
                <circle cx="18" cy="18" r="3"></circle><circle cx="6" cy="6" r="3"></circle><path d="M6 21V9a9 9 0 0 0 9 9"></path>
              </svg>
            </div>
            <div>
              <p class="text-gray-600 dark:text-gray-400">Total Contributions</p>
              <p class="text-2xl font-bold">3</p>
            </div>
          </div>
        </div>

        <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-lg">
          <div class="flex items-center space-x-4">
            <div class="p-3 bg-blue-100 dark:bg-blue-900 rounded-lg">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock w-6 h-6 text-blue-600 dark:text-blue-400">
                <circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline>
              </svg>
            </div>
            <div>
              <p class="text-gray-600 dark:text-gray-400">Current Streak Duration</p>
              <p class="text-2xl font-bold">93 days</p>
            </div>
          </div>
        </div>

        <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-lg">
          <div class="flex items-center space-x-4">
            <div class="p-3 bg-blue-100 dark:bg-blue-900 rounded-lg">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-play w-6 h-6 text-blue-600 dark:text-blue-400">
                <polygon points="5 3 19 12 5 21 5 3"></polygon>
              </svg>
            </div>
            <div>
              <p class="text-gray-600 dark:text-gray-400">Streak Started on</p>
              <p class="text-2xl font-bold">2024-11-11</p>
            </div>
          </div>
        </div>

        <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-lg">
          <div class="flex items-center space-x-4">
            <div class="p-3 bg-blue-100 dark:bg-blue-900 rounded-lg">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-step-forward w-6 h-6 text-blue-600 dark:text-blue-400">
                <line x1="6" x2="6" y1="4" y2="20"></line><polygon points="10,4 20,12 10,20"></polygon>
              </svg>
            </div>
            <div>
              <p class="text-gray-600 dark:text-gray-400">Current Streak until</p>
              <p class="text-2xl font-bold">2025-02-113</p>
            </div>
          </div>
        </div>

    </div> 

    <div class="mt-12">
      <h3 class="text-xl font-bold mb-6">Language Distribution</h3>
      
              <!-- Language Bar -->
              <div class="flex h-4 rounded-full overflow-hidden">
                  <div class="bg-blue-500" style="width: 8.33333%;" title="Python: 8.3%"></div>
                  <div class="bg-green-500" style="width: 8.33333%;" title="CSS: 8.3%"></div>
                  <div class="bg-yellow-500" style="width: 25%;" title="PHP: 25.0%"></div>
                  <div class="bg-red-500" style="width: 8.33333%;" title="C: 8.3%"></div>
                  <div class="bg-purple-500" style="width: 33.3333%;" title="JavaScript: 33.3%"></div>
                  <div class="bg-blue-500" style="width: 8.33333%;" title="TypeScript: 8.3%"></div>
                  <div class="bg-green-500" style="width: 8.33333%;" title="HTML: 8.3%"></div>
              </div>
  
              <!-- Language Labels -->
              <div class="mt-4 flex flex-wrap gap-4">
                  <div class="flex items-center space-x-2">
                      <div class="w-3 h-3 rounded-full bg-blue-500"></div>
                      <span class="text-blue-500">Python</span>
                  </div>
                  <div class="flex items-center space-x-2">
                      <div class="w-3 h-3 rounded-full bg-green-500"></div>
                      <span class="text-green-500">CSS</span>
                  </div>
                  <div class="flex items-center space-x-2">
                      <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                      <span class="text-yellow-500">PHP</span>
                  </div>
                  <div class="flex items-center space-x-2">
                      <div class="w-3 h-3 rounded-full bg-red-500"></div>
                      <span class="text-red-500">C</span>
                  </div>
                  <div class="flex items-center space-x-2">
                      <div class="w-3 h-3 rounded-full bg-purple-500"></div>
                      <span class="text-purple-500">JavaScript</span>
                  </div>
                  <div class="flex items-center space-x-2">
                      <div class="w-3 h-3 rounded-full bg-blue-500"></div>
                      <span class="text-blue-500">TypeScript</span>
                  </div>
                  <div class="flex items-center space-x-2">
                      <div class="w-3 h-3 rounded-full bg-green-500"></div>
                      <span class="text-green-500">HTML</span>
                  </div>
              </div>
          </div>
      </div>
      
  </section>

 
    <!-- Footer Section -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">Sahiba M Ansari</h3>
                    <p class="text-gray-400">A passionate software developer, entrepreneur, and IT consultant. Currently building amazing products and supporting great ventures.</p>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="#experience" class="text-gray-400 hover:text-white">Experience</a></li>
                        <li><a href="#services" class="text-gray-400 hover:text-white">Services</a></li>
                        <li><a href="#projects" class="text-gray-400 hover:text-white">Projects</a></li>
                        <li><a href="#contact" class="text-gray-400 hover:text-white">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4">Contact Info</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li>Nashik, Maharashtra, India</li>
                        <li>ansarisahiba.2020@gmail.com</li>
                        <li>+91 9579437824 (Office)</li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4">Follow Me</h3>
                    <div class="flex space-x-4">
                        <a href="https://github.com/sahibaansari" target="_blank" rel="noopener noreferrer" class="hover:text-blue-400">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-github w-6 h-6">
                                <path d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4"></path>
                                <path d="M9 18c-4.51 2-5-2-7-2"></path>
                            </svg>
                        </a>
                        <a href="https://www.linkedin.com/in/sahiba-ansari27/" target="_blank" rel="noopener noreferrer" class="hover:text-blue-400">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-linkedin w-6 h-6">
                                <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                                <rect width="4" height="12" x="2" y="9"></rect>
                                <circle cx="4" cy="4" r="2"></circle>
                            </svg>
                        </a>
                        <a href="https://x.com/iamsahibaansari" target="_blank" rel="noopener noreferrer" class="hover:text-blue-400">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-twitter w-6 h-6">
                                <path d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z"></path>
                            </svg>
                        </a>
                        <a href="https://www.instagram.com/iamsahibaansari/" target="_blank" rel="noopener noreferrer" class="hover:text-blue-400">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-instagram w-6 h-6">
                                <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                                <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                <line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line>
                            </svg>
                        </a>
                        <a href="https://www.youtube.com/feed/you" target="_blank" rel="noopener noreferrer" class="hover:text-blue-400"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-youtube w-6 h-6"><path d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17"></path><path d="m10 15 5-3-5-3z"></path></svg></a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-12 pt-8 text-center text-gray-400">
                <p>© 2025 Sahiba M Ansari. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Smooth Scroll -->
     <!-- Include jQuery in the Head -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script>

        document.addEventListener("DOMContentLoaded", function () {
        const serviceCards = document.querySelectorAll(".service-card");

        function handleScroll() {
            serviceCards.forEach((card) => {
                const rect = card.getBoundingClientRect();
                const windowHeight = window.innerHeight;
                
                if (rect.top < windowHeight - 50) {
                    card.style.opacity = 1;
                    card.style.transform = "translateY(0px)";
                } else {
                    card.style.opacity = 0;
                    card.style.transform = "translateY(30px)";
                }
            });
        }

        window.addEventListener("scroll", handleScroll);
        handleScroll(); // Run on page load
    });

        $("a.nav-link").on("click", function(event) {
            if (this.hash !== "") {
                event.preventDefault();
                var hash = this.hash;
                $("html, body").animate({
                    scrollTop: $(hash).offset().top - 80
                }, 800);
            }
        });

        // Rotating Text
        const words = ["Software Developer", "Web Developer", "IT Consultant", "Entrepreneur"];
        let index = 0;
        function changeText() {
            document.getElementById("changing-text").textContent = words[index];
            index = (index + 1) % words.length;
        }
        setInterval(changeText, 2000);
    </script>

</body>
</html>
