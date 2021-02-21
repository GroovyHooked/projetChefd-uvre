<?php namespace App\Models;

use CodeIgniter\Model;

class Cards extends Model
{
    protected $table = 'cards';

    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    /*protected $validationRules = [
        'user_lastname' => 'required|min_length[3]|max_length[50]',
        'client_lastname' =>'required|min_length[3]|max_length[50]',
        'user_firstname' => 'required|min_length[3]|max_length[50]',
        'client_firstname' => 'required|min_length[3]|max_length[50]',
        'user_email' => 'required|valid_email',
        'client_email' => 'required|valid_email',
        'user_address' => 'required',
        'client_address' => 'required',
        'user_phone' => 'required|alpha_numeric_punct|min_length[8]|max_length[255]',
        'client_phone' => 'required|alpha_numeric_punct|min_length[8]|max_length[255]',
        'value' => 'required|numeric',
    ];*/
    protected $allowedFields = [
        'user_email',
        'value',
        'client_email',
        'gifted_email',
        'card_uniqid',
        'card_url',
        'clientLastname',
        'clientFirstname',
        'clientAddress',
        'clientPhone',
        'giftedLastname',
        'giftedFirstname',
        'giftedAddress',
        'giftedPhone',
        'status'
    ];

    public function showUserCards($var){
        $query = $this->where('user_email', $var)
                    ->get()
                    ->getResult();
        $result = json_encode($query);
        $object = json_decode($result);
        return  $object;
    }

    public function getUsedCards($var){
        return $this->where('status', 'U')
                    ->where('user_email', $var)
                    ->get()
                    ->getResult();
    }

    public function getPendingCards($var){
        return $this->where('status', 'N')
                    ->where('user_email', $var)
                    ->get()
                    ->getResult();
    }

    public function getCardCodeQr($var){
        return $this->where('card_uniqid', $var)
                    ->get()
                    ->getResult();
    }

    public function updateCardStatus($var){
        return $this->set('status', 'U')
                    ->where('card_uniqid', $var)
                    ->update();
    }

    public function verifyCardStatus($var){
         $result = $this->select('status')
                     ->where('card_uniqid', $var)
                     ->get()
                     ->getResult();
         foreach ($result as $row){
             return $row->status;
         }
        return NULL;
    }
}
