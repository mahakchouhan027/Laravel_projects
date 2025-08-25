<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>CV - Gustavo Souza Vieira Dutra</title>
    <link rel="shortcut icon" href="/icon/house-solid-full.png">
    <style>
        body {
            font-family: "DejaVu Sans", sans-serif;
            font-size: 12px;
            margin: 40px;
            color: #000;
        }

        /* HEADER */
        .header {
            margin-bottom: 15px;
            text-align: left;
        }
        .header-title {
            font-size: 16px;
            font-weight: bold;
            text-transform: uppercase;
            margin-bottom: 6px;
        }
        .header-name {
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 6px;
        }
        .contact-info {
            font-size: 12px;
            border-collapse: collapse;
        }
        .contact-info td {
            padding: 2px 6px 2px 0;
            vertical-align: middle;
        }
        .contact-info td.icon {
            width: 15px;
        }

        /* SECTION TITLES */
        h2.section-title {
            font-size: 13px;
            border-bottom: 1px solid #000;
            margin: 12px 0 6px;
            text-transform: uppercase;
        }

        /* INFO TABLES */
        .info-table {
            width: 100%;
            font-size: 12px;
            margin-top: 5px;
            border-collapse: collapse;
        }
        .info-table td {
            padding: 2px 4px;
            vertical-align: top;
        }
        .info-table td:first-child {
            width: 120px;
            font-weight: bold;
        }

        .sub-title {
            font-weight: bold;
        }

        .section p {
            margin: 4px 0;
            line-height: 1.4;
        }
    </style>
</head>
<body>

    <!-- Header -->
    <div class="header">
        <div class="header-title">STAGE INGÉNIEUR: ÉTUDIANT À L’ENSMM DE BESANÇON</div>
        <div class="header-name">Gustavo SOUZA VIEIRA DUTRA</div>

        <table class="contact-info">
          <tr>
            <td class="icon">
                <img src="{{ public_path('icons/phone-solid-full.png') }}" width="12">
            </td>
            <td>+33 7 66 64 29 29</td>

            <td class="icon">
                <img src="{{ public_path('icons/envelope-regular-full.png') }}" width="12">
            </td>
            <td>gsvdutra@gmail.com</td>
        </tr>

        <tr>
            <td class="icon">
                <img src="{{ public_path('icons/house-solid-full.png') }}" width="12">
            </td>
            <td colspan="3">19 - Rue de l’Épitaphe, 25000, Besançon</td>
        </tr>

        <tr>
            <td class="icon">
                <img src="{{ public_path('icons/calandar-regular-full.png') }}" width="12">
            </td>
            <td>22 ans (21 août 1997)</td>

            <td class="icon">
                <img src="{{ public_path('icons/earth-americas-regular-full.png') }}" width="12">
            </td>
            <td>Nationalité Brésilienne</td>
        </tr>

        </table>
    </div>

    <!-- Formation -->
    <div class="section">
        <h2 class="section-title">FORMATION</h2>
        <table class="info-table">
            <tr>
                <td>Depuis 2019</td>
                <td>École Nationale Supérieure de Mécanique et des Micro-techniques - France<br>
                    Master en Systèmes Mécatronique et Robotique</td>
            </tr>
            <tr>
                <td>Depuis 2015</td>
                <td>Université Fédérale d’Uberlândia - Brésil<br>
                    Ingénierie Mécatronique</td>
            </tr>
        </table>
    </div>

    <!-- Expérience -->
    <div class="section">
        <h2 class="section-title">EXPÉRIENCE PROFESSIONNELLE</h2>
        <table class="info-table">
            <tr>
                <td>Déc. 2018 – août 2019</td>
                <td><span class="sub-title">Développeur Full Stack</span> - Kyros Technologie - Uberlândia, Brésil<br>
                    Développement web, création de systèmes en utilisant de RPA, Machine Learning et Big Data</td>
            </tr>
            <tr>
                <td>Mai 2018 – déc. 2018</td>
                <td><span class="sub-title">Conseiller et professeur</span> - PROSIGGA, “MotivAção” et “Pro-Excelência” - Uberlândia, Brésil<br>
                    Projets réalisés dans les domaines de la robotique et de l’informatique en faveur de l’inclusion sociale</td>
            </tr>
            <tr>
                <td>Aout 2017 – juil. 2018</td>
                <td><span class="sub-title">Chercheur</span> - NuPE - Uberlândia, Brésil<br>
                    Étude sur l’optimisation de la consommation énergétique dans les moteurs industriels</td>
            </tr>
            <tr>
                <td>Aout 2015 – juil. 2016</td>
                <td><span class="sub-title">Conseiller et professeur</span> - PROSIGGA, PROCOR - Uberlândia, Brésil<br>
                    Encadrement des étudiants en difficulté scolaire dans les domaines des mathématiques, physique, robotique et informatique</td>
            </tr>
            <tr>
                <td>2015 – 2019</td>
                <td><span class="sub-title">Chercheur</span> - UFU - Uberlândia, Brésil<br>
                    Participation à des projets de recherche en Automatisation Industrielle et Systèmes Intelligents</td>
            </tr>
        </table>
    </div>

    <!-- Articles -->
    <div class="section">
        <h2 class="section-title">ARTICLES ET CONCOURS</h2>
        <p><b>Articles:</b> Publication d’articles académiques dans les domaines de l’ingénierie, des matériaux et des systèmes.</p>
        <p><b>Compétitions:</b> Compétitions dans le domaine de la robotique et en culture générale.</p>
    </div>

    <!-- Compétences -->
    <div class="section">
        <h2 class="section-title">COMPÉTENCES INFORMATIQUES</h2>
        <p>Python, MATLAB, C, C++, Java (Maven et Spring Tools), SQL, MongoDB et Angular</p>
        <p>Logiciels: Solidworks, AutoCAD, Siemens (STEP 7), CNC (Ladder et G-code), programmation en STM, etc.</p>
    </div>

    <!-- Langues -->
    <div class="section">
        <h2 class="section-title">LANGUES</h2>
        <table class="info-table">
            <tr>
                <td>Portugais</td>
                <td>Langue maternelle</td>
            </tr>
            <tr>
                <td>Anglais</td>
                <td>Bonne maîtrise (TOEFL iBT)</td>
            </tr>
            <tr>
                <td>Français</td>
                <td>Bonne maîtrise (DELF B2)</td>
            </tr>
            <tr>
                <td>Espagnol</td>
                <td>Apprentissage (niveau A2)</td>
            </tr>
        </table>
    </div>

    <!-- Centres d’intérêt -->
    <div class="section">
        <h2 class="section-title">CENTRES D’INTÉRÊT</h2>
        <p>Sports (Natation, Football, Escalade, Course), Cinéma, Musique, Voyages et échanges culturels</p>
    </div>

</body>
</html> actually this is good but this are not fatching icons in pdf how can i use some library favicon icon

