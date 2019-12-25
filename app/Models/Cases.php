<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cases extends Model
{
    public $fillable = ['type_case_id', 'number', 'name', 'courts_departments'];
    public $timestamps = true;

    /**
     * Get the type case for the cases.
     */
    public function typeCase()
    {
        return $this->belongsTo('App\Models\TypeCase', 'type_case_id');
    }

    /**
     * Get all defendants for Cases.
     */
    public function defendants()
    {
        return $this->hasMany('App\Models\Defendant', 'case_id');
    }

    /**
     * Get all defendant representatives for Cases.
     */
    public function defendantRepresentatives()
    {
        return $this->hasMany('App\Models\DefendantRepresentative', 'case_id');
    }

    /**
     * Get all plaintiffs for Cases.
     */
    public function plaintiffs()
    {
        return $this->hasMany('App\Models\Plaintiff', 'case_id');
    }

    /**
     * Get all plaintiffs representatives for Cases.
     */
    public function plaintiffRepresentatives()
    {
        return $this->hasMany('App\Models\PlaintiffAgent', 'case_id');
    }

    /**
     * Get all other parties for Cases.
     */
    public function otherParties()
    {
        return $this->hasMany('App\Models\OtherParty', 'case_id');
    }
}
