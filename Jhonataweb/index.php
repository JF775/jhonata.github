<?php
    $name = "Jhonata Fernanda";
    $nim = "102022300052";
    $faculty = "Fakultas Rekayasa Industri";
    $program = "S1 Sistem Informasi";
    $profile_pic = "foto-profil.jpg";
    $socials = [
        "Twitter" => ["https://x.com/Prodigy775", "X.png"],
        "Github" => ["https://github.com/JF775", "Github.png"],
        "Instagram" => ["https://www.instagram.com/775jf/", "Instagram.png"],
        "LinkedIn" => ["https://www.linkedin.com/in/jhonata-fernanda-5b4282335/", "linkedin.jpg"]
    ];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Web</title>
    <link rel="stylesheet" href="Styles.css">
    <link rel="icon" type="image/png" href="favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <h1>Welcome To</h1>
        <h2>Personal Web</h2>
    </header>
    <main>
        <section class="profile">
            <img src="<?php echo $profile_pic; ?>" alt="Foto Profile" class="profile-pic">
            <h2><?php echo $name; ?></h2>
            <p class="sub-info"><?php echo "$nim | $faculty | $program"; ?></p>
        </section>
        <section class="social-media">
            <h3>Linked Social Media</h3>
            <div class="social-icons">
                <?php foreach ($socials as $platform => $data): ?>
                    <a href="<?php echo $data[0]; ?>" target="_blank">
                        <img src="<?php echo $data[1]; ?>" alt="<?php echo $platform; ?>">
                    </a>
                <?php endforeach; ?>
            </div>
        </section>
        <section class="info">
            <h3>About Me</h3>
            <p>Website ini menampilkan informasi terkait personal informasi dan beberapa informasi sosial media milik pribadi</p>
        </section>
    </main>
    <footer>
        <p>&copy; 2025 <?php echo $name; ?>. 🌍 All Rights Reserved.</p>
    </footer>
</body>
</html>