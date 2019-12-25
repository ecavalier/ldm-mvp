<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Submitter extends Model
{
    public $fillable = ['name'];

    /**
     * Get all plaintiffs for type Author.
     */
    public function plaintiffs()
    {
        return $this->hasMany('App\Models\Plaintiff', 'submitter_id');
    }

    /**
     * Get all plaintiffs for type Author.
     */
    public function plaintiffRepresentatives()
    {
        return $this->hasMany('App\Models\PlaintiffRepresentative', 'submitter_id');
    }

    /**
     * Get all plaintiffs for type Author.
     */
    public function defendants()
    {
        return $this->hasMany('App\Models\Defendant', 'submitter_id');
    }

    /**
     * Get all plaintiffs for type Author.
     */
    public function defendantsRepresentatives()
    {
        return $this->hasMany('App\Models\DefendantsRepresentative', 'submitter_id');
    }

    /**
     * Get all plaintiffs for type Author.
     */
    public function otherParty()
    {
        return $this->hasMany('App\Models\OtherParty', 'submitter_id');
    }
}