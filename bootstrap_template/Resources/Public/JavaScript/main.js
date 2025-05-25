/**
 * Main JavaScript file for Bootstrap Template extension
 */
(function() {
    'use strict';
    
    // Wait for the DOM to be fully loaded
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize tooltips
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });
        
        // Initialize popovers
        var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
        popoverTriggerList.map(function(popoverTriggerEl) {
            return new bootstrap.Popover(popoverTriggerEl);
        });
        
        // Add 'active' class to current navigation item
        highlightCurrentNavItem();
        
        // Smooth scrolling for anchor links
        setupSmoothScrolling();
        
        // Add additional class to header on scroll
        setupScrollHeader();
        
        // Handle mobile navigation
        setupMobileNavigation();
    });
    
    /**
     * Highlights the current navigation item based on URL
     */
    function highlightCurrentNavItem() {
        var currentUrl = window.location.pathname;
        var navLinks = document.querySelectorAll('.navbar-nav .nav-link');
        
        navLinks.forEach(function(link) {
            var href = link.getAttribute('href');
            if (href === currentUrl || (href === '/' && currentUrl === '')) {
                link.classList.add('active');
            }
        });
    }
    
    /**
     * Sets up smooth scrolling for anchor links
     */
    function setupSmoothScrolling() {
        document.querySelectorAll('a[href^="#"]').forEach(function(anchor) {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                
                var targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                var targetElement = document.querySelector(targetId);
                if (targetElement) {
                    targetElement.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });
    }
    
    /**
     * Adds a class to the header when scrolling down
     */
    function setupScrollHeader() {
        var header = document.querySelector('.site-header');
        if (!header) return;
        
        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    }
    
    /**
     * Sets up mobile navigation behavior
     */
    function setupMobileNavigation() {
        var navbarToggler = document.querySelector('.navbar-toggler');
        var navbarCollapse = document.querySelector('.navbar-collapse');
        
        if (!navbarToggler || !navbarCollapse) return;
        
        // Close mobile menu when clicking outside
        document.addEventListener('click', function(event) {
            var isClickInside = navbarToggler.contains(event.target) || navbarCollapse.contains(event.target);
            
            if (!isClickInside && navbarCollapse.classList.contains('show')) {
                var bsCollapse = new bootstrap.Collapse(navbarCollapse);
                bsCollapse.hide();
            }
        });
        
        // Close mobile menu when clicking on a nav link (for anchor links)
        var navLinks = document.querySelectorAll('.navbar-nav .nav-link');
        navLinks.forEach(function(link) {
            link.addEventListener('click', function() {
                if (navbarCollapse.classList.contains('show')) {
                    var bsCollapse = new bootstrap.Collapse(navbarCollapse);
                    bsCollapse.hide();
                }
            });
        });
    }
})();
