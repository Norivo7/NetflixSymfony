<?php

namespace App\Helpers;

use App\Repository\SubuserRepository;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\RequestStack;

class LogicHelper
{
    private SubuserRepository $subuserRepository;
    private RequestStack $requestStack;
    private UserRepository $userRepository;

    public function __construct
    (
        SubuserRepository $subuserRepository,
        RequestStack $requestStack,
        UserRepository $userRepository
    )
    {
        $this->subuserRepository = $subuserRepository;
        $this->requestStack = $requestStack;
        $this->userRepository = $userRepository;
    }

    public function isMovieLikedByCurrentUser(int $movieId, ?array $liked): bool
    {
        return in_array($movieId, array_column($liked, 'id'));
    }

    public function getCurrentSubuserIdFromSession()
    {
        $subuser = $this->requestStack->getSession()->get('filter');
        if ($subuser !== null) return reset($subuser);
        return 'subUser not found';
    }

    public function getOtherSubusers($currentUser): array
    {
        $subuser = $this->requestStack->getSession()->get('filter');
        $allSubusers = $this->subuserRepository->findBy(array('subaccountOf' => $currentUser));
        $subuserId = reset($subuser);
        $currentSubuser = $this->subuserRepository->find($subuserId);
        $subuserPosition = array_keys($allSubusers, $currentSubuser);
        unset($allSubusers[reset($subuserPosition)]);
        return array_values($allSubusers);
    }

    //                  TRANSFORMING ARRAYS ( MY HEAD HURTS )
    //                               FOR LOOP
    // for every movie element in movies, check if current subuser liked the movie, then
    // transform movies -> add isLiked value to the array, push "true" or "false" accordingly
    // mandatory for my modal rendering

    public function transformArrayForModal($videos, $currentProfileId){
        $videoCount = count($videos);
        for ($video=0 ;$video < $videoCount; $video++){
            if ($videos[$video] !== null && $videos[$video]['likedBy'] !== null ) {
                $isVideoLikedByCurrentProfile = in_array($currentProfileId, array_column($videos[$video]['likedBy'], 'id'));
                $videos[$video]['isLiked'] = $isVideoLikedByCurrentProfile;
            }
        }
        return $videos;
    }
}