<?php
$name = "Killua";
$age = 22;
$role = "Mod Creator";

$discordLink = "https://discord.gg/bV7mpxZDyZ";
$supportLink = "https://ko-fi.com/boruto_r";
$steamLink = "https://steamcommunity.com/profiles/76561199056309172/";
$curseforgeLink = "https://www.curseforge.com/members/boruto_ger/projects";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>About - HTTYD Collection</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="css/dragon-glow.css">

<style>
* {
    box-sizing: border-box;
}

html, body {
    margin: 0;
    padding: 0;
    font-family: "Trebuchet MS", sans-serif;
    color: #fff;
    background: url("bg.png") no-repeat center center fixed;
    background-size: cover;
}

body::before {
    content: "";
    position: fixed;
    inset: 0;
    background:
        linear-gradient(to bottom, rgba(0,0,0,0.72), rgba(0,0,0,0.78)),
        radial-gradient(circle at top right, rgba(255,140,40,0.10), transparent 30%);
    z-index: -1;
}

/* ===== NAVBAR ===== */
.navbar {
    display: flex;
    justify-content: center;
    gap: 40px;
    padding: 22px;
    backdrop-filter: blur(10px);
    background: rgba(20,20,20,0.62);
    border-bottom: 2px solid rgba(255,150,50,0.30);
    position: sticky;
    top: 0;
    z-index: 100;
}

.navbar a {
    text-decoration: none;
    color: #f5d7a1;
    font-size: 19px;
    font-weight: bold;
    transition: 0.2s ease;
}

.navbar a:hover {
    color: #ffd79a;
    text-shadow: 0 0 14px rgba(255,174,66,0.5);
}

/* ===== PAGE ===== */
.page {
    width: 100%;
    min-height: 100vh;
}

/* ===== HERO ===== */
.hero-wrap {
    display: flex;
    justify-content: center;
    padding: 40px 20px 20px;
}

.hero-panel {
    width: 1250px;
    max-width: 100%;
    background: rgba(30,20,10,0.76);
    border: 2px solid rgba(255,150,50,0.30);
    box-shadow: 0 0 34px rgba(255,120,0,0.14);
    backdrop-filter: blur(10px);
    overflow: hidden;
    position: relative;
}

.hero-panel::after {
    content: "";
    position: absolute;
    right: -120px;
    top: -120px;
    width: 300px;
    height: 300px;
    background: radial-gradient(circle, rgba(255,170,66,0.12), transparent 65%);
    pointer-events: none;
}

.hero-top {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    gap: 25px;
    padding: 30px 34px 10px;
}

.hero-left {
    flex: 1;
    min-width: 0;
}

.hero-kicker {
    color: #ffb960;
    text-transform: uppercase;
    letter-spacing: 2px;
    font-size: 14px;
    margin-bottom: 12px;
}

.hero-title {
    font-size: 52px;
    color: #ffcc80;
    line-height: 1.05;
    margin-bottom: 16px;
    text-shadow: 0 0 16px rgba(255,174,66,0.14);
}

.hero-subtitle {
    font-size: 18px;
    color: #ddd;
    line-height: 1.7;
    max-width: 760px;
}

.brand-box {
    display: flex;
    align-items: center;
    gap: 12px;
    background: rgba(0,0,0,0.24);
    border: 1px solid rgba(255,180,80,0.24);
    padding: 10px 14px;
    min-width: fit-content;
}

.brand-box img {
    width: 48px;
    height: 48px;
    object-fit: contain;
}

.brand-text {
    color: #ffd18c;
    font-size: 20px;
    font-weight: bold;
    letter-spacing: 1px;
}

/* ===== CONTENT PANEL ===== */
.main-wrap {
    display: flex;
    justify-content: center;
    padding: 0 20px 40px;
}

.main-panel {
    width: 1250px;
    max-width: 100%;
    background: rgba(22,14,9,0.78);
    border: 2px solid rgba(255,150,50,0.24);
    box-shadow: 0 0 26px rgba(255,120,0,0.10);
    backdrop-filter: blur(10px);
    padding: 30px;
}

/* ===== GRID ===== */
.about-grid {
    display: grid;
    grid-template-columns: 340px 1fr;
    gap: 28px;
    align-items: start;
}

/* ===== LEFT SIDE ===== */
.left-column {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.creator-img {
    width: 100%;
    height: 420px;
    background: url("creator.png") center/cover no-repeat;
    border: 2px solid rgba(255,170,70,0.30);
    box-shadow: 0 0 20px rgba(255,120,0,0.10);
}

.profile-card,
.side-box {
    background: rgba(18,12,8,0.76);
    border: 1px solid rgba(255,170,70,0.18);
    padding: 18px;
}

.card-title {
    font-size: 20px;
    color: #ffd39a;
    margin-bottom: 14px;
}

.profile-line {
    display: flex;
    justify-content: space-between;
    gap: 12px;
    padding: 10px 0;
    border-bottom: 1px solid rgba(255,170,70,0.08);
}

.profile-line:last-child {
    border-bottom: none;
}

.profile-label {
    color: #c7ab83;
    font-size: 14px;
}

.profile-value {
    color: #fff2dc;
    font-size: 15px;
    font-weight: bold;
    text-align: right;
}

.side-text {
    color: #ddd;
    font-size: 15px;
    line-height: 1.7;
}

/* ===== RIGHT SIDE ===== */
.right-column {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.section-box {
    background: rgba(20,13,8,0.74);
    border: 1px solid rgba(255,170,70,0.16);
    padding: 24px;
}

.section-title {
    font-size: 26px;
    color: #ffcc80;
    margin-bottom: 14px;
}

.desc {
    font-size: 16px;
    color: #ddd;
    line-height: 1.8;
}

/* ===== STATS ===== */
.stats-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 14px;
}

.stat-card {
    background: rgba(18,12,8,0.82);
    border: 1px solid rgba(255,170,70,0.18);
    padding: 18px;
    text-align: center;
}

.stat-label {
    font-size: 12px;
    color: #c8ad84;
    letter-spacing: 1px;
    text-transform: uppercase;
    margin-bottom: 8px;
}

.stat-value {
    font-size: 22px;
    color: #fff1d7;
    font-weight: bold;
}

/* ===== FEATURE GRID ===== */
.feature-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 14px;
}

.feature-item {
    background: rgba(36,22,12,0.60);
    border: 1px solid rgba(255,170,70,0.14);
    padding: 16px;
}

.feature-item-title {
    color: #ffd39a;
    font-size: 17px;
    font-weight: bold;
    margin-bottom: 8px;
}

.feature-item-text {
    color: #ddd;
    line-height: 1.7;
    font-size: 15px;
}

/* ===== BUTTONS ===== */
.link-section-text {
    color: #d7d7d7;
    font-size: 15px;
    line-height: 1.7;
    margin-bottom: 18px;
}

.button-grid {
    display: grid;
    grid-template-columns: repeat(2, minmax(180px, 1fr));
    gap: 14px;
}

.link-btn {
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    min-height: 58px;
    padding: 14px 18px;
    color: #ffe0b1;
    font-weight: bold;
    letter-spacing: 0.4px;
    border: 2px solid rgba(255,174,66,0.55);
    background: rgba(0,0,0,0.16);
    transition: 0.2s ease;
    text-align: center;
}

.link-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 0 18px rgba(255,174,66,0.16);
}

.discord-btn {
    border-color: rgba(114,137,218,0.72);
}
.discord-btn:hover {
    background: rgba(114,137,218,0.10);
}

.support-btn {
    border-color: rgba(255,170,66,0.72);
}
.support-btn:hover {
    background: rgba(255,170,66,0.10);
}

.steam-btn {
    border-color: rgba(120,180,255,0.72);
}
.steam-btn:hover {
    background: rgba(120,180,255,0.10);
}

.curse-btn {
    border-color: rgba(255,120,60,0.72);
}
.curse-btn:hover {
    background: rgba(255,120,60,0.10);
}

/* ===== HIGHLIGHT BOX ===== */
.highlight-box {
    border-left: 3px solid rgba(255,174,66,0.55);
    background: rgba(40,24,12,0.48);
    padding: 16px 18px;
    color: #eee;
    line-height: 1.8;
}

/* ===== FOOTER ===== */
.footer {
    text-align: center;
    padding: 24px;
    color: #aaa;
    font-size: 14px;
}

/* ===== RESPONSIVE ===== */
@media (max-width: 1050px) {
    .about-grid {
        grid-template-columns: 1fr;
    }

    .creator-img {
        height: 320px;
    }

    .stats-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .feature-grid {
        grid-template-columns: 1fr;
    }
}

@media (max-width: 760px) {
    .hero-top {
        flex-direction: column;
        align-items: flex-start;
    }

    .hero-title {
        font-size: 38px;
    }

    .hero-subtitle {
        font-size: 16px;
    }

    .button-grid {
        grid-template-columns: 1fr;
    }

    .stats-grid {
        grid-template-columns: 1fr;
    }

    .navbar {
        gap: 20px;
        flex-wrap: wrap;
        padding: 18px;
    }

    .navbar a {
        font-size: 17px;
    }
}

@media (max-width: 520px) {
    .hero-panel,
    .main-panel {
        padding-left: 0;
        padding-right: 0;
    }

    .hero-top {
        padding: 24px 20px 12px;
    }

    .main-panel {
        padding: 20px;
    }

    .hero-title {
        font-size: 32px;
    }

    .brand-box {
        width: 100%;
    }
}
</style>
</head>

<body>

<div class="page">

    <!-- NAV -->
    <div class="navbar">
        <a href="home.php">Home</a>
        <a href="mods.php">Mod Infos</a>
        <a href="about.php">About</a>
    </div>

    <!-- HERO -->
    <section class="hero-wrap">
        <div class="hero-panel">
            <div class="hero-top">
                <div class="hero-left">
                    <div class="hero-kicker">ARK Mod Creator</div>
                    <div class="hero-title">Building Dragons and Fantasy Content for ARK</div>
                    <div class="hero-subtitle">
                        I am <?php echo $name; ?>, a <?php echo $age; ?> year old <?php echo $role; ?> working on the HTTYD Collection.
                        My focus is bringing dragon-inspired creatures, themed content, and immersive mod ideas into ARK.
                    </div>
                </div>

                <div class="brand-box">
                    <img src="logo-small.png" alt="HTTYD Collection Logo">
                    <div class="brand-text">HTTYD Collection</div>
                </div>
            </div>
        </div>
    </section>

    <!-- MAIN -->
    <section class="main-wrap">
        <div class="main-panel">

            <div class="about-grid">

                <!-- LEFT -->
                <div class="left-column">
                    <div class="creator-img"></div>

                    <div class="profile-card">
                        <div class="card-title">Creator Profile</div>

                        <div class="profile-line">
                            <div class="profile-label">Name</div>
                            <div class="profile-value"><?php echo $name; ?></div>
                        </div>

                        <div class="profile-line">
                            <div class="profile-label">Age</div>
                            <div class="profile-value"><?php echo $age; ?></div>
                        </div>

                        <div class="profile-line">
                            <div class="profile-label">Role</div>
                            <div class="profile-value"><?php echo $role; ?></div>
                        </div>

                        <div class="profile-line">
                            <div class="profile-label">Main Game</div>
                            <div class="profile-value">ARK</div>
                        </div>

                        <div class="profile-line">
                            <div class="profile-label">Project</div>
                            <div class="profile-value">HTTYD Collection</div>
                        </div>

                        <div class="profile-line">
                            <div class="profile-label">Status</div>
                            <div class="profile-value">Active</div>
                        </div>
                    </div>

                    <div class="side-box">
                        <div class="card-title">Creative Focus</div>
                        <div class="side-text">
                            My projects are focused on dragons, creature concepts, fantasy world design,
                            visual presentation, and expanding ARK with unique HTTYD-inspired content.
                        </div>
                    </div>
                </div>

                <!-- RIGHT -->
                <div class="right-column">

                    <div class="section-box">
                        <div class="section-title">About Me</div>
                        <div class="desc">
                            My name is <?php echo $name; ?> and I am a passionate <?php echo $role; ?>.
                            I enjoy creating custom mod content, designing creature concepts, and building
                            fantasy-inspired experiences for ARK players.
                            <br><br>
                            The HTTYD Collection is my main project and is centered around dragons, chibis,
                            dossiers, themed content, and creative expansion ideas inspired by How To Train Your Dragon.
                            My goal is to bring that feeling into ARK in a way that is immersive, fun, and visually unique.
                        </div>
                    </div>

                    <div class="stats-grid">
                        <div class="stat-card">
                            <div class="stat-label">Age</div>
                            <div class="stat-value"><?php echo $age; ?></div>
                        </div>

                        <div class="stat-card">
                            <div class="stat-label">Role</div>
                            <div class="stat-value"><?php echo $role; ?></div>
                        </div>

                        <div class="stat-card">
                            <div class="stat-label">Focus</div>
                            <div class="stat-value">Dragons</div>
                        </div>

                        <div class="stat-card">
                            <div class="stat-label">Status</div>
                            <div class="stat-value">Active</div>
                        </div>
                    </div>

                    <div class="section-box">
                        <div class="section-title">What I Create</div>

                        <div class="feature-grid">
                            <div class="feature-item">
                                <div class="feature-item-title">Dragon Content</div>
                                <div class="feature-item-text">
                                    Custom dragon-inspired content for ARK with a strong fantasy and HTTYD style.
                                </div>
                            </div>

                            <div class="feature-item">
                                <div class="feature-item-title">Chibis & Creatures</div>
                                <div class="feature-item-text">
                                    Small companion-style content, creature concepts, and themed additions for the collection.
                                </div>
                            </div>

                            <div class="feature-item">
                                <div class="feature-item-title">Dossiers & Lore</div>
                                <div class="feature-item-text">
                                    Themed creature dossiers and presentation elements to make the project feel richer and more complete.
                                </div>
                            </div>

                            <div class="feature-item">
                                <div class="feature-item-title">Visual Design</div>
                                <div class="feature-item-text">
                                    Project branding, mod showcase pages, and a consistent fantasy look around the collection.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="section-box">
                        <div class="section-title">Project Vision</div>
                        <div class="highlight-box">
                            HTTYD Collection is designed to become a larger dragon-themed ARK project that combines
                            creatures, visuals, themed content, and creative ideas into one connected collection.
                        </div>
                    </div>

                    <div class="section-box">
                        <div class="section-title">Community & Support</div>
                        <div class="link-section-text">
                            Join the Discord community, support the project, check my Steam profile, or view my CurseForge pages.
                        </div>

                        <div class="button-grid">
                            <a class="link-btn discord-btn" href="<?php echo $discordLink; ?>" target="_blank" rel="noopener noreferrer">Discord</a>
                            <a class="link-btn support-btn" href="<?php echo $supportLink; ?>" target="_blank" rel="noopener noreferrer">Support</a>
                            <a class="link-btn steam-btn" href="<?php echo $steamLink; ?>" target="_blank" rel="noopener noreferrer">Steam</a>
                            <a class="link-btn curse-btn" href="<?php echo $curseforgeLink; ?>" target="_blank" rel="noopener noreferrer">CurseForge</a>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>

    <div class="footer">
        Made by <?php echo $name; ?>
    </div>

</div>

</body>
</html>