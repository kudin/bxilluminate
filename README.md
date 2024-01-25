Illuminate - лучший друг разработчика на Bitrix ;)

<p>Install:</p>
<pre>cd local/modules/ 
git clone https://github.com/kudin/bxilluminate.git bxilluminate</pre>
 


<p>config server:</p>
<pre>
cp /etc/php.d/30-pdo_mysql.ini.disabled /etc/php.d/30-pdo_mysql.ini
cp /etc/php.d/20-phar.ini.disabled /etc/php.d/20-phar.ini
systemctl restart httpd</pre>



<p>Usage:</p>
<pre>
use Illuminate\Database\Eloquent\Model;

class User extends Model {

    protected $table = 'b_user';

    public const CREATED_AT = 'DATE_REGISTER';  
    public const UPDATED_AT = 'TIMESTAMP_X';  
}

$users = User::all();</pre>

