<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>HTTYD Collection</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="css/dragon-glow.css">

<style>
/* ===== GLOBAL ===== */
* {
    box-sizing: border-box;
}

body {
    margin: 0;
    font-family: "Trebuchet MS", sans-serif;
    background: url("bg.png") no-repeat center center fixed;
    background-size: cover;
    color: #fff;
}

body::before {
    content: "";
    position: fixed;
    inset: 0;
    background: rgba(0,0,0,0.58);
    z-index: -1;
}

/* ===== NAVBAR ===== */
.navbar {
    display: flex;
    justify-content: center;
    gap: 40px;
    padding: 22px;
    backdrop-filter: blur(8px);
    background: rgba(20,20,20,0.65);
    border-bottom: 2px solid rgba(255,150,50,0.4);
    position: sticky;
    top: 0;
    z-index: 50;
}

.navbar a {
    text-decoration: none;
    color: #f5d7a1;
    font-size: 20px;
    font-weight: bold;
    transition: 0.2s ease;
}

.navbar a:hover {
    color: #ffd38c;
    text-shadow: 0 0 12px rgba(255,170,66,0.65);
}

/* ===== PAGE ===== */
.page-wrapper {
    min-height: 100vh;
    display: flex;
    flex-direction: column;
}

/* ===== HERO ===== */
.hero-section {
    width: 100%;
    display: flex;
    justify-content: center;
    padding: 40px 20px 20px;
}

.hero-panel {
    width: 1200px;
    max-width: 100%;
    min-height: 420px;
    background: rgba(30,20,10,0.78);
    border: 2px solid rgba(255,150,50,0.4);
    box-shadow: 0 0 30px rgba(255,120,0,0.22);
    backdrop-filter: blur(10px);
    position: relative;
    overflow: hidden;
}

.hero-top {
    display: flex;
    justify-content: flex-end;
    padding: 20px 25px 0;
}

.brand-box {
    display: flex;
    align-items: center;
    gap: 12px;
    background: rgba(0,0,0,0.28);
    border: 1px solid rgba(255,180,80,0.25);
    padding: 10px 14px;
}

.brand-box img {
    width: 48px;
    height: 48px;
    object-fit: contain;
}

.brand-text {
    font-size: 22px;
    font-weight: bold;
    color: #ffd18c;
    letter-spacing: 1px;
}

.hero-content {
    padding: 20px 50px 50px;
    max-width: 760px;
}

.hero-subtitle {
    color: #ffb960;
    font-size: 18px;
    letter-spacing: 2px;
    text-transform: uppercase;
    margin-bottom: 14px;
}

.hero-title {
    font-size: 52px;
    color: #ffcc80;
    margin-bottom: 18px;
    line-height: 1.05;
    text-shadow: 0 0 18px rgba(255,174,66,0.18);
}

.hero-desc {
    font-size: 19px;
    color: #e4e4e4;
    line-height: 1.7;
    max-width: 700px;
}

.btn-group {
    margin-top: 30px;
    display: flex;
    gap: 18px;
    flex-wrap: wrap;
}

.btn {
    padding: 13px 24px;
    border: 2px solid #ffae42;
    color: #ffae42;
    text-decoration: none;
    font-weight: bold;
    background: rgba(0,0,0,0.18);
    transition: 0.2s ease;
}

.btn:hover {
    background: rgba(255,174,66,0.12);
    box-shadow: 0 0 14px rgba(255,174,66,0.22);
}

/* ===== RELEASES ===== */
.releases-section {
    width: 100%;
    display: flex;
    justify-content: center;
    padding: 10px 20px 40px;
}

.releases-panel {
    width: 1200px;
    max-width: 100%;
    background: rgba(18,12,8,0.8);
    border: 2px solid rgba(255,150,50,0.35);
    box-shadow: 0 0 24px rgba(255,120,0,0.15);
    backdrop-filter: blur(8px);
    padding: 30px;
}

.section-title {
    font-size: 30px;
    color: #ffcc80;
    margin-bottom: 8px;
}

.section-desc {
    font-size: 16px;
    color: #cfcfcf;
    margin-bottom: 25px;
}

.release-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
    gap: 20px;
}

.release-card {
    background: rgba(40,24,12,0.72);
    border: 1px solid rgba(255,170,66,0.28);
    padding: 18px;
    transition: 0.2s ease;
}

.release-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 0 20px rgba(255,140,40,0.16);
    border-color: rgba(255,190,90,0.5);
}

.release-header {
    display: flex;
    align-items: center;
    gap: 14px;
    margin-bottom: 14px;
}

.release-icon {
    width: 64px;
    height: 64px;
    object-fit: cover;
    border: 1px solid rgba(255,180,80,0.35);
    background: rgba(0,0,0,0.2);
}

.release-name {
    font-size: 20px;
    color: #ffd18c;
    font-weight: bold;
}

.release-date {
    font-size: 14px;
    color: #caa16c;
    margin-top: 4px;
}

.release-text {
    font-size: 15px;
    color: #dddddd;
    line-height: 1.6;
}

/* ===== FOOTER ===== */
.footer {
    text-align: center;
    font-size: 14px;
    color: #aaa;
    padding: 18px 10px 22px;
}

/* ===== RESPONSIVE ===== */
@media (max-width: 900px) {
    .hero-content {
        padding: 20px 25px 35px;
    }

    .hero-title {
        font-size: 40px;
    }

    .hero-desc {
        font-size: 17px;
    }

    .brand-text {
        font-size: 18px;
    }
}

@media (max-width: 600px) {
    .navbar {
        gap: 20px;
        padding: 16px;
        flex-wrap: wrap;
    }

    .navbar a {
        font-size: 17px;
    }

    .hero-title {
        font-size: 32px;
    }

    .hero-subtitle {
        font-size: 14px;
    }

    .hero-desc {
        font-size: 15px;
    }

    .brand-box img {
        width: 40px;
        height: 40px;
    }

    .release-header {
        align-items: flex-start;
    }
}
</style>
</head>

<body>

<div class="page-wrapper">

    <!-- NAV -->
    <div class="navbar">
        <a href="home.php">Home</a>
        <a href="mods.php">Mod Infos</a>
        <a href="about.php">About</a>
    </div>

    <!-- HERO / TOP INFO -->
    <section class="hero-section">
        <div class="hero-panel">

            <div class="hero-top">
                <div class="brand-box">
                    <img src="logo-small.png" alt="HTTYD Collection Logo">
                    <div class="brand-text">HTTYD Collection</div>
                </div>
            </div>

            <div class="hero-content">
                <div class="hero-subtitle">ARK Mod Project</div>

                <div class="hero-title">Dragons, Creatures and HTTYD Content for ARK</div>

                <div class="hero-desc">
                    HTTYD Collection is an ARK mod project inspired by How To Train Your Dragon.
                    Here you can find custom creatures, chibis, dossiers, mod information,
                    and the latest release updates for the collection.
                </div>

                <div class="btn-group">
                    <a class="btn" href="mods.php">View Mod Infos</a>
                    <a class="btn" href="about.php">About Creator</a>
                </div>
            </div>

        </div>
    </section>

    <!-- NEW RELEASES -->
    <section class="releases-section">
        <div class="releases-panel">
            <div class="section-title">Latest Mod Releases</div>
            <div class="section-desc">
                New creatures, chibis, dossiers and collection updates for ARK.
            </div>

            <div class="release-grid">

                <div class="release-card">
                    <div class="release-header">
                        <img class="release-icon" src="icons/lightfury.png" alt="Light Fury">
                        <div>
                            <div class="release-name">Light Fury Chibi</div>
                            <div class="release-date">New Release</div>
                        </div>
                    </div>
                    <div class="release-text">
                        Added the Light Fury as a new chibi for the HTTYD Collection with its own style and presentation inside ARK.
                    </div>
                </div>

                <div class="release-card">
                    <div class="release-header">
                        <img class="release-icon" src="icons/eruptodon.png" alt="Eruptodon">
                        <div>
                            <div class="release-name">Eruptodon Chibi</div>
                            <div class="release-date">New Release</div>
                        </div>
                    </div>
                    <div class="release-text">
                        The Eruptodon joins the collection as a new chibi release and expands the dragon-themed content of the mod.
                    </div>
                </div>

                <div class="release-card">
                    <div class="release-header">
                        <img class="release-icon" src="icons/cloudjumper.png" alt="Cloudjumper">
                        <div>
                            <div class="release-name">Cloudjumper Update</div>
                            <div class="release-date">Animated Update</div>
                        </div>
                    </div>
                    <div class="release-text">
                        Cloudjumper received animation support and continues to be one of the featured dragons in the collection.
                    </div>
                </div>

                <div class="release-card">
                    <div class="release-header">
                        <img class="release-icon" src="icons/collection.png" alt="HTTYD Collection">
                        <div>
                            <div class="release-name">Collection Expansion</div>
                            <div class="release-date">Project Update</div>
                        </div>
                    </div>
                    <div class="release-text">
                        The project continues to unify HTTYD content into one bigger ARK collection, including future creatures, dossiers and more.
                    </div>
                </div>

            </div>
        </div>
    </section>

    <div class="footer">
        Made by Killua
    </div>

</div>

</body>
</html>