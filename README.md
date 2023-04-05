<br />
<p align="center">

[![Contributors][contributors-shield]][contributors-url]
[![Forks][forks-shield]][forks-url]
[![Stargazers][stars-shield]][stars-url]
[![Issues][issues-shield]][issues-url]
[![MIT License][license-shield]][license-url]
</p>

<!-- PROJECT LOGO -->
<br />
<div align="center">
  <!-- <a href="https://unej.ac.id">
    <img src="http://protan.faperta.unej.ac.id/wp-content/uploads/sites/14/2020/05/logo-unej-300x296.png" alt="Logo" width="300">
  </a> -->

  <h3 align="center">REDComm Fullstack Developer Intern Test</h3>

  <p align="center">
    Technical Test for applying as a Fullstack Developer Intern at REDComm Indonesia
    <br />
    <br />
    <!-- <a href="https://deboks-kas.000webhostapp.com/">View Demo</a>
    · -->
    <a href="https://github.com/NafisHandoko/redcomm-intern-be/issues">Report Bug or Request Feature</a>
  </p>
</div>



<!-- TABLE OF CONTENTS -->
<details>
  <summary>Table of Contents</summary>
  <ol>
    <li><a href="#author">Author</a></li>
    <li>
      <a href="#about-the-project">About The Project</a>
      <ul>
        <li><a href="#built-with">Built With</a></li>
      </ul>
    </li>
    <li><a href="#installation">Installation</a></li>
    <li><a href="#contributing">Contributing</a></li>
    <li><a href="#license">License</a></li>
    <!--<li><a href="#acknowledgments">Acknowledgments</a></li>-->
  </ol>
</details>

<!-- Author -->
## Author

* Nafis Arinda Rizky Putra Handoko
* 6th semester Information Technology in University of Jember

<p align="right">(<a href="#top">back to top</a>)</p>


<!-- ABOUT THE PROJECT -->
## About The Project

This is a backend part of the test. Make sure you run the frontend as well. Setup the frontend <a href="https://github.com/NafisHandoko/redcomm-intern-fe">here</a>

<!-- [![Product Name Screen Shot][product-screenshot]](https://github.com/NafisHandoko/redcomm-intern-be) -->

<p align="right">(<a href="#top">back to top</a>)</p>



### Built With

Here's a list of the technologies i used to build this project

* [Laravel](https://laravel.com/)
* [Nuxt 3](https://nuxt.com/)
* [Tailwindcss](https://tailwindcss.com/)

<p align="right">(<a href="#top">back to top</a>)</p>




<!-- USAGE EXAMPLES -->
## Installation

### Requirements
* [git](https://git-scm.com/)
* [XAMPP](https://www.apachefriends.org/download.html)
* [Composer](https://getcomposer.org/)

### Langkah Instalasi
* Buka terminal/cmd
* Ketik perintah dibawah ini secara berturut-turut di cmd : 
```
git clone https://github.com/NafisHandoko/redcomm-intern-be.git
cd redcomm-intern-be
composer install
copy .env.example .env
```
* Buka file .env dan isikan `redcomm` pada `DB_DATABASE`
* Isi `DB_USERNAME` dan `DB_PASSWORD` sesuai konfigurasi XAMPP local, secara default `DB_USERNAME=root` dan `DB_PASSWORD` kosong
* Nyalakan Apache dan MySQL di XAMPP
* Buka browser dan ketikkan `http://localhost/phpmyadmin/` di address bar
* Buat database dengan nama `redcomm`
<!-- * Buka tab import lalu import file [deboks_kas.sql](https://github.com/benny-rs/deboks-kas/blob/main/deboks_kas.sql) -->
* Kembali ke cmd/terminal lalu ketikkan perintah dibawah ini secara berturut-turut:
```
php artisan migrate
php artisan db:seed
php artisan key:generate
php artisan serve
```

* CTRL + Click url yang tertera di terminal

<p align="right">(<a href="#top">back to top</a>)</p>



<!-- CONTRIBUTING -->
## Contributing

Contributions are what make the open source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

If you have a suggestion that would make this better, please fork the repo and create a pull request. You can also simply open an issue with the tag "enhancement".
Don't forget to give the project a star! Thanks again!

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

<p align="right">(<a href="#top">back to top</a>)</p>



<!-- LICENSE -->
## License

Distributed under the MIT License. See <a href="https://github.com/NafisHandoko/redcomm-intern-be/blob/master/LICENSE">`LICENSE`</a> for more information.

<p align="right">(<a href="#top">back to top</a>)</p>




<!-- ACKNOWLEDGMENTS -->
<!--
## Acknowledgments

Use this space to list resources you find helpful and would like to give credit to. I've included a few of my favorites to kick things off!

* [Choose an Open Source License](https://choosealicense.com)
* [GitHub Emoji Cheat Sheet](https://www.webpagefx.com/tools/emoji-cheat-sheet)
* [Malven's Flexbox Cheatsheet](https://flexbox.malven.co/)
* [Malven's Grid Cheatsheet](https://grid.malven.co/)
* [Img Shields](https://shields.io)
* [GitHub Pages](https://pages.github.com)
* [Font Awesome](https://fontawesome.com)
* [React Icons](https://react-icons.github.io/react-icons/search)

<p align="right">(<a href="#top">back to top</a>)</p>
-->


<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->
[contributors-shield]: https://img.shields.io/github/contributors/NafisHandoko/redcomm-intern-be.svg?style=for-the-badge
[contributors-url]: https://github.com/NafisHandoko/redcomm-intern-be/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/NafisHandoko/redcomm-intern-be.svg?style=for-the-badge
[forks-url]: https://github.com/NafisHandoko/redcomm-intern-be/network/members
[stars-shield]: https://img.shields.io/github/stars/NafisHandoko/redcomm-intern-be.svg?style=for-the-badge
[stars-url]: https://github.com/NafisHandoko/redcomm-intern-be/stargazers
[issues-shield]: https://img.shields.io/github/issues/NafisHandoko/redcomm-intern-be.svg?style=for-the-badge
[issues-url]: https://github.com/NafisHandoko/redcomm-intern-be/issues
[license-shield]: https://img.shields.io/github/license/NafisHandoko/redcomm-intern-be.svg?style=for-the-badge
[license-url]: https://github.com/NafisHandoko/redcomm-intern-be/blob/master/LICENSE
[product-screenshot]: screenshot.png