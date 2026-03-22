<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Numan Iftikhar - Senior Multi-Cloud DevOps Engineer | Kubernetes Architect | Terraform Expert">
    <meta name="keywords" content="DevOps Engineer, Cloud Architect, Kubernetes, Terraform, Azure, AWS, GCP">
    <meta name="author" content="Numan Iftikhar">
    
    <?php wp_head(); ?>
    
    
</head>
<body <?php body_class(); ?>>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader">
            <div class="loader-ring"></div>
            <span class="loader-text">NI</span>
        </div>
    </div>

    <!-- Navigation -->
    <nav id="navbar">
        <div class="container nav-container">
            <a href="#hero" class="logo">
                <span class="logo-bracket">&lt;</span>NI<span class="logo-bracket">/&gt;</span>
            </a>
            <ul class="nav-links" id="navLinks">
                <li><a href="#hero" class="active">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#experience">Experience</a></li>
                <li><a href="#certifications">Certifications</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#education">Education</a></li>
                <li><a href="#book-call">Book a Call</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <div class="nav-actions">
                <a href="<?php echo get_template_directory_uri(); ?>/Numan_Iftikhar_Resume.pdf" class="btn btn-sm" download>
                    <i class="fas fa-download"></i> Resume
                </a>
                <button class="hamburger" id="hamburger" aria-label="Toggle menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="hero">
        <div class="hero-particles" id="particles"></div>
        <div class="container hero-container">
            <div class="hero-content">
                <p class="hero-greeting animate-fade-up">Hello, I'm</p>
                <h1 class="hero-name animate-fade-up delay-1">Numan Iftikhar</h1>
                <div class="hero-title-wrapper animate-fade-up delay-2">
                    <span class="hero-title-prefix">Senior</span>
                    <span class="hero-title-typed" id="typedText"></span>
                    <span class="typed-cursor">|</span>
                </div>
                <p class="hero-description animate-fade-up delay-3">
                    Building secure, self-healing cloud infrastructures across Azure, AWS & GCP.
                    Transforming manual workflows into automated, GitOps-driven powerhouses.
                </p>
                <div class="hero-cta animate-fade-up delay-4">
                    <a href="#book-call" class="btn btn-accent btn-lg">
                        <i class="fas fa-calendar-check"></i> Book Free Consultation
                    </a>
                    <a href="#contact" class="btn btn-primary btn-lg">
                        <i class="fas fa-paper-plane"></i> Get In Touch
                    </a>
                    <a href="#experience" class="btn btn-outline btn-lg">
                        <i class="fas fa-briefcase"></i> View My Work
                    </a>
                </div>
                <div class="hero-social animate-fade-up delay-5">
                    <a href="https://linkedin.com/in/numaniftikhar" target="_blank" rel="noopener" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    <a href="https://github.com/numaniftikhar1088" target="_blank" rel="noopener" aria-label="GitHub"><i class="fab fa-github"></i></a>
                    <a href="mailto:hellonumaniftikhar@gmail.com" aria-label="Email"><i class="fas fa-envelope"></i></a>
                    <a href="https://numaniftikhar.com" target="_blank" rel="noopener" aria-label="Website"><i class="fas fa-globe"></i></a>
                </div>
            </div>
            <div class="hero-visual animate-fade-up delay-3">
                <div class="hero-image-wrapper">
                    <div class="hero-image-border"></div>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/profile.jpg" alt="Numan Iftikhar - Senior Multi-Cloud DevOps Engineer" class="hero-profile-img">
                </div>
                <div class="floating-badge badge-1">
                    <i class="fab fa-aws"></i> AWS
                </div>
                <div class="floating-badge badge-2">
                    <i class="fab fa-microsoft"></i> Azure
                </div>
                <div class="floating-badge badge-3">
                    <i class="fab fa-google"></i> GCP
                </div>
                <div class="floating-badge badge-4">
                    <i class="fab fa-docker"></i> K8s
                </div>
            </div>
        </div>
        <div class="hero-scroll">
            <a href="#about">
                <span>Scroll Down</span>
                <i class="fas fa-chevron-down"></i>
            </a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">&lt;about&gt;</span>
                <h2 class="section-title">About Me</h2>
                <div class="section-line"></div>
            </div>
            <div class="about-grid">
                <div class="about-content">
                    <h3>Senior Multi-Cloud DevOps Engineer</h3>
                    <p>
                        With <strong>5+ years of experience</strong> specializing in Azure, AWS, and Google Cloud Platform,
                        I am a Kubernetes Architect and IaC Expert with deep expertise in designing, deploying, and managing
                        enterprise-grade cloud infrastructure across hybrid and multi-cloud environments.
                    </p>
                    <p>
                        As a <strong>Google Cloud Certified</strong> professional, I'm skilled in transforming manual workflows
                        into automated, GitOps-driven powerhouses. From DevSecOps integration to FinOps cloud optimization,
                        I focus on building secure, self-healing infrastructures that enable developers to ship code faster
                        and more reliably.
                    </p>
                    <div class="about-stats">
                        <div class="stat-card">
                            <span class="stat-number" data-count="5">0</span><span class="stat-plus">+</span>
                            <span class="stat-label">Years Experience</span>
                        </div>
                        <div class="stat-card">
                            <span class="stat-number" data-count="8">0</span><span class="stat-plus">+</span>
                            <span class="stat-label">Certifications</span>
                        </div>
                        <div class="stat-card">
                            <span class="stat-number" data-count="3">0</span>
                            <span class="stat-label">Cloud Platforms</span>
                        </div>
                        <div class="stat-card">
                            <span class="stat-number" data-count="99">0</span><span class="stat-plus">.9%</span>
                            <span class="stat-label">Uptime Achieved</span>
                        </div>
                    </div>
                </div>
                <div class="about-info">
                    <div class="info-card">
                        <div class="info-item">
                            <i class="fas fa-user"></i>
                            <div>
                                <span class="info-label">Name</span>
                                <span class="info-value">Numan Iftikhar</span>
                            </div>
                        </div>
                        <div class="info-item">
                            <i class="fas fa-envelope"></i>
                            <div>
                                <span class="info-label">Email</span>
                                <span class="info-value">hellonumaniftikhar@gmail.com</span>
                            </div>
                        </div>
                        <div class="info-item">
                            <i class="fas fa-phone"></i>
                            <div>
                                <span class="info-label">Phone</span>
                                <span class="info-value">+92 301 000 7414</span>
                            </div>
                        </div>
                        <div class="info-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <div>
                                <span class="info-label">Location</span>
                                <span class="info-value">Pakistan</span>
                            </div>
                        </div>
                        <div class="info-item">
                            <i class="fas fa-language"></i>
                            <div>
                                <span class="info-label">Languages</span>
                                <span class="info-value">English, Urdu</span>
                            </div>
                        </div>
                        <div class="info-item">
                            <i class="fas fa-circle-check"></i>
                            <div>
                                <span class="info-label">Availability</span>
                                <span class="info-value available">Available for Work</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">&lt;skills&gt;</span>
                <h2 class="section-title">Skills & Competencies</h2>
                <div class="section-line"></div>
            </div>
            <div class="skills-grid">
                <!-- Cloud Platforms -->
                <div class="skill-category">
                    <div class="skill-category-header">
                        <div class="skill-icon"><i class="fas fa-cloud"></i></div>
                        <h3>Cloud Platforms</h3>
                    </div>
                    <div class="skill-tags">
                        <span class="skill-tag azure"><i class="fab fa-microsoft"></i> Microsoft Azure</span>
                        <span class="skill-tag aws"><i class="fab fa-aws"></i> AWS</span>
                        <span class="skill-tag gcp"><i class="fab fa-google"></i> Google Cloud</span>
                    </div>
                </div>
                <!-- Container & Orchestration -->
                <div class="skill-category">
                    <div class="skill-category-header">
                        <div class="skill-icon"><i class="fas fa-cubes"></i></div>
                        <h3>Container & Orchestration</h3>
                    </div>
                    <div class="skill-tags">
                        <span class="skill-tag"><i class="fab fa-docker"></i> Docker</span>
                        <span class="skill-tag">Kubernetes</span>
                        <span class="skill-tag azure">AKS</span>
                        <span class="skill-tag gcp">GKE</span>
                        <span class="skill-tag aws">EKS</span>
                        <span class="skill-tag">Helm</span>
                        <span class="skill-tag">Istio</span>
                    </div>
                </div>
                <!-- CI/CD & Automation -->
                <div class="skill-category">
                    <div class="skill-category-header">
                        <div class="skill-icon"><i class="fas fa-rocket"></i></div>
                        <h3>CI/CD & Automation</h3>
                    </div>
                    <div class="skill-tags">
                        <span class="skill-tag">Jenkins</span>
                        <span class="skill-tag"><i class="fab fa-github"></i> GitHub Actions</span>
                        <span class="skill-tag"><i class="fab fa-gitlab"></i> GitLab CI</span>
                        <span class="skill-tag azure">Azure DevOps</span>
                        <span class="skill-tag gcp">Cloud Build</span>
                        <span class="skill-tag">Argo CD</span>
                    </div>
                </div>
                <!-- IaC & Configuration -->
                <div class="skill-category">
                    <div class="skill-category-header">
                        <div class="skill-icon"><i class="fas fa-code"></i></div>
                        <h3>IaC & Configuration</h3>
                    </div>
                    <div class="skill-tags">
                        <span class="skill-tag">Terraform</span>
                        <span class="skill-tag">Ansible</span>
                        <span class="skill-tag">Pulumi</span>
                        <span class="skill-tag aws">CloudFormation</span>
                    </div>
                </div>
                <!-- Monitoring & Observability -->
                <div class="skill-category">
                    <div class="skill-category-header">
                        <div class="skill-icon"><i class="fas fa-chart-line"></i></div>
                        <h3>Monitoring & Observability</h3>
                    </div>
                    <div class="skill-tags">
                        <span class="skill-tag">Prometheus</span>
                        <span class="skill-tag">Grafana</span>
                        <span class="skill-tag gcp">Cloud Monitoring</span>
                        <span class="skill-tag gcp">Cloud Logging</span>
                        <span class="skill-tag">Datadog</span>
                    </div>
                </div>
                <!-- Security & Compliance -->
                <div class="skill-category">
                    <div class="skill-category-header">
                        <div class="skill-icon"><i class="fas fa-shield-halved"></i></div>
                        <h3>Security & Compliance</h3>
                    </div>
                    <div class="skill-tags">
                        <span class="skill-tag">DevSecOps</span>
                        <span class="skill-tag">Trivy</span>
                        <span class="skill-tag">Prisma Cloud</span>
                        <span class="skill-tag azure">Key Vault</span>
                        <span class="skill-tag gcp">Secret Manager</span>
                        <span class="skill-tag gcp">Cloud Armor</span>
                        <span class="skill-tag">SSL/TLS</span>
                        <span class="skill-tag">OPA</span>
                    </div>
                </div>
                <!-- Networking & Infra -->
                <div class="skill-category">
                    <div class="skill-category-header">
                        <div class="skill-icon"><i class="fas fa-network-wired"></i></div>
                        <h3>Networking & Infrastructure</h3>
                    </div>
                    <div class="skill-tags">
                        <span class="skill-tag">VPN</span>
                        <span class="skill-tag">Firewall</span>
                        <span class="skill-tag">Nginx</span>
                        <span class="skill-tag">HAProxy</span>
                        <span class="skill-tag">Proxmox</span>
                        <span class="skill-tag">VMware</span>
                        <span class="skill-tag gcp">GCP VPC</span>
                        <span class="skill-tag azure">Azure VNET</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Experience Section -->
    <section id="experience">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">&lt;experience&gt;</span>
                <h2 class="section-title">Professional Experience</h2>
                <div class="section-line"></div>
            </div>
            <div class="timeline">
                <!-- TrueMedIT -->
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-date">
                        <span>March 2023 – Present</span>
                    </div>
                    <div class="timeline-content">
                        <div class="timeline-header">
                            <h3>Senior DevOps Engineer</h3>
                            <span class="company">TrueMedIT</span>
                            <span class="location"><i class="fas fa-map-marker-alt"></i> Calgary, Alberta, Canada (Remote)</span>
                        </div>
                        <ul class="timeline-details">
                            <li>
                                <strong>Multi-Cloud Architecture & Governance:</strong> Architected and managed enterprise
                                infrastructure across Azure and GCP, implementing governance policies and cost-management
                                strategies for high availability and cost-efficiency.
                            </li>
                            <li>
                                <strong>Advanced CI/CD Automation:</strong> Engineered end-to-end CI/CD pipelines using Jenkins,
                                Azure DevOps, and Google Cloud Build, significantly reducing lead time for changes across
                                multi-cloud environments.
                            </li>
                            <li>
                                <strong>Kubernetes Orchestration (AKS, GKE & Hybrid):</strong> Deployed and managed
                                production-grade Kubernetes clusters ensuring 99.9% uptime through advanced scaling and
                                self-healing configurations.
                            </li>
                            <li>
                                <strong>Enterprise IaC:</strong> Standardized multi-cloud provisioning using Terraform and
                                Ansible, ensuring 100% consistency across Dev, QA, and Production stages.
                            </li>
                            <li>
                                <strong>DevSecOps & Compliance:</strong> Pioneered security integration with SSL/TLS,
                                automated vulnerability scanning (Prisma/Trivy), and secrets management ensuring
                                banking-level compliance.
                            </li>
                            <li>
                                <strong>Cloud Monitoring & Observability:</strong> Implemented centralized monitoring using
                                Prometheus, Grafana, and Google Cloud Monitoring with integrated alerting for proactive
                                incident detection.
                            </li>
                            <li>
                                <strong>Disaster Recovery:</strong> Designed automated backup and recovery solutions using
                                Azure Backup, Velero, and GCP Cloud Storage with cross-region replication.
                            </li>
                        </ul>
                        <div class="timeline-tags">
                            <span>Azure</span><span>GCP</span><span>Kubernetes</span>
                            <span>Terraform</span><span>Jenkins</span><span>Prometheus</span>
                        </div>
                    </div>
                </div>

                <!-- 403 IT Solutions -->
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-date">
                        <span>July 2021 – March 2023</span>
                    </div>
                    <div class="timeline-content">
                        <div class="timeline-header">
                            <h3>DevOps Engineer</h3>
                            <span class="company">403 IT Solutions</span>
                            <span class="location"><i class="fas fa-map-marker-alt"></i> Texas, United States (Remote)</span>
                        </div>
                        <ul class="timeline-details">
                            <li>
                                <strong>Hybrid Cloud Infrastructure:</strong> Architected and optimized Azure and GCP cloud
                                environments, implementing governance and cost-management strategies that scaled infrastructure
                                across multi-cloud deployments.
                            </li>
                            <li>
                                <strong>Enterprise Kubernetes & Virtualization:</strong> Designed high-availability Proxmox
                                clusters on baremetal and orchestrated production Kubernetes workloads on AKS and GKE, ensuring
                                99.9% uptime.
                            </li>
                            <li>
                                <strong>Advanced CI/CD Orchestration:</strong> Engineered multi-platform automation pipelines
                                using Jenkins, GitHub Actions, GitLab CI, and Google Cloud Build, reducing deployment lead times.
                            </li>
                            <li>
                                <strong>Strategic IaC:</strong> Automated end-to-end lifecycle of global environments across
                                Azure and GCP using Terraform and Ansible, eliminating configuration drift.
                            </li>
                            <li>
                                <strong>Tier 3 Technical Leadership:</strong> Served as the final escalation point for complex
                                networking and system architecture bottlenecks, resolving high-priority incidents.
                            </li>
                            <li>
                                <strong>Cross-functional Mentorship:</strong> Championed DevOps best practices, mentoring
                                junior engineers and leading knowledge-sharing sessions.
                            </li>
                        </ul>
                        <div class="timeline-tags">
                            <span>Azure</span><span>GCP</span><span>Proxmox</span>
                            <span>Ansible</span><span>GitHub Actions</span><span>GitLab CI</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Certifications Section -->
    <section id="certifications">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">&lt;certifications&gt;</span>
                <h2 class="section-title">Certifications</h2>
                <div class="section-line"></div>
            </div>
            <div class="certs-grid">
                <div class="cert-card gcp">
                    <div class="cert-icon"><i class="fab fa-google"></i></div>
                    <h4>Professional Cloud DevOps Engineer</h4>
                    <span class="cert-provider">Google Cloud</span>
                </div>
                <div class="cert-card gcp">
                    <div class="cert-icon"><i class="fab fa-google"></i></div>
                    <h4>Associate Cloud Engineer</h4>
                    <span class="cert-provider">Google Cloud</span>
                </div>
                <div class="cert-card gcp">
                    <div class="cert-icon"><i class="fab fa-google"></i></div>
                    <h4>Professional Cloud Architect</h4>
                    <span class="cert-provider">Google Cloud</span>
                </div>
                <div class="cert-card aws-cert">
                    <div class="cert-icon"><i class="fab fa-aws"></i></div>
                    <h4>Solutions Architect – Associate</h4>
                    <span class="cert-provider">Amazon Web Services</span>
                </div>
                <div class="cert-card aws-cert">
                    <div class="cert-icon"><i class="fab fa-aws"></i></div>
                    <h4>Developer – Associate</h4>
                    <span class="cert-provider">Amazon Web Services</span>
                </div>
                <div class="cert-card azure-cert">
                    <div class="cert-icon"><i class="fab fa-microsoft"></i></div>
                    <h4>Azure Administrator Associate</h4>
                    <span class="cert-provider">Microsoft</span>
                </div>
                <div class="cert-card terraform">
                    <div class="cert-icon"><i class="fas fa-cubes"></i></div>
                    <h4>Terraform Associate (003)</h4>
                    <span class="cert-provider">HashiCorp</span>
                </div>
                <div class="cert-card other">
                    <div class="cert-icon"><i class="fas fa-shield-halved"></i></div>
                    <h4>Cybersecurity & Endpoint Integration</h4>
                    <span class="cert-provider">Kaseya / Datto</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Projects Section -->
    <section id="projects">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">&lt;projects&gt;</span>
                <h2 class="section-title">Featured Projects</h2>
                <div class="section-line"></div>
            </div>
            <div class="projects-grid">
                <!-- FinGuard Project -->
                <div class="project-card">
                    <div class="project-header">
                        <div class="project-icon"><i class="fas fa-university"></i></div>
                        <div class="project-links">
                            <a href="https://github.com/numaniftikhar1088/devops-ci-cd-portifolio" target="_blank" rel="noopener" class="project-link" aria-label="View on GitHub">
                                <i class="fab fa-github"></i>
                            </a>
                        </div>
                    </div>
                    <h3 class="project-title">FinGuard</h3>
                    <p class="project-subtitle">Multi-Cloud Banking Platform</p>
                    <div class="project-tech-stack">
                        <span>AWS EKS</span><span>GCP GKE</span><span>Terraform</span>
                        <span>ArgoCD</span><span>Istio</span><span>GitHub Actions</span>
                        <span>Vault</span><span>Prometheus</span><span>OPA Gatekeeper</span>
                    </div>
                    <ul class="project-details">
                        <li>
                            <i class="fas fa-check-circle"></i>
                            Architected production-grade multi-tenant banking infrastructure across AWS (primary) and GCP (DR), with automated cross-cloud failover achieving <strong>RPO &lt; 5 min</strong> and <strong>RTO &lt; 15 min</strong>.
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            Built full GitOps pipeline (GitHub Actions &rarr; ArgoCD) with canary deployments (10% &rarr; 50% &rarr; 100%), automated Trivy/Semgrep security scanning, and Cosign image signing &mdash; <strong>zero manual deployments</strong> to production.
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            Implemented zero-trust networking via Istio service mesh (mTLS), OPA Gatekeeper policy-as-code, and HashiCorp Vault for dynamic DB credential rotation every 24 hours.
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            Enforced <strong>PCI-DSS and SOC 2</strong> compliance through automated policy gates, immutable audit trails, and per-tenant PostgreSQL database isolation via Terraform.
                        </li>
                    </ul>
                    <div class="project-badges">
                        <span class="badge badge-security"><i class="fas fa-shield-halved"></i> PCI-DSS</span>
                        <span class="badge badge-security"><i class="fas fa-shield-halved"></i> SOC 2</span>
                        <span class="badge badge-cloud"><i class="fas fa-cloud"></i> Multi-Cloud</span>
                        <span class="badge badge-gitops"><i class="fas fa-code-branch"></i> GitOps</span>
                    </div>
                </div>

                <!-- Lab Management System Project -->
                <div class="project-card">
                    <div class="project-header">
                        <div class="project-icon"><i class="fas fa-flask"></i></div>
                        <div class="project-links">
                            <a href="https://github.com/numaniftikhar1088/lab-managementsystem-aks" target="_blank" rel="noopener" class="project-link" aria-label="View on GitHub">
                                <i class="fab fa-github"></i>
                            </a>
                        </div>
                    </div>
                    <h3 class="project-title">Lab Management System</h3>
                    <p class="project-subtitle">Multi-Tenant SaaS on AKS</p>
                    <div class="project-tech-stack">
                        <span>Azure AKS</span><span>.NET Core 8</span><span>Helm</span>
                        <span>Istio</span><span>KEDA</span><span>Azure DevOps</span>
                        <span>Azure Key Vault</span><span>Terraform</span>
                    </div>
                    <ul class="project-details">
                        <li>
                            <i class="fas fa-check-circle"></i>
                            Designed <strong>HIPAA &amp; ISO 27001</strong>-compliant multi-tenant SaaS platform for hospitals and research labs, with full isolation at compute, data, and identity layers.
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            Implemented KEDA-driven autoscaling (0 &rarr; 20 pods) triggered by Azure Service Bus queue depth, running on Spot nodes &mdash; achieving <strong>~70% cost reduction</strong>.
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            Delivered <strong>p99 API response time &lt; 100ms</strong> and <strong>99.97% uptime SLA</strong> via AKS with HPA, PodDisruptionBudgets, and Azure Front Door.
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            Provisioned full infrastructure with Terraform (AKS, Azure SQL, Redis, Cosmos DB, Blob Storage) and deployed via Helm + ArgoCD GitOps pipeline with blue/green canary strategy.
                        </li>
                    </ul>
                    <div class="project-badges">
                        <span class="badge badge-security"><i class="fas fa-shield-halved"></i> HIPAA</span>
                        <span class="badge badge-security"><i class="fas fa-shield-halved"></i> ISO 27001</span>
                        <span class="badge badge-perf"><i class="fas fa-bolt"></i> &lt;100ms p99</span>
                        <span class="badge badge-uptime"><i class="fas fa-arrow-up"></i> 99.97%</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Education Section -->
    <section id="education">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">&lt;education&gt;</span>
                <h2 class="section-title">Education</h2>
                <div class="section-line"></div>
            </div>
            <div class="education-card">
                <div class="edu-icon">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <div class="edu-content">
                    <h3>Bachelor of Science in Information Technology</h3>
                    <span class="edu-school">Virtual University of Pakistan</span>
                    <span class="edu-date"><i class="fas fa-calendar"></i> May 2018 – September 2022</span>
                    <span class="edu-gpa"><i class="fas fa-star"></i> CGPA: 3.2 / 4.0</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Book a Call Section -->
    <section id="book-call">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">&lt;consultation&gt;</span>
                <h2 class="section-title">Book a Free Consultation</h2>
                <div class="section-line"></div>
                <p class="section-subtitle">Need help with cloud architecture, DevOps strategy, or infrastructure optimization? Let's talk!</p>
            </div>
            <div class="booking-grid">
                <div class="booking-info">
                    <div class="booking-highlights">
                        <div class="booking-highlight-item">
                            <div class="highlight-icon"><i class="fas fa-clock"></i></div>
                            <div>
                                <h4>30 Minutes</h4>
                                <p>Free one-on-one consultation call</p>
                            </div>
                        </div>
                        <div class="booking-highlight-item">
                            <div class="highlight-icon"><i class="fas fa-video"></i></div>
                            <div>
                                <h4>Google Meet / Zoom</h4>
                                <p>Virtual meeting at your convenience</p>
                            </div>
                        </div>
                        <div class="booking-highlight-item">
                            <div class="highlight-icon"><i class="fas fa-dollar-sign"></i></div>
                            <div>
                                <h4>100% Free</h4>
                                <p>No obligations, no hidden charges</p>
                            </div>
                        </div>
                    </div>
                    <div class="booking-topics">
                        <h4><i class="fas fa-lightbulb"></i> What We Can Discuss</h4>
                        <ul>
                            <li><i class="fas fa-check-circle"></i> Cloud Migration Strategy (AWS, Azure, GCP)</li>
                            <li><i class="fas fa-check-circle"></i> Kubernetes Architecture & Deployment</li>
                            <li><i class="fas fa-check-circle"></i> CI/CD Pipeline Design & Optimization</li>
                            <li><i class="fas fa-check-circle"></i> Infrastructure as Code (Terraform/Ansible)</li>
                            <li><i class="fas fa-check-circle"></i> DevSecOps & Security Best Practices</li>
                            <li><i class="fas fa-check-circle"></i> Cloud Cost Optimization (FinOps)</li>
                            <li><i class="fas fa-check-circle"></i> Monitoring & Observability Setup</li>
                        </ul>
                    </div>
                </div>
                <div class="booking-form-wrapper">
                    <form class="booking-form" id="bookingForm">
                        <h3><i class="fas fa-calendar-check"></i> Schedule Your Call</h3>
                        <div class="form-group">
                            <input type="text" id="bookName" name="name" placeholder=" " required>
                            <label for="bookName">Your Name</label>
                        </div>
                        <div class="form-group">
                            <input type="email" id="bookEmail" name="email" placeholder=" " required>
                            <label for="bookEmail">Your Email</label>
                        </div>
                        <div class="form-group">
                            <input type="tel" id="bookPhone" name="phone" placeholder=" ">
                            <label for="bookPhone">Phone Number (Optional)</label>
                        </div>
                        <div class="form-group">
                            <select id="bookTopic" name="topic" required>
                                <option value="" disabled selected>Select a Topic</option>
                                <option value="Cloud Migration">Cloud Migration Strategy</option>
                                <option value="Kubernetes">Kubernetes Architecture</option>
                                <option value="CI/CD">CI/CD Pipeline Design</option>
                                <option value="IaC">Infrastructure as Code</option>
                                <option value="DevSecOps">DevSecOps & Security</option>
                                <option value="FinOps">Cloud Cost Optimization</option>
                                <option value="Monitoring">Monitoring & Observability</option>
                                <option value="Other">Other</option>
                            </select>
                            <label for="bookTopic" class="select-label">Consultation Topic</label>
                        </div>
                        <div class="form-group">
                            <input type="date" id="bookDate" name="date" placeholder=" " required>
                            <label for="bookDate" class="select-label">Preferred Date</label>
                        </div>
                        <div class="form-group">
                            <select id="bookTime" name="time" required>
                                <option value="" disabled selected>Select a Time Slot</option>
                                <option value="09:00 AM">09:00 AM (PKT)</option>
                                <option value="10:00 AM">10:00 AM (PKT)</option>
                                <option value="11:00 AM">11:00 AM (PKT)</option>
                                <option value="12:00 PM">12:00 PM (PKT)</option>
                                <option value="02:00 PM">02:00 PM (PKT)</option>
                                <option value="03:00 PM">03:00 PM (PKT)</option>
                                <option value="04:00 PM">04:00 PM (PKT)</option>
                                <option value="05:00 PM">05:00 PM (PKT)</option>
                                <option value="07:00 PM">07:00 PM (PKT)</option>
                                <option value="08:00 PM">08:00 PM (PKT)</option>
                                <option value="09:00 PM">09:00 PM (PKT)</option>
                            </select>
                            <label for="bookTime" class="select-label">Preferred Time</label>
                        </div>
                        <div class="form-group">
                            <textarea id="bookMessage" name="message" rows="3" placeholder=" "></textarea>
                            <label for="bookMessage">Brief Description (Optional)</label>
                        </div>
                        <button type="submit" class="btn btn-accent btn-lg btn-full">
                            <i class="fas fa-calendar-check"></i> Book My Free Call
                        </button>
                        <p class="booking-note"><i class="fas fa-shield-halved"></i> Your information is safe and will only be used to schedule your consultation.</p>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">&lt;contact&gt;</span>
                <h2 class="section-title">Get In Touch</h2>
                <div class="section-line"></div>
                <p class="section-subtitle">Have a project in mind or want to discuss cloud infrastructure? Let's connect!</p>
            </div>
            <div class="contact-grid">
                <div class="contact-info">
                    <div class="contact-card">
                        <div class="contact-icon"><i class="fas fa-envelope"></i></div>
                        <h4>Email</h4>
                        <a href="mailto:hellonumaniftikhar@gmail.com">hellonumaniftikhar@gmail.com</a>
                    </div>
                    <div class="contact-card">
                        <div class="contact-icon"><i class="fas fa-phone"></i></div>
                        <h4>Phone</h4>
                        <a href="tel:+923010007414">+92 301 000 7414</a>
                    </div>
                    <div class="contact-card">
                        <div class="contact-icon"><i class="fas fa-map-marker-alt"></i></div>
                        <h4>Location</h4>
                        <span>Pakistan</span>
                    </div>
                    <div class="contact-socials">
                        <a href="https://linkedin.com/in/numaniftikhar" target="_blank" rel="noopener" class="social-link">
                            <i class="fab fa-linkedin-in"></i>
                            <span>LinkedIn</span>
                        </a>
                        <a href="https://github.com/numaniftikhar1088" target="_blank" rel="noopener" class="social-link">
                            <i class="fab fa-github"></i>
                            <span>GitHub</span>
                        </a>
                    </div>
                </div>
                <form class="contact-form" id="contactForm">
                    <div class="form-group">
                        <input type="text" id="name" name="name" placeholder=" " required>
                        <label for="name">Your Name</label>
                    </div>
                    <div class="form-group">
                        <input type="email" id="email" name="email" placeholder=" " required>
                        <label for="email">Your Email</label>
                    </div>
                    <div class="form-group">
                        <input type="text" id="subject" name="subject" placeholder=" " required>
                        <label for="subject">Subject</label>
                    </div>
                    <div class="form-group">
                        <textarea id="message" name="message" rows="5" placeholder=" " required></textarea>
                        <label for="message">Your Message</label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-full">
                        <i class="fas fa-paper-plane"></i> Send Message
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="footer">
        <div class="container">
            <div class="footer-content">
                <a href="#hero" class="footer-logo">
                    <span class="logo-bracket">&lt;</span>NI<span class="logo-bracket">/&gt;</span>
                </a>
                <p class="footer-text">Designed & Built by Numan Iftikhar</p>
                <div class="footer-socials">
                    <a href="https://linkedin.com/in/numaniftikhar" target="_blank" rel="noopener"><i class="fab fa-linkedin-in"></i></a>
                    <a href="https://github.com/numaniftikhar1088" target="_blank" rel="noopener"><i class="fab fa-github"></i></a>
                    <a href="mailto:hellonumaniftikhar@gmail.com"><i class="fas fa-envelope"></i></a>
                </div>
                <p class="footer-copy">&copy; 2026 Numan Iftikhar. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Back to Top -->
    <a href="#hero" class="back-to-top" id="backToTop" aria-label="Back to top">
        <i class="fas fa-arrow-up"></i>
    </a>

    <?php wp_footer(); ?>
</body>
</html>
