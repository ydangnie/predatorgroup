 // Add subtle interactivity
 document.addEventListener('DOMContentLoaded', function() {
     const hoverElements = document.querySelectorAll('.hover-glow');

     hoverElements.forEach(element => {
         element.addEventListener('mouseenter', function() {
             this.style.transition = 'all 0.3s ease';
         });
     });

     // Add subtle animation to newsletter input on focus
     const newsletterInput = document.querySelector('input[type="email"]');
     if (newsletterInput) {
         newsletterInput.addEventListener('focus', function() {
             this.parentElement.classList.add('ring-2', 'ring-amber-500', 'rounded-lg');
         });

         newsletterInput.addEventListener('blur', function() {
             this.parentElement.classList.remove('ring-2', 'ring-amber-500', 'rounded-lg');
         });
     }
 });