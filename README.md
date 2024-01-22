Illuminate - лучший друг разработчика на Bitrix ;)

<p>Install:</p>
<pre>cd local/modules/ 
git clone https://github.com/kudin/bxilluminate.git bxilluminate</pre>
 
<p>Usage:</p>
    use Illuminate\Database\Eloquent\Model;

    class User extends Model {
    
        protected $table = 'b_user';
    
        public const CREATED_AT = 'DATE_REGISTER';  
        public const UPDATED_AT = 'TIMESTAMP_X';  
    }
    
    
    $users = User::all();
    
