

        // Email validation
        const emailInput = this.querySelector('input[type="email"]');
        if (emailInput) {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(emailInput.value)) {
                isValid = false;
                emailInput.classList.add('error');
            }
        }

        if (!isValid) {
            e.preventDefault();
            alert('Please fill out all required fields correctly.');
        }


document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.getElementById('contactForm');
    
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Form validation
            const formData = new FormData(contactForm);
            const data = Object.fromEntries(formData);
            
            // Basic validation
            if (!validateForm(data)) {
                return;
            }
            
            // Submit form (replace with your actual submission logic)
            submitForm(data);
        });
    }
    
    function validateForm(data) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        
        if (data.name.length < 2) {
            showError('Please enter a valid name');
            return false;
        }
        
        if (!emailRegex.test(data.email)) {
            showError('Please enter a valid email address');
            return false;
        }
        
        if (data.message.length < 10) {
            showError('Message must be at least 10 characters long');
            return false;
        }
        
        return true;
    }
    
    function showError(message) {
        const errorDiv = document.createElement('div');
        errorDiv.className = 'error-message';
        errorDiv.textContent = message;
        
        contactForm.insertBefore(errorDiv, contactForm.firstChild);
        
        setTimeout(() => {
            errorDiv.remove();
        }, 3000);
    }
    
    function submitForm(data) {
        // Replace with your actual form submission logic
        console.log('Form submitted:', data);
        
        // Show success message
        showSuccess();
        
        // Reset form
        contactForm.reset();
    }
    
    function showSuccess() {
        const successDiv = document.createElement('div');
        successDiv.className = 'success-message';
        successDiv.textContent = 'Message sent successfully!';
        
        contactForm.insertBefore(successDiv, contactForm.firstChild);
        
        setTimeout(() => {
            successDiv.remove();
        }, 3000);
    }
});
