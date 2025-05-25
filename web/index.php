<?php

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

// This is a simplified version for demonstration purposes
// In a real TYPO3 installation, this would include the TYPO3 bootstrap

// Define TYPO3 constants
define('TYPO3', true);
define('PATH_site', __DIR__ . '/');
define('PATH_typo3', PATH_site . 'typo3/');

// Simple page rendering to demonstrate the template
$output = <<<HTML
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Template - TYPO3 Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/bootstrap_template/Resources/Public/Css/custom.css" rel="stylesheet">
</head>
<body>
    <div class="page-wrapper">
        <header class="site-header bg-light">
            <div class="container">
                <div class="py-3">
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <a href="/" class="d-inline-block site-logo">
                                <h1 class="h3 mb-0">Meine TYPO3 Website</h1>
                            </a>
                        </div>
                        <div class="col-md-8">
                            <nav class="navbar navbar-expand-lg navbar-light">
                                <div class="container-fluid px-0">
                                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain" aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>
                                    
                                    <div class="collapse navbar-collapse" id="navbarMain">
                                        <ul class="navbar-nav ms-auto">
                                            <li class="nav-item">
                                                <a class="nav-link active" href="/">Startseite</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="/about">Über uns</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="/services">Leistungen</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="/contact">Kontakt</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        
        <main id="content" class="content-main">
            <!-- Hero section -->
            <div class="hero-section bg-primary text-white py-5 mb-5">
                <div class="container py-5">
                    <div class="row">
                        <div class="col-lg-8 mx-auto text-center">
                            <h1 class="display-4">Willkommen zur Bootstrap Template Extension</h1>
                            <p class="lead">Eine responsive TYPO3-Vorlage basierend auf Bootstrap 5</p>
                            <div class="mt-4">
                                <a href="/contact" class="btn btn-light btn-lg">Kontakt</a>
                                <a href="/about" class="btn btn-outline-light btn-lg ms-2">Mehr erfahren</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Main content -->
            <div class="container">
                <!-- Features section -->
                <div class="row mb-5">
                    <div class="col-12 text-center mb-4">
                        <h2 class="section-title">Unsere Leistungen</h2>
                        <p class="lead text-muted">Entdecken Sie, was wir Ihnen anbieten können</p>
                    </div>
                    
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <div class="card-body text-center">
                                <div class="mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-laptop text-primary" viewBox="0 0 16 16">
                                      <path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5h11zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z"/>
                                    </svg>
                                </div>
                                <h3 class="h4 card-title">Webdesign</h3>
                                <p class="card-text">Responsive Websites für eine optimale Benutzererfahrung.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <div class="card-body text-center">
                                <div class="mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-graph-up text-primary" viewBox="0 0 16 16">
                                      <path fill-rule="evenodd" d="M0 0h1v15h15v1H0V0Zm14.817 3.113a.5.5 0 0 1 .07.704l-4.5 5.5a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61 4.15-5.073a.5.5 0 0 1 .704-.07Z"/>
                                    </svg>
                                </div>
                                <h3 class="h4 card-title">Digitales Marketing</h3>
                                <p class="card-text">Gewinnen Sie mehr Kunden und steigern Sie Ihre Online-Präsenz.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <div class="card-body text-center">
                                <div class="mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-code-slash text-primary" viewBox="0 0 16 16">
                                      <path d="M10.478 1.647a.5.5 0 1 0-.956-.294l-4 13a.5.5 0 0 0 .956.294l4-13zM4.854 4.146a.5.5 0 0 1 0 .708L1.707 8l3.147 3.146a.5.5 0 0 1-.708.708l-3.5-3.5a.5.5 0 0 1 0-.708l3.5-3.5a.5.5 0 0 1 .708 0zm6.292 0a.5.5 0 0 0 0 .708L14.293 8l-3.147 3.146a.5.5 0 0 0 .708.708l3.5-3.5a.5.5 0 0 0 0-.708l-3.5-3.5a.5.5 0 0 0-.708 0z"/>
                                    </svg>
                                </div>
                                <h3 class="h4 card-title">Webentwicklung</h3>
                                <p class="card-text">Maßgeschneiderte Webanwendungen für Ihre geschäftlichen Anforderungen.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Testimonials section -->
                <div class="row my-5 py-4 bg-light rounded">
                    <div class="col-12 text-center mb-4">
                        <h2 class="section-title">Was unsere Kunden sagen</h2>
                    </div>
                    
                    <div class="col-md-6 mb-4">
                        <div class="card border-0 bg-transparent">
                            <div class="card-body">
                                <blockquote class="blockquote">
                                    <p class="mb-0">"Die Zusammenarbeit mit diesem Team war eine außergewöhnliche Erfahrung. Sie haben unser Projekt pünktlich geliefert und unsere Erwartungen übertroffen."</p>
                                    <footer class="blockquote-footer mt-2">Max Mustermann, <cite title="Source Title">ABC GmbH</cite></footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 mb-4">
                        <div class="card border-0 bg-transparent">
                            <div class="card-body">
                                <blockquote class="blockquote">
                                    <p class="mb-0">"Die Aufmerksamkeit für Details und der Kundenservice waren herausragend. Ich empfehle ihre Dienste jedem, der Qualitätsarbeit sucht."</p>
                                    <footer class="blockquote-footer mt-2">Erika Musterfrau, <cite title="Source Title">XYZ AG</cite></footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Call to action section -->
            <div class="bg-secondary text-white py-5 mt-5">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-8 mb-4 mb-lg-0">
                            <h2>Bereit loszulegen?</h2>
                            <p class="lead mb-0">Kontaktieren Sie uns noch heute für eine kostenlose Beratung zu Ihrem Projekt.</p>
                        </div>
                        <div class="col-lg-4 text-lg-end">
                            <a href="/contact" class="btn btn-light btn-lg">Jetzt Kontakt aufnehmen</a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        
        <footer class="site-footer bg-dark text-light mt-5">
            <div class="container py-5">
                <div class="row">
                    <div class="col-md-4">
                        <h4 class="h5">Meine TYPO3 Website</h4>
                        <p class="text-muted">Eine Bootstrap-basierte TYPO3-Website mit responsiven Layouts und anpassbaren Designoptionen.</p>
                    </div>
                    <div class="col-md-4">
                        <h4 class="h5">Schnelllinks</h4>
                        <ul class="list-unstyled">
                            <li><a href="/" class="text-light">Startseite</a></li>
                            <li><a href="/about" class="text-light">Über uns</a></li>
                            <li><a href="/services" class="text-light">Leistungen</a></li>
                            <li><a href="/contact" class="text-light">Kontakt</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h4 class="h5">Kontakt</h4>
                        <address class="text-muted">
                            <p>Musterstraße 123<br>
                            12345 Stadt<br>
                            E-Mail: info@beispiel.de<br>
                            Telefon: (0123) 456-7890</p>
                        </address>
                    </div>
                </div>
            </div>
            
            <div class="footer-bottom py-3 bg-darker text-center">
                <div class="container">
                    <p class="mb-0 text-muted">&copy; 2025 Meine TYPO3 Website. Alle Rechte vorbehalten.</p>
                </div>
            </div>
        </footer>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/bootstrap_template/Resources/Public/JavaScript/main.js"></script>
</body>
</html>
HTML;

echo $output;