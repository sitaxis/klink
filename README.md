[![Contributors][contributors-shield]][contributors-url]
[![Forks][forks-shield]][forks-url]
[![Stargazers][stars-shield]][stars-url]
[![Issues][issues-shield]][issues-url]
[![MIT License][license-shield]][license-url]
[![LinkedIn][linkedin-shield]][linkedin-url]


<!-- PROJECT LOGO -->
<br />
<p align="center">
  <a href="https://github.com/sitaxis/klink">
    <img src="https://i.imgur.com/pqZo0gO.png" alt="Logo" width="80" height="80">
  </a>

  <h3 align="center">klink — url shortener</h3>

  <p align="center">
    A minimal and mordern url shortener with a beautiful design and spellable links.
    <br />
    <a href="https://github.com/sitaxis/klink"><strong>Explore the docs »</strong></a>
    <br />
    <br />
    <a href="https://sitax.is">View Demo</a>
    ·
    <a href="https://github.com/sitaxis/klink/issues">Report Bug</a>
    ·
    <a href="https://github.com/sitaxis/klink/issues">Request Feature</a>
  </p>
</p>



<!-- TABLE OF CONTENTS -->
<details open="open">
  <summary><h2 style="display: inline-block">Table of Contents</h2></summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
      <ul>
        <li><a href="#built-with">Built With</a></li>
      </ul>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#prerequisites">Prerequisites</a></li>
        <li><a href="#installation">Installation</a></li>
      </ul>
    </li>
    <li><a href="#usage">Usage</a></li>
    <li><a href="#roadmap">Roadmap</a></li>
    <li><a href="#contributing">Contributing</a></li>
    <li><a href="#license">License</a></li>
    <li><a href="#contact">Contact</a></li>
    <li><a href="#acknowledgements">Acknowledgements</a></li>
  </ol>
</details>



<!-- ABOUT THE PROJECT -->
## About The Project

[![Product Name Screen Shot][product-screenshot]](https://example.com)

TODO



### Built With

* [Laravel](https://laravel.com)
* [InertiaJS](https://inertiajs.com)
* [VueJS](https://vuejs.com)
* [TailwindCSS](https://tailwindcss.com)



<!-- GETTING STARTED -->
## Getting Started

To get a local copy up and running follow these simple steps.

### Prerequisites

- PHP >= 7.3
- Composer
- BCMath PHP Extension
- Ctype PHP Extension
- Fileinfo PHP Extension
- JSON PHP Extension
- Mbstring PHP Extension
- OpenSSL PHP Extension
- PDO PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension

### Installation

1. Clone the repo
   ```sh
   git clone https://github.com/sitaxis/klink.git
   ```
2. Install Composer dependencies
   ```sh
   composer install
   ```
3. Copy the default configuration file
   ```sh
   cp .env.example .env
   ```
4. Generate an encryption key
   ```sh
   php artisan key:generate
   ```
5. Configure a sql database in the .env file

6. Run the database migrations
   ```sh
   php artisan migrate
   ```

Make sure your webserver of choice is serving the public/ folder.



<!-- ROADMAP -->
## Roadmap

See the [open issues](https://github.com/sitaxis/klink/issues) for a list of proposed features (and known issues).



<!-- CONTRIBUTING -->
## Contributing

Contributions are what make the open source community such an amazing place to be learn, inspire, and create. Any contributions you make are **greatly appreciated**.

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request



<!-- LICENSE -->
## License

Distributed under the MIT License. See `LICENSE` for more information.



<!-- CONTACT -->
## Contact

Lucas Decrock - [lucas.decrock.me](https://lucas.decrock.me) - [@lucas_dcrk](https://twitter.com/lucas_dcrk) - lucas@decrock.me

Project Link: [https://github.com/sitaxis/klink](https://github.com/sitaxis/klink)



<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->
[contributors-shield]: https://img.shields.io/github/contributors/sitaxis/repo.svg?style=for-the-badge
[contributors-url]: https://github.com/sitaxis/repo/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/sitaxis/repo.svg?style=for-the-badge
[forks-url]: https://github.com/sitaxis/repo/network/members
[stars-shield]: https://img.shields.io/github/stars/sitaxis/repo.svg?style=for-the-badge
[stars-url]: https://github.com/sitaxis/repo/stargazers
[issues-shield]: https://img.shields.io/github/issues/sitaxis/repo.svg?style=for-the-badge
[issues-url]: https://github.com/sitaxis/repo/issues
[license-shield]: https://img.shields.io/github/license/sitaxis/repo.svg?style=for-the-badge
[license-url]: https://github.com/sitaxis/repo/blob/master/LICENSE.txt
[linkedin-shield]: https://img.shields.io/badge/-LinkedIn-black.svg?style=for-the-badge&logo=linkedin&colorB=555
[linkedin-url]: https://linkedin.com/in/lucasdecrock/
