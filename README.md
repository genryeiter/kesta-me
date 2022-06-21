# Kesta.me projekt

<img src="images/2022-06-20%2014.58.11.jpg"> 

<div id="top"></div>

[![MIT License][license-shield]][license-url]

Project done in <a href="https://www.tlu.ee/">Tallinn University</a> on `Tarkvara arendus projekt` subject
<br/>
<br/>
Review of the project <a href="https://docs.google.com/document/d/1T2djXbGz7ztciZpT6TcvsXttotfo4cGM_bz71SYOqMc/edit?usp=sharing">documentation</a>


<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="##about-the-project">About The Project</a>
      <ul>
        <li><a href="#Põhiprotsessid">Põhiprotsessid</a></li>
        <li><a href="#Põhiprotsessid">Toimimisobjektid</a></li>
      </ul>
    </li>
    <li> 
      <a href="##built-with">Built with</a>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#installation">Installation</a></li>
        <li><a href="#installation">Database</a></li>
        <li><a href="#installation">Assets</a></li>
        <li><a href="#installation">Running mix</a></li>
        <li><a href="#installation">Test emails</a></li>
      </ul>
    </li>
    <li><a href="#license">License</a></li>
    <li><a href="#contact">Contacts</a></li>
  </ol>
</details>

## About The Project

Kesta.me on hariduslik koostööprogramm ja peatselt ka veebiplatvorm, mis aitab noortel kasvada vastutustundlikuks
maailmakodanikuks juba koolieast alates. Ettevõtted, riigiasutused ja vabaühendused jõuavad läbi programmi ägedate
ideedeni ja tulevaste töötajateni, suurendavad oma nähtavust ja ühiskondlikku panust.

Meie ülesanne on luua Kesta.me veebikeskkonnale liides riigiasutustele ja vabaühendustele, et jõuda säravate ideede ja
tulevaste töötajateni, suurendades nende nähtavust ja sotsiaalset panust.


### Põhiprotsessid

- Kasutajakontode loomine
- Kasutajate autoriseerimine
- Uudislehte, ASV ja kasutajaprofiile vaatamine
- ASV loomine
- Kogu süsteemi administreerimine (ASV aktiveerimine, andmete muutmine ja vastuvõtmine)

`ASV - Algatus-Sündmus-Väljakutse`

### Toimimisobjektid

- Kasutajakonto (Kasutaja profiil, Kasutaja paneel)
- Administraatori konto (Administraatori profiil, Administraatori paneel)
- Väljakutse
- Sündmus
- Algatus
- Uudiste leht

<p align="right">(<a href="#top">back to top</a>)</p>

## Built With

The section below shows a list of used technologies, libraries and IDE

* [React.js](https://reactjs.org/)
* [Laravel](https://laravel.com/)
* [React Router](https://reactrouter.com/)
* [Figma](https://www.figma.com/)
* [JavaScript](https://www.javascript.com/)
* [PHP](https://www.php.net/)
* [Composer](https://getcomposer.org/)
* [ESLint](https://eslint.org/)
* [Axios](https://axios-http.com/docs/intro)

<p align="right">(<a href="#top">back to top</a>)</p>

## Getting Started

This is an example of how you may set up project locally. <br>
To get a local copy up and running follow these simple Installation steps.

### Installation

```
git clone https://github.com/genryeiter/kesta-me.git
cp .env.example .env
./vendor/bin/sail up -d
./vendor/bin/sail composer install
./vendor/bin/sail artisan migrate
./vendor/bin/sail artisan db:seed
./vendor/bin/sail artisan key:generate
./vendor/bin/sail artisan storage:link
```

Once the application's Docker containers have been started, you can access the application in your web browser
at: http://localhost.

### Database

Regenerate database (run only in development)

```
./vendor/bin/sail artisan migrate:fresh --seed
```

### Assets

`./vendor/bin/sail npm install`

### Running mix

`./vendor/bin/sail npm run dev`

`./vendor/bin/sail npm run watch` - while developing (watcher)

`./vendor/bin/sail npm run production` - for production

### Test emails

http://localhost:8025/

<p align="right">(<a href="#top">back to top</a>)</p>

## License

Distributed under the MIT License. See `LICENSE.txt` for more information.

<p align="right">(<a href="#top">back to top</a>)</p>

## Customer's assessment

Meie suur vajadusi oli abi järele kesta.me veebiplatvormi nn kaasamise osa prototüübi arendamisega. Meil olid olemas eelnevalt tehniline kirjeldus ja mõned esialgsed prototüübid Figmas. Benissimo tiim lõi juurde täiendavad arhitektuuri infoskeemid (väga põhjalikud, Miros), täiendavad persoonad, ja programmeeris prototüübi klikitava osa (ilma serverile saadetavate päringute ja vastusteta, kuna  ei jõudnud ühendada kliendiosa ja serveriosa).  Tiimiga Benissimo oli väga hea koostööd teha. Nad olid professionaalsed ja töökad. Tiimijuht German suhtles minuga piisavalt tihti ning andis ülevaate projekti seisust. Samuti oli ta asjalik projektijuht, kes hoolitses töövoogude, ülesannete täitmise ja tiimi koostöö eest, samuti toetades liikmeid, kes olid vähemate varasemate teadmiste-oskustega. Tiim on töötanud kesta.me platvormi prototüübi edasiarendusega ning teinud selles osas väga põhjalikku tööd. Kesta.me algatajatena oleme väga tänulikud selle koostöö eest ning loodame, et tudengitele oli see võimalus sama kasulik ja edasiviiv, kui meile.

<p align="right">(<a href="#top">back to top</a>)</p>

## Contacts

- German Eiter - genryeiter@gmail.com
- Nikita Kajalinn
- Andres Sikka
- Dmitrii Shibin

Project Link: [Kesta.me on Github](https://github.com/genryeiter/kesta-me)

<p align="right">(<a href="#top">back to top</a>)</p>


[license-shield]: https://img.shields.io/github/license/othneildrew/Best-README-Template.svg?style=for-the-badge

[license-url]: https://github.com/genryeiter/kesta-me/blob/main/License.txt

[linkedin-shield]: https://img.shields.io/badge/-LinkedIn-black.svg?style=for-the-badge&logo=linkedin&colorB=555
