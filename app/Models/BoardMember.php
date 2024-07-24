<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BoardMember extends Model
{
    use HasFactory;

    public function boardTitle(): BelongsTo
    {
        return $this->belongsTo(BoardTitle::class);
    }

    public static function getMembersSortedByTitle()
    {
        return BoardMember::join('board_titles', 'board_members.board_title_id', '=', 'board_titles.id')
            ->orderBy('board_titles.sorting_index')
            ->select('board_members.*')
            ->get();
    }
}
