<?php
$title = "Terms of Use | BC Orchard";
$description = "Terms of Use | BC Orchard";
include 'inc/header.php'; 
?>

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

    /* .section::marker {
        font-size: clamp(1.5rem, 3vw, 1.75rem);
    } */

    /* Custom list counter */
    ol.custom-ol {
        list-style: none;
        counter-reset: section;
        padding-left: 0;
    }

    ol.custom-ol>li.section {
        counter-increment: section;
        position: relative;
        padding-left: 26px;
        margin-bottom: 2rem;
    }

    ol.custom-ol>li.section::before {
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
            <h3>Terms of Use</h3>
            <p><strong>Effective Date:</strong> 2025/06/18</p>

            <div class="section">
                <p>Welcome to the BC Orchard website. By accessing or using this site, you agree to the following terms. Please read them carefully.</p>
            </div>

            <ol class="custom-ol">
                <li class="section">
                    <h5>Use of Website</h5>
                    <p>This website is provided for informational and promotional purposes. You agree not to misuse or interfere with its operation, or to use the site in any unlawful or harmful manner.</p>
                </li>

                <li class="section">
                    <h5>Intellectual Property</h5>
                    <p>All content on this site—including text, images, logos, graphics, and product descriptions—is the property of BC Orchard or its content providers. You may not copy, reproduce, distribute, or use any material without prior written permission.</p>
                </li>

                <li class="section">
                    <h5>Product Information</h5>
                    <p>We aim to ensure all product descriptions and details are accurate. However, BC Orchard does not warrant that product content is complete, error-free, or suitable for your inliidual needs.</p>
                </li>

                <li class="section">
                    <h5>External Links</h5>
                    <p>Our website may contain links to third-party sites. These are provided for convenience only. We do not control, endorse, or take responsibility for their content or practices.</p>
                </li>

                <li class="section">
                    <h5>Limitation of Liability</h5>
                    <p>BC Orchard is not liable for any direct, indirect, incidental, or consequential damages resulting from the use or inability to use this website or any linked content.</p>
                </li>

                <li class="section">
                    <h5>Changes to Terms</h5>
                    <p>We may update these Terms of Use at any time. Continued use of the website implies acceptance of any modified terms.</p>
                </li>

                <li class="section">
                    <h5>Governing Law</h5>
                    <p>These terms are governed by the laws of the Province of British Columbia, Canada.</p>
                </li>
            </ol>
        </div>
    </div>
</div>

<?php include 'inc/footer.php'; ?>