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

<h3>##CONFIGURE WITH YOUR DOCKER DATA</h3>
    <p>APP_NAME=FUTURE_SPACE</p>
<p>APP_ENV=dev</p>
<p>APP_KEY=</p>
<p>APP_DEBUG=true</p>
<p>APP_URL=http://localhost:8000</p>
<p>LOG_CHANNEL=stack</p>
<p>DB_CONNECTION=mysql</p>
<p>DB_HOST=db</p>
<p>DB_PORT=3306</p>
<p>DB_DATABASE=docker</p>
<p>DB_USERNAME=docker</p>
<p>DB_PASSWORD=password</p>


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
