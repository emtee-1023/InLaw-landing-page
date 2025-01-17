<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

<!-- Main JS File -->
<script src="assets/js/main.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const pricingToggle = document.getElementById('pricing-toggle');
        const pricingSection = document.getElementById('pricing');
        const monthlyText = document.querySelector('.toggle-text.monthly');
        const yearlyText = document.querySelector('.toggle-text.yearly');

        pricingToggle.addEventListener('change', function() {
            if (this.checked) {
                pricingSection.classList.add('yearly-active');
                monthlyText.classList.remove('active');
                yearlyText.classList.add('active');
            } else {
                pricingSection.classList.remove('yearly-active');
                monthlyText.classList.add('active');
                yearlyText.classList.remove('active');
            }
        });

        // Set initial state
        monthlyText.classList.add('active');
    });
</script>