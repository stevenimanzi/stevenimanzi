<?php
// includes/data.php - Centralized data storage for the portfolio

$personal_info = [
    'name' => 'Steven IMANZI',
    'roles' => ['Full-Stack Developer', 'Founder & CEO of IMANZI Labs', 'IT Consultant'],
    'location' => 'Kigali, Rwanda',
    'experience' => '2+ Years',
    'email' => 'stivenimanzi1@gmail.com',
    'phone' => '+250 796 194 401',
    'whatsapp' => '+250796194401',
    'languages' => ['Kinyarwanda', 'English'],
    'stats' => [
        ['label' => 'Yrs Exp.', 'value' => '2+'],
        ['label' => 'Projects', 'value' => '10'],
        ['label' => 'Clients', 'value' => '4'],
        ['label' => 'Products', 'value' => '3']
    ],
    'socials' => [
        'github' => 'https://github.com/stevenimanzi',
        'linkedin' => 'https://rw.linkedin.com/in/steven-imanzi',
        'instagram' => 'https://instagram.com/steven_imanzi'
    ]
];

$services = [
    [
        'id' => '01/06',
        'title' => 'Software & Web Development',
        'icon' => 'fa-solid fa-code',
        'description' => 'Custom software, web applications, and management systems built for speed and scalability.',
        'includes' => ['Web Applications', 'Custom Management Systems', 'REST APIs', 'Database Architecture'],
        'price_rwf' => '300,000 RWF',
        'price_usd' => '$250 USD'
    ],
    [
        'id' => '02/06',
        'title' => 'Mobile Applications',
        'icon' => 'fa-solid fa-mobile-screen',
        'description' => 'Cross-platform mobile apps for iOS and Android tailored to your business needs.',
        'includes' => ['iOS & Android Apps', 'User Interfaces', 'API Integration', 'App Store Deployment'],
        'price_rwf' => '1,000,000 RWF',
        'price_usd' => '$800 USD'
    ],
    [
        'id' => '03/06',
        'title' => 'E-Commerce Solutions',
        'icon' => 'fa-solid fa-cart-shopping',
        'description' => 'End-to-end online stores with digital payments, inventory, and order management.',
        'includes' => ['Online Stores', 'Digital Payments', 'Product Management', 'Logistics Integration'],
        'price_rwf' => '750,000 RWF',
        'price_usd' => '$600 USD'
    ],
    [
        'id' => '04/06',
        'title' => 'Digital Marketing & Social Media',
        'icon' => 'fa-solid fa-bullhorn',
        'description' => 'Social media management, SEO, lead generation, and digital business strategy.',
        'includes' => ['Social Media Strategy', 'Content Creation', 'SEO & SEM', 'Lead Generation'],
        'price_rwf' => '250,000 RWF / mo',
        'price_usd' => '$200 USD / mo'
    ],
    [
        'id' => '05/06',
        'title' => 'IT Consultancy & Digitization',
        'icon' => 'fa-solid fa-server',
        'description' => 'Business digitization, IT infrastructure strategy, and transition to modern digital systems.',
        'includes' => ['Business Digitization', 'Infrastructure Planning', 'System Integration', 'Technical Support'],
        'price' => 'Consultation Based'
    ],
    [
        'id' => '06/06',
        'title' => 'Graphic & Brand Design',
        'icon' => 'fa-solid fa-pen-nib',
        'description' => 'Brand identity, logo design, UI/UX visual design, and professional marketing materials.',
        'includes' => ['Logo & Brand Identity', 'UI/UX Design', 'Marketing Materials', 'Social Media Graphics'],
        'price_rwf' => '130,000 RWF',
        'price_usd' => '$100 USD'
    ]
];

$skills = [
    'Frontend' => [
        'icon' => 'fa-brands fa-html5',
        'items' => ['HTML5', 'CSS3', 'JavaScript', 'React.js', 'Tailwind CSS', 'Bootstrap', 'SASS/SCSS']
    ],
    'Backend' => [
        'icon' => 'fa-solid fa-server',
        'items' => ['PHP', 'Laravel', 'Node.js', 'Express.js', 'REST APIs', 'GraphQL']
    ],
    'Mobile & Database' => [
        'icon' => 'fa-solid fa-mobile-screen',
        'items' => ['FlutterFlow', 'Firebase', 'MySQL', 'PostgreSQL', 'MongoDB']
    ],
    'Tools & Infrastructure' => [
        'icon' => 'fa-solid fa-toolbox',
        'items' => ['Git', 'GitHub', 'Figma', 'Postman', 'cPanel', 'CCTV Systems', 'Cisco Networking']
    ]
];

$skill_levels = [
    ['name' => 'Web Development', 'level' => '95%', 'icon' => 'fa-brands fa-html5'],
    ['name' => 'Project Management', 'level' => '90%', 'icon' => 'fa-solid fa-users-gear'],
    ['name' => 'PHP / Laravel', 'level' => '88%', 'icon' => 'fa-brands fa-php'],
    ['name' => 'Database Management', 'level' => '87%', 'icon' => 'fa-solid fa-database'],
    ['name' => 'React / JavaScript', 'level' => '85%', 'icon' => 'fa-brands fa-react'],
    ['name' => 'IT Infrastructure', 'level' => '82%', 'icon' => 'fa-solid fa-network-wired'],
    ['name' => 'Mobile (FlutterFlow)', 'level' => '80%', 'icon' => 'fa-solid fa-mobile-screen'],
    ['name' => 'UI / UX Design', 'level' => '78%', 'icon' => 'fa-brands fa-figma']
];

$projects = [
    [
        'title' => 'NOGUCHI HOLDINGS Ltd',
        'category' => 'Corporate Website',
        'image' => 'assets/projects/noguchi_website.png',
        'description' => 'Corporate website for NOGUCHI HOLDINGS showcasing their services and portfolio.',
        'metrics' => ['Metric' => 'Increased Engagement', 'Value' => '+45%'],
        'tags' => ['Web Design', 'CMS'],
        'link' => 'https://noguchi.rw'
    ],
    [
        'title' => 'ICYEREKEZO DIGITAL INNOVATION Ltd',
        'category' => 'Agency Website',
        'image' => 'assets/projects/icyerekezo_digital.png',
        'description' => 'Official website for the digital agency, highlighting innovative solutions.',
        'metrics' => ['Metric' => 'Client Acquisition', 'Value' => '+30%'],
        'tags' => ['Web App', 'Corporate'],
        'link' => 'https://icyerekezodigital.com'
    ],
    [
        'title' => 'ICYEREKEZO OMS',
        'category' => 'System Management',
        'image' => 'assets/projects/icyerekezo_oms.png',
        'description' => 'A comprehensive Factory Operation Management System to streamline industrial processes.',
        'metrics' => ['Metric' => 'Operational Efficiency', 'Value' => '+40%'],
        'tags' => ['Web App', 'ERP'],
        'link' => 'https://icyerekezooms.com'
    ],
    [
        'title' => 'Trust Rwanda',
        'category' => 'Retail E-Commerce',
        'image' => 'assets/projects/trust_rwanda.png',
        'description' => 'A dynamic multivendor E-Commerce platform enabling multiple sellers to manage stores.',
        'metrics' => ['Metric' => 'Sales Growth', 'Value' => '+60%'],
        'tags' => ['E-Commerce', 'Multivendor'],
        'link' => 'https://trustrwanda.onrender.com/'
    ],
    [
        'title' => 'ICYIBUZ',
        'category' => 'Business System',
        'image' => 'assets/projects/icyibuz.png',
        'description' => 'Advanced business management system focusing on operational efficiency and analytics.',
        'metrics' => ['Metric' => 'Data Accuracy', 'Value' => '99%'],
        'tags' => ['Management', 'System'],
        'link' => 'https://icyerekezodigital.online'
    ]
];

$testimonials = [
    [
        'name' => 'Jean Paul R.',
        'role' => 'Operations Director, Manufacturing Co.',
        'text' => 'Steven completely transformed how we run our factory floor. The ICYEREKEZO OMS system reduced our reporting errors to zero and increased our output efficiency drastically. Highly recommended for any serious business.'
    ],
    [
        'name' => 'Sarah K.',
        'role' => 'Founder, Retail Brand',
        'text' => 'We needed an E-Commerce solution that could handle complex multivendor requirements. IMANZI Labs delivered a platform that was not only fast and secure but also incredibly easy for our sellers to use. Sales are up 60%.'
    ],
    [
        'name' => 'David M.',
        'role' => 'Marketing Manager',
        'text' => 'The level of professionalism and technical skill Steven brings to the table is unmatched. Our corporate website redesign led to a 45% increase in user engagement within the first month alone.'
    ],
    [
        'name' => 'Alice B.',
        'role' => 'CEO, Tech Startup',
        'text' => 'Working with IMANZI Labs was the best decision for our startup. Steven built a robust web application that perfectly handles our complex backend operations with zero downtime.'
    ],
    [
        'name' => 'Patrick N.',
        'role' => 'Logistics Manager',
        'text' => 'The system Steven developed for our delivery network is flawless. Tracking orders is now seamless, and the mobile responsiveness means my team can use it directly from the field.'
    ],
    [
        'name' => 'Emma W.',
        'role' => 'Creative Director',
        'text' => 'Incredible eye for design and technical execution! The digital portfolio he created for our agency is stunning, blazing fast, and has already helped us land two major international clients.'
    ]
];

$experience = [
    [
        'period' => '2025 — Present',
        'role' => 'Founder & CEO',
        'company' => 'IMANZI Labs',
        'description' => 'Lead all digital projects from concept to delivery. Manage developer teams, oversee client relationships, architect scalable software, and drive company growth strategy.'
    ],
    [
        'period' => '2025 — Present',
        'role' => 'IT Consultant',
        'company' => 'IMANZI Labs',
        'description' => 'IT consultancy for SMEs: network design, CCTV installation, hardware procurement, cybersecurity assessments and ongoing IT support contracts.'
    ],
    [
        'period' => '2024 — Present',
        'role' => 'Full-Stack Developer',
        'company' => 'ICYEREKEZO DIGITAL INNOVATION Ltd',
        'description' => 'Develop and maintain full-stack digital solutions, building responsive user interfaces, robust back-end systems, APIs, and database-driven applications.'
    ],
    [
        'period' => '2024 — Present',
        'role' => 'Freelance Full-Stack Developer',
        'company' => 'Self-Employed (Remote & On-Site)',
        'description' => 'Built 10 custom web apps, e-commerce platforms, mobile apps and business management systems for clients across Rwanda and internationally.'
    ]
];

$education = [
    [
        'period' => '2024 — Present',
        'degree' => 'Bachelor\'s in E-Commerce',
        'institution' => 'RP Musanze College',
        'description' => 'Digital business models, marketing strategies, web technologies, online payment systems, and the intersection of business and technology.'
    ],
    [
        'period' => 'Completed',
        'degree' => 'A2 — Software Development',
        'institution' => 'Saint Laurent De GASEKE TSS',
        'description' => 'Technical secondary education in software development. Graduated with distinction in National Examinations.'
    ],
    [
        'period' => 'Ongoing',
        'degree' => 'Self-Directed Learning',
        'institution' => 'Coursera, Udemy, freeCodeCamp',
        'description' => 'Continuously expanding expertise through courses in React, Node.js, AI/ML, cloud computing, cybersecurity and advanced Laravel development.'
    ]
];
?>
