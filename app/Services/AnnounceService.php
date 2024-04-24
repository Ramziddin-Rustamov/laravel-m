<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Cache;
use App\Repositories\AnnouncementRepository;

class AnnounceService
{
    protected $announcementRepository;

    public function __construct(AnnouncementRepository $announcementRepository)
    {
        $this->announcementRepository = $announcementRepository;
    }

    public function getAllAnnouncements()
    {
        return $this->announcementRepository->getAll();
    }
    
    public function getAllForAuth()
    {
        return $this->announcementRepository->getAllForAuth();
    }

    public function getAnnouncementById($id)
    {
        return $this->announcementRepository->getById($id);
    }

    public function createAnnouncement(array $data)
    {
        return $this->announcementRepository->create($data);
    }


    public function updateAnnouncement($id, array $data)
    {
        return $this->announcementRepository->update($id, $data);
    }

    public function deleteAnnouncement($id)
    {
        // dd("a");
        return $this->announcementRepository->delete($id);
    }
}