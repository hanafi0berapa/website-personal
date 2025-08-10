<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Saya</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #FFD700;  /* Kuning Emas */
            --secondary: #FFA500; /* Kuning Oranye */
            --dark: #000000;     /* Hitam */
            --dark-light: #111111; /* Hitam Terang */
            --dark-gray: #222222; /* Abu-abu Gelap */
            --light: #F5F5F5;    /* Putih */
            --accent: #FF4500;   /* Oranye Merah */
            --transition: all 0.3s ease;
            --shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
            --border-radius: 8px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--dark);
            color: var(--light);
            line-height: 1.6;
            overflow-x: hidden;
        }

        h1, h2, h3, h4 {
            font-weight: 700;
            margin-bottom: 1rem;
            color: var(--primary);
        }

        h1 {
            font-size: 3.5rem;
            line-height: 1.2;
        }

        h2 {
            font-size: 2.5rem;
            position: relative;
            display: inline-block;
            margin-bottom: 3rem;
        }

        h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 70px;
            height: 4px;
            background: var(--primary);
            border-radius: 2px;
        }

        p {
            margin-bottom: 1.5rem;
            font-size: 1.1rem;
            color: #ccc;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .btn {
            display: inline-block;
            padding: 12px 28px;
            background: var(--primary);
            color: var(--dark);
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            transition: var(--transition);
            border: none;
            cursor: pointer;
            font-size: 1rem;
            box-shadow: var(--shadow);
        }

        .btn:hover {
            background: var(--secondary);
            transform: translateY(-3px);
            box-shadow: 0 15px 25px rgba(255, 215, 0, 0.2);
        }

        .btn-outline {
            background: transparent;
            border: 2px solid var(--primary);
            color: var(--primary);
        }

        .btn-outline:hover {
            background: var(--primary);
            color: var(--dark);
        }

        section {
            padding: 100px 0;
        }

        /* Header & Navigation */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            background: rgba(0, 0, 0, 0.9);
            box-shadow: var(--shadow);
            transition: var(--transition);
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: 800;
            color: var(--primary);
            text-decoration: none;
            letter-spacing: 1px;
        }

        .logo span {
            color: var(--accent);
        }

        .nav-links {
            display: flex;
            list-style: none;
        }

        .nav-links li {
            margin-left: 30px;
        }

        .nav-links a {
            color: var(--light);
            text-decoration: none;
            font-weight: 500;
            transition: var(--transition);
            position: relative;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--primary);
            transition: var(--transition);
        }

        .nav-links a:hover {
            color: var(--primary);
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .hamburger {
            display: none;
            cursor: pointer;
            color: var(--primary);
        }

        /* Hero Section */
        .hero {
            height: 100vh;
            display: flex;
            align-items: center;
            background: linear-gradient(135deg, #000000 0%, #111111 100%);
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: -200px;
            right: -200px;
            width: 500px;
            height: 500px;
            background: var(--primary);
            border-radius: 50%;
            opacity: 0.1;
            filter: blur(80px);
        }

        .hero-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
            max-width: 1200px;
            z-index: 2;
        }

        .hero-text {
            max-width: 650px;
        }

        .hero h1 {
            margin-bottom: 20px;
            text-shadow: 0 5px 15px rgba(255, 215, 0, 0.3);
        }

        .hero h3 {
            color: var(--primary);
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            color: #aaa;
        }

        .hero-btns {
            display: flex;
            gap: 15px;
            margin-top: 30px;
        }

        .hero-img {
            position: absolute;
            right: 0;
            bottom: 0;
            width: 45%;
            max-width: 600px;
            z-index: 1;
            opacity: 0.9;
        }

        .hero-photo {
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 2;
        }

        .photo-container {
            position: relative;
            width: 280px;
            height: 350px;
            border-radius: 25px;
            overflow: visible;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.4);
            border: none;
            background: linear-gradient(145deg, rgba(255, 215, 0, 0.1), rgba(255, 215, 0, 0.05));
            backdrop-filter: blur(15px);
            transform-style: preserve-3d;
            perspective: 1000px;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .photo-container::before {
            content: '';
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            background: linear-gradient(45deg, #ffd700, #ff6b35, #4ecdc4, #45b7d1, #96ceb4, #feca57, #ff9ff3, #54a0ff);
            border-radius: 25px;
            z-index: -1;
            animation: borderRotate 3s linear infinite;
        }

        .photo-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, transparent 30%, rgba(255, 215, 0, 0.15) 50%, transparent 70%);
            z-index: 1;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .photo-container:hover::before {
            opacity: 1;
        }

        .photo-container::after {
            content: '';
            position: absolute;
            top: 20px;
            left: 20px;
            right: 20px;
            bottom: 20px;
            border: 2px solid rgba(255, 215, 0, 0.3);
            border-radius: 20px;
            opacity: 0;
            transition: all 0.3s ease;
            z-index: 2;
        }

        .photo-container:hover::after {
            opacity: 1;
            top: 15px;
            left: 15px;
            right: 15px;
            bottom: 15px;
        }

        .photo-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: all 0.4s ease;
            filter: brightness(0.9) contrast(1.1);
        }

        .photo-container:hover img {
            transform: scale(1.08) rotateY(5deg);
            filter: brightness(1.1) contrast(1.3) saturate(1.2);
        }

        .photo-container:hover {
            animation: glow 2s ease-in-out infinite;
            transform: translateY(-10px) rotateX(5deg);
        }

        .photo-container {
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .photo-container:hover {
            transform: translateY(-15px) rotateX(8deg) rotateY(3deg);
            box-shadow: 0 35px 70px rgba(0, 0, 0, 0.5);
        }

        .photo-container:hover img {
            transform: scale(1.1) rotateY(8deg);
            filter: brightness(1.2) contrast(1.4) saturate(1.3);
        }

        .photo-container::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at 30% 20%, rgba(255, 215, 0, 0.1) 0%, transparent 50%),
                        radial-gradient(circle at 70% 80%, rgba(255, 107, 53, 0.1) 0%, transparent 50%);
            border-radius: 25px;
            opacity: 0;
            transition: opacity 0.3s ease;
            z-index: 1;
        }

        .photo-container:hover::after {
            opacity: 1;
        }

        .photo-container .neon-border {
            position: absolute;
            top: -3px;
            left: -3px;
            right: -3px;
            bottom: -3px;
            background: linear-gradient(45deg, #ffd700, #ff6b35, #4ecdc4, #45b7d1);
            border-radius: 28px;
            z-index: -2;
            opacity: 0;
            filter: blur(8px);
            transition: opacity 0.3s ease;
        }

        .photo-container:hover .neon-border {
            opacity: 0.6;
        }

        .photo-decoration {
            position: absolute;
            top: -15px;
            right: -15px;
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, var(--primary), #ffed4e);
            border-radius: 50%;
            opacity: 0.9;
            animation: float 4s ease-in-out infinite;
            box-shadow: 0 10px 20px rgba(255, 215, 0, 0.3);
        }

        .photo-decoration::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 20px;
            height: 20px;
            background: var(--dark);
            border-radius: 50%;
            opacity: 0.8;
        }

        .photo-container .floating-dot {
            position: absolute;
            width: 12px;
            height: 12px;
            background: linear-gradient(45deg, var(--primary), #ff6b35);
            border-radius: 50%;
            opacity: 0.9;
            animation: float 3s ease-in-out infinite;
            box-shadow: 0 0 15px rgba(255, 215, 0, 0.6);
        }

        .photo-container .floating-dot:nth-child(1) {
            top: 30px;
            left: -25px;
            animation-delay: 0s;
            animation: float 3s ease-in-out infinite, pulse 2s ease-in-out infinite;
        }

        .photo-container .floating-dot:nth-child(2) {
            bottom: 40px;
            right: -30px;
            animation-delay: 1s;
            animation: float 4s ease-in-out infinite, pulse 2.5s ease-in-out infinite;
        }

        .photo-container .floating-dot:nth-child(3) {
            top: 50%;
            left: -20px;
            animation-delay: 2s;
            animation: float 3.5s ease-in-out infinite, pulse 3s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }

        @keyframes borderRotate {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); opacity: 1; }
            50% { transform: scale(1.1); opacity: 0.7; }
        }

        @keyframes glow {
            0%, 100% { box-shadow: 0 0 20px rgba(255, 215, 0, 0.5); }
            50% { box-shadow: 0 0 40px rgba(255, 215, 0, 0.8), 0 0 60px rgba(255, 215, 0, 0.3); }
        }

        .photo-container .sparkle {
            position: absolute;
            width: 4px;
            height: 4px;
            background: white;
            border-radius: 50%;
            opacity: 0;
            animation: sparkle 2s ease-in-out infinite;
        }

        .photo-container .sparkle:nth-child(4) {
            top: 20px;
            right: -15px;
            animation-delay: 0.5s;
        }

        .photo-container .sparkle:nth-child(5) {
            bottom: 60px;
            left: -10px;
            animation-delay: 1.5s;
        }

        .photo-container .sparkle:nth-child(6) {
            top: 80px;
            right: -5px;
            animation-delay: 2.5s;
        }

        @keyframes sparkle {
            0%, 100% { opacity: 0; transform: scale(0) rotate(0deg); }
            50% { opacity: 1; transform: scale(1.2) rotate(180deg); }
        }

        .photo-container .particle-trail {
            position: absolute;
            width: 2px;
            height: 2px;
            background: linear-gradient(45deg, #ffd700, #ff6b35);
            border-radius: 50%;
            opacity: 0;
            animation: particleTrail 4s linear infinite;
        }

        .photo-container .particle-trail:nth-child(7) {
            top: 10px;
            left: -40px;
            animation-delay: 0s;
        }

        .photo-container .particle-trail:nth-child(8) {
            top: 30px;
            left: -35px;
            animation-delay: 0.5s;
        }

        .photo-container .particle-trail:nth-child(9) {
            top: 50px;
            left: -30px;
            animation-delay: 1s;
        }

        @keyframes particleTrail {
            0% { 
                opacity: 0; 
                transform: translateX(0) translateY(0) scale(0);
            }
            20% { 
                opacity: 1; 
                transform: translateX(20px) translateY(-10px) scale(1);
            }
            100% { 
                opacity: 0; 
                transform: translateX(40px) translateY(-20px) scale(0);
            }
        }

        /* About Section */
        .about {
            background: var(--dark-light);
            position: relative;
            overflow: hidden;
        }

        .about::before {
            content: '';
            position: absolute;
            bottom: -200px;
            left: -200px;
            width: 500px;
            height: 500px;
            background: var(--primary);
            border-radius: 50%;
            opacity: 0.1;
            filter: blur(80px);
        }

        .about-content {
            display: flex;
            align-items: center;
            gap: 60px;
        }

        .about-img {
            flex: 1;
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--shadow);
            border: 2px solid var(--primary);
            position: relative;
        }

        .about-img::after {
            content: '';
            position: absolute;
            top: 20px;
            left: 20px;
            width: 100%;
            height: 100%;
            border: 2px solid var(--primary);
            border-radius: var(--border-radius);
            z-index: -1;
        }

        .about-img img {
            width: 100%;
            display: block;
        }

        .about-text {
            flex: 1;
        }

        .stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-top: 30px;
        }

        .stat-box {
            background: var(--dark-gray);
            padding: 20px;
            border-radius: var(--border-radius);
            text-align: center;
            border: 1px solid rgba(255, 215, 0, 0.2);
            transition: var(--transition);
        }

        .stat-box:hover {
            transform: translateY(-5px);
            border-color: var(--primary);
        }

        .stat-box h3 {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 5px;
        }

        .stat-box p {
            color: #aaa;
        }

        /* Skills Section */
        .skills {
            background: var(--dark);
            position: relative;
            overflow: hidden;
        }

        .skills::before {
            content: '';
            position: absolute;
            top: -200px;
            right: -200px;
            width: 500px;
            height: 500px;
            background: var(--primary);
            border-radius: 50%;
            opacity: 0.1;
            filter: blur(80px);
        }

        .skills-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 40px;
        }

        .skill-category h3 {
            font-size: 1.5rem;
            margin-bottom: 20px;
            color: var(--primary);
        }

        .skill-item {
            margin-bottom: 25px;
        }

        .skill-info {
            display: flex;
            justify-content: space-between;
            margin-bottom: 8px;
        }

        .skill-info span:first-child {
            color: var(--light);
        }

        .skill-info span:last-child {
            color: var(--primary);
            font-weight: 600;
        }

        .skill-bar {
            height: 10px;
            background: var(--dark-gray);
            border-radius: 5px;
            overflow: hidden;
        }

        .skill-progress {
            height: 100%;
            background: var(--primary);
            border-radius: 5px;
            position: relative;
            transition: width 1.5s ease;
        }

        .skill-progress::after {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            width: 20px;
            background: rgba(255, 255, 255, 0.3);
            animation: shine 2s infinite;
        }

        @keyframes shine {
            0% { transform: translateX(-100px); }
            100% { transform: translateX(300px); }
        }

        /* Portfolio Section */
        .portfolio {
            background: var(--dark-light);
            position: relative;
            overflow: hidden;
        }

        .portfolio-header {
            text-align: center;
            margin-bottom: 50px;
        }

        .portfolio-header h2::after {
            left: 50%;
            transform: translateX(-50%);
        }

        .portfolio-header p {
            max-width: 600px;
            margin: 0 auto;
        }

        .portfolio-filters {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 15px;
            margin-bottom: 40px;
        }

        .filter-btn {
            padding: 8px 20px;
            background: var(--dark-gray);
            color: #aaa;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            transition: var(--transition);
            font-weight: 500;
        }

        .filter-btn.active, .filter-btn:hover {
            background: var(--primary);
            color: var(--dark);
        }

        .portfolio-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 30px;
        }

        .portfolio-item {
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
            position: relative;
            background: var(--dark);
            border: 1px solid rgba(255, 215, 0, 0.1);
        }

        .portfolio-item:hover {
            transform: translateY(-10px);
            border-color: var(--primary);
        }

        .portfolio-img {
            height: 250px;
            overflow: hidden;
            background: var(--dark-gray);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .portfolio-img i {
            font-size: 4rem;
            color: var(--primary);
        }

        .portfolio-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.85);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            opacity: 0;
            transition: var(--transition);
            padding: 20px;
            text-align: center;
            color: white;
        }

        .portfolio-item:hover .portfolio-overlay {
            opacity: 1;
        }

        .portfolio-overlay h3 {
            margin-bottom: 10px;
            font-size: 1.5rem;
        }

        /* Contact Section */
        .contact {
            background: var(--dark);
            position: relative;
            overflow: hidden;
        }

        .contact::before {
            content: '';
            position: absolute;
            bottom: -200px;
            left: -200px;
            width: 500px;
            height: 500px;
            background: var(--primary);
            border-radius: 50%;
            opacity: 0.1;
            filter: blur(80px);
        }

        .contact-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 50px;
        }

        .contact-info h3 {
            font-size: 1.5rem;
            margin-bottom: 20px;
        }

        .contact-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 25px;
        }

        .contact-icon {
            width: 50px;
            height: 50px;
            background: var(--primary);
            color: var(--dark);
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-right: 15px;
            font-size: 1.2rem;
            flex-shrink: 0;
        }

        .contact-text h4 {
            color: var(--primary);
            margin-bottom: 5px;
        }

        .contact-form .form-group {
            margin-bottom: 20px;
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 15px;
            background: var(--dark-gray);
            border: 1px solid rgba(255, 215, 0, 0.1);
            border-radius: var(--border-radius);
            font-family: 'Poppins', sans-serif;
            font-size: 1rem;
            transition: var(--transition);
            color: var(--light);
        }

        .contact-form input:focus,
        .contact-form textarea:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(255, 215, 0, 0.1);
        }

        .contact-form textarea {
            height: 150px;
            resize: vertical;
        }

        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }

        .social-links a {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 40px;
            height: 40px;
            background: var(--dark-gray);
            border-radius: 50%;
            color: var(--primary);
            transition: var(--transition);
            text-decoration: none;
        }

        .social-links a:hover {
            background: var(--primary);
            color: var(--dark);
            transform: translateY(-5px);
        }

        /* Footer */
        footer {
            background: var(--dark-light);
            color: white;
            padding: 50px 0 20px;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 30px;
            margin-bottom: 40px;
        }

        .footer-col h4 {
            font-size: 1.3rem;
            margin-bottom: 20px;
            position: relative;
            color: var(--primary);
        }

        .footer-col h4::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 40px;
            height: 3px;
            background: var(--primary);
        }

        .footer-col p {
            margin-bottom: 15px;
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 12px;
        }

        .footer-links a {
            color: #aaa;
            text-decoration: none;
            transition: var(--transition);
        }

        .footer-links a:hover {
            color: var(--primary);
            padding-left: 5px;
        }

        .copyright {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 215, 0, 0.1);
            font-size: 0.9rem;
            color: #777;
        }

        /* Responsive Design */
        @media (max-width: 992px) {
            h1 {
                font-size: 2.8rem;
            }

            h2 {
                font-size: 2rem;
            }

            .hero-content {
                max-width: 500px;
                grid-template-columns: 1fr;
                text-align: center;
            }

            .hero-photo {
                order: -1;
                margin-bottom: 2rem;
            }

            .photo-container {
                width: 240px;
                height: 300px;
            }

            .hero-img {
                width: 40%;
            }

            .about-content {
                flex-direction: column;
            }

            .skills-container,
            .contact-container {
                grid-template-columns: 1fr;
            }

            .footer-content {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .nav-links {
                position: fixed;
                top: 80px;
                right: -100%;
                width: 70%;
                height: calc(100vh - 80px);
                background: var(--dark-light);
                flex-direction: column;
                align-items: center;
                padding-top: 40px;
                transition: var(--transition);
                box-shadow: -5px 0 15px rgba(0, 0, 0, 0.3);
            }

            .nav-links.active {
                right: 0;
            }

            .nav-links li {
                margin: 15px 0;
            }

            .hamburger {
                display: block;
            }

            .hero {
                text-align: center;
            }

            .hero-content {
                margin: 0 auto;
            }

            .hero-btns {
                justify-content: center;
            }

            .hero-img {
                display: none;
            }

            .photo-container {
                width: 220px;
                height: 275px;
            }

            .portfolio-grid {
                grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            }

            .stats {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 576px) {
            .footer-content {
                grid-template-columns: 1fr;
            }

            section {
                padding: 70px 0;
            }

            .portfolio-grid {
                grid-template-columns: 1fr;
            }

            .photo-container {
                width: 200px;
                height: 250px;
            }

            .hero-text h1 {
                font-size: 2.5rem;
            }

            .hero-text h3 {
                font-size: 1.3rem;
            }
        }
    </style>
</head>
<body>
    <!-- Header & Navigation -->
    <header>
        <div class="container">
            <nav>
                <a href="#" class="logo">Porto<span>folio</span></a>
                <ul class="nav-links">
                    <li><a href="#home">Beranda</a></li>
                    <li><a href="#about">Tentang</a></li>
                    <li><a href="#skills">Keahlian</a></li>
                    <li><a href="#portfolio">Portofolio</a></li>
                    <li><a href="#contact">Kontak</a></li>
                </ul>
                <div class="hamburger">
                    <i class="fas fa-bars"></i>
                </div>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <h4>Halo, Saya</h4>
                    <h1>Muhammad Gustinur Hanafi</h1>
                    <h3>Web Developer & UI/UX Designer</h3>
                    <p>Saya seorang pengembang web kreatif yang berspesialisasi dalam membuat pengalaman digital yang menarik dan fungsional. Dengan keahlian dalam teknologi front-end dan pemahaman mendalam tentang desain UI/UX.</p>
                    <div class="hero-btns">
                        <a href="#portfolio" class="btn">Lihat Portofolio</a>
                        <a href="#contact" class="btn btn-outline">Hubungi Saya</a>
                    </div>
                </div>
                <div class="hero-photo">
                    <div class="photo-container">
                        <div class="neon-border"></div>
                        <img src="assets/images/profile.jpg" alt="Muhammad Gustinur Hanafi" onerror="this.src='https://via.placeholder.com/400x500/ffd700/333?text=Foto+Profil'">
                        <div class="photo-decoration"></div>
                        <div class="floating-dot"></div>
                        <div class="floating-dot"></div>
                        <div class="floating-dot"></div>
                        <div class="sparkle"></div>
                        <div class="sparkle"></div>
                        <div class="sparkle"></div>
                        <div class="particle-trail"></div>
                        <div class="particle-trail"></div>
                        <div class="particle-trail"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-img">
            <svg viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg">
                <path fill="#FFD700" opacity="0.2" d="M46.4,-65.2C60.2,-55.6,71.3,-42.1,76.3,-26.6C81.3,-11.1,80.2,6.3,75.7,22.9C71.2,39.5,63.3,55.3,51.4,65.4C39.5,75.5,23.7,79.9,6.1,82.8C-11.5,85.7,-31,87.1,-46.1,79.1C-61.2,71.1,-71.9,53.7,-77.9,35.5C-83.9,17.3,-85.3,-1.8,-80.9,-18.8C-76.5,-35.8,-66.4,-50.8,-53.1,-60.7C-39.8,-70.7,-23.4,-75.7,-5.5,-79.2C12.4,-82.7,32.7,-74.8,46.4,-65.2Z" transform="translate(100 100)" />
            </svg>
        </div>
    </section>

    <!-- About Section -->
    <section class="about" id="about">
        <div class="container">
            <h2>Tentang Saya</h2>
            <div class="about-content">
                <div class="about-img">
                    <div style="background-color: #222; height: 100%; display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-user" style="font-size: 5rem; color: #FFD700;"></i>
                    </div>
                </div>
                <div class="about-text">
                    <h3>Desainer & Pengembang Web Kreatif</h3>
                    <p>Saya memiliki pengalaman lebih dari 5 tahun dalam industri pengembangan web. Saya mengkhususkan diri dalam membuat situs web yang responsif, aplikasi web interaktif, dan solusi e-commerce.</p>
                    <p>Pendekatan saya menggabungkan pemikiran kreatif dengan solusi teknis untuk menciptakan produk digital yang tidak hanya terlihat bagus tetapi juga memberikan pengalaman pengguna yang luar biasa.</p>
                    <div class="stats">
                        <div class="stat-box">
                            <h3>50+</h3>
                            <p>Proyek Selesai</p>
                        </div>
                        <div class="stat-box">
                            <h3>30+</h3>
                            <p>Klien Puas</p>
                        </div>
                        <div class="stat-box">
                            <h3>5+</h3>
                            <p>Tahun Pengalaman</p>
                        </div>
                    </div>
                    <a href="#" class="btn">Download CV</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section class="skills" id="skills">
        <div class="container">
            <h2>Keahlian Saya</h2>
            <div class="skills-container">
                <div class="skill-category">
                    <h3>Teknis</h3>
                    <div class="skill-item">
                        <div class="skill-info">
                            <span>HTML/CSS</span>
                            <span>95%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-progress" style="width: 95%"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-info">
                            <span>JavaScript</span>
                            <span>90%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-progress" style="width: 90%"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-info">
                            <span>React.js</span>
                            <span>85%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-progress" style="width: 85%"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-info">
                            <span>UI/UX Design</span>
                            <span>80%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-progress" style="width: 80%"></div>
                        </div>
                    </div>
                </div>
                <div class="skill-category">
                    <h3>Profesional</h3>
                    <div class="skill-item">
                        <div class="skill-info">
                            <span>Komunikasi</span>
                            <span>95%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-progress" style="width: 95%"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-info">
                            <span>Kerja Tim</span>
                            <span>90%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-progress" style="width: 90%"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-info">
                            <span>Manajemen Proyek</span>
                            <span>85%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-progress" style="width: 85%"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-info">
                            <span>Pemecahan Masalah</span>
                            <span>90%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-progress" style="width: 90%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section class="portfolio" id="portfolio">
        <div class="container">
            <div class="portfolio-header">
                <h2>Portofolio Saya</h2>
                <p>Berikut adalah beberapa proyek terbaik yang pernah saya kerjakan</p>
            </div>
            <div class="portfolio-filters">
                <button class="filter-btn active">Semua</button>
                <button class="filter-btn">Web Design</button>
                <button class="filter-btn">Aplikasi Web</button>
                <button class="filter-btn">UI/UX</button>
            </div>
            <div class="portfolio-grid">
                <div class="portfolio-item">
                    <div class="portfolio-img">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <div class="portfolio-overlay">
                        <h3>Website E-commerce</h3>
                        <p>Desain dan pengembangan toko online dengan fitur pembayaran terintegrasi</p>
                        <a href="#" class="btn">Lihat Detail</a>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="portfolio-img">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <div class="portfolio-overlay">
                        <h3>Aplikasi Mobile</h3>
                        <p>Aplikasi produktivitas untuk perangkat mobile dengan UI yang intuitif</p>
                        <a href="#" class="btn">Lihat Detail</a>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="portfolio-img">
                        <i class="fas fa-paint-brush"></i>
                    </div>
                    <div class="portfolio-overlay">
                        <h3>Redesign UI Website</h3>
                        <p>Modernisasi UI untuk situs perusahaan dengan peningkatan UX</p>
                        <a href="#" class="btn">Lihat Detail</a>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="portfolio-img">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <div class="portfolio-overlay">
                        <h3>Dashboard Analytics</h3>
                        <p>Dashboard analitik real-time dengan visualisasi data interaktif</p>
                        <a href="#" class="btn">Lihat Detail</a>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="portfolio-img">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <div class="portfolio-overlay">
                        <h3>Sistem POS</h3>
                        <p>Sistem point of sale berbasis web untuk bisnis ritel</p>
                        <a href="#" class="btn">Lihat Detail</a>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="portfolio-img">
                        <i class="fas fa-blog"></i>
                    </div>
                    <div class="portfolio-overlay">
                        <h3>Platform Blog</h3>
                        <p>Sistem manajemen konten untuk platform blogging</p>
                        <a href="#" class="btn">Lihat Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact" id="contact">
        <div class="container">
            <h2>Hubungi Saya</h2>
            <div class="contact-container">
                <div class="contact-info">
                    <h3>Mari Berbicara</h3>
                    <p>Saya selalu terbuka untuk peluang baru dan kolaborasi. Jangan ragu untuk menghubungi saya!</p>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-text">
                            <h4>Lokasi</h4>
                            <p>Pekanbaru, Indonesia</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-text">
                            <h4>Email</h4>
                            <p>muhammadgustinurhanafi@gmail.com</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="contact-text">
                            <h4>Telepon</h4>
                            <p>+62 812 3456 7890</p>
                        </div>
                    </div>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-github"></i></a>
                    </div>
                </div>
                <div class="contact-form">
                    <form>
                        <div class="form-group">
                            <input type="text" placeholder="Nama Lengkap" required>
                        </div>
                        <div class="form-group">
                            <input type="email" placeholder="Alamat Email" required>
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Subjek" required>
                        </div>
                        <div class="form-group">
                            <textarea placeholder="Pesan Anda" required></textarea>
                        </div>
                        <button type="submit" class="btn">Kirim Pesan</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-col">
                    <h4>Portofolio</h4>
                    <p>Website portofolio profesional yang menampilkan karya, keahlian, dan pengalaman dalam pengembangan web dan desain UI/UX.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="footer-col">
                    <h4>Tautan</h4>
                    <ul class="footer-links">
                        <li><a href="#home">Beranda</a></li>
                        <li><a href="#about">Tentang Saya</a></li>
                        <li><a href="#skills">Keahlian</a></li>
                        <li><a href="#portfolio">Portofolio</a></li>
                        <li><a href="#contact">Kontak</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Layanan</h4>
                    <ul class="footer-links">
                        <li><a href="#">Web Development</a></li>
                        <li><a href="#">UI/UX Design</a></li>
                        <li><a href="#">Aplikasi Web</a></li>
                        <li><a href="#">Responsive Design</a></li>
                        <li><a href="#">Maintenance Website</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Berlangganan</h4>
                    <p>Dapatkan pembaruan tentang proyek dan layanan terbaru saya.</p>
                    <form>
                        <div class="form-group">
                            <input type="email" placeholder="Masukkan email" required>
                        </div>
                        <button type="submit" class="btn">Berlangganan</button>
                    </form>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2023 Portofolio. Hak Cipta Dilindungi.</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile Navigation
        const hamburger = document.querySelector('.hamburger');
        const navLinks = document.querySelector('.nav-links');

        hamburger.addEventListener('click', () => {
            navLinks.classList.toggle('active');
            hamburger.innerHTML = navLinks.classList.contains('active') ? 
                '<i class="fas fa-times"></i>' : '<i class="fas fa-bars"></i>';
        });

        // Close mobile menu when clicking a link
        document.querySelectorAll('.nav-links a').forEach(link => {
            link.addEventListener('click', () => {
                navLinks.classList.remove('active');
                hamburger.innerHTML = '<i class="fas fa-bars"></i>';
            });
        });

        // Portfolio Filtering
        const filterButtons = document.querySelectorAll('.filter-btn');
        
        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                // Remove active class from all buttons
                filterButtons.forEach(btn => btn.classList.remove('active'));
                // Add active class to clicked button
                button.classList.add('active');
                // Here you would normally filter the portfolio items
                // For this example, we'll just show an alert
                alert('Filter: ' + button.textContent);
            });
        });

        // Smooth Scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Sticky Header
        window.addEventListener('scroll', () => {
            const header = document.querySelector('header');
            header.classList.toggle('sticky', window.scrollY > 100);
        });

        // Animate skills on scroll
        const animateSkills = () => {
            const skillBars = document.querySelectorAll('.skill-progress');
            skillBars.forEach(bar => {
                const width = bar.style.width;
                bar.style.width = '0';
                
                setTimeout(() => {
                    bar.style.width = width;
                }, 300);
            });
        };

        // Simple scroll observer
        window.addEventListener('scroll', () => {
            const skillsSection = document.querySelector('.skills');
            const sectionPosition = skillsSection.getBoundingClientRect().top;
            const screenPosition = window.innerHeight / 1.3;
            
            if(sectionPosition < screenPosition) {
                animateSkills();
                // Remove the event listener after animation
                window.removeEventListener('scroll', this);
            }
        });
    </script>
</body>
</html>