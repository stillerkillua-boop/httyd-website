<?php
$modName = "HTTYD Collection";
$modId = "3680218508"; // hier deine echte Mod ID eintragen
$modVersion = "In Development";
$author = "Killua";

/*
    Cheats / Spawn Codes
    Passe die Commands später einfach an deine echten Klassen an.
*/
$cheats = [
    [
        "name" => "Night Fury Chibi",
        "command" => 'cheat gfi NightFury 1 0 0'
    ],
    [
        "name" => "Cloudjumper Chibi",
        "command" => 'cheat gfi Cloudjumper 1 0 0'
    ],
    [
        "name" => "Dragon Dossier",
        "command" => 'cheat gfi DragonDossier 1 0 0'
    ],
    [
        "name" => "HTTYD Saddle Test",
        "command" => 'cheat gfi HTTYDSaddle 1 0 0'
    ],
    [
        "name" => "Dragon Egg Test",
        "command" => 'cheat gfi DragonEgg 1 0 0'
    ]
];

/*
    Dossiers automatisch laden
*/
$dossierFolder = __DIR__ . "/Dossier";
$dossierWebPath = "Dossier/";
$dossierFiles = [];

if (is_dir($dossierFolder)) {
    $allowedExtensions = ['jpg', 'jpeg', 'png', 'webp', 'gif'];

    foreach (scandir($dossierFolder) as $file) {
        $filePath = $dossierFolder . "/" . $file;

        if (is_file($filePath)) {
            $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));

            if (in_array($ext, $allowedExtensions, true)) {
                $name = pathinfo($file, PATHINFO_FILENAME);
                $name = str_replace(['-', '_'], ' ', $name);
                $name = ucwords($name);

                $dossierFiles[] = [
                    "file" => $dossierWebPath . rawurlencode($file),
                    "name" => $name
                ];
            }
        }
    }

    usort($dossierFiles, function ($a, $b) {
        return strnatcasecmp($a["name"], $b["name"]);
    });
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title><?php echo htmlspecialchars($modName); ?> - Mod Infos</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="css/dragon-glow.css">

<style>
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
    background: rgba(0,0,0,0.62);
    z-index: -1;
}

.navbar {
    display: flex;
    justify-content: center;
    gap: 40px;
    padding: 25px;
    backdrop-filter: blur(8px);
    background: rgba(20,20,20,0.6);
    border-bottom: 2px solid rgba(255,150,50,0.35);
}

.navbar a {
    text-decoration: none;
    color: #f5d7a1;
    font-size: 20px;
    font-weight: bold;
}

.page-wrap {
    max-width: 1400px;
    margin: 0 auto;
    padding: 40px 25px 60px;
}

.hero {
    background: rgba(30,20,10,0.75);
    border: 2px solid rgba(255,150,50,0.35);
    box-shadow: 0 0 30px rgba(255,120,0,0.15);
    backdrop-filter: blur(10px);
    padding: 40px;
    text-align: center;
    margin-bottom: 30px;
}

.hero h1 {
    margin: 0 0 10px;
    font-size: 48px;
    color: #ffcc80;
    text-shadow: 0 0 14px rgba(255,170,70,0.28);
}

.hero p {
    margin: 10px auto 0;
    max-width: 900px;
    color: #e2d7cb;
    font-size: 18px;
    line-height: 1.6;
}

.mod-meta {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 18px;
    margin-top: 28px;
}

.meta-box {
    background: rgba(18,12,8,0.72);
    border: 1px solid rgba(255,170,70,0.28);
    padding: 18px;
    text-align: center;
}

.meta-label {
    font-size: 13px;
    color: #c8ad84;
    margin-bottom: 8px;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.meta-value {
    font-size: 20px;
    color: #fff1d7;
    font-weight: bold;
    word-break: break-word;
}

.section-grid {
    display: grid;
    grid-template-columns: 1.2fr 0.8fr;
    gap: 25px;
    margin-bottom: 25px;
}

.panel {
    background: rgba(30,20,10,0.75);
    border: 2px solid rgba(255,150,50,0.35);
    box-shadow: 0 0 30px rgba(255,120,0,0.12);
    backdrop-filter: blur(10px);
    padding: 28px;
}

.panel h2 {
    margin-top: 0;
    margin-bottom: 18px;
    font-size: 28px;
    color: #ffcc80;
}

.panel p {
    color: #ddd;
    line-height: 1.7;
    font-size: 17px;
}

.feature-list {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 15px;
    margin-top: 18px;
}

.feature-card {
    background: rgba(18,12,8,0.72);
    border: 1px solid rgba(255,170,70,0.22);
    padding: 16px;
}

.feature-card h3 {
    margin: 0 0 8px;
    color: #ffd18a;
    font-size: 18px;
}

.feature-card p {
    margin: 0;
    color: #d7cec5;
    font-size: 15px;
    line-height: 1.5;
}

.mod-icon-box {
    height: 100%;
    min-height: 360px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    background:
        linear-gradient(rgba(15,10,8,0.72), rgba(15,10,8,0.72)),
        url("mod-icon.png") center center / contain no-repeat;
    border: 2px solid rgba(255,170,70,0.26);
    text-align: center;
}

.mod-icon-title {
    font-size: 28px;
    color: #ffcc80;
    margin-bottom: 10px;
    background: rgba(0,0,0,0.45);
    padding: 10px 16px;
}

.mod-icon-sub {
    font-size: 15px;
    color: #ddd;
    background: rgba(0,0,0,0.45);
    padding: 8px 14px;
    max-width: 70%;
}

.cheat-section {
    background: rgba(30,20,10,0.75);
    border: 2px solid rgba(255,150,50,0.35);
    box-shadow: 0 0 30px rgba(255,120,0,0.12);
    backdrop-filter: blur(10px);
    padding: 28px;
}

.cheat-section h2 {
    margin-top: 0;
    margin-bottom: 10px;
    font-size: 28px;
    color: #ffcc80;
}

.cheat-section p {
    color: #ddd;
    line-height: 1.6;
    margin-bottom: 20px;
}

.cheat-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 16px;
}

.cheat-card {
    background: rgba(18,12,8,0.78);
    border: 1px solid rgba(255,170,70,0.22);
    padding: 16px;
}

.cheat-name {
    color: #ffd18a;
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 10px;
}

.cheat-command {
    background: rgba(0,0,0,0.42);
    border: 1px solid rgba(255,180,90,0.14);
    color: #fff0d0;
    padding: 12px;
    font-family: Consolas, monospace;
    font-size: 14px;
    word-break: break-word;
}

.info-note {
    margin-top: 20px;
    padding: 16px;
    background: rgba(255,170,70,0.08);
    border-left: 3px solid rgba(255,170,70,0.6);
    color: #f0dfc4;
}

.dossier-section {
    margin-top: 25px;
}

.dossier-section h2 {
    margin-top: 0;
    margin-bottom: 10px;
    font-size: 28px;
    color: #ffcc80;
}

.dossier-section p {
    color: #ddd;
    line-height: 1.6;
    margin-bottom: 20px;
}

.dossier-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 18px;
}

.dossier-card {
    background: rgba(18,12,8,0.78);
    border: 1px solid rgba(255,170,70,0.22);
    overflow: hidden;
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.dossier-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 0 24px rgba(255,140,40,0.2);
}

.dossier-card a {
    text-decoration: none;
    color: inherit;
    display: block;
}

.dossier-image {
    width: 100%;
    height: 320px;
    object-fit: cover;
    display: block;
    background: rgba(0,0,0,0.35);
}

.dossier-name {
    padding: 14px;
    color: #ffd18a;
    font-size: 16px;
    font-weight: bold;
    text-align: center;
    background: rgba(0,0,0,0.25);
}

.empty-dossier {
    padding: 18px;
    background: rgba(255,170,70,0.08);
    border-left: 3px solid rgba(255,170,70,0.6);
    color: #f0dfc4;
}

.footer {
    text-align: center;
    padding: 25px 15px 35px;
    color: #aaa;
    font-size: 14px;
}

@media (max-width: 1100px) {
    .section-grid,
    .mod-meta,
    .feature-list,
    .cheat-grid {
        grid-template-columns: 1fr;
    }

    .dossier-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 700px) {
    .navbar {
        gap: 20px;
        padding: 18px;
        flex-wrap: wrap;
    }

    .hero h1 {
        font-size: 34px;
    }

    .panel,
    .hero,
    .cheat-section {
        padding: 20px;
    }

    .dossier-grid {
        grid-template-columns: 1fr;
    }

    .dossier-image {
        height: 260px;
    }
}
</style>
</head>
<body>

<div class="navbar">
    <a href="home.php">Home</a>
    <a href="mods.php">Mod Infos</a>
    <a href="about.php">About</a>
</div>

<div class="page-wrap">

    <div class="hero panel">
        <h1><?php echo htmlspecialchars($modName); ?></h1>
        <p>
            A dragon-inspired ARK mod collection based on the world of dragons.
            This project combines creatures, chibis, dossiers, themed content, and future additions
            into one growing collection. The goal is to bring a cinematic dragon atmosphere into ARK
            with unique assets, immersive style, and expanding content updates.
        </p>

        <div class="mod-meta">
            <div class="meta-box">
                <div class="meta-label">Mod Name</div>
                <div class="meta-value"><?php echo htmlspecialchars($modName); ?></div>
            </div>

            <div class="meta-box">
                <div class="meta-label">Mod ID</div>
                <div class="meta-value"><?php echo htmlspecialchars($modId); ?></div>
            </div>

            <div class="meta-box">
                <div class="meta-label">Version</div>
                <div class="meta-value"><?php echo htmlspecialchars($modVersion); ?></div>
            </div>

            <div class="meta-box">
                <div class="meta-label">Author</div>
                <div class="meta-value"><?php echo htmlspecialchars($author); ?></div>
            </div>
        </div>
    </div>

    <div class="section-grid">
        <div class="panel">
            <h2>About The Mod</h2>
            <p>
                HTTYD Collection is designed as a central place for your dragon-themed ARK content.
                Instead of splitting everything into many separate projects, this collection brings
                multiple parts together into one main mod experience.
            </p>
            <p>
                The collection can include dragon chibis, dossiers, future creature content, themed items,
                and visual elements inspired by a fantasy dragon world. It is built to grow over time with
                more additions, updates, and polish.
            </p>

            <div class="feature-list">
                <div class="feature-card">
                    <h3>Dragon Chibis</h3>
                    <p>Small dragon companion content including stylized collectible creatures.</p>
                </div>

                <div class="feature-card">
                    <h3>Dossiers</h3>
                    <p>Custom dossier-style content for a more immersive presentation of dragons.</p>
                </div>

                <div class="feature-card">
                    <h3>Future Expansion</h3>
                    <p>Prepared for more dragons, themed assets, decorations, and gameplay elements.</p>
                </div>

                <div class="feature-card">
                    <h3>Collection Format</h3>
                    <p>One main mod instead of many split uploads, making content easier to manage.</p>
                </div>
            </div>
        </div>

        <div class="panel mod-icon-box">
            <div class="mod-icon-title">Mod Icon</div>
            <div class="mod-icon-sub"></div>
        </div>
    </div>

    <div class="cheat-section panel">
        <h2>Cheats / Spawn Commands</h2>
        <p>
            Cheats and commands coming soon
        </p>

        <div class="cheat-grid">
            <?php foreach ($cheats as $cheat): ?>
                <div class="cheat-card">
                    <div class="cheat-name"><?php echo htmlspecialchars($cheat["name"]); ?></div>
                    <div class="cheat-command"><?php echo htmlspecialchars($cheat["command"]); ?></div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="info-note">
            <strong>Note:</strong> For full accuracy, update every command to match your real mod item names,
            creature paths, or spawn entries once your content is finalized.
        </div>
    </div>

    <div class="panel dossier-section">
        <h2>Dragon Dossiers</h2>
        <p>
            All dossier images are loaded automatically from the <strong>Dossier</strong> folder.
        </p>

        <?php if (!empty($dossierFiles)): ?>
            <div class="dossier-grid">
                <?php foreach ($dossierFiles as $dossier): ?>
                    <div class="dossier-card">
                        <a href="<?php echo htmlspecialchars($dossier["file"]); ?>" target="_blank">
                            <img
                                class="dossier-image"
                                src="<?php echo htmlspecialchars($dossier["file"]); ?>"
                                alt="<?php echo htmlspecialchars($dossier["name"]); ?>"
                            >
                            <div class="dossier-name"><?php echo htmlspecialchars($dossier["name"]); ?></div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <div class="empty-dossier">
                No dossier images were found in the <strong>Dossier</strong> folder.
            </div>
        <?php endif; ?>
    </div>

</div>

<div class="footer">
    Made by Killua
</div>

</body>
</html>