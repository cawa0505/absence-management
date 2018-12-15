<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $group_id
 * @property int $branch_id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $tel
 * @property string $created_at
 * @property string $updated_at
 * @property Branch $branch
 * @property Group $group
 * @property AbsenceDetail[] $absenceDetails
 */
class Student extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['group_id', 'branch_id', 'first_name', 'last_name', 'email', 'tel', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function branch()
    {
        return $this->belongsTo('App\Branch');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function group()
    {
        return $this->belongsTo('App\Group');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function absenceDetails()
    {
        return $this->hasMany('App\AbsenceDetail');
    }
}
