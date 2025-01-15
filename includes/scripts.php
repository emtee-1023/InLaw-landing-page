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
        const pricingPlans = [{
                name: "Basic Plan",
                description: "Suitable for your briefcase practice",
                monthlyPrice: 50,
                yearlyPrice: 550,
                savings: 50,
                features: [
                    "Case Management",
                    "Document Management",
                    "Calendaring and Reminders",
                    "Document Automation",
                    "User Management (upto 5 users)",
                    "Task Management",
                    "Accounting",
                    "Status Report",
                    "Client Portal",
                    "Client Communications",
                    "Case Updates"
                ]
            },
            {
                name: "Standard Plan",
                description: "That's more like it! <br>Perfect for all your in house needs.",
                monthlyPrice: 75,
                yearlyPrice: 825,
                savings: 75,
                features: [
                    "Case Management",
                    "Document Management",
                    "Calendaring and Reminders",
                    "Document Automation",
                    "User Management",
                    "Task Management",
                    "Accounting",
                    "Status Report",
                    "Client Portal",
                    "Client Communications",
                    "Case Updates"
                ]
            },
            {
                name: "Pro Plan",
                description: "All in one! <br> Keep those clients in the loop.<br> Get to fully experience what InLaw App is all about.",
                monthlyPrice: 100,
                yearlyPrice: 1000,
                savings: 200,
                features: [
                    "Case Management",
                    "Document Management",
                    "Calendaring and Reminders",
                    "Document Automation",
                    "User Management",
                    "Task Management",
                    "Accounting",
                    "Status Report",
                    "Client Portal",
                    "Client Communications",
                    "Case Updates"
                ]
            }
        ];

        const pricingContainer = document.getElementById('pricing-plans');
        const pricingToggle = document.getElementById('pricing-toggle');

        function generatePricing(plans, isYearly) {
            pricingContainer.innerHTML = '';
            plans.forEach(plan => {
                const price = isYearly ? plan.yearlyPrice : plan.monthlyPrice;
                const pricingItem = document.createElement('div');
                pricingItem.classList.add('col-lg-4');
                pricingItem.innerHTML = `
        <div class="pricing-item">
          <h3>${plan.name}</h3>
          <p class="description">${plan.description}</p>
          <h4><sup>$</sup>${price}<span> / ${isYearly ? 'year' : 'month'}</span></h4>
          ${isYearly ? `<h4><sup>$</sup>${price - plan.savings}<span> / year <br> save ${plan.savings}$</span></h4>` : ''}
          <a href="#" class="cta-btn">Start Today</a>
          <ul>
            ${plan.features.map(feature => `<li><i class="bi bi-check"></i> <span>${feature}</span></li>`).join('')}
          </ul>
        </div>
      `;
                pricingContainer.appendChild(pricingItem);
            });
        }

        pricingToggle.addEventListener('change', function() {
            generatePricing(pricingPlans, pricingToggle.checked);
        });

        // Initial load (monthly)
        generatePricing(pricingPlans, false);
    });
</script>