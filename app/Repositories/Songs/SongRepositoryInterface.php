<?php namespace App\Repositories\Songs;

interface SongRepositoryInterface
{
    public function getAllPublished();

    public function findOnlyPublished();
}

?>
