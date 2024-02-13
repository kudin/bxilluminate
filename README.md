Eloquent - лучший друг разработчика на Bitrix ;)

<p>Установка:</p>
<pre>cd local/modules/ 
git clone https://github.com/kudin/bxilluminate.git</pre>
 
<p>если сервер на bitrixvm - включаем phar и pdo_mysql:</p>
<pre>
cp /etc/php.d/30-pdo_mysql.ini.disabled /etc/php.d/30-pdo_mysql.ini
cp /etc/php.d/20-phar.ini.disabled /etc/php.d/20-phar.ini
systemctl restart httpd</pre>


устанавливаем модуль в админке битрикса. при установке модуль сам зарегистрируется в системе 
подключать его в коде не нужно


<p>Пример использования :</p>

<pre>use Illuminate\Database\Eloquent\Model;
 
class Flights extends Model {
 
    protected $table = 'my_flights';
 
}</pre>

и дальше по инструкции https://laravel.su/docs/8.x/eloquent</pre>
