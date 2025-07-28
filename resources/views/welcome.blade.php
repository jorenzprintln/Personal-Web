<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PJX - Portfolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('personal_web.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
</head>
<body>
    <!-- Sticky Navigation -->
    <nav class="navbar">
        <div class="nav-container">
            <div class="nav-logo">
                <span class="logo-text">PJX</span>
            </div>
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="#home" class="nav-link active">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#about" class="nav-link">About Me</a>
                </li>
                <li class="nav-item">
                    <a href="#projects" class="nav-link">Projects</a>
                </li>
                <li class="nav-item">
                    <a href="#contact" class="nav-link">Contact</a>
                </li>
            </ul>
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </div>
    </nav>

    <!-- Main Container -->
    <main class="main-container">
        <!-- Home Section -->
        <section id="home" class="section hero-section">
            <div class="hero-content">
                <div class="hero-text">
                    <div class="greeting">
                        <span class="wave">👋</span>
                        <span>Hello, I'm</span>
                    </div>
                    <h1 class="hero-title">
                        <span class="name-highlight">Jorenz Pablo</span>
                    </h1>
                    <p class="hero-subtitle">Full Stack Mobile & Web Developer</p>
                    <p class="hero-description">
                        I create beautiful, functional, and user-centered digital experiences 
                        that solve real-world problems with clean code and intuitive design.
                    </p>
                    <div class="hero-buttons">
                        <a href="#projects" class="btn btn-primary">View My Work</a>
                        <a href="#contact" class="btn btn-secondary">Get In Touch</a>
                    </div>
                    <div class="social-links">
                        <a href="https://github.com/jorenzprintln" class="social-link" aria-label="GitHub">
                            <svg viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                            </svg>
                        </a>
                        <a href="https://www.linkedin.com/in/paul-jorenz-pablo-172166368/" class="social-link" aria-label="LinkedIn">
                            <svg viewBox="0 0 24 24" fill="currentColor">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                       <a href="https://www.facebook.com/pabols.2025" class="social-link" aria-label="Facebook">
    <svg viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
        <path d="M22.675 0h-21.35C.596 0 0 .592 0 1.326v21.348C0 23.407.596 24 1.325 24H12.82v-9.294H9.692V11.01h3.128V8.413c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.098 2.794.143v3.24l-1.917.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.696h-3.12V24h6.116c.729 0 1.324-.593 1.324-1.326V1.326C24 .592 23.404 0 22.675 0z"/>
    </svg>
</a>

                    </div>
                </div>
                <div class="hero-image">
                    <div class="image-container">
                        <div class="floating-elements">
                            <div class="floating-element element-1"></div>
                            <div class="floating-element element-2"></div>
                            <div class="floating-element element-3"></div>
                        </div>
                        <!-- Replace with your actual photo -->
                        <div class="profile-image"><img src="{{ asset('images/portfolio.png') }}" alt="Profile Picture">
</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <!-- Replace your existing About Section with this -->
<section id="about" class="section about-section">
    <div class="section-content">
        <div class="section-header">
            <span class="section-tag">About Me</span>
            <h2 class="section-title">Who I Am</h2>
        </div>
        <div class="about-content">
            <div class="about-text">
                <p>
                    I'm a passionate full-stack developer from Tacloban City, Philippines, with a strong foundation 
                    in both mobile and web development. I love creating digital solutions that make a difference 
                    and constantly learning new technologies to stay at the forefront of innovation.
                </p>
                
                <!-- Personal Information Grid -->
                <div class="personal-info-grid">
                    <div class="info-section">
                        <h3 class="info-title">Personal Information</h3>
                        <div class="info-items">
                            <div class="info-item">
                                <span class="info-label">Full Name:</span>
                                <span class="info-value">Paul Jorenz Pablo</span>
                            </div>
                            <div class="info-item">
                                <span class="info-label">Age:</span>
                                <span class="info-value">21 years old</span>
                            </div>
                            <div class="info-item">
                                <span class="info-label">Location:</span>
                                <span class="info-value">Tacloban City, Philippines</span>
                            </div>
                            <div class="info-item">
                                <span class="info-label">Languages:</span>
                                <span class="info-value">English, Filipino, Waray</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Educational Background -->
                <div class="skills-grid">
                    <div class="skill-item">
                        <div class="skill-icon">🎓</div>
                        <h3>High School</h3>
                        <p>Burauen National High School<br>
                        <span class="education-year">2016 - 2020</span></p>
                    </div>
                    <div class="skill-item">
                        <div class="skill-icon">📚</div>
                        <h3>Senior High School</h3>
                        <p>Pagsulhugon National High School<br>
                        TVL - CSS Strand<br>
                        <span class="education-year">2020 - 2022</span></p>
                    </div>
                    <div class="skill-item">
                        <div class="skill-icon">🏛️</div>
                        <h3>College</h3>
                        <p>Leyte Normal University<br>
                        Bachelor of Science in Information Technology<br>
                        <span class="education-year">2025 - Present - 4th Year</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="projects" class="section projects-section">
    <div class="section-content">
        <div class="section-header">
            <span class="section-tag">My Work</span>
            <h2 class="section-title">Featured Projects</h2>
        </div>
        <div class="projects-grid">
            <div class="project-card">
                <div class="project-image">
                    <img src="{{ asset('images/mathpop.png') }}" alt="Math Pop" class="project-bg-img">
                    <div class="project-overlay">
                        <a href="https://github.com/jorenzprintln/mathpop" class="project-link" target="_blank" rel="noopener noreferrer">View Project</a>
                    </div>
                </div>
                <div class="project-info">
                    <h3>MathPoP</h3>
                    <p>Mobile Arithmetic Math Game Application built with React Native</p>
                    <div class="project-tags">
                        <span class="tag">React Native</span>
                        <span class="tag">TypeScript</span>
                        <span class="tag">JavaScript</span>
                    </div>
                </div>
            </div>
            <div class="project-card">
                <div class="project-image">
                    <img src="https://images.unsplash.com/photo-1584433144859-1fc3ab64a957?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
     alt="Encryption & Decryption App" 
     class="project-bg-img">
                    <div class="project-overlay">
                        <a href="https://github.com/jorenzprintln/blowfish" class="project-link" target="_blank" rel="noopener noreferrer">View Project</a>
                    </div>
                </div>
                <div class="project-info">
                    <h3>BlowLock</h3>
                    <p>Mobile Application for Encyprting and Decrypting Files using Blowfish Algorithm.</p>
                    <div class="project-tags">
                        <span class="tag">React Native</span>
                        <span class="tag">TypeScript</span>
                        <span class="tag">Python</span>
                    </div>
                </div>
            </div>
            <div class="project-card">
                <div class="project-image">
                    <img src="{{ asset('images/phishing.jpg') }}" alt="Phishing Prevention App" class="project-bg-img">
                    <div class="project-overlay">
                        <a href="https://github.com/jorenzprintln/phishing" class="project-link" target="_blank" rel="noopener noreferrer">View Project</a>
                    </div>
                </div>
                <div class="project-info">
                    <h3>PhishPrevent</h3>
                    <p>Mobile Application for Phishing Prevention</p>
                    <div class="project-tags">
                        <span class="tag">React Native</span>
                        <span class="tag">TypeScript</span>
                        <span class="tag">Safe Browsing API</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


        <!-- Contact Section -->
        <section id="contact" class="section contact-section">
            <div class="section-content">
                <div class="section-header">
                    <span class="section-tag">Get In Touch</span>
                    <h2 class="section-title">Let's Work Together</h2>
                </div>
                <div class="contact-content">
                    <div class="contact-info">
                        <p>
                            I'm always interested in new opportunities and exciting projects. 
                            Whether you have a question or just want to say hi, feel free to reach out!
                        </p>
                        <div class="contact-methods">
                            <div class="contact-method">
                                <div class="contact-icon">📧</div>
                                <div>
                                    <h4>Email</h4>
                                    <a href="mailto:your.email@example.com">jorenzlnu@gmail.com</a>
                                </div>
                            </div>
                            <div class="contact-method">
                                <div class="contact-icon">📱</div>
                                <div>
                                    <h4>Phone</h4>
                                    <a href="tel:+1234567890">+63 951 829 0505</a>
                                </div>
                            </div>
                            <div class="contact-method">
                                <div class="contact-icon">📍</div>
                                <div>
                                    <h4>Location</h4>
                                    <span>Tacloban City, Philippines</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form class="contact-form">
                        <div class="form-group">
                            <input type="text" id="name" name="name" placeholder="Your Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" id="email" name="email" placeholder="Your Email" required>
                        </div>
                        <div class="form-group">
                            <textarea id="message" name="message" placeholder="Your Message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-full">Send Message</button>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2025 Jorenz Pablo. All rights reserved.</p>
    </footer>

    <script src="{{ asset('personal_web.js') }}"></script>
</body>
</html>