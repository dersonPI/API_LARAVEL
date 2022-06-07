<p align="center"><a>FUTURE_SPACE PROJECT</a></p>
<p align="center">API in Laravel that makes it possible to easily retrieve rocket launches </P>

<h3>Linux INSTALLATION</h3>
<p>$cd ~ "select your preferred location"</p>
<p>sudo apt update</p>
<p>sudo apt install unzip</p>
<p>$curl -L "https://github.com/dersonPI/API_LARAVEL/archive/refs/heads/main.zip" <1/p>
<p>unzip API_LARAVEL-main.zip</p>
<p>cd API_LARAVEL-main</p>
<h3>Configure the .env file</h3>
<p>$cp .env.example .env</p>
<p>nano .env</p>
<textarea>
//CONFIGURE WITH YOUR DOCKER DATA
APP_NAME=FUTURE_SPACE
APP_ENV=dev
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost:8000
LOG_CHANNEL=stack
DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=docker
DB_USERNAME=docker
DB_PASSWORD=password
</textarea>

<h3>START DOCKER</h3>
<p>Use laradock path to start container</p>
<p>$ docker-compose ps </p>

<p>$ php artisan migrate </p>


<p align="center">
## License
The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
</P>
<p align="center">
# API_LARAVEL
#Projeto Reference
https://lab.coodesh.com/dersonejoh/challenge-20210221
</P>