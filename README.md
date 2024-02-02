Eloquent - лучший друг разработчика на Bitrix ;)

<p>Установка:</p>
<pre>cd local/modules/ 
git clone https://github.com/kudin/bxilluminate.git bxilluminate</pre>
 


<p>если сервер на bitrixvm:</p>
<pre>
cp /etc/php.d/30-pdo_mysql.ini.disabled /etc/php.d/30-pdo_mysql.ini
cp /etc/php.d/20-phar.ini.disabled /etc/php.d/20-phar.ini
systemctl restart httpd</pre>



<p>Использование :</p>

<pre>use Illuminate\Database\Eloquent\Model;
 
class Flights extends Model {
 
    protected $table = 'my_flights';
 
}</pre>

и дальше по инструкции https://laravel.su/docs/8.x/eloquent</pre>
