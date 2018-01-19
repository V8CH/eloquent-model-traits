<?php
/**
 * @author Robert Pratt <bpong@v8ch.com>
 * @copyright Robert Pratt 2018
 */

namespace V8CH\EloquentModelTraits;

trait HasTeamScope
{

    /**
     * Scope a query to only include Model on the Team of the User's selected context
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeOnTeam($query)
    {
        return $query->where('team_id', request()->user()->selected_context->team_id);
    }
}
