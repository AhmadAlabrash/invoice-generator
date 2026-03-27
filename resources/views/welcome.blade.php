<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InvoicePro | Smart Invoice Generator</title>
    <meta name="description" content="Professional invoice generator website for creating, managing, and tracking invoices easily.">

    <style>
        :root {
            --yellow: #f5b700;
            --yellow-dark: #d99f00;
            --black: #0f0f10;
            --black-soft: #17181b;
            --gray: #a7a7a7;
            --white: #ffffff;
            --border: rgba(255,255,255,0.08);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: var(--black);
            color: var(--white);
            line-height: 1.6;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        .container {
            width: min(1180px, 92%);
            margin: auto;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            padding: 14px 24px;
            border-radius: 14px;
            font-weight: 700;
            transition: .25s ease;
            border: 1px solid transparent;
            cursor: pointer;
        }

        .btn-primary {
            background: var(--yellow);
            color: var(--black);
            box-shadow: 0 12px 30px rgba(245, 183, 0, 0.20);
        }

        .btn-primary:hover {
            background: #ffd24a;
            transform: translateY(-2px);
        }

        .btn-outline {
            border-color: rgba(245, 183, 0, 0.45);
            color: var(--yellow);
            background: transparent;
        }

        .btn-outline:hover {
            background: rgba(245, 183, 0, 0.08);
            transform: translateY(-2px);
        }

        .navbar {
            position: sticky;
            top: 0;
            z-index: 1000;
            background: rgba(15, 15, 16, 0.88);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid var(--border);
        }

        .nav-wrap {
            display: flex;
            align-items: center;
            justify-content: space-between;
            min-height: 78px;
            gap: 20px;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 12px;
            font-weight: 800;
            font-size: 1.2rem;
            letter-spacing: .3px;
        }

        .logo-mark {
            width: 42px;
            height: 42px;
            border-radius: 12px;
            background: linear-gradient(135deg, var(--yellow), #ffdc68);
            color: var(--black);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 900;
            box-shadow: 0 8px 22px rgba(245, 183, 0, 0.28);
        }

        .logo span strong {
            color: var(--yellow);
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 26px;
            flex-wrap: wrap;
        }

        .nav-links a {
            color: #e8e8e8;
            font-weight: 600;
            transition: .2s ease;
        }

        .nav-links a:hover {
            color: var(--yellow);
        }

        .nav-actions {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .hero {
            position: relative;
            overflow: hidden;
            padding: 90px 0 70px;
            background:
                radial-gradient(circle at top right, rgba(245,183,0,.18), transparent 28%),
                radial-gradient(circle at left center, rgba(245,183,0,.08), transparent 25%),
                var(--black);
        }

        .hero-grid {
            display: grid;
            grid-template-columns: 1.15fr 0.85fr;
            gap: 40px;
            align-items: center;
        }

        .badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 10px 14px;
            border: 1px solid rgba(245,183,0,.2);
            background: rgba(245,183,0,.08);
            color: #ffe082;
            border-radius: 999px;
            font-size: .92rem;
            margin-bottom: 20px;
        }

        .hero h1 {
            font-size: clamp(2.2rem, 6vw, 4.5rem);
            line-height: 1.05;
            margin-bottom: 18px;
            font-weight: 900;
        }

        .hero h1 .accent {
            color: var(--yellow);
        }

        .hero p {
            color: #c8c8c8;
            font-size: 1.08rem;
            max-width: 650px;
            margin-bottom: 28px;
        }

        .hero-buttons {
            display: flex;
            gap: 14px;
            flex-wrap: wrap;
            margin-bottom: 28px;
        }

        .hero-stats {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
            margin-top: 8px;
        }

        .stat {
            background: rgba(255,255,255,0.03);
            border: 1px solid var(--border);
            border-radius: 18px;
            padding: 16px 18px;
            min-width: 150px;
        }

        .stat strong {
            display: block;
            font-size: 1.25rem;
            color: var(--yellow);
            margin-bottom: 4px;
        }

        .hero-card {
            background: linear-gradient(180deg, rgba(255,255,255,0.04), rgba(255,255,255,0.02));
            border: 1px solid var(--border);
            border-radius: 28px;
            padding: 24px;
            box-shadow: 0 18px 60px rgba(0,0,0,0.32);
        }

        .invoice-preview {
            background: #fff;
            color: #1d1d1d;
            border-radius: 22px;
            padding: 22px;
        }

        .invoice-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 24px;
            gap: 14px;
        }

        .mini-logo {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            font-weight: 800;
        }

        .mini-logo-box {
            width: 34px;
            height: 34px;
            border-radius: 10px;
            background: var(--yellow);
            color: var(--black);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 900;
        }

        .invoice-tag {
            background: #111;
            color: var(--yellow);
            padding: 8px 12px;
            border-radius: 999px;
            font-size: .85rem;
            font-weight: 700;
        }

        .invoice-box {
            background: #fafafa;
            border: 1px solid #ececec;
            border-radius: 16px;
            padding: 14px;
            margin-bottom: 14px;
        }

        .row {
            display: flex;
            justify-content: space-between;
            gap: 16px;
            margin-bottom: 10px;
            font-size: .95rem;
        }

        .row:last-child {
            margin-bottom: 0;
        }

        .row .muted {
            color: #6f6f6f;
        }

        .row.total {
            font-size: 1.1rem;
            font-weight: 800;
            color: #111;
        }

        section {
            padding: 80px 0;
        }

        .section-head {
            text-align: center;
            max-width: 760px;
            margin: 0 auto 44px;
        }

        .section-head h2 {
            font-size: clamp(1.8rem, 4vw, 3rem);
            margin-bottom: 14px;
        }

        .section-head p {
            color: #c7c7c7;
            font-size: 1.04rem;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 22px;
        }

        .feature-card {
            background: var(--black-soft);
            border: 1px solid var(--border);
            border-radius: 24px;
            padding: 26px;
            transition: .25s ease;
        }

        .feature-card:hover {
            transform: translateY(-5px);
            border-color: rgba(245,183,0,.35);
            box-shadow: 0 18px 40px rgba(0,0,0,.22);
        }

        .icon-box {
            width: 54px;
            height: 54px;
            border-radius: 16px;
            background: rgba(245,183,0,.12);
            color: var(--yellow);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.4rem;
            margin-bottom: 18px;
            border: 1px solid rgba(245,183,0,.22);
        }

        .feature-card h3 {
            margin-bottom: 10px;
            font-size: 1.2rem;
        }

        .feature-card p {
            color: #c1c1c1;
            font-size: .98rem;
        }

        .showcase {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 24px;
        }

        .show-box {
            background: var(--black-soft);
            border: 1px solid var(--border);
            border-radius: 24px;
            padding: 28px;
        }

        .show-box h3 {
            margin-bottom: 12px;
            font-size: 1.35rem;
        }

        .show-box p {
            color: #c8c8c8;
            margin-bottom: 16px;
        }

        .check-list {
            list-style: none;
            display: grid;
            gap: 12px;
        }

        .check-list li {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            color: #ececec;
        }

        .check {
            color: var(--yellow);
            font-weight: 900;
        }

        .cta {
            text-align: center;
            background: linear-gradient(180deg, rgba(245,183,0,.10), rgba(245,183,0,.04));
            border: 1px solid rgba(245,183,0,.18);
            border-radius: 30px;
            padding: 50px 24px;
        }

        .cta h2 {
            font-size: clamp(1.8rem, 4vw, 3rem);
            margin-bottom: 14px;
        }

        .cta p {
            max-width: 700px;
            margin: 0 auto 24px;
            color: #d2d2d2;
        }

        footer {
            border-top: 1px solid var(--border);
            padding: 26px 0;
            color: #b7b7b7;
            background: #111214;
        }

        .footer-wrap {
            display: flex;
            justify-content: space-between;
            gap: 16px;
            align-items: center;
            flex-wrap: wrap;
        }

        .footer-brand {
            display: flex;
            align-items: center;
            gap: 10px;
            font-weight: 700;
        }

        .footer-brand .dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: var(--yellow);
            display: inline-block;
        }

        @media (max-width: 980px) {
            .hero-grid,
            .showcase,
            .features-grid {
                grid-template-columns: 1fr;
            }

            .hero {
                padding-top: 70px;
            }

            .nav-wrap {
                flex-direction: column;
                padding: 16px 0;
            }

            .nav-links {
                justify-content: center;
            }

            .nav-actions {
                width: 100%;
                justify-content: center;
            }

            .hero-card {
                max-width: 650px;
                margin: auto;
            }
        }

        @media (max-width: 640px) {
            .hero h1 {
                font-size: 2.2rem;
            }

            .btn {
                width: 100%;
            }

            .hero-buttons {
                flex-direction: column;
            }

            .stat {
                width: 100%;
            }

            .invoice-top,
            .row {
                flex-direction: column;
                align-items: flex-start;
            }

            .section-head {
                margin-bottom: 30px;
            }
        }
    </style>
</head>
<body>

    <nav class="navbar">
        <div class="container nav-wrap">
            <a href="{{ url('/') }}" class="logo">
                <div class="logo-mark">IP</div>
                <span>Invoice<strong>Pro</strong></span>
            </a>

            <div class="nav-links">
                <a href="#features">Features</a>
                <a href="#solutions">Solutions</a>
                <a href="#why-us">Why Us</a>
                <a href="{{ url('/admin') }}" class="btn btn-primary">Login</a>
                    <a href="{{ url('/admin/register') }}" class="btn btn-primary">Sign Up</a>

            </div>
        </div>
    </nav>

    <section class="hero">
        <div class="container hero-grid">
            <div>
                <div class="badge">⚡ Fast, clean, and professional invoice generation</div>

                <h1>Create <span class="accent">Professional Invoices</span> in Minutes</h1>

                <p>
                    InvoicePro helps freelancers, agencies, and businesses generate beautiful invoices,
                    track billing details, and manage payment workflows from one powerful dashboard.
                </p>

                <div class="hero-buttons">
                    <a href="{{ url('/admin') }}" class="btn btn-primary">Go to Dashboard</a>
                    <a href="#features" class="btn btn-outline">Explore Features</a>
                </div>

                <div class="hero-stats">
                    <div class="stat">
                        <strong>10x Faster</strong>
                        <span>Create invoices in a few clicks</span>
                    </div>
                    <div class="stat">
                        <strong>100% Clean</strong>
                        <span>Modern and client-ready layouts</span>
                    </div>
                    <div class="stat">
                        <strong>Responsive</strong>
                        <span>Perfect on desktop and mobile</span>
                    </div>
                </div>
            </div>

            <div class="hero-card">
                <div class="invoice-preview">
                    <div class="invoice-top">
                        <div class="mini-logo">
                            <div class="mini-logo-box">IP</div>
                            <div>
                                <div style="font-weight: 800;">InvoicePro</div>
                                <div style="font-size: .85rem; color: #666;">Smart Billing System</div>
                            </div>
                        </div>
                        <div class="invoice-tag">PAID</div>
                    </div>

                    <div class="invoice-box">
                        <div class="row">
                            <span class="muted">Invoice No.</span>
                            <strong>#INV-2026-104</strong>
                        </div>
                        <div class="row">
                            <span class="muted">Client</span>
                            <strong>Creative Studio LLC</strong>
                        </div>
                        <div class="row">
                            <span class="muted">Issue Date</span>
                            <strong>27 Mar 2026</strong>
                        </div>
                    </div>

                    <div class="invoice-box">
                        <div class="row">
                            <span>Website Design Package</span>
                            <strong>$450.00</strong>
                        </div>
                        <div class="row">
                            <span>Hosting & Setup</span>
                            <strong>$90.00</strong>
                        </div>
                        <div class="row">
                            <span>Support</span>
                            <strong>$60.00</strong>
                        </div>
                    </div>

                    <div class="invoice-box">
                        <div class="row total">
                            <span>Total Amount</span>
                            <span>$600.00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="features">
        <div class="container">
            <div class="section-head">
                <h2>Everything You Need to Generate Invoices</h2>
                <p>
                    A complete solution for invoice creation, branding, organization, and fast access to your billing workflow.
                </p>
            </div>

            <div class="features-grid">
                <div class="feature-card">
                    <div class="icon-box">🧾</div>
                    <h3>Invoice Builder</h3>
                    <p>Create polished invoices with business details, client info, line items, totals, and notes in seconds.</p>
                </div>

                <div class="feature-card">
                    <div class="icon-box">🎨</div>
                    <h3>Professional Branding</h3>
                    <p>Add your logo, choose clean layouts, and present a premium identity to every client you work with.</p>
                </div>

                <div class="feature-card">
                    <div class="icon-box">📱</div>
                    <h3>Responsive Experience</h3>
                    <p>Use the platform comfortably on mobile, tablet, or desktop with a layout designed for every screen size.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="solutions">
        <div class="container">
            <div class="showcase">
                <div class="show-box">
                    <h3>Built for modern businesses</h3>
                    <p>
                        Whether you are a freelancer, agency, developer, or company, InvoicePro gives you a professional homepage
                        and entry point into your billing system.
                    </p>
                    <ul class="check-list">
                        <li><span class="check">✔</span> Quick access to admin dashboard</li>
                        <li><span class="check">✔</span> Premium dark style with yellow highlights</li>
                        <li><span class="check">✔</span> Clear call-to-action for users</li>
                    </ul>
                </div>

                <div class="show-box" id="why-us">
                    <h3>Why this homepage works</h3>
                    <p>
                        The design focuses on trust, speed, and readability. It feels like a real SaaS landing page instead of a default framework page.
                    </p>
                    <ul class="check-list">
                        <li><span class="check">✔</span> Strong headline and product message</li>
                        <li><span class="check">✔</span> Visual invoice preview</li>
                        <li><span class="check">✔</span> Easy navigation with direct login button</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="cta">
                <h2>Start Managing Invoices Like a Pro</h2>
                <p>
                    Access your dashboard, manage invoice generation, and deliver a better billing experience with a clean and modern system.
                </p>
                <a href="{{ url('/admin') }}" class="btn btn-primary">Login to Admin</a>
            </div>
        </div>
    </section>

    <footer>
        <div class="container footer-wrap">
            <div class="footer-brand">
                <span class="dot"></span>
                <span>InvoicePro</span>
            </div>
            <div>© {{ date('Y') }} InvoicePro. All rights reserved.</div>
        </div>
    </footer>

</body>
</html>
