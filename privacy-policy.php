<?php include 'inc/header.php'; ?>

<style>
    .navbar {
        position: static;
    }

    .nav-link {
        color: black;
    }

    .nav-link:hover {
        color: black !important;
    }

    /* Custom list counter */
    ol.custom-ol {
        list-style: none;
        counter-reset: section;
        padding-left: 0;
    }

    ol.custom-ol > li.section {
        counter-increment: section;
        position: relative;
        padding-left: 26px;
        margin-bottom: 2rem;
    }

    ol.custom-ol > li.section::before {
        content: counter(section) ".";
        position: absolute;
        left: 0;
        top: 0;
        font-size: clamp(1.5rem, 3vw, 1.75rem);
        color: black;
        line-height: 1.2;
    }
</style>

<div class="container">
    <div class="row section-padding-sm pt-md-0">
        <div class="col-12 col-lg-10 col-xl-8 mx-auto">
            <h3>Privacy Policy</h3>
            <p><strong>Effective Date:</strong> 2025/06/18</p>

            <div class="section">
                <p>At BC Orchard, we use cookies and similar technologies to improve your browsing experience and better understand how visitors interact with our website.</p>
            </div>

            <ol class="custom-ol">
                <li class="section">
                    <h5>Use of Cookies</h5>
                    <p class="mb-0">Cookies help us:</p>
                    <ul>
                        <li>Analyze website traffic and usage patterns</li>
                        <li>Enhance site performance and functionality</li>
                        <li>Deliver a smoother, more tailored user experience</li>
                    </ul>
                    <p>Some cookies may be set by third-party tools (e.g., analytics services).</p>
                </li>

                <li class="section">
                    <h5>Managing Cookies</h5>
                    <p>You can control or disable cookies through your browser settings. Disabling cookies may affect certain features and functionality of the site.</p>
                </li>

                <li class="section">
                    <h5>Third-Party Links</h5>
                    <p>Our website may include links to external sites. We are not responsible for the privacy practices or content of those websites.</p>
                </li>

                <li class="section">
                    <h5>Policy Updates</h5>
                    <p>We may update this policy periodically. Please review this page for the latest version.</p>
                </li>
            </ol>
        </div>
    </div>
</div>

<?php include 'inc/footer.php'; ?>