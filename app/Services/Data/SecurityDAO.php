<?php


namespace App\Services\Data;


use App\Models\UserModel;
use Illuminate\Support\Facades\DB;

class SecurityDAO
{

    public function findAllUsers(){

        $results = DB::select('select id, name, email, password from users');

        if($results){
            $userList = array();
            $counter = 0;

            foreach($results as $user){
                $id = $user->id;
                $name = $user->name;
                $email = $user->email;
                $password = $user->password;


                $userList[$counter] = new UserModel($id, $name, $email, $password);

                $counter++;


            }
            return $userList;

        }
        else{
            return "We had an issue showing all users";
        }

    }

    public function findUserByID(int $id){

        $result = DB::select('select id, name, email, password from users
            where id = :id', ['id' => $id]);

        if($result){

            foreach($result as $user){
                $name = $user->name;
                $email = $user->email;
                $password = $user->password;


                $user = new UserModel($id, $name, $email, $password);

            }

            return $user;
        }
        else{
            return "No User Found";
        }

    }

}
