
# LifeBalance
LifeBalance is a wellness  website that combines personalized workout plans, diet guidance, soothing meditation soundtracks, and gamified quests to motivate users in their pursuit of a balanced and healthy lifestyle. With tailored exercise routines for all fitness levels, the website helps users reach their fitness goals, while providing customized meal suggestions and nutritional information for a nourishing diet. Additionally, the app offers a collection of calming meditation soundtracks to promote relaxation and mindfulness. The inclusion of quests and challenges gamifies the wellness journey, offering rewards, achievements, and levels of progression, creating a sense of accomplishment and motivation. LifeBalance is designed to be a trusted companion, supporting users in their holistic well-being and personal growth.

### Goals
 -  Help users maintain a balanced and healthy lifestyle 
 -  Offer customized diet plans to promote healthy eating habits and support nutritional needs.
 -  Provide soothing meditation soundtracks to facilitate relaxation, reduce stress, and enhance mindfulness.
 -  Incorporate gamified quests and challenges to motivate users and foster a sense of accomplishment.
 -  User-friendly interface that facilitates easy navigation and seamless user experience.


# Documentations
...

# Website Demonstration 📺
...

# Features & Tech ⚙️
- Laravel
- Tailwind CSS
- MySQL
- JavaScript
- VsCode
  
# Clone & Run Laravel Project 📦
(Make sure your device have <a href="https://nodejs.org/en/download">npm</a> and <a href="https://getcomposer.org/download/">composer</a> installed)

### Clone Project
In a terminal:
- Clone the repository 
```sh
    git clone https://github.com/Chrystalia/LifeBalance.git
```

- Redirect to cloned folder  
```sh
    cd .\LifeBalance\
```

- Install composer 
```sh
    composer install
```

- Install tailwindcss and its peer dependencies via npm 
```sh
    npm install -D tailwindcss postcss autoprefixer
```

- Run build process  
```sh
    npm run dev
```

Open a new terminal (make sure you're in the right directory):
- Make copy of env.example into .env 
```sh
    copy .env.example .env
```

- Generate the APP_KEY value in your .env file 
```sh
    php artisan key:generate
```

### To use the sociallite feature:
In the terminal, type
- Use the Composer package manager to add the package to your project's dependencies
```sh
    composer require laravel/socialite
```

- check the credentials for the OAuth providers, placed in your application's [`config/services.php`]. If the configuration is not present, please enter the necessary details.
```sh
    'github' => [
    'client_id' => env('GITHUB_CLIENT_ID'),
    'client_secret' => env('GITHUB_CLIENT_SECRET'),
    'redirect' => 'http://example.com/callback-url',
],
```

- Placed on your [`.env`] file
```sh
    GITHUB_CLIENT_ID=Iv1.87af03adaf87ba61
    GITHUB_CLIENT_SECRET=a3c735c0e4d6e4e442916ad9e2e1b0f4467838e3
```

### Running the app
- Run application on a PHP development server
```sh
    php artisan serve
```

- To access the website, type on your browser:
```sh
    http://localhost:8000
```
# Reference 🔗
- https://developer.mozilla.org/en-US/docs/Web/JavaScript
- https://dev.mysql.com/doc/
- https://laravel.com/docs/10.x/readme
- https://nodejs.org/en/download
- https://phoenixnap.com/kb/install-node-js-npm-on-windows
- https://tailwindcss.com/docs/guides/laravel


<p align='center'>
  <b>Follow us here 🌿</b><br>  
  <a href="https://github.com/Chrystalia">Chrystalia</a> |
  <a href="https://github.com/danielzergew">danielzergew</a> |
  <a href="https://github.com/nadyaclrp">nadyaclrp</a><br><br>
  Don't forget to leave a star if you find this repository helpful ⭐
</p>
 
