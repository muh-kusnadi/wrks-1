<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Student extends Model
{
    protected $fillable = [
        'name', 'phone_number', 'address', 'gender', 'religion', 'user_id'
    ];

    public function store($data)
    {
        return $this->insert([
            'name'          => $data->name,
            'phone_number'  => $data->phone_number,
            'address'       => $data->address,
            'gender'        => $data->gender,
            'religion'      => $data->religion,
            'user_id'       => $data->user_id,
            'created_at'    => Carbon::now()
        ]);
    }

    public function getOne($id)
    {
        return $this->where('id', $id)->first();
    }

    public function updateData($data, $id)
    {
        return $this->where('id', $id)
                    ->update([
                        'name'          => $data->name,
                        'phone_number'  => $data->phone_number,
                        'address'       => $data->address,
                        'gender'        => $data->gender,
                        'religion'      => $data->religion,
                        'user_id'       => $data->user_id,
                        'updated_at'    => Carbon::now()
                    ]);
    }
}
