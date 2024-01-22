Illuminate - лучший друг разработчика на Bitrix ;)

\Bitrix\Main\Loader::includeModule('bxilluminate');

class User extends Illuminate\Database\Eloquent\Model {

    protected $table = 'b_user';

    public const CREATED_AT = 'DATE_REGISTER';  
    public const UPDATED_AT = 'TIMESTAMP_X';  
}

$users = User::all();

foreach ($users as $user) {
    dump($user->toArray());
}